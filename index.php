<?php
/**
 * The file contains main page code for the portfolio project.
 *
 * @package   Portfolio
 * @subpackage  MainPageCode
 * @category  Web Development
 * @author    Regina Borisova <regina.borisova93@gmail.com>
 * @link      https://github.com/ReginaBorisova/portfolio
 * @license   MIT
 * @version   1.0
 */
require_once __DIR__ . '/config/variables.php';
$content = isset($_GET['page']) ? $_GET['page'] : 'index.php';
require_once __DIR__ . '/template/page.phtml';
?>