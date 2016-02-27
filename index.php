<?php
include 'handler.php'
?>
<html>
<head>
</head>
<body>
<form method="post">
    <label>
        <input type="text" value="<?= $_REQUEST ['a'] ?>" name="a">
    </label>
    <label>
        <select name="operation">
            <option <?=$_REQUEST['operation']=='+'?'selected="selected"': ''?> value="+">+</option>
            <option <?=$_REQUEST['operation']=='-'?'selected="selected"': ''?>value="-">-</option>
            <option <?=$_REQUEST['operation']=='*'?'selected="selected"': ''?>value="*">*</option>
            <option <?=$_REQUEST['operation']=='/'?'selected="selected"': ''?> value="/">/</option>
        </select>
    </label>
    <label>
        <input type="text" value="<?= $_REQUEST ['b'] ?>" name="b">
    </label>
    <span>=</span>
    <span><?= $result ?></span>
    <button type="submit" value="1" name="calc">OK</button>
</form>
</body>
</html>
