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
        <!-- The modal -->
        <div class="modal fade" id="flipFlop" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
           <!--  <button type="button" class="close" data-dismiss="modal" aria-label="Close">X</button> -->
            <div class="modal-dialog" role="document"> <!-- start modal dialog -->
                <div class="modal-content"> <!-- start modal content -->
                    <div class="modal-body"> <!-- start modal body -->
                        <div class="row">
                            <div class="col-md-6 custom-slide">
                                <div class="slide-product"> <!-- start slide product -->
                                    <div class="swiper-container">
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
                                          <div class="swiper-slide">
                                              <img src="<?php echo $url_path ?>/images/6.jpeg" class="img-responsive" alt="">
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
                            <div class="col-md-6 custom-slide">
                                <div class="right-descript"> <!-- start right descript -->
                                    <h3 class="title">All Star Canvas Hi Converse</h3>
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
                                                <span>SKU:  <a href="#">Diesel</a>, <a href="#">shoe</a>, <a href="#">stars</a></span>
                                            </li>
                                        </ul>
                                    </div>
                                </div> <!-- End right descript -->
                            </div>
                        </div>
                    </div> <!-- end modal body -->
                </div> <!-- end modal content -->
            </div><!-- end modal dialog -->
        </div>  <!-- End modal -->
    </div><!-- End container -->
</div>