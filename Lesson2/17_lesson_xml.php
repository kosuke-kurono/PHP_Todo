
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
// 他のウェブサイトの更新情報などを自動更新で取得できるようにも可能
$xmlTree =simplexml_load_file('rss.xml');

echo $xmlTree->channel->description;

foreach($xmlTree->channel->item as $item):
  ?>

・<a href="<?php echo $item->link; ?>"><?php echo $item->title; ?><br>
<?php endforeach; ?>




</body>
</html>