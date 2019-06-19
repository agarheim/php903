<?php
/**
 * Created by PhpStorm.
 * User: ro
 * Date: 16.06.19
 * Time: 12:17
 */

class SmartForm extends Form
{/**
 * @var string
 */
    protected $val;
    /**
     * @var bool
     */
    protected $required = false;
    /**
     * @var string
     */

    protected $error = '';
    private $elements;
    /**
     * @var  string
     */
    public function handleRequest()
    {
        $data= $this->method=='post'? $_POST: $_GET;
        foreach ($this->elements as $element) {
            if (isset($data[$element->getName()]))
            {  //$this->isSubmitted=true;
                $element->setValue($data[$element->getName()]);
            }
        }
//        foreach ($this->elements as $element)
//        {
//            if ($element->getError())
//            {
//                $this->isSubmitted=false;
//                break;
//            }
//        }
    }

    public function getVal(): string
    {
        return $this->val;
    }
    public function setValue(string $val): void
    {
        $this->val = $val;

    }


}