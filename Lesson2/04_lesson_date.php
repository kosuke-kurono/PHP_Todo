
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
  date_default_timezone_set('Asia/Tokyo');
  echo date('G時 i分 s秒');
  echo  "現在は" . date('G時 i分 s秒') . "です";

  ?>
  
</body>
</html>