<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<!-- formのmethodで指定された属性ごとに受け取るメソッドを対応させる
$_REQUEST  get postどちらの属性も受け取れるがセキュリティせいに問題がある
$_GET      getで指定されているformの値を取得できる
$_POST     postで指定されているformの値を取得できる -->


<?php if (!empty($_REQUEST['my_name'])): ?>
  <!-- $_REQUESTに指定する値は遷移元のname属性と同じ値とする
  今回はお名前の入力値を取得するためmy_nameを指定する -->
  <p>お名前:<?php echo htmlspecialchars($_REQUEST['my_name'],ENT_QUOTES)?></p>
<?php endif; ?>

<!-- formから受け取る際にhtmlspecialchars()を指定する必要がある
不使用の場合、JSコードなどのプログラミング言語で攻撃を受ける可能性がある -->




</body>
</html>