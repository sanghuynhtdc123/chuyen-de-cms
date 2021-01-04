<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<h2 class="our_services">OUR SERVICES</h2>
<div class="module-41">
    <ul class="module-41__list module-41__list--first">
        <li class="module-41__list-item module-41__list-item--changeColor">
            <ul class="module-41__list-menu">
                <li class="module-41__list-menu-item">
                    <a href="" class="module-41__list-menu-link module-41__list-menu-link--color">Surfing</a>
                </li>
                <li class="module-41__list-menu-item">
                    <a href="" class="module-41__list-menu-link">Rent a Boat</a>
                </li>
                <li class="module-41__list-menu-item">
                    <a href="" class="module-41__list-menu-link">Scuba Diving</a>
                </li>
                <li class="module-41__list-menu-item">
                    <a href="" class="module-41__list-menu-link"> Canoeing</a>
                </li>
                <li class="module-41__list-menu-item">
                    <a href="" class="module-41__list-menu-link"> Our Camps</a>
                </li>
                <li class="module-41__list-menu-item">
                    <a href="" class="module-41__list-menu-link">Paddle</a>
                </li>
                <li class="module-41__list-menu-item">
                    <a href="" class="module-41__list-menu-link">Salling</a>
                </li>
            </ul>
        </li>
    </ul>

        <div class="img"><img src="./images/service-featured-img.jpg" alt="" srcset="">
            <div class="texxt">
                <h2>HISTORY OF SURFING</h2>
                <p>Lorem ipsum dolor sit amet, con sectetur ad pisicing elit, sed do eiusmod tempor in cididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud ex citation ullamco la boris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in re pre henderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Ex cepteur sint ocaecat cupi da tat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut per spiciatis unde omnis iste natus error sit vo luptatem cu santium dolor e mque la udantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam volu tatem quia voluptas sit as perna tur aut odit aut fugit, sed quia con sequntur magni lores.</p>

                <p class="quote">A gift from Polynesia: ” Sometimes 20-30 men go with the swell of the waves of the sea , lie flat on an oval piece of wood… </p>
                <br>
                <p>
                Totam ipsum dolor sit amet, cou sectetur ad pisicing elit, sed do eiusmod tempor in cididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud ex citation ullamco la boris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in re pre henderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Ex cepteur sint ocaecat cupi da tat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut per spiciatis unde omnis iste natus error sit vo luptatem cu santium dolor e mque la udantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam volu tatem quia voluptas sit as perna tur aut odit aut fugit, sed quia con sequntur sadni.</p>
            </div>
        </div>
        
</div>
