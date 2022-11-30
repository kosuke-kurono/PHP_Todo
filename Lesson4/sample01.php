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
    echo "DBに接続しました";
  }else{
    echo "DBに接続できませんでした";
    echo $db->error;
  }

  // $db->query('drop table test');
  // echo "テーブルを削除しました";

  //if exists  テストテーブルがあれば削除する条件を指定
   $db->query('drop table if exists test');

  $success = $db->query('create table test(id INT)');
  if ($success){
    echo "テーブルを作成しました";
  }else{
    echo "SQLが正常に動作しませんでした";
    echo $db->error;
  }

  // queryの使い方とエラー確認
// queryは処理に失敗するとfalseを返すため
// それを利用して処理が成功したかの判定ができる

// また、正常に処理が行えなかった場合には$db内にエラー内容を保持されているので
// $db->errorで内容を確認することができる


  ?>
</body>
</html>