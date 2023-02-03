<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Management System</title>
    <!-- css linked -->
    <link rel="stylesheet" href="./assets/CSS/style.css">
    <!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.css"
  rel="stylesheet"
/>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-primary text-light">
  <!-- Container wrapper -->
  <div class="container-fluid">
    <!-- Toggle button -->
    <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
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
          <a class="nav-link text-light" href="#"><b>SMS</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="#">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="#">Team</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="#">Projects</a>
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
        <a
          class="link-secondary me-3 dropdown-toggle hidden-arrow"
          href="#"
          id="navbarDropdownMenuLink"
          role="button"
          data-mdb-toggle="dropdown"
          aria-expanded="false"
        >
          <i class="fas fa-bell bg-primary"></i>
          <span class="badge rounded-pill badge-notification bg-danger">1</span>
        </a>
        <ul
          class="dropdown-menu dropdown-menu-end  bg-primary"
          aria-labelledby="navbarDropdownMenuLink"
        >
          <li>
            <a class="dropdown-item text-light" href="#">Some news</a>
          </li>
          <li>
            <a class="dropdown-item text-light" href="#">Another news</a>
          </li>
          <li>
            <a class="dropdown-item text-light" href="#">Something else here</a>
          </li>
        </ul>
      </div>
      <!-- Avatar -->
      <div class="dropdown">
        <a
          class="dropdown-toggle d-flex align-items-center hidden-arrow"
          href="#"
          id="navbarDropdownMenuAvatar"
          role="button"
          data-mdb-toggle="dropdown"
          aria-expanded="false"
        >
          =
        </a>
        <ul
          class="dropdown-menu dropdown-menu-end"
          aria-labelledby="navbarDropdownMenuAvatar"
        >
          <li>
            <a class="dropdown-item bg-primary text-light" href="#">My profile</a>
          </li>
          <li>
            <a class="dropdown-item text-light" href="#">Settings</a>
          </li>
          <li> 
            <a class="dropdown-item text-light" href="#">Logout</a>
          </li>
        </ul>
      </div>
    </div>
    <!-- Right elements -->
  </div>
  <!-- Container wrapper -->
</nav>
<!-- Navbar -->

<div class="d-flex" style="height:100vh; box-shadow:0 1px 10px rgba(0,0,0,0.5); background:linear-gradient( -45deg,
  lightblue 50%, lightyellow 50%
);">
<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-lg-6">
            <h1 class="display-4" style="font-weight:600;color:black;">School Management System</h1>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quidem qui magni libero saepe architecto, fugiat nulla optio nesciunt dolorum dolore quia, sapiente natus vitae deleniti aut commodi voluptatem molestias recusandae officiis cum consequatur delectus facilis. Fugit numquam odio repudiandae facere?</p>
            <a href="#" class="btn btn-lg btn-primary">Call To Action</a>
        </div>
        <div class="col-lg-6  card-body mt-4">
       <div class="w-50 mx-auto mt-5 shadow-sm">
<form class="p-3 mt-2" style="width:35vw;box-shadow:3px 3px 9px rgba(0,0,0,0.5);">
  <!-- 2 column grid layout with text inputs for the first and last names -->
  <h2 class="text-center">Admission Form</h2>
  <div class="row mb-2">
    <div class="col">
      <div class="form-outline">
        <input type="text" id="form3Example1" class="form-control" />
        <label class="form-label" for="form3Example1">First name</label>
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
        <input type="text" id="form3Example2" class="form-control" />
        <label class="form-label" for="form3Example2">Last name</label>
      </div>
    </div>
  </div>

  <!-- Email input -->
  <div class="form-outline mb-4">
    <input type="number" id="form3Example3" class="form-control" />
    <label class="form-label" for="form3Example3">Phone number</label>
  </div>

  <!-- Email input -->
  <div class="form-outline mb-4">
    <input type="email" id="form3Example4" class="form-control" />
    <label class="form-label" for="form3Example4">Email address</label>
  </div>

  <!-- Password input -->
  <div class="form-outline mb-4">
    <input type="password" id="form3Example5" class="form-control" />
    <label class="form-label" for="form3Example4">Password</label>
  </div>


  <!-- Submit button -->
  <button type="submit" class="btn btn-primary btn-block mb-4">Submit Form</button>
</form>
       </div>
      </div>
    </div>
</div>
</div>

<section class="py-5">
  <div>
    <h2 class="text-center font-weight-bold">Courses</h2>
    <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti, corrupti!</p>
  </div>
  <div class="container">
    <div class="row">
      <?php 
      for($i = 0; $i < 8; $i++){  ?>
      <div class="col-lg-3 mb-4">
        <div class="card">
          <div>
            <img class="img-fluid rounded-pill" src="./assets/Images/school-course-img-1.avif" alt="">
          </div>
          <div class="card-body">
           <h4 class="card-text">Web Development & Design</h4>
           <br>
           <p>Duration : 6 Months</p>
           <br>
           <p>Price : 4,000 Rs</p>
           <button class="btn btn-block btn-primary ">Enroll Now</button>
          </div>
        </div>    
       
      </div>   
      <?php } ?>     
      </div>    
      
      </div>
    </div>
  </div>
</section>

<section class="py-5 bg-light">
<div>
    <h2 class="text-center font-weight-bold">Our Teachers</h2>
    <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti, corrupti!</p>
  </div>
  <div class="container">
    <div class="row " style="margin-top:50px;">
      <?php for($i = 0; $i < 8; $i++) { ?>
      <div class="col-lg-3 my-4" >
        <div class="card">
          <div class="col-7 position-absolute " style="top:-30px; left: 10%; ">
          <img class="rounded" style="width:70%; box-shadow:4px 4px 5px rgba(0,0,0,0.5);" src="./assets/Images/teacher-img-1.jpg" alt="">

        </div>
          <div class="card-body mt-4">
          <h4 class="card-title">Name</h4>
          <p>
          <b>Ratings : </b> 
            <i class="fa fa-star text-warning"></i>
            <i class="fa fa-star text-warning"></i>
            <i class="fa fa-star text-warning"></i>
            <i class="fa fa-star text-warning"></i>
            <i class="fa fa-star-half text-warning"></i>
          </p>
          <p class="card-text">
            <b>Cources : </b>5
            <br>
          </p>
          </div>
        </div>
      </div>
      <?php } ?>
    </div>
  </div>
</section>

  <!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.js"
></script>

</body>
</html>