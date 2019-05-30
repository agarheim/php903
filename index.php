<?php
echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>-------------------------------1-----------------------------<br/>';
$a =[1,2,3,4,5];
$count=0;
foreach ($a as $value) {
    $value = $value * 2;
    $count+=$value;
    echo "sqrt : $value <br /> count : $count <br />";
}
unset ($count, $value);
echo '--------------------------------2----------------------------<br/>';
$name=['Коля'=>200, 'Вася'=> 300, 'Петя'=>400];
foreach ($name as $key => $value) {
    $value = $value * 2;

    echo "$key - зарплата $value долларов. <br /> ";
}
unset ($key, $value);
?>
<p>-------------------------------3-------------------</p>
<?php
$week=['Понедельник'=>1, 'Вторник'=>2, 'Среда'=>3, 'Четверг'=>4, 'Пятница'=>5];
$day= date(N);
foreach ($week as $key => $value) {
    if ($value == $day) echo "<em> $key </em><br />";  else echo "$key <br />";

}
unset ($key, $value);
?>

<p>------------------------------4-------------------</p>
<?php
$arr = ['green'=>'зеленый', 'red'=>'красный', 'blue'=>'голубой'];
foreach ($arr as $key => $value) {
    $en[]=$key;
    $ru[]=$value;
}
print_r($en);
echo '<br />';
print_r($ru);
echo '
</body>
</html>';
