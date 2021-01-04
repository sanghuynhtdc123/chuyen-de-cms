<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="module-44">
    <div id="map" style="width:822px;height:437px;">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d105320.01911103714!2d148.1544339353085!3d-34.42038918794647!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b19e5cd98b51cb7%3A0x40609b49043f050!2sWombat%20New%20South%20Wales%202587%2C%20%C3%9Ac!5e0!3m2!1svi!2s!4v1609743403721!5m2!1svi!2s" width="822" height="437" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
</div>