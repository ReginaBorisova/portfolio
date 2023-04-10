<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/main.css">
    <script src="https://kit.fontawesome.com/7f1d61da1e.js" crossorigin="anonymous"></script>
    <title><?= $titleWork ?></title>
</head>
<body>
   <header>
       <div class="menu-btn">
           <div class="btn-line"></div>
           <div class="btn-line"></div>
           <div class="btn-line"></div>
   </div><?php include 'variables.php' ?>
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
   <main id="work">
    <h1 class="lg-heading">
        My  <span class="text-secondary">Work </span>
    </h1>
    <h2 id="sm-heading">
       Check Out Some of My Projects
    </h2>
    <div class="projects">
       <div class="item">
        <a href="#!">
            <img src="/img/projects/project1.jpg" alt="Project Pic" style="width:300px; height:250px;">
        </a>
        <a href="#" class="btn-light">
            <i class="fas fa-eye"></i>Project
        </a>
        <a href="#" class="btn-dark">
            <i class="fab fa-github"></i>Github
        </a>
       </div>
       <div class="item">
        <a href="#!">
            <img src="/img/projects/project2.jpg" alt="Project Pic"style="width:300px; height:250px;">
        </a>
        <a href="#" class="btn-light">
            <i class="fas fa-eye"></i>Project
        </a>
        <a href="#" class="btn-dark">
            <i class="fab fa-github"></i>Github
        </a>
       </div>
       <div class="item">
        <a href="#!">
            <img src="/img/projects/project3.jpg" alt="Project Pic"style="width:300px; height:250px;">
        </a>
        <a href="#" class="btn-light">
            <i class="fas fa-eye"></i>Project
        </a>
        <a href="#" class="btn-dark">
            <i class="fab fa-github"></i>Github
        </a>
       </div>
       <div class="item">
        <a href="#!">
            <img src="/img/projects/project4.jpg" alt="Project Pic"style="width:300px; height:250px;">
        </a>
        <a href="#" class="btn-light">
            <i class="fas fa-eye"></i>Project
        </a>
        <a href="#" class="btn-dark">
            <i class="fab fa-github"></i>Github
        </a>
       </div>
       <div class="item">
        <a href="#!">
            <img src="/img/projects/project5.jpg" alt="Project Pic"style="width:300px; height:250px;">
        </a>
        <a href="#" class="btn-light">
            <i class="fas fa-eye"></i>Project
        </a>
        <a href="#" class="btn-dark">
            <i class="fab fa-github"></i>Github
        </a>
       </div>
    </div>   
   </main>
   <footer id="main-footer"> Copyright &copy;2023</footer>
   <script src="/js/main.js"></script>
</body>
</html>