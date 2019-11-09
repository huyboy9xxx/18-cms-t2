<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-6">
	<div class="container">
		<div class="section-title">
			<b></b>
			<span>lastest new</span>
			<b></b>
		</div>
		<div class="swiper-container">
			<div class="swiper-wrapper">
				<div id="picture-one" class="swiper-slide">
					<div class="hihi">
						<img class="img-responsive" src="<?php echo $url_path ?>/images/1.png" alt="responsive">
						<div class="square">
							<span class="number">19</span>
							<span>Nov</span>
						</div>						
					</div>
					<div class="text">
						<h5>Welcome to Flatsome</h5>
						<div class="line-custom">
						<div class="line-bottom"></div>
						</div>
						<p>Welcome to WordPress. This is your first post. Edit or delete it, then start blogging! [...] </p>
					</div>
				</div>

				<div class="swiper-slide">
					<div class="hihi">
						<img class="img-responsive" src="<?php echo $url_path ?>/images/2.png" alt="responsive">
						<div class="square">
							<span class="number">19</span>
							<span>Nov</span>
						</div>						
					</div>
					<div class="text">
						<h5>Just another post with A Gallery</h5>
						<div class="line-custom">
						<div class="line-bottom"></div>
						</div>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sed eleifend risus, sit amet porttitor [...]</p>
					</div>
				</div>
				<div class="swiper-slide">
					<div class="hihi">
						<img class="img-responsive" src="<?php echo $url_path ?>/images/3.png" alt="responsive">
						<div class="square">
							<span class="number">19</span>
							<span>Nov</span>
						</div>						
					</div>
					<div class="text">
						<h5>Another post with A Gallery</h5>
						<div class="line-custom">
						<div class="line-bottom"></div>
						</div>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sed eleifend risus, sit amet porttitor [...]</p>
					</div>
				</div>
				<div class="swiper-slide">
					<div class="hihi">
						<img class="img-responsive" src="<?php echo $url_path ?>/images/4.png" alt="responsive">
						<div class="square">
							<span class="number">19</span>
							<span>Nov</span>
						</div>						
					</div>
					<div class="text">
						<h5>New Client Landed</h5>
						<div class="line-custom">
						<div class="line-bottom"></div>
						</div>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sed eleifend risus, sit amet porttitor [...]</p>
					</div>
				</div>
				<div class="swiper-slide">
					<div class="hihi">
						<img class="img-responsive" src="<?php echo $url_path ?>/images/5.png" alt="responsive">
						<div class="square">
							<span class="number">19</span>
							<span>Nov</span>
						</div>						
					</div>
					<div class="text">
						<h5>An Amazing responsive and Retina ready theme.</h5>
						<div class="line-custom">
						<div class="line-bottom"></div>
						</div>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sed eleifend risus, sit amet porttitor [...]</p>
					</div>
				</div>
				<div class="swiper-slide">
					<div class="hihi">
						<img class="img-responsive" src="<?php echo $url_path ?>/images/6.png" alt="responsive">
						<div class="square">
							<span class="number">19</span>
							<span>Nov</span>
						</div>						
					</div>
					<div class="text">
						<h5>An Amazing responsive and Retina ready theme.</h5>
						<div class="line-custom">
						<div class="line-bottom"></div>
						</div>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sed eleifend risus, sit amet porttitor [...]</p>
					</div>
				</div>
				<div class="swiper-slide">
					<div class="hihi">
						<img class="img-responsive" src="<?php echo $url_path ?>/images/7.png" alt="responsive">
						<div class="square">
							<span class="number">19</span>
							<span>Nov</span>
						</div>						
					</div>
					<div class="text">
						<h5>An Amazing responsive and Retina ready theme.</h5>
						<div class="line-custom">
						<div class="line-bottom"></div>
						</div>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sed eleifend risus, sit amet porttitor [...]</p>
					</div>
				</div>
				<div class="swiper-slide">
					<div class="hihi">
						<img class="img-responsive" src="<?php echo $url_path ?>/images/8.png" alt="responsive">
						<div class="square">
							<span class="number">19</span>
							<span>Nov</span>
						</div>						
					</div>
					<div class="text">
						<h5>An Amazing responsive and Retina ready theme.</h5>
						<div class="line-custom">
						<div class="line-bottom"></div>
						</div>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sed eleifend risus, sit amet porttitor [...]</p>
					</div>
				</div>
			</div>
			<!-- Add Pagination -->
			<div class="swiper-pagination"></div>
			<!-- Add Arrows -->
			<div class="swiper-button-next"></div>
			<div class="swiper-button-prev"></div>
		</div>	
	</div>
</div>
</div>