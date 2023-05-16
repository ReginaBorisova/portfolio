<<<<<<< HEAD
<?php require_once __DIR__ .'/variables.php' ?>
<!DOCTYPE html>
<html lang="en">
<?php require_once __DIR__ .'/template/head.phtml';?>
<title><?=$titleWork?></title>
<body>
   <header>
       <?php require_once __DIR__ .'/template/menu.phtml';?>
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
=======
<?php require_once __DIR__ . '/functions/variables.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php require_once __DIR__ . '/template/head.phtml';?>
</head>
<body>
<?php require_once __DIR__ . '/template/menu.phtml'?>
<main id="work">
>>>>>>> dbf4a2756e0e6e429a809d68c827ffb480af0242
    <h1 class="lg-heading">
        <?= $my ?> <span class="text-secondary"><?= $work ?></span>
    </h1>
    <h2 id="sm-heading">
        <?= $checkMyProjects ?>
    </h2>
<<<<<<< HEAD
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
   <?php require_once __DIR__ . '/template/footer.phtml';?>
=======
    <div class="projects">
        <?php foreach ($projects as $project) : ?>
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
<?php require_once __DIR__ . '/template/footer.phtml'; ?>
>>>>>>> dbf4a2756e0e6e429a809d68c827ffb480af0242
</body>
</html>