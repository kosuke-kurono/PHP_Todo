<?php
$price = 100 - 150;
// if ($price < 0) {
//    $price = 0;
// }

$price = ($price>0 ? $price : 0);

echo $price;

echo '<br>';

$choice = 'off';
// if ($choice === '') {
//     $choice = 'off';
// }
// $choice = ($choice ? $choice : 'off');
$choice = ($choice ?: 'off');
echo $choice . 'です';
?>