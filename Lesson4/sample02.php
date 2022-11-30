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
  // select文では必ず変数に格納して利用する  
  // そのままechoでは処理できないため後述するループ処理で出力を行う
  //$records = $db->query('select * from my_items');
  $records = $db->query('select count(*) from my_items');
  // var_dump($records);

if($records){
  // fetch_assoc()は連想配列として要素を取得する
  // 下記の記述ではforeachのようにレコードを一行ごとに処理を行う
  while ($record = $records->fetch_assoc()){
    //echo $record['item_name'] . '<br>';
    echo $record['count(*)'] . '<br>';
  }
}else {
  echo $db->error;
}

  ?>
</body>
</html>