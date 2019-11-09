<?php
 $url_host = 'http://' . $_SERVER['HTTP_HOST'];
 $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
 $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

 preg_match_all($pattern_uri, __DIR__, $matches);
 $url_path = $url_host . $matches[1][0];
 $url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-3">
    <div class="container">
        <!-- Demo styles -->
        <style>
        }

        .swiper-container {
            width: 100%;
            height: 100%;
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;

            /* Center slide text vertically */
            display: -webkit-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center;
            align-items: center;
        }
        </style>
        <!-- Swiper -->
        <h1 class="pro" style="text-align:center;">Product</h1>
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                <figure class="card card-product">
                        <div class="img-wrap">
                            <img src="<?php echo $url_path ?>/images/giay1.jpg" style="width:240px;height:292px;">
                            
                            <img class="hover-img" src="<?php echo $url_path ?>/images/giay2.jpg" style="width:240px;height:292px;">
                            <ul class="font-awe">
                                <li>
                                    <a class="mnb"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                </li>
                            </ul>
                        </div>
                        <figcaption class="info-wrap">
                            <a href="#" class="title">Man</a> <br> Lucy Slim Jearn Noisy May <br>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>    
                            <span class="fa fa-star"></span>
                            <div class="price-wrap">
                                <div class="wrap-swap">
                                    <span class="price-new" style="text-align:center">$50.00</span>
                                    <div class="select-option">
                                        <a href="#">QUICK VIEWS</a>
                                    </div>
                                </div>
                            </div>
                        </figcaption>
                    </figure>
                </div>
                <div class="swiper-slide">
                <figure class="card card-product">
                        <div class="img-wrap">
                            <img src="<?php echo $url_path ?>/images/giay2.jpg" style="width:240px;height:292px;">
                            
                            <img class="hover-img" src="<?php echo $url_path ?>/images/giay3.jpg" style="width:240px;height:292px;">
                            <ul class="font-awe">
                                <li>
                                    <a class="mnb"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                </li>
                            </ul>
                        </div>
                        <figcaption class="info-wrap">
                            <a href="#" class="title">Man</a> <br> Lucy Slim Jearn Noisy May <br>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>    
                            <span class="fa fa-star"></span>
                            <div class="price-wrap">
                                <div class="wrap-swap">
                                    <span class="price-new" style="text-align:center">$50.00</span>
                                    <div class="select-option">
                                        <a href="#">QUICK VIEWS</a>
                                    </div>
                                </div>
                            </div>
                        </figcaption>
                    </figure>
                </div>
                <div class="swiper-slide">
                <figure class="card card-product">
                        <div class="img-wrap">
                            <img src="<?php echo $url_path ?>/images/giay3.jpg" style="width:240px;height:292px;">
                            
                            <img class="hover-img" src="images/giay4.jpg" style="width:240px;height:292px;">
                            <ul class="font-awe">
                                <li>
                                    <a class="mnb"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                </li>
                            </ul>
                        </div>
                        <figcaption class="info-wrap">
                            <a href="#" class="title">Man</a> <br> Lucy Slim Jearn Noisy May <br>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>    
                            <span class="fa fa-star"></span>
                            <div class="price-wrap">
                                <div class="wrap-swap">
                                    <span class="price-new" style="text-align:center">$50.00</span>
                                    <div class="select-option">
                                        <a href="#">QUICK VIEWS</a>
                                    </div>
                                </div>
                            </div>
                        </figcaption>
                    </figure>
                </div>
                <div class="swiper-slide">
                <figure class="card card-product">
                        <div class="img-wrap">
                            <img src="<?php echo $url_path ?>/images/giay4.jpg" style="width:240px;height:292px;">
                            
                            <img class="hover-img" src="<?php echo $url_path ?>/images/giay5.jpg" style="width:240px;height:292px;">
                            <ul class="font-awe">
                                <li>
                                    <a class="mnb"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                </li>
                            </ul>
                        </div>
                        <figcaption class="info-wrap">
                            <a href="#" class="title">Man</a> <br> Lucy Slim Jearn Noisy May <br>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>    
                            <span class="fa fa-star"></span>
                            <div class="price-wrap">
                                <div class="wrap-swap">
                                    <span class="price-new" style="text-align:center">$50.00</span>
                                    <div class="select-option">
                                        <a href="#">QUICK VIEWS</a>
                                    </div>
                                </div>
                            </div>
                        </figcaption>
                    </figure>
                </div>
                <div class="swiper-slide">
                <figure class="card card-product">
                        <div class="img-wrap">
                            <img src="<?php echo $url_path ?>/images/giay5.jpg" style="width:240px;height:292px;">
                            
                            <img class="hover-img" src="<?php echo $url_path ?>/images/giay6.jpg" style="width:240px;height:292px;">
                            <ul class="font-awe">
                                <li>
                                    <a class="mnb"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                </li>
                            </ul>
                        </div>
                        <figcaption class="info-wrap">
                            <a href="#" class="title">Man</a> <br> Lucy Slim Jearn Noisy May <br>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>    
                            <span class="fa fa-star"></span>
                            <div class="price-wrap">
                                <div class="wrap-swap">
                                    <span class="price-new" style="text-align:center">$50.00</span>
                                    <div class="select-option">
                                        <a href="#">QUICK VIEWS</a>
                                    </div>
                                </div>
                            </div>
                        </figcaption>
                    </figure>
                </div>
                <div class="swiper-slide">
                <figure class="card card-product">
                        <div class="img-wrap">
                            <img src="<?php echo $url_path ?>/images/giay6.jpg" style="width:240px;height:292px;">
                            
                            <img class="hover-img" src="<?php echo $url_path ?>/images/giay7.jpg" style="width:240px;height:292px;">
                            <ul class="font-awe">
                                <li>
                                    <a class="mnb"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                </li>
                            </ul>
                        </div>
                        <figcaption class="info-wrap">
                            <a href="#" class="title">Man</a> <br> Lucy Slim Jearn Noisy May <br>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>    
                            <span class="fa fa-star"></span>
                            <div class="price-wrap">
                                <div class="wrap-swap">
                                    <span class="price-new" style="text-align:center">$50.00</span>
                                    <div class="select-option">
                                        <a href="#">QUICK VIEWS</a>
                                    </div>
                                </div>
                            </div>
                        </figcaption>
                    </figure>
                </div>
                <div class="swiper-slide">
                <figure class="card card-product">
                        <div class="img-wrap">
                            <img src="<?php echo $url_path ?>/images/giay7.jpg" style="width:240px;height:292px;">
                            
                            <img class="hover-img" src="<?php echo $url_path ?>/images/giay8.jpg" style="width:240px;height:292px;">
                            <ul class="font-awe">
                                <li>
                                    <a class="mnb"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                </li>
                            </ul>
                        </div>
                        <figcaption class="info-wrap">
                            <a href="#" class="title">Man</a> <br> Lucy Slim Jearn Noisy May <br>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>    
                            <span class="fa fa-star"></span>
                            <div class="price-wrap">
                                <div class="wrap-swap">
                                    <span class="price-new" style="text-align:center">$50.00</span>
                                    <div class="select-option">
                                        <a href="#">QUICK VIEWS</a>
                                    </div>
                                </div>
                            </div>
                        </figcaption>
                    </figure>
                </div>
                <div class="swiper-slide">
                <figure class="card card-product">
                        <div class="img-wrap">
                            <img src="<?php echo $url_path ?>/images/giay8.jpg" style="width:240px;height:292px;">
                            
                            <img class="hover-img" src="<?php echo $url_path ?>/images/giay9.jpg" style="width:240px;height:292px;">
                            <ul class="font-awe">
                                <li>
                                    <a class="mnb"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                </li>
                            </ul>
                        </div>
                        <figcaption class="info-wrap">
                            <a href="#" class="title">Man</a> <br> Lucy Slim Jearn Noisy May <br>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>    
                            <span class="fa fa-star"></span>
                            <div class="price-wrap">
                                <div class="wrap-swap">
                                    <span class="price-new" style="text-align:center">$50.00</span>
                                    <div class="select-option">
                                        <a href="#">QUICK VIEWS</a>
                                    </div>
                                </div>
                            </div>
                        </figcaption>
                    </figure>
                </div>
                <div class="swiper-slide">
                <figure class="card card-product">
                        <div class="img-wrap">
                            <img src="<?php echo $url_path ?>/images/giay9.jpg" style="width:240px;height:292px;">
                            
                            <img class="hover-img" src="<?php echo $url_path ?>/images/giay10.jpg" style="width:240px;height:292px;">
                            <ul class="font-awe">
                                <li>
                                    <a class="mnb"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                </li>
                            </ul>
                        </div>
                        <figcaption class="info-wrap">
                            <a href="#" class="title">Man</a> <br> Lucy Slim Jearn Noisy May <br>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>    
                            <span class="fa fa-star"></span>
                            <div class="price-wrap">
                                <div class="wrap-swap">
                                    <span class="price-new" style="text-align:center">$50.00</span>
                                    <div class="select-option">
                                        <a href="#">QUICK VIEWS</a>
                                    </div>
                                </div>
                            </div>
                        </figcaption>
                    </figure>
                </div>
                <div class="swiper-slide">
                <figure class="card card-product">
                        <div class="img-wrap">
                            <img src="<?php echo $url_path ?>/images/giay10.jpg" style="width:240px;height:292px;">
                            
                            <img class="hover-img" src="<?php echo $url_path ?>/images/giay1.jpg" style="width:240px;height:292px;">
                            <ul class="font-awe">
                                <li>
                                    <a class="mnb"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                </li>
                            </ul>
                        </div>
                        <figcaption class="info-wrap">
                            <a href="#" class="title">Man</a> <br> Lucy Slim Jearn Noisy May <br>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>    
                            <span class="fa fa-star"></span>
                            <div class="price-wrap">
                                <div class="wrap-swap">
                                    <span class="price-new" style="text-align:center">$50.00</span>
                                    <div class="select-option">
                                        <a href="#">QUICK VIEWS</a>
                                    </div>
                                </div>
                            </div>
                        </figcaption>
                    </figure>
                </div>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
            <!-- Add Arrows -->
            <br>
            <br>
            <div class="swiper-button-next" style="top: 147px;right: -1px;"></div>
            <div class="swiper-button-prev" style="top: 147px;right: -1px;"></div>
        </div>


    </div>
</div>