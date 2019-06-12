<?php
/**
 * Created by PhpStorm.
 * User: skillup_student
 * Date: 10.06.19
 * Time: 19:15
 */

class Form
{ //это свойство класса
    /**
     * @var FormElement[]
     */
 private $elements;
public function add (FormElement $element)
{
    $this->elements[$element->getName()]=$element;

}
    /**
     * @return mixed
     */
    public function getElements()
    {
        return $this->elements;
    }
    public function render()
    {
        $html='<form method="post" action="">';
        foreach ($this->elements as $element)
        {
            $html.=$element->render().'<br>';

        }
        $html.='</form>';
        return $html;
    }
}