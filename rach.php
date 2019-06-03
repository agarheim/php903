<?php
/**
 * Created by PhpStorm.
 * User: skillup_student
 * Date: 03.06.19
 * Time: 19:37
 */
if($_SERVER['REQUEST_METHOD']=='POST') {
    $parametrs = ['operand1', 'operand2', 'operation'];
    foreach ($parametrs as $param) {

        if (empty($_REQUEST[$param])) {
            die ("not whrite $param");
        }
    }
    $o1 = floatval($_REQUEST['operand1']);
    $o2 = floatval($_REQUEST['operand2']);
    $d = $_REQUEST['operation'];

    switch ($d) {
        case '+':
            $result = $o1 + $o2;
            break;
        case '-':
            $result = $o1 - $o2;
            break;
        case '*':
            $result = $o1 * $o2;
            break;
        case '/':
            $result = $o1 + $o2;
            break;
        default:
            die('not enough operator');
    }
   // echo $o1 . $d . $o2 . '=' . $result;
}
include 'formTpl.php';
