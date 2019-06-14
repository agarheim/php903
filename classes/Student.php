<?php
/**
 * Created by PhpStorm.
 * User: ro
 * Date: 14.06.19
 * Time: 16:08
 */

class Student extends User
{
    /**
     * @var float
     */
private $stypend;
    /**
     * @var int
     */
private $kurs;

    public function getStypend(): float
    {
        return $this->stypend;
    }

    public function setStypend(float $stypend)
    {
        $this->stypend = $stypend;
    }

    public function getKurs(): int
    {
        return $this->kurs;
    }

    public function setKurs(int $kurs)
    {
        $this->kurs = $kurs;
    }

}