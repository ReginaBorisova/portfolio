<?php
/**
 * The file contains main page code for the portfolio project.
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
require_once __DIR__ . '/config/variables.php';
$content = isset($_GET['page']) ? $_GET['page'] : 'index.php';
require_once __DIR__ . '/template/page.phtml';
?>