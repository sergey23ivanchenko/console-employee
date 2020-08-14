<?php


namespace App\Command\EmployeeDuty\Factory;


use App\Command\EmployeeDuty\EmployeeCommand;
use App\Command\EmployeeDuty\Service\EmployeeService;

/**
 * Class EmployeeCommandFactory
 * @package App\Command\EmployeeDuty\Factory
 */
class EmployeeCommandFactory
{
    /**
     * @param EmployeeService $service
     * @return EmployeeCommand
     */
    public function __invoke(EmployeeService $service)
    {
        return new EmployeeCommand($service);

    }
}