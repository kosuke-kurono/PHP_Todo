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

$file = $_FILES['picture'];
// var_dump($file);

// 送信されたファイルがjpeg形式もしくはpng形式であることを確認する
if ($file['type'] === 'image/jpeg' || $file['type'] === 'image/png' ){

  // 画像の保存先を指定
  $path ='images/' . $file['name'];

  // アップロードされた画像ファイルを保存
  $success = move_uploaded_file($file['tmp_name'],$path);
  
  if($success){
    echo '成功しました';
  }else{
    echo '失敗しました';
  }

}else{
  echo 'ファイルタイプが不正です';
}
  ?>

<?php 

?>
</body>
</html>