<?php include('../includes/config.php') ?>
<?php include('header.php') ?>
<?php include('sidebar.php') ?>

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Manage Accounts</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Admin</a></li>
              <li class="breadcrumb-item active"><?php  echo ucfirst($_REQUEST['user']); ?></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="table-responsive">
          <table class="table table-bordered bg-white">
            <thead>
              <tr>
              <th>S. No.</th>
              <th>Name</th>
              <th>Email</th>
              <th>Actions</th>
              </tr>
            </thead>
            <tbody>
                <?php
                  $count = 1;
                 $user_query = 'SELECT * from accounts WHERE `type` = "'.$_REQUEST['user'].'"';
                 $user_result = mysqli_query($db_conn, $user_query);
                 while($users = mysqli_fetch_array($user_result))
                 {
                  ?>
          <tr>
          <td><?=$count++?></td>
          <td><?=$users->name?></td>
          <td><?=$users->name?></td>
          </tr>
           <?php  } ?>
            </tbody>
          </table>
        </div>
        <!-- /.row -->
        
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

<?php include('footer.php') ?>