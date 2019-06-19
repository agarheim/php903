<?php
/**
 * Created by PhpStorm.
 * User: ro
 * Date: 14.06.19
 * Time: 16:14
 */

class Form
{
    /**
     * @var string
     */
protected $method;
    /**
     * @var string
     */
protected $value;
    /**
     * @var string
     */
protected $name;
    /**
     * @var string
     */
protected $type;
   private function array(array $input) :string
   {
       $i='';$textarea='';
          foreach ($input as $key => $value) {
              if($value==strtolower('post') or $value==strtolower('get'))
              {
                  $this->method=strtolower($value);
              }
              $this->name=$key;
              $this->value=$value;
              switch (strtolower($value)) {
                  case 'text':
                      $i .= sprintf('<input  %s="%s" ', $this->name, $this->value);
                      break;
                  case 'password':
                      $i .= sprintf('<input  %s="%s" ', $this->name, $this->value);
                      break;
                  case 'textarea':
                      $i .= sprintf('<textarea %s="%s" ', $this->name, $this->value);
                      $textarea = true;
                      break;
                  case 'form':
                      $i .= sprintf('<%s ', $this->value);
                      break;
                  case 'submit':
                      $i .= sprintf('<input  %s="%s" ', $this->name, $this->value);
                      break;
                  case 'close':
                      $i .= '</form" ';
                      break;
                  default:
                      $i .= sprintf(' %s="%s" ', $this->name, $this->value);
              }
          }
           if ($textarea) {
               $i .= '></textarea><br>';
           } else {
               $i .= '><br>';
           }

         return $i;
   }

    public function input(array $input)
    {
       $i=$this->array($input);
     return $i;

    }
    public function pass (array $input)
    {
        $i=$this->array($input);
        return $i;
    }
    public function open (array $input)
    {
        $i=$this->array($input);
        return $i;
    }
    public function close( )
    {$input=['type'=>'close'];
        return $i=$this->array( $input);

    }
    public function textarea(array $input)
    {
        $i=$this->array($input);
        return $i;
    }
    public function submit(array $input)
    {  $i=$this->array($input);
       return $i;
    }

    public function getValue(): string
    {
        return $this->value;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getType(): string
    {
        return $this->type;
    }


}