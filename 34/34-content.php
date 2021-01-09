<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Indie+Flower&family=Montserrat:wght@700&display=swap" rel="stylesheet">
 <div class="modum34">
 <div class="modum-34">
 <h2 class ="h-modum34">getready</h2>

<h1 class ="h1-modum34">
FOR WAVE THRILLS!
</h1>
 </div>
 </div>