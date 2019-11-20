<?php
    include_once 'includes/head.php';
 ?>
<body oncontextmenu="return false;">

	<div class="wrapper">
<?php
    include_once 'includes/header.php';
 ?>

		<section class="profile-account-setting">
			<div class="container">
				<div class="account-tabs-setting">
					<div class="row">
						<div class="col-lg-3">
							<div class="acc-leftbar">
								<div class="nav nav-tabs" id="nav-tab" role="tablist">
								    <a class="nav-item nav-link active" id="nav-acc-tab" data-toggle="tab" href="#nav-acc" role="tab" aria-controls="nav-acc" aria-selected="true"><i class="la la-cogs"></i>Account Setting</a>
								    <!-- <a class="nav-item nav-link" id="nav-status-tab" data-toggle="tab" href="#nav-status" role="tab" aria-controls="nav-status" aria-selected="false"><i class="fa fa-line-chart"></i>Status</a> -->
								    <a class="nav-item nav-link" id="nav-password-tab" data-toggle="tab" href="#nav-password" role="tab" aria-controls="nav-password" aria-selected="false"><i class="fa fa-lock"></i>Change Password</a>
								    <!-- <a class="nav-item nav-link" id="nav-privcy-tab" data-toggle="tab" href="#privcy" role="tab" aria-controls="privacy" aria-selected="false"><i class="fa fa-group"></i>Requests</a> -->
								    <!-- <a class="nav-item nav-link" id="security" data-toggle="tab" href="#security-login" role="tab" aria-controls="security-login" aria-selected="false"><i class="fa fa-user-secret"></i>Security and Login</a> -->
								    <!-- <a class="nav-item nav-link" id="nav-privacy-tab" data-toggle="tab" href="#privacy" role="tab" aria-controls="privacy" aria-selected="false"><i class="fa fa-paw"></i>Privacy</a> -->
								    <!-- <a class="nav-item nav-link" id="nav-blockking-tab" data-toggle="tab" href="#blockking" role="tab" aria-controls="blockking" aria-selected="false"><i class="fa fa-cc-diners-club"></i>Blocking</a> -->
								    <a class="nav-item nav-link" id="nav-deactivate-tab" data-toggle="tab" href="#nav-deactivate" role="tab" aria-controls="nav-deactivate" aria-selected="false"><i class="fa fa-random"></i>Deactivate Account</a>
								  </div>
							</div><!--acc-leftbar end-->
						</div>
						<div class="col-lg-9">
							<div class="tab-content" id="nav-tabContent">
								<div class="tab-pane fade show active" id="nav-acc" role="tabpanel" aria-labelledby="nav-acc-tab">
									<div class="acc-setting">
										<h3>Account Setting</h3>
										<form>
											<div class="notbar">
												<h4>Notification Sound</h4>
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus pretium nulla quis erat dapibus, varius hendrerit neque suscipit. Integer in ex euismod, posuere lectus id</p>
												<div class="toggle-btn">
													<div class="custom-control custom-switch">
														<input type="checkbox" class="custom-control-input" id="customSwitch1">
														<label class="custom-control-label" for="customSwitch1"></label>
													</div>
												</div>
											</div><!--notbar end-->
											<div class="notbar">
												<h4>Notification Email</h4>
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus pretium nulla quis erat dapibus, varius hendrerit neque suscipit. Integer in ex euismod, posuere lectus id</p>
												<div class="toggle-btn">
													<div class="custom-control custom-switch">
														<input type="checkbox" class="custom-control-input" id="customSwitch2">
														<label class="custom-control-label" for="customSwitch2"></label>
													</div>
												</div>
											</div><!--notbar end-->
											<div class="notbar">
												<h4>Chat Message Sound</h4>
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus pretium nulla quis erat dapibus, varius hendrerit neque suscipit. Integer in ex euismod, posuere lectus id</p>
												<div class="toggle-btn">
													<div class="custom-control custom-switch">
														<input type="checkbox" class="custom-control-input" id="customSwitch3">
														<label class="custom-control-label" for="customSwitch3"></label>
													</div>
												</div>
											</div><!--notbar end-->
											<div class="save-stngs">
												<ul>
													<li><button type="submit">Save Setting</button></li>
													<li><button type="submit">Restore Setting</button></li>
												</ul>
											</div><!--save-stngs end-->
										</form>
									</div><!--acc-setting end-->
								</div>
							  	<div class="tab-pane fade" id="nav-status" role="tabpanel" aria-labelledby="nav-status-tab">
							  		<div class="acc-setting">
							  			<h3>Profile Status</h3>
							  			<div class="profile-bx-details">
							  				<div class="row">
							  					<div class="col-lg-3 col-md-6 col-sm-12">
							  						<div class="profile-bx-info">
							  							<div class="pro-bx">
							  								<img src="images/pro-icon1.png" alt="">
							  								<div class="bx-info">
							  									<h3>$5,145</h3>
							  									<h5>Total Income</h5>
							  								</div><!--bx-info end-->
							  							</div><!--pro-bx end-->
							  							<p>Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
							  						</div><!--profile-bx-info end-->
							  					</div>
							  					<div class="col-lg-3 col-md-6 col-sm-12">
							  						<div class="profile-bx-info">
							  							<div class="pro-bx">
							  								<img src="images/pro-icon2.png" alt="">
							  								<div class="bx-info">
							  									<h3>$4,745</h3>
							  									<h5>Widthraw</h5>
							  								</div><!--bx-info end-->
							  							</div><!--pro-bx end-->
							  							<p>Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
							  						</div><!--profile-bx-info end-->
							  					</div>
							  					<div class="col-lg-3 col-md-6 col-sm-12">
							  						<div class="profile-bx-info">
							  							<div class="pro-bx">
							  								<img src="images/pro-icon3.png" alt="">
							  								<div class="bx-info">
							  									<h3>$1,145</h3>
							  									<h5>Sent</h5>
							  								</div><!--bx-info end-->
							  							</div><!--pro-bx end-->
							  							<p>Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
							  						</div><!--profile-bx-info end-->
							  					</div>
							  					<div class="col-lg-3 col-md-6 col-sm-12">
							  						<div class="profile-bx-info">
							  							<div class="pro-bx">
							  								<img src="images/pro-icon4.png" alt="">
							  								<div class="bx-info">
							  									<h3>130</h3>
							  									<h5>Total Projects</h5>
							  								</div><!--bx-info end-->
							  							</div><!--pro-bx end-->
							  							<p>Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
							  						</div><!--profile-bx-info end-->
							  					</div>
							  				</div>
							  			</div><!--profile-bx-details end-->
							  			<div class="pro-work-status">
							  				<!-- <h4>Work Status  -  Last Months Working Status</h4> -->
							  			</div><!--pro-work-status end-->
							  		</div><!--acc-setting end-->
							  	</div>
							  	<div class="tab-pane fade" id="nav-password" role="tabpanel" aria-labelledby="nav-password-tab">
							  		<div class="acc-setting">
										<h3>Change Password</h3>
										<form>
											<div class="cp-field">
												<h5>Old Password</h5>
												<div class="cpp-fiel">
													<input type="text" name="old-password" placeholder="Old Password">
													<i class="fa fa-lock"></i>
												</div>
											</div>
											<div class="cp-field">
												<h5>New Password</h5>
												<div class="cpp-fiel">
													<input type="text" name="new-password" placeholder="New Password">
													<i class="fa fa-lock"></i>
												</div>
											</div>
											<div class="cp-field">
												<h5>Repeat Password</h5>
												<div class="cpp-fiel">
													<input type="text" name="repeat-password" placeholder="Repeat Password">
													<i class="fa fa-lock"></i>
												</div>
											</div>
											<div class="cp-field">
												<h5><a href="#" title="">Forgot Password?</a></h5>
											</div>
											<div class="save-stngs pd2">
												<ul>
													<li><button type="submit">Save Setting</button></li>
													<li><button type="submit">Restore Setting</button></li>
												</ul>
											</div><!--save-stngs end-->
										</form>
									</div><!--acc-setting end-->
							  	</div>






							  	<div class="tab-pane fade" id="nav-deactivate" role="tabpanel" aria-labelledby="nav-deactivate-tab">
							  		<div class="acc-setting">
										<h3>Deactivate Account</h3>
										<form>
											<div class="cp-field">
												<h5>Email</h5>
												<div class="cpp-fiel">
													<input type="text" name="email" placeholder="Email">
													<i class="fa fa-envelope"></i>
												</div>
											</div>
											<div class="cp-field">
												<h5>Password</h5>
												<div class="cpp-fiel">
													<input type="password" name="password" placeholder="Password">
													<i class="fa fa-lock"></i>
												</div>
											</div>
											<div class="cp-field">
												<h5>Please Explain Further</h5>
												<textarea></textarea>
											</div>
											<div class="cp-field">
												<div class="fgt-sec">
													<input type="checkbox" name="cc" id="c4">
													<label for="c4">
														<span></span>
													</label>
													<small>Email option out</small>
												</div>
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus pretium nulla quis erat dapibus, varius hendrerit neque suscipit. Integer in ex euismod, posuere lectus id,</p>
											</div>
											<div class="save-stngs pd3">
												<ul>
													<li><button type="submit">Save Setting</button></li>
													<li><button type="submit">Restore Setting</button></li>
												</ul>
											</div><!--save-stngs end-->
										</form>
									</div><!--acc-setting end-->
							  	</div>
							</div>
						</div>
					</div>
				</div><!--account-tabs-setting end-->
			</div>
		</section>
		<footer>
			<div class="footy-sec mn no-margin">
				<div class="container">
					<ul>
						<li><a href="help-center.html" title="">Help Center</a></li>
						<li><a href="about.html" title="">About</a></li>
						<li><a href="#" title="">Privacy Policy</a></li>
						<li><a href="#" title="">Community Guidelines</a></li>
						<li><a href="#" title="">Cookies Policy</a></li>
						<li><a href="#" title="">Career</a></li>
						<li><a href="forum.html" title="">Forum</a></li>
						<li><a href="#" title="">Language</a></li>
						<li><a href="#" title="">Copyright Policy</a></li>
					</ul>
				
				</div>
			</div>
		</footer>

	</div><!--theme-layout end-->



<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/popper.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.mCustomScrollbar.js"></script>
<script type="text/javascript" src="lib/slick/slick.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>


</body>

<!-- Mirrored from gambolthemes.net/workwise-new/profile-account-setting.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Nov 2019 11:07:34 GMT -->
</html>
