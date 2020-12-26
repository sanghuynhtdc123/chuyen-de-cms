<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="module-15">
    <div class="grid wide">
                <div class="module-15__row">
                    <div class="row sm-gutter">
                        <div class="col l-6 m-12 c-12">
                            <div class="module-15__item">
                                <h3 class="module-15__item-heading">CHECK FORECAST</h3>
                                <p class="module-15__item-desc">Lorem ipsum dolor sit amet, con se ctetur adipisici elit, do eius mod tempor.</p>

                                <div class="module-15__item-weather">
                                    <div class="module-15__item-weather-day">TODAY</div>
                                    <div class="module-15__item-weather-temp">+21
                                        <img src="./images/sunny.png" alt="" class="module-15__item-weather-temp-img">
                                    </div>
                                    <div class="module-15__item-weather-fog">Overcast Clouds</div>
                                    <div class="module-15__item-weather-name">MIAMI</div>
                                </div>
                                <div class="module-15__item-weather">
                                    <div class="module-15__item-weather-day">TOMORROW</div>
                                    <div class="module-15__item-weather-temp">+25
                                    <img src="./images/sunny.png" alt="" class="module-15__item-weather-temp-img">
                                    </div>
                                    <div class="module-15__item-weather-fog">Light Rain</div>
                                    <div class="module-15__item-weather-name">MIAMI</div>
                                </div>
                                <div class="module-15__item-weather">
                                    <div class="module-15__item-weather-day">MONDAY</div>
                                    <div class="module-15__item-weather-temp">+26
                                    <img src="./images/sunny.png" alt="" class="module-15__item-weather-temp-img">
                                    </div>
                                    <div class="module-15__item-weather-fog">Sky Is Clear</div>
                                    <div class="module-15__item-weather-name">MIAMI</div>
                                </div>
                                <div class="module-15__item-weather module-15__item-weather--no-border">
                                    <div class="module-15__item-weather-day">TUESDAY</div>
                                    <div class="module-15__item-weather-temp">+25
                                    <img src="./images/sunny.png" alt="" class="module-15__item-weather-temp-img">
                                    </div>
                                    <div class="module-15__item-weather-fog">Sky Is Clear</div>
                                    <div class="module-15__item-weather-name">MIAMI</div>
                                </div>
                                <a href="#" class="module-15__item-link">More on waveweather.com</a>
                            </div>
                        </div>
                        <div class="col l-6 m-12 c-12">
                            <div class="row sm-gutter">
                                <div class="col l-6 m-6 c-12">
                                    <div class="module-15__item-images">
                                        <div class="module-15__item-images-block module-15__item-images-block-locate">
                                            <img src="./images/h1-img-28-1.jpg" alt="" class="module-15__item-images-img module-15__item-images-img--margin-top">
                                            <div class="module-15__item-block-content">
                                                <h4 class="module-15__item-block-content-heading">KARPATHOS</h4>
                                                <span class="module-15__item-block-content-desc">16.04.20 | Tuesday</span>
                                            </div>
                                            <img src="./images/h1-img-39.png" alt="" class="module-15__item-block-img">
                                        </div>
                                        <div class="module-15__item-images-block">
                                            <img src="./images/h1-img-29.jpg" alt="" class="module-15__item-images-img module-15__item-images-img--margin-bottom">
                                        </div>
                                    </div>
                                </div>
                                <div class="col l-6 m-6 c-12">
                                    <div class="module-15__item-images">
                                        <div class="module-15__item-images-block">
                                            <img src="./images/h1-img-30.jpg" alt="" class="module-15__item-images-img module-15__item-images-img--margin-top">
                                        </div>
                                        <div class="module-15__item-images-block module-15__item-images-block-locate">
                                            <img src="./images/h1-img-27-1.jpg" alt="" class="module-15__item-images-img module-15__item-images-img--margin-bottom">
                                            <div class="module-15__item-block-content">
                                                <h4 class="module-15__item-block-content-heading">SKIATHOS</h4>
                                                <span class="module-15__item-block-content-desc">14.03.20 | Tuesday</span>
                                            </div>
                                            <img src="./images/h1-img-39.png" alt="" class="module-15__item-block-img">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
        </div>
    </div>
</div>