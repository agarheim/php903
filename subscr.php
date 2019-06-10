<?php
/**
 * Created by PhpStorm.
 * User: ro
 * Date: 10.06.19
 * Time: 16:33
 */
$err='';
$g='';
$emailsubs='';

require ('function.php');
if($_SERVER['REQUEST_METHOD']=='POST') {

    if (empty($_REQUEST['emailsubs'])) {
        $err= ("not whrites emailsubs");
    }
    $emailsubs = $_POST['emailsubs'];
    if (filter_var( $emailsubs , FILTER_VALIDATE_EMAIL)) {
        if (saveSubs($emailsubs)) {
            $g = 'Ok, you subscribe.';
        } else {
            $g = 'Oh, no! OMG. Whats hapened ? ';
        }
    }
    else {   echo "E-mail адрес '$emailsubs' указан верно.\n";}
}
include 'formTpl1.php';
