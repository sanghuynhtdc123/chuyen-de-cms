<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="module-12">
    <div class="four_images">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 col-lg-3 col-xs-12">
                    <div class=" img-all img-1">
                        <p class="text_images">OUR FOUNDER</p>
                        <img class="img-fluid" src="./images/h1-img-24.jpg" alt="images1" srcset="">
                    </div>
                </div>
                <div class="col-md-3 col-lg-3 col-xs-12">
                    <div class=" img-all img-2">
                        <p class="text_images">OUR FOUNDER</p>
                        <img class="img-fluid" src="./images/h1-img-25.jpg" alt="images2" srcset="">
                    </div>
                </div>
                <div class="col-md-3 col-lg-3 col-xs-12">
                    <div class=" img-all img-3">
                        <p class="text_images">OUR FOUNDER</p>
                        <img class="img-fluid" src="./images/h1-img-26.jpg" alt="images3" srcset="">
                    </div>
                </div>
                <div class="col-md-3 col-lg-3 col-xs-12">
                    <div class=" img-all img-4">
                        <p class="text_images">OUR FOUNDER</p>
                        <img class="img-fluid" src="./images/h1-img-37.jpg" alt="images4" srcset="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>