<?php
require_once __DIR__ . '/config/variables.php';
$content = isset($_GET['page']) ? $_GET['page'] : 'index';
//$content = 'index';
require_once __DIR__ . '/template/page.phtml';
?>
