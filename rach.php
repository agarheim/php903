<?php
/**
 * Created by PhpStorm.
 * User: skillup_student
 * Date: 03.06.19
 * Time: 19:37
 */
$g='';
$firs_tname='';
$surname='';
$email='';
$email='';
require ('function.php');
if($_SERVER['REQUEST_METHOD']=='POST') {
    $parametrs = ['names', 'surname', 'email','pwd'];
    foreach ($parametrs as $param) {

        if (empty($_REQUEST[$param])) {
            die ("not whrites $param");
        }
    }
    $firs_tname = $_POST['names'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $password = $_POST['pwd'];
if(saveUser($firs_tname,$surname,$email,$password))
{
    $g='Yes, of course! All right.';
}
else {$g='Oh, no! OMG. Whats hapened ? ';}
}
include 'formTpl.php';
