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
function getCurrentPageId($url)
{
    $currentPage = basename($_SERVER['SCRIPT_FILENAME']);
    $active = ($currentPage == basename($url)) ? ' id="here"' : '';
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
/**
 * Returns the product of two numbers.
 *
 * @param int|float $a The first number.
 * @param int|float $b The second number.
 *
 * @return int|float The product of $a and $b.
 */
function product($a, $b){
    return $a * $b;
}
/**
 * Returns the maximum of two numbers.
 *
 * @param int|float $a The first number.
 * @param int|float $b The second number.
 *
 * @return int|float The maximum of $a and $b.
 */
function maximum($a, $b){
    return max($a,$b);
}
/**
 * Returns the minimum of two numbers.
 *
 * @param int|float $a The first number.
 * @param int|float $b The second number.
 *
 * @return int|float The minimum of $a and $b.
 */
function minim($a, $b){
    return min($a, $b);
}
/**
 * Returns the sum of two numbers.
 *
 * @param int|float $a The first number.
 * @param int|float $b The second number.
 *
 * @return int|float The sum of $a and $b.
 */
function summ($a, $b){
    return $a+$b;
}
/**
 * Returns the difference of two numbers.
 *
 * @param int|float $a The first number.
 * @param int|float $b The second number.
 *
 * @return int|float The difference of $a and $b.
 */
function difference($a, $b){
    if ($a < $b) {
        $result=$b - $a;
    }
    else {
        $result = $a - $b;
    }
    return $result;
}
/**
 * Returns the division of two numbers.
 *
 * @param int|float $a The first number.
 * @param int|float $b The second number.
 *
 * @return int|float The division of $a and $b.
 */
function division($a, $b){
    return round($a / $b);
}
function modulo($a, $b){
    return $a % $b;
}
?>
