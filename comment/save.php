<?php
$nickname = isset($_POST['nickname']) ? $_POST['nickname'] : '';
$comment = isset($_POST['comment']) ? $_POST['comment'] : '';

// $data = nl2br($comment);
$now = date('Y-m-d H:i:s', time());


$data = <<< HEREDOC
時間：{$now}
姓名：{$nickname}
意見：{$comment}
------------------------------------

HEREDOC;


$filename = 'save/data_' . date('Ymd', time()). '.txt';

if(!file_exists($filename))
{
    file_put_contents($filename, '');
}

$old = file_get_contents($filename);
$new = $data . $old;

file_put_contents($filename, $new);


// send IFTTT (PHP Curl-->IFTT--->webhood-->LINE)
$event = 'PHP_****_Comment';
$key = 'c5KMehf3********SQa8SE';
$ext = '?value1=' . $nickname;

$url = 'https://maker.ifttt.com/trigger/' . $event . '/with/key/' . $key . $ext;

//
 
$ch = curl_init();
 
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$output = curl_exec($ch);
 
curl_close($ch);
 



$html = <<< HEREDOC
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>意見留言</title>
</head>
<body>
<h1>意見留言</h1>
<p>謝謝，已經收到您的意見。</p>
<hr>
{$output}
</body>
</html>
HEREDOC;

echo $html;
?>