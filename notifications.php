<?php
  session_start();
  if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("Location: index.php");
  }
  include_once 'includes/head.php';
  include_once 'backend/config.php';
  $cur = new Config();

  $users = $cur->fetch_users();

 ?>


<body oncontextmenu="return false;">

	<div class="wrapper">

    <?php include_once 'includes/header.php'; ?>

		<section class="messages-page">
			<div class="container">
				<div class="messages-sec">
					<div class="row">
						<div class="col-lg-4 col-md-12 no-pdd">
							<div class="msgs-list">
								<div class="msg-title">
									<h3>Admin <small><?php echo $_SESSION['name'] ?></small> </h3>
									<ul>
										<li><a href="#" title=""><i class="fa fa-cog"></i></a></li>
										<li><a href="#" title=""><i class="fa fa-ellipsis-v"></i></a></li>
									</ul>
								</div><!--msg-title end-->
								<div class="messages-list">
									<ul>
                    <?php if (!empty($users)): ?>
                      <?php foreach ($users as $user): ?>
                        <li class="userdata" id="userdata" onclick="trigger('<?php echo $user['id'] ?>')">
    											<div class="usr-msg-details">
    												<div class="usr-ms-img">
    													<img src="images/news.png" alt="">
    													<!-- <span class="msg-status"></span> -->
    												</div>
    												<div class="usr-mg-info">
    													<h3 class="userdata" id="userdata"><?php echo $user['full_name'] ?></h3>
    													<p><?php echo $user['email'] ?></p>
    												</div><!--usr-mg-info end-->
    												<span class="posted_time">Verified</span>
    											</div><!--usr-msg-details end-->
    										</li>
                      <?php endforeach; ?>

                      <?php else: ?>
                        <li class="active">
    											<div class="usr-msg-details">
    												<div class="usr-mg-info">
    													<p>No Registered Users.</p>
    												</div><!--usr-mg-info end-->
    											</div><!--usr-msg-details end-->
    										</li>
                    <?php endif; ?>
									</ul>
								</div><!--messages-list end-->
							</div><!--msgs-list end-->
						</div>

            <?php if (isset($_GET['user'])):
              $data = $cur->get_user($_GET['user']);
              $person = $data['userdetails'];
              $notify = $data['messages'];

            ?>

            <div class="col-lg-8 col-md-12 pd-right-none pd-left-none">
							<div class="main-conversation-box">
  								<div class="message-bar-head">
  									<div class="usr-msg-details">
  										<div class="usr-ms-img">
  											<img src="images/resources/m-img1.png" alt="">
  										</div>
  										<div class="usr-mg-info">
                        <?php foreach ($person as $users): ?>
                          <h3 id="selected-user"><?php echo $users['full_name']; ?></h3>
    											<p id="selected-email"><?php echo $users['email']; ?></p>
                        <?php endforeach; ?>

  										</div><!--usr-mg-info end-->
  									</div>
  									<a href="#" title=""><i class="fa fa-ellipsis-v"></i></a>
  								</div><!--message-bar-head end-->
  								<div class="messages-line">
  									<div class="main-message-box">

  									</div><!--message-dt end-->
  								</div><!--main-message-box end-->
                  <?php foreach ($notify as $msg): ?>
                    <div class="main-message-box ta-right">
  										<div class="message-dt">
  											<div class="message-inner-dt">
  												<p>
                            <?php echo $msg['message']; ?>
                          </p>
  											</div>
  											<span><?php echo $msg['createdOn']; ?></span>
  										</div><!--message-dt end-->
  										<div class="messg-usr-img">
                        <img src="images/news.png" alt="">
  											<!-- <img src="images/resources/m-img2.png" alt=""> -->
  										</div>
  									</div>
                  <?php endforeach; ?>

  								</div><!--messages-line end-->
  								<div class="message-send-area">
  									<form action="backend/todos.php?send-message" method="POST">
  										<div class="mf-field">
  											<input type="text" name="message" placeholder="Type a message here">
                        <input type="hidden" name="receiver" value="<?php echo $_GET['user']; ?>">
  											<button type="submit">Send</button>
  										</div>
  										<ul>
  											<li><a href="#" title=""><i class="fa fa-smile-o"></i></a></li>
  											<li><a href="#" title=""><i class="fa fa-camera"></i></a></li>
  											<li><a href="#" title=""><i class="fa fa-paperclip"></i></a></li>
  										</ul>
  									</form>
  								</div><!--message-send-area end-->
  							</div><!--main-conversation-box end-->
            <?php endif; ?>

						</div>
					</div>
				</div><!--messages-sec end-->
			</div>
		</section><!--messages-page end-->

    <?php include_once 'includes/footer.php'; ?>

	</div><!--theme-layout end-->

  <?php include_once 'includes/notifyer.php'; ?>

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/popper.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.mCustomScrollbar.js"></script>
<script type="text/javascript" src="lib/slick/slick.min.js"></script>
<script type="text/javascript" src="js/scrollbar.js"></script>
<script type="text/javascript" src="js/script.js"></script>

</body>

<!-- Mirrored from gambolthemes.net/workwise-new/messages.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Nov 2019 11:07:23 GMT -->
</html>
