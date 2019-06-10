<?php
/**
 * Created by PhpStorm.
 * User: ro
 * Date: 07.06.19
 * Time: 16:09
 */

$v=[];
$g='';
$i=1;
$handle = @fopen("users.txt", "r");
if ($handle) {
    while (($buffer = fgets($handle, 4096)) !== false) {
        $v[]=explode("\t",$buffer) ;
    }
    if (!feof($handle)) {
        echo "Ошибка: fgets() неожиданно потерпел неудачу\n";
    }
    fclose($handle);
}
var_dump($v);
foreach ($v as $key => $value4);
{
  print_r($key);
   /* foreach ($value as $value1)
    {
        $g .= $value1;//"<tr><td>$</td><td>$b</td><td>$c</td><td>$d</td></tr>";
    }*/
}
echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>form register</title>
</head>
<body>
<table>
<tr><td>
</table>
'.$g.'
<form action="rach.php" method="post">
   <label for="name">Frist Name</label> <input id="name" name="names" value="">
   <br />
    <label for="surname">Sur Name</label> <input id="surname" name="surname" value="">
    <br />
    <label for="email">email</label><input id="email" type="email" name="email"  value="">
    <br />
    <label for="pwd">password</label><input id="pwd" type="password" name="pwd" value="">
    <br />
    <button type="submit" >Send</button>

</form>
</body>
</html>';