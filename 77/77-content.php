<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="module_77">
    <div class="row">
        <div class="col-md-6 col-sm-12 col-xs-12">
            <div class="img">
                <p>ACCOMMODATION</p>
                <img src="./images/event-img-1-2.jpg" alt="" srcset="" class="img-fluid">
            </div>
        </div>

        <div class="col-md-6 col-sm-12 col-xs-12">
            <div class="content">
                <p>AT A GLANCE</p>
                <p class="long_text">Ornatus eleifend, assum quando tollit his id. Primis <br> animal mel no. Eu simul el a boraret qui, est mocrti.</p>
                <p class="label_text">TOUR INCLUDES: <span style="margin-left:70px;">Camp, Board, Shoes</span></p>
                <p class="label_text">DAILY TIMES: <span style="margin-left:98px;">Tours start 9am daily</span></p>
                <p class="label_text">SHEDULE: <span style="margin-left:118px;">4 hrs long tour</span></p>
                <p class="label_text">PRICES: <span style="margin-left:132px;">Party of 1 - $250</span></p>
                <a href="">BOOK NOW</a>
            </div>
        </div>
    </div>
</div>