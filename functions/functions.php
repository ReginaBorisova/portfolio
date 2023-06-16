<?php
/**
 * Gets the page title based on the script filename.
 *
 * @param array $page_titles An array of page titles.
 *
 * @return string The page title.
 */
function getPageTitle($page_titles)
{
    $title = $page_titles[basename($_SERVER['SCRIPT_FILENAME'])];
    return $title;
}

/**
 * Returns a current page with id="here".
 *
 * @param int $url The current page.
 *
 * @return string with id="here" for the current page.
 */
function getCurrentPageId($url) {
    $currentPage = basename($_SERVER['SCRIPT_FILENAME']);
    $active = ($currentPage == basename($url)) ? 'id="here"' : '';
    return $active;
}
/**
 * Returns a string with a title based on the given title type.
 *
 * @param int $titleType The title type.
 *
 * @return string The resulting title string.
 */
function tellTitle(int $titleType): string
{
    switch ($titleType) {
        case 2:
            $title = '';
            break;
        default:
            $title = 'Junior ';
    }
    return $title . ' Web Developer';
}
?>

