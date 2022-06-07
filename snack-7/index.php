<?php

  $alunni = [
    [
      'nome' => 'Davide',
      'cognome' => 'Pizzola',
      'voti' => [
        'matematica' => 9,
        'italiano' => 7,
        'fisica' => 9.5,
        'storia' => 7
      ]
    ],
    [
      'nome' => 'Ugo',
      'cognome' => 'de Ughi',
      'voti' => [
        'matematica' => 6.25,
        'italiano' => 8,
        'fisica' => 5.5,
        'storia' => 8.5
      ]
    ],
    [
      'nome' => 'Lello',
      'cognome' => 'de Lellis',
      'voti' => [
        'matematica' => 8.25,
        'italiano' => 7,
        'fisica' => 8,
        'storia' => 7.5
      ]
    ],
  ];

  function mediaVoti($array) {
    $somma = 0;
    foreach ($array as $value) {
      $somma += $value;
    };
    $media = $somma / count($array);
    $mediaWhole = floor($media);
    $mediaFraction = $media - $mediaWhole;
    $proximateMedia = 0;

    if($mediaFraction <= .25) {
      $proximateMedia = $mediaWhole;
    } elseif ($mediaFraction > .25 && $mediaFraction <= .5) {
      $proximateMedia = $mediaWhole + .5;
    } elseif ($mediaFraction > .5 && $mediaFraction <= .75) {
      $proximateMedia = $mediaWhole + .75;
    } else {
      $proximateMedia = round($media);
    }
    echo $media . ' ';
    return $proximateMedia;
  }

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
  <?php foreach ($alunni as $value): ?>
    <div> <?php echo $value['nome'] .' '. $value['cognome'] .' '. ' => Media voti = ' . mediaVoti($value['voti']) ?> </div>
  <?php endforeach ?>
</body>
</html>