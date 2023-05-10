<?php
function getPageTitle($page_titles)
{
    $title = $page_titles[basename($_SERVER['SCRIPT_FILENAME'])];
    return $title;
}
?>
