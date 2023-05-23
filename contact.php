<?php require_once __DIR__.'/config/variables.php';?>
<!DOCTYPE html>
<html lang = 'en'>
<head>
  <?php require_once __DIR__.'/template/head.phtml';?>
</head>
<body>
  <?php require_once __DIR__.'/template/menu.phtml';?>
<maim id = 'contact'>
    <?php
    $content = 'contact';
    require_once __DIR__.'/template/page.phtml';
    ?>
</maim>
  <?php require_once __DIR__.'/template/footer.phtml';?>
</body>
</html>
