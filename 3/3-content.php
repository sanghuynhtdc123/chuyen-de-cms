<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="module-3">
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <a href="#">
                    <picture>
                        <source srcset="./images/h1-rev-background-img.jpg" media="(min-width: 1400px)">
                        <source srcset="./images/h1-rev-background-img.jpg" media="(min-width: 769px)">
                        <source srcset="./images/h1-rev-background-img.jpg" media="(min-width: 577px)">
                        <img srcset="./images/h1-rev-background-img.jpg" alt="responsive image" class="d-block img-fluid">
                    </picture>

                   
                </a>
            </div>
            <!-- /.carousel-item -->
            <div class="carousel-item">
                <a href="#">
                    <picture>
                        <source srcset="./images/h1-rev-background-img-2.jpg" media="(min-width: 1400px)">
                        <source srcset="./images/h1-rev-background-img-2.jpg" media="(min-width: 769px)">
                        <source srcset="./images/h1-rev-background-img-2.jpg" media="(min-width: 577px)">
                        <img srcset="./images/h1-rev-background-img.jpg-2" alt="responsive image" class="d-block img-fluid">
                    </picture>
                </a>
            </div>
            <!-- /.carousel-item -->
            <div class="carousel-item">
                <a href="#">
                    <picture>
                        <source srcset="./images/h1-rev-background-img.jpg" media="(min-width: 1400px)">
                        <source srcset="./images/h1-rev-background-img.jpg" media="(min-width: 769px)">
                        <source srcset="./images/h1-rev-background-img.jpg" media="(min-width: 577px)">
                        <img srcset="./images/h1-rev-background-img.jpg" alt="responsive image" class="d-block img-fluid">
                    </picture>

                </a>
            </div>
            <!-- /.carousel-item -->
        </div>
        <!-- /.carousel-inner -->
        <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- /.carousel -->
</div>