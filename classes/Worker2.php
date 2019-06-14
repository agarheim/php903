<?php
/**
 * Created by PhpStorm.
 * User: ro
 * Date: 14.06.19
 * Time: 14:55
 */

class Worker2 extends Worker1
{
    public function setAge(int $age)
    {
        if (self::checkAge($age))
        { parent::setAge($age); }
        else {
            echo 'OOPS!';
        }
    }

    private function checkAge($age) :bool
  {
      if($age>=1 && $age<=150)
      {
          return true;
      }
      else
          {
              return false;
          }
  }
}