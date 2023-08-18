<?php
/**
 * The file contains variables for the portfolio project.
 *
 * @category   Web_Development_<regina.salikhova93@gmail.com>
 * @link       https://github.com/ReginaBorisova/portfolio
 * @package    Portfolio
 * @subpackage WorkVariables
 * @author     Regina_Borisova <regina.salikhova93@gmail.com>
 * @license    https://account.jetbrains.com/licenses PHPStorm
 *
 * @version CVS: <cvs_id>
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