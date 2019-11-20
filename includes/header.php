<header>
  <div class="container">
    <div class="header-data">
      <div class="logo">
        <a href="index-2.html" title=""><img src="images/logo.png" alt=""></a>
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
          <img src="images/resources/user.png" alt="">
          <a href="#" title="">John</a>
          <i class="la la-sort-down"></i>
        </div>
            <?php
              include_once 'account.php';
             ?>
      </div>
    </div><!--header-data end-->
  </div>
</header><!--header end-->
