<?php
 
 $db = [
     'teachers' => [
         [
             'name' => 'Michele',
             'lastname' => 'Papagni'
         ],
         [
             'name' => 'Fabio',
             'lastname' => 'Forghieri'
         ]
     ],
     'pm' => [
         [
             'name' => 'Roberto',
             'lastname' => 'Marazzini'
         ],
         [
             'name' => 'Federico',
             'lastname' => 'Pellegrini'
         ]
     ]
 ];

 $grey="grey";
 $green="green";

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style> 
  .grey{
    background-color: grey
  }
  .green{
    background-color: green
  }
  </style>
</head>
<body>
  <?php foreach ($db as $role => $values): ?>
    <div style="width: 100px" class="<?php echo ($role == 'teachers') ? $grey : $green ?>">
      <?php echo $role ?>
        <ul>
          <?php foreach ($values as $value): ?>
            <li><?php echo $value ?></li>
          <?php endforeach ?>
        </ul>
    </div>
  <?php endforeach ?>
</body>
</html>