<?php

namespace App\Command;

use App\Entity\SubscriptionPack;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand(
    name: 'app:seed-packs',
    description: 'Seeds the database with sample subscription packs',
)]
class SeedPacksCommand extends Command
{
    public function __construct(
        private EntityManagerInterface $entityManager
    ) {
        parent::__construct();
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);

        // Clear existing packs
        $connection = $this->entityManager->getConnection();
        $connection->executeStatement('DELETE FROM subscription_pack');

        $packs = [
            [
                'name' => 'Basic',
                'description' => 'Perfect for individuals getting started',
                'price' => '9.99',
                'currency' => 'EUR',
                'durationDays' => 30,
                'icon' => '🚀',
                'color' => '#3b82f6',
                'isPopular' => false,
                'features' => [
                    'Access to basic features',
                    'Email support',
                    '5 GB storage',
                    'Mobile app access',
                    'Basic analytics',
                ]
            ],
            [
                'name' => 'Professional',
                'description' => 'Best for professionals and small teams',
                'price' => '29.99',
                'currency' => 'EUR',
                'durationDays' => 30,
                'icon' => '💼',
                'color' => '#ef4444',
                'isPopular' => true,
                'features' => [
                    'All Basic features',
                    'Priority support',
                    '50 GB storage',
                    'Advanced analytics',
                    'Custom integrations',
                    'Team collaboration',
                ]
            ],
            [
                'name' => 'Enterprise',
                'description' => 'For large organizations with advanced needs',
                'price' => '99.99',
                'currency' => 'EUR',
                'durationDays' => 30,
                'icon' => '🏢',
                'color' => '#a855f7',
                'isPopular' => false,
                'features' => [
                    'All Professional features',
                    'Dedicated support',
                    'Unlimited storage',
                    'Custom analytics',
                    'API access',
                    'SLA guarantee',
                    'Advanced security',
                ]
            ],
            [
                'name' => 'Student',
                'description' => 'Special offer for students',
                'price' => '4.99',
                'currency' => 'EUR',
                'durationDays' => 30,
                'icon' => '🎓',
                'color' => '#22c55e',
                'isPopular' => false,
                'features' => [
                    'Access to basic features',
                    'Email support',
                    '10 GB storage',
                    'Mobile app access',
                    'Student resources',
                ]
            ],
        ];

        foreach ($packs as $packData) {
            $pack = new SubscriptionPack();
            $pack->setName($packData['name']);
            $pack->setDescription($packData['description']);
            $pack->setPrice($packData['price']);
            $pack->setCurrency($packData['currency']);
            $pack->setDurationDays($packData['durationDays']);
            $pack->setIcon($packData['icon']);
            $pack->setColor($packData['color']);
            $pack->setIsPopular($packData['isPopular']);
            $pack->setFeatures($packData['features']);
            $pack->setIsActive(true);

            $this->entityManager->persist($pack);
        }

        $this->entityManager->flush();

        $io->success('Successfully seeded ' . count($packs) . ' subscription packs!');

        return Command::SUCCESS;
    }
}
