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

  function mediaVoti($voti) {
    $somma= 0;

    foreach ($voti as $voto) {
      $somma += $voto;
    };

    $media = $somma / count($voti);

    return $media;
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
  <?php foreach ($alunni as $alunno): ?>
    <div>
      <?php echo $alunno['nome'] ?> 
      <?php echo $alunno['cognome'] ?>
      media : <?php echo mediaVoti($alunno['voti']) ?>
    </div>
  <?php endforeach ?>
</body>
</html>