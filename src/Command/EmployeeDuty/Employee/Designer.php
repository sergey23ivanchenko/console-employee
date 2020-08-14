<?php


namespace App\Command\EmployeeDuty\Employee;

/**
 * Class Designer
 * @package App\Command\SkillManagement\Employee
 */
class Designer extends AbstractEmployee
{
    /**
     * @return array
     */
    function getWorkingDuties(): array
    {
        return [
            'talkToManager' => 'communication with manager',
            'paint' => 'draw design',
        ];
    }
}