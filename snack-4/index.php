<?php

  $numbers = getNumbers(0, 100, 15);

  function getNumbers($min, $max, $tot) {

    $array = [];
    for ($i=0; $i <= $tot; $i++) { 

      $number = rand($min, $max);
      if(!in_array($number, $array)) {
        $array[] = $number;
      }  
    };

    return $array;
  };
  var_dump($numbers)
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
</body>
</html>