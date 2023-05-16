<<<<<<< HEAD
<?php require_once __DIR__ .'/variables.php' ?>
<!DOCTYPE html>
<html lang="en">
<?php require_once __DIR__ .'/template/head.phtml';?>
<title><?=$titleIndex?></title>
<body>
   <header>
       <?php  require_once __DIR__ .'/template/menu.phtml';?>
    <ul class="menu-nav">
        <?php
        foreach ($menuitems as $url => $label){
        ?>
        <li class="nav-item ">
            <a href="<?=$url?>" class="nav-link"><?=$label?></a>
            <?php } ?>
        </li>
    </ul>
   </nav>
   </header>
   <main id="home">
=======
<?php require_once __DIR__ . '/functions/variables.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php require_once __DIR__ . '/template/head.phtml';?>
</head>
<body>
<?php require_once __DIR__ . '/template/menu.phtml'?>
<main id="home">
>>>>>>> dbf4a2756e0e6e429a809d68c827ffb480af0242
    <h1 class="lg-heading">
        <?= $name ?> <span class="text-secondary"><?= $lastName?></span>
    </h1>
    <p><?= $completedXProjects ?></p>
    <h2 id="sm-heading">
        <?php require_once __DIR__ . '/functions/functions.php'; ?>
        <p><?php echo tellTitle($whoParam);?></p>
    </h2>
    <div class="icons">
        <?php foreach ($icons as $icon): ?>
          <a href="<?= $icon['link'] ?>"><i class="fab fa-<?= $icon['name'] ?> fa-2x"></i></a>
        <?php endforeach; ?>
    </div>
<<<<<<< HEAD
   </main>
   <?php require_once __DIR__ .'/template/footer.phtml';?>
=======
</main>
<?php require_once __DIR__ . '/template/footer.phtml';?>
>>>>>>> dbf4a2756e0e6e429a809d68c827ffb480af0242
</body>

</html>

