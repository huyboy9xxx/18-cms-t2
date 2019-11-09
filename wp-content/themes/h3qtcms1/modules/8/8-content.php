<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-8">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="title">
                    <h4>LATEST</h4>
                    <div class="line-botom"></div>
                </div>
                <ul class="product">
                    <li>
                        <a href="#"><img width="60" height="60" src="<?php echo $url_path ?>/images/1.jpeg" alt="">
                            <span class="product-title">On1 Jersey UNIF-2</span>
                        </a>
                        <!-- Rating Stars Box -->
                        <div class='rating-stars'>
                            <span id='stars'>
                                <p class='star selected' data-value='1'>
                                    <i class='fa fa-star fa-fw'></i>
                                </p>
                                <p class='star selected' data-value='2'>
                                    <i class='fa fa-star fa-fw'></i>
                                </p>
                                <p class='star selected' data-value='3'>
                                    <i class='fa fa-star fa-fw'></i>
                                </p>
                                <p class='star' data-value='4'>
                                    <i class='fa fa-star fa-fw'></i>
                                </p>
                                <p class='star' data-value='5'>
                                    <i class='fa fa-star fa-fw'></i>
                                </p>
                            </span>
                        </div>
                        <span class="price">£59,00</span>
                    </li>
                    <li class="rating">
                        <a href="#">
                            <img width="60" height="60" src="<?php echo $url_path ?>/images/2.jpeg" alt="">
                            <span class="product-title">Osaka Entry Tee Superdry 12</span>
                        </a>
                        <!-- Rating Stars Box -->
                        <div class='rating-stars'>
                            <span id='stars'>
                                <p class='star selected' data-value='1'>
                                    <i class='fa fa-star fa-fw'></i>
                                </p>
                                <p class='star selected' data-value='2'>
                                    <i class='fa fa-star fa-fw'></i>
                                </p>
                                <p class='star selected' data-value='3'>
                                    <i class='fa fa-star fa-fw'></i>
                                </p>
                                <p class='star selected' data-value='4'>
                                    <i class='fa fa-star fa-fw'></i>
                                </p>
                                <p class='star' data-value='5'>
                                    <i class='fa fa-star fa-fw'></i>
                                </p>
                            </span>
                        </div>
                        <span class="price">£69,00</span>
                    </li>
                    <li>
                        <a href="#">
                            <img width="60" height="60" src="<?php echo $url_path ?>/images/3.jpeg" alt="">
                            <span class="product-title">All Star Canvas Hi Converse</span>
                        </a>
                        <!-- Rating Stars Box -->
                        <div class='rating-stars'>
                            <span id='stars'>
                                <p class='star selected' data-value='1'>
                                    <i class='fa fa-star fa-fw'></i>
                                </p>
                                <p class='star selected' data-value='2'>
                                    <i class='fa fa-star fa-fw'></i>
                                </p>
                                <p class='star' data-value='3'>
                                    <i class='fa fa-star fa-fw'></i>
                                </p>
                                <p class='star' data-value='4'>
                                    <i class='fa fa-star fa-fw'></i>
                                </p>
                                <p class='star' data-value='5'>
                                    <i class='fa fa-star fa-fw'></i>
                                </p>
                            </span>
                        </div>
                        <span class="price">£79,00</span>
                    </li>
                    <li>
                        <a href="#">
                            <img width="60" height="60" src="<?php echo $url_path ?>/images/4.jpeg" alt="">
                            <span class="product-title">Fluro Big Pullover Designers Remix</span>
                        </a>
                        <!-- Rating Stars Box -->
                        <div class='rating-stars'>
                            <span id='stars'>
                                <p class='star selected' data-value='1'>
                                    <i class='fa fa-star fa-fw'></i>
                                </p>
                                <p class='star selected' data-value='2'>
                                    <i class='fa fa-star fa-fw'></i>
                                </p>
                                <p class='star selected' data-value='3'>
                                    <i class='fa fa-star fa-fw'></i>
                                </p>
                                <p class='star selected' data-value='4'>
                                    <i class='fa fa-star fa-fw'></i>
                                </p>
                                <p class='star selected' data-value='5'>
                                    <i class='fa fa-star fa-fw'></i>
                                </p>
                            </span>
                        </div>
                        <span class="price">£89,00</span>
                    </li>
                </ul>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="title">
                    <h4>BEST SELLING</h4>
                    <div class="line-botom"></div>
                </div>
                <ul class="product">
                    <li>
                        <a href="#">
                            <img width="60" height="60" src="<?php echo $url_path ?>/images/4.jpeg" alt="">
                            <span class="product-title">On1 Jersey UNIF-2</span>
                        </a>
                        <!-- Rating Stars Box -->
                        <div class='rating-stars'>
                            <span id='stars'>
                                <p class='star selected' data-value='1'>
                                    <i class='fa fa-star fa-fw'></i>
                                </p>
                                <p class='star selected' data-value='2'>
                                    <i class='fa fa-star fa-fw'></i>
                                </p>
                                <p class='star' data-value='3'>
                                    <i class='fa fa-star fa-fw'></i>
                                </p>
                                <p class='star' data-value='4'>
                                    <i class='fa fa-star fa-fw'></i>
                                </p>
                                <p class='star' data-value='5'>
                                    <i class='fa fa-star fa-fw'></i>
                                </p>
                            </span>
                        </div>
                        <span class="price">£35,00</span>
                    </li>
                    <li>
                        <a href="#">
                            <img width="60" height="60" src="<?php echo $url_path ?>/images/5.jpeg" alt="">
                            <span class="product-title">Osaka Entry Tee Superdry 12</span>
                        </a>
                        <!-- Rating Stars Box -->
                        <div class='rating-stars'>
                            <span id='stars'>
                                <p class='star selected' data-value='1'>
                                    <i class='fa fa-star fa-fw'></i>
                                </p>
                                <p class='star selected' data-value='2'>
                                    <i class='fa fa-star fa-fw'></i>
                                </p>
                                <p class='star selected' data-value='3'>
                                    <i class='fa fa-star fa-fw'></i>
                                </p>
                                <p class='star' data-value='4'>
                                    <i class='fa fa-star fa-fw'></i>
                                </p>
                                <p class='star' data-value='5'>
                                    <i class='fa fa-star fa-fw'></i>
                                </p>
                            </span>
                        </div>
                        <span class="price">£39,66</span>
                    </li>
                    <li>
                        <a href="#">
                            <img width="60" height="60" src="<?php echo $url_path ?>/images/6.jpeg" alt="">
                            <span class="product-title">All Star Canvas Hi Converse</span>
                        </a>
                        <!-- Rating Stars Box -->
                        <div class='rating-stars'>
                            <span id='stars'>
                                <p class='star selected' data-value='1'>
                                    <i class='fa fa-star fa-fw'></i>
                                </p>
                                <p class='star selected' data-value='2'>
                                    <i class='fa fa-star fa-fw'></i>
                                </p>
                                <p class='star selected' data-value='3'>
                                    <i class='fa fa-star fa-fw'></i>
                                </p>
                                <p class='star' data-value='4'>
                                    <i class='fa fa-star fa-fw'></i>
                                </p>
                                <p class='star' data-value='5'>
                                    <i class='fa fa-star fa-fw'></i>
                                </p>
                            </span>
                        </div>
                        <span class="price">£99,00</span>
                    </li>
                    <li>
                        <a href="#">
                            <img width="60" height="60" src="<?php echo $url_path ?>/images/7.jpeg" alt="">
                            <span class="product-title">Fluro Big Pullover Designers Remix</span>
                        </a>
                        <!-- Rating Stars Box -->
                        <div class='rating-stars'>
                            <span id='stars'>
                                <p class='star selected' data-value='1'>
                                    <i class='fa fa-star fa-fw'></i>
                                </p>
                                <p class='star selected' data-value='2'>
                                    <i class='fa fa-star fa-fw'></i>
                                </p>
                                <p class='star selected' data-value='3'>
                                    <i class='fa fa-star fa-fw'></i>
                                </p>
                                <p class='star' data-value='4'>
                                    <i class='fa fa-star fa-fw'></i>
                                </p>
                                <p class='star' data-value='5'>
                                    <i class='fa fa-star fa-fw'></i>
                                </p>
                            </span>
                        </div>
                        <span class="price">£30,00</span>
                    </li>
                </ul>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="title">
                    <h4>FEATURED</h4>
                    <div class="line-botom"></div>
                </div>
                <ul class="product">
                    <li>
                        <a href="#">
                            <img width="60" height="60" src="<?php echo $url_path ?>/images/1.jpeg" alt="">
                            <span class="product-title">On1 Jersey UNIF-2</span>
                        </a>
                        <!-- Rating Stars Box -->
                        <div class='rating-stars'>
                            <span id='stars'>
                                <p class='star selected' data-value='1'>
                                    <i class='fa fa-star fa-fw'></i>
                                </p>
                                <p class='star selected' data-value='2'>
                                    <i class='fa fa-star fa-fw'></i>
                                </p>
                                <p class='star selected' data-value='3'>
                                    <i class='fa fa-star fa-fw'></i>
                                </p>
                                <p class='star selected' data-value='4'>
                                    <i class='fa fa-star fa-fw'></i>
                                </p>
                                <p class='star' data-value='5'>
                                    <i class='fa fa-star fa-fw'></i>
                                </p>
                            </span>
                        </div>
                        <span class="price">£39,00</span>
                    </li>
                    <li>
                        <a href="#">
                            <img width="60" height="60" src="<?php echo $url_path ?>/images/2.jpeg" alt="">
                            <span class="product-title">Osaka Entry Tee Superdry 12</span>
                        </a>
                        <!-- Rating Stars Box -->
                        <div class='rating-stars'>
                            <span id='stars'>
                                <p class='star selected' data-value='1'>
                                    <i class='fa fa-star fa-fw'></i>
                                </p>
                                <p class='star selected' data-value='2'>
                                    <i class='fa fa-star fa-fw'></i>
                                </p>
                                <p class='star selected' data-value='3'>
                                    <i class='fa fa-star fa-fw'></i>
                                </p>
                                <p class='star' data-value='4'>
                                    <i class='fa fa-star fa-fw'></i>
                                </p>
                                <p class='star' data-value='5'>
                                    <i class='fa fa-star fa-fw'></i>
                                </p>
                            </span>
                        </div>
                        <span class="price">£39,00</span>
                    </li>
                    <li>
                        <a href="#">
                            <img width="60" height="60" src="<?php echo $url_path ?>/images/6.jpeg" alt="">
                            <span class="product-title">All Star Canvas Hi Converse</span>
                        </a>
                        <!-- Rating Stars Box -->
                        <div class='rating-stars'>
                            <span id='stars'>
                                <p class='star selected' data-value='1'>
                                    <i class='fa fa-star fa-fw'></i>
                                </p>
                                <p class='star selected' data-value='2'>
                                    <i class='fa fa-star fa-fw'></i>
                                </p>
                                <p class='star selected' data-value='3'>
                                    <i class='fa fa-star fa-fw'></i>
                                </p>
                                <p class='star' data-value='4'>
                                    <i class='fa fa-star fa-fw'></i>
                                </p>
                                <p class='star' data-value='5'>
                                    <i class='fa fa-star fa-fw'></i>
                                </p>
                            </span>
                        </div>
                        <span class="price">£39,00</span>
                    </li>
                    <li>
                        <a href="#">
                            <img width="60" height="60" src="<?php echo $url_path ?>/images/5.jpeg" alt="">
                            <span class="product-title">Fluro Big Pullover Designers Remix</span>
                        </a>
                        <!-- Rating Stars Box -->
                        <div class='rating-stars'>
                            <span id='stars'>
                                <p class='star selected' data-value='1'>
                                    <i class='fa fa-star fa-fw'></i>
                                </p>
                                <p class='star selected' data-value='2'>
                                    <i class='fa fa-star fa-fw'></i>
                                </p>
                                <p class='star selected' data-value='3'>
                                    <i class='fa fa-star fa-fw'></i>
                                </p>
                                <p class='star selected' data-value='4'>
                                    <i class='fa fa-star fa-fw'></i>
                                </p>
                                <p class='star' data-value='5'>
                                    <i class='fa fa-star fa-fw'></i>
                                </p>
                            </span>
                        </div>
                        <span class="price">£39,00</span>
                    </li>
                </ul>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="title">
                    <h4>TOP RATED PRODUCTS</h4>
                    <div class="line-botom"></div>
                </div>
                <ul class="product">
                    <li>
                        <a href="#">
                            <img width="60" height="60" src="<?php echo $url_path ?>/images/7.jpeg" alt="">
                            <span class="product-title">On1 Jersey UNIF-2</span>
                        </a>
                        <!-- Rating Stars Box -->
                        <div class='rating-stars'>
                            <span id='stars'>
                                <p class='star selected' data-value='1'>
                                    <i class='fa fa-star fa-fw'></i>
                                </p>
                                <p class='star selected' data-value='2'>
                                    <i class='fa fa-star fa-fw'></i>
                                </p>
                                <p class='star selected' data-value='3'>
                                    <i class='fa fa-star fa-fw'></i>
                                </p>
                                <p class='star' data-value='4'>
                                    <i class='fa fa-star fa-fw'></i>
                                </p>
                                <p class='star' data-value='5'>
                                    <i class='fa fa-star fa-fw'></i>
                                </p>
                            </span>
                        </div>
                        <span class="price">£39,00</span>
                    </li>
                    <li>
                        <a href="#">
                            <img width="60" height="60" src="<?php echo $url_path ?>/images/2.jpeg" alt="">
                            <span class="product-title">Osaka Entry Tee Superdry 12</span>
                        </a>
                        <!-- Rating Stars Box -->
                        <div class='rating-stars'>
                            <span id='stars'>
                                <p class='star selected' data-value='1'>
                                    <i class='fa fa-star fa-fw'></i>
                                </p>
                                <p class='star selected' data-value='2'>
                                    <i class='fa fa-star fa-fw'></i>
                                </p>
                                <p class='star' data-value='3'>
                                    <i class='fa fa-star fa-fw'></i>
                                </p>
                                <p class='star' data-value='4'>
                                    <i class='fa fa-star fa-fw'></i>
                                </p>
                                <p class='star' data-value='5'>
                                    <i class='fa fa-star fa-fw'></i>
                                </p>
                            </span>
                        </div>
                        <span class="price">£39,00</span>
                    </li>
                    <li>
                        <a href="#">
                            <img width="60" height="60" src="<?php echo $url_path ?>/images/3.jpeg" alt="">
                            <span class="product-title">All Star Canvas Hi Converse</span>
                        </a>
                        <!-- Rating Stars Box -->
                        <div class='rating-stars'>
                            <span id='stars'>
                                <p class='star selected' data-value='1'>
                                    <i class='fa fa-star fa-fw'></i>
                                </p>
                                <p class='star selected' data-value='2'>
                                    <i class='fa fa-star fa-fw'></i>
                                </p>
                                <p class='star selected' data-value='3'>
                                    <i class='fa fa-star fa-fw'></i>
                                </p>
                                <p class='star' data-value='4'>
                                    <i class='fa fa-star fa-fw'></i>
                                </p>
                                <p class='star' data-value='5'>
                                    <i class='fa fa-star fa-fw'></i>
                                </p>
                            </span>
                        </div>
                        <span class="price">£39,00</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
</div>
