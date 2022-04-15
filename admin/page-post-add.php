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
                <h1><i class="fa fa-dashboard"></i> Blank Page</h1>
                <p>Start a beautiful journey here</p>
            </div>
            <ul class="app-breadcrumb breadcrumb">
                <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
                <li class="breadcrumb-item"><a href="#">Blank Page</a></li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <h3 class="tile-title">New Post </h3>
                    <div class="tile-body">
                        <form>
                            <div class="form-group">
                                <label class="control-label">Post Title</label>
                                <input class="form-control" type="text" placeholder="Enter post Title">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Post Descriptioin</label>
                                <textarea class="form-control" rows="4" placeholder="Enter Meta Description"></textarea>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Cover Picture/Thumbnail</label>
                                <input class="form-control" type="file">
                            </div>
                            <div class="form-group">
                                <label for="post_cat">Post Category</label>
                                <select class="form-control" id="post_cat">
                                    <option>News/Events</option>
                                    <option>Articles</option>
                                    <option>Press Release</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Address</label>
                                <textarea class="form-control" name="editor" id="editor" rows="30"></textarea>
                            </div>
                            <button class="btn btn-primary" type="button"><i class="fa fa-fw fa-lg fa-check-circle"></i>Submit Post</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" href="#"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- Essential javascripts for application to work-->
    <?php
    include('includes/footer.php');
    ?>