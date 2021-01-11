<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="module-7">
    <div class="grid wide">
                <div class="module-7__row">
                    <div class="row sm-gutter">
                        <div class="col l-3 m-6 c-12">
                            <div class="module-7__item module-7__item--black">
                                <div class="module-7__item-info">
                                    <span class="module-7__item-date">Jan 10, 2020</span>
                                    <h2 class="module-7__item-title">SURFING VACATION</h2>
                                    <p class="module-7__item-description">Lorem ip sum dolor sit amet, vidit de li catae ut mei justo quando de core</p>
                                    <span class="module-7__item-address">
                                    <i class="fas fa-map-marker-alt"></i>
                                    MIAMI BEACH, FLORIDA</span>
                                </div>
                            </div>
                        </div>
                        <div class="col l-3 m-6 c-12">
                            <div class="module-7__item">
                                <img src="./images/event-featured-img-1-650x650.jpg" alt="" class="module-7__item-img">
                                <a href="#" class="module-7__item-link"></a>
                            </div>
                        </div>   
                        <div class="col l-3 m-6 c-12">
                            <div class="module-7__item module-7__item--yellow">
                                <div class="module-7__item-info">
                                    <span class="module-7__item-date">Jan 21, 2020</span>
                                    <h2 class="module-7__item-title">SAILING JUNE TOUR</h2>
                                    <p class="module-7__item-description">Lorem ip sum dolor sit amet, vidit de li catae ut mei justo quando de core</p>
                                    <span class="module-7__item-address">
                                    <i class="fas fa-map-marker-alt"></i>
                                    SOUTH BEAACH, MIAMI</span>
                                </div>
                            </div>
                        </div>
                        <div class="col l-3 m-6 c-12">
                            <div class="module-7__item">
                                <img src="./images/event-featured-img-2-650x650.jpg" alt="" class="module-7__item-img">
                                <a href="#" class="module-7__item-link"></a>
                            </div>
                        </div>
                        <div class="col l-3 m-6 c-12">
                            <div class="module-7__item">
                                <img src="./images/event-featured-img-3-650x650.jpg" alt="" class="module-7__item-img">
                                <a href="#" class="module-7__item-link"></a>
                            </div>
                        </div>
                        <div class="col l-3 m-6 c-12">
                            <div class="module-7__item ">
                                <div class="module-7__item-info">
                                    <span class="module-7__item-date">Jan 21, 2020</span>
                                    <h2 class="module-7__item-title">SURFING FOR YOUNGEST</h2>
                                    <p class="module-7__item-description">Lorem ip sum dolor sit amet, vidit de li catae ut mei justo quando de core</p>
                                    <span class="module-7__item-address">
                                    <i class="fas fa-map-marker-alt"></i>
                                    BLACK BEAACH, SAN DIEGO</span>
                                </div>
                            </div>
                        </div>
                        <div class="col l-3 m-6 c-12">
                            <div class="module-7__item">
                                <img src="./images/event-featured-img-4-650x650.jpg" alt="" class="module-7__item-img">
                                <a href="#" class="module-7__item-link"></a>
                            </div>
                        </div>  
                        <div class="col l-3 m-6 c-12">
                            <div class="module-7__item module-7__item--gray">
                                <div class="module-7__item-info">
                                    <span class="module-7__item-date">Jan 21, 2020</span>
                                    <h2 class="module-7__item-title">BEGINNER COURSES</h2>
                                    <p class="module-7__item-description">Lorem ip sum dolor sit amet, vidit de li catae ut mei justo quando de core</p>
                                    <span class="module-7__item-address">
                                    <i class="fas fa-map-marker-alt"></i>
                                    BLACK BEAACH, SAN DIEGO</span>
                                </div>
                            </div>    
                        </div>

                        <div class="col l-3 m-6 c-12">
                            <div class="module-7__item module-7__item--gray">
                                <div class="module-7__item-info">
                                    <span class="module-7__item-date">Feb 11, 2020</span>
                                    <h2 class="module-7__item-title">SAIL IN CROATIA</h2>
                                    <p class="module-7__item-description">Lorem ip sum dolor sit amet, vidit de li catae ut mei justo quando de core</p>
                                    <span class="module-7__item-address">
                                    <i class="fas fa-map-marker-alt"></i>
                                    BRAC BEACH, CROATIA</span>
                                </div>
                            </div>    
                        </div>


                        <div class="col l-3 m-6 c-12">
                            <div class="module-7__item">
                                <img src="./images/event-featured-img-5-650x650.jpg" alt="" class="module-7__item-img">
                                <a href="#" class="module-7__item-link"></a>
                            </div>
                        </div>
                        
                        <div class="col l-3 m-6 c-12">
                            <div class="module-7__item">
                                <img src="./images/event-featured-img-6-650x650.jpg" alt="" class="module-7__item-img">
                                <a href="#" class="module-7__item-link"></a>
                            </div>
                        </div> 
                        
                        
                        <div class="col l-3 m-6 c-12">
                            <div class="module-7__item module-7__item--yellow">
                                <div class="module-7__item-info">
                                    <span class="module-7__item-date">Feb 11, 2020</span>
                                    <h2 class="module-7__item-title">SAILING JUNE GREECE</h2>
                                    <p class="module-7__item-description">Lorem ip sum dolor sit amet, vidit de li catae ut mei justo quando de core</p>
                                    <span class="module-7__item-address">
                                    <i class="fas fa-map-marker-alt"></i>
                                    PERISSA BEACH, GREECE</span>
                                </div>
                            </div>    
                        </div>

                        <div class="col l-3 m-6 c-12">
                            <div class="module-7__item module-7__item">
                                <div class="module-7__item-info">
                                    <span class="module-7__item-date">Jan 21, 2020</span>
                                    <h2 class="module-7__item-title">SAIL ACROSS THE OCEAN</h2>
                                    <p class="module-7__item-description">Lorem ip sum dolor sit amet, vidit de li catae ut mei justo quando de core</p>
                                    <span class="module-7__item-address">
                                    <i class="fas fa-map-marker-alt"></i>
                                    BAKER BEACH, SAN FRANCISCO</span>
                                </div>
                            </div>    
                        </div>

                        <div class="col l-3 m-6 c-12">
                            <div class="module-7__item">
                                <img src="./images/event-featured-img-7-650x650.jpg" alt="" class="module-7__item-img">
                                <a href="#" class="module-7__item-link"></a>
                            </div>
                        </div>

                        <div class="col l-3 m-6 c-12">
                            <div class="module-7__item">
                                <img src="./images/event-featured-img-8-650x650.jpg" alt="" class="module-7__item-img">
                                <a href="#" class="module-7__item-link"></a>
                            </div>
                        </div>


                        <div class="col l-3 m-6 c-12">
                            <div class="module-7__item module-7__item--gray">
                                <div class="module-7__item-info">
                                    <span class="module-7__item-date">Feb 11, 2020</span>
                                    <h2 class="module-7__item-title">SAIL IN CARIBBEAN</h2>
                                    <p class="module-7__item-description">Lorem ip sum dolor sit amet, vidit de li catae ut mei justo quando de core</p>
                                    <span class="module-7__item-address">
                                    <i class="fas fa-map-marker-alt"></i>
                                    SAN JOSE BEACH, COSTA RICA</span>
                                </div>
                            </div>    
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>