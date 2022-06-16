<?php

$msg = 'こんにちは！';
print $msg;

$x = "title";
$title = "PHP:Hypertext Preprocessor";

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
    <p style="color: red;"><?php print $$x ?></p>
</body>
</html>