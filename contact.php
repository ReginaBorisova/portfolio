<?php include 'variables.php'?>
<!DOCTYPE html>
<html lang="en">
<?php require'./include/head.php';?>
<title><?=$titleContact?></title>
<body>
   <header>
       <?php require './include/menu.php';?>
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
    <h1 class="lg-heading">
        <?=$contact?> <span class="text-secondary"><?=$me?> </span>
    </h1>
    <h2 id="sm-heading">
        <?=$reachme?>
    </h2>
    <div class="boxes">
        <div>
            <span class="text-secondary"><?=$email?></span><?=$emailmain?>
        </div>
        <div>
            <span class="text-secondary"><?=$phone?></span><?=$phonemain?>
        </div>

        <div>
            <span class="text-secondary"><?=$address?></span> <?=$addressct?>
        </div>
    </div>
   </main>
   <?php require'./include/footer.php';?>
</body>
</html>