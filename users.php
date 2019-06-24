<?php
/**
 * Created by PhpStorm.
 * User: skillup_student
 * Date: 24.06.19
 * Time: 20:55
 */
$pdo= new  PDO('mysql:host=localhost;dbname=userrtest', 'root', 'root');
$query= $pdo->query('SELECT first_name, last_name, email FROM users order by first_name');
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
        <th>Имя</th>
        <th>Фимилия</th>
        <th>Почта</th>
    </tr>
    <?php while ($row=$query->fetch()):?>
    <tr>
        <td><?=$row['first_name']?></td>
        <td><?=$row['last_name']?></td>
        <td><?=$row['email']?></td>
    </tr>
    <?php endwhile;?>
</table>

</p>

</body>
</html>
