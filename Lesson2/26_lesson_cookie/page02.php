<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  変数の値：
<?php 
$value = '変数';
?><br>
Cookieの中<?php

// クッキーに保存された値を出力する
echo $_COOKIE['message'];
?>
</body>
</html>