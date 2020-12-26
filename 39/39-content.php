<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="module-4">
     <div class="module-4__row-item-content">
                <div class="module-4__row-item-weather">
                <p class="boderexam1">SURFING</p>
                <div class="anh1">Home / Find Adventure / Surfing</div>
                </div>
            </div>       
        </div>
</div>