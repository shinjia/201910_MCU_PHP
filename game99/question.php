<?php
define('MIN_A' , 2);  // 定義常數
define('MIN_B' , 2);
define('MAX_A' , 5);  // 定義常數
define('MAX_B' , 9);

$a = mt_rand(MIN_A, MAX_A);
$b = mt_rand(MIN_B, MAX_B);

$pic1 = 'images/' . $a . '.jpg';
$pic2 = 'images/' . $b . '.jpg';


$html = <<< HEREDOC
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>九九乘法CAI練習</title>
</head>
<body>
<h1>九九乘法CAI練習</h1>
<p><img src="{$pic1}"><img src="images/mul.jpg"><img src="{$pic2}"></p>

<p>| <a href="answer.php?a={$a}&b={$b}">看答案</a> | <a href="question.php">換下一題</a> |</p>
</body>
</html>
HEREDOC;

echo $html;
?>