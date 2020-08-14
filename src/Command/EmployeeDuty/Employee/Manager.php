<?php


namespace App\Command\EmployeeDuty\Employee;

/**
 * Class Manager
 * @package App\Command\SkillManagement\Employee
 */
class Manager extends AbstractEmployee
{
    /**
     * @return array
     */
    function getWorkingDuties(): array
    {
        return [
            'setTask' => 'set tasks',
        ];
    }

}