<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-9">
    <div class="container">
        <div class="row">
            <div class="footer-top1">
                <div class="col-md-3">
                    <div class="titles">
                        <span class="widget-title">About us</span>
                        <div class="is-divider small"></div>
                    </div>
                    <p class="texta">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                    <div class="soli-icon">
                        <a class="button" href="#"><i class="fa fa-facebook-f"></i></a>
                        <a class="button" href="#"><i class="fa fa-instagram"></i></a>
                        <a class="button" href="#"><i class="fa fa-twitter"></i></a>
                        <a class="button" href="#"><i class="fa fa-envelope"></i></a>
                        <a class="button" href="#"><i class="fa fa-pinterest"></i></a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="titles">
                        <span class="widget-title">LATEST NEWS</span>
                        <div class="is-divider small"></div>
                        <div class="post-titless">
                            <ul>
                            <li class="post-list">
                                <div class="post-title-data">
                                    <div class="post-date">
                                        <span>19</span>
                                        <br>
                                        <span>Nov</span>
                                    </div>
                                    
                                </div>
                                <div class="post-title-text">
                                    <a href="#">Welcome to Flatsome</a>
                                    <span><a href="#"><strong>1 Comment</strong></a></span>
                                </div>
                            </li>
                            <li class="post-list">
                                <div class="post-title-data">
                                    <div class="post-date">
                                        <span>19</span>
                                        <br>
                                        <span>Nov</span>
                                    </div>
                                    <div class="post-title"></div>
                                </div>
                                <div class="post-title-text">
                                    <a href="#">Welcome to Flatsome</a>
                                    <span><a href="#"><strong>1 Comment</strong></a></span>
                                </div>
                            </li>
                            <li class="post-list">
                                <div class="post-title-data">
                                    <div class="post-date">
                                        <span>19</span>
                                        <br>
                                        <span>Nov</span>
                                    </div>
                                    <div class="post-title"></div>
                                </div>
                                <div class="post-title-text">
                                    <a href="#">Welcome to Flatsome</a>
                                    <span><a href="#"><strong>1 Comment</strong></a></span>
                                </div>
                            </li>
                            <li class="post-list1">
                                <div class="post-title-data">
                                    <div class="post-date">
                                        <span>19</span>
                                        <br>
                                        <span>Nov</span>
                                    </div>
                                    <div class="post-title"></div>
                                </div>
                                <div class="post-title-text">
                                    <a href="#">Welcome to Flatsome</a>
                                    <span><a href="#"><strong>1 Comment</strong></a></span>
                                </div>
                            </li>
                        </ul>
                        </div>
                    </div>
                    
                </div>
                <div class="col-md-3">
                    <div class="titles">
                        <span class="widget-title">TAGS</span>
                        <div class="is-divider small"></div>
                        <div class="tag-blog">
                            <a href="#">bag</a>
                            <a href="#">classic</a>
                            <a href="#">Converse</a>
                            <a href="#">Diesel</a>
                            <a href="#">fit</a>
                            <a href="#">green</a>
                            <a href="#">Jack and Jones</a>
                            <a href="#">Jack and Jones-2</a>
                            <a href="#">jeans</a>
                            <a href="#">Jumper</a>
                            <a href="#">leather</a>
                            <a href="#">Lee</a>
                            <a href="#">levis</a>
                            <a href="#">man</a>
                            <a href="#">nypd</a>
                            <a href="#">party</a>
                            <a href="#">Pink</a>
                            <a href="#">River Island</a>
                            <a href="#">rock chick</a>
                            <a href="#">run</a>
                            <a href="#">shoe</a>
                            <a href="#">stars</a>
                            <a href="#">sweden</a>
                            <a href="#">t-shirt</a>
                            <a href="#">vans</a>
                            <a href="#">washed-out</a>
                            <a href="#">white</a>
                            <a href="#">women</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="titles">
                        <span class="widget-title">SIGNUP FOR NEWSLETTER</span>
                        <div class="is-divider small"></div>
                        <p>Signup to get news about Flatsome &amp; WooCommerce. We don't spam!</p>
                        <div class="form">
                            <span>
                                <input type="email" name="your-email" value="" size="40" class="wpcf7-form-control"placeholder="Your Email (required)">
                            </span>
                            <p><input type="submit" value="Sign Up" class="wpcf7-form-control1 "></p>
                        </div>
                    </div>
                    
                </div>
            </div>
            
        </div>
    </div>
</div>