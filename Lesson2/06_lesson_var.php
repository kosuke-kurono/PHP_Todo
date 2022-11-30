
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php 
$sum = 100+10+20;
echo $sum;

$sum = $sum *2;
echo $sum;

  ?>
合計金額は<?php echo $sum ?>円です
合計金額は<?php echo $sum * 1.1 ?>円です
</body>
</html>