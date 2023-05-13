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
<h1><?php require_once __DIR__ . '/functions/functions.php';?>
    <?php $test=array('a' => 2, 'b' => 5);
     foreach($test as $key=> $value) {
           echo "The minimum of {$test['a']} and {$test['b']} is: " . minim($test['a'], $test['b']) . "<br>";
           echo "The maximum of {$test['a']} and {$test['b']} is: " . maximum($test['a'], $test['b']) . "<br>";
           echo "The sum of {$test['a']} and {$test['b']} is: " . summ($test['a'], $test['b']) . "<br>";
           echo "The difference between {$test['a']} and {$test['b']} is: " . difference($test['a'], $test['b']) . "<br>";
           echo "The multiplication of {$test['a']} and {$test['b']} is: " . product($test['a'], $test['b']) . "<br>";
           echo "The division of {$test['a']} and {$test['b']} is: " . division($test['a'], $test['b']) . "<br>";
           echo "The modulo of {$test['a']} and {$test['b']} is: " . modulo($test['a'], $test['b']) . "<br>";
       }
    ?>
</h1>
</body>
</html>