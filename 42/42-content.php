<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="module-42">
    <div class="module-42__row">
        <div class="module-42__row-item">
            <div class="module-42__row-item-images">
            
            <h3 class="module-42__row-item-heading">SURFING LESSONS </h3>
                <img id="image" src="./images/service-img-1.jpg" alt="The-image-has-2-men-surfing-on-the-sea" class="module-42__row-item-img">
                <div class="module-42__row-item-anchor">
                <a href="#" class="module-42__row-item-link"></a>
                </div>
            </div>       
        </div>
        <div class="module-42__row-item">
            <div class="module-42__row-item-content">
                <h3 class="module-42__row-item-heading">SURFERS PARADISE </h3>
                <span class="module-42__row-item-desc">Ornatus eleifend, assum quando tollit his id. Pris mid a nimal mel no. Eu simul el a boraret qui, est de mo cri tum. Totam rem aperiam, ea que isa quae.</span>
                <div class="module-42__row-item-weather">
                <p class="boder_exam1">SURF BOARD RENT: </p>
                <div class="anh">$45/ hour</div>
                </div> 

                <div class="module-42__row-item-weather">
                <p class="boder_exam1">EQUIPMENT STORAGE:</p>
                <div class="anh1">$50/ month</div>
                </div>

                <div class="module-42__row-item-weather">
                <p class="boder_exam1">PRIVATE LESSONS: </p>
                <div class="anh">n$100/ hour</div>
                </div>
                <div class="module-42-item-weather">
                <p class="boder_exam1">GROUP LESSONS: </p>
                <div class="anh">$60/ hour</div>
                </div>
                <span class="module-42__row-item-btn">
                <div class="type-49">
                  <div class="row three-part">
                     <div class="col-lg-4 col-md-12">
                      <div class="div-message">
                       <div class="contact">
                          <button type="submit" class="div-btn">
                      <span class="btn_text">BOOK NOW</span>
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