<?php

function pagemake($content='', $head='', $subtitle='Hello')
{  
  $html = <<< HEREDOC
   <!--
Design by Bryant Smith
http://www.bryantsmith.com
http://www.aszx.net
email: template [-at-] bryantsmith [-dot-] com
Released under Creative Commons Attribution 2.5 Generic.  In other words, do with it what you please; but please leave the link if you'd be so kind :)

Name       : Green Creative
Description: One column, with top naviagation
Version    : 1.0
Released   : 20081222
-->


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css" />
<title>Green Creative by Bryant Smith</title>
</head>

<body>
    <div id="page">
		
        <div id="header">
        	<div id="headerTitle">Green Creative</div>
            <div id="headerSubText">Inspired by Creative Commons, licensed under Creative Commons.</div>
            
        </div>
        <div id="bar">
        	<a href="index.php">home</a>
            <a href="list_page.php">分頁列出</a>
            <a href="add.php">新增</a>
            <a href="page.php?code=note2">最新消息note2</a>
            <a href="#">products</a>
            <a href="#">faq</a>
            <a href="#">contact</a>
      </div>
        <div class="contentTitle"><h1>{$subtitle}</h1></div>
        <div class="contentText">
         {$content}
        </div>
        <div class="contentTitle"><h1>Another Title Goes Here!</h1></div>
        <div class="contentText">
          <p>This particular template goes not have a naviagation panel; it was intended for simple sites.   I am also making a version of this template with navigation, check out <a href="http://www.bryantsmith.com">BryantSmith.com</a> to get it.</p>
          <p>&nbsp;</p>
          <p><a href="index.html">(read more)</a></p>
        </div>
        <div class="contentTitle"><h1>Yet Another?</h1></div>
        <div class="contentText">Each title is an H1 tag, so choose them carefully :)</div>  
</div>
        <div id="footer"><a href="http://www.aszx.net">web development</a> by <a href="http://www.bryantsmith.com">bryant smith</a></div>
</body>
</html>

HEREDOC;

echo $html;
}

?>