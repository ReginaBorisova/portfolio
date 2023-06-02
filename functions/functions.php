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

