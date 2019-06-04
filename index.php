<?php
 $write='';
 $write2='';
 $write3='';


$a =[1,2,3,4,5];
$count=0;
foreach ($a as $value) {
    $value = $value * 2;
    $count+=$value;
    $write.= "sqrt : $value <br /> count : $count <br />";
}
unset ($count, $value);

$name=['Коля'=>200, 'Вася'=> 300, 'Петя'=>400];
foreach ($name as $key => $value) {
    $value = $value * 2;

    $write2.= "$key - зарплата $value долларов. <br /> ";
}
unset ($key, $value);

$week=['Понедельник'=>1, 'Вторник'=>2, 'Среда'=>3, 'Четверг'=>4, 'Пятница'=>5];
$day= date('N');
foreach ($week as $key => $value) {
    if ($value == $day) $write3.= "<em> $key </em><br />";  else $write3.="$key <br />";

}
unset ($key, $value);

$arr = ['green'=>'зеленый', 'red'=>'красный', 'blue'=>'голубой'];
foreach ($arr as $key => $value) {
    $en[]=$key;
    $ru[]=$value;
}
$write4= implode ('|',$en);
$write5= implode ('|',$ru);
require ('templ.php');


