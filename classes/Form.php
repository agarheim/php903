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
    /**
     * @var
     */
 private $method;
    /**
     * @var boolean
     */
 private $isSubmitted='false';
 public function __construct(string  $method='post')
 {
     $this->method=strtolower($method);
 }

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
        $html=sprintf('<form method="%s" action="">',$this->method);
        foreach ($this->elements as $element)
        {
            $html.=$element->render().'<br>';

        }
        $html.='</form>';
        return $html;
    }
    public function handleRequest()
    {
        $data= $this->method=='post'? $_POST: $_GET;
        foreach ($this->elements as $element) {
           if ($data[$element->getName()])
           {  $this->isSubmitted='true';
               $element->setValue($data[$element->getName()]);
           }
        }
    }

    public function getValue($name)
    {
        return $this->elements[$name]->getValue;
    }
    public function isSubmitted():bool
    {
        return $this->isSubmitted;
    }
}