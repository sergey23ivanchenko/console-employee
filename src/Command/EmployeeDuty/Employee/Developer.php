<?php


namespace App\Command\EmployeeDuty\Employee;

/**
 * Class Developer
 * @package App\Command\SkillManagement\Employee
 */
class Developer extends AbstractEmployee
{
    /**
     * @return array
     */
    function getWorkingDuties(): array
    {
        return [
            'writeCode' => 'code writing',
            'testingCode' => 'code testing',
            'talkToManager' => 'communication with manager',
        ];
    }
}