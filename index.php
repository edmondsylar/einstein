<?php
  include_once 'includes/head.php';
  include_once 'backend/config.php';
  $start = new Config();

 ?>
<body class="sign-in" oncontextmenu="return false;">
	<div class="wrapper">

		<div class="sign-in-page">
			<div class="signin-popup">
				<div class="signin-pop">
					<div class="row">
						<div class="col-lg-6">
							<div class="cmp-info">
								<div class="cm-logo">
                  <img src="images/einst.png" alt="">
									<!-- <img src="images/cm-logo.png" alt=""> -->
									<p>einstein,  is a global platform and social networking where businesses and independent investors connect and collaborate with entrepreneurs to do business</p>
								</div><!--cm-logo end-->
								<img src="images/cm-main-img.png" alt="">
							</div><!--cmp-info end-->
						</div>
						<div class="col-lg-6">
							<div class="login-sec">
								<ul class="sign-control">

                  <li data-tab="tab-home" onclick="window.location.href='http://www.einsteinrising.org/', _blank"><a href="" target="_blank">Home</a></li>
                  <li data-tab="tab-home" onclick="window.location.href='https://training.einsteinrising.org/', _blank"><a href="" target="_blank">ET Training</a></li>
                  <li data-tab="tab-1" class="current"><a href="#" title="">Sign in</a></li>
                  <li data-tab="tab-2"><a href="#" title="">Register</a></li>
								</ul>

                <div class="sign_in_sec" id="tab-home">
                  <h3>PEOPLE. PLANET. PROFIT </h3>
                  <p>
                    E instein raising a business accelerator for Africa's Social Entreprenuers. Our Entreprenuers Develop or create businesses that improve People's lives, Protect
                    The Planet and Make a Profit
                  </p>
                </div>

								<div class="sign_in_sec current" id="tab-1">
									<h3>Sign in</h3>
									<form action="backend/login.php" method="POST">
										<div class="row">
											<div class="col-lg-12 no-pdd">
												<div class="sn-field">
													<input type="text" name="email" required="required" placeholder="Username">
													<i class="la la-user"></i>
												</div><!--sn-field end-->
											</div>
											<div class="col-lg-12 no-pdd">
												<div class="sn-field">
													<input type="password" name="password" required="required" placeholder="Password">
													<i class="la la-lock"></i>
												</div>
											</div>
                      <?php if (isset($_GET['error'])): ?>
                        <small style="color: red; padding: 5px;">wrong credentials</small>
                      <?php endif; ?>
											<div class="col-lg-12 no-pdd">
												<div class="checky-sec">
													<div class="fgt-sec">
														<input type="checkbox" name="cc" id="c1">
														<label for="c1">
															<span></span>
														</label>
														<small>Remember me</small>
													</div><!--fgt-sec end-->
													<a href="#" title="">Forgot Password?</a>
												</div>

											</div>
											<div class="col-lg-12 no-pdd">
												<button type="submit" value="submit">Sign in</button>
											</div>
										</div>
									</form>
								</div><!--sign_in_sec end-->

								<div class="sign_in_sec" id="tab-2">
									<!-- <div class="signup-tab">
										<i class="fa fa-long-arrow-left"></i>
										<h2>johndoe@example.com</h2>
										<ul>
											<li data-tab="tab-3" class="current"><a href="#" title="">User</a></li>
											<li data-tab="tab-4"><a href="#" title="">Company</a></li>
										</ul>
									</div> signup-tab end-->
									<div class="dff-tab current" id="tab-3">
                    <h3>Register</h3>
										<form action="backend/register.php" method="POST">
											<div class="row">
												<div class="col-lg-12 no-pdd">
													<div class="sn-field">
														<input type="text" name="name" required="required" placeholder="Full Name">
														<i class="la la-user"></i>
													</div>
												</div>
												<div class="col-lg-12 no-pdd">
													<div class="sn-field">
														<input type="text" name="email" required="required" placeholder="email@example.com">
														<i class="la la-globe"></i>
													</div>
												</div>

                        <div class="col-lg-12 no-pdd">
													<div class="sn-field">
														<input type="text" name="tel" required="required" placeholder="phone">
														<i class="la la-globe"></i>
													</div>
												</div>

												<div class="col-lg-12 no-pdd">
													<div class="sn-field">
														<input type="password" name="password" required="required" placeholder="Password">
														<i class="la la-lock"></i>
													</div>
												</div>
												<div class="col-lg-12 no-pdd">
													<div class="sn-field">
														<input type="password" name="repeat-password" required="required" placeholder="Repeat Password">
														<i class="la la-lock"></i>
													</div>
												</div>
												<div class="col-lg-12 no-pdd">
													<div class="checky-sec st2">
														<div class="fgt-sec">
															<input type="checkbox" name="cc" id="c2">
															<label for="c2">
																<span></span>
															</label>
															<small>Yes, I understand and agree to the einstein Terms & Conditions.</small>
														</div><!--fgt-sec end-->
													</div>
												</div>
												<div class="col-lg-12 no-pdd">
													<button type="submit" value="submit">Get Started</button>
												</div>
											</div>
										</form>
									</div><!--dff-tab end-->
									<div class="dff-tab" id="tab-4">
										<form>
											<div class="row">
												<div class="col-lg-12 no-pdd">
													<div class="sn-field">
														<input type="text" name="company-name" placeholder="Company Name">
														<i class="la la-building"></i>
													</div>
												</div>
												<div class="col-lg-12 no-pdd">
													<div class="sn-field">
														<input type="text" name="country" placeholder="Country">
														<i class="la la-globe"></i>
													</div>
												</div>
												<div class="col-lg-12 no-pdd">
													<div class="sn-field">
														<input type="password" name="password" placeholder="Password">
														<i class="la la-lock"></i>
													</div>
												</div>
												<div class="col-lg-12 no-pdd">
													<div class="sn-field">
														<input type="password" name="repeat-password" placeholder="Repeat Password">
														<i class="la la-lock"></i>
													</div>
												</div>
												<div class="col-lg-12 no-pdd">
													<div class="checky-sec st2">
														<div class="fgt-sec">
															<input type="checkbox" name="cc" id="c3">
															<label for="c3">
																<span></span>
															</label>
															<small>Yes, I understand and agree to the einstein Terms & Conditions.</small>
														</div><!--fgt-sec end-->
													</div>
												</div>
												<div class="col-lg-12 no-pdd">
													<button type="submit" value="submit">Get Started</button>
												</div>
											</div>
										</form>
									</div><!--dff-tab end-->
								</div>
							</div><!--login-sec end-->
						</div>
					</div>
				</div><!--signin-pop end-->
			</div><!--signin-popup end-->
			<div class="footy-sec">
        <div class="container">
          <ul>
            <li><a href="#" title="">Brian Mangeni (Uganda)</a></li>
            <li><a href="http://www.einsteinrising.org/story/" title="">About</a></li>
            <li><a href="http://www.einsteinrising.org/what-we-offer/" title="">what we offer</a></li>
            <li><a href="http://www.einsteinrising.org/contact-us/" title="">Contact Us</a></li>
            <li><a href="http://www.einsteinrising.org/donate/" title="">Donate</a></li>
            <li><a href="#" title="">info@einsteinrising.org</a></li>
          </ul>
          <p><img src="images/lewlog.png" alt="">Copyright 2019</p>
        </div>
			</div><!--footy-sec end-->
		</div><!--sign-in-page end-->


	</div><!--theme-layout end-->



<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/popper.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="lib/slick/slick.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
</body>

<!-- Mirrored from gambolthemes.net/einstein-new/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Nov 2019 11:07:37 GMT -->
</html>
