<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="module-1">
        <div class="module-1__info">
            <span class="module-1__info-title">
                Follow Us:
                <a href="#" class="module-1__info-link">
                    <i class="fab fa-twitter module-1__info-icon"></i>
                </a>
                <a href="#" class="module-1__info-link">
                    <i class="fab fa-facebook-f module-1__info-icon"></i>
                </a>
                <a href="#" class="module-1__info-link"><i class="fab fa-instagram module-1__info-icon"></i></a>
                <a href="#" class="module-1__info-link"><i class="fab fa-linkedin-in module-1__info-icon"></i></a>
                
            </span>
        </div>
        <div class="module-1__adress">
            <div class="module-1__adress-item">
                <i class="fas fa-mobile-alt  module-1__adress-item-icon"></i>
                156-677-124-442-2887</div>
            <div class="module-1__adress-item">
                <i class="fas fa-location-arrow module-1__adress-item-icon"></i>
                wave@qodeinteractive.com</div>
            <div class="module-1__adress-item">
                <i class="fas fa-map-marker-alt module-1__adress-item-icon"></i>
                184 Main Collins Street Victoria 8007</div>
        </div>
</div>