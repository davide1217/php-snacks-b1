<?php

  $name= $_GET["name"];
  $mail= $_GET["mail"];
  $age= $_GET["age"];

  $out_put = "";

  if(strlen($name) > 3 && strpos($mail, '.') != false && strpos($mail, '@') != false && is_numeric($age)) {
    $out_put = "Accesso riuscito";
  } elseif ($name == null || $mail == null || $age == null) {
    $out_put = "Insert all datas";
  } else {
    $out_put = "Accesso fallito";
  };

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
  <div> <?php echo $out_put ?> </div>
</body>
</html>