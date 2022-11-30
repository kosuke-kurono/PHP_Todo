
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
// 独自の関数を定義する  function 関数名(){}
function intax($value){
return ceil($value *1.1);
}

$price = 1700;
$price_tax= intax($price);
echo $price_tax;


?>

</body>
</html>