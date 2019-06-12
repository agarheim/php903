<?php
/**
 * Created by PhpStorm.
 * User: ro
 * Date: 12.06.19
 * Time: 14:58
 */

class EmailElement extends InputElement
{    protected $type ='email';
    public function setType(string $type)
    {
        $this->type = $type;
    }
}
class PasswordElement extends InputElement
{    protected $type ='password';
    public function setType(string $type)
    {
        $this->type = $type;
    }
}