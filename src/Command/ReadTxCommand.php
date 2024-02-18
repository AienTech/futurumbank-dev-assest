<?php

namespace App\Command;

use App\Service\TransactionService;
use App\Type\Payload;
use DateTime;
use Exception;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand(
    name: 'read:tx',
    description: 'Add a short description for your command',
)]
class ReadTxCommand extends Command
{
    private readonly TransactionService $transactionService;

    public function __construct(TransactionService $transactionService)
    {
        parent::__construct();
        $this->transactionService = $transactionService;
    }

    protected function configure(): void
    {
        $today = (new DateTime())->modify('-1 day');
        $aYearAgo = clone $today;
        $aYearAgo->modify('-10 year');

        $this
            ->addArgument('address', InputArgument::REQUIRED, 'Blockchain address')
            ->addArgument('asset', InputArgument::OPTIONAL, 'Blockchain', 'btc')
            ->addOption('from', null, InputOption::VALUE_OPTIONAL, 'Start date', $aYearAgo->format('Y-m-d'))
            ->addOption('to', null, InputOption::VALUE_OPTIONAL, 'End date', $today->format('Y-m-d'))
            ->addOption('threshold', null, InputOption::VALUE_OPTIONAL, 'Threshold for value', 0)
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);

         try {
            $payload = new Payload(
                asset: $input->getArgument('asset'),
                address: $input->getArgument('address'),
                timeframeFrom: $input->getOption('from'),
                timeframeTo: $input->getOption('to'),
                threshold: $input->getOption('threshold')
            );

            $result = $this->transactionService->getAddressTransactions($payload);

            $txt = [
                "Count Tx: %d",
                "Avg. Tx Quantity: %d",
                "---------------------",
                "Asset: %s",
                "Address: %s",
                "Timeframe: from %s to %s",
                "Threshold: %s",
            ];

            $io->success(
                sprintf(
                    implode("\n", $txt),
                    $result->getCount(),
                    $result->getAverageQuantity(),
                    $payload->getAsset(),
                    $payload->getAddress(),
                    $payload->getTimeframeFrom(),
                    $payload->getTimeframeTo(),
                    $payload->getThreshold(),
                )
            );

            return Command::SUCCESS;
         } catch (Exception $e) {
            $io->error(sprintf('%s', $e->getMessage()));
            return Command::FAILURE;
         }
    }
}
