<?php


namespace App\Command\EmployeeDuty;


use App\Command\EmployeeDuty\Service\EmployeeService;
use Exception;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class EmployeeCommand
 * @package App\Command\SkillManagement
 */
class EmployeeCommand extends Command
{
    /**
     * @var EmployeeService
     */
    private $employService;

    /**
     * EmployeeCommand constructor.
     * @param EmployeeService $employService
     */
    public function __construct(EmployeeService $employService)
    {
        parent::__construct();
        $this->employService = $employService;
    }

    protected function configure()
    {
        $this->setName('user')
            ->setDescription('Get employee duties')
            ->setHelp('user can have such a value: developer, designer, qa, manager.')
            ->addArgument('user', InputArgument::REQUIRED, 'Pass the user role.');
    }

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return int|void
     * @throws Exception
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $role = $input->getArgument('user');
        $duties = $this->employService->getDutiesToString($role);

        $output->writeln($duties);
    }
}