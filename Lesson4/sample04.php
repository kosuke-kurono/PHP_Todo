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

  $message = 'formからのメモです';
  // prepare()を利用すると？を使用することができ変数のように可変の値を代入できる
  $stmt = $db->prepare('insert into memos (memo) values(?)');
  if (!$stmt){
    die($db->error);
  }

  // bind_paramの使い方
  // bind_param()は変数に値を代入する
  // 第一引数にはデータ型を指定する
  // 's' stringの略
  // 'i' integerの略
  // 第一引数を複数指定する場合は'ssi'などと続けて記述する
  // 第二引数以降は挿入するデータの数だけカンマ区切りで複数指定可能 
  $stmt->bind_param('s', $message);

  // execute()は作成したSQL文を実行する
  $success = $stmt->execute();

 if($success){
   echo 'データを挿入しました';
 }else{
  echo 'データの挿入に失敗しました';
  echo $db->error;
 }
  

  ?>
</body>
</html>