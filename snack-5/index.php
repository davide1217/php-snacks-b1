<?php 

$lorem ="Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex aspernatur delectus at praesentium odit sunt doloremque sed corrupti corporis ducimus omnis totam obcaecati quis quia similique impedit facere a perspiciatis qui laboriosam, incidunt, minus ab nisi nam? Aspernatur ipsa debitis voluptates ad explicabo facere. Iure ipsum dolor nesciunt voluptas porro! Eos distinctio rerum laudantium accusamus quisquam ducimus inventore beatae numquam animi. Reiciendis natus accusamus consequuntur consectetur iste asperiores rerum temporibus quos odit nobis, dolores veniam inventore deleniti et error itaque necessitatibus quidem molestias enim nisi recusandae porro! Iusto ab necessitatibus, ullam vitae cupiditate obcaecati nihil placeat est enim corrupti ad.";

$array = explode('.', $lorem);

if(empty($array[count($array) - 1])) {
  array_pop($array);
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

  <?php foreach ($array as $value): ?>
    <p><?php echo $value ?></p> <br>
  <?php endforeach ?>
  
</body>
</html>