<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
 <div class="modum38">
 <div class="modum-38">
 <h2 class ="h-modum38">get ready</h2>

<h1 class ="h1-modum38">
FOR WAVE THRILLS!
</h1>
 </div>
 </div>