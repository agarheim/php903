<?php
/**
 * Created by PhpStorm.
 * User: ro
 * Date: 14.06.19
 * Time: 14:41
 */

class Worker1
{
    /**
     * @var string
     */
 private $name;
    /**
     * @var int
     */
 private $age=0;
    /**
     * @var float
     */
 private $salary;
// public function __construct($name, $age,$salary)
// {
//     $this->name=$name;
//     $this->age=$age;
//     $this->salary=$salary;
// }

      public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

     public function getAge(): int
    {
        return $this->age;
    }

    public function setAge(int $age)
    {

       $this->age = $age;
    }

    public function getSalary(): float
    {
        return $this->salary;
    }

    public function setSalary(float $salary)
    {
        $this->salary = $salary;
    }


}