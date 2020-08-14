<?php


namespace App\Command\EmployeeDuty\Employee;

/**
 * Class AbstractEmployee
 * @package App\Command\SkillManagement\Employee
 */
abstract class AbstractEmployee
{
    /**
     * @return array
     */
    abstract function getWorkingDuties(): array;
}