<?php include 'variables.php' ?>
<!DOCTYPE html>
<html lang="en">
<?php require'./include/head.php';?>
<title><?=$titleIndex?></title>
<body>
   <header>
       <?php require './include/menu.php';?>
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
   <?php require'./include/footer.php';?>
</body>
</html>