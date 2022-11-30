
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
date_default_timezone_set('Asia/Tokyo');

for($i = 0;$i <366; $i++):
$time = strtotime("+$i day");

$day = date('n/j(D)',$time);
echo $day . '<br>';
endfor;
  
?>



</body>
</html>