<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>form register</title>
</head>
<body>
<p><?php if($message): ?>
        <?= $message?>
    <?php endif;?></p>
<?= $form->render(); ?>
<!--<form action="rach.php" method="post">-->
<!--    <label for="name">Frist Name</label> <input id="name" name="names" value="">-->
<!--    <br />-->
<!--    <label for="surname">Sur Name</label> <input id="surname" name="surname" value="">-->
<!--    <br />-->
<!--    <label for="email">email</label><input id="email" type="email" name="email"  value="">-->
<!--    <br />-->
<!--    <label for="pwd">password</label><input id="pwd" type="password" name="pwd" value="">-->
<!--    <br />-->
<!--    <button type="submit" >Send</button>-->
<!---->
<!--</form>-->
</body>
</html>