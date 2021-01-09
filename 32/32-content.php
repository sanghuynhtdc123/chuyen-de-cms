<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Alex+Brush&display=swap" rel="stylesheet">
<div class="modum53">
<div class="module-2">
<div class="module-2__img">
<div class="baner-anh">
    <h1 class ="modum-h1">20 %</h1>
    <p class ="modum-p1">SHOP PERFECT WAVE</p>
    <p class ="modum-p1">SWIMSUIT PIECE</p>
    <p class="modum-p2" >Lorem ipsum dolor sit amet, consectetur adipisicing elit,</p>
    <div class="modum-p22">do eius mod tempor incididunt.</div>
      <div class="banner-bnt">
           <a class= "anh" href="">SHOP NOW</a>
      </div>
</div>
</div>
    