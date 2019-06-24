<?php
/**
 * Created by PhpStorm.
 * User: skillup_student
 * Date: 05.06.19
 * Time: 19:29
 */
function saveUser(string $firs_tname, string $surname, string $email, string $password):bool
{  $pdo= new  PDO('mysql:host=localhost;dbname=userrtest', 'root', 'root');
$query= $pdo->prepare('
            INSERT into users (first_name, last_name, password, email)
            values (:first_name, :last_name,:password,:email)');
$query->bindValue('first_name', $firs_tname);
    $query->bindValue('last_name', $surname);
    $query->bindValue('password', $password);
    $query->bindValue('email', $email);
$query->execute();
    return true;
}