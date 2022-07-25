<?php include_once("header.php"); ?> 

<?php //Check if user is login or not
if($_SESSION['login_user_detail']){
    header('location: '.WEBSITEURL.'customer/dashboard.php'); 
} ?>
 <div class="page-wrapper">
  <section class="page-header">
    <div class="page-header__bg" style="background-image: url(<?php echo WEBSITEURL; ?>images/inner-banner.jpg);"></div>
    <div class="container">
      <h2>Login</h2>
      <ul class="thm-breadcrumb list-unstyled">
        <li>
          <a href="<?php echo WEBSITEURL; ?>">Home </a>
        </li>
        <li>/</li>
        <li>
          <span>Login</span>
        </li>
      </ul>
    </div>
  </section>
  <div class="container">
    <form action="#" class="contact-form-validated contact-one__form" id="login_form">
          <div class="login-page">
              <h4>Need to get Proctored?<br>
                Please login and Request a Proctoring Session</h2>
            <div class="col-md-12">
              <input type="text" id="email" name="email" placeholder="Enter Email">
            </div>
            <div class="col-md-12">
              <input type="password" id="password" name="password" placeholder="Enter Password">
            </div>
            <div class="col-md-12">
              <button type="submit" class="loginbtn submit-disable">Login</button>
              <div class="login_form_responce"></div>
              <div class="new-register"><a href="<?php echo WEBSITEURL; ?>register.php">New Here? Register</a></div>
            </div>
          </div>
      </form>
    </div>
</div> 
<?php include_once("footer.php"); ?>