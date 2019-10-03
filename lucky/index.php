<?php

$num = mt_rand(0,9);
$pic = 'images/' . $num . '.jpg';

$html = <<< HEREDOC
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Title of the document</title>
</head>
<body>
<h1>Hello World</h1>
<p>你的幸運數字</p>
<p><img src="{$pic}"></p>
<hr>
pic變數為 {$pic}
</body>
</html>
HEREDOC;

echo $html;
?>