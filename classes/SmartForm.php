<?php
/**
 * Created by PhpStorm.
 * User: ro
 * Date: 16.06.19
 * Time: 12:17
 */

class SmartForm extends Form
{
    /**
     * @var bool
     */
    protected $required = false;

    /**
     * @var string
     */

    protected $error = '';

//    private $elements;

   // public function handleRequest()
  //  {

   //     $data= $this->method=='post'? $_POST: $_GET;
     //   var_dump($_POST);
//        foreach ($this->elements as $element) {
//            if (isset($data[$element->getName()]))
//            {  //$this->isSubmitted=true;
//                $element->setValue($data[$element->getName()]);
//            }
//        }
//        foreach ($this->elements as $element)
//        {
//            if ($element->getError())
//            {
//                $this->isSubmitted=false;
//                break;
//            }
//        }
   // }
    public function input(array $input)
    {
        if(isset($_POST[$input['name']]))
        {
        $input['value']=$_POST[$input['name']];
        }

        return parent::input($input);
    }
    public function pass(array $input)
    {
        if(isset($_POST[$input['name']]))
        {
            $input['value']=$_POST[$input['name']];
        }

        return parent::pass($input);
    }
    public function textarea(array $input)
    {
        if(isset($_POST[$input['name']]))
        {
            $input['value']=$_POST[$input['name']];
        }

        return parent::textarea($input);
    }
    public function getValue(): string
    {  echo $this->getValue();
        return $this->value;
    }
    public function setValue(string $value): void
    {
        $this->value = $value;
    }
}