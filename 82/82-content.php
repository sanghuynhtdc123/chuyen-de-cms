<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="module_82">
    <h2 class="heading">RELATED EVENTS</h2>
    <div class="row">
        <div class="col-md-6 col-sm-12 col-xs-12">
            <div class="row">
                <div class="col-md-6 col-sm-3 col-xs-12">
                    <div class="img">
                        <img src="./images/event-featured-img-4.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-6 col-sm-9 col-xs-12">
                    <div class="text">
                        <p>BEGINNER COURSES</p>
                        <p class="lorem">Lorem ip sum dolor sit amet, vidit de li cata</p>
                        <p>BLACK BEAACH, SAN DIEGO</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-sm-12 col-xs-12">
            <div class="row">
                <div class="col-md-6 col-sm-3 col-xs-12">
                    <div class="img">
                        <img src="./images/event-featured-img-3.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-6 col-sm-9 col-xs-12">
                    <div class="text">
                        <p>SURFING FOR YOUNGEST</p>
                        <p class="lorem">Lorem ip sum dolor sit amet, vidit de li cata</p>
                        <p>BLACK BEAACH, SAN DIEGO</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row row2">
        <div class="col-md-6 col-sm-12 col-xs-12">
            <div class="row">
                <div class="col-md-6 col-sm-3 col-xs-12">
                    <div class="img">
                        <img src="./images/event-featured-img-2.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-6 col-sm-9 col-xs-12">
                    <div class="text">
                        <p>SAILING JUNE TOUR</p>
                        <p class="lorem">Lorem ip sum dolor sit amet, vidit de li cata</p>
                        <p>BLACK BEAACH, SAN DIEGO</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>