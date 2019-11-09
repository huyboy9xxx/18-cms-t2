<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-12">
    <div class="container">
        <div class="row">
            <div class="col-md-8 decsiton-left">
                <div class="title-left">
                    <h5>UNCATEGORIZED</h5>
                    <h4>Just another post with A Gallery</h4>
                    <div class="border-small"></div>
                    <h5>POSTED ON OCTOBER 13, 2015 BY TOMMY VEDVIK</h5>
                </div>
                <div class="image-view">
                    <img src="<?php echo $url_path ?>//images/1.jpg" alt="" class="img-responsive">
                    <div class="post-date">
                        <span>13 <b>Oct</b> </span>
                    </div>
                    <div class="decsition">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis esse delectus debitis
                        repellendus optio voluptate tempora saepe placeat. At beatae debitis possimus recusandae
                        dolorum, tenetur repellat. Animi deserunt ratione nemo?
                    </div>
                </div>
                <div class="row images-text">
                    <div class="col-md-3">
                        <img src="<?php echo $url_path ?>/images/2.jpg" alt="" class="img-responsive">
                    </div>
                    <div class="col-md-3">
                        <img src="<?php echo $url_path ?>/images/3.jpg" alt="" class="img-responsive">
                    </div>
                    <div class="col-md-3">
                        <img src="<?php echo $url_path ?>/images/4.jpg" alt="" class="img-responsive">
                    </div>
                    <div class="col-md-3">
                        <img src="<?php echo $url_path ?>/images/5.jpg" alt="" class="img-responsive">
                    </div>
                    <div class="col-md-3">
                        <img src="<?php echo $url_path ?>/images/6.jpg" alt="" class="img-responsive">
                    </div>
                    <div class="col-md-3">
                        <img src="<?php echo $url_path ?>/images/7.jpg" alt="" class="img-responsive">
                    </div>
                    <div class="col-md-3">
                        <img src="<?php echo $url_path ?>/images/8.jpg" alt="" class="img-responsive">
                    </div>
                    <div class="col-md-3">
                        <img src="<?php echo $url_path ?>/images/9.jpg" alt="" class="img-responsive">
                    </div>

                </div>
                <div class="icon-share">
                    <ul>
                        <a href="#"><li class="social-facebook" title="facebook"><i class="fa fa-facebook"></i></li></a>
                        <a href="#"><li class="social-twitter" title="Twitter"><i class="fa fa-twitter"></i></li></a>
                        <a href="#"><li class="social-email" title="Email"><i class="fa fa-envelope-o"></i></li></a>
                        <a href="#"><li class="social-in" title="Linkedin"><i class="fa fa-linkedin"></i></li></a> 
                    </ul>
                </div>
            </div>
            <div class="col-md-4 decsiton-right">
                <div class="title-right">
                    <h4>ABOUT</h4>
                    <div class="border-small"></div>
                    <div class="decsition">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis esse delectus debitis
                        repellendus optio voluptate tempora saepe placeat. At beatae debitis possimus recusandae
                        dolorum, tenetur repellat. Animi deserunt ratione nemo?
                    </div>
                    <h4>LATEST POSTS</h4>
                    <div class="border-small"></div>
                    <div class="test-post">
                        <div class="post-date">
                            <span>13 <b>Oct</b> </span>
                        </div>
                        <ul>
                            <li><a href="#">Welcome to Flatsome</a></li>
                            <li><a href="#" class="comment">1 comment</a></li>
                        </ul>
                    </div>
                    <div class="bottom-small"></div>
                    <div class="test-post">
                        <div class="post-date">
                            <span>19 <b>Oct</b> </span>
                        </div>
                        <ul>
                            <li><a href="#">Just another post with A Gallery</a></li>
                            <li><a href="#" class="comment">3 comment</a></li>
                        </ul>
                    </div>
                    <div class="bottom-small"></div>
                    <div class="test-post">
                        <div class="post-date">
                            <span>20 <b>Oct</b> </span>
                        </div>
                        <ul>
                            <li><a href="#">A Simple Blog Post</a></li>
                            <li><a href="#" class="comment">3 comment</a></li>
                        </ul>
                    </div>
                    <div class="bottom-small"></div>
                </div>
            </div>
        </div>
    </div>
</div>