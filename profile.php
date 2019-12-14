
<?php
    session_start();
    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
      header("Location: index.php");
    }
    include_once 'includes/head.php';
    include_once 'backend/config.php';
    include_once 'includes/style.php';

    $cur = new Config();
    $info = mysqli_fetch_assoc($cur->object_data($_GET['view']));
    $img = base64_encode($info['image']);

    $gallery = $cur->get_galla($_GET['view']);
    $details = $cur->get_details($_GET['view']);

 ?>

<style media="screen">
  .profile-pic{
    height: 300px;
    width: 300px;
    border-radius: 50%;
  }

</style>

<body oncontextmenu="return false;">
	<div class="wrapper">

		<?php
      include_once 'includes/header.php';
     ?>


		<section class="cover-sec">
			<img src="images/resources/company-cover.jpg" alt="">
		</section><!--cover-sec end-->


		<main>
			<div class="main-section">
				<div class="container">
					<div class="main-section-data">
						<div class="row">
							<div class="col-lg-3">
								<div class="main-left-sidebar">
									<div class="user_profile">
										<div class="user-pro-img">
                      <!-- <img src="images/resources/company-profile.png" alt=""> -->
											<img src="data:image/jpg;charset=utf8;base64,<?php echo $img ?>" class="profile-pic" alt="">

										</div><!--user-pro-img end-->
										<div class="user_pro_status">
											<ul class="flw-hr">
												<!-- <li><a href="#" title="" class="flww"><i class="la la-envelope"></i> Details</a></li> -->
											</ul>

										</div><!--user_pro_status end-->

									</div><!--user_profile end-->
									<div class="suggestions full-width">
										<div class="sd-title">
											<h3>More Details</h3>
											<i class="la la-ellipsis-v"></i>
										</div><!--sd-title end-->

										<div class="suggestions-list">
                      <?php if (!empty($details)): ?>
                        <?php foreach ($details as $key ): ?>
    											<div class="suggestion-usd">
    												<!-- <img src="images/resources/s1.png" alt=""> -->
    												<div class="sgt-text">
    													<h4>Pitching</h4>
    													<span><?php echo $key['pitching']; ?></span>
    												</div>
    												<span><i class="la la-plus"></i></span>
    											</div>

    											<div class="suggestion-usd">
    												<!-- <img src="images/resources/s6.png" alt=""> -->
    												<div class="sgt-text">
    													<h4>Marketing</h4>
    													<span><?php echo $key['marketing']; ?></span>
    												</div>
    												<span><i class="la la-plus"></i></span>
    											</div>

                          <div class="suggestion-usd">
    												<!-- <img src="images/resources/s6.png" alt=""> -->
    												<div class="sgt-text">
    													<h4>Business Development</h4>
    													<span><?php echo $key['businessDev']; ?></span>
    												</div>
    												<span><i class="la la-verify"></i></span>
    											</div>
                      <?php endforeach; ?>
                    <?php endif; ?>

											<!-- <div class="view-more">
												<a href="#" title="">View More</a>
											</div> -->
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="main-ws-sec">
									<div class="user-tab-sec">
										<h3><?php echo $info['name'] ?></h3>
										<div class="star-descp">
											<span><?php echo "Since: ".  date( "M-d-Y", strtotime($info['createdOn']));?></span>
											<ul>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
											</ul>
										</div><!--star-descp end-->
										<div class="tab-feed">
											<ul>
												<li data-tab="info-dd" class="active">
													<a href="#" title="">
														<img src="images/ic2.png" alt="">
														<span>Info</span>
													</a>
												</li>
												<li data-tab="portfolio-dd">
													<a href="#" title="">
														<img src="images/ic3.png" alt="">
														<span>Gallery</span>
													</a>
												</li>
											</ul>
										</div><!-- tab-feed end-->
									</div><!--user-tab-sec end-->


									<div class="product-feed-tab current" id="feed-dd">
										<div class="posts-section">


										</div><!--posts-section end-->
									</div><!--product-feed-tab end-->
									<div class="product-feed-tab current" id="info-dd">
										<div class="user-profile-ov">
											<h3>More detials</h3>
											<p><?php echo $info['description']; ?></p>
										</div><!--user-profile-ov end-->

									</div><!--product-feed-tab end-->
									<div class="product-feed-tab" id="portfolio-dd">
										<div class="portfolio-gallery-sec">
											<h3>Gallery</h3>
											<div class="gallery_pf">
												<div class="row" style="z-index: 1;"">

                          <?php foreach ($gallery as $gala): ?>
								             <?php $img = base64_encode($gala['image']); ?>
    													<div class="col-lg-4 col-md-4 col-sm-4 col-6" class="galla-view" data-tooltip="<?php echo $gala['description']; ?>">
    														<div class="gallery_pt">
    															<img src="data:image/jpg;charset=utf8;base64,<?php echo $img ?>"  class=";" alt="gallery image">
    															<!-- <a href="#"  class="overview-opening" title=""><img src="images/all-out.png" alt=""></a> -->
    														</div><!--gallery_pt end-->
    													</div>
                          <?php endforeach; ?>

												</div>
											</div><!--gallery_pf end-->
										</div><!--portfolio-gallery-sec end-->
									</div><!--product-feed-tab end-->
								</div><!--main-ws-sec end-->
							</div>


							<div class="col-lg-3">
								<div class="right-sidebar">
                  <?php if ($_SESSION['role'] == 'admin'): ?>
                    <div class="message-btn">
  										<a href="#" title="" class="overview-open"><i class="fas fa-camera"></i> Upload Images
                      </a>
  									</div>
                  <?php endif; ?>

                  <div class="right-sidebar ads">
  									<div class="widget widget-about" style="z-index: -1;">
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
								</div><!--right-sidebar end-->
							</div>
						</div>
					</div><!-- main-section-data end-->
				</div>
			</div>
		</main>

    <?php include_once 'includes/footer.php'; ?>

		<div class="overview-box" id="overview-box">
			<div class="overview-edit">
				<h3>Add Gallery Image</h3>
				<span>5000 character left</span>

				<form action="backend/gallery.php" method="POST" enctype="multipart/form-data">
          <input type="hidden" name="userid" value="<?php echo $_GET['view']; ?>">
					<textarea name="description" placeholder="Description"></textarea>

          <div class="row" style="margin: 10px;">
            <div class="col-lg-12">
              <div class="add-dp" id="OpenImgUpload">
                <label for="file"><i class="fas fa-camera"></i></label>
                <input type="file" id="file" name="image">
                <label for="file">Upload Image</label>
              </div>
            </div>
          </div>

					<button type="submit" class="save">Save</button>
					<button class="cancel">Cancel</button>
				</form>
				<a href="#" title="" class="close-box"><i class="la la-close"></i></a>
			</div><!--overview-edit end-->
		</div><!--overview-box end-->


		<div class="overview-box" id="experience-box">
			<div class="overview-edit">
				<h3>Experience</h3>
				<form>
					<input type="text" name="subject" placeholder="Subject">
					<textarea></textarea>
					<button type="submit" class="save">Save</button>
					<button type="submit" class="save-add">Save & Add More</button>
					<button type="submit" class="cancel">Cancel</button>
				</form>
				<a href="#" title="" class="close-box"><i class="la la-close"></i></a>
			</div><!--overview-edit end-->
		</div><!--overview-box end-->

		<div class="overview-box" id="education-box">
			<div class="overview-edit">
				<h3>Education</h3>
				<form>
					<input type="text" name="school" placeholder="School / University">
					<div class="datepicky">
						<div class="row">
							<div class="col-lg-6 no-left-pd">
								<div class="datefm">
									<input type="text" name="from" placeholder="From" class="datepicker">
									<i class="fa fa-calendar"></i>
								</div>
							</div>
							<div class="col-lg-6 no-righ-pd">
								<div class="datefm">
									<input type="text" name="to" placeholder="To" class="datepicker">
									<i class="fa fa-calendar"></i>
								</div>
							</div>
						</div>
					</div>
					<input type="text" name="degree" placeholder="Degree">
					<textarea placeholder="Description"></textarea>
					<button type="submit" class="save">Save</button>
					<button type="submit" class="save-add">Save & Add More</button>
					<button type="submit" class="cancel">Cancel</button>
				</form>
				<a href="#" title="" class="close-box"><i class="la la-close"></i></a>
			</div><!--overview-edit end-->
		</div><!--overview-box end-->

		<div class="overview-box" id="location-box">
			<div class="overview-edit">
				<h3>Location</h3>
				<form>
					<div class="datefm">
						<select>
							<option>Country</option>
							<option value="pakistan">Pakistan</option>
							<option value="england">England</option>
							<option value="india">India</option>
							<option value="usa">United Sates</option>
						</select>
						<i class="fa fa-globe"></i>
					</div>
					<div class="datefm">
						<select>
							<option>City</option>
							<option value="london">London</option>
							<option value="new-york">New York</option>
							<option value="sydney">Sydney</option>
							<option value="chicago">Chicago</option>
						</select>
						<i class="fa fa-map-marker"></i>
					</div>
					<button type="submit" class="save">Save</button>
					<button type="submit" class="cancel">Cancel</button>
				</form>
				<a href="#" title="" class="close-box"><i class="la la-close"></i></a>
			</div><!--overview-edit end-->
		</div><!--overview-box end-->

		<div class="overview-box" id="skills-box">
			<div class="overview-edit">
				<h3>Skills</h3>
				<ul>
					<li><a href="#" title="" class="skl-name">HTML</a><a href="#" title="" class="close-skl"><i class="la la-close"></i></a></li>
					<li><a href="#" title="" class="skl-name">php</a><a href="#" title="" class="close-skl"><i class="la la-close"></i></a></li>
					<li><a href="#" title="" class="skl-name">css</a><a href="#" title="" class="close-skl"><i class="la la-close"></i></a></li>
				</ul>
				<form>
					<input type="text" name="skills" placeholder="Skills">
					<button type="submit" class="save">Save</button>
					<button type="submit" class="save-add">Save & Add More</button>
					<button type="submit" class="cancel">Cancel</button>
				</form>
				<a href="#" title="" class="close-box"><i class="la la-close"></i></a>
			</div><!--overview-edit end-->
		</div><!--overview-box end-->

		<div class="overview-box" id="create-portfolio">
			<div class="overview-edit">
				<h3>Create Portfolio</h3>
				<form>
					<input type="text" name="pf-name" placeholder="Portfolio Name">
					<div class="file-submit nomg">
						<input type="file" name="file">
					</div>
					<div class="pf-img">
						<img src="images/resources/np.png" alt="">
					</div>
					<input type="text" name="website-url" placeholder="htp://www.example.com">
					<button type="submit" class="save">Save</button>
					<button type="submit" class="cancel">Cancel</button>
				</form>
				<a href="#" title="" class="close-box"><i class="la la-close"></i></a>
			</div><!--overview-edit end-->
		</div><!--overview-box end-->

		<div class="overview-box" id="establish-box">
			<div class="overview-edit">
				<h3>Establish Since</h3>
				<form>
					<div class="daty">
						<input type="text" name="establish" placeholder="Select Date" class="datepicker">
						<i class="fa fa-calendar"></i>
					</div>
					<button type="submit" class="save">Save</button>
					<button type="submit" class="cancel">Cancel</button>
				</form>
				<a href="#" title="" class="close-box"><i class="la la-close"></i></a>
			</div><!--overview-edit end-->
		</div><!--overview-box end-->


		<div class="overview-box" id="total-employes">
			<div class="overview-edit">
				<h3>Total Employees</h3>
				<form>
					<input type="text" name="employes" placeholder="Type in numbers">
					<button type="submit" class="save">Save</button>
					<button type="submit" class="cancel">Cancel</button>
				</form>
				<a href="#" title="" class="close-box"><i class="la la-close"></i></a>
			</div><!--overview-edit end-->
		</div><!--overview-box end-->



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
<script type="text/javascript" src="js/flatpickr.min.js"></script>
<script type="text/javascript" src="lib/slick/slick.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
</body>

<!-- Mirrored from gambolthemes.net/workwise-new/company-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Nov 2019 11:06:27 GMT -->
</html>
