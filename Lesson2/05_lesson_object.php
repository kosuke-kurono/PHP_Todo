
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
$today =new DateTime();
$today->setTimezone(new DateTimeZone('Asia/Tokyo'));
echo '現在は、' . $today->format('G時 i分 s秒') . 'です';


// オブジェクトの使い方と操作方法

// オブジェクトの宣言 $オブジェクト名 = new クラス名()
// オブジェクトに用意されているメソッドを利用するには->を利用する

  ?>
  
</body>
</html>