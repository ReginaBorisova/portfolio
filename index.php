<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <script src="https://kit.fontawesome.com/7f1d61da1e.js" crossorigin="anonymous"></script>
    <title>My Portfolio</title>
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
     <div class="portrait"><img src="WebPagePic.jpg" style=" width: 250px;
        height: 250px;   margin: auto;
  border-radius: 50%;
  border: yellow 3px solid;"/></div>
    </div>
    <ul class="menu-nav">
    <li class="nav-item current">
        <a href="index.html" class="nav-link">Home</a>
    </li>
    <li class="nav-item">
        <a href="about.html" class="nav-link">About Me</a>
    </li>
    <li class="nav-item">
        <a href="work.html" class="nav-link">My Work</a>
    </li>
    <li class="nav-item">
        <a href="contact.html" class="nav-link">How to reach Me</a>
    </li>

    </ul>

   </nav>
   </header> 

   <main id="home">
    <h1 class="lg-heading">
        Regina <span class="text-secondary">Borisova </span>
    </h1>
    
    <h2 id="sm-heading">
       <?php

       function tellTitle($who){
           
           switch($who) {
               case 2:
                   $title = ' ';
                   break;
               default:
                   $title = 'Junior';
           }
           return $title;

       }
       $who=1;
       echo tellTitle($who).' Web Developer';





          //#issue 2
//       function tellTitle($who) {
//           if ($who == 2) {
//               return '';
//           }
//           $title = 'Junior ';
//           if (empty($who)) {
//               return $title;
//           }
//           return $title;
//       }
//
//       $whoParam = 1;
//       if (array_key_exists("who", $_GET)) {
//           $whoParam = $_GET["who"];
//       }
//
//       $title = tellTitle($whoParam);
//       if (empty($title)){
//           echo " Web Developer";
//       }else {
//           $title.' Web Developer';
//       }



                                      //Second task

//       function tellTitle($who)
//       {
//           if ($who == 1) {
//               return 'Junior ';
//           } else if ($who == 2){
//               return '';
//           }
//       }
//
//       $title = tellTitle($_GET['who']);
//       echo $title . ' Web Developer';


       ?>
    </h2>
    <div class="icons"> <?php
        $icons=array('twitter', 'facebook','linkedin','github');
        foreach ($icons as $icon) {
            ?>

       <a href="#">
        <i class="fab fa-<?php echo $icon ?> fa-2x"></i>
       </a>
<!--       <a href="#">-->
<!--        <i class="fab fa----><?php //echo $icon ?><!-- fa-2x"></i>-->
<!--       </a>-->
<!--       <a href="#">-->
<!--        <i class="fab fa----><?php //echo $icon ?><!-- fa-2x"></i>-->
<!--       </a>-->
<!--       <a href="#">-->
<!--        <i class="fab fa---><?php //echo $icon ?><!-- fa-2x"></i>-->
           <?php } ?>

    </div>
   </main>
   <script src="js/main.js"></script>
</body>
</html>