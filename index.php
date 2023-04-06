<!DOCTYPE html>
<?php

     $name  = 'Regina';
     $lname = 'Borisova';
     $h     = 'Home';
     $ab    = 'About Me';
     $mw    = 'My Work';
     $rm    ='How to reach me';
     $p     = 'Portfolio';
?>
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
        <a href="index.php" class="nav-link"> <?=  $h; ?></a>
    </li>
    <li class="nav-item">
        <a href="about.php" class="nav-link"><?=  $ab; ?></a>
    </li>
    <li class="nav-item">
        <a href="work.php" class="nav-link"><?=  $mw; ?></a>
    </li>
    <li class="nav-item">
        <a href="contact.php" class="nav-link"><?=  $rm; ?></a>
    </li>

    </ul>

   </nav>
   </header> 

   <main id="home">
    <h1 class="lg-heading">
        <?=  $name; ?> <span class="text-secondary"><?=  $lname; ?> </span>
    </h1>
    
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

//           if (!empty($titleType)) {
//               $title .= 'Web Developer';
//           } else {
//               $title .= 'Web Developer';
//           }

           return $title.' Web Developer';
       }

       $whoParam = array_key_exists("who", $_GET) ? $_GET["who"] : 1;
       echo tellTitle($whoParam);


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
        $icons=array(
                array("name" => "linkedin",
                      "link" => "https://www.linkedin.com/in/regina-borisova-11777a24a/"),
                array("name" => "facebook",
                      "link" => "https://www.facebook.com/lina.gusman.790"),
                array("name" => "github",
                      "link" => "https://github.com/ReginaBorisova")
        );
        foreach ($icons as $icon) {
            ?>

       <a href="<?php echo $icon['link']; ?>">
        <i class="fab fa-<?php echo $icon['name']; ?> fa-2x"></i>
       </a>

           <?php } ?>

    </div>
   </main>
   <script src="js/main.js"></script>
</body>
</html>