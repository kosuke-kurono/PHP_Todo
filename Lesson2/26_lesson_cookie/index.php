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
$value = '変数';

// クッキーに値を保存する.
// time()はクッキーに保存保存できる期間を指定、指定された期間内であればブラウザを閉じても値を保持できる
setcookie('message','cookieの値',
time() + 60 * 60 * 24 * 14);
?>
<a href="page02.php">2ページ目へ</a>
</body>
</html>
<!-- クッキーに保存した内容をブラウザで確認する
・デベロッパーツール⇒Application⇒Cookies⇒URL(クッキーに保存されている値の一覧が見れる) -->

<!-- ブラウザから有効期限の確認
・デベロッパーツール⇒Application⇒Cookies⇒URL
・確認したいクッキーの値(Name)のレコードでExpiresとなっている場所でいつまで有効か確認できる -->

