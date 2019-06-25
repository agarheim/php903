<?php
/**
 * Created by PhpStorm.
 * User: ro
 * Date: 25.06.19
 * Time: 14:37
 */

$pdo= new  PDO('mysql:host=localhost;dbname=homework;charset=utf8', 'root', 'root');
$query= $pdo->query('SELECT u.id, u.name, o.id as statid FROM users u, orders o 
where o.satatus=0 and u.id=o.user_id');
$query1= $pdo->query('SELECT  u.name FROM users u, orders o
 where o.satatus=0 and u.id=o.user_id');
$query2= $pdo->query('SELECT  u.id, u.name, COUNT(*) as cou FROM users u, orders o where o.satatus=1 and u.id=o.user_id
group by u.id HAVING count(o.satatus)>=3 ');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Show users</title>
    <style lang="ru">td {border: 1px solid black;
    </style>
</head>
<body>
<p>
<table>
    <tr>
        <th>ID Users</th>
        <th>Name</th>
        <th>Order ID</th>
    </tr>
    <?php while ($row=$query->fetch()):?>
        <tr>
            <td><?=$row['id']?></td>
            <td><?=$row['name']?></td>
            <td><?=$row['statid']?></td>
        </tr>
    <?php endwhile;?>
</table>
<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Количество выполненных заказов</th>
    </tr>
    <?php while ($row=$query1->fetch()):?>
        <tr>
            <td>-</td>
            <td><?=$row['name']?></td>
            <td>-</td>
        </tr>
    <?php endwhile;?>
</table>
<table>
    <tr>
        <th>-</th>
        <th>Name</th>
        <th>-</th>
    </tr>
    <?php while ($row=$query2->fetch()):?>
        <tr>
            <td><?=$row['id']?></td>
            <td><?=$row['name']?></td>
            <td><?=$row['cou']?></td>
        </tr>
    <?php endwhile;?>
</table>
</p>

</body>
</html>
