<?php

namespace App\Command;

use App\Service\AlertEngineService;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class RunAlertsCommand extends Command
{
    protected static $defaultName = 'app:run-alerts';

    public function __construct(
        private AlertEngineService $alertService
    ) {
        parent::__construct();
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $output->writeln('Running alert engine...');

        $this->alertService->run();

        $output->writeln('Alerts executed successfully!');

        return Command::SUCCESS;
    }
}