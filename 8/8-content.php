<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="module-8">
    <div class="grid wide">
                <div class="module-8__row">
                    <div class="row sm-gutter">
                        <div class="col l-12 m-12 c-12">
                            <div class="module-8__item">
                                <h2 class="module-8__item-title">SURFING FOR ALL ABILITIES</h2>
                                <p class="module-8__item-description">Ex gubergren consequat forensibus mea, primis tritani dissentiunt ad mea, per id habeo <br> utamur erroribus.</p>
                            </div>
                        </div>
                        <div class="col l-3 m-6 c-12">
                            <div class="module-8__item">
                                <img src="./images/h1-img-33.png" alt="" class="module-8__item-img">
                            </div>
                            <h3 class="module-8__item-heading">NEW TO THE WATER?</h3>
                            <p class="module-8__item-desc">Lorem ipsum dolor sit amet, con ctetur ad ip isicing elit, sed do eiusmod tem por incidi sit.</p>
                        </div>
                        <div class="col l-3 m-6 c-12">
                            <div class="module-8__item">
                                <img src="./images/h1-img-34.png" alt="" class="module-8__item-img">
                            </div>
                            <h3 class="module-8__item-heading">INTERMEDIATE SURFER</h3>
                            <p class="module-8__item-desc">Lorem ipsum dolor sit amet, con ctetur ad ip isicing elit, sed do eiusmod tem por incidi sit.</p>
                        </div>
                        <div class="col l-3 m-6 c-12">
                            <div class="module-8__item">
                                <img src="./images/h1-img-35.png" alt="" class="module-8__item-img">
                            </div>
                            <h3 class="module-8__item-heading">ADVANCED SKILLS</h3>
                            <p class="module-8__item-desc">Lorem ipsum dolor sit amet, con ctetur ad ip isicing elit, sed do eiusmod tem por incidi sit.</p>
                        </div>
                        <div class="col l-3 m-6 c-12">
                            <div class="module-8__item">
                                <img src="./images/h1-img-36.png" alt="" class="module-8__item-img">
                            </div>
                            <h3 class="module-8__item-heading">PRO LEVEL SURFING</h3>
                            <p class="module-8__item-desc">Lorem ipsum dolor sit amet, con ctetur ad ip isicing elit, sed do eiusmod tem por incidi sit.</p>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>