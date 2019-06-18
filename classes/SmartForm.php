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
    private function array(array $input) :string
    {$i='';
        foreach ($input as $key =>$value){
            $i.= sprintf('%s="%s" ',$key,strtolower($value));
        }
        return $i;
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



    public function input(array $input)
    {  $i= sprintf('<input ');
        foreach ($input as $key =>$value){
            $i.= sprintf('%s="%s" ',$key,$value);}
        $i.= '><br>';
        return $i;
        //unset($i);
    }
    public function pass (array $pass)
    {$i= sprintf('<input type="password"');
        foreach ($pass as $key =>$value){
            $i.= sprintf('%s="%s"',$key,$value);}
        $i.= '><br>';
        return $i;
    }
    public function open (array $open)
    {$i= sprintf('<form ');
        foreach ($open as $key =>$value){
            $i.= sprintf('%s="%s" ',$key,$value);}
        $i.= '><br>';
        return $i;
    }
    public function close()
    {
        return '</form>';

    }
    public function textarea(array $textarea)
    { $i= sprintf('<textarea ');
        foreach ($textarea as $key =>$value){
            if ($key=='placeholder'){$i.= sprintf(' %s="%s" >',$key,$value);}
            else {$i.= sprintf(' %s ',$value);}
        }
        $i.='</textarea><br>';
        return $i;
    }
    public function submit(array $submit)
    {$i= sprintf('<input ');
        foreach ($submit as $key =>$value){
            $i.= sprintf('type="submit" %s="%s" > ',$key,$value);}
        //  echo '>';
        return $i;
    }
    public function getVal(): string
    {
        return $this->val;
    }
    public function setVal(string $val): void
    {
        $this->val = $val;
        if (empty($val) && $this->required) {
            $this->error = 'Поле не должно быть пустым';
        }
    }
    public function getError(): string
    {
        return $this->error;
    }

}