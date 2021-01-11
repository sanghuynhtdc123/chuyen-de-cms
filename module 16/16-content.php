<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="module-16">
   <div class="container">
       <div class="wrap">
           <div class="advisor">
               <img src="./images/h1-img-32.png" alt="logo advisor">
           </div>

           <div class="text_advisor">
              <p>Wave championship has a 5 star Tripadvisor traveller rating and is also <br> rated #1 for Speciality lodging in Baleal Beach, Peniche Portugal.</p>
           </div>
       </div>
   </div>
</div>