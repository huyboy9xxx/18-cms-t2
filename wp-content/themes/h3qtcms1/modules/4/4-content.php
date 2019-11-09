<?php

$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-4">
    <div class="container">
        <div class="section-title">
            <b></b>
            <span>Featured Categories</span>
            <b></b>
        </div>
        <!-- Swiper -->
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="<?php echo $url_path ?>/images/1.jpeg" alt="" class="img-responsive">
                    <div class="box-text">
                        <h5>Bages</h5>
                        <p>6 Product</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="<?php echo $url_path ?>/images/2.jpg" alt="" class="img-responsive">
                    <div class="box-text">
                        <h5>BooKing</h5>
                        <p>6 Product</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="<?php echo $url_path ?>/images/3.jpg" alt="" class="img-responsive">
                    <div class="box-text">
                        <h5>Clothing</h5>
                        <p>6 Product</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="<?php echo $url_path ?>/images/5.jpeg" alt="" class="img-responsive">
                    <div class="box-text">
                        <h5>Men</h5>
                        <p>6 Product</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="<?php echo $url_path ?>/images/6.jpeg" alt="" class="img-responsive">
                    <div class="box-text">
                        <h5>Women</h5>
                        <p>6 Product</p>
                    </div>
                </div>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
            <!-- Add Arrows -->
            <div class="swiper-button-next" style="width: 12px;"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>
</div>