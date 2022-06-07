<?php
  $tappa = [
    [
      'casa' => [
        'nome' => 'roma',
        'punti' => 50,
      ],
      'ospite' => [
        'nome' => 'lazio',
        'punti' => 45,
      ]
    ],
    [
      'casa' => [
        'nome' => 'milano',
        'punti' => 50,
      ],
      'ospite' => [
        'nome' => 'inter',
        'punti' => 65,
      ]
    ],
    [
      'casa' => [
        'nome' => 'napoli',
        'punti' => 70,
      ],
      'ospite' => [
        'nome' => 'salernitana',
        'punti' => 35,
      ]
    ],
  ]
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
  <?php foreach ($tappa as $value): ?>
    <div> <?php echo $value["casa"]["nome"] .' - '. $value["ospite"]["nome"] .' | '. $value["casa"]["punti"] .'-'. $value["ospite"] ["punti"] ?>
  <?php endforeach ?>
 </div>
</body>
</html>