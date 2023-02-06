<?php include('header.php') ?>



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

        <?php if (isset($_SESSION['login'])) {
        ?>
          <a class="link-secondary me-3 dropdown-toggle hidden-arrow" href="#" id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
            <i class="fas fa-user"></i>
            <span class="badge rounded-pill badge-notification bg-danger">1</span>
          </a>
          <ul class="dropdown-menu dropdown-menu-end  bg-primary" aria-labelledby="navbarDropdownMenuLink">
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
        <?php } else { ?>

          <a href="login.php" class="nav-link">
            <i class="fa fa-user">Login</i>
          </a>
        <?php } ?>
      </div>
      <!-- Avatar -->
      <div class="dropdown">
        <a class="dropdown-toggle d-flex align-items-center hidden-arrow" href="#" id="navbarDropdownMenuAvatar" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
          =
        </a>
        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuAvatar">
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

<div class="d-flex" style="height:110vh; box-shadow:0 1px 10px rgba(0,0,0,0.5); background:linear-gradient( -45deg,
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

<!-- ============ About us section  ============ -->
<section class="py-5" style="height:100vh;">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <h1 class="text-center">About Us</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, atque? Quibusdam repellendus assumenda nam illum beatae fugiat hic inventore ut molestiae vitae architecto, sit iure libero ab quia porro aspernatur adipisci, quis commodi placeat impedit? Eaque et aliquid omnis fugiat quia, commodi aperiam laborum iusto tempore, ea corrupti quibusdam vitae.</p>

        <a class="btn bg-primary" style="color:white;" href="#">Know More</a>
      </div>
      <div class="col-lg-6 ml-5">
        <img src="./assets/Images/about-us-img-1.jpg" alt="About us image" class="img-fluid" style="box-shadow:4px 5px 10px rgba(0,0,0,0.5); width:100%; ">
      </div>
    </div>
  </div>
</section>
<!-- ============ Course section  ============ -->
<section class="py-5">
  <div>
    <h1 class="text-center font-weight-bold">Courses</h1>
    <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti, corrupti!</p>
  </div>
  <div class="container">
    <div class="row">
      <?php
      for ($i = 0; $i < 8; $i++) {  ?>
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

<!-- ============ Teachers section  ============ -->
<section class="py-5 bg-light">
  <div>
    <h1 class="text-center font-weight-bold">Our Teachers</h1>
    <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti, corrupti!</p>
  </div>
  <div class="container">
    <div class="row " style="margin-top:50px;">
      <?php for ($i = 0; $i < 6; $i++) { ?>
        <div class="col-lg-4 my-4">
          <div class="card">
            <div class="col-7 position-absolute " style="top:-40px; left: 50%; ">
              <img class="rounded" style="width:70%; box-shadow:10px 10px 20px rgba(0,0,0,0.5);" src="./assets/Images/teacher-img-1.jpg" alt="">

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

<!-- ============ Achievements section  ============ -->
<section class="py-5" style="background:linear-gradient(lightblue, lightyellow);">
  <div>
    <div class="container">
      <div class="row">
        <div class="col mt-5" style="height:30vh">
          <h1 class=" text-center">Achievements</h1>

          <p class="text-center">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Inventore, vel.</p>
          <div class="d-flex justify-content-between">
            <div class="logo-first">
              <i class="fa-solid fa-trophy fa-3x"></i>
              <p>Gold Medalist</p>
            </div>
            <div class="logo-second">
              <i class="fa-regular fa-star fa-3x"></i>
              <p>5 Star Winner</p>
            </div>
            <div class="logo-third">
              <i class="fa-solid fa-graduation-cap fa-3x"></i>
              <p>Graduation</p>
            </div>
            <div class="logo-fourth">
              <i class="fa-solid fa-building-columns fa-3x"></i>
              <p>Best Infracture</p>
            </div>
            <div class="logo-fifth">
              <i class="fa-solid fa-school fa-3x"></i>
              <p>Best School In area</p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>

<!-- ============== Testimonials ================ -->
<section class="py-5">
  <div class="text-center mb-5">
    <h1 class="text-center">What People Think</h1>
    <p class="text-muted">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sapiente, earum.</p>
  </div>
  <div class="container">
    <div>
      <div class="row">
        <div class="border rounded col-6" style="position:relative;">
          <div class="p-3 text-center" style="box-shadow:4px 4px 10px rgba(0,0,0,0.5);">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, debitis.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, voluptatum.
            <div>
              <h4>Name : Swapnil Shelke</h4>
              <h5>Designation : Teacher</h5>
            </div>
          </div>

          <img src="./assets/Images/person-1.jpg" style="position:absolute; top:50%;left:10%;  border-radius:50%; box-shadow:2px 2px 10px rgba(0,0,0,0.7);" height="40%" alt="">

        </div>
        <div class="border rounded col-6" style="position:relative;">
          <div class="p-3 text-center" style="box-shadow:4px 4px 10px rgba(0,0,0,0.5);">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, debitis.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, voluptatum.
            <div>
              <h4>Name : Swapnil Shelke</h4>
              <h5>Designation : Teacher</h5>
            </div>
          </div>

          <img src="./assets/Images/person-1.jpg" style="position:absolute; top:50%; left:10%; border-radius:50%; box-shadow:2px 2px 10px rgba(0,0,0,0.7);" height="40%" alt="">

        </div>
      </div>
    </div>


  </div>
</section>

<!-- ====================== footer ======================  -->
<footer style="background: url('./assets/Images/about-us-img-1.jpg');  background-size:cover; background-repeat:no-repeat; ">
  <div class="pt-5" style="background: linear-gradient(0,0,0,0.9);width:100%;">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4">
          <h4>Useful Links</h4>

          <ul class="fa-ul">
            <li><a class="text-light" href="#"><i class="fa-li fa fa-angle-right"></i>List icons</a></li>
            <li><a class="text-light" href="#"><i class="fa-li fa fa-angle-right  "></i>List icons</a></li>
            <li><a class="text-light" href="#"><i class="fa-li fa fa-angle-right  "></i>List icons</a></li>
            <li><a class="text-light" href="#"><i class="fa-li fa fa-angle-right  "></i>List icons</a></li>
            <li><a class="text-light" href="#"><i class="fa-li fa fa-angle-right  "></i>List icons</a></li>
            <li><a class="text-light" href="#"><i class="fa-li fa fa-angle-right  "></i>List icons</a></li>
          </ul>
        </div>
        <div class="col-lg-4">
          <h4>Social Links</h4>

          <ul class="fa-ul">
            <li><a class="text-light" href="#"><i class="fa-li fa fa-angle-right"></i>Facebook</a></li>
            <li><a class="text-light" href="#"><i class="fa-li fa fa-angle-right  "></i>Instagram</a></li>
            <li><a class="text-light" href="#"><i class="fa-li fa fa-angle-right  "></i>Snapchat</a></li>
            <li><a class="text-light" href="#"><i class="fa-li fa fa-angle-right  "></i>Linkedin</a></li>
            <li><a class="text-light" href="#"><i class="fa-li fa fa-angle-right  "></i>Whatsapp</a></li>
            <li><a class="text-light" href="#"><i class="fa-li fa fa-angle-right  "></i>Youtube</a></li>
          </ul>
        </div>
        <div class="col-lg-4">
          <h4>Creators of project</h4>

          <ul class="fa-ul">
            <li><a class="text-light" href="#"><i class="fa-li fa fa-angle-right"></i>Kiran Kalunke</a></li>
            <li><a class="text-light" href="#"><i class="fa-li fa fa-angle-right  "></i>Parmeshwar gaikwad</a></li>
            <li><a class="text-light" href="#"><i class="fa-li fa fa-angle-right  "></i>Rohit Sable</a></li>
            <li><a class="text-light" href="#"><i class="fa-li fa fa-angle-right  "></i>Prajwal Andhare</a></li>

          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>

<!-- ============== subscribe now ============= -->
<section style="width:100%; height:10rem; margin-bottom:1rem; background: linear-gradient(lightblue, lightyellow); display:flex; align-items:center; flex-direction:column; justify-content:space-around;">
  <div class="mt-5">
    <h2>Subscribe to newsletter</h2>
    <input style="width:100%; background-color:yellow;" placeholder="Enter your email...." type="text">
    <div class="pt-3 mb-3">
      <button style="background:rgba(0,0,0,0.5); color:white; padding:.4rem 2rem; ">Submit</button>
    </div>
  </div>
  <div style="background-color:black;color:wheat; width:100%; text-align:center; padding: 1rem;">
    Copyright 2023. All rights reserved.
  </div>
</section>
<!-- MDB -->

<?php include('footer.php') ?>
</body>

</html>