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

      echo  " PHP CALCULATIONS "

     ?>
</h2>

<h1><?php
       function product($a, $b){
           return $a * $b;
       }

       function maximum($a, $b){
           return max($a,$b);
       }

       function minim($a, $b){
           return min($a, $b);
       }

      function summ($a, $b){
        return $a+$b;
      }

    function difference($a, $b){
        if ($a < $b) {
            $result=$b - $a;
        }
        else {
            $result = $a - $b;
        }
        return $result;
    }
    function division($a, $b){
        return round($a / $b);
    }

    function modulo($a, $b){
        return $a % $b;
    }


       $a= 8;
       $b = 2;

       echo "The minimum of $a and $b is: ".minim($a, $b)."<br>";
       echo "The maximum of $a and $b is: ".maximum($a, $b)."<br>";
       echo "The sum of $a and $b is: ".summ($a, $b)."<br>";
       echo "The difference between $a and $b is: ".difference($a, $b)."<br>";
       echo "The multiplication of $a and $b is: ".product($a, $b)."<br>";
       echo "The division of $a and $b is: ".division($a, $b)."<br>";
       echo "The modulo of $a and $b is: ".modulo($a, $b)."<br>";





    ?>

</h1>

</body>
</html>