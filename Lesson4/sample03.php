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
  // Mysqlへの接続
  // 今回は学習にMAMPを使用しているので
  // MAMPのOpen WebStart pageに遷移してその下部に記載されている情報を利用する
  $success = $db= new mysqli('localhost:8889','root','root','mydb') ;
  if ($success){
    echo "DBに接続しました" . '<br>';
  }else{
    echo "DBに接続できませんでした";
    echo $db->error;
  }

  $success = $db->query('insert into memos (memo) values("PHPから登録")');
 if($success){
   echo 'データを挿入しました';
 }else{
  echo 'データの挿入に失敗しました';
  $db->error;
 }
  

  ?>
</body>
</html>