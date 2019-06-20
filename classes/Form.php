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
protected $param;
    /**
     * @var string
     */
protected $name;
    /**
     * @var string
     */
protected $type;
    /**
     * @var string
     */
    protected $value;

   private function array(array $input) :string
   {    $i='';
        if($input['type']=='text' or $input['type']=='password' or $input['type']=='email' or $input['type']=='submit')
              {
                  $i .= '<input type='.$input['type'].' ';
              }elseif ($input['type']=='form')
               {
                   $i .= sprintf('<%s ', $input['type']);
               }
               elseif ($input['type']=='textarea')
               {
                   $i .= '<textarea ';
               }
       foreach ($input as $key =>$value)
       { if($key=='value' && $input['type']=='textarea')
       {
           $i.=sprintf(' >%s</textarea', $value);
       }
       else
       {
           $i .= sprintf('  %s="%s" ', $key,$value);
       }
       }
       $i.='><br/>';
         return $i;
   }

    public function input(array $input)
    { $input['type']='text';
       $i=$this->array($input);
     return $i;

    }
    public function pass (array $input)
    {   $input['type']='password';
        $i=$this->array($input);
        return $i;
    }
    public function email (array $input)
    {   $input['type']='email';
        $i=$this->array($input);
        return $i;
    }
    public function open (array $input)
    {$input['type']='form';
        $i=$this->array($input);
        return $i;
    }
    public function close( )
    {
        return $i='</form>';

    }
    public function textarea(array $input)
    { $input['type']='textarea';
       if(isset($input['value']))
       {}else{$input['value']='';}
        $i=$this->array($input);
        return $i;
    }
    public function submit(array $input)
    {  $input['type']='submit';
        $i=$this->array($input);
       return $i;
    }
}