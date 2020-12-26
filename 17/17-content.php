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
                        <div class="col l-2-4 m-4 c-12">
                            <div class="module-18__item">
                                <div class="module-18__item-images">
                                    <a href="#" class="module-18__item-images-link">
                                        <img src="./images/81886003_481693189398009_4745791933860630342_n.jpg" alt="" class="module-18__item-img">
                                        <div class="module-18__item-images-position">
                                            <i class="fab fa-instagram module-18__item-images-icon"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col l-2-4 m-4 c-12 ">
                            <div class="module-18__item module-18__item--disable-phone">
                                <div class="module-18__item-images">
                                    <a href="#" class="module-18__item-images-link">
                                        <img src="./images/82064476_612488832880643_2680891047602672692_n.jpg" alt="" class="module-18__item-img">
                                        <div class="module-18__item-images-position">
                                            <i class="fab fa-instagram module-18__item-images-icon"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col l-2-4 m-4 c-12">
                            <div class="module-18__item module-18__item--disable-phone">
                                <div class="module-18__item-images">
                                    <a href="#" class="module-18__item-images-link">
                                        <img src="./images/80129498_526270191324871_1571444351515263827_n.jpg" alt="" class="module-18__item-img">
                                        <div class="module-18__item-images-position">
                                            <i class="fab fa-instagram module-18__item-images-icon"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col l-2-4 m-4 c-12">
                            <div class="module-18__item module-18__item--disable module-18__item--disable-phone">
                                <div class="module-18__item-images">
                                    <a href="#" class="module-18__item-images-link">
                                        <img src="./images/80104300_468681540740905_4543565925474900140_n.jpg" alt="" class="module-18__item-img">
                                        <div class="module-18__item-images-position">
                                            <i class="fab fa-instagram module-18__item-images-icon"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col l-2-4 m-4 c-12">
                            <div class="module-18__item module-18__item--disable module-18__item--disable-phone">
                                <div class="module-18__item-images">
                                    <a href="#" class="module-18__item-images-link">
                                        <img src="./images/81042590_504703443502700_1922153452980777843_n.jpg" alt="" class="module-18__item-img">
                                        <div class="module-18__item-images-position">
                                            <i class="fab fa-instagram module-18__item-images-icon"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>