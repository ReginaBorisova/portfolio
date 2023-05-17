<?php require_once __DIR__ . '/functions/variables.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php require_once __DIR__ . '/template/head.phtml';?>
</head>
<body>
<?php require_once __DIR__ . '/template/menu.phtml'?>
<main id="work">
    <?php
      $content = 'mywork';
      require_once __DIR__ . '/template/page.phtml';?>
</main>
<?php require_once __DIR__ . '/template/footer.phtml'; ?>
</body>
</html>