<?php include 'variables.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/picture.css">
    <script src="https://kit.fontawesome.com/7f1d61da1e.js" crossorigin="anonymous"></script>
    <title><?=$titleContact?></title>
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
     <div class="portrait"><img src="/img/WebPagePic.jpg"/></div>
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

   <main id="contact">
    <h1 class="lg-heading">
        <?='Contact'?> <span class="text-secondary"><?='Me'?> </span>
    </h1>
    <h2 id="sm-heading">
        <?='This is how you can reach me...'?>
    </h2>
    <div class="boxes">
        <div>
            <span class="text-secondary"><?=$email?></span><?='regina.borisovaus@gmail.com'?>
        </div>

        <div>
            <span class="text-secondary"><?=$phone?></span><?='(718)-517-16-54'?>
        </div>

        <div>
            <span class="text-secondary"><?=$address?></span> <?='Monroe, Connecticut'?>
        </div>
    </div>
   </main>
   <footer id="main-footer"> <?= 'Copyright '?>&copy; <?php echo date("Y"); ?>
   <script src="/js/main.js"></script>
</body>
</html>