<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-17">
   <div class="container">
    <br><br>
    <div class="tabs">
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#home">Description</a></li>
            <li><a data-toggle="tab" href="#menu1">Additional information</a></li>
            <li><a data-toggle="tab" href="#menu2">Reviews (4)</a></li>
        </ul><br>
         <div class="tab-content">
            <div id="home" class="tab-pane fade in active">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum iaculis massa nec velit commodo lobortis. Quisque diam lacus, tincidunt vitae eros porta, sagittis rhoncus est. Quisque sed justo a erat lobortis gravida. Suspendisse nibh neque, hendrerit vel nisi at, ultrices adipiscing justo. Nunc ullamcorper molestie felis at pharetra.</p>
              <p>Osaka Entry Tee NOK 399, Superdry - NELLY.COM</p>
              <p>Marfa authentic High Life veniam Carles nostrud, pickled meggings assumenda fingerstache keffiyeh Pinterest.</p>
            </div>
            <div id="menu1" class="tab-pane fade">
                <div class="row size-pr">
                    <div class="col-md-6">
                        <p class="title-size">SIZE</p>
                    </div>
                    <div class="col-md-6">
                        <p>S, M, L</p>
                    </div>
                </div>
            </div>
            <div id="menu2" class="tab-pane fade">
                <div class="row">
                    <div class="col-md-7">
                        <h3>4 reviews for Osaka Entry Tee Superdry 12</h3>
                        <div class="comments">
                            <div class="avatar">
                                <img src="<?php echo $url_path ?>/images/avatar.jpg">
                            </div>
                            <div class="comment">
                                <div class="star-rating">
                                        <span class="fa fa-star" data-rating="1"></span>
                                        <span class="fa fa-star" data-rating="2"></span>
                                        <span class="fa fa-star" data-rating="3"></span>
                                        <span class="fa fa-star" data-rating="4"></span>
                                        <span class="fa fa-star-o" data-rating="5"></span>
                                </div>
                                <div class="name"><b>Tommy Vedvik</b> - August 12, 2013</div>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                            </div>
                        </div>
                        <div class="comments">
                            <div class="avatar">
                                <img src="<?php echo $url_path ?>/images/avatar.jpg">
                            </div>
                            <div class="comment">
                                <div class="star-rating">
                                    <span class="fa fa-star" data-rating="1"></span>
                                    <span class="fa fa-star-o" data-rating="2"></span>
                                    <span class="fa fa-star-o" data-rating="3"></span>
                                    <span class="fa fa-star-o" data-rating="4"></span>
                                    <span class="fa fa-star-o" data-rating="5"></span>
                                </div>
                                <div class="name"><b>Tommy Vedvik</b> - August 12, 2013</div>
                                <p>Lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>

                        
                    </div>
                    <div class="col-md-5">
                        <div class="add-review">
                            <h3>Add a review</h3>
                            <label>Your rating</label>
                            <div class="star-rating">
                                <span class="fa fa-star-o" data-rating="1"></span>
                                <span class="fa fa-star-o" data-rating="2"></span>
                                <span class="fa fa-star-o" data-rating="3"></span>
                                <span class="fa fa-star-o" data-rating="4"></span>
                                <span class="fa fa-star-o" data-rating="5"></span>
                                <input type="hidden" name="whatever1" class="rating-value" value="0.56">
                            </div>
                            <div class="form-group">
                                <label for="comment">Your review *</label>
                                <textarea class="form-control" rows="6" id="comment"></textarea>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="name">Name *</label>
                                    <input type="text" class="form-control input-lg" id="name">
                                </div>
                                <div class="col-md-6">
                                    <label for="name">Email *</label>
                                <input type="email" class="form-control input-lg" id="name">
                                </div>
                            </div>
                            <div class="checkbox">
                              <label><input type="checkbox" value="">Save my name, email, and website in this browser for the next time I comment.</label>
                            </div>
                            <input type="submit" class="btn btn-primary input-lg" value="SUBMIT">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>