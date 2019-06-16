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
}