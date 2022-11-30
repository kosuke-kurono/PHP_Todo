<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php if (!empty($_POST)) :?>
    お名前
    <p><?php echo $_POST['name'] ?></p>
    Email
    <p><?php echo $_POST['email'] ?></p>

    <!-- $_POST['age']の値が全角数字の場合に半角数字に変換する -->
   <?php $_POST['age']  = mb_convert_kana($_POST['age'], 'n', 'UTF-8') ?>
    <!-- $_POST['age']の値が半角数字であるかを判定する -->
    <?php if (is_numeric($_POST['age'])): ?>
      <p><?php echo $_POST['age'] ?></p>
      <?php else :?>
        <?php echo "数字で入力してください" ?>
        <?php endif;?>
 <?php endif ;?>


</body>
</html>