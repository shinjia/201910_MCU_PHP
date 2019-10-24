<?php
$height = isset($_POST['height']) ? $_POST['height'] : 1;
$weight = isset($_POST['weight']) ? $_POST['weight'] : 1;

// 計算 BMI
$bmi = ($weight) / (($height/100) * ($height/100));
// $bmi = $weight / pow(($height/100),2);
// $bmi = $weight / (($height/100) ** 2);

// 取兩位小數
$bmi = round($bmi, 2);
// $bmi = number_format($bmi, 2);
// $bmi = floor($bmi*100) / 100;


$msg = '';
if($bmi>=24)
{
   $msg = '月巴月半';
}
elseif( $bmi<24 && $bmi>=22 )
{
   $msg = '過重';
}
elseif( $bmi<22 && $bmi>=17.5 )
{
   $msg = '正常';
}
elseif( $bmi <17.5 )
{
   $msg = '太輕';
}
else
{
   $msg = '程式一定出錯了';
   echo $msg;
   exit;
}


$html = <<< HEREDOC
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>BMI</title>
</head>

<body>
<h1>檢測BMI</h1>
<p>BMI = {$bmi}</p>
<p>{$msg}</p>

<hr/>
h={$height}, w={$weight}
</body>
</html>
HEREDOC;

echo $html;
?>
