<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="module_79">
    <p>LATEST POSTS</p>
    <div class="post">
        <div class="row">
            <div class="col-md-5 col-sm-5 col-xs-5">
                <img src="./images/blog-masonry-img-2-150x150.jpg" alt="" class="img-fluid">
            </div>
            <div class="col-md-7 col-sm-7 col-xs-7">
                <a href="">Feb 4, 2020  Paddling</a>
                <br>
                <a class="heading" href="">A HISTORY OF THE ANCIENT HAWAIIAN SPORT</a>
            </div>
        </div>

        <!-- 2 -->
        <div class="row">
            <div class="col-md-5 col-sm-5 col-xs-5">
                <img src="./images/blog-img-3-150x150.jpg" alt="">
            </div>
            <div class="col-md-7 col-sm-7 col-xs-7">
                <a href="">Feb 4, 2020  Paddling</a>
                <br>
                <a class="heading" href="">A HISTORY OF THE ANCIENT HAWAIIAN SPORT</a>
            </div>
        </div>

        <!-- 3 -->
        <div class="row">
            <div class="col-md-5 col-sm-5 col-xs-5">
                <img src="./images/blog-img-1-150x150.jpg" alt="">
            </div>
            <div class="col-md-7 col-sm-7 col-xs-7">
                <a href="">Feb 4, 2020  Paddling</a>
                <br>
                <a class="heading" href="">A HISTORY OF THE ANCIENT HAWAIIAN SPORT</a>
            </div>
        </div>

        <!-- 4 -->
        <div class="row">
            <div class="col-md-5 col-sm-5 col-xs-5">
                <img src="./images/blog-img-1-150x150.jpg" alt="">
            </div>
            <div class="col-md-7 col-sm-7 col-xs-7">
                <a href="">Feb 4, 2020  Paddling</a>
                <br>
                <a class="heading" href="">A HISTORY OF THE ANCIENT HAWAIIAN SPORT</a>
            </div>
        </div>
    </div>
    
</div>