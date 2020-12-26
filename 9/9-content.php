<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-49">
   <div class="container">
      <div class="row three-part">
         <div class="col-lg-4 col-md-12">
            <div class="div-message">
               <!-- <img src="./images/"> -->
               <h2>OVER TEN YEARS IN THE GAME</h2>
               <p class="title-9">Voluptatem accusantium doloremque laudant sinium, totam rem aperia.</p>
               <p class="description-9">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                  dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco sed do eiusmod te.</p>
               <div class="contact">
                  <button type="submit" class="div-btn">
                     <span class="btn_text">FIND OUT NOW</span>
                     <span class="btn_hover"></span>
                  </button>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-6">
            <div class="img">
               <img src="./images/1.jpg" alt="">
            </div>
         </div>
         <div class="col-lg-4 col-md-6 div-images_two">
            <div class="img">
               <img src="./images/2.jpg" alt="">
            </div>
         </div>
      </div>
   </div>
   <div class="svg-banner">
      <img src="./images/3.jpg" alt="svg-Banner">
   </div>
</div>