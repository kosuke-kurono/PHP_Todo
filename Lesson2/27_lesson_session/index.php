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

//セッションに値を保存する
$_SESSION['message']= 'セッションの値です';

?>
<a href="page02.php">2ページ目へ</a>
</body>
</html>
<!-- ブラウザ上でのセッションの確認
・デベロッパーツール⇒Application⇒Cookies⇒URL(クッキーに保存されている値の一覧が見れる)
・PHPSESSIDとなっているのが保存されているセッション
・ValueにはセッションIDが記載されている。
・セッションはブラウザを閉じると削除されるのでクッキーより安全性は高い
・セッションIDを盗まれる可能性があるため接続するごとにIDはランダムで切り替わるようにしておく事 -->

