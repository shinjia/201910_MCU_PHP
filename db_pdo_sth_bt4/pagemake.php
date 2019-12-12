<?php

function pagemake($content='', $head='')
{  
  $html = <<< HEREDOC
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>基本資料庫系統</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

{$head}

<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">


</head>
<body>


<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="#">Newsletter</a>

  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="index.php">首頁</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="page.php?code=note2">說明</a>
    </li>

    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
      資料列表
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="list_page.php">分頁列表</a>
        <a class="dropdown-item" href="list_all.php">全部列表</a>
        <a class="dropdown-item" href="find.php">查詢</a>
      </div>
    </li>
  </ul>
</nav>



<div class="container">
   <div id="header">
      <h1>後台資料庫管理as fasd fadsf </h1>
   </div>
  
   <div id="nav">     
      | <a href="index.php" target="_top">首頁</a>
      | <a href="page.php?code=note2">說明</a> 
      | <a href="list_page.php">資料列表</a> 
      |
   </div>
  
   <div id="main">
    {$content}
   </div>

   <div id="footer">
     <p>版權聲明 dsafdsafasdf asdf asd</p>
   </div>

</div>


<script src="jquery/jquery.min.js"></script>
<script src="jquery/popper.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>  
HEREDOC;

echo $html;
}

?>