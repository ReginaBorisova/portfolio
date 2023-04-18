<?php include 'variables.php' ?>
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
<!--    <title>--><?php //=$titleAbout?><!--</title>-->
<!--</head>-->
<body>
   <header>
       <?php require './include/menu.php';?>
<!--   <div class="menu-btn">-->
<!--    <div class="btn-line"></div>-->
<!--    <div class="btn-line"></div>-->
<!--    <div class="btn-line"></div> -->
<!--   </div>-->
<!--   <nav class="menu">-->
<!--    <div class="menu-branding">-->
<!--     <div class="portrait"><img src="/img/WebPagePic.jpg" /></div>-->
<!--    </div>-->
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
   <main id="about">
    <h1 class="lg-heading">
        <?=$about?> <span class="text-secondary"><?=$me?></span>
    </h1>
    <h2 id="sm-heading">
        <?=$fewThings?>
    </h2>
    <div class="about-info">
    <img src="img/WebPagePic.jpg" alt="Regina's Picture" class="bio-image" >
    <div class="bio">
        <h3 ><?=$bio?></h3>
        <p> <?=$jobDescription?></p>
    </div>
    <div class="job job-1">
    <h3><?=$firstCompany ?></h3>
    <p><?=$jobDescription?></p>
    </div>
    <div class="job job-2">
        <h3><?=$secondCompany ?></h3>
        <h6><?=$title?></h6>
        <p><?=$jobDescription?></p>
        </div>
        <div class="job job-3">
            <h3><?=$thirdCompany ?></h3>
            <h6><?=$title?></h6>
            <p><?=$jobDescription?></p>
            </div>
    </div>
   </main>
   <?php require'./include/footer.php';?>
<!--   <footer id="main-footer"> --><?php //= "$copyright"?><!--&copy; --><?php //echo date("Y"); ?>
<!--   </footer>-->
<!--   <script src="/js/main.js"></script>-->
</body>
</html>