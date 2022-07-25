<?php include_once("header.php"); ?>
<section class="gray pt-5 pb-5">
   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-3 col-md-4 col-sm-12">
            <?php include_once("sidebar.php"); ?>
         </div>
         <div class="col-lg-9 col-md-8 col-sm-12 dash-profile-cont">
            <div class="dashboard-body">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="cover-profile">
                        <div class="profile-bg-img">
                           <img class="profile-bg-img img-fluid" src="<?php echo WEBSITEURL; ?>images/user-profile-bg.jpg" alt="bg-img">
                           <div class="card-block user-info">
                              <div class="col-md-12">
                                 <div class="media-left">
                                    <a href="#" class="profile-image">
                                    <img class="user-img img-radius" src="<?php echo WEBSITEURL; ?>/images/dashboard-img/user-img.jpg" alt="user-img">
                                    </a>
                                 </div>
                                 <div class="media-body row">
                                    <div class="col-lg-12">
                                       <div class="user-title">
                                          <h2>Amelly</h2>
                                          <span class="text-white">CEO</span>
                                       </div>
                                    </div>
                                    <div>
                                       <div class="pull-right cover-btn">
                                          <button type="button" class="btn thm-btn m-r-10 m-b-10"><i class="icofont icofont-plus"></i> Follow</button>
                                          <button type="button" class="btn thm-btn m-b-10"><i class="icofont icofont-ui-messaging"></i> Message</button>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="container rounded bg-white mt-5 mb-5 pb-5">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="p-3 py-5">
                           <div class="d-flex justify-content-between align-items-center mb-3">
                              <h4 class="text-right">Profile Settings</h4>
                           </div>
                           <div class="row mt-2">
                              <div class="col-md-6"><label class="labels">Name</label><input type="text" class="form-control" placeholder="first name" value=""></div>
                              <div class="col-md-6"><label class="labels">Surname</label><input type="text" class="form-control" value="" placeholder="surname"></div>
                           </div>
                           <div class="row mt-3">
                              <div class="col-md-12"><label class="labels">PhoneNumber</label><input type="text" class="form-control" placeholder="enter phone number" value=""></div>
                              <div class="col-md-12"><label class="labels">Address</label><input type="text" class="form-control" placeholder="enter address" value=""></div>
                              <div class="col-md-12"><label class="labels">Email ID</label><input type="text" class="form-control" placeholder="enter email id" value=""></div>
                              <div class="col-md-12"><label class="labels">Education</label><input type="text" class="form-control" placeholder="education" value=""></div>
                           </div>
                           <div class="row mt-3">
                              <div class="col-md-6"><label class="labels">Country</label><input type="text" class="form-control" placeholder="country" value=""></div>
                              <div class="col-md-6"><label class="labels">State/Region</label><input type="text" class="form-control" value="" placeholder="state"></div>
                           </div>
                        </div>
                        <div class="text-center"><button class="btn thm-btn" type="button">Save Profile</button></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   </div>
   </div>
   </div>
</section>
<section class="theme-bg call_action_wrap-wrap">
   <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <div class="call_action_wrap">
               <div class="call_action_wrap-head">
                  <h3>Do You Have Questions ?</h3>
                  <span>We'll help you to grow your career and growth.</span> 
               </div>
               <a href="<?php echo WEBSITEURL; ?>contactus.php" class="btn thm-btn bg-white">Contact Us Today</a> 
            </div>
         </div>
      </div>
   </div>
</section>
<?php include_once("footer.php"); ?>