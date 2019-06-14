<?php
/**
 * Created by PhpStorm.
 * User: ro
 * Date: 14.06.19
 * Time: 15:38
 */

class Worker3
{
    /**
     * @var string
     */
    private $name;
    /**
     * @var float
     */
    private $salary;
    /**
     * @var int
     */
    private $age;
    public function __construct(string $name,int $age , float $salary )
    {$this->salary=$salary;
    $this->name=$name;
    $this->age=$age;
    }


    public function getName(): string
    {
        return $this->name;
    }


    public function getSalary(): float
    {
        return $this->salary;
    }
    public function scale():float
    {
       return $this->age*$this->salary;
    }

}