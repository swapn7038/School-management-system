<?php include('../includes/config.php') ?>
<?php include('header.php') ?>
<?php include('sidebar.php') ?>
<style>
    .form-group{
        display: flex;
        flex-direction:column;
        justify-content:center;
        width:100%;
    }
</style>
 <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Manage Classes</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Admin</a></li>
              <li class="breadcrumb-item active">Classes</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <section class="content">
      <div class="container-fluid">
        <?php
      if (isset($_REQUEST['action'])) { ?>
        <div class="card ">
        <div class="card-header m-3">
        <h3 class="card-title">Add New Class</h3>
        </div>
        <div class="card-body">
           <form action="">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" placeholder="Title" required class="form-controller">
                <label for="title">Section</label>
                <?php 
                $query = mysqli_query($db_conn, 'SELECT * from sections');
                while($sections = mysqli_fetch_object($query)){ ?>
                  <label for="<?=$count++?>">
                  <input type="checkbox" id="<?=$count++?>" name="section[]" placeholder="Section">
                  <?=$sections->title?></label>              
                <?php 
            } ?>
             </div>
             <button class="btn btn-success">
                Submit
             </button>
           </form>
        </div>
    </div>
     <?php } else { ?>
        <?php } ?>
      </div>
    </section>
<?php include('footer.php') ?>