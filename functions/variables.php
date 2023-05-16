<?php
$bio = 'BIO';
$about = 'About';
$me = 'Me';
$fewThings = 'Let me tell you a few things';
$title = 'Middle Web Dev';
$contact = 'Contact';
$my = 'My';
$work = 'Work';
$home     = 'Home';
$aboutMe    = 'About Me';
$myWork    = 'My Work';
$reachMe    = 'How to reach me';
$email = 'E-mail';
$emailmain = 'regina.borisovaus@gmail.com';
$phonemain = "(718)-517-16-54";
$phone = 'Phone';
$address = 'Address';
$name ='Regina';
$lastName = 'Borisova';
$titleIndex ='My Portfolio ';
$titleAbout = 'About Me';
$titleWork = 'View My Work';
$reachme = 'This is how you can reach me';
$titleContact = 'Contact Me';
$firstCompany = 'Place for my 1st WebDevJob';
$secondCompany = 'Place for my 2nd WebDevJob';
$thirdCompany = 'Place for my 3d WebDevJob';
$checkMyProjects = 'Check out some of my projects';
$project = 'Project';
$gitHub = 'Github';
$copyright='Copyright';
$addressct = "Monroe, Connecticut";
$whoParam = array_key_exists("who", $_GET) ? $_GET["who"] : 1;
$menuitems=[
    '/index.php'=> 'Home',
    '/about.php'=> 'About Me',
    '/work.php' => 'My Work',
    '/contact.php'=>'How to reach me'
                 ];
  $icons=[
      ["name" => "linkedin", "link" => "https://www.linkedin.com/in/regina-borisova-11777a24a/"],
      ["name" => "facebook",  "link" => "https://www.facebook.com/lina.gusman.790"],
      ["name" => "github", "link" => "https://github.com/ReginaBorisova"]
  ];
$x = mt_rand(1, 100);
$completedXProjects = "Completed $x projects";

$jobDescription = 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla voluptas animi 
                   veritatis debitis possimus autem eius architecto repudiandae ea labore iure, facilis 
                   accusamus nihil obcaecati at voluptates, alias dolor quas.';
$projects = [
    [
        'img' => '/img/projects/project1.jpg',
        'project' => 'Project 1',
        'github' => 'Github'
    ],
    [
        'img' => '/img/projects/project2.jpg',
        'project' => 'Project 2',
        'github' => 'Github'
    ],
    [
        'img' => '/img/projects/project3.jpg',
        'project' => 'Project 3',
        'github' => 'Github'
    ],
    [
        'img' => '/img/projects/project4.jpg',
        'project' => 'Project 4',
        'github' => 'Github'
    ],
    [
        'img' => '/img/projects/project5.jpg',
        'project' => 'Project 5',
        'github' => 'Github'
    ]
];

$page_titles = [
    'index.php' => 'My portfolio',
    'work.php' => 'View my Work',
    'about.php' => 'About Me',
    'contact.php'=>'Contact Me'
];

?>