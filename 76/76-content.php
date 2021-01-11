<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="module_76">
    <img src="./images/event-featured-img-1.jpg" alt="" class="img-fluid">
   <div class="text">
       <p>Jan 10, 2020</p>
       <h2>SURFING VACATION</h2>
       <p class="asd">Lorem ipsum dolor sit amet, con sectetur adipisicing elit, sed do eiusmod tempor in ci didunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud ex ercitation ul lamco laboris nisi ut aliquip ex co mmodo consequat. Duis aute irure dolor in re prehen derit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Ex cepteur sint occaecat cupi da tat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sedut perspi ciatis unde omnis iste natus error sit vo lup tatem accu santium dolore mque lau dantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia con sequntur magni dolores.</p>
       <i class="fas fa-map-marker-alt"></i> <span> BLACK BEAACH, SAN DIEGO</span>
   </div>
</div>