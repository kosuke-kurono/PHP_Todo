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
  // セッションを利用する際の決まり文句。必ず先頭に記述する
  session_start(); 
  // セッションIDをその都度新しく生成する。セキュリティ向上の為に設定する
  session_regenerate_id();
  ?>

 セッションの値 ：
<?php 
echo $_SESSION['message'];
?>
</body>
</html>