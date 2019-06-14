<?php
/**
 * Created by PhpStorm.
 * User: ro
 * Date: 14.06.19
 * Time: 14:13
 */

class Worker
{
    public function __construct()
    {
        echo 'Object is registered<br>';
    }

    /**
     * @var string
     */
    public $name;
    /**
     * @var int
     */
    public $age;
    /**
     * @var float
     */
    public $salary;

}