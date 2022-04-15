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
        <h2 class="title">NASPAN Member Dashboard</h2>
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
            <div class="item">
              <div class="card">
                <div class="card-header p-0 position-relative border-0">
                  <a href="blog-single">
                    <img class="card-img-bottom d-block radius-image" src="assets/images/NASPAN-Shea-nut.jpg"
                      alt="NASPAN Shea Nut">
                  </a>
                </div>
                <div class="card-body p-0 blog-details">
                  <h6 class="mt-4">Jan 1, 2022</h6>
                  <a href="#admin" class="admin">- by Admin </a>
                  <br>
                  <a href="blog-single" class="blog-desc">Sustainable Shea production in Nigeria</a>
                  <p>The National Shea Products Association of Nigeria (NASPAN) which is the umbrella body of all practitioners in the Shea sector value chain in Nigeria.</p>
                    <a href="blog-single" class="btn btn-style btn-primary mt-lg-4 mt-3">Read more </a>
                </div>
              </div>
            </div>
            <div class="item mt-5 pt-lg-3">
              <div class="card">
                <div class="card-header p-0 position-relative border-0">
                  <a href="blog-single">
                    <img class="card-img-bottom d-block radius-image" src="assets/images/NASPAN-Shea-belt-nigeria.png"
                      alt="Card image cap">
                  </a>
                </div>
                <div class="card-body p-0 blog-details">
                  <h6 class="mt-4">Jan 22, 2022</h6>
                  <a href="#admin" class="admin">- by Admin </a>
                  <br>
                  <a href="blog-single" class="blog-desc">Sustainable Shea production in Nigeria</a>
                  <p>The National Shea Products Association of Nigeria (NASPAN) which is the umbrella body of all practitioners in the Shea sector value chain in Nigeria.</p>
                    <a href="blog-single" class="btn btn-style btn-primary mt-lg-4 mt-3">Read more </a>
                </div>
              </div>
            </div>
            <div class="item mt-5 pt-lg-3">
              <div class="card">
                <div class="card-header p-0 position-relative border-0">
                  <a href="blog-single">
                    <img class="card-img-bottom d-block radius-image" src="assets/images/NASPAN-president-and-aisha.jpeg"
                      alt="Card image cap">
                  </a>
                </div>
                <div class="card-body p-0 blog-details">
                  <h6 class="mt-4">Jan 22, 2022</h6>
                  <a href="#admin" class="admin">- by Admin </a>
                  <br>
                  <a href="blog-single" class="blog-desc">NASPAN President Recieves Aisha Babangida</a>
                  <p>As part of the build up towards the upcoming NASPAN Conference scheduled to hold from the 24-26th of August 2021, the President of NASAPAN, Mohammed Kontagora today, the 10th of August received the Chairperson of the Better Life for Rural Women in Africa her excellency, Aisha Babangida at the NASPAN Head office in Abuja.</p>
                    <a href="blog-single" class="btn btn-style btn-primary mt-lg-4 mt-3">Read more </a>
                </div>
              </div>
            </div>
            <!-- pagination -->
            <div class="paginarions mt-5 pt-lg-5">
              <ul class="pager">
                <li class="pager__item pager__item--prev"><a class="pager__link" href="#"><span
                      class="fa fa-chevron-left" aria-hidden="true"></span></a></li>
                <li class="pager__item"><a class="pager__link" href="#">...</a></li>
                <li class="pager__item active"><a class="pager__link" href="#">1</a></li>
                <li class="pager__item "><a class="pager__link" href="#">2</a></li>
                <li class="pager__item"><a class="pager__link" href="#">3</a></li>
                <li class="pager__item"><a class="pager__link" href="#">4</a></li>
                <li class="pager__item"><a class="pager__link" href="#">5</a></li>
                <li class="pager__item"><a class="pager__link" href="#">6</a></li>
                <li class="pager__item"><a class="pager__link" href="#">...</a></li>
                <li class="pager__item pager__item--next"><a class="pager__link" href="#"><span
                      class="fa fa-chevron-right" aria-hidden="true"></span></a></li>
              </ul>
            </div>
            <!-- //pagination -->
       

          </div>
          <div class="sidebar-side col-lg-4 col-md-12 col-sm-12 mt-lg-0 mt-5">
            <aside class="sidebar">
              <div class="sidebar-widget sidebar-blog-category">

              <!-- <div class="textwidget mx-auto text-center">
                <a href="#"> <img class="rounded-circle align-center img-fluid" src="assets/images/c1.jpg" alt="user_logo"></a>
                       <div class="sidebar-title">
                        <h4 class="mb-2 mt-3">Jack Harry</h4>
                      </div>
                <p class="text-center px-lg-4">Hi! I`m an authtor of this blog. Read our post - be in trend!</p>
                  <div class="widget-social-icons mt-4">
                    <ul class="column3 social m-0 p-0">
                     
                      <li><a href="#facebook" class="facebook"><span class="fa fa-facebook"></span></a></li>
                      <li><a href="#twitter" class="twitter"><span class="fa fa-twitter"></span></a></li>
                      <li><a href="#linkedin" class="linkedin"><span class="fa fa-linkedin"></span></a></li>
                    </ul>
                  </div>
              </div> -->
              </div>
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
                

                 

                  <!-- Tags Widget-->
                  <div class="sidebar-widget popular-tags">
                    <div class="sidebar-title">
                      <h4>Post Tag</h4>
                    </div>
                    <a href="#url">Agricultural</a>
                    <a href="#url">Organic</a>
                    <a href="#url">Farm</a>
                    <a href="#url">Dairy</a>
                    <a href="#url">Gargen</a>

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