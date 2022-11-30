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
  require('dbconnect.php');
  $stmt = $db->prepare('select * from memos where id=?');
  if (!$stmt){
    die ($db->eror);
  }
  $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
  if (!$id){
    echo '表示するメモを指定してください';
    exit();
  }
  $stmt->bind_param('i',$id);
  $stmt->execute();

// 取得したレコードの各カラムを変数に代入
  $stmt->bind_result($id,$memo,$created);
  // データベースから一件のデータを取得する
  $result = $stmt->fetch();
  if (!$result){
    echo '指定されたメモは見つかりませんでした';
    exit();
  }
  ?>

  <div><pre><?php echo htmlspecialchars($memo); ?></pre></div>
  <p>

    <a href="update.php?id=<?php echo $id ; ?>">編集する</a>
    <a href="delete.php?id=<?php echo $id ;?>">削除する</a>
    <a href="/memo">一覧へ</a>
  </p>
</body>
</html>