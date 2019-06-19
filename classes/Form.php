<?php

class Form
{ //это свойство класса
    /**
     * @var FormElement[]
     */
 private $elements;
    /**
     * @var  string
     */
 private $method;
    /**
     * @var boolean
     */
 private $isSubmitted=false;

 public function __construct(string  $method='post')
 {
     $method = strtolower($method);
     $this->method = $method;
 }

    public function add (FormElement $element)
{
    $this->elements[$element->getName()]=$element;

}

    public function getElements()
    {
        return $this->elements;
    }
    public function render()
    {
        $html=sprintf('<form method="%s">',$this->method);
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
           if (isset($data[$element->getName()]))
           {  $this->isSubmitted=true;
               $element->setValue($data[$element->getName()]);
           }
        }
        foreach ($this->elements as $element)
        {
            if ($element->getError())
            {
                $this->isSubmitted=false;
                break;
            }
        }
    }
    public function getValue($name)
    {
        return $this->elements[$name]->getValue();
    }

    public function isSubmitted(): bool
    {
        return $this->isSubmitted;
    }
}