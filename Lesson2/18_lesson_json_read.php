
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
// jsonファイルの出力方法
// 取得するのは同一フォルダに格納されているfeed.jsonを利用する

// ファイルの取得
$file = file_get_contents('feed.json');

// ファイルをphpで利用できるように処理
$json = json_decode($file);

// 取得したい値のキーを指定
echo $json->description;

// 配列となっている値の取得
echo $json->items[0]->title;

//配列の値をforeachで取得する
foreach ($json->items as $item):
?>
<br>・<a href="<?php echo $item->url; ?>" ><?php  echo $item->title; ?></a>

<?php endforeach; ?>


</body>
</html>