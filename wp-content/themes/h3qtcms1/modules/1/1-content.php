<?php
    $url_host = 'http://' . $_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1">
    <div class="container">
        <header class="header">
            <div class="top-bar">
                <div class="container">
                    <div class="nav-custom">
                        <div class="row">
                            <div class="col-md-4 title-bar">
                                <strong class="uppercase">Add anything here or just remove it....</strong>
                            </div>
                            <div class="col-md-8 bar-menu">
                                <ul>
                                    <li>
                                        <a href="#">About</a>
                                    </li>
                                    <li>
                                        <a href="#">Our Stores</a>
                                    </li>
                                    <li>
                                        <a href="#">Blog</a>
                                    </li>
                                    <li>
                                        <a href="#">Contact</a>
                                    </li>
                                    <li>
                                        <a href="#">FAQ</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="far fa-envelope"></i> Newsletter</a>
                                    </li>
                                    <li>
                                        <a href="#">Languages <i class="fas fa-chevron-down"></i></a>
                                    </li>

                                    <li>
                                        <a class="not-border" href="#">Wishlist <i class="fas fa-heart"></i></a>
                                    </li>
                                    <li class="right-mess">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="far fa-envelope"></i></a>
                                    </li>
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        
    </div>
    <div class="container">
        <div class="menu-2">
            <nav class="navbar navbar-default">
                <div class="nav-menu-2">
                <!-- BRAND -->
                    <div class="navbar-header">
                    <button type="button" class="navbar-toggle" id="opennav">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                        <img width="200" height="90" src="<?php echo $url_path ?>/images/logo-nav.png" class="img-responsive" alt="Flatsome">
                        <div class="cart-sm">
                            <?php h3qtcms1_header_cart() ?>
                        </div>
          
                    </div>

                    <!-- COLLAPSIBLE NAVBAR -->
                    <div class="collapse navbar-collapse" id="alignment-example">

                        <!-- Links -->
                       <!--  <ul class="nav navbar-nav">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle right-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Demos <i class="fas fa-chevron-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle right-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Features <i class="fas fa-chevron-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle right-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Shop <i class="fas fa-chevron-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle right-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages <i class="fas fa-chevron-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Elements</a></li>
                            <li><a href="#"><i class="fas fa-search"></i></a></li>
                        </ul> -->

                        <?php h3qtcms1_primary_navigation() ?>
                        <div class="navbar-right">
                            <ul class="nav navbar-nav">
                                <li>
                                    <form role="search" method="get" id="searchform"
                                        class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                                        <div>
                                            <label class="screen-reader-text" for="s"><?php _x( 'Search for:', 'label' ); ?></label>
                                            <input type="text" class="form-control" style="top: 9px;" value="<?php echo get_search_query(); ?>" name="s" id="s" />
                                            <button type="submit" id="searchsubmit"><i class="fas fa-search text-grey"></i></button>
                                        </div>
                                    </form>
                                </li>
                            </ul>
                           <!--  <ul class="nav navbar-nav">
                                <li>
                            <div class="input-group md-form form-sm form-2 pl-0">
                              
                              <div class="input-group-append">
                                <span class="input-group-text red lighten-3" id="basic-text1"><i class="fas fa-search text-grey"
                                    aria-hidden="true"></i></span>
                              </div>
                            </div>
                            </li>
                            </ul> -->
                            <?php h3qtcms1_header_cart() ?>

                        </div>

                    </div>

                </div>
            </nav>
        </div>
    </div>
     <div id="mySidenav" class="sidenav">
        <br><br><br>
        <form role="search" method="get" id="searchform2"
            class="searchform2" action="<?php echo esc_url( home_url( '/' ) ); ?>">
            <div>
                <input type="text" class="form-control" style="width: 290px;float: left; border-top-right-radius: 0; border-bottom-right-radius: 0;" value="<?php echo get_search_query(); ?>" name="s" id="s" />
                <button type="submit" id="searchsubmit" style="height: 35px !important; background: unset; border: 1px solid #ccc;"><i class="fas fa-search text-grey"></i></button>
            </div>
        </form>
        <?php h3qtcms1_primary_navigation() ?>
    </div>
    <div class="close-side"></div>
</div>