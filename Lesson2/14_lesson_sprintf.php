
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>



2022.08.03
<?php 

// sprintf() 桁数調整などで利用できる dはデジマルの略

// 指定した桁数を超える場合はそのまま出力される
$date = sprintf('%04d', 212121);
// 前を0埋めして区切り文字は年などの日本語も対応
$date = sprintf('%d年%02d月%02d日', 2022,11,1);
echo $date;
 ?>

</body>
</html>