<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="module_81">
    <div class="background">
        <div class="img">
            <img src="./images/Untitled-5.png" alt="" srcset="">
        </div>
        <div class="quotes">
            <p>"Sometimes in the morning, when it's a good surf, I go out there, and I don't feel like it's a bad world."</p>
            <a href="">San Diego, California Mia S</a>
        </div>
    </div>
</div>