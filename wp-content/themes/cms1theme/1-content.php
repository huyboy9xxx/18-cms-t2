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
                        <img width="200" height="90" src="<?php echo $url_path; ?>/images/logo-nav.png" class="img-responsive" alt="Flatsome">
                        <a class="cart-custom cart-sm" href="#">
                            <span>
                                <strong>0</strong>
                            </span>
                        </a>
          
                    </div>

                    <!-- COLLAPSIBLE NAVBAR -->
                    <div class="collapse navbar-collapse" id="alignment-example">

                        <!-- Links -->
                        <ul class="nav navbar-nav">
                            <li><a href="#"><i class="fas fa-search"></i></a></li>
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
                        </ul>

                        <div class="navbar-right">
                            <ul class="nav navbar-nav">
                                <li><a href="#">Login</a></li>
                                <li><a href="#">Cart / $0,00</a></li>
                                <li><a class="cart-custom" href="#">
                                    <span>
                                        <strong>0</strong>
                                    </span>
                                </a></li>
                            </ul>
                        </div>

                    </div>

                </div>
            </nav>
        </div>
    </div>
     <div id="mySidenav" class="sidenav">
        <ul>
         
            <li>
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button"><i class="fas fa-search"></i></button>
                    </span>
                </div>
            </li>
                
 
            
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" >Demos</a>
              <a href="#" class="right-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fas fa-chevron-down"></i></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" >Features</a>
              <a href="#" class="right-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fas fa-chevron-down"></i></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" >Shop</a>
              <a href="#" class="right-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fas fa-chevron-down"></i></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" >Pages</a>
              <a href="#" class="right-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fas fa-chevron-down"></i></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
              </ul>
            </li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Elements</a></li>
            <li><a href="#">Login</a></li>
            <li><a href="#">NEWSLETTER</a></li>
            <li class="right-mess">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="far fa-envelope"></i></a>
            </li>
        </ul>
    </div>
    <div class="close-side"></div>
</div>