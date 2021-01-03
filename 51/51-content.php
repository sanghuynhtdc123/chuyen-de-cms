<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="module-51">
    <div class="module-51__row">
        <div class="module-51__row-item1">
            <div class="module-51__row-item-images">
                <img id="image" src="./images/h4-img-8-2.jpg" alt="The-image-has-2-men-surfing-on-the-sea" class="module-51__row-item-img">
                <div class="module-51__row-item-anchor">

                </div>
            </div>
        </div>
        <div class="module-51__row-item">
            <div class="module-51__row-item-content">
                <h3 class="module-51__row-item-heading">SUPERIOR SERVICE</h3>
                <span class="module-51__row-item-desc">We aim to provide a superior quality of service to our customers, retailers, surfers and the media.</span>
                <!DOCTYPE html>

                <div class="container">
                    <input type="email" placeholder=" Email*" name="email" required>

                    <input type="text" placeholder="Phone*" name="phone" required>

                    <input type="text" placeholder="Your message" name="message" required>


                </div>
                <span class="module-51__row-item-btn">
                    <div class="type-49">
                        <div class="row three-part">
                            <div class="col-lg-4 col-md-12">
                                <div class="div-message">
                                    <div class="contact">
                                        <button type="submit" class="div-btn">
                                            <span class="btn_text">SEND US A MESSAGE</span>
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
</div>