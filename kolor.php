<?php
include 'handler.php'
?>
<html>
<head>
</head>
<body>
<form method="post">
    <select name="sign">
                <?php foreach (['red', 'yellow', 'green'] as $item) { ?>
            <option style="color: <?=$item?>"<?= isset($_REQUEST ['sign']) && $_REQUEST['sign'] == $item ? 'selected="selected"' : '' ?>
                value="<?= $item ?>"><?= $item ?></>
        <?php } ?>
    </select>
    <span>=</span>
    <span><?= $result ?></span>
    <button type="submit" value="1" name="color">OK</button>
</form>
</body>
</html>
