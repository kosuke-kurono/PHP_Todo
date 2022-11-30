
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
  // 連想配列
$fruits = [
  'apple' => 'りんご',
  'grape' => 'ブドウ'
];

echo $fruits['apple'];
?>
<dl>
  <dt>apple</dt>
  <dd>りんご</dd>
  <dt>grape</dt>
  <dd>ブドウ</dd>
</dl>

<!-- foreach文 キーとバリュー両方取得したい場合の記述方法    バリューのみでは foreach($fruits as $value)となる -->
<?php foreach($fruits as $key => $value): ?>
  <dt><?php echo $key ?></dt>
  <dd><?php echo $value ?></dd>

  <?php endforeach; ?>
</body>
</html>