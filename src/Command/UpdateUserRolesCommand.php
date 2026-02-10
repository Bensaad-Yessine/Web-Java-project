<?php

namespace App\Command;

use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand(
    name: 'app:update-user-roles',
    description: 'Update user roles from old format to new ROLE_* format',
)]
class UpdateUserRolesCommand extends Command
{
    private UserRepository $userRepository;
    private EntityManagerInterface $entityManager;

    public function __construct(UserRepository $userRepository, EntityManagerInterface $entityManager)
    {
        parent::__construct();
        $this->userRepository = $userRepository;
        $this->entityManager = $entityManager;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);

        $users = $this->userRepository->findAll();
        $updated = 0;

        foreach ($users as $user) {
            $currentRole = $user->getRole();
            $newRole = null;

            // Map old role values to new ones
            if ($currentRole === 'Étudiant' || $currentRole === 'Utilisateur' || $currentRole === 'ROLE_USER') {
                $newRole = 'ROLE_USER';
            } elseif ($currentRole === 'Administrateur' || $currentRole === 'ROLE_ADMIN') {
                $newRole = 'ROLE_ADMIN';
            }

            if ($newRole && $currentRole !== $newRole) {
                $user->setRole($newRole);
                $this->entityManager->persist($user);
                $updated++;
                $io->info("Updated user {$user->getEmail()}: {$currentRole} -> {$newRole}");
            }
        }

        if ($updated > 0) {
            $this->entityManager->flush();
            $io->success("Updated {$updated} user(s) successfully!");
        } else {
            $io->info('No users needed to be updated.');
        }

        return Command::SUCCESS;
    }
}
