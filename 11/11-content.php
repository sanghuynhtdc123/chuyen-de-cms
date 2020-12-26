<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="module-11">
    <div class="grid wide">
        <div class="module-11__row">
                <div class="row sm-gutter">
                    <div class="col l-7 m-12 c-12">
                        <div class="module-11__item module-11__item--img">
                            <div class="module-11__item-images">
                                <div class="module-11__item-images--position">
                                    <img src="./images/h1-map-rev-no1.png" alt="" class="module-11__item-img">
                                    <img src="./images/h1-map-rev-active-line.png" alt="" class="module-11__item-img-line">
                                    <img src="./images/h1-map-rev-active-picture-2.png" alt="" class="module-11__item-img-cricle">
                                </div>
                                <span class="module-11__item-text">MYKONOS</span>
                            </div>
                            <div class="module-11__item-images">
                                <div class="module-11__item-images--position">
                                    <img src="./images/h1-map-rev-no2.png" alt="" class="module-11__item-img">
                                    <img src="./images/h1-map-rev-active-line.png" alt="" class="module-11__item-img-line">
                                    <img src="./images/h1-map-rev-active-picture-3.png" alt="" class="module-11__item-img-cricle">
                                </div>
                                <span class="module-11__item-text">PAROS</span>
                            </div>
                            <div class="module-11__item-images">
                                 <div class="module-11__item-images--position">
                                    <img src="./images/h1-map-rev-no3.png" alt="" class="module-11__item-img">
                                    <img src="./images/h1-map-rev-active-line.png" alt="" class="module-11__item-img-line">
                                    <img src="./images/h1-map-rev-active-picture-1.png" alt="" class="module-11__item-img-cricle">
                                </div>
                                <span class="module-11__item-text">IOS</span>
                            </div>
                            <div class="module-11__item-images">
                                <div class="module-11__item-images--position">
                                    <img src="./images/h1-map-rev-no4.png" alt="" class="module-11__item-img">
                                    <img src="./images/h1-map-rev-active-line.png" alt="" class="module-11__item-img-line">
                                    <img src="./images/h1-map-rev-active-picture-4.png" alt="" class="module-11__item-img-cricle">
                                </div>  
                                <span class="module-11__item-text">SANTORINI</span>
                            </div>
                        </div>
                    </div>
                    <div class="col l-5 m-12">
                        <div class="module-11__item module-11__item--text">
                            <div class="module-11__item-list">
                                <h3 class="module-11__item-heading">GREAT LOCATIONS</h3>
                                <p class="module-11__item-desc">Lorem ipsum dolor sit amet, consectetur 
                                    adipisicing elit, do eius mod tempor incididunt ut labore magna aliquat enim ad min im veniam.</p>
                                <span class="module-11__item-capital">
                                    <span>MYKONOS</span>
                                    <span>PAROS</span>
                                    <span>IOS</span>
                                    <span>SANTORINI</span>
                                </span>
                                <span class="module-11__item-btn">FIND OUT MORE</span>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>