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

    public function input(array $input)
    {  echo sprintf('<input ');
        foreach ($input as $key =>$value){
        echo sprintf('%s="%s" ',$key,$value);}
  echo '><br>';
    }
    public function pass (array $pass)
    {echo sprintf('<input ');
        foreach ($pass as $key =>$value){
        echo sprintf('%s="%s"',$key,$value);}
     echo '><br>';

    }
    public function open (array $open)
    {echo sprintf('<form ');
        foreach ($open as $key =>$value){
       echo sprintf('%s="%s" ',$key,$value);}
    echo '><br>';

    }
    public function close()
    {
        return '</form>';

    }
    public function textarea(array $textarea)
    { echo sprintf('<textarea ');
        foreach ($textarea as $key =>$value){
        if ($key=='placeholder'){echo sprintf(' %s="%s" >',$key,$value);}
        else {echo sprintf(' %s ',$value);}
        }
        echo'</textarea><br>';

    }
    public function submit(array $submit)
    {echo sprintf('<input ');
        foreach ($submit as $key =>$value){
        echo sprintf('type="submit" %s="%s" > ',$key,$value);}
      //  echo '>';

    }
}