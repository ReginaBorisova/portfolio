<?php
/**
 * The file contains variables used on index.phtml file.
 *
 * @package    Portfolio
 * @subpackage AboutVariables
 * @author     Regina Borisova
 * @link       https://github.com/ReginaBorisova/portfolio
 */
$title = 'Middle Web Dev';
$name = 'Regina';
$lastName = 'Borisova';
$whoParam = array_key_exists("who", $_GET) ? $_GET["who"] : 1;
$x = mt_rand(1, 100);
$completedXProjects = "Completed $x projects";
$icons = [
    ["name" => "linkedin", "link" => "https://www.linkedin.com/in/regina-borisova-11777a24a/"],
    ["name" => "facebook", "link" => "https://www.facebook.com/lina.gusman.790"],
    ["name" => "github", "link" => "https://github.com/ReginaBorisova"]
];
?>