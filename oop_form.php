<?php
spl_autoload_register (function ($className)
{
    $filename =__DIR__.'/classes/'.$className.'.php';
    require $filename;
});
$g='';

$form = new Form();
$form->add(new InputElement('first_name','Имя'));
$form->add(new InputElement('last_name','Фамилия'));
$form->add(new EmailElement('email','Почта'));
$form->add(new PasswordElement('password','Пароль'));
$form->add(new ButtonElement('submit','Зарегаться'));
$form->handleRequest();

if ($form->isSubmitted())
{
    $result=saveUser(
        $form->getValue('firs_name'),
        $form->getValue('last_name'),
        $form->getValue('email'),
        $form->getValue('password')
    );
    if($result)
    {
        $message='Пользвовате зерегистриован';
    }
    else {$message='Ошибка регистрации пользователя';
    }
}
require 'oop_form.tpl.php';