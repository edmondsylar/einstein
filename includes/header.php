<header>
  <div class="container">
    <div class="header-data">
      <div class="logo">
        <?php
            if ($_SESSION['role'] == 'admin') {
              $link = "admin.php";
            }else if($_SESSION['role'] == 'user'){
              $link = "home.php";
            }
         ?>
        <a href="<?php echo $link; ?>" title=""><img src="images/el-ogo.png" alt=""></a>
      </div><!--logo end-->
      <div class="search-bar">
        <form>
          <input type="text" name="search" placeholder="Search...">
          <button type="submit"><i class="la la-search"></i></button>
        </form>
      </div><!--search-bar end-->
        <?php
          include_once 'nav.php';
         ?>
      <div class="menu-btn">
        <a href="#" title=""><i class="fa fa-bars"></i></a>
      </div><!--menu-btn end-->
      <div class="user-account">
        <div class="user-info">
          <!-- <img src="images/resources/user.png" alt=""> -->
          <a href="#" title=""><?php echo $_SESSION['name']; ?></a>
          <i class="la la-sort-down"></i>
        </div>
            <?php
              include_once 'account.php';
             ?>
      </div>
    </div><!--header-data end-->
  </div>
</header><!--header end-->
