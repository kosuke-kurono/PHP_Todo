
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
$week_name =['日','月','火','水','木','金','土'];
echo  $week_name[1] . '<br>';

$week = date('w');
echo $week_name[$week];

  
?>



</body>
</html>