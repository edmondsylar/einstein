<?php
  session_start();
  if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("Location: index.php");
  }
  include_once 'includes/head.php';
  include_once 'backend/config.php';

  $cur = new Config();
  $recents = $cur->recents();

 ?>

<style media="screen">
  .img-responsive {
    width: 70px;
    height: 70px;
    border-radius: 50%;
    image-orientation: code;
  }
</style>

<body oncontextmenu="return false;">

	<div class="wrapper">
    <?php
      include_once 'includes/header.php';
     ?>
		<main>
			<div class="main-section">
				<div class="container">
					<div class="main-section-data">
						<div class="row">
							<div class="col-lg-3 col-md-4 pd-left-none no-pd">
								<div class="main-left-sidebar no-margin">
									<div class="user-data full-width">
										<div class="user-profile">
											<div class="username-dt">
												<div class="usr-pic">
													<img src="images/resources/user-pic.png" alt="">
												</div>
											</div><!--username-dt end-->
											<div class="user-specs">
												<h3><?php echo $_SESSION['name']; ?></h3>
												<span><?php echo $_SESSION['email']; ?></span>
											</div>
										</div><!--user-profile end-->
										<ul class="user-fw-status">
											<li>
												<h4><?php echo $_SESSION['role']; ?></h4>
											</li>
											<li>
												<h4>Followers</h4>
												<span>155</span>
											</li>
											<li>
												<a href="my-profile.html" title="">View Profile</a>
											</li>
										</ul>
									</div><!--user-data end-->

									<div class="tags-sec full-width">
										<ul>
											<li><a href="#" title="">Help Center</a></li>
											<li><a href="#" title="">About</a></li>
											<li><a href="#" title="">Privacy Policy</a></li>
											<li><a href="#" title="">Community Guidelines</a></li>
											<li><a href="#" title="">Cookies Policy</a></li>
											<li><a href="#" title="">Career</a></li>
											<li><a href="#" title="">Language</a></li>
											<li><a href="#" title="">Copyright Policy</a></li>
										</ul>
										<div class="cp-sec">
											<img src="images/logo2.png" alt="">
											<p><img src="images/cp.png" alt="">Copyright 2019</p>
										</div>
									</div><!--tags-sec end-->
								</div><!--main-left-sidebar end-->
							</div>
							<div class="col-lg-6 col-md-8 no-pd">
								<div class="main-ws-sec">
									<div class="post-topbar">
										<div class="user-picy">
											<img src="images/resources/user-pic.png" alt="">
										</div>
										<div class="post-st">
											<ul>
												<li><a class="post-jb active" href="#" title="">Create Entreprenuer</a></li>
											</ul>
										</div><!--post-st end-->
									</div><!--post-topbar end-->
									<div class="posts-section">

										<div class="top-profiles">
											<div class="pf-hd">
												<h3>Newly Added Entrepreneurs</h3>
												<i class="la la-ellipsis-v"></i>
											</div>
											<div class="profiles-slider">

                        <?php foreach ($recents as $obj): ?>
                          <?php $img = base64_encode($obj['image']); ?>
                          <div class="user-profy">
  													<img src="data:image/jpg;charset=utf8;base64,<?php echo $img ?>" class="img-responsive" alt="">
  													<h3><?php echo $obj['name']; ?></h3>
  													<span>added: <?php echo ($obj['createdOn']); ?></span>
  													<a href="#" title="">View Profile</a>
  												</div><!--user-profy end-->
                        <?php endforeach; ?>

											</div><!--profiles-slider end-->
										</div><!--top-profiles end-->

										<div class="post-bar">
											<div class="post_topbar">
												<div class="usy-dt">
													<img src="images/resources/us-pic.png" alt="">
													<div class="usy-name">
														<h3>John Doe</h3>
														<span><img src="images/clock.png" alt="">3 min ago</span>
													</div>
												</div>
												<div class="ed-opts">
													<a href="#" title="" class="ed-opts-open"><i class="la la-ellipsis-v"></i></a>
													<ul class="ed-options">
														<li><a href="#" title="">Edit Post</a></li>
														<li><a href="#" title="">Unsaved</a></li>
														<li><a href="#" title="">Unbid</a></li>
														<li><a href="#" title="">Close</a></li>
														<li><a href="#" title="">Hide</a></li>
													</ul>
												</div>
											</div>
											<div class="epi-sec">
												<ul class="descp">
													<li><img src="images/icon8.png" alt=""><span>Epic Coder</span></li>
													<li><img src="images/icon9.png" alt=""><span>India</span></li>
												</ul>
												<ul class="bk-links">
													<li><a href="#" title=""><i class="la la-bookmark"></i></a></li>
													<li><a href="#" title=""><i class="la la-envelope"></i></a></li>
													<li><a href="#" title="" class="bid_now">Bid Now</a></li>
												</ul>
											</div>
											<div class="job_descp">
												<h3>Senior Wordpress Developer</h3>
												<ul class="job-dt">
													<li><a href="#" title="">Full Time</a></li>
													<li><span>$30 / hr</span></li>
												</ul>
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam luctus hendrerit metus, ut ullamcorper quam finibus at. Etiam id magna sit amet... <a href="#" title="">view more</a></p>
												<ul class="skill-tags">
													<li><a href="#" title="">HTML</a></li>
													<li><a href="#" title="">PHP</a></li>
													<li><a href="#" title="">CSS</a></li>
													<li><a href="#" title="">Javascript</a></li>
													<li><a href="#" title="">Wordpress</a></li>
												</ul>
											</div>
											<div class="job-status-bar">
												<ul class="like-com">
													<li>
														<a href="#"><i class="fas fa-heart"></i> Like</a>
														<img src="images/liked-img.png" alt="">
														<span>25</span>
													</li>
													<li><a href="#" class="com"><i class="fas fa-comment-alt"></i> Comment 15</a></li>
												</ul>
												<a href="#"><i class="fas fa-eye"></i>Views 50</a>
											</div>
										</div><!--post-bar end-->


										<div class="process-comm">
											<div class="spinner">
												<div class="bounce1"></div>
												<div class="bounce2"></div>
												<div class="bounce3"></div>
											</div>
										</div><!--process-comm end-->
									</div><!--posts-section end-->
								</div><!--main-ws-sec end-->
							</div>
							<div class="col-lg-3 pd-right-none no-pd">
								<div class="right-sidebar">
									<div class="widget widget-about">
										<img src="images/wd-logo.png" alt="">
										<h3>Track Time on Workwise</h3>
										<span>Pay only for the Hours worked</span>
										<div class="sign_link">
											<h3><a href="sign-in.html" title="">Sign up</a></h3>
											<a href="#" title="">Learn More</a>
										</div>
									</div><!--widget-about end-->

								</div><!--right-sidebar end-->
							</div>
						</div>
					</div><!-- main-section-data end-->
				</div>
			</div>
		</main>

		<div class="post-popup job_post">
			<div class="post-project">
				<h3>New Entreprenuer</h3>
				<div class="post-project-fields">
					<form action="backend/register_entreprenuer.php" method="post" enctype="multipart/form-data">
						<div class="row">
							<div class="col-lg-12">
								<input type="text" name="name" required="required" placeholder="Entreprenuer's Name">
							</div>

              <div class="col-lg-12">
								<textarea name="description" required="required" placeholder="Details"></textarea>
							</div>

							<div class="col-lg-12">
								<input type="text" name="pitch" required="required" placeholder="Pitching">
							</div>

              <div class="col-lg-12">
								<input type="text" name="bssdev" required="required" placeholder="Business Development">
							</div>

              <div class="col-lg-12">
								<input type="text" name="market" required="required" placeholder="Marketing">
							</div>

              <div class="row" style="margin: 10px;">
                <div class="col-lg-12">
                  <div class="add-dp" id="OpenImgUpload">
                    <label for="file"><i class="fas fa-camera"></i></label>
                    <input type="file" id="file" name="image">
                    <label for="file">Upload Image</label>
                  </div>
                </div>
              </div>

							<div class="col-lg-12">
								<ul>
									<li><button class="active" type="submit" value="post">Post</button></li>
									<li><a href="#" title="">Cancel</a></li>
								</ul>
							</div>
						</div>
					</form>
				</div><!--post-project-fields end-->
				<a href="#" title=""><i class="la la-times-circle-o"></i></a>
			</div><!--post-project end-->
		</div><!--post-project-popup end-->

	</div><!--theme-layout end-->



<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/popper.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.mCustomScrollbar.js"></script>
<script type="text/javascript" src="lib/slick/slick.min.js"></script>
<script type="text/javascript" src="js/scrollbar.js"></script>
<script type="text/javascript" src="js/script.js"></script>

</body>

<!-- Mirrored from gambolthemes.net/workwise-new/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Nov 2019 11:05:29 GMT -->
</html>
