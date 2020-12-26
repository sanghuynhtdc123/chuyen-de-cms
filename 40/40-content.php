<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
 <h2 class ="module-h">OUR SERVICES</h2>
<div class="module-2">
     <ul class="module-2__list module-2__list--first">
        <li class="module-2__list-item module-2__list-item--changeColor">
            <ul class="module-2__list-menu">
                <li class="module-2__list-menu-item">
                    <a href="" class="module-2__list-menu-link module-2__list-menu-link--color">Surfing</a>
                </li>
                <li class="module-2__list-menu-item">
                    <a href="" class="module-2__list-menu-link">Rent a Boat</a>
                </li>
                <li class="module-2__list-menu-item">
                    <a href="" class="module-2__list-menu-link">Scuba Diving</a>
                </li>
                <li class="module-2__list-menu-item">
                    <a href="" class="module-2__list-menu-link"> Canoeing</a>
                </li>
                <li class="module-2__list-menu-item">
                    <a href="" class="module-2__list-menu-link"> Our Camps</a>
                </li>
                <li class="module-2__list-menu-item">
                    <a href="" class="module-2__list-menu-link">Paddle</a>
                </li>
                <li class="module-2__list-menu-item">
                    <a href="" class="module-2__list-menu-link">Salling</a>
                </li>
            </ul>
        </li>
    </ul>
        </div>
        
     </div>
</div>