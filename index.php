<?php
//TO DEBUG ERRORS
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);

$url = $_GET['url'];
$file = file_get_contents('http://image.thum.io/get/'.$url);

echo "+1 VISIT GENERATED!!!";
?>
<html>
  <head>
    <title>Youtube Views BOT by WallaceWebs</title>
  </head>
  <body>
  </body>
      <form action="#" method="GET">
      YoutTube URL: <input type="text" name="url"><br />
      <input type="submit" placeholder="SEND IT">
      </form>
</body>
</html>
