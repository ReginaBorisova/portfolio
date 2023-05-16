<<<<<<< HEAD
<?php require_once __DIR__ .'/variables.php'?>
<!DOCTYPE html>
<html lang="en">
<?php require_once __DIR__ .'/template/head.phtml';?>
<title><?=$titleContact?></title>
<body>
   <header>
       <?php require_once __DIR__ .'/template/menu.phtml';?>
    <ul class="menu-nav">
        <?php
        foreach ($menuitems as $url => $label){
        ?>
        <li class="nav-item ">
            <a href="<?=  $url ?>" class="nav-link"><?=$label?></a>
            <?php } ?>
        </li>
    </ul>
   </nav>
   </header>
   <main id="contact">
=======
<?php require_once __DIR__ . '/functions/variables.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php require_once __DIR__ . '/template/head.phtml';?>
</head>
<body>
<?php require_once __DIR__ . '/template/menu.phtml'?>
<main id="contact">
>>>>>>> dbf4a2756e0e6e429a809d68c827ffb480af0242
    <h1 class="lg-heading">
        <?= $contact ?> <span class="text-secondary"><?= $me ?> </span>
    </h1>
    <h2 id="sm-heading">
        <?= $reachme ?>
    </h2>
    <div class="boxes">
        <div>
            <span class="text-secondary"><?= $email ?></span><?= $emailmain ?>
        </div>
        <div>
            <span class="text-secondary"><?= $phone ?></span><?= $phonemain ?>
        </div>
        <div>
            <span class="text-secondary"><?= $address ?></span> <?= $addressct ?>
        </div>
    </div>
<<<<<<< HEAD
   </main>
   <?php require_once __DIR__ .  '/template/footer.phtml';?>
=======
</main>
<?php require_once __DIR__ . '/template/footer.phtml'; ?>
>>>>>>> dbf4a2756e0e6e429a809d68c827ffb480af0242
</body>
</html>