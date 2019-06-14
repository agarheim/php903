<?php
/**
 * Created by PhpStorm.
 * User: ro
 * Date: 14.06.19
 * Time: 16:03
 */

class Worker4 extends User
{
    /**
     * @var float
     */
    private $salary;

     public function getSalary(): float
    {
        return $this->salary;
    }

     public function setSalary(float $salary)
    {
        $this->salary = $salary;
    }

}