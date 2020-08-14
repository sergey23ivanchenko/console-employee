<?php


namespace App\Command\EmployeeDuty\Factory;


use App\Command\EmployeeDuty\CheckDutyCommand;
use App\Command\EmployeeDuty\Service\EmployeeService;

/**
 * Class EmployeeCommandFactory
 * @package App\Command\EmployeeDuty\Factory
 */
class CheckDutyCommandFactory
{
    /**
     * @param EmployeeService $service
     * @return CheckDutyCommand
     */
    public function __invoke(EmployeeService $service)
    {
        return new CheckDutyCommand($service);

    }
}