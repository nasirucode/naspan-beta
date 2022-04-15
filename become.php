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
        <h2 class="title">Membership</h2>
        <ul class="breadcrumbs-custom-path mt-2">
          <li><a href="#url">Home</a></li>
          <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span> Membership </li>
        </ul>
      </div>
    </div>
  </section>
  <!-- //about breadcrumb -->
  <!-- /contact-->
  <div class="contact-form py-5" id="contact">
    <div class="container py-lg-5 py-md-4">
      <h3 class="hny-title mb-lg-5 mb-4">Membership Application Form</h3>
      <div class="contacts12-main mb-5">
        <form action="https://sendmail.w3layouts.com/submitForm" method="post">
          <div class="main-input">
            Personnal Information
            <div class="d-grid">
              <input type="text" name="fname" id="fname" placeholder="First Name" class="contact-input" />
              <input type="text" name="lname" id="lname" placeholder="Last Name" class="contact-input" />
            </div>
            <div class="d-grid">
              <input type="text" name="phone" id="phone" placeholder="Phone Number" class="contact-input" />
              <input type="email" name="email" id="email" placeholder="Your email address" class="contact-input"
                required />
                <div id="emailStatus"></div>
            </div>
            <div class="d-grid">
              <select class="form-control">
                <option value="cat">Select Gender</option>
                <option value="cat">Option one</option>
                <option value="cat">Option one</option>
              </select>
              <input type="password" name="password" id="password" placeholder="Password" class="contact-input"
                required />
            </div>
            <div class="d-grid">
              <select class="form-control">
                <option value="cat">Select Marital Status</option>
                <option value="cat">Single</option>
                <option value="cat">Married</option>
              </select>
              <input type="password" name="cpassword" id="cpassword" placeholder="Confirm Password"
                class="contact-input" required />
            </div>
            <textarea class="contact-textarea" name="residentialAddress" id="residentialAddress"
              placeholder="Residential Address" required></textarea>
            <textarea class="contact-textarea" name="businessAddress" id="businessAddress"
              placeholder="Business Address" required></textarea>
            <div class="d-grid">
              <select class="form-control">
                <option value="cat">Select LGA</option>
                <option value="cat">North</option>
                <option value="cat">South</option>
              </select>
              <select class="form-control">
                <option value="cat">Select State</option>
                <option value="cat">Abia</option>
                <option value="cat">Adamawa</option>
              </select>

            </div>
            <div class="d-grid">
              <select class="form-control">
                <option value="cat">Years of Experience in Shea</option>
                <option value="cat1">1-2 Years</option>
                <option value="cat2">3-5 Years</option>
                <option value="cat2">5-10 Years</option>
                <option value="cat2">10+ Years</option>
              </select>
              <div class="animated-checkbox">
                <h6>Area of Expertise in Shea </h6>
                <label>
                  <input type="checkbox"><span class="label-text"> Buying & Selling</span>
                </label>
                <label>
                  <input type="checkbox"><span class="label-text"> Processing</span>
                </label>
                <label>
                  <input type="checkbox"><span class="label-text"> Exporting</span>
                </label>
                <label>
                  <input type="checkbox"><span class="label-text"> Transporting</span>
                </label>
                <label>
                  <input type="checkbox"><span class="label-text"> Packing</span>
                </label>
                <label>
                  <input type="checkbox"><span class="label-text"> Grinding and Granding</span>
                </label>
              </div>
            </div>
          </div>

          <div class="text-right">
            <button class="btn btn-style btn-secondary btn-contact">Register</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!--//contact-->

  <!--/w3l-footer-29-main-->
  <!--//w3l-bottom-->

  <!--/w3l-footer-29-main-->
  <?php
  include('includes/footer.php');
  ?>
  <!-- //footer-29 block -->
  <?php
  include('includes/scripts.php');
  ?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script>
    $(document).on('input','#email',function(e){
      let emailInput = $('#email').val();
      let msg;
      if(emailInput.length==0){
        msg="<span style='color:red'>Enter Email</span>";
      }
      // else if(!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/).test(emailInput)){
      //   msg="<span style='color:red'>Email is not Valid</span>";
      // }
      else{
        checkEmail(emailInput);
      }
      $('#emailStatus').html(msg);
    });

    function checkEmail(emailInput){
       $.ajax({
        method:"POST",
        url: "email_exist.php",
        data:{emailId:emailInput},
        success: function(data){
          $('#emailStatus').html(data);
        }
      });
    }
  </script>
