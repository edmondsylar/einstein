<nav>
  <ul>
    <li>
    <?php
        if ($_SESSION['role'] == 'admin') {
          $link = "admin.php";
        }else if($_SESSION['user']){
          $link = "home.php";
        }
     ?>
      <a href="<?php echo $link; ?>" title="">
        <span><img src="images/icon1.png" alt=""></span>
        Home
      </a>
    </li>

    <?php if ($_SESSION['role'] == 'admin'): ?>
      <li>
        <a href="home.php" title="">
          <span><img src="images/icon4.png" alt=""></span>
          Entrepreneurs
        </a>
      </li>
    <?php endif; ?>

    <li>
      <a href="#" title="" class="not-box-openm">
        <span><img src="images/icon6.png" alt=""></span>
        Messages
      </a>
      <div class="notification-box msg" id="message">
        <div class="nt-title">
          <h4>Setting</h4>
          <a href="#" title="">Clear all</a>
        </div>
        <div class="nott-list">
            <div class="notfication-details">
              <p>
                No new Messages
              </p>
            </div>
            <div class="view-all-nots">
              <a href="messages.php" title="">View All Messsages</a>
            </div>
        </div><!--nott-list end-->
      </div><!--notification-box end-->
    </li>
    <li>
      <a href="#" title="" class="not-box-open">
        <span><img src="images/icon7.png" alt=""></span>
        Notification
      </a>
      <div class="notification-box noti" id="notification">
        <div class="nt-title">
          <h4>Setting</h4>
          <a href="#" title="">Clear all</a>
        </div>
        <div class="nott-list">
            <div class="notfication-details">
              <p>
                No new notifications
              </p>
            </div>

            <div class="view-all-nots">
              <a href="#" title="">View All Notification</a>
            </div>
        </div><!--nott-list end-->
      </div><!--notification-box end-->
    </li>
  </ul>
</nav><!--nav end-->
