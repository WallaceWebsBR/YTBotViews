<?php
//TO DEBUG ERRORS
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);

//FUNCTIONS
function proxy($proxy, $urlget){
$url = 'http://image.thum.io/get/'.$urlget;
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_PROXY, $proxy);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_HEADER, 1);
$curl_scraped_page = curl_exec($ch);
curl_close($ch);
}

//GET URL AND PROXY TO MAKE REQUEST TO GENERATE SCREENSHOT OF PAGE
$proxy = $_GET['proxy'];
$url = $_GET['url'];

proxy($proxy, $url);

//RESULT
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
      ProxyURL(IP:PORT) : <input tyoe="text" name="proxy"><br />
      <input type="submit" placeholder="SEND IT">
      </form>
</body>
</html>
