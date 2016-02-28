<?php
include 'handler.php'
?>
<html>
<head>
</head>
<body>
<form method="post">
    <label>
        <input type="text" value="<?=isset($_REQUEST ['a'])?$_REQUEST['a']:''?>" name="a">
    </label>
    <label>
        <input type="text" value="<?=isset($_REQUEST ['b'])?$_REQUEST['b']:''?>" name="b">
    </label>
    <label>
        <input type="text" value="<?=isset($_REQUEST ['c'])?$_REQUEST['c']:''?>" name="c">
    </label>
    <span>=</span>
    <span><?= $result ?></span>
    <button type="submit" value="1" name="riv">OK</button>
</form>
</body>
</html>
