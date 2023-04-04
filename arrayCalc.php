



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>
    <?php

    echo  " Array Calculations "

    ?>
</h2>

<h1>  <?php
    $text = "h e l l o   t h i s   i s   a   s a m p l e   t e x t   w i t h o u t     p u n c t u a t i o n     w h e r e   e a c h   l e t t e r   h a s   s p a c e   b e f o r e   a n d   a f t e r";


    $counta = 0;
    $countx = 0;
    $counte = 0;
    $countt = 0;

    for ($i=0; $i < strlen($text); $i++) {
        if ($text[$i] == 'a') {
            $counta++;
        }
        elseif ($text[$i] == 'x') {
            $countx++;
        }
        elseif ($text[$i] == 'e') {
            $counte++;
        }
        elseif ($text[$i] == 't') {
            $countt++;
        }

    }

    echo 'The letter "a" was used: '.$counta.' times'.'<br>';
    echo 'The letter "x" was used: '.$countx.' times'.'<br>';
    echo 'The letter "e" was used: '.$counte.' times'.'<br>';
    echo 'The letter "t" was used: '.$countt.' times'.'<br>';

?>
</h1>

</body>
</html>
