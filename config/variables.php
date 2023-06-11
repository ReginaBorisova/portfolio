<?php
$filename = $_SERVER['SCRIPT_FILENAME'];
$basename = basename($filename);
$variablesFile = __DIR__ . '/../config/variables_' . $basename;
  if (file_exists($variablesFile)) {
    require_once $variablesFile;
  }
$title = 'Middle Web Dev';
$copyright='Copyright';
$page_titles = [
    'index.php' => 'My portfolio',
    'work.php' => 'View my Work',
    'about.php' => 'About Me',
    'contact.php'=>'Contact Me'
];
$menuitems = [
    'index.php' => 'Home',
    'about.php' => 'About Me',
    'work.php' => 'My Work',
    'contact.php' => 'How to reach me'
];
//$content=basename($_SERVER['SCRIPT_FILENAME']);
?>