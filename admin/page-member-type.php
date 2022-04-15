<?php
session_start();
include('includes/header.php');
include('includes/config.php');
error_reporting(0);
if(strlen($_SESSION['adminlogin'])==0)
  { 
header('location:index.php');
}
?>

  <body class="app sidebar-mini">
    <!-- Navbar-->
    <?php
    include('includes/nav.php');
    ?>
    <!-- Sidebar menu-->
    <?php
    include('includes/sidebar.php');
    ?>
  <main class="app-content">
    <div class="app-title">
      <div>
        <h1><i class="fa fa-dashboard"></i> Membership</h1>
        <p>New Membership Type</p>
      </div>
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item"><a href="#">membership type</a></li>
      </ul>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="tile">
          <h3 class="tile-title">Recent Membership Type</h3>
          <table class="table table-hover table-striped">
            <thead>
              <tr>
                <th>#</th>
                <th>Member Type</th>
                <th>Fee (NGN)</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
                <?php
                $query=mysqli_query($con,"select * from tblmembertype");
                $rowcount=mysqli_num_rows($query);
                if($rowcount==0)
                    {
                    ?>
                <tr>
                    <td colspan="7" align="center"><h3 style="color:red">No record found</h3></td>
                <tr>
                <?php 
                } else {
                    $count = 1;
                    while($row=mysqli_fetch_array($query))
                { 
                ?>
                <tr>
                    <td><?php echo $count; ?></td>
                    <td><?php echo $row['memberType'] ?></td>
                    <td><?php echo $row['fee'] ?></td>
                    <td>
                    <button type="button" class="btn btn-primary"> 
                        <i class="fa fa-edit" aria-hidden="true"></i>
                        Edit
                    </button>
                    <button type="button" class="btn btn-danger"> 
                        <i class="fa fa-trash" aria-hidden="true"></i>
                        Delete
                    </button>
                    </td>
                </tr>
                <?php $count = $count + 1; }  }?>
            </tbody>
          </table>
        </div>
      </div>
      <div class="col-md-6">
        <div class="tile">

          <div class="tile-title-w-btn">
            <h3 class="title">New Membership Type</h3>
            <!-- <p><a class="btn btn-primary icon-btn" href=""><i class="fa fa-plus"></i> </a></p> -->
          </div>
          <div class="tile-body">
            <form action="server/membertype-add" method="post">
              <div class="form-group">
                <label class="control-label">Membership Type</label>
                <div class="form-group">
                  <label class="sr-only" for="exampleInputAmount">Member type</label>
                  <div class="input-group">
                    <input class="form-control" id="exampleInputAmount" name="membertype" type="text" placeholder="Member Type">
                  </div>
                </div>
                <div class="form-group">
                  <label class="sr-only" for="exampleInputAmount">Fee (NGN)</label>
                  <div class="input-group">
                    <input class="form-control" id="exampleInputAmount" name="fee" type="number" placeholder="Membership Fee">
                  </div>
                </div>
                <div class="form-group align-self-end">
                  <button class="btn btn-primary" type="submit" name="add"><i class="fa fa-plus"></i>Add</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="clearfix"></div>
    </div>
    
  </main>
  <!-- Essential javascripts for application to work-->
  <?php
    include('includes/footer.php');
  ?>