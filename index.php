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
    <title><?=$titleIndex?></title>
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
     <div class="portrait"><img src="/img/WebPagePic.jpg" /></div>
    </div>
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
    <h1 class="lg-heading">
        <?=$name?> <span class="text-secondary"><?=$lastName?></span>
    </h1>
       <p><?=" Completed $x projects"?> </p>
       <h2 id="sm-heading">
       <?php
       function tellTitle(int $titleType) : string {
           switch($titleType) {
               case 2:
                   $title = '';
                   break;
               default:
                   $title = 'Junior ';
           }
           return $title.' Web Developer';
       }
       $whoParam = array_key_exists("who", $_GET) ? $_GET["who"] : 1;
       echo tellTitle($whoParam)
       ?>
    </h2>
    <div class="icons"> <?php
                       foreach ($icons as $icon) {
            ?>
       <a href="       <?php echo $icon['link'] ?>">
        <i class="fab fa-<?php echo $icon['name'] ?> fa-2x"></i>
       </a>
                       <?php } ?>
    </div>
   </main>
   <script src="/js/main.js"></script>
</body>
</html>