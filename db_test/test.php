<?php

$link = mysqli_connect('localhost', 'root', '', 'class');

$sqlstr  = " INSERT INTO person (usercode, username, address, birthday, height, weight, remark) VALUES ('p002', 'Bruce', 'Taipei', '2010-2-8', '170', '80', ''); ";
mysqli_query($link, $sqlstr);


mysqli_close($link);

echo 'ok';
?>