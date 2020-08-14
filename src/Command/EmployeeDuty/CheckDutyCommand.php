<?php


namespace App\Command\EmployeeDuty;


use App\Command\EmployeeDuty\Employee\Designer;
use App\Command\EmployeeDuty\Employee\Developer;
use App\Command\EmployeeDuty\Employee\Manager;
use App\Command\EmployeeDuty\Employee\QAEngineer;
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
class CheckDutyCommand extends Command
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
        $this->employService = $employService;
        parent::__construct();
    }

    protected function configure()
    {
        $this->setName('can')
            ->setDescription('Check duty of employee')

            ->addArgument('user', InputArgument::REQUIRED, 'Pass the user role.')
            ->addArgument('skill', InputArgument::REQUIRED, 'Pass the user skill.')
            ->setHelp(<<<EOT
user can have such a value: developer, designer, qa, manager. 
skill can have such a value: writeCode, testingCode, talkToManager, paint, setTask.
EOT
    );
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
        $skill = $input->getArgument('skill');

        $result = $this->employService->checkDuty($role, $skill);

        $output->writeln(var_export($result));
    }
}