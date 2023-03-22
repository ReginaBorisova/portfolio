<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
//    echo "Hello<br>\n";
//    echo "Date is ".date('j-m-y,h:i:s');
//    echo "<br>";
//    $name='Regina';
//    $lastName='Borisova';
//    $input="apple";
//   if (isset($inpun)){
//       echo "Say hi to ".$input;
//   } else {
//       echo "the variable is not defined<br>";
//   }
//   $hereQuote="I am learning";
//   $hereQuote.=" cool PHP <br>";
//   echo $hereQuote;
//   $arrayReginaWorkout=[
//           'Monday'=>'Lower Body Workout',
//       'Wednesday'=>'Back and Arms Workout',
//       'Friday'=>'Abdominals please'
//
//   ];
//    print_r($arrayReginaWorkout);
//    echo '<br>';
//    echo '<br>';
//    $exercise= 'push-up';
//    switch($exercise){
//        case 1:
//            echo '$exercise is a number, not the exercise';
//            break;
//        case 'squat':
//            echo '$exercise is a good exercise';
//            break;
//        case 'eating':
//            echo '$exercise is not exercise at all';
//            break;
//        case 'push-up':
//            case 'lounges';
//            echo $exercise.' is my fav exercise EVER';
//            break;
//        default:
//            echo $exercise.' is not an exercise. Why should you use all these examples?';
//          }
//    echo '<br>';
//    echo '<br>';
//    $myVar = 'banana';
//
//    $result = match($myVar){
//        1=> $myVar.' is a number',
//        'apple','banana' => $myVar.' is a fruit <br>',
//        default => $myVar.' neither a fruit nor a number',
//    };
//          echo $result;
//      echo'<br';
//
//  $i=0;
//    while ($i<=100){
//        echo "$i <br>";
//        $i++;
//    }

    $myArray=[
        'name'=> "Reginka",
        'title'=>"cool WebDev",
        "company"=>"FactSet",
    ];
foreach($myArray as $key=>$value){
    echo $key.' '.$value.'<br>';

}

//echo '<br';
// function maFirst() {
//    echo 'Here the 1st PHP function';
//};
// maFirst();
//  $number=4;
//  echo "The $number is even "."I can divide it by 2!";
//
//    function doubleIt($number){
//        $number*=2;
//        echo "The $number is ".$number. "<br>";
//
//    }
//    $number=4;
//    doubleIt($number);
//
//    echo 'Outside the function, the $number is still '.$number."<br>";// why both lines do not shown in browser ?
//
//    function doubleIt($number){
//        return $number*=4;
//    }
//    $num=4;
//    $doubled=doubleIt($num);
//    echo "$num is ".$num.'<br>';
//    echo '$doubled is '.$doubled;
////
//    function counter($num){
//        $i=1;
//        while ($i < $num){
//            yield $i++;
//        }
//        yield $i;
//        yield $i+10;
//        yield $i+20;
//    }
//
//    $numbers = counter(5);
//    foreach ($numbers as $number){
//        echo $number. ' ';
//    }
//    ?>
    
</body>

</html>