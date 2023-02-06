<?php include('header.php') ?>

<h1 class="text-center">Login page</h1>

<section>
    <div class="bg-primary vh-100 d-flex">
        <div class="col-4 m-auto">
            <div class="card">
                <div class="card-body">
                    <div class=" text-center ">
                        <i class="fa fa-user fa-2x mb-5"></i>
                    </div>
                    <form action="action/login.php" method="POST">
                        <div class="form-outline mb-4">
                            <input type="email" id="email" class="form-control" name="email" />
                            <label class="form-label" for="email">Your Email</label>
                        </div>
                        <div class="form-outline mb-4">
                            <input type="password" id="password" class="form-control" name="email" />
                            <label class="form-label" for="password">Password</label>
                        </div>
                        <div class="text-center">
                            <button class="btn btn-secondary" name="login">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('footer.php') ?>