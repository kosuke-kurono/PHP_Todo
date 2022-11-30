
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
// file_get_contents()は変数に格納して処理を行う
$news = file_get_contents('data/news.txt');
echo $news;

// ファイルへ追記
$news=$news . "<br>追加のニューズ";
$success= file_put_contents('data/news.txt',$news);

// readfile()は直接ファイルを指定して処理を行うことができる
readfile('data/news.txt');


 ?>

</body>
</html>