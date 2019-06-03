<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>form calculate</title>
</head>
<body>
<form action="rach.php" method="post">
    <input name="operand1" value="<?= $o1 ?>">
    <select name="operation">
        <option value="*" <?php if($d=='*'): ?>selected<?php endif;?>>&#10034;</option>
        <option value="/" <?php if($d=='/'): ?>selected<?php endif;?>>&divide;</option>
        <option value="-"<?php if($d=='-'): ?>selected<?php endif;?>>&ndash;</option>
        <option value="+"<?php if($d=='+'): ?>selected<?php endif;?>>+</option>
    </select>
    <input name="operand2"  value="<?= $o2 ?>">
    <button type="submit" >=</button>
<?= $result ?>
</form>
</body>
</html>