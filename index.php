<?php include('header.php') ?>


<!-- Navbar -->
<?php  include('navbar.php') ?>

<div class="d-flex" style="height:110vh; box-shadow:0 1px 10px rgba(0,0,0,0.5); background:linear-gradient( -45deg,
  lightblue 50%, lightyellow 50%
);">
  <div class="container-fluid mt-5">
    <div class="row">
      <div class="col-lg-6">
        <h1 class="display-4" style="font-weight:600;color:black;">Saraswati Vidya-Mandir</h1>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quidem qui magni libero saepe architecto, fugiat nulla optio nesciunt dolorum dolore quia, sapiente natus vitae deleniti aut commodi voluptatem molestias recusandae officiis cum consequatur delectus facilis. Fugit numquam odio repudiandae facere?</p>
        <a href="#" class="btn btn-lg btn-primary">Know More </a>
      </div>
      <div class="col-lg-6  card-body mt-4">
        <div class="w-50 mx-auto mt-5 shadow-sm">
          <form class="p-3 mt-2" style="width:35vw;box-shadow:3px 3px 9px rgba(0,0,0,0.5);">
            <!-- 2 column grid layout with text inputs for the first and last names -->
            <h2 class="text-center">Student Login</h2>
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

      <!-- =================== card one===================  -->
      <div class="col-lg-3 mb-4">
        <div class="card">
          <div>
            <img class="img-fluid rounded-pill" src="./assets/Images/school-course-img-1.avif">
          </div>
          <div class="card-body">
            <h5 class="card-text">Nursery, KG, Sen. KG </h5>
            <br>
            <p>Class Teacher : Sachin sir</p>
            <p>Fees : 25,000</p>
            <button class="btn btn-block btn-primary ">Take Admission</button>
          </div>
        </div>

      </div>
      <!-- =================== card two ===================  -->
      <div class="col-lg-3 mb-4">
        <div class="card">
          <div>
            <img class="img-fluid rounded-pill" src="./assets/Images/school-course-img-1.avif">
          </div>
          <div class="card-body">
            <h5 class="card-text">Class 1st
            </h5>
            <br>
            <p>Class Teacher : Kiran Sir</p>
            <p>Fees : 30,000</p>
            <button class="btn btn-block btn-primary ">Take Admission</button>
          </div>
        </div>

      </div>
      <!-- =================== card three ===================  -->
      <div class="col-lg-3 mb-4">
        <div class="card">
          <div>
            <img class="img-fluid rounded-pill" src="./assets/Images/school-course-img-1.avif">
          </div>
          <div class="card-body">
            <h5 class="card-text">Class 2nd</h5>
            <br>
            <p>Class Teacher : Parameshwar sir</p>
            <p>Fees : 35,000</p>
            <button class="btn btn-block btn-primary ">Take Admission</button>
          </div>
        </div>

      </div>
      <!-- =================== card four ===================  -->
      <div class="col-lg-3 mb-4">
        <div class="card">
          <div>
            <img class="img-fluid rounded-pill" src="./assets/Images/school-course-img-1.avif">
          </div>
          <div class="card-body">
            <h5 class="card-text">Class 3rd</h5>
            <br>
            <p>Class Teacher : Prajawal sir</p>
            <p>Fees : 40,000</p>
            <button class="btn btn-block btn-primary ">Take Admission</button>
          </div>
        </div>

      </div>
      <!-- =================== card five ===================  -->
      <div class="col-lg-3 mb-4">
        <div class="card">
          <div>
            <img class="img-fluid rounded-pill" src="./assets/Images/school-course-img-1.avif">
          </div>
          <div class="card-body">
            <h5 class="card-text">Class 4th</h5>
            <br>
            <p>Class Teacher : Samudre sir</p>
            <p>Fees : 45,000</p>
            <button class="btn btn-block btn-primary ">Take Admission</button>
          </div>
        </div>

      </div>
      <!--  -->
      <!-- =================== card six ===================  -->
      <div class="col-lg-3 mb-4">
        <div class="card">
          <div>
            <img class="img-fluid rounded-pill" src="./assets/Images/school-course-img-1.avif">
          </div>
          <div class="card-body">
            <h5 class="card-text">Class 5th</h5>
            <br>
            <p>Class Teacher : Aahere sir</p>
            <p>Fees : 50,000</p>
            <button class="btn btn-block btn-primary ">Take Admission</button>
          </div>
        </div>

      </div>
      <!--  -->
      <!-- =================== card seven ===================  -->
      <div class="col-lg-3 mb-4">
        <div class="card">
          <div>
            <img class="img-fluid rounded-pill" src="./assets/Images/school-course-img-1.avif">
          </div>
          <div class="card-body">
            <h5 class="card-text">Class 6th</h5>
            <br>
            <p>Class Teacher : Archana Mam</p>
            <p>Fees : 55,000</p>
            <button class="btn btn-block btn-primary ">Take Admission</button>
          </div>
        </div>

      </div>
      <!--  -->
      <!-- =================== card eight  ===================  -->
      <div class="col-lg-3 mb-4">
        <div class="card">
          <div>
            <img class="img-fluid rounded-pill" src="./assets/Images/school-course-img-1.avif">
          </div>
          <div class="card-body">
            <h5 class="card-text">Class 7th</h5>
            <br>
            <p>Class Teacher : Pranali Mam</p>
            <p>Fees : 60,000</p>
            <button class="btn btn-block btn-primary ">Take Admission</button>
          </div>
        </div>

      </div>
      <!--  -->
      <!-- =================== card nine  ===================  -->
      <div class="col-lg-3 mb-4">
        <div class="card">
          <div>
            <img class="img-fluid rounded-pill" src="./assets/Images/school-course-img-1.avif">
          </div>
          <div class="card-body">
            <h5 class="card-text">Class 8th</h5>
            <br>
            <p>Class Teacher : Shelke Sir</p>
            <p>Fees : 65,000</p>
            <button class="btn btn-block btn-primary ">Take Admission</button>
          </div>
        </div>

      </div>
      <!--  -->
      <!-- =================== card ten  ===================  -->
      <div class="col-lg-3 mb-4">
        <div class="card">
          <div>
            <img class="img-fluid rounded-pill" src="./assets/Images/school-course-img-1.avif">
          </div>
          <div class="card-body">
            <h5 class="card-text">Class 9th</h5>
            <br>
            <p>Class Teacher : Aashay Sir</p>
            <p>Fees : 70,000</p>
            <button class="btn btn-block btn-primary ">Take Admission</button>
          </div>
        </div>

      </div>
      <!--  -->
      <!-- =================== card eleven  ===================  -->
      <div class="col-lg-3 mb-4">
        <div class="card">
          <div>
            <img class="img-fluid rounded-pill" src="./assets/Images/school-course-img-1.avif">
          </div>
          <div class="card-body">
            <h5 class="card-text">Class 10th</h5>
            <br>
            <p>Class Teacher : Rushi Sir</p>
            <p>Fees : 75,000</p>
            <button class="btn btn-block btn-primary ">Take Admission</button>
          </div>
        </div>

      </div>
      <!--  -->
    </div>

  </div>
  </div>
  </div>
</section>

<!-- ============ Teachers section  ============ -->
<section class="py-5 bg-light">
  <div>
    <h1 class="text-center font-weight-bold">Our Teachers</h1>
    <p class="text-center">We have world's best teachers in our school!!!</p>
  </div>
  <div class="container">
    <div class="row " style="margin-top:50px;">

      <!-- =================== tecaher card one ===================  -->
      <div class="col-lg-3 my-4">
        <div class="card">
          <div class="col-7 position-absolute " style="top:-30px; left: 60%; ">
            <img class="rounded" style="width:50%;" src="./assets/Images/person-1.jpg" alt="">

          </div>
          <div class="card-body mt-4">
            <h4 class="card-title">Sachin Sir</h4>
            <p>
              <b>Education : </b>

              <b>MBA</b>

            </p>
            <p class="card-text">
              <b>Class : Nursery, KG, Sen. KG</b>
            </p>
          </div>
        </div>
      </div>
      <!-- =================== card end here ===================  -->

      <!-- =================== tecaher card two ===================  -->
      <div class="col-lg-3 my-4">
        <div class="card">
          <div class="col-7 position-absolute " style="top:-30px; left: 60%; ">
            <img class="rounded" style="width:50%;" src="./assets/Images/person-1.jpg" alt="">

          </div>
          <div class="card-body mt-4">
            <h4 class="card-title">Kiran Sir</h4>
            <p>
              <b>Education : </b>

              <b>MCA</b>
            </p>
            <p class="card-text">
              <b>Class : </b>1st
              <br>
            </p>
          </div>
        </div>
      </div>
      <!-- =================== card end here ===================  -->

      <!-- =================== tecaher card three ===================  -->
      <div class="col-lg-3 my-4">
        <div class="card">
          <div class="col-7 position-absolute " style="top:-30px; left: 60%; ">
            <img class="rounded" style="width:50%;" src="./assets/Images/person-1.jpg" alt="">

          </div>
          <div class="card-body mt-4">
            <h4 class="card-title">Parameshwar Sir</h4>
            <p>
              <b>Education : </b>

              <b>B.tech</b>
            </p>
            <p class="card-text">
              <b>Class : </b>2nd
              <br>
            </p>
          </div>
        </div>
      </div>
      <!-- =================== card end here ===================  -->

      <!-- =================== tecaher card four ===================  -->
      <div class="col-lg-3 my-4">
        <div class="card">
          <div class="col-7 position-absolute " style="top:-30px; left: 60%; ">
            <img class="rounded" style="width:50%;" src="./assets/Images/person-1.jpg" alt="">

          </div>
          <div class="card-body mt-4">
            <h4 class="card-title">Prajawal Sir</h4>
            <p>
              <b>Education : </b>

              <b>MSC</b>
            </p>
            <p class="card-text">
              <b>Class : </b>3rd
              <br>
            </p>
          </div>
        </div>
      </div>
      <!-- =================== card end here ===================  -->

      <!-- =================== tecaher card five ===================  -->
      <div class="col-lg-3 my-4">
        <div class="card">
          <div class="col-7 position-absolute " style="top:-30px; left: 60%; ">
            <img class="rounded" style="width:50%;" src="./assets/Images/person-1.jpg" alt="">

          </div>
          <div class="card-body mt-4">
            <h4 class="card-title">Samudre Sir</h4>
            <p>
              <b>Education : </b>

              <b>B.ed</b>
            </p>
            <p class="card-text">
              <b>Class : </b>4th
              <br>
            </p>
          </div>
        </div>
      </div>
      <!-- =================== card end here ===================  -->

      <!-- =================== tecaher card six ===================  -->
      <div class="col-lg-3 my-4">
        <div class="card">
          <div class="col-7 position-absolute " style="top:-30px; left: 60%; ">
            <img class="rounded" style="width:50%;" src="./assets/Images/person-1.jpg" alt="">

          </div>
          <div class="card-body mt-4">
            <h4 class="card-title">Aahere Sir</h4>
            <p>
              <b>Education : </b>

              <b>Masters in Agriculture</b>
            </p>
            <p class="card-text">
              <b>Class : </b>5th
              <br>
            </p>
          </div>
        </div>
      </div>
      <!-- =================== card end here ===================  -->
      <!-- =================== tecaher card seven ===================  -->
      <div class="col-lg-3 my-4">
        <div class="card">
          <div class="col-7 position-absolute " style="top:-30px; left: 60%; ">
            <img class="rounded" style="width:50%;" src="./assets/Images/person-1.jpg" alt="">

          </div>
          <div class="card-body mt-4">
            <h4 class="card-title">Archama Mam</h4>
            <p>
              <b>Education : </b>

              <b>Masters in Arts</b>
            </p>
            <p class="card-text">
              <b>Class : </b>6th
              <br>
            </p>
          </div>
        </div>
      </div>
      <!-- =================== card end here ===================  -->

      <!-- =================== tecaher card eight ===================  -->
      <div class="col-lg-3 my-4">
        <div class="card">
          <div class="col-7 position-absolute " style="top:-30px; left: 60%; ">
            <img class="rounded" style="width:50%;" src="./assets/Images/person-1.jpg" alt="">

          </div>
          <div class="card-body mt-4">
            <h4 class="card-title">Pranali Mam</h4>
            <p>
              <b>Education : </b>

              <b>BCA</b>
            </p>
            <p class="card-text">
              <b>Class : </b>7th
              <br>
            </p>
          </div>
        </div>
      </div>
      <!-- =================== card end here ===================  -->

      <!-- =================== tecaher card nine ===================  -->
      <div class="col-lg-3 my-4">
        <div class="card">
          <div class="col-7 position-absolute " style="top:-30px; left: 60%; ">
            <img class="rounded" style="width:50%;" src="./assets/Images/person-1.jpg" alt="">

          </div>
          <div class="card-body mt-4">
            <h4 class="card-title">Shelke Sir</h4>
            <p>
              <b>Education : </b>

              <b>BCS</b>
            </p>
            <p class="card-text">
              <b>Class : </b>8th
              <br>
            </p>
          </div>
        </div>
      </div>
      <!-- =================== card end here ===================  -->

      <!-- =================== tecaher card ten ===================  -->
      <div class="col-lg-3 my-4">
        <div class="card">
          <div class="col-7 position-absolute " style="top:-30px; left: 60%; ">
            <img class="rounded" style="width:50%;" src="./assets/Images/person-1.jpg" alt="">

          </div>
          <div class="card-body mt-4">
            <h4 class="card-title">Aashay Sir</h4>
            <p>
              <b>Education : </b>

              <b>IITian</b>
            </p>
            <p class="card-text">
              <b>Class : </b>9th
              <br>
            </p>
          </div>
        </div>
      </div>
      <!-- =================== card end here ===================  -->

      <!-- =================== tecaher card ten ===================  -->
      <div class="col-lg-3 my-4">
        <div class="card">
          <div class="col-7 position-absolute " style="top:-30px; left: 60%; ">
            <img class="rounded" style="width:50%;" src="./assets/Images/person-1.jpg" alt="">

          </div>
          <div class="card-body mt-4">
            <h4 class="card-title">Rushi Sir</h4>
            <p>
              <b>Education : </b>

              <b>NItian</b>
            </p>
            <p class="card-text">
              <b>Class : </b>10th
              <br>
            </p>
          </div>
        </div>
      </div>
      <!-- =================== card end here ===================  -->



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

          <p class="text-center">Our student's Achievements are our Achievements</p>
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
    <h1 class="text-center">Testimonials from Parents</h1>
    <p class="text-muted">What parent think about our school.</p>
  </div>
  <div class="container">
    <div>
      <div class="row" style="">
        <div class="border rounded col-6 p-1" style="position:relative;">
          <div class="p-3 text-center" style="margin-left:1rem;border-radius:.5rem; box-shadow:4px 4px 8px rgba(0,0,0,0.5);">
            <p> One of the best Schools in India</p>
            <div>
              <p>Parent Name : <b>Aashitosh Pawar</b></p>
              <p>Designation : <b>SDE</b></p>
            </div>
          </div>

          <img src="./assets/Images/person-1.jpg" style="position:absolute; top:50%;left:10%;  border-radius:50%; box-shadow:2px 2px 10px rgba(0,0,0,0.7);" height="40%" alt="">

        </div>
        <div class="border rounded col-6" style="position:relative;">
          <div class="p-3 text-center" style="border-radius:.5rem; box-shadow:4px 4px 8px rgba(0,0,0,0.5);" >
            <p> School is great, but it's just little bit expensive.</p>
            <div>
              <p>Parent Name : <b>Aaditya Patil</b></p>
              <p>Designation : <b> Principle</b> </p>
            </div>
          </div>

          <img src="./assets/Images/person-1.jpg" style="position:absolute; top:50%; left:10%; border-radius:50%; box-shadow:2px 2px 10px rgba(0,0,0,0.7);" height="40%" alt="">

        </div>
      </div>
    </div>


  </div>
</section>

<!-- ====================== footer ======================  -->
<footer style="background: url('./assets/Images/about-us-img-1.jpg');  background-size:cover; background-repeat:no-repeat; background: linear-gradient(rgba(0 ,0 ,0 ,0.1)); ">
  <h1 class="text-center pt-3 ">Important links section</h1>
  <div class="pt-5" style="width:100%;">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4">
          <h4>Useful Links</h4>

          <ul class="fa-ul">
            <li><a class="text-light" href="#"><i class="fa-li fa fa-angle-right"></i>Link </a></li>
            <li><a class="text-light" href="#"><i class="fa-li fa fa-angle-right  "></i>Link </a></li>
            <li><a class="text-light" href="#"><i class="fa-li fa fa-angle-right  "></i>Link </a></li>
            <li><a class="text-light" href="#"><i class="fa-li fa fa-angle-right  "></i>Link </a></li>
            <li><a class="text-light" href="#"><i class="fa-li fa fa-angle-right  "></i>Link </a></li>
            <li><a class="text-light" href="#"><i class="fa-li fa fa-angle-right  "></i>Link </a></li>
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

<!-- ============== Footer section ============= -->
<section style="width:100%; height:4rem; color: black;font-family:sans-serif; font-size:1rem; display:flex; align-items:center; justify-content:space-around;">
  Copyright &#169; 2023. All rights reserved.
</section>
<!-- MDB -->

<?php include('footer.php') ?>
