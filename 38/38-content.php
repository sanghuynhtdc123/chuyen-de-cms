<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="module_38">
    <div class="module-38">
        <h1 class="h-module-38">
            FIND ADVENTURE
        </h1>
        <br>
        <p class="p-module-38">Lorem ipsum dolor sit amet, consectetur adipisicing</p>
        <br>
        <p class=" pp-module-38"> elit,
            do eius mod tempor incididunt.</p>
    </div>
</div>