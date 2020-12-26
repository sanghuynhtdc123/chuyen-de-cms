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
        <div class="module-4__row-item">
            <div class="module-4__row-item-images">
                <img id="image" src="./images/h1-video-img.jpg" alt="The-image-has-2-men-surfing-on-the-sea" class="module-4__row-item-img">
                <div class="module-4__row-item-anchor">
                <a href="#" class="module-4__row-item-link"></a>
                </div>
            </div>
            
        </div>
        <div class="module-4__row-item">
            <div class="module-4__row-item-content">
                <h3 class="module-4__row-item-heading">SURFERS PARADISE </h3>
                <span class="module-4__row-item-desc">Lorem ipsum dolor sit amet, con secte tur adip si cin elit, do eius mod tempor in cidi dut ut la bore magna aliquat enim ad.</span>
                <span class="module-4__row-item-btn">FIND OUT MORE</span>
            </div>       
        </div>
    </div>
</div>