<?php require_once 'variables.php' ?>
<!DOCTYPE html>
<html lang="en">
<?php require_once './template/head.phtml';?>
<?php
$title = $page_titles[basename($_SERVER['SCRIPT_FILENAME'])];
?>
<title><?php echo $title; ?></title>
<body>
   <header>
       <?php require_once './template/menu.phtml';?>
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
   <?php require_once './template/footer.phtml';?>
</body>
</html>