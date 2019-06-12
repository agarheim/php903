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
$form->add(new ButtonElement('submit','Добавить'));
require 'oop_form.tpl.php';