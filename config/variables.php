<?php
/**
 * The file contains variables for the portfolio project.
 *
 * @package     Portfolio
 * @subpackage  Variables
 * @link        https://github.com/ReginaBorisova/portfolio
 * @author      Regina Borisova <your-email@example.com>
 * @category    Web Development
 * @license     MIT
 * @version     1.0
 */
$filename = $_SERVER['SCRIPT_FILENAME'];
$basename = basename($filename);
$variablesFile = __DIR__ . '/variables_' . $basename;
if (file_exists($variablesFile)) {
    include_once $variablesFile;
}
$title = 'Middle Web Dev';
$copyright = 'Copyright';
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

$protocol = isset($_SERVER['HTTP_X_FORWARDED_PROTO']) ? $_SERVER['HTTP_X_FORWARDED_PROTO'] : (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http');
$host = $_SERVER['HTTP_HOST'];
$baseURL = $protocol . '://' . $host;
?>
In this