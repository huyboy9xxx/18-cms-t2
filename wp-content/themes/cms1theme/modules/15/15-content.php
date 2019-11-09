<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-15">

	<div class="container">
	<a href="#" data-toggle="collapse" data-target="#demo" class="open-filter navbar-right">Filters</a>
				<div class="filter-button">
				<div id="demo" class="collapse drop-collape">
					<div class="row filter-inner">
						<div class="col-md-6">
							<div class="login">
								<h1>LOGIN</h1>
								<form action="#">
									<div class="form-group">
										<p for="first-name">Username or email address
											<span>*</span>
										</p>
										<input type="name" class="form-control" id="first-name" placeholder="Enter username or email...">
									</div>
									<div class="form-group">
										<p for="first-name">
											Password
											<span>*</span>
										</p>
										<input type="name" class="form-control" id="last-name" placeholder="Enter password...">
									</div>
									<div class="form-group">
										<div class="checkbox">
											<label><input type="checkbox" name="remember"> Remember me</label>
										</div>
									</div>
									<div class="form-group">
										<button type="submit" class="btn btn-default">LOGIN</button>
									</div>
									<div class="lost">
									<a href="#">Lost your password?</a>
									</div>
								</form>
							</div>
						</div>
						<div class="col-md-6 right">
							<div class="register">
								<h1>REGISTER</h1>
								<form action="#">
									<div class="form-group">
										<p for="first-name">Email address
											<span class="icon">*</span>
										</p>
										<input type="name" class="form-control" id="first-name" placeholder="Enter username or email...">
									</div>
									<div class="form-group">
										<p for="first-name">
											Password
											<span class="icon">*</span>
										</p>
										<input type="name" class="form-control" id="last-name" placeholder="Enter password...">
									</div>

									<p class="per">Your personal data will be used to support your experience throughout this website, to manage access to your account, and for other purposes described in our </p>
									<div class="form-group">
										<button type="submit" class="btn btn-default">REGISTER</button>
									</div>
								</form>
							</div>
						</div>
					</div>
					<div class="close-side"></div>
				</div>
			</div>

	</div>




