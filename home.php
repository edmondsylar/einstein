<?php
  session_start();
  if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("Location: index.php");
  }
  include_once 'includes/head.php';

  include_once 'backend/config.php';

  $cur = new Config();
  $all = $cur->all_ents();


 ?>

<body oncontextmenu="return false;">
	<div class="wrapper">
		<?php
      include_once 'includes/header.php';
     ?>
		<section class="companies-info">
			<div class="container">
				<div class="company-title">
					<h3>All Entrepreneurs</h3>
				</div><!--company-title end-->
				<div class="companies-list">
					<div class="row">

            <!-- This is the Entreprenuer object -->
            <?php foreach ($all as $ent): ?>
              <?php $img = base64_encode($ent['image']); ?>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="company_profile_info">
								<div class="company-up-info">
									<img src="data:image/jpg;charset=utf8;base64,<?php echo $img ?>" class="img-responsive" alt="">
									<h3><?php echo $ent['name']; ?></h3>
									<h4><?php echo $ent['description']; ?></h4>
									<ul>
										<!-- <li><a href="#" title="" class="follow">Follow</a></li> -->
										<li><a href="#" title="" class="message-us"><i class="fa fa-envelope"></i></a></li>
									</ul>
								</div>
								<a href="profile.php?view=<?php echo $ent['id']; ?>" title="" class="view-more-pro">View Profile</a>
							</div><!--company_profile_info end-->
						</div>

          <?php endforeach; ?>
					</div>
				</div><!--companies-list end-->
				<div class="process-comm">
					<div class="spinner">
						<div class="bounce1"></div>
						<div class="bounce2"></div>
						<div class="bounce3"></div>
					</div>
				</div><!--process-comm end-->
			</div>
		</section><!--companies-info end-->
    <?php
      include_once 'includes/footer.php'
     ?>
	</div><!--theme-layout end-->

<script type="text/javascript">
  // redirect(){
  //   var = "
  //     <?php
  //       $_SESSION['view'] ==
  //      ?>
  //   "
  //
  //
  // }
</script>

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/popper.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/flatpickr.min.js"></script>
<script type="text/javascript" src="lib/slick/slick.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
</body>

<!-- Mirrored from gambolthemes.net/workwise-new/companies.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Nov 2019 11:05:47 GMT -->
</html>
<?php
 ?>
