<?php include_once 'variables.php' ?>
<!DOCTYPE html>
<html lang="en">
<?php include_once './template/head.phtml';?>
<?php
$title = $page_titles[basename($_SERVER['SCRIPT_FILENAME'])];
?>
<title><?php echo $title; ?></title>
<!--<title>--><?php //=$titleIndex?><!--</title>-->
<body>
   <header>
       <?php  include_once './template/menu.phtml';?>
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
<!--            <a href="--><?php //=$url?><!--" class="nav-link">--><?php //=$label?><!--</a>-->
<!--            --><?php //} ?>
<!--        </li>-->
<!--    </ul>-->
   </nav>
   </header>
   <main id="home">
    <h1 class="lg-heading">
        <?=$name?> <span class="text-secondary"><?=$lastName?></span>
    </h1>
       <p><?=$completedXProjects ?> </p>
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
   <?php include_once './template/footer.phtml';?>
</body>
</html>