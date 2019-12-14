<?php
  session_start();
  if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("Location: index.php");
  }
  include_once 'includes/head.php';
  include_once 'backend/config.php';

  $cur = new Config();
  $recents = $cur->recents(10);
  $recents2 = $cur->recents(3);

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
                        <a href="account-settings.php" title="">Account Setting</a>
												<!-- <a href="my-profile.php" title="">View Profile</a> -->
											</li>
										</ul>
									</div><!--user-data end-->


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
  													<a href="profile.php?view=<?php echo $obj['id']; ?>" title="">View Profile</a>
  												</div><!--user-profy end-->
                        <?php endforeach; ?>

											</div><!--profiles-slider end-->
										</div><!--top-profiles end-->

                  <?php foreach ($recents2 as $each): ?>
                  <?php
                  $details = $cur->get_details($each['id']);
                  $img = base64_encode($each['image']);
                  ?>
  										<div class="post-bar">
  											<div class="post_topbar">
  												<div class="usy-dt">
  													<img src="data:image/jpg;charset=utf8;base64,<?php echo $img ?>" class="img-responsive" alt="">
  													<div class="usy-name">
  														<h3><?php echo $each['name']; ?></h3>
  														<span><img src="images/clock.png" alt=""><?php echo $each['createdOn'] ?></span>
  													</div>
  												</div>

  											</div>
  											<div class="epi-sec">
  												<ul class="descp">
  													<li><img src="images/icon9.png" alt=""><span>Uganda</span></li>
  												</ul>
  												<ul class="bk-links">
  													<li><a href="#" title="" class="bid_now">contact</a></li>
  												</ul>
  											</div>
  											<div class="job_descp">
  												<h3>Entreprenuer Detail</h3>
  												<ul class="job-dt">
  													<li><a href="#" title="">Full Time</a></li>
  												</ul>
  												<p><?php echo $each['description']; ?> <a href="profile.php?view=<?php echo $each['id']; ?>" title="">  &nbsp; view more</a></p>
                          <?php if (!empty($details)): ?>
                            <?php foreach ($details as $key ): ?>
      												<ul class="skill-tags">
      													<li><a href="#" title="">Marketing: <?php echo $key['marketing'] ?></a></li>
                                <li><a href="#" title="">Pitching: <?php echo $key['pitching'] ?></a></li>
      													<li><a href="#" title="">Business Develpoment: <?php echo $key['businessDev'] ?></a></li>

      												</ul>
                          <?php endforeach; ?>
                        <?php endif; ?>
  											</div>
  										</div><!--post-bar end-->
                      <?php endforeach; ?>


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
							<div class="col-lg-3 pd-right-none no-pd" style="width: 400px;">
                <div class="right-sidebar ads">
                  <div class="widget widget-about">

                    <div class="fb-page"
                       data-href="https://www.facebook.com/EinsteinRising/"
                       data-small-header="false"
                       data-hide-cover="false"
                       data-show-facepile="true"
                       data-show-posts="false">
                    </div>
                  <div id="fb-root"></div>

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

    <?php include_once 'includes/footer.php'; ?>

	</div><!--theme-layout end-->

  <script>
    (function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.4";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
  </script>


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
