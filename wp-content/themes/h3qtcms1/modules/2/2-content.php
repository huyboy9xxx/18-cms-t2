<?php
 $url_host = 'http://' . $_SERVER['HTTP_HOST'];
 $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
 $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

 preg_match_all($pattern_uri, __DIR__, $matches);
 $url_path = $url_host . $matches[1][0];
 $url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-2">
    <div class="container">
        <div class="row">
            <div class="col-md-9 pro-left1">
                <!-- start slide product -->
                <div class="slide-product">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide big">
                                <img src="<?php echo $url_path ?>/images/fashionSlider-1000x425.jpg" class="img-responsive" alt="pic1">
                                <div class="mid">
                                    <div class="sml">Add any text here…</div>
                                    <div class="large">New arrivals on the shop</div>
                                    <span class="txt">Browse</span>
                                </div>
                            </div>
                            <div class="swiper-slide big2">
                                <img src="<?php echo $url_path ?>/images/summer-singlet-1200x750-1000x625.jpg" class="img-responsive" alt="ipic11">
                                <div class="mid2">
                                    <div class="sml2">Add any text here…</div>
                                    <div class="large2">New arrivals on the shop</div>
                                    <span class="txt2">Browse</span>
                                </div>
                            </div>
                        </div>
                        <!-- Add Pagination -->
                        <div class="swiper-pagination"></div>
                        <!-- Add Arrows -->
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div> <!-- end slide product -->
            </div>
            <div class="col-md-3 pro-right1">
                <div class="parent">
                    <img src="<?php echo $url_path ?>/images/425781.jpg" alt="pic2" class="img-responsive">
                    <div class="middle">
                        <span class="text">Add Any Headline here</span>
                    </div>
                </div>
                <div class="parent">
                    <img src="<?php echo $url_path ?>/images/banner_grid_4.jpg" class="img-responsive hinh2" alt="ipic1">
                    <div class="middle">
                        <span class="text">Add Any Headline here</span>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>