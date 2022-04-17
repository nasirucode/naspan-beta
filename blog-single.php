<?php 
session_start();
include('includes/config.php');
include('includes/header.php');
?>
<body>
  <!--header-->
  <?php
  include('includes/nav.php');
  ?>
  <!-- //header -->
  <!-- about breadcrumb -->
  <section class="w3l-about-breadcrumb text-left">
    <div class="breadcrumb-bg breadcrumb-bg-about py-sm-5 py-4">
      <div class="container">
        <h2 class="title">NASPAN News</h2>
        <ul class="breadcrumbs-custom-path mt-2">
          <li><a href="#url">Home</a></li>
          <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span> News </li>
        </ul>
      </div>
    </div>
  </section>
  <!-- //about breadcrumb -->
  <!--/blog-->
  <section class="w3l-text-11 py-5">
    <div class="text11 py-md-5 py-4">
      <div class="container">
        <div class="row">

          <div class="col-lg-8 text11-content">
            <?php
              $pid=intval($_GET['nid']);
              $query=mysqli_query($con,"select tblposts.PostTitle as posttitle,tblposts.PostImage,tblcategory.CategoryName as category,tblcategory.id as cid,tblsubcategory.Subcategory as subcategory,tblposts.PostDetails as postdetails,tblposts.PostingDate as postingdate,tblposts.PostUrl as url from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId where tblposts.id='$pid'");
              while ($row=mysqli_fetch_array($query)) {
            ?>
            <img src="admin/postimages/<?php echo htmlentities($row['PostImage']);?>" alt="<?php echo htmlentities($row['posttitle']);?>" class="img-fluid">
            <h4 class=""><?php echo htmlentities($row['posttitle']);?></h4>
            <h6>J<?php echo htmlentities($row['postingdate']);?></h6>
            <a href="#admin" class="admin">- by Admin</a>
            <p class="mt-4 mb-3"><?php echo htmlentities($row['postdetails']);?></p>
               
            <h5 class="quote">
              <?php echo htmlentities($row['posttitle']);?>
              <footer class="blockquote-footer mt-3"> NASPAN </footer>
            </h5>
            <div class="social-share-blog mt-5">
              <ul class="column3 social m-0 p-0">
                <li>
                  <p class="m-0 mr-4">Share this post :</p>
                </li>
                <li><a href="#facebook" class="facebook"><span class="fa fa-facebook"></span></a></li>
                <li><a href="#twitter" class="twitter"><span class="fa fa-twitter"></span></a></li>
                <li><a href="#instagram" class="instagram"><span class="fa fa-instagram"></span></a></li>
              </ul>
            </div>
            <?php } ?>
            <div class="comments">
              <h3 class="aside-title ">Recent comments</h3>
              <div class="comments-grids">
                <div class="media-grid">
                  <div class="media">
                    <a class="comment-img" href="#url"><img src="assets/images/naspan_user.jpg" class="img-fluid"
                        width="100px" alt="placeholder image"></a>
                    <div class="media-body comments-grid-right">
                      <h5>Musa Muhammed</h5>
                      <ul class="p-0 comment">
                        <li class="">June 17th, 2020 at 11:00 am</li>
                        <li>
                          <a href="#comment" class="replay"> Reply</a>
                        </li>
                      </ul>
                      <p>Nice post.</p>

                    </div>
                  </div>
                </div>
                <div class="media-grid">
                  <div class="media">
                    <a class="comment-img" href="#url"><img src="assets/images/naspan_user.jpg" class="img-fluid"
                        width="100px" alt="placeholder image"></a>
                    <div class="media-body comments-grid-right">
                      <h5>Aminu Ibrahim</h5>
                      <ul class="p-0 comment">
                        <li class="">June 17th, 2021 at 05:45 pm </li>
                        <li>
                          <a href="#comment" class="replay"> Reply</a>
                        </li>
                      </ul>
                      <p>Nice
                      </p>
                      <div class="media mt-4 mb-0 border-0 px-0">
                        <a class="comment-img" href="#url"><img src="assets/images/naspan_user.jpg" class="img-fluid"
                            width="100px" alt="placeholder image"></a>
                        <div class="media-body comments-grid-right">
                          <h5>Prince George</h5>
                          <ul class="p-0 comment">
                            <li class="">June 17th, 2021 at 11:00 am</li>
                            <li>
                              <a href="#comment" class="replay"> Reply</a>
                            </li>
                          </ul>
                          <p>Go NASPAN.</p>

                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="leave-comment-form" id="comment">
              <h3 class="aside-title">Add Your Comment</h3>
              <form action="#" method="post">
                <div class="input-grids">
                  <div class="row">
                    <div class="form-group col-lg-4">
                      <input type="text" name="Name" class="form-control" placeholder="Name" required="">
                    </div>
                    <div class="form-group col-lg-4">
                      <input type="email" name="Email" class="form-control" placeholder="Email" required="">
                    </div>
                    <div class="form-group col-lg-4">
                      <input type="text" name="Website" class="form-control" placeholder="Website">
                    </div>
                  </div>
                  <div class="form-group">
                    <textarea name="Comment" class="form-control" placeholder="Your Comment" required=""></textarea>
                  </div>
                  
                </div>
                <div class="submit text-right">
                  <button class="btn btn-style btn-primary">Post Comment
                  </button></div>
              </form>
            </div>
         

          </div>
          <div class="sidebar-side col-lg-4 col-md-12 col-sm-12 mt-lg-0 mt-5">
            <aside class="sidebar">
              <!-- <div class="sidebar-widget sidebar-blog-category">

              <div class="textwidget mx-auto text-center">
                <a href="#"> <img class="rounded-circle align-center img-fluid" src="assets/images/naspan_user.jpg" alt="user_logo" width="100px"></a>
                       <div class="sidebar-title">
                        <h4 class="mb-2 mt-3">Admin Admin</h4>
                      </div>
                <p class="text-center px-lg-4">Original </p>
                  <div class="widget-social-icons mt-4">
                    <ul class="column3 social m-0 p-0">
                     
                      <li><a href="#facebook" class="facebook"><span class="fa fa-facebook"></span></a></li>
                      <li><a href="#twitter" class="twitter"><span class="fa fa-twitter"></span></a></li>
                      <li><a href="#linkedin" class="linkedin"><span class="fa fa-linkedin"></span></a></li>
                    </ul>
                  </div>
              </div>
              </div> -->
              <!--Blog Category Widget-->
              <div class="sidebar-widget sidebar-blog-category">
                <div class="sidebar-title">
                  <h4>Search here</h4>
                </div>
              <form action="#" class="search-form" method="post">
                <input type="search" name="search" placeholder="Search..." required="">
                <button><span class="fa fa-search"></span></button>
              </form>
            </div>
              <!-- Popular Post Widget-->
              <div class="sidebar-widget popular-posts">
                <div class="sidebar-title">
                  <h4>Latest Updates</h4>
                </div>
    
                <article class="post">
                  <figure class="post-thumb"><img src="assets/images/NASPAN-Shea-nut.jpg" alt=""></figure>
                  <div class="text"><a href="">Sustainable Shea production in Nigeria</a>
                  </div>
                  <div class="post-info">Sept. 4, 2021</div>
                </article>
    
                <article class="post">
                  <figure class="post-thumb"><img src="assets/images//NASPAN-Shea-belt-nigeria.png" alt=""></figure>
                  <div class="text"><a href="blog-single">Being The Communique Issued at the End
                    </a></div>
                  <div class="post-info">Sept. 1, 2021</div>
                </article>
    
                <article class="post">
                  <figure class="post-thumb"><img src="assets/images/NASPAN-president-and-aisha.jpeg" alt=""></figure>
                  <div class="text"><a href="blog-single">NASPAN President Recieves Aisha Babangida</a>
                  </div>
                  <div class="post-info">Aug. 11, 2021</div>
                </article>
    
              </div>
              <!-- sidebar sticky -->
              <div class="sidebar-sticky">
                <div class="sidebar-sticky-fix">
                  <!--Blog Category Widget-->
           
                  <!--Gallery Widget-->
                  <!-- Tags Widget-->
                  <div class="sidebar-widget popular-tags">
                    <div class="sidebar-title">
                      <h4>Our Tags</h4>
                    </div>
                    <a href="#url">Agricultural</a>
                    <a href="#url">Organic</a>
                    <a href="#url">Farm</a>
                    <a href="#url">Dairy</a>
                    <a href="#url">Gargen</a>
                    <a href="#url">Milk</a>
                    <a href="#url">Eggs</a>
                   
                  </div>
            
                  <!-- Subscribe Widget-->
            
                </div>
              </div>
              <!-- //sidebar sticky -->

            </aside>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- //single post -->
  <!--//blog-->
  <!--/w3l-footer-29-main-->
  <?php
  include('includes/footer.php');
  ?>
  <!-- //footer-29 block -->
  <?php
  include('includes/scripts.php');
  ?>