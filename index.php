<?php
require_once __DIR__ . '/config/variables.php';
$content = isset($_GET['page']) ? $_GET['page'] : 'index';
require_once __DIR__ . '/template/page.phtml';
?>