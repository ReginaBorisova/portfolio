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
    'index' => 'My portfolio',
    'work' => 'View my Work',
    'about' => 'About Me',
    'contact' => 'Contact Me'
];

$menuitems = [
    'index' => 'Home',
    'about' => 'About Me',
    'work' => 'My Work',
    'contact' => 'How to reach me'
];
?>