<?php include_once("../header.php"); ?>
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
                           <div class="card-block user-info">
                              <div class="col-md-12">
                                 <div class="media-left">
                                    <div class="profile-image">
                                        <?php if($profile_output->data[0]->photoname != null){ ?>
                                    	    <img src="<?php echo $profile_output->data[0]->photo; ?>" class="user-img img-radius" alt="<?php echo $profile_output->data[0]->photoname; ?>">
                                    	<?php } else { ?>
                                    	    <img src="<?php echo WEBSITEURL; ?>/images/dashboard-img/user-img.jpg" class="user-img img-radius" alt="<?php echo $profile_output->data[0]->photoname; ?>">
                                    	<?php } ?>
                                       <div class="mb-0 list-unstyled profile-image-edit" data-fancybox="" data-src="#edit_profile" href="javascript:void(0)"> Change <i class="fas fa-pencil-alt"></i></div>
                                    </div>
                                 </div>
                                 <div class="media-body row">
                                    <div class="col-lg-12">
                                       <div class="user-title pt-4">
                                          <h2><?php echo $profile_output->data[0]->first_name." ".$profile_output->data[0]->last_name; ?></h2>
                                          <span class="text-white">AGENT</span>
                                       </div>
                                    </div>
                                    <div>
                                       <!--<div class="pull-right cover-btn">
                                          <button type="button" class="btn thm-btn m-r-10 m-b-10"><i class="fa fa-plus" aria-hidden="true"></i>Follow</button>
                                          <button type="button" class="btn thm-btn m-b-10"><i class="fa fa-comment" aria-hidden="true"></i>
                                          Message</button>
                                       </div>-->
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="container rounded bg-white mt-5 pb-4">
                  <div class="row">
                     <div class="col-md-12">
                        <form enctype="multipart/form-data" method='POST' id="update_user_profile">
                            <div class="p-3 py-5">
                               <div class="d-flex justify-content-between align-items-center mb-3">
                                  <h4 class="text-right">Profile Settings</h4>
                               </div>
                               <div class="row mt-2">
                                  <div class="col-md-6"><label class="labels">First Name</label><input type="text" id="first_name" name="first_name" class="form-control" placeholder="First Name" value="<?php echo $profile_output->data[0]->first_name; ?>"></div>
                                  <div class="col-md-6"><label class="labels">Last Name</label><input type="text" id="last_name" name="last_name" class="form-control" value="<?php echo $profile_output->data[0]->last_name; ?>" placeholder="Last Name"></div>
                               </div>
                               <div class="row">
                                  <div class="col-md-12 mt-3"><label class="labels">Phone Number</label><input type="text" id="phone_number" name="phone_number" class="form-control" placeholder="Enter phone number" value="<?php echo $profile_output->data[0]->phone_mobile; ?>"></div>
                                  <div class="col-md-12 mt-3"><label class="labels">Address</label><input type="text" id="address" name="address" class="form-control" placeholder="Enter Address" value="<?php echo $profile_output->data[0]->street_address; ?>"></div>
                                  <div class="col-md-12 mt-3"><label class="labels">Email </label><input type="text" id="email" name="email" class="form-control" placeholder="Enter Email Address" value="<?php echo $profile_output->data[0]->email_address; ?>"></div>
                               </div>
                               <div class="row mt-3">
                                  <div class="col-md-6"><label class="labels">Country</label><input type="text" id="country" name="country" class="form-control" placeholder="Country" value="<?php echo $profile_output->data[0]->country; ?>"></div>
                                  <div class="col-md-6"><label class="labels">State/Region</label><input type="text" id="state" name="state" class="form-control" value="<?php echo $profile_output->data[0]->state; ?>" placeholder="State"></div>
                               </div>
                            </div>
                            <div class="text-center">
                                <button class="btn thm-btn submit-disable" type="submit">Update</button>
                                <div class="update_profile_responce pt-4"></div>
                            </div>
                        </form>
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
<section class="form-cont text-center edit-profile-cont" style="display: none;" id="edit_profile">
   <h3 class="fs-4 mb-5">Change Profile Pic</h3>
   <form class="form-popup-cont" enctype="multipart/form-data" method="POST" id="update_user_pic" novalidate="novalidate">
       <div class="mb-4 mb-md-4">
      <input id="upload_profileimage" type="file" name="upload_profileimage">
        </div>
          <button type="submit" class="btn rounded-pill-border w-100 text-white submit_disable thm-btn">Update</button>
          <div class="update_user_pic_res pt-4"></div>
      
   </form>
</section>
<?php include_once("../footer.php");?>