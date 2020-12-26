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
                <img id="image" src="./images/p2-img-8.jpg" alt="The-image-has-2-men-surfing-on-the-sea" class="module-4__row-item-img">
                <div class="module-4__row-item-anchor">
                
                </div>
            </div>
            
        </div>
        <div class="module-4__row-item">
            <div class="module-4__row-item-content">
                <h3 class="module-4__row-item-heading">SMYKONOS BEACH</h3>
                <span class="module-4__row-item-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, do eius mod tempor incididunt.</span>
                <span class="module-4__row-item-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Utem duo us enim ad minim veniam.</span>
                <span class="module-4__row-item-btn">

                <div class="type-49">
      <div class="row three-part">
         <div class="col-lg-4 col-md-12">
            <div class="div-message">
               <div class="contact">
                  <button type="submit" class="div-btn">
                     <span class="btn_text">FIND OUT MORE</span>
                     <span class="btn_hover"></span>
                  </button>
               </div>
            </div>
         </div>
      </div>
</div>
                </span>
            </div>       
        </div>
    </div>
</div>