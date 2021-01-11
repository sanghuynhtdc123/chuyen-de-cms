<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="module_75">
   <div class="heading">
       <h2>SURFING VACATION</h2>
   </div>
   <div class="menu">
       <a class="a1" href="">Home  /</a>
       <a class="a2" href="">Surfing Vacation</a>
   </div>
</div>