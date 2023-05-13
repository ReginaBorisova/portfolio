<?php require_once __DIR__ . '/functions/variables.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php require_once __DIR__ . '/template/head.phtml';?>
</head>
<body>
<?php require_once __DIR__ . '/template/menu.phtml'?>
<main id="home">
    <h1 class="lg-heading">
        <?= $name ?> <span class="text-secondary"><?= $lastName?></span>
    </h1>
    <p><?= $completedXProjects ?></p>
    <h2 id="sm-heading">
        <?php require_once __DIR__ . '/functions/functions.php'; ?>
        <p><?php echo tellTitle($whoParam);?></p>
    </h2>
    <div class="icons">
        <?php
        foreach ($icons as $icon) {
            ?>
            <a href="<?php echo $icon['link'] ?>">
                <i class="fab fa-<?php echo $icon['name']?> fa-2x"></i>
            </a>
        <?php } ?>
    </div>
</main>
<?php require_once __DIR__ . '/template/footer.phtml';?>
</body>
</html>

