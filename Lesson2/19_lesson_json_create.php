
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
// jsonデータの作成とファイル保存

// 二次元配列を作成してこのデータをJsonにするための処理を行っていく
$json_sample =[
  "title" => "JSONサンプル",
  "items" => [
    "りんご",
    "みかん"
  ]
  ];

  // Json形式に変換して変数に保存
  // JSON_UNESCAPED_UNICODEはJsonデータを文字列データではなく日本語として表示させるためのもの
  // 理由がなければ第二引数は使用しなくてよい
$json = json_encode($json_sample,JSON_UNESCAPED_UNICODE);

// 確認用に出力
echo $json;

// 作成したJsonデータをファイル名を指定して保存する
file_put_contents('json_sample.json', $json);
?>


</body>
</html>