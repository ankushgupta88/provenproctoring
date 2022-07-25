<?php include_once("header.php"); ?>

<?php //Check if cart is empty or not
if(empty($_SESSION["shopping_cart"])){
    header('location: '.WEBSITEURL.'products.php');
}
?>
	<div class="page-wrapper">
		<section class="page-header">
		  <div class="page-header__bg" style="background-image: url(<?php echo WEBSITEURL; ?>images/inner-banner.jpg);"></div>
			<div class="container">
				<h2>Checkout</h2>
				<ul class="thm-breadcrumb list-unstyled">
					<li><a href="<?php echo WEBSITEURL; ?>">Home</a></li>
					<li>/</li>
					<li><span>Checkout</span></li>
				</ul>
			</div>
		</section>
		<section class="checkout-page">
			<div class="container">
				<p>Returning Customer? <a href="<?php echo WEBSITEURL; ?>login.php">Click here to Login</a></p>
				<form action="#" class="contact-form-validated contact-one__form" id="checkout_form">
				<div class="row">
					<div class="col-lg-6">
							<div class="row">	
							  <div class="col-md-6"><h3>Billing Information</h3></div>
							  <div class="col-md-6"></div>
								<div class="col-md-6">								
								 <label>First Name:</label>
									<input type="text" id="fname" name="fname" placeholder="First Name*">
								</div>
								<div class="col-md-6">
								 <label>Last Name:</label>
									<input type="text" id="lname" name="lname" placeholder="Last Name*">
								</div>
								<div class="col-md-12">
								 <label>Email Address:</label>
									<input type="email" placeholder="Email Address*" id="email" name="email">
								</div>
								<div class="col-md-12">
								 <label>Phone Number:</label>
									<input type="text" id="phone_number" name="phone_number" placeholder="Phone Number*">
								</div>
								<div class="col-md-12">
								 <label>Street Address:</label>
									<input type="text" id="street_address" name="street_address" placeholder="Street Address*">
								</div>
								<div class="col-md-12">
								 <label>Street Address 2:</label>
									<input type="text" id="street_address2" name="street_address2" placeholder="Address Line 2">
								</div>							
								<div class="col-md-6">
								 <label>City:</label>
									<input type="text" id="city" name="city" placeholder="City*">
								</div>
								<div class="col-md-6">
								 <label>State:</label>
									<input type="text" placeholder="State*" id="state" name="state">
								</div>
								<div class="col-md-6">
								 <label>Zip Code:</label>
									<input type="text" placeholder="Zip Code*" id="zip_code" name="zip_code" maxlength="6" onkeypress="return onlyNumber(event)">
								</div>
								<div class="col-md-6">
								 <label>Country:</label>
								<select name="billing_country" id="billing_country" class="form-control valid">
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Albania">Albania</option>
                                            <option value="Algeria">Algeria</option>
                                            <option value="Andorra">Andorra</option>
                                            <option value="Angola">Angola</option>
                                            <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                            <option value="Argentina">Argentina</option>
                                            <option value="Armenia">Armenia</option>
                                            <option value="Austria">Austria</option>
                                            <option value="Azerbaijan">Azerbaijan</option>
                                            <option value="Bahrain">Bahrain</option>
                                            <option value="Bangladesh">Bangladesh</option>
                                            <option value="Barbados">Barbados</option>
                                            <option value="Belarus">Belarus</option>
                                            <option value="Belgium">Belgium</option>
                                            <option value="Belize">Belize</option>
                                            <option value="Benin">Benin</option>
                                            <option value="Bhutan">Bhutan</option>
                                            <option value="Bolivia">Bolivia</option>
                                            <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                            <option value="Botswana">Botswana</option>
                                            <option value="Brazil">Brazil</option>
                                            <option value="Brunei">Brunei</option>
                                            <option value="Bulgaria">Bulgaria</option>
                                            <option value="Burkina Faso">Burkina Faso</option>
                                            <option value="Burundi">Burundi</option>
                                            <option value="Cabo Verde">Cabo Verde</option>
                                            <option value="Cambodia">Cambodia</option>
                                            <option value="Cameroon">Cameroon</option>
                                            <option value="Canada">Canada</option>
                                            <option value="Central African Republic">Central African Republic</option>
                                            <option value="Chad">Chad</option>
                                            <option value="Channel Islands">Channel Islands</option>
                                            <option value="Chile">Chile</option>
                                            <option value="China">China</option>
                                            <option value="Colombia">Colombia</option>
                                            <option value="Comoros">Comoros</option>
                                            <option value="Congo">Congo</option>
                                            <option value="Costa Rica">Costa Rica</option>
                                            <option value="Côte d'Ivoire">Côte d'Ivoire</option>
                                            <option value="Croatia">Croatia</option>
                                            <option value="Cuba">Cuba</option>
                                            <option value="Cyprus">Cyprus</option>
                                            <option value="Czech Republic">Czech Republic</option>
                                            <option value="Denmark">Denmark</option>
                                            <option value="Djibouti">Djibouti</option>
                                            <option value="Dominica">Dominica</option>
                                            <option value="Dominican Republic">Dominican Republic</option>
                                            <option value="DR Congo">DR Congo</option>
                                            <option value="Ecuador">Ecuador</option>
                                            <option value="Egypt">Egypt</option>
                                            <option value="El Salvador">El Salvador</option>
                                            <option value="Equatorial Guinea">Equatorial Guinea</option>
                                            <option value="Eritrea">Eritrea</option>
                                            <option value="Estonia">Estonia</option>
                                            <option value="Eswatini">Eswatini</option>
                                            <option value="Ethiopia">Ethiopia</option>
                                            <option value="Faeroe Islands">Faeroe Islands</option>
                                            <option value="Finland">Finland</option>
                                            <option value="France">France</option>
                                            <option value="French Guiana">French Guiana</option>
                                            <option value="Gabon">Gabon</option>
                                            <option value="Gambia">Gambia</option>
                                            <option value="Georgia">Georgia</option>
                                            <option value="Germany">Germany</option>
                                            <option value="Ghana">Ghana</option>
                                            <option value="Gibraltar">Gibraltar</option>
                                            <option value="Greece">Greece</option>
                                            <option value="Grenada">Grenada</option>
                                            <option value="Guatemala">Guatemala</option>
                                            <option value="Guinea">Guinea</option>
                                            <option value="Guinea-Bissau">Guinea-Bissau</option>
                                            <option value="Guyana">Guyana</option>
                                            <option value="Haiti">Haiti</option>
                                            <option value="Holy See">Holy See</option>
                                            <option value="Honduras">Honduras</option>
                                            <option value="Hong Kong">Hong Kong</option>
                                            <option value="Hungary">Hungary</option>
                                            <option value="Iceland">Iceland</option>
                                            <option value="India">India</option>
                                            <option value="Indonesia">Indonesia</option>
                                            <option value="Iran">Iran</option>
                                            <option value="Iraq">Iraq</option>
                                            <option value="Ireland">Ireland</option>
                                            <option value="Isle of Man">Isle of Man</option>
                                            <option value="Israel">Israel</option>
                                            <option value="Italy">Italy</option>
                                            <option value="Jamaica">Jamaica</option>
                                            <option value="Japan">Japan</option>
                                            <option value="Jordan">Jordan</option>
                                            <option value="Kazakhstan">Kazakhstan</option>
                                            <option value="Kenya">Kenya</option>
                                            <option value="Kuwait">Kuwait</option>
                                            <option value="Kyrgyzstan">Kyrgyzstan</option>
                                            <option value="Laos">Laos</option>
                                            <option value="Latvia">Latvia</option>
                                            <option value="Lebanon">Lebanon</option>
                                            <option value="Lesotho">Lesotho</option>
                                            <option value="Liberia">Liberia</option>
                                            <option value="Libya">Libya</option>
                                            <option value="Liechtenstein">Liechtenstein</option>
                                            <option value="Lithuania">Lithuania</option>
                                            <option value="Luxembourg">Luxembourg</option>
                                            <option value="Macao">Macao</option>
                                            <option value="Madagascar">Madagascar</option>
                                            <option value="Malawi">Malawi</option>
                                            <option value="Malaysia">Malaysia</option>
                                            <option value="Maldives">Maldives</option>
                                            <option value="Mali">Mali</option>
                                            <option value="Malta">Malta</option>
                                            <option value="Mauritania">Mauritania</option>
                                            <option value="Mauritius">Mauritius</option>
                                            <option value="Mayotte">Mayotte</option>
                                            <option value="Mexico">Mexico</option>
                                            <option value="Moldova">Moldova</option>
                                            <option value="Monaco">Monaco</option>
                                            <option value="Mongolia">Mongolia</option>
                                            <option value="Montenegro">Montenegro</option>
                                            <option value="Morocco">Morocco</option>
                                            <option value="Mozambique">Mozambique</option>
                                            <option value="Myanmar">Myanmar</option>
                                            <option value="Namibia">Namibia</option>
                                            <option value="Nepal">Nepal</option>
                                            <option value="Netherlands">Netherlands</option>
                                            <option value="Nicaragua">Nicaragua</option>
                                            <option value="Niger">Niger</option>
                                            <option value="Nigeria">Nigeria</option>
                                            <option value="North Korea">North Korea</option>
                                            <option value="North Macedonia">North Macedonia</option>
                                            <option value="Norway">Norway</option>
                                            <option value="Oman">Oman</option>
                                            <option value="Pakistan">Pakistan</option>
                                            <option value="Panama">Panama</option>
                                            <option value="Paraguay">Paraguay</option>
                                            <option value="Peru">Peru</option>
                                            <option value="Philippines">Philippines</option>
                                            <option value="Poland">Poland</option>
                                            <option value="Portugal">Portugal</option>
                                            <option value="Qatar">Qatar</option>
                                            <option value="Réunion">Réunion</option>
                                            <option value="Romania">Romania</option>
                                            <option value="Russia">Russia</option>
                                            <option value="Rwanda">Rwanda</option>
                                            <option value="Saint Helena">Saint Helena</option>
                                            <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                            <option value="Saint Lucia">Saint Lucia</option>
                                            <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                                            <option value="San Marino">San Marino</option>
                                            <option value="Sao Tome &amp; Principe">Sao Tome &amp; Principe</option>
                                            <option value="Saudi Arabia">Saudi Arabia</option>
                                            <option value="Senegal">Senegal</option>
                                            <option value="Serbia">Serbia</option>
                                            <option value="Seychelles">Seychelles</option>
                                            <option value="Sierra Leone">Sierra Leone</option>
                                            <option value="Singapore">Singapore</option>
                                            <option value="Slovakia">Slovakia</option>
                                            <option value="Slovenia">Slovenia</option>
                                            <option value="Somalia">Somalia</option>
                                            <option value="South Africa">South Africa</option>
                                            <option value="South Korea">South Korea</option>
                                            <option value="South Sudan">South Sudan</option>
                                            <option value="Spain">Spain</option>
                                            <option value="Sri Lanka">Sri Lanka</option>
                                            <option value="State of Palestine">State of Palestine</option>
                                            <option value="Sudan">Sudan</option>
                                            <option value="Suriname">Suriname</option>
                                            <option value="Sweden">Sweden</option>
                                            <option value="Switzerland">Switzerland</option>
                                            <option value="Syria">Syria</option>
                                            <option value="Taiwan">Taiwan</option>
                                            <option value="Tajikistan">Tajikistan</option>
                                            <option value="Tanzania">Tanzania</option>
                                            <option value="Thailand">Thailand</option>
                                            <option value="The Bahamas">The Bahamas</option>
                                            <option value="Timor-Leste">Timor-Leste</option>
                                            <option value="Togo">Togo</option>
                                            <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                            <option value="Tunisia">Tunisia</option>
                                            <option value="Turkey">Turkey</option>
                                            <option value="Turkmenistan">Turkmenistan</option>
                                            <option value="Uganda">Uganda</option>
                                            <option value="Ukraine">Ukraine</option>
                                            <option value="United Arab Emirates">United Arab Emirates</option>
                                            <option value="United Kingdom">United Kingdom</option>
                                            <option value="United States" selected="">United States</option>
                                            <option value="United States of America">United States of America</option>
                                            <option value="Uruguay">Uruguay</option>
                                            <option value="Uzbekistan">Uzbekistan</option>
                                            <option value="Venezuela">Venezuela</option>
                                            <option value="Vietnam">Vietnam</option>
                                            <option value="Western Sahara">Western Sahara</option>
                                            <option value="Yemen">Yemen</option>
                                            <option value="Zambia">Zambia</option>
                                            <option value="Zimbabwe">Zimbabwe</option>
                                          </select>
								</div>	
                             <div class="col-md-12">
							  <label>Credit Card Number</label>
									<input type="text" id="card_number" name="card_number" placeholder="Credit Card Number" maxlength="16" onkeypress="return onlyNumber(event)">
								</div>	
                         <div class="col-md-4">
						 <label>Card Expiration Date</label>
									 <select id="cc_expmonth" name="cc_expmonth" alt="Exp Month" class="form-control form-select">
                                                   <option value="" selected="" disabled="">Month</option>
                                                   <option value="01">(01) January</option>
                                                   <option value="02">(02) February</option>
                                                   <option value="03">(03) March</option>
                                                   <option value="04">(04) April</option>
                                                   <option value="05">(05) May</option>
                                                   <option value="06">(06) June</option>
                                                   <option value="07">(07) July</option>
                                                   <option value="08">(08) August</option>
                                                   <option value="09">(09) September</option>
                                                   <option value="10">(10) October</option>
                                                   <option value="11">(11) November</option>
                                                   <option value="12">(12) December</option>
                                                </select>
								</div>                         
								<div class="col-md-4">
								<label style="visibility:hidden">test</label>
									<select name="cc_expyear" id="cc_expyear" alt="Exp Year" class="form-control form-select" autocomplete="cc-exp-year">
                                                   <option value="" selected="" disabled="">Year</option>
                                                   <option value="2022">2022</option>
                                                   <option value="2023">2023</option>
                                                   <option value="2024">2024</option>
                                                   <option value="2025">2025</option>
                                                   <option value="2026">2026</option>
                                                   <option value="2027">2027</option>
                                    </select>
								</div>                         
								<div class="col-md-4">
								    <label>Verification Code</label>
									<input type="text" id="ccv_code" name="ccv_code" placeholder="CCV Code" maxlength="4" onkeypress="return onlyNumber(event)">
								</div>	
							</div>
					</div>

				<div class="col-md-6">
    				<?php 
                    $total = 0;
                    $sub_total = 0;
                    $shiping_total = 0;
                    if(!empty($_SESSION["shopping_cart"])){ ?>
				        <div class="order-details__top">
							<p>Product</p>
							<p>Price</p>
						</div>
						<?php foreach($_SESSION["shopping_cart"] as $keys => $values){ ?>
				            <div class="col-md-12 cart-box mb-3">
								<div class="row">
									<div class="col-md-3 col-xs-4 col-4">
										<img src="<?php echo $values["product_image"]; ?>" alt="<?php echo $values["product_image_name"]; ?>" class="img-responsive cart-thumb">
									</div>
									<div class="col-md-6 col-xs-8 col-8">
										<div><?php echo $values["name"]; ?></div>
										<div class="qty"> Qty <?php echo $values["quantity"]; ?></div>
									</div>
									<div class="col-md-3 col-xs-8 col-8">
										<div class="cart-price2">
											<span>$<?php echo $values["price"]; ?></span>
										</div>
									</div>
								</div>
							</div>
							<?php //sub total and total cal
                            $sub_total = $sub_total + ($values["quantity"] * $values["price"]);
                             $total = $total + ($values["quantity"] * $values["price"]); ?>
						<?php } ?>
					<?php } ?>
								
					<div class="col-md-12">
						<div class="order-details">
							<p>
								<span>Subtotal</span>
								<span>$<?php echo number_format($sub_total, 2); ?></span>
							</p>
							<p>
								<span>Shipping</span>
								<span>$<?php echo number_format($shiping_total, 2); ?></span>
							</p>
							<p class="grand-total">
								<span>Grand Total</span>
								<span>$<?php echo number_format($total, 2); ?></span>
							</p>
						</div>
						<div class="text-right">
						    <input type="submit" value="Place Your Order" class="thm-btn submit-disable">
						    <div class="checkout_form_responce"></div>
						</div>
					</div>
				</div>
			</div>
			</form>
		</div>
	</section>
</div>
<script>
    //Function for only number format
     function onlyNumber(evt) {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57)){
                 return false;
             }
         return true;
    }
</script>
<?php include_once("footer.php"); ?>