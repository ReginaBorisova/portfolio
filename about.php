<<<<<<< HEAD
<?php require_once __DIR__ .'/variables.php' ?>
<!DOCTYPE html>
<html lang="en">
<?php require_once __DIR__ .'/template/head.phtml';?>
<title><?php $titleAbout?></title>
<body>
   <header>
       <?php require_once __DIR__ .'/template/menu.phtml';?>
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
=======
<?php require_once __DIR__ . '/functions/variables.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php require_once __DIR__ . '/template/head.phtml';?>
</head>
<body>
<?php require_once __DIR__ . '/template/menu.phtml'?>
<main id="about">
>>>>>>> dbf4a2756e0e6e429a809d68c827ffb480af0242
    <h1 class="lg-heading">
        <?= $about ?> <span class="text-secondary"><?= $me ?></span>
    </h1>
    <h2 id="sm-heading">
        <?= $fewThings ?>
    </h2>
    <div class="about-info">
        <img src="img/WebPagePic.jpg" alt="Regina's Picture" class="bio-image">
        <div class="bio">
            <h3><?= $bio ?></h3>
            <p><?= $jobDescription ?></p>
        </div>
        <div class="job job-1">
            <h3><?= $firstCompany ?></h3>
            <p><?= $jobDescription ?></p>
        </div>
        <div class="job job-2">
            <h3><?= $secondCompany ?></h3>
            <h6><?= $title ?></h6>
            <p><?= $jobDescription ?></p>
        </div>
        <div class="job job-3">
            <h3><?= $thirdCompany ?></h3>
            <h6><?= $title ?></h6>
            <p><?= $jobDescription ?></p>
        </div>
    </div>
<<<<<<< HEAD
   </main>
   <?php require_once __DIR__ . '/template/footer.phtml';?>
=======
</main>
<?php require_once __DIR__ . '/template/footer.phtml'; ?>
>>>>>>> dbf4a2756e0e6e429a809d68c827ffb480af0242
</body>
</html>