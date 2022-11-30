<?php
date_default_timezone_set('Asia/Tokyo');
$time = date('G');
?>
<?php if ($time < 9): ?>
    <p>※ 営業時間外です</p>
<?php else: ?>
    <p>ようこそ</p>
<?php endif; ?>

<?php
$s = '';
if ($s): // $s !== ''
    echo '$sには文字が入っています';
endif;

$x = 0;
if ($x): // $x !== 0
    echo '$xは0ではありません';
endif;

$x = 10;
if (!$x):
    echo '$xは0です';
endif;