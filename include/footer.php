<?php
$startyear = 2020;
$thisyear = date("Y");
if ($startyear == $thisyear){
    $output = $startyear;
}else {
    $output = "{$startyear}&ndash;{$thisyear}";
}

?>
<footer id="main-footer"> <?= "$copyright"?>&copy; <?=$output?>
</footer>
<script src="/js/main.js"></script>