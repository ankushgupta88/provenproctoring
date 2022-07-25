<?php include_once("../header.php"); ?>

<?php //Check if user is login or not
if(empty($_SESSION['login_user_detail'])){
    header('location: '.WEBSITEURL); 
} ?>
	<section class="gray pt-5 pb-5">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-3 col-md-4">
					<?php include_once("sidebar.php"); ?>
				</div>
				<div class="col-lg-9 col-md-8">
					<div class="dashboard-body">
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12">
								<h4>Your Current Package: <span class="pc-title theme-cl">Gold Package</span></h4> </div>
						</div>
						<div class="row">
							<div class="col-md-4 col-sm-6">
								<div class="dashboard_stats_wrap widget-1">
									<div class="dashboard_stats_wrap_content">
										<h4>607</h4> <span>Listed</span></div>
									<div class="dashboard_stats_wrap-icon"><i class="ti-location-pin"></i></div>
								</div>
							</div>
							<div class="col-md-4 col-sm-6">
								<div class="dashboard_stats_wrap widget-3">
									<div class="dashboard_stats_wrap_content">
										<h4>$10,540</h4> <span>Earned This Week</span></div>
									<div class="dashboard_stats_wrap-icon"><i class="ti-wallet"></i></div>
								</div>
							</div>
							<div class="col-md-4 col-sm-6">
								<div class="dashboard_stats_wrap widget-2">
									<div class="dashboard_stats_wrap_content">
										<h4>5,40580</h4> <span>Earned This Month</span></div>
									<div class="dashboard_stats_wrap-icon"><i class="ti-credit-card"></i></div>
								</div>
							</div>
						</div>
						<!--  row -->
						<div class="row">
							<div class="col-lg-8 col-md-7 col-sm-12">
								<div class="card">
									<div class="card-header">
										<h4 class="mb-0">Order Status</h4> </div>
									<div class="card-body p-0">
										<div class="table-responsive">
											<table class="table table-lg table-hover">
												<thead>
													<tr>
														<th>Name</th>
														<th>Product ID</th>
														<th>Status</th>
														<th>Price</th>
														<th>Date Created</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>
															<a href="#"><img src="<?php echo WEBSITEURL; ?>images/products/bioglovekitspray.jpg" class="avatar avatar-30 mr-2" alt="Bioglove Handwash 1">Bioglove Handwash 1</a>
														</td>
														<td>#258475</td>
														<td>
															<div class="label text-success bg-success-light">Paid</div>
														</td>
														<td>$ 310</td>
														<td>04/10/2013</td>
													</tr>
													<tr>
														<td>
															<a href="#"><img src="<?php echo WEBSITEURL; ?>images/products/bioglovespray.jpg" class="avatar avatar-30 mr-2" alt="Bioglove spray2">Bioglove spray2</a>
														</td>
														<td>#249578</td>
														<td>
															<div class="label text-warning bg-warning-light">Pending</div>
														</td>
														<td>$ 584.14</td>
														<td>05/08/2014</td>
													</tr>
													<tr>
														<td>
															<a href="#"><img src="<?php echo WEBSITEURL; ?>images/products/pcr-kit.jpg" class="avatar avatar-30 mr-2" alt="PCR Kit 1">PCR Kit 1</a>
														</td>
														<td>#248712</td>
														<td>
															<div class="label text-danger bg-danger-light">Cancel</div>
														</td>
														<td>$ 710.5</td>
														<td>11/05/2015</td>
													</tr>
													<tr>
														<td>
															<a href="#"><img src="<?php echo WEBSITEURL; ?>images/products/bioglovehandwash.png" class="avatar avatar-30 mr-2" alt="Bioglove Kit Spray 1">Bioglove Kit Spray 1</a>
														</td>
														<td>#287246</td>
														<td>
															<div class="label text-success bg-success-light">Paid</div>
														</td>
														<td>$ 482.70</td>
														<td>06/09/2016</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-5 col-sm-12">
								<div class="card mb-0">
									<div class="card-header">
										<h6>Notifications</h6> </div>
									<div class="ground-list ground-list-hove">
										<div class="ground ground-single-list">
											<a href="#">
												<div class="btn-circle-40 theme-cl theme-bg-light"><i class="fa fa-thumbs-up"></i></div>
											</a>
											<div class="ground-content">
												<h6><a href="#">Your listing <strong>Azreal Modern</strong> has been approved!.</a></h6> <span class="small">Just Now</span> </div>
										</div>
										<div class="ground ground-single-list">
											<a href="#">
												<div class="btn-circle-40 theme-cl theme-bg-light"><i class="fa fa-star" aria-hidden="true"></i></div>
											</a>
											<div class="ground-content">
												<h6><a href="#">Litha Lynes left a review on <strong>Renovated Apartment</strong></a></h6> <span class="small">20 min ago</span> </div>
										</div>
										<div class="ground ground-single-list">
											<a href="#">
												<div class="btn-circle-40 theme-cl theme-bg-light"><i class="fa fa-eye" aria-hidden="true"></i></div>
											</a>
											<div class="ground-content">
												<h6><a href="#">Someone bookmark your View listing!<strong>Sargun Villa Bay</strong></a></h6> <span class="small">1 day ago</span> </div>
										</div>
										<div class="ground ground-single-list">
											<a href="#">
												<div class="btn-circle-40 theme-cl theme-bg-light"><i class="fa fa-thumbs-up"></i></div>
											</a>
											<div class="ground-content">
												<h6><a href="#">Your listing <strong>Modern Family Home</strong> has been approved!.</a></h6> <span class="small">10 days ago</span> </div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- row -->
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
							<h3>Do You Have Questions ?</h3> <span>We'll help you to grow your career and growth.</span> </div> <a href="<?php echo WEBSITEURL; ?>contact.php" class="btn thm-btn bg-white">Contact Us Today</a> </div>
				</div>
			</div>
		</div>
	</section>
	<?php include_once("../footer.php");?>