<?php include_once 'variables.php' ?>
<!DOCTYPE html>
<html lang="en">
<?php include_once './template/head.phtml';?>
<?php
$title = $page_titles[basename($_SERVER['SCRIPT_FILENAME'])];
?>
<title><?php echo $title; ?></title>
<!--<title>--><?php //=$titleWork?><!--</title>-->
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
//           foreach ($menuitems as $url => $label){
//        ?>
<!--    <li class="nav-item ">-->
<!--        <a href="--><?php //= $url?><!--" class="nav-link">--><?php //=$label?><!--</a>-->
<!--        --><?php //} ?>
<!--    </li>-->
<!--    </ul>-->
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
   <?php include_once './template/footer.phtml';?>
</body>
</html>