<?php

// 定数の基本
const TAX = 1.1; # define('TAX', 1.1); で書き換えも可能
$price = 1000;
$sum = TAX * $price

?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>sec2-2</title>
  <link rel="stylesheet" type="text/css" href="./css/style.css">
</head>
<body>
    <p style="color: red;"><?php print $sum ?></p>
</body>
</html>