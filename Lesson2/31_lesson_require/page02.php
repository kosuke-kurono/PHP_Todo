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
// 他のファイルの関数を読み込めるようにする
// 別ディレクトリから呼び出す場合にはディレクトリ名も含める
require('index.php');

$price = 2000;
$price_tax= intax($price);
echo $price_tax;


?>


</body>
</html>