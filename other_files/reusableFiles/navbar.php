<?php  include('header.php') ?>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-primary text-light">
  <!-- Container wrapper -->
  <div class="container-fluid">
    <!-- Toggle button -->
    <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- Navbar brand -->
      <a class="navbar-brand mt-2 mt-lg-0" href="#">

      </a>
      <!-- Left links -->
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
        <li class="nav-item">
          <a class="nav-link text-light" href="./other_files/academics/academics.html">Academics</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="./other_files/admission/admission.php">Admission</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="./other_files/student_life/student.php">Student Life</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="./other_files/parents_corner/parents.php">Parents Corner</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="./other_files/guidence_program/guidence.php">Guidence Program</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="./other_files/alumini_connect/alumini_connect.php">Alumini Connect</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="./other_files/media/media.php">Media</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="./other_files/career/career.php">Career</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="./other_files/blogs/blogs.php">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="./other_files/health_safety/healthy_safety.php">Health & Safety</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="./other_files/contact/contact.php">Contact</a>
        </li>
      </ul>
      <!-- Left links -->
    </div>
    <!-- Collapsible wrapper -->

    <!-- Right elements -->
    <div class="d-flex align-items-center">
      <!-- Icon -->
      <a class="link-secondary me-3" href="#">
        <!-- any icon here -->
      </a>

      <!-- Notifications -->
      <div class="dropdown">


        <a class="link-secondary me-3 dropdown-toggle hidden-arrow" href="#" id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
          <?php if (isset($_SESSION['login'])) {  ?>
            <i class="fas fa-user"></i>Account
            <span class="badge rounded-pill badge-notification bg-primary">1</span>
        </a>
        <ul class="dropdown-menu dropdown-menu-end  bg-white" aria-labelledby="navbarDropdownMenuLink">
          <li>
            <a class="dropdown-item text-secondary" href="#">Admission</a>
          </li>
          <li>
            <a class="dropdown-item text-secondary" href="#">Teachers Portal</a>
          </li>
          <li>
            <a class="dropdown-item text-secondary" href="#">Third option</a>
          </li>
          <li>
            <a class="dropdown-item text-secondary" href="logout.php">Logout</a>
          </li>
        </ul>
      <?php } else { ?>

        <a href="login.php" class="nav-link" style="font-weight:800; font-family:sans-serif; font-size: 1.5rem;position:absolute; top:-10%;left:-500%;">
          Login
        </a>

      <?php } ?>
      </div>

    </div>
    <!-- Right elements -->
  </div>
  <!-- Container wrapper -->
</nav>
<!-- Navbar -->