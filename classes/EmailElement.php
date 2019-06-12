<?php
/**
 * Created by PhpStorm.
 * User: ro
 * Date: 12.06.19
 * Time: 14:58
 */

class EmailElement extends FormElement
{   private $type='email';
    public function render(): string
    {
        $html=sprintf('<label for="%s">%s</label> ',$this->getName(), $this->getLabel());
        $html.=sprintf('<input type="%s" id="%s" name="%s" value="">',$this->type, $this->getName(), $this->getName());
        return $html;
    }
}