<?php

$page = htmlentities($_GET['page']);

$pages = scandir('pages');


if (!empty($page) && in_array($_GET['page'].".php",$pages))
{
  $content = 'pages/'.$_GET['page'].".php";
}
else
{
  header("Location:index.php?page=login");
}




?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
  <div id="content">
          <?php
              include($content);
          ?>
  </div>
</body>
</html>