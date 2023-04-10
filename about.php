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
    <title><?=  $titleAbout ?></title>
</head>
<body>
   <header>
   <div class="menu-btn">
    <div class="btn-line"></div>
    <div class="btn-line"></div>
    <div class="btn-line"></div> 
   </div>
   <nav class="menu">
    <div class="menu-branding">
     <div class="portrait"><img src="/img/WebPagePic.jpg" style="   width: 250px;
  height: 250px;
  margin: auto;
  border-radius: 50%;"/></div>
    </div>
    <ul class="menu-nav">
        <?php
        foreach ($menuitems as $url => $label){
        ?>
        <li class="nav-item ">
            <a href="<?=  $url ?>" class="nav-link"><?=    $label   ?></a>
            <?php } ?>
        </li>
    </ul>
   </nav>
   </header>
   <main id="about">
    <h1 class="lg-heading">
        About <span class="text-secondary">Me </span>
    </h1>
    <h2 id="sm-heading">
        Let me tell you a few things...
    </h2>
    <div class="about-info">
    <img src="img/WebPagePic.jpg" ALT="Regina's Picture" class="bio-image" style=" width: 250px;
    height: 250px;">
    <div class="bio">
        <h3 style="color:yellow;">BIO</h3>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla voluptas animi veritatis debitis possimus autem eius architecto repudiandae ea labore iure, facilis accusamus nihil obcaecati at voluptates, alias dolor quas.</p>
    </div>
    <div class="job job-1">
    <h3>Place for My 1st WebDevJob</h3>
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolore earum nemo assumenda adipisci quasi quibusdam. Dicta delectus accusamus repellat ratione?</p>
    </div>
    <div class="job job-2">
        <h3>Place for My 2st WebDevJob</h3>
        <h6>Middle Web Dev</h6>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolore earum nemo assumenda adipisci quasi quibusdam. Dicta delectus accusamus repellat ratione?</p>
        </div>
        <div class="job job-3">
            <h3>Place for My 3st WebDevJob</h3>
            <h6>Senior Web Dev</h6>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolore earum nemo assumenda adipisci quasi quibusdam. Dicta delectus accusamus repellat ratione?</p>
            </div>
    </div>
    
   </main>
   <footer id="main-footer"> Copyright &copy;2023</footer>
   <script src="/js/main.js"></script>
</body>
</html>