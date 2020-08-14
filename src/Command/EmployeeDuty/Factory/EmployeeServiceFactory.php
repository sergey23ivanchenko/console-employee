<?php


namespace App\Command\EmployeeDuty\Factory;


use App\Command\EmployeeDuty\Service\EmployeeService;

/**
 * Class EmployeeServiceFactory
 * @package App\Command\EmployeeDuty\Factory
 */
class EmployeeServiceFactory
{
    /**
     * @return EmployeeService
     */
    public function __invoke()
    {
        return new EmployeeService();
    }
}