
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
$zip = '123-4567';
// 正規表現で郵便番号の形式を判定する
if (preg_match("/\A\d{3}[-]\d{4}\z/",$zip)){
  echo '郵便番号:' . $zip;
}else{
  echo '*郵便番号を正しく入力してください';
}
?>


</body>
</html>