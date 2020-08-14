<?php


namespace App\Command\EmployeeDuty\Service;


use App\Command\EmployeeDuty\Employee\AbstractEmployee;
use App\Command\EmployeeDuty\Employee\Designer;
use App\Command\EmployeeDuty\Employee\Developer;
use App\Command\EmployeeDuty\Employee\Manager;
use App\Command\EmployeeDuty\Employee\QAEngineer;
use Exception;

/**
 * Class EmployeeService
 * @package App\Command\SkillManagement\Service
 */
class EmployeeService
{
    /**
     * @param string $role
     * @return string
     * @throws Exception
     */
    public function getDutiesToString(string $role): string
    {
        $employee =$this->getEmployeeClass($role);
        return implode("\n", $employee->getWorkingDuties());
    }

    /**
     * @param string $role
     * @param string $duty
     * @return bool
     * @throws Exception
     */
    public function checkDuty(string $role, string $duty): bool
    {
        $employee =$this->getEmployeeClass($role);
        $duties = $employee->getWorkingDuties();

        $result = false;
        if (key_exists($duty, $duties)) {
            $result = true;
        }

        return $result;
    }

    /**
     * @param string $employee
     * @return AbstractEmployee
     * @throws Exception
     */
    private function getEmployeeClass(string $employee): AbstractEmployee
    {
        switch($employee) {
            case 'developer':
                $employee = new Developer();
                break;
            case 'designer':
                $employee = new Designer();
                break;
            case 'qa':
                $employee = new QAEngineer();
                break;
            case 'manager':
                $employee = new Manager();
                break;
            default:
                throw new Exception('invalid user role');
        }
        return $employee;
    }
}