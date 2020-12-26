<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
 <div class="modum38">
 <div class="modum-38">
<h1 class ="h-modum38">
BOOK YOUR SPOT
</h1>

<br>
    <p class =" pp-modum38"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, do eius mod tempor </p> 
     <br>
    <p class =" pp-modum38"> incididunt habitasse platea dictumst fusce imperdiet ligula luctus.</p> 
    <div class="type-49">
      <div class="row three-part">
         <div class="col-lg-4 col-md-12">
            <div class="div-message">
               <div class="contact">
                  <button type="submit" class="div-btn">
                     <span class="btn_text">CONTATCT US</span>
                     <span class="btn_hover"></span>
                  </button>
               </div>
            </div>
         </div>
      </div>
</div>
 </div>
