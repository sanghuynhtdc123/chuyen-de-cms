<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="module-18">
    <div class="grid wide">
                <div class="module-18__row">
                    <div class="row sm-gutter">
                        <div class="col l-3 m-6 c-12">
                            <div class="module-18__item">
                                <div class="module-18__item-title">ABOUT</div>
                                <p class="module-18__item-desc">Catch the perfect wave with WaveRide, a true haven for everything surf related that’s guaranteed to provide you with a genuinely smooth ride.</p>
                                <a href="#" class="module-18__info-link module-18__info-link--no-padding">
                                    <i class="fab fa-facebook-f module-18__info-icon"></i>
                                </a>
                                <a href="#" class="module-18__info-link">
                                <i class="fab fa-twitter module-18__info-icon"></i>
                                </a>
                                <a href="#" class="module-18__info-link">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col l-3 m-6 c-12 ">
                            <div class="module-18__item">
                                <div class="module-18__item-title">CONTACT</div>
                                <div class="module-18__adress">
                                    <a href="" class="module-18__adress-item">
                                        <i class="fas fa-mobile-alt  module-18__adress-item-icon"></i>
                                        156-677-124-442-2887</a>
                                    <a href="" class="module-18__adress-item">
                                        <i class="fas fa-location-arrow module-18__adress-item-icon"></i>
                                        wave@qodeinteractive.com</a>
                                    <a href="" class="module-18__adress-item">
                                        <i class="fas fa-map-marker-alt module-18__adress-item-icon"></i>
                                        Collins Street Victoria 8007
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col l-3 m-6 c-12">
                            <div class="module-18__item">
                                <div class="module-18__item-title">USEFULL LINKS</div>
                                <div class="module-18__adress">
                                    <a href="" class="module-18__adress-item">
                                        <i class="fas fa-user-circle"></i>
                                        About us</a>
                                    <a href="" class="module-18__adress-item">
                                        <i class="fas fa-hourglass-half"></i>
                                        History</a>
                                    <a href="" class="module-18__adress-item">
                                        <i class="fas fa-anchor"></i>
                                        Contact us
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col l-3 m-6 c-12">
                            <div class="module-18__item">
                                <div class="module-18__item-title">INSTAGRAM</div>
                                <div class="module-18__item-images">
                                    <a href="#" class="module-18__item-images-link">
                                        <img src="./images/81886003_481693189398009_4745791933860630342_n.jpg" alt="" class="module-18__item-img">
                                        <div class="module-18__item-images-position">
                                            <i class="fab fa-instagram module-18__item-images-icon"></i>
                                        </div>
                                    </a>
                                    <a href="#" class="module-18__item-images-link">
                                        <img src="./images/82064476_612488832880643_2680891047602672692_n.jpg" alt="" class="module-18__item-img">
                                        <div class="module-18__item-images-position">
                                            <i class="fab fa-instagram module-18__item-images-icon"></i>
                                        </div>
                                    </a>
                                    <a href="#" class="module-18__item-images-link">
                                        <img src="./images/80129498_526270191324871_1571444351515263827_n.jpg" alt="" class="module-18__item-img">
                                        <div class="module-18__item-images-position">
                                            <i class="fab fa-instagram module-18__item-images-icon"></i>
                                        </div>
                                    </a>
                                    <a href="#" class="module-18__item-images-link">
                                        <img src="./images/80104300_468681540740905_4543565925474900140_n.jpg" alt="" class="module-18__item-img">
                                        <div class="module-18__item-images-position">
                                            <i class="fab fa-instagram module-18__item-images-icon"></i>
                                        </div>
                                    </a>
                                    <a href="#" class="module-18__item-images-link">
                                        <img src="./images/81042590_504703443502700_1922153452980777843_n.jpg" alt="" class="module-18__item-img">
                                        <div class="module-18__item-images-position">
                                            <i class="fab fa-instagram module-18__item-images-icon"></i>
                                        </div>
                                    </a>
                                    <a href="#" class="module-18__item-images-link">
                                        <img src="./images/80577045_171637014213272_6076270603820114291_n.jpg" alt="" class="module-18__item-img">
                                        <div class="module-18__item-images-position">
                                            <i class="fab fa-instagram module-18__item-images-icon"></i>
                                        </div>
                                    </a>
                                </div>
                                <div class="module-18__item-form">
                                    <input type="text" class="module-18__item-form-input" placeholder="Get Newsletter...">
                                    <i class="fas fa-location-arrow module-18__adress-item-icon module-18__item-form-icon"></i>
                                </div>
                            </div>
                        </div>    
                    </div>
                </div>
            </div>
            <div class="module-18__footer">
                <div class="module-18__footer-info">
                    <img src="./images/wave-logo-footer.png" alt="" class="module-18__footer-info-img">
                    <span class="module-18__footer-info-text">Made by Qode Interactive, all rights reserved</span>
                </div>
                <div class="module-18__footer-adress">
                                <a href="" class="module-18__footer-adress-item">
                                    <i class="fas fa-mobile-alt  module-18__footer-adress-item-icon"></i>
                                    156-677-124-442-2887</a>
                                <a href="" class="module-18__footer-adress-item">
                                    <i class="fas fa-location-arrow module-18__footer-adress-item-icon"></i>
                                    wave@qodeinteractive.com</a>
                                <a href="" class="module-18__footer-adress-item">
                                    <i class="fas fa-map-marker-alt module-18__footer-adress-item-icon"></i>
                                    Collins Street Victoria 8007
                                </a>
                </div>
            </div>
        </div>
    </div>
</div>