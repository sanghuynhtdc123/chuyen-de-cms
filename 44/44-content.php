<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="module-4">
    <div class="module-4__row">
        <div class="module-4__row-item modul-1">
            <div class="module-4__row-item-images">
                <img id="image" src="./images/h1-img-1.jpg" alt="The-image-has-2-men-surfing-on-the-sea" class="module-4__row-item-img module-4__row-item-img--scale">
            </div>
            <div class="module-4__row-item-content">
                <div class="module-4__row-item-heading">PRIVATE SURF LESSONS</div>
                <span class="module-4__row-item-price">11.50$</span>
                <span class="module-4__row-item-date">2 DAYS (12HS.)</span>
            </div>
            <div class="module-4__row-item-anchor">
                <a href="#" class="module-4__row-item-link"></a>
            </div>
        </div>
        <div class="module-4__row-item">
            <div class="module-4__row-item-images">
                <img src="./images/h1-img-2.jpg" alt="The-image-has-1-girl-taking-photos-with-surf-board" class="module-4__row-item-img">
            </div>
            <div class="module-4__row-item-content">
                <div class="module-4__row-item-heading">PRO SURFING CLASSES</div>
                <span class="module-4__row-item-price">15.50$</span>
                <span class="module-4__row-item-date">3 DAYS (18HS.)</span>
            </div>
            <div class="module-4__row-item-anchor">
                <a href="#" class="module-4__row-item-link"></a>
            </div>           
        </div>
        <div class="module-4__row-item">
            <div class="module-4__row-item-images">
                <img src="./images/h1-img-3.jpg" alt="a-man-rowing-in-the-sea" class="module-4__row-item-img">
            </div>
            <div class="module-4__row-item-content">
                <div class="module-4__row-item-heading">TAKE TIME TO PADDLE</div>
                <span class="module-4__row-item-price">13.50$</span>
                <span class="module-4__row-item-date">X DAYS (6HS.)</span>
            </div>
            <div class="module-4__row-item-anchor">
                <a href="#" class="module-4__row-item-link"></a>
            </div>
        </div>
        <div class="module-4__row-item">
            <div class="module-4__row-item-images">
                <img src="./images/h1-img-4.jpg" alt="sunset-sea-image" class="module-4__row-item-img">
            </div>
            <div class="module-4__row-item-content">
                <div class="module-4__row-item-heading">SAIL AWAY WITH US</div>
                <span class="module-4__row-item-price">13.50$</span>
                <span class="module-4__row-item-date">7 DAYS (VACATION)</span>
            </div>
            <div class="module-4__row-item-anchor">
                <a href="#" class="module-4__row-item-link"></a>
            </div>
        </div>
    </div>
</div>