<?php
  session_start();
  if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("Location: index.php");
  }
  include_once 'includes/head.php';
  include_once 'includes/style.php';
  include_once 'backend/config.php';

  $cur = new Config();
  $all = $cur->all_ents();


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
                  <a class="nav-item nav-link active" id="nav-status-tab" data-toggle="tab" href="#nav-status" role="tab" aria-controls="nav-status" aria-selected="false"><i class="fa fa-home"></i>Home</a>
								    <a class="nav-item nav-link" id="nav-acc-tab" data-toggle="tab" href="#nav-acc" role="tab" aria-controls="nav-acc" aria-selected="true"><i class="la la-cogs"></i>Account Setting</a>
								    <a class="nav-item nav-link" id="nav-password-tab" data-toggle="tab" href="#nav-password" role="tab" aria-controls="nav-password" aria-selected="false"><i class="fa fa-lock"></i>Change Password</a>

								    <a class="nav-item nav-link" id="nav-deactivate-tab" data-toggle="tab" href="#nav-deactivate" role="tab" aria-controls="nav-deactivate" aria-selected="false"><i class="fa fa-random"></i>Deactivate Account</a>
								  </div>
							</div><!--acc-leftbar end-->
						</div>
						<div class="col-lg-9">
							<div class="tab-content" id="nav-tabContent">
								<div class="tab-pane fade" id="nav-acc" role="tabpanel" aria-labelledby="nav-acc-tab">
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
							  	<div class="tab-pane fade show active" id="nav-status" role="tabpanel" aria-labelledby="nav-status-tab">
							  		<div class="acc-setting">
                      <?php if (isset($_GET['updated'])): ?>
                        <div class="success-msg">
                          Information Updated, you will need to sign in again for your changes to be successfully applied
                        </div>
                      <?php elseif(isset($_GET['error'])): ?>
                        <div class="error-msg">
                        something went wrong, no changes were made
                        </div>
                      <?php endif; ?>
							  			<h3>Personal info</h3>

        										<form action="backend/todos.php?update_data=<?php echo $_SESSION['id']; ?>" method="POST">
        											<div class="cp-field">
        												<h5>Current Email Address</h5>
        												<div class="cpp-fiel">
        													<input type="text" name="email" value="<?php echo $_SESSION['email']; ?>" placeholder="current email address">
        													<i class="fa fa-envelope"></i>
        												</div>
        											</div>
        											<div class="cp-field">
        												<h5>Names</h5>
        												<div class="cpp-fiel">
        													<input type="text" name="c_names" value="<?php echo $_SESSION['name']; ?>" placeholder="current Names">
        													<i class="fa fa-user"></i>
        												</div>
        											</div>
        											<div class="cp-field">
        												<h5>Current Phone Number</h5>
        												<div class="cpp-fiel">
        													<input type="text" name="phone" value="<?php echo $_SESSION['phone']; ?>" placeholder="Phone Number">
        													<i class="fa fa-phone"></i>
        												</div>
        											</div>
        											<div class="save-stngs pd2">
        												<ul>
        													<li><button type="submit">Make Changes</button></li>
        													<li><button type="#">Restore defaults</button></li>
        												</ul>
        											</div><!--save-stngs end-->
        										</form>

							  			<div class="pro-work-status">
							  				<!-- <h4>Work Status  -  Last Months Working Status</h4> -->
							  			</div><!--pro-work-status end-->
							  		</div><!--acc-setting end-->
							  	</div>
							  	<div class="tab-pane fade" id="nav-password" role="tabpanel" aria-labelledby="nav-password-tab">
  							  		<div class="acc-setting">
  										<h3>Change Password</h3>
  										<form action="backend/todos.php?password_reset=<?php echo $_SESSION['id'] ?>" method="POST">
  											<div class="cp-field">
  												<h5>Old Password</h5>
  												<div class="cpp-fiel">
  													<input type="password" name="password_old" placeholder="Old Password">
  													<i class="fa fa-lock"></i>
  												</div>
  											</div>
  											<div class="cp-field">
  												<h5>New Password</h5>
  												<div class="cpp-fiel">
  													<input type="password" name="new_password" placeholder="New Password">
  													<i class="fa fa-lock"></i>
  												</div>
  											</div>
  											<div class="cp-field">
  												<h5>Repeat Password</h5>
  												<div class="cpp-fiel">
  													<input type="password" name="repeat_password" placeholder="Repeat Password">
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
