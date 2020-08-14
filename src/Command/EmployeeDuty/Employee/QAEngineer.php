<?php


namespace App\Command\EmployeeDuty\Employee;

/**
 * Class QAEngineer
 * @package App\Command\SkillManagement\Employee
 */
class QAEngineer extends AbstractEmployee
{
    /**
     * @return array
     */
    function getWorkingDuties(): array
    {
        return [
            'testingCode' => 'code testing',
            'talkToManager' => 'communication with manager',
            'setTask' => 'set tasks',
        ];
    }
}