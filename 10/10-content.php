<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="module-10">
    <div class="module-10__grid">
        <div class="module-10__item-one">
            <a href="" class="module-10__item-one-link">
                <img src="./images/h1-img-13.jpg" alt="" class="module-10__item-img">
            </a>
        </div>
        <div class="module-10__item-two">
            <a href="" class="module-10__item-two-link">
                 <img src="./images/h1-img-14-650x1300.jpg" alt="" class="module-10__item-img">
            </a>
        </div>
        <div class="module-10__item-three">
            <a href="" class="module-10__item-three-link">
                <img src="./images/h1-img-15-1-650x650.jpg" alt="" class="module-10__item-img">
            </a>
        </div>
        <div class="module-10__item-four">
            <a href="" class="module-10__item-four-link">
                <img src="./images/h1-img-16-650x650.jpg" alt="" class="module-10__item-img">
            </a>
        </div>
        <div class="module-10__item-five">
            <a href="" class="module-10__item-four-link">
                <img src="./images/h1-img-17-1-650x650.jpg" alt="" class="module-10__item-img">
            </a>
        </div>
        <div class="module-10__item-six">
            <a href="" class="module-10__item-four-link">
                <img src="./images/h1-img-18-1-650x650.jpg" alt="" class="module-10__item-img">
            </a>
        </div>
    </div>
</div>