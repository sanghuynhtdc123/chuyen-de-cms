<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="module_80">
    <div class="images">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 one_img">
                <img src="./images/event-sidebar-banner-1.jpg" alt="" class="img-fluid">
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12 two_img">
                <img src="./images/event-sidebar-banner-2.jpg" alt="" class="img-fluid">
            </div>
        </div>
    </div>
</div>