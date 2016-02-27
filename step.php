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
    <span>=</span>
    <span><?= $result ?></span>
    <button type="submit" value="1" name="step">OK</button>
</form>
</body>
</html>
