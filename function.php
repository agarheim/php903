<?php
/**
 * Created by PhpStorm.
 * User: skillup_student
 * Date: 05.06.19
 * Time: 19:29
 */
function saveUser(string $firs_tname, string $surname, string $email, string $password):bool
{
    $file=fopen('users.txt', 'a');
    if ($file===false)
    {
        return false;
    }

    $row=sprintf("%s\t%s\t%s\t%s\n",$firs_tname,$surname,$email,$password);
    fputs($file,$row);
    fclose($file);
    return true;
}
function showUser(array $v):string
{$g='';
    foreach ($v as $value)
    { foreach ($value as $key =>$value1)
    {
        $g .= '<td>'.$value1.'</td>';
        if( max( array_keys( $value ) )==$key)$g.='</tr><tr>';
    }

    }
 return $g;
}

function saveSubs(string $email):bool
{
    $file=fopen('subscribers.txt', 'a');
    if ($file===false)
    {
        return false;
    }

    $row=sprintf("%s\t\n",$email);
    fputs($file,$row);
    fclose($file);
    return true;
}