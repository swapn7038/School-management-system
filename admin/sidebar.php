<!-- Navbar -->
<nav style="" class="main-header navbar navbar-expand navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../index.php" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../other_files/contact/contact.php" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

    
      <!-- Notifications Dropdown Menu -->
      
      <li class="nav-item">
        <a class="nav-link" href="../logout.php">
          Logout
          <i class="fa fa-sign-out-alt"></i>  
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Admin Panel</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <!-- 1 -->
               <li class="nav-item">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <!-- <i class="right fas fa-angle-left"></i> -->
              </p>
            </a>
            <!-- <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <p>Dashboard v1</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <p>Dashboard v2</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <p>Dashboard v3</p>
                </a>
              </li>
            </ul> -->
          </li>

          <!-- 2 -->

          <li class="nav-item">
            <a href="#" class="nav-link active">
              <!-- <i class="nav-icon fas fa-tachometer-alt"></i> -->
              <p>
                Manage Accounts
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./user-account.php?user=teacher" class="nav-link">
                  <!-- <i class="far fa-circle nav-icon"></i> -->
                  <p>Teachers</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="user-account.php?user=student" class="nav-link">
                  <!-- <i class="far fa-circle nav-icon"></i> -->
                  <p>Students</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="user-account.php?user=parents" class="nav-link">
                  <!-- <i class="far fa-circle nav-icon"></i> -->
                  <p>Parents</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="user-account.php?user=librarian" class="nav-link">
                  <!-- <i class="far fa-circle nav-icon"></i> -->
                  <p>Librarian</p>
                </a>
              </li>
            </ul>
          </li>

          <!-- 3 -->
          <li class="nav-item">
            <a href="#" class="nav-link active">
              <!-- <i class="nav-icon fas fa-tachometer-alt"></i> -->
              <p>
                Manage Classes
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <!-- <i class="far fa-circle nav-icon"></i> -->
                  <p></p>
                </a>
              </li>
              <li class="nav-item">
                <a href="classes.php" class="nav-link">
                  <!-- <i class="far fa-circle nav-icon"></i> -->
                  <p>Classes</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="sections.php" class="nav-link">
                  <!-- <i class="far fa-circle nav-icon"></i> -->
                  <p>Section</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="courses.php" class="nav-link">
                  <!-- <i class="far fa-circle nav-icon"></i> -->
                  <p>Courses</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="subjects.php" class="nav-link">
                  <!-- <i class="far fa-circle nav-icon"></i> -->
                  <p>Subjects</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="lessons.php" class="nav-link">
                  <!-- <i class="far fa-circle nav-icon"></i> -->
                  <p>Lessons</p>
                </a>
              </li>
            </ul>
          </li>

          <!-- 4 -->

          <li class="nav-item">
            <a href="#" class="nav-link active">
              <!-- <i class="nav-icon fas fa-tachometer-alt"></i> -->
              <p>
                Manage Routine
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <p>Option One</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <p>Option Two</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <p>Option Three</p>
                </a>
              </li>
            </ul>
          </li>
        
    
          <!-- 5 -->

          <li class="nav-item">
            <a href="#" class="nav-link active">
              <!-- <i class="nav-icon fas fa-tachometer-alt"></i> -->
              <p>
                Exams, Marks
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <p>Exams</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <p>Grades</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <p>Send msg via SMS</p>
                </a>
              </li>
            </ul>
          </li>
        
    
          <!-- 6 -->

          <li class="nav-item">
            <a href="#" class="nav-link active">
              <!-- <i class="nav-icon fas fa-tachometer-alt"></i> -->
              <p>
                Student's Attendence
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <p>Option One</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <p>Option Two</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <p>Option Three</p>
                </a>
              </li>
            </ul>
          </li>
        
    
          <!-- 7 -->

          <li class="nav-item">
            <a href="#" class="nav-link active">
              <!-- <i class="nav-icon fas fa-tachometer-alt"></i> -->
              <p>
                Manage School Events
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <p>Option One</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <p>Option Two</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <p>Option Three</p>
                </a>
              </li>
            </ul>
          </li>
        
    
          <!-- 8 -->

          <li class="nav-item ">
            <a href="#" class="nav-link active">
              <!-- <i class="nav-icon fas fa-tachometer-alt"></i> -->
              <p>
                Library, Dormitory, Transport
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <p>Option One</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <p>Option Two</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <p>Option Three</p>
                </a>
              </li>
            </ul>
          </li>
        
    
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">