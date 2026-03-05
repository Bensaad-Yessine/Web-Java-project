<?php

namespace App\SeanceNotificationBundle\EventSubscriber;

use App\Entity\Seance;
use App\Repository\UserRepository;
use Doctrine\ORM\Events;
use Doctrine\Persistence\Event\LifecycleEventArgs;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Psr\Log\LoggerInterface;
class SeanceSubscriber
{
    public function __construct(
        private MailerInterface $mailer,
        private UserRepository $userRepo,
        private LoggerInterface $logger,
        private string          $sender
    ) {}

    public function postPersist(LifecycleEventArgs $args): void
    {
        $this->logger->info('SeanceSubscriber TRIGGERED', ['action' => 'postPersist']);
        $this->handleEvent($args, 'Création');
    }

    public function postUpdate(LifecycleEventArgs $args): void
    {
        $this->logger->info('SeanceSubscriber TRIGGERED', ['action' => 'postUpdate']);
        $this->handleEvent($args, 'Modification');
    }

    public function postRemove(LifecycleEventArgs $args): void
    {
        $this->logger->info('SeanceSubscriber TRIGGERED', ['action' => 'postRemove']);
        $this->handleEvent($args, 'Suppression');
    }

    private function handleEvent(LifecycleEventArgs $args, string $action): void
    {
        $entity = $args->getObject();
        if (!$entity instanceof Seance) {
            return;
        }

        // Les séances de révision sont personnelles → pas de notification email
        if ($entity->getTypeSeance() === 'Révision') {
            $this->logger->info('SeanceSubscriber SKIP (révision personnelle)', ['seance_id' => $entity->getId()]);
            return;
        }

        $classe = $entity->getClasse();
        if (!$classe) {
            return;
        }

        // 1) récupérer uniquement les étudiants (méthode de repo qui exclut les admins)
        $users = $this->userRepo->findStudentsByClasseWithoutAdmin($classe);

        // pour les logs on peut compter tous les inscrits
        $allUsers = $this->userRepo->findUsersByClasse($classe);

        $this->logger->info('SeanceSubscriber triggered', [
            'action' => $action,
            'seance_id' => $entity->getId(),
            'classe_id' => method_exists($classe, 'getId') ? $classe->getId() : null,
            'all_users' => count($allUsers),
            'notified_users' => count($users),
        ]);

        if (count($users) === 0) {
            return;
        }

        $subject = sprintf('%s de séance - Classe %s', $action, $classe->getNom());
        $body = $this->buildBody($entity, $action);

        // ⚠️ mieux: envoyer 1 email par user (plus fiable)
        try {
            foreach ($users as $user) {
                if (!$user->getEmail()) continue;

                $email = (new Email())
                    ->from($this->sender)
                    ->to($user->getEmail())
                    ->subject($subject)
                    ->text($body);

                $this->mailer->send($email);
            }

        } catch (\Throwable $e) {
            $this->logger->error('Failed to send seance notification', [
                'exception' => $e->getMessage(),
                'seance' => $entity->getId(),
            ]);

        }
    }

    private function buildBody(Seance $seance, string $action): string
    {
        $msg = "Action: $action\n";
        $msg .= sprintf("Jour: %s\n", $seance->getJour());
        $msg .= sprintf("Type: %s\n", $seance->getTypeSeance());
        $msg .= sprintf("Mode: %s\n", $seance->getMode());
        $msg .= sprintf("Classe: %s\n", $seance->getClasse()?->getNom());

        // NOTE: selon ton entité Salle, c’est peut-être getNom() et pas getName()
        $salle = $seance->getSalle();
        if ($salle) {
            $msg .= sprintf("Salle: %s\n", method_exists($salle, 'getNom') ? $salle->getNom() : (method_exists($salle, 'getName') ? $salle->getName() : ''));
        }

        $msg .= sprintf("Début: %s\n", $seance->getHeureDebut()?->format('d/m/Y H:i'));
        $msg .= sprintf("Fin: %s\n", $seance->getHeureFin()?->format('d/m/Y H:i'));
        return $msg;
    }
}