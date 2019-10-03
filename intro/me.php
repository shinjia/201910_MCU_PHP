<?php

$name = '阮經天';
$age = 18;
$pic = 'head2.jpg';

/*
$name = '陳信嘉';
$age = 25;
$pic = 'head1.jpg';
*/

$html = <<<HEREDOC
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Title of the document</title>
</head>
<body>

<h1>自我介紹</h1>
<p>姓名：{$name}</p>
<p>年齡：{$age}</p>
<img src="images/{$pic}">    

</body>
</html>
HEREDOC;

echo $html;
?>