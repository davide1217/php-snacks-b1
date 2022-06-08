<?php
  $archive= [
    '01-01-01' => [
      'lorem rgtrgwg',
      'lorem rwxgrnihbaorubf',
      'lorem oqeibcqox',
    ],
    '02-02-02' => [
      'lorem rgtrgwg',
      'lorem rwxgrnihbaorubf',
      'lorem oqeibcqox',
    ],
    '03-03-03' => [
      'lorem rgtrgwg',
      'lorem rwxgrnihbaorubf',
      'lorem oqeibcqox',
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
  <?php foreach ($archive as $date => $posts):?>
    <div>
      <?php echo $date ?>
        <ul>
          <?php foreach ($posts as $value):?>
            <li><?php echo $value ?></li>
          <?php endforeach; ?>
        </ul>
    </div>
  <?php endforeach; ?>
</body>
</html>