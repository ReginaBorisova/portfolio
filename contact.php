<?php include 'variables.php'?>
<!DOCTYPE html>
<html lang="en">
<?php require'./include/head.php';?>
<!--<head>-->
<!--    <meta charset="UTF-8">-->
<!--    <meta http-equiv="X-UA-Compatible" content="IE=edge">-->
<!--    <meta name="viewport" content="width=device-width, initial-scale=1.0">-->
<!--    <link rel="stylesheet" href="/css/main.css">-->
<!--    <link rel="stylesheet" href="/css/picture.css">-->
<!--    <script src="https://kit.fontawesome.com/7f1d61da1e.js" crossorigin="anonymous"></script>-->
<!--</head>-->
<title><?=$titleContact?></title>
<body>
   <header>
       <?php require './include/menu.php';?>
<!--   <div class="menu-btn">-->
<!--    <div class="btn-line"></div>-->
<!--    <div class="btn-line"></div>-->
<!--    <div class="btn-line"></div>-->
<!--   </div>-->
<!--   <nav class="menu">-->
<!--    <div class="menu-branding">-->
<!--     <div class="portrait"><img src="/img/WebPagePic.jpg"/></div>-->
<!--    </div>-->
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
<!--   <script src="/js/main.js"></script>-->
</body>
</html>