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
   protected $i='';
   private function array(array $input) :string
   {$i='';
       foreach ($input as $key =>$value){
          $i.= sprintf('%s="%s" ',$key,$value);
       }
         return $i;
   }

    public function input(array $input)
    {  $i= sprintf('<input ');
       $i.=$this->array($input);
        $i.= '><br>';
     return $i;

    }
    public function pass (array $pass)
    {$i= sprintf('<input type="password"');
        $i.=$this->array($pass);
     $i.= '><br>';
        return $i;
    }
    public function open (array $open)
    {$i= sprintf('<form ');
        $i.=$this->array($open);
    $i.= '><br>';
        return $i;
    }
    public function close()
    {
        return '</form>';

    }
    public function textarea(array $textarea)
    { $i= sprintf('<textarea ');
        $i.=$this->array($textarea);
        $i.='></textarea><br>';
        return $i;
    }
    public function submit(array $submit)
    {$i= sprintf('<input type="submit"');
        $i.=$this->array($submit);
       $i.= '> ';
      //  echo '>';
        return $i;
    }
}