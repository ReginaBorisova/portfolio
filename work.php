<?php include 'variables.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/picture.css">
    <script src="https://kit.fontawesome.com/7f1d61da1e.js" crossorigin="anonymous"></script>
    <title><?= $titleWork ?></title>
</head>
<body>
   <header>
       <?php require './include/menu.php';?>
<!--       <div class="menu-btn">-->
<!--           <div class="btn-line"></div>-->
<!--           <div class="btn-line"></div>-->
<!--           <div class="btn-line"></div>-->
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
        <a href="<?= $url?>" class="nav-link"><?=$label?></a>
        <?php } ?>
    </li>
    </ul>
   </nav>
   </header>
   <main id="work">
    <h1 class="lg-heading">
        <?=$my?>  <span class="text-secondary"><?=$work?> </span>
    </h1>
    <h2 id="sm-heading">
       <?=$checkMyProjects?>
    </h2>
       <div class="projects">
           <?php foreach ($projects as $project): ?>
               <div class="item">
                   <a href="#!">
                       <img src="<?= $project['img'] ?>" class="project-img" alt="Project Pic" id="project">
                   </a>
                   <a href="#" class="btn-light">
                       <i class="fas fa-eye"></i><?= $project['project'] ?>
                   </a>
                   <a href="#" class="btn-dark">
                       <i class="fab fa-github"></i><?= $project['github'] ?>
                   </a>
               </div>
           <?php endforeach; ?>
       </div>
   </main>
   <?php require'./include/footer.php';?>
   <script src="/js/main.js"></script>
</body>
</html>