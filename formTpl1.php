<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Email subsriber</title>
</head>
<body>
<p><?php if($err): ?>
        <?= $err?>
    <?php endif;?></p>
<p><?php if($g): ?>
        <?= $g?>
    <?php endif;?></p>
<h2>Enter Your Email for subscribe our </h2>
<form action="subscr.php" method="post">
    <label for="email">email</label><input id="email" type="email" name="emailsubs"  value="">
    <button type="submit" >Send</button>

</form>
</body>
</html>