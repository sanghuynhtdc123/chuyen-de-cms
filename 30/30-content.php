<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
    <div class="module-30__row">
        <div class="module-30__row-item">
        <div class="module-30__row-item-content">
               <div class="container"> 
           <input type="text" placeholder="SUBSCRIBE FOR NEWSLETTER" name="email" required>
             <hr>
            </div>
           
          </div>
        </div>
        <div class="module-30__row-item1">
            <div class="module-30__row-item-content">
               <div class="container"> 
               <span class="module-30__row-item-btn"><div class="type-52">
      <div class="row three-part">
         <div class="col-lg-4 col-md-12">
            <div class="div-message">
               <div class="contact">
                  <button type="submit" class="div-btn">
                     <span class="btn_text">SUBSCRIBE</span>
                     <span class="btn_hover"></span>
                  </button>
               </div>
            </div>
         </div>
      </div>
</div> </span>
            </div>
           
          </div>       
        </div>
    </div>
    


