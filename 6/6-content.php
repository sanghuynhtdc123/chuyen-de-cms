<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="module-6">
    <div class="grid wide">
                <div class="module-6__row">
                    <div class="row sm-gutter">
                        <div class="col l-5 m-12 c-12">
                            <div class="module-6__item">
                                <div class="module-6__item-info">
                                    <h3 class="module-6__item-info-heading">TOP SURF LESSONS</h3>
                                    <p class="module-6__item-info-desc">Lorem ipsum dolor sit amet, con secte tur adip si cin elit, do eius mod tempor in cidi dunt ut la bore magna aliquat enim ad.</p>
                                    <img src="./images/wave-logo-footer.png" alt="" class="module-6__item-info-img">
                                </div>
                            </div>
                        </div>
                        <div class="col l-4 m-6 c-12">
                            <div class="module-6__item">
                                <img src="./images/h1-img-6.jpg" alt="" class="module-6__item-img">
                            </div>
                        </div>
                        <div class="col l-3 m-6 c-12">
                            <div class="module-6__item module-6__item-align">
                                <img src="./images/h1-img-5.jpg" alt="" class="module-6__item-img module-6__item-img-m">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>