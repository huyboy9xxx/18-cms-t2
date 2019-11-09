<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-7">
    <div class="container">
        <div class="section-title">
            <b></b>
            <span><i class="fa fa-instagram"></i>FOLLOW ON INSTAGRAM</span>
            <b></b>
        </div>
        <!-- Swiper -->
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <a href=""><img src="<?php echo $url_path ?>/images/8.jpg" alt="" class="img-responsive">
                        <div class="caption">
                            💙Freelance Modelling🖤Nelly Clothing💙#zoeandfiona #nellycom #makeup #lace #blue
                            #twopieceset
                            #bunny #mac #lipgloss #lipstick #brunette #model #eyeshadow #curly #hair #wavey #selfie
                            #youtube
                            #sing #fashion #style #glitter #vocals #omgvoices #lashes #snapchat #dancefloor #lingerie
                            #boudoir #twins
                        </div>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href=""><img src="<?php echo $url_path ?>/images/13.jpg" alt="" class="img-responsive">
                        <div class="caption">
                            💙Freelance Modelling🖤Nelly Clothing💙#zoeandfiona #nellycom #makeup #lace #blue
                            #twopieceset #bunny #mac #lipgloss #lipstick #brunette #model #eyeshadow #curly #hair #wavey
                            #selfie #youtube #sing #fashion #style #glitter #vocals #omgvoices #lashes #snapchat
                            #dancefloor #lingerie #boudoir
                            #twins💙🖤💙🖤💙🖤💙🖤💙🖤💙🖤💙🖤💙🖤💙🖤💙🖤💙🖤💙🖤🌸Follow 💖 :@ZoeandFiona
                            🖤👩🏻🎤👩🏻🎤🎧🎶
                        </div>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href=""><img src="<?php echo $url_path ?>/images/10.jpg" alt="" class="img-responsive">
                        <div class="caption">
                            💙Freelance Modelling🖤Nelly Clothing💙#zoeandfiona #nellycom #makeup #lace #blue
                            #twopieceset #bunny #mac #lipgloss #lipstick #brunette #model #eyeshadow #curly #hair #wavey
                            #selfie #youtube #sing #fashion #style #glitter #vocals #omgvoices #lashes #snapchat
                            #dancefloor #lingerie #boudoir
                            #twins💙🖤💙🖤💙🖤💙🖤💙🖤💙🖤💙🖤💙🖤💙🖤💙🖤💙🖤💙🖤🌸Follow 💖 :@ZoeandFiona
                            🖤👩🏻🎤👩🏻🎤🎧🎶
                        </div>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href=""><img src="<?php echo $url_path ?>/images/11.jpg" alt="" class="img-responsive">
                        <div class="caption">
                            💙Freelance Modelling🖤Nelly Clothing💙#zoeandfiona #nellycom #makeup #lace #blue
                            #twopieceset #bunny #mac #lipgloss #lipstick #brunette #model #eyeshadow #curly #hair #wavey
                            #selfie #youtube #sing #fashion #style #glitter #vocals #omgvoices #lashes #snapchat
                            #dancefloor #lingerie #boudoir
                            #twins💙🖤💙🖤💙🖤💙🖤💙🖤💙🖤💙🖤💙🖤💙🖤💙🖤💙🖤💙🖤🌸Follow 💖 :@ZoeandFiona
                            🖤👩🏻🎤👩🏻🎤🎧🎶
                        </div>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href=""><img src="<?php echo $url_path ?>/images/7.png" alt="" class="img-responsive">
                        <div class="caption">
                            💙Freelance Modelling🖤Nelly Clothing💙#zoeandfiona #nellycom #makeup #lace #blue
                            #twopieceset #bunny #mac #lipgloss #lipstick #brunette #model #eyeshadow #curly #hair #wavey
                            #selfie #youtube #sing #fashion #style #glitter #vocals #omgvoices #lashes #snapchat
                            #dancefloor #lingerie #boudoir
                            #twins💙🖤💙🖤💙🖤💙🖤💙🖤💙🖤💙🖤💙🖤💙🖤💙🖤💙🖤💙🖤🌸Follow 💖 :@ZoeandFiona
                            🖤👩🏻🎤👩🏻🎤🎧🎶
                        </div>
                    </a>
                </div>
                <div class="swiper-slide">
                    <img src="<?php echo $url_path ?>/images/6.jpeg" alt="" class="img-responsive">
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