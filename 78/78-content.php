<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="module_78">
   <div class="img">
       <img src="./images/event-sidebar-img-1-300x212.jpg" alt="" srcset="" class="img-fluid">
   </div>
   <div class="text">
       <p>ABOUT BEN DAVIDSON</p>
       <p>Lorem ipsum dolor sit amet,<br>consectetur adipisicing elit, sed do<br>eiusmod tempor incididunt ut<br>labore et dolore magna</p>
   </div>
   <div class="category">
       <p>CATEGORIES</p>
       <ul>
           <li>Canoenig</li>
           <li>Paddling</li>
           <li>Rental</li>
           <li>Sailing</li>
           <li>Scubadiving</li>
           <li>Surfing</li>
       </ul>
   </div>
</div>