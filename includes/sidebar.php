<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="deshbord.php" class="brand-link">
    <img src="assent/dist/img/logo.png" alt="Logo" class="logo_img" style="opacity: .8">
    <!-- <span class="brand-text font-weight-light">Blog Dashboard</span> -->
  </a>

  <!-- Sidebar -->
  <!-- <div class="sidebar"> -->
  <!-- Sidebar user panel (optional) -->
  <!-- <div class="user-panel"> 
      <div class="image">
        <img src="assent/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">Alexander Pierce</a>
      </div>
    </div> -->

  <!-- Sidebar Menu -->
  <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
      <li class="nav-item has-treeview menu-open">
        <a href="deshbord.php" class="nav-link <?= $page == 'deshbord.php' ? 'active' : ''  ?>">
          <i class="fa-solid fa-volleyball"></i>
          <p>
            Dashboard
          </p>
        </a>
      </li>
      <?php
      if ($_SESSION['user_role'] == 'admin') {
      ?>
        <li class="nav-item has-treeview">
          <a href="turf_menegment.php" class="nav-link <?= $page == 'turf_menegment.php' ? 'active' : ''  ?>">
            <i class="fa-solid fa-money-bill"></i>
            <p>
              Turf Management
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="add_turf.php" class="nav-link <?= $page == 'add_turf.php' ? 'active' : ''  ?>">
                <i class="fa-solid fa-list"></i>
                <p> Add Turf</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="turf_menegment.php" class="nav-link <?= $page == 'turf_menegment.php' ? 'active' : ''  ?>">

                <i class="fa-solid fa-table-list"></i>
                <p> Turf Listing</p>
              </a>
            </li>
          </ul>
        </li>

      <?php
      }
      ?>
       <?php
      if ($_SESSION['user_role'] == 'user') {
      ?>
      <li class="nav-item has-treeview">
        <a href="turf_category.php" class="nav-link <?= $page == 'turf_category.php' ? 'active' : ''  ?>">
        <i class="fa-solid fa-layer-group"></i>
          <p>
            Turf Category
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="add_category.php" class="nav-link <?= $page == 'add_category.php' ? 'active' : ''  ?>">
              <i class="fa-solid fa-list"></i>
              <p> Add Category</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="turf_category.php" class="nav-link <?= $page == 'turf_category.php' ? 'active' : ''  ?>">

              <i class="fa-solid fa-table-list"></i>
              <p> Category Listing</p>
            </a>
          </li>
        </ul>
      </li>
      <?php
      }
      ?>
      <?php
      if ($_SESSION['user_role'] == 'admin') {
      ?>
      <li class="nav-item">
        <a href="location.php" class="nav-link <?= $page == 'location.php' ? 'active' : ''  ?>">
          <i class="fa-solid fa-location-dot"></i>
          <p>
            Location Management
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="add_location.php" class="nav-link <?= $page == 'add_location.php' ? 'active' : ''  ?>">
              <i class="fa-solid fa-list"></i>
              <p> Add Location</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="location.php" class="nav-link <?= $page == 'location.php' ? 'active' : ''  ?>">

              <i class="fa-solid fa-table-list"></i>
              <p> Location Listing</p>
            </a>
          </li>
        </ul>
      </li>
      <?php
      }
      ?>
      <li class="nav-item ">
        <a href="booking.php" class="nav-link <?= $page == 'booking.php' ? 'active' : ''  ?>">
          <i class="fa-solid fa-user-tag"></i>
          <p>
            All Booking
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
              <a href="add_booking.php" class="nav-link <?= $page == 'add_booking.php' ? 'active' : ''  ?>">
                <i class="fa-solid fa-list"></i>
                <p> Add Booking</p>
              </a>
            </li>
          <li class="nav-item">
            <a href="booking.php" class="nav-link <?= $page == 'booking.php' ? 'active' : ''  ?>">

              <i class="fa-solid fa-table-list"></i>
              <p> Booking Listing</p>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item ">
        <a href="customer.php" class="nav-link <?= $page == 'customer.php' ? 'active' : ''  ?>">
          <i class="fa-solid fa-users"></i>
          <p>
            Customer Management
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <!-- <li class="nav-item">
              <a href="add_post.php" class="nav-link <?= $page == 'add_post.php' ? 'active' : ''  ?>">
                <i class="fa-solid fa-list"></i>
                <p> Add Post</p>
              </a>
            </li> -->
          <li class="nav-item">
            <a href="customer.php" class="nav-link <?= $page == 'customer.php' ? 'active' : ''  ?>">

              <i class="fa-solid fa-table-list"></i>
              <p> Customer Listing</p>
            </a>
          </li>
        </ul>
      </li>
    </ul>
  </nav>
  </div>
</aside>