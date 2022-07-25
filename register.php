<?php include_once("header.php"); ?>

<?php //Check if user is login or not
if($_SESSION['login_user_detail']){
    header('location: '.WEBSITEURL.'customer/dashboard.php'); 
} ?>

 <div class="page-wrapper">
  <section class="page-header">
    <div class="page-header__bg" style="background-image: url(<?php echo WEBSITEURL; ?>images/inner-banner.jpg);"></div>
    <div class="container">
      <h2>Register</h2>
      <ul class="thm-breadcrumb list-unstyled">
        <li>
          <a href="<?php echo WEBSITEURL; ?>">Home </a>
        </li>
        <li>/</li>
        <li>
          <span>Register</span>
        </li>
      </ul>
    </div>
  </section>
  <div class="container">
      <div class="register-page">
        <form action="#" class="contact-form-validated contact-one__form" id="register_form">
          <div class="row">
            <div class="col-md-6">
              <input type="text" id="firstname" name="firstname" placeholder="First Name">
            </div>
            <div class="col-md-6">
              <input type="text" id="lastname" name="lastname" placeholder="Last Name">
            </div>
           
    		<div class="col-md-12">
              <input type="text" id="phone_number" name="phone_number" placeholder="Phone Number">
            </div> 
    		<div class="col-md-12">
              <input type="email" id="email" name="email" placeholder="Email">
            </div>
    		<div class="col-md-12">
                 <select id="gender" name="gender">
                     <option value="Male">Male</option>
                     <option value="Female">Female</option>
                 </select>
    		 </div>
    		<div class="col-md-12">
              <input type="password" id="password" name="password" placeholder="Enter Password*">
            </div>
            <div class="col-md-12">
                <button type="submit" class="loginbtn submit-disable">Register</button>
                <div class="register_form_responce"></div>
              <div class="new-register"><a href="<?php echo WEBSITEURL; ?>login.php">Back to Login</a></div>
            </div>
          </div>
          </form>
       </div>
    </div>
</div> 
<?php include_once("footer.php"); ?>