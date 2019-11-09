<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-10">
    <div class="container"> <!-- start container -->
           <!--  <button type="button" class="close" data-dismiss="modal" aria-label="Close">X</button> -->
                    <div class="body-content"> <!-- start modal body -->
                        <div class="row">
                            <div class="col-md-6 custom-slide">
                                <div class="slide-product"> 
                                    <div class="swiper-container gallery-top">
                                        <div class="swiper-wrapper">
                                          <div class="swiper-slide">
            
                                              <img src="<?php echo $url_path ?>/images/1.jpeg" class="img-responsive" alt="">
                                          <!--     </div> -->
                                          </div>
                                          <div class="swiper-slide">
                                   
                                              <img src="<?php echo $url_path ?>/images/2.jpeg" class="img-responsive" alt="">
                             
                                          </div>
                                          <div class="swiper-slide">
                                    
                                              <img src="<?php echo $url_path ?>/images/3.jpeg" class="img-responsive" alt="">
                                     
                                          </div>
                                          <div class="swiper-slide">
                                   
                                              <img src="<?php echo $url_path ?>/images/4.jpeg" class="img-responsive" alt="">
         
                                          </div>
                                          <div class="swiper-slide">
                           
                                              <img src="<?php echo $url_path ?>/images/5.jpeg" class="img-responsive" alt="">
                            
                                          </div>
                                        </div>
                                        <div class="swiper-button-next"></div>
                                        <div class="swiper-button-prev"></div>
                                      </div>
                                </div> 
                 
                                <!-- end slide product -->
                                <div class="swiper-container gallery-thumbs">
                                    <div class="swiper-wrapper">
                                      <div class="swiper-slide">
                                          <img src="<?php echo $url_path ?>/images/1.jpeg" class="img-responsive" alt="">
                                      </div>
                                      <div class="swiper-slide">
                                          <img src="<?php echo $url_path ?>/images/2.jpeg" class="img-responsive" alt="">
                                      </div>
                                      <div class="swiper-slide">
                                          <img src="<?php echo $url_path ?>/images/3.jpeg" class="img-responsive" alt="">
                                      </div>
                                      <div class="swiper-slide">
                                          <img src="<?php echo $url_path ?>/images/4.jpeg" class="img-responsive" alt="">
                                      </div>
                                      <div class="swiper-slide">
                                          <img src="<?php echo $url_path ?>/images/5.jpeg" class="img-responsive" alt="">
                                      </div>

                                    </div>

                                  </div>

                            </div>
                            <div class="col-md-4 custom-slide">
                                <div class="right-descript"> <!-- start right descript -->
                                    <h3 class="title">All Star Canvas Hi Converse</h3>
                                    <div class="star-rating">
                                            <span class="fa fa-star-o" data-rating="1"></span>
                                            <span class="fa fa-star-o" data-rating="2"></span>
                                            <span class="fa fa-star-o" data-rating="3"></span>
                                            <span class="fa fa-star-o" data-rating="4"></span>
                                            <span class="fa fa-star-o" data-rating="5"></span>
                                            <input type="hidden" name="whatever1" class="rating-value" value="0.56">
                                    </div>
                                    <h3 class="price">$29,00</h3>
                                    <p class="more descript">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat.</p>
                                    <div class="content-descript">
                                        <div class="clear-select">
                                            <span><a href="#">CLEAR</a></span>
                                        </div>
                                        <div class="form-group select-size">
                                        <label for="size" class="col-md-2 control-label">Size</label>
                                            <div class="input-group">
                                                <span class="input-group-btn">
                                                    <select class="form-control" name="size" id="size">
                                                        <option value="31">31</option>
                                                        <option value="32">32</option>
                                                        <option value="33">33</option>
                                                        <option value="37">37</option>
                                                        <option value="39">39</option>
                                                    </select>
                                                </span>
                                            </div>    
                                        </div>
                                        <br/>
                                        <div class="form-group select-size">
                                        <label for="color" class="col-md-2 control-label">Color</label>
                                            <div class="input-group">
                                                <span class="input-group-btn">
                                                    <select class="form-control" name="color" id="color">
                                                        <option value="Blue">Blue</option>
                                                        <option value="Pink">Pink</option>
                                                        <option value="Green">Green</option>
                                                        <option value="Red">Red</option>
                                                    </select>
                                                </span>
                                            </div>    
                                        </div> 
                                        <br/>
                                    </div>
                                    <br/>
                                    <div class="number-spinner">
                                        <div class="handle-counter" id="handleCounter">
                                            <button class="counter-minus  btn">-</button>
                                            <input type="text" value="1">
                                            <button class="counter-plus  btn">+</button>
                                        </div>
                                        <button type="button" class="btn btn-danger add-to-cart">ADD TO CART</button>
                                    </div>
                                    <br/>
                                    <div class="info-made">
                                        <ul>
                                            <li>
                                                <span>SKU: N/A</span>
                                            </li>
                                            <li>
                                                <span>Category: <a href="#">Shoes</a></span>
                                            </li>
                                            <li>
                                                <span>Tags:  <a href="#">Diesel</a>, <a href="#">shoe</a>, <a href="#">stars</a></span>
                                            </li>
                                            <li class="clear-fix">
                                                <a href="#" class="mess">
                                                    <i class="fa fa-facebook" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" class="mess">
                                                    <i class="fa fa-twitter" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" class="mess">
                                                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" class="mess">
                                                    <i class="fa fa-pinterest" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" class="mess">
                                                    <i class="fa fa-linkedin-square" aria-hidden="true"></i>
                                                </a>
                          
                                            </li>
                                        </ul>
                                    </div>
                                </div> <!-- End right descript -->
                            </div>
                            <div class="col-md-2 more-products">
                                <a href="#" class="btn-more">
                                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                                </a>
                                <div class="right-descript">
                                    <h4 class="title">You may also like…</h4>
                                    <div class="row item-pr">
                                        <a href="#" class="item-more-pr col-sm-3 col-md-12">
                                            <img src="<?php echo $url_path ?>/images/1.jpeg" class="img-responsive" alt="">
                                            <span class="item-pr">Lucy Slim Jeans Noisy May</span>
                                            <div class="price">
                                                <b>$29,00</b>
                                            </div>
                                        </a>
                                        <a href="#" class="item-more-pr col-sm-3 col-md-12">
                                            <img src="<?php echo $url_path ?>/images/2.jpeg" class="img-responsive" alt="">
                                            <span class="item-pr">Lucy Slim Jeans Noisy May</span>
                                            <div class="price">
                                                <b>$29,00</b>
                                            </div>
                                        </a>
                                        <a href="#" class="item-more-pr col-sm-3 col-md-12">
                                            <img src="<?php echo $url_path ?>/images/3.jpeg" class="img-responsive" alt="">
                                            <span class="item-pr">Lucy Slim Jeans Noisy May</span>
                                            <div class="price">
                                                <b>$29,00</b>
                                            </div>
                                        </a>
                                        <a href="#" class="item-more-pr col-sm-3 col-md-12">
                                            <img src="<?php echo $url_path ?>/images/1.jpeg" class="img-responsive" alt="">
                                            <span class="item-pr">Lucy Slim Jeans Noisy May</span>
                                            <div class="price">
                                                <b>$29,00</b>
                                            </div>
                                        </a>
                                        <a href="#" class="item-more-pr col-sm-3 col-md-12">
                                            <img src="<?php echo $url_path ?>/images/4.jpeg" class="img-responsive" alt="">
                                            <span class="item-pr">Lucy Slim Jeans Noisy May</span>
                                            <div class="price">
                                                <b>$29,00</b>
                                            </div>
                                        </a>
                                        <a href="#" class="item-more-pr col-sm-3 col-md-12">
                                            <img src="<?php echo $url_path ?>/images/5.jpeg" class="img-responsive" alt="">
                                            <span class="item-pr">Lucy Slim Jeans Noisy May</span>
                                            <div class="price">
                                                <b>$29,00</b>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div> <!-- end modal body -->
    </div><!-- End container -->

</div>



