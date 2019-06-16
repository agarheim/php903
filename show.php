<?php

spl_autoload_register(function ($className) {
    $filename =__DIR__.'/classes/'.$className.'.php';
    require $filename;

});

$k=new Worker;
$v=new Worker;
$k->name='Nikolya';
$k->age=25;
$k->salary=1000;
$v->salary=2000;
$v->age=26;
$v->name='Vasya';
echo $k->age+$v->age.'<br>';
echo $k->salary+$v->salary;
echo '<br>----------------2-------------------<br>';
$k1=new Worker1;
$v1=new Worker1;
$k1->setName('Nikolya');
$k1->setAge(25);
$k1->setSalary(1000);
$v1->setSalary(2000);
$v1->setAge(26);
$v1->setName('Vasya');
echo $k1->getAge()+$v1->getAge();
echo '<br>';
echo $k1->getSalary()+$v1->getSalary();
echo '<br>----------------3-------------------<br>';
$k2= new Worker2;
$v2= new Worker2;
$k2->setAge(-15);
$k2->setAge(25);
var_dump($k2);
var_dump($v2);

echo '<br>---------------4--------------------<br>';
$k3= new Worker3('Дима', 25, 1000);
echo $k3->scale();
echo '<br>-----------------5------------------<br>';
$k4 =new Worker4;
$v4 =new Worker4;
$k4->setName('Nikolya');
$k4->setAge(25);
$k4->setSalary(1000);
$v4->setSalary(2000);
$v4->setAge(26);
$v4->setName('Vasya');
echo 'Salary : ';
echo $k4->getSalary()+$v4->getSalary();
echo '<br>-----------------6------------------<br><p>';
$form=new Form;
echo  $form->open(['action'=>'show.php', 'method'=>'POST']);
//Код выше выведет <form action="index.php" method="POST">

echo $form->input(['type'=>'text', 'value'=>'!!!']);
//Код выше выведет <input type="text" value="!!!">

echo $form->pass(['value'=>'!!!']);
//Код выше выведет <input type="password" value="!!!">

echo $form->textarea(['placeholder'=>'123', 'value'=>'!!!']);
//Код выше выведет <textarea placeholder="123">!!!</textarea>
echo $form->input(['type'=>'text', 'placeholder'=>'Ваше имя', 'name'=>'name']);
echo $form->submit(['value'=>'go']);
//Код выше выведет <input type="submit" value="go">

echo $form->close();
//Код выше выведет </form>
echo '</p><br>-----------------6------------------<br>';