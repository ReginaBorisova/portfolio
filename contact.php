<?php include_once 'variables.php'?>
<!DOCTYPE html>
<html lang="en">
<?php include_once './template/head.phtml';?>
<title><?=$titleContact?></title>
<body>
   <header>
       <?php include_once './template/menu.phtml';?>
       <ul class="menu-nav">
           <?php
           $currentPage = basename($_SERVER['SCRIPT_FILENAME']);
           foreach ($menuitems as $url => $label){
               $active = ($currentPage == basename($url)) ? ' id="here"' : '';
               ?>
               <li class="nav-item">
                   <a href="<?=$url?>" class="nav-link"<?=$active?>><?=$label?></a>
               </li>
           <?php } ?>
       </ul>
<!--    <ul class="menu-nav">-->
<!--        --><?php
//        foreach ($menuitems as $url => $label){
//        ?>
<!--        <li class="nav-item ">-->
<!--            <a href="--><?php //=  $url ?><!--" class="nav-link">--><?php //=$label?><!--</a>-->
<!--            --><?php //} ?>
<!--        </li>-->
<!--    </ul>-->
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
   <?php include_once './template/footer.phtml';?>
</body>
</html>