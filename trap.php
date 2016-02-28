<?php
include 'handler.php'
?>
<html>
<head>
</head>
<body>
<form method="post">
    <label>
        <input type="text" value="<?=isset($_REQUEST ['a'])?$_REQUEST['a']:''?>" name="a">a
    </label>
    <label>
        <input type="text" value="<?=isset($_REQUEST ['b'])?$_REQUEST['b']:''?>" name="b">b
    </label>
    <label>
        <input type="text" value="<?=isset($_REQUEST ['h'])?$_REQUEST['h']:''?>" name="h">h
    </label>
    <span>=</span>
    <span><?= $result ?></span>
    <button type="submit" value="1" name="trap">OK</button>
</form>
</body>
</html>
