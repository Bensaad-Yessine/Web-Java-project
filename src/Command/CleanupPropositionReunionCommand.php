<?php

namespace App\Command;

use App\Entity\PropositionReunion;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand(
    name: 'app:cleanup-proposition-reunion',
    description: 'Cleanup and process proposition reunions based on status and votes',
)]
class CleanupPropositionReunionCommand extends Command
{
    public function __construct(
        private EntityManagerInterface $entityManager,
    ) {
        parent::__construct();
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        $now = new \DateTime();

        $repository = $this->entityManager->getRepository(PropositionReunion::class);

        // 1. Delete rejected propositions older than 1 day
        $oneDayAgo = (clone $now)->modify('-1 day');
        $rejectedPropositions = $repository->createQueryBuilder('p')
            ->where('p.status = :status')
            ->andWhere('p.dateCreation < :date')
            ->setParameter('status', 'rejected')
            ->setParameter('date', $oneDayAgo)
            ->getQuery()
            ->getResult();

        foreach ($rejectedPropositions as $proposition) {
            $this->entityManager->remove($proposition);
            $io->writeln(sprintf('Deleted rejected proposition: %s (ID: %d)', $proposition->getTitre(), $proposition->getId()));
        }

        // 2. Delete pending propositions where meeting time has passed
        $pendingPropositions = $repository->createQueryBuilder('p')
            ->where('p.status = :status')
            ->setParameter('status', 'En attente')
            ->getQuery()
            ->getResult();

        foreach ($pendingPropositions as $proposition) {
            $meetingEnd = (clone $proposition->getDateReunion())->setTime(
                (int)$proposition->getHeureFin()->format('H'),
                (int)$proposition->getHeureFin()->format('i'),
                0
            );

            if ($meetingEnd < $now) {
                $this->entityManager->remove($proposition);
                $io->writeln(sprintf('Deleted expired pending proposition: %s (ID: %d)', $proposition->getTitre(), $proposition->getId()));
            }
        }

        // 3. Accept propositions where all votes are yes
        $pendingPropositions = $repository->createQueryBuilder('p')
            ->where('p.status = :status')
            ->setParameter('status', 'En attente')
            ->getQuery()
            ->getResult();

        foreach ($pendingPropositions as $proposition) {
            $group = $proposition->getIdGroupe();
            $totalMembers = $group->getNbrMembre();
            $yesVotes = $proposition->getNbrVoteAccept();

            if ($yesVotes === $totalMembers) {
                $proposition->setStatus('accepted');
                $this->entityManager->persist($proposition);
                $io->writeln(sprintf('Accepted proposition: %s (ID: %d)', $proposition->getTitre(), $proposition->getId()));
            }
        }

        $this->entityManager->flush();

        $io->success('Cleanup completed.');

        return Command::SUCCESS;
    }
}
