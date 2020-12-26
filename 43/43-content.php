<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

      <div class="herder"style="        font-size: 18px;
    margin-top: 33px;
    padding-left: 65px;";
       >
      FROM OUR GALLERY
      </div>
   <div class="container" style="    margin-top: 21px";>
       <div class="row">

           <div class="col-md-4">
               <div class="item">
               <img style="max-width: 105%;" src="./images/service-img-2.jpg" alt="" srcset="">
           </div>
           </div>
           <div class="col-md-4">
               <div class="item"><img style="max-width: 105%;" class ="a" src="./images/service-img-3.jpg" alt="" srcset=""></div></div>
           <div class="col-md-4">
               <div class="item"><img style="max-width: 105%;" class ="a" src="./images/service-img-4.jpg" alt="" srcset=""></div>
               </div>
       </div>
   </div>
   
