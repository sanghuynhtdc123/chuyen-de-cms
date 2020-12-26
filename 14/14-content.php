<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="module-14">
    <div class="container">
        <div class="surf">
            <h2>YOUR SURF COACHING</h2>
            <p>Ex gubergren consequat forensibus mea, primis tritani dissentiunt ad mea, per id habeo utamur erroribus.</p>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="asd">
                    <div class="div-rounded_img div-rounded_img-1">
                        <img class="rounded_images" src="./images/h1-img-process-1.png" alt="roundedImg" class="img-fluid">
                        <img class="number" src="./images/h1-map-rev-no1.png" alt="roundedImg" class="img-fluid">
                    </div>

                    <div class="text_under">
                        <h3>MOVEMENT</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
            <div class="asd">
                <div class="div-rounded_img div-rounded_img-2">
                    <img class="rounded_images" src="./images/h1-img-process-2.png" alt="number1" class="img-fluid">
                    <img class="number" src="./images/h1-map-rev-no2.png" alt="roundedImg" class="img-fluid">
                </div>
                <div class="text_under">
                    <h3>MOVEMENT</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing</p>
                </div>
            </div>
            </div>
            <div class="col-md-3">
            <div class="asd">
                <div class="div-rounded_img div-rounded_img-3">
                    <img class="rounded_images" src="./images/h1-img-process-3.png" alt="roundedImg" class="img-fluid">
                    <img class="number" src="./images/h1-map-rev-no3.png" alt="roundedImg" class="img-fluid">
                </div>
                <div class="text_under">
                    <h3>MOVEMENT</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing</p>
                </div>
            </div>
            </div>
            <div class="col-md-3">
            <div class="asd">
                <div class="div-rounded_img div-rounded_img-4">
                    <img class="rounded_images" src="./images/h1-img-process-4.png" alt="roundedImg" class="img-fluid">
                    <img class="number" src="./images/h1-map-rev-no4.png" alt="roundedImg" class="img-fluid">
                </div>
                <div class="text_under">
                    <h3>MOVEMENT</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing</p>
                </div>
        </div>
            </div>
        </div>
    </div>
</div>