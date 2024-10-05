<html lang=”ja”>
  <head>
<meta name="robots" content="noindex">
    <link rel="stylesheet" type="text/css" href="./assets/reset.css">
<link rel="stylesheet" href="./assets/lightbox.css">
<link rel="stylesheet" type="text/css" href="./assets/6-2-1.css">
<link rel="stylesheet" type="text/css" href="./assets/loading.css">
<meta http-equiv="Content-Language" content="ja">
<meta name="google" content="notranslate">
    <meta charset="utf-8">
    <title>DALL-E</title>
  </head>
<body>
  <div id="loading-wrapper">
<div class="sk-cube-grid">
  <div class="sk-cube sk-cube1"></div>
  <div class="sk-cube sk-cube2"></div>
  <div class="sk-cube sk-cube3"></div>
  <div class="sk-cube sk-cube4"></div>
  <div class="sk-cube sk-cube5"></div>
  <div class="sk-cube sk-cube6"></div>
  <div class="sk-cube sk-cube7"></div>
  <div class="sk-cube sk-cube8"></div>
  <div class="sk-cube sk-cube9"></div>
</div>
    <div class="loader"></div>
    <p>Loading...</p>
  </div>

<div id="page">
<div class="wrapper">
<ul class="gallery">
<?php
$dir = "./img/";



if (is_dir($dir)) {
    $files = array();
    if ($dh = opendir($dir)) {
        while (($file = readdir($dh)) !== false) {
            if(!preg_match("/^\./", $file) && !is_dir($file)) {
                $files[$file] = filemtime($dir . $file);
            }
        }
        closedir($dh);
    }
    asort($files); // ファイルの最終更新日時でソート
    foreach ($files as $file => $mtime) {
        echo "<li><a href='./img/$file' data-lightbox='gallery3' data-title='$file'><img src='./img/$file' alt=''></a></li>\n";
    }
}
?>
</ul>
</div>
</div>
<script src="./assets/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="./assets/lightbox.js"></script>
<script src="./assets/6-2-1.js"></script>
<script src="./assets/loading.js"></script>
  </body>
</html>
