<?php include_once("header.php"); ?>

<section class="banner-section call-to-action-two pv-80">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <div class="call-to-action-two__content">
                        <div class="block-title text-left">
                            <div class="block-title__decor"></div>
                            <p>We make travel testing easy</p>
                            <h3>PROVEN Proctoring virtual verificaiton service for everyone everywhere.</h3>
                        </div>
                        <div class="row">
                            <div class="col-md-10">
                                <p>PROVEN Proctoring verifies everything from identifications, results, security, and compliance. Employers use PROVEN Proctoring wholistically or in select departments to ensure compliance when deemed necessary.</p>
                            </div>
                        </div><!-- /.row -->
                        <a href="<?php echo WEBSITEURL; ?>products.php" class="thm-btn">Buy Now</a>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="call-to-action-two__image">
                        <h2 class="floated-text">PROVEN</h2>
                        <img src="<?php echo WEBSITEURL; ?>images/banner-man-img.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="feature-box">
        <div class="container">
            <div class="inner-container wow fadeInUp d-block d-md-flex" data-wow-duration="1500ms">
                    <div>
                        <div class="feature-box__single">
                            <i class="organik-icon-global-shipping feature-box__icon"></i>
                            <div class="feature-box__content">
                                <h3>Return Policy</h3>
                                <p>Money back guarantee</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="feature-box__single">
                            <i class="organik-icon-delivery-truck feature-box__icon"></i>
                            <div class="feature-box__content">
                                <h3>Free Shipping</h3>
                                <p>On all orders over $25.00</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="feature-box__single">
                            <i class="organik-icon-online-store feature-box__icon"></i>
                            <div class="feature-box__content">
                                <h3>Store Locator</h3>
                                <p>Find your nearest store</p>
                            </div>
                        </div>
                    </div>
            </div
        </div>
    </section>
    
    <?php
        //Call Api For Product List
        //PROVEN PROCTORING Category Id 
        $category_id = 'ac4285f3-9e75-a0f6-d879-62bec69407fa';
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, APIURL);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, true);
        $parameters = array(
            'user_auth' => array(
                'auth_user' => CRMUSER,
                'auth_user_password' => CRMPASSWORD,
                'category_id' => $category_id
            ),
        );
        $json = json_encode($parameters);
        $postArgs = array(
            'method' => 'showCategoryProductList',
            'input_type' => 'JSON',
            'response_type' => 'JSON',
            'rest_data' => $json,
        );
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postArgs);
        $product_output = json_decode(curl_exec($ch));
        //echo "<pre>"; print_r($product_output); echo "</pre>"; exit;
        ?>
    <?php if(count($product_output->data) >= 1){ ?>  
    <section class="new-products pv-80">
        <div class="container">
            <div class="new-products__top">
                <div class="block-title ">
                    <div class="block-title__decor"></div>
                    <p>Recently Added</p>
                    <h3>New Products</h3>
                </div>

            </div>
            <div class="row filter-layout">
                <?php $count = 1;
               foreach($product_output->data as $product){ 
               //show only 8 product from list
               if($count <= 8) { ?>
                <div class="col-lg-3 col-md-6">
                    <div class="product-card__two">
                        <div class="product-card__two-image">
                            <span class="product-card__two-sale">sale</span>
                            <img src="<?php echo $product->product_image; ?>" alt="<?php echo $product->product_image_name; ?>">
                        </div>
                        <div class="product-card__two-content">
                            <h3><a href="<?php echo WEBSITEURL."product-details.php?product_id=".$product->product_id; ?>"> <?php echo $product->name; ?></a></h3>
                            <p>$<?php echo $product->price; ?></p>
                            <div class="cart-btn"><a href="javascript:void(0)" class="custom_add_to_cart" data-product_id="<?php echo $product->product_id; ?>" data-product_quantity="1" data-product_count="<?php echo $count; ?>">Add To Cart</a></div>
                            <div class="product-page-text add_to_cart_responce<?php echo $count; ?>"></div>
                        </div>
                    </div>
                </div>
                <?php } ?>
                <?php $count++; } ?>
            </div>
        </div>
    </section>
    <?php } ?>
    
    <section class="new-arrival call-to-action-two pv-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-xl-6">
                    <div class="call-to-action-two__content">
                        <div class="block-title text-left mt-0">
                            
                            <p>We make travel testing easy</p>
                            <h3>New Arrivals <br>
                            Get Up To 30% OFF</h3>
                           
                        </div>
                        <div class="row">
                            <div class="col-md-10">
                                <p>PROVEN Proctoring sessions generally take 15 – 20 minutes of one-on-one with a customer.   It is the Proctors responsibility to help the PROVEN member get the cdertification needed and guide them thru the PROVEN Process.</p>
                            </div>
                        </div>
                        <a href="<?php echo WEBSITEURL; ?>products.php" class="thm-btn">Buy Now</a>
                    </div>
                </div>
                <div class="col-lg-12 col-xl-6 side-image">
                   <div class="">
                       
                   </div> 
                </div>
            </div>
            
        </div>
    </section>
    
    <!-- <section class="product-slider pv-80">
        <div class="container mb-4">

<div>

  <div id="carousel-example-multi" class="carousel slide carousel-multi-item v-2 product-carousel" data-ride="carousel">

    <!--Controls-->
    <!-- <div class="controls-top mb-3">
      <a class="btn-floating btn-sm" href="#carousel-example-multi" data-slide="prev"><i class="fas fa-chevron-left"></i></a>
      <a class="btn-floating btn-sm" href="#carousel-example-multi" data-slide="next"><i class="fas fa-chevron-right"></i></a>
    </div>
    <!--/.Controls-->

    <!-- Indicators -->
    <!-- <ol class="carousel-indicators">
      <li data-target="#carousel-example-multi" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-multi" data-slide-to="1"></li>
      <li data-target="#carousel-example-multi" data-slide-to="2"></li>
      <li data-target="#carousel-example-multi" data-slide-to="3"></li>
      <li data-target="#carousel-example-multi" data-slide-to="4"></li>
      <li data-target="#carousel-example-multi" data-slide-to="5"></li>
      <li data-target="#carousel-example-multi" data-slide-to="6"></li>
      <li data-target="#carousel-example-multi" data-slide-to="7"></li>
      <li data-target="#carousel-example-multi" data-slide-to="8"></li>
    </ol>
    <!--/.Indicators-->

    <!-- <div class="carousel-inner" role="listbox">

      <div class="carousel-item active mx-auto">
        <div class="col-4 col-md-4 col-lg-2 mx-auto">
          <div class="card mb-2">
            <div class="view overlay">
              <img class="card-img-top" src="<?php echo WEBSITEURL; ?>images/products/bioglovehandwash.png" alt="Bioglove Handwash 1">
              <a href="#!">
                <div class="mask rgba-white-slight"></div>
              </a>
            </div>
            <div class="card-body text-center p-3">
              <h5 class="card-title fuchsia-rose-text">Bioglove Handwash 1</h5>
              <ul class="list-unstyled list-inline my-2">
                <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>
                <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>
                <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>
                <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>
                <li class="list-inline-item mx-0"><i class="fas fa-star-half-alt mimosa-text"></i></li>
              </ul>
              <p class="chili-pepper-text mb-0">$1.00</p>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="col-4 col-md-4 col-lg-2 mx-auto">
          <div class="card mb-2">
            <div class="view overlay">
              <img class="card-img-top" src="<?php echo WEBSITEURL; ?>images/products/pcr-kit.jpg" alt="PCR Kit 1">
              <a href="#!">
                <div class="mask rgba-white-slight"></div>
              </a>
            </div>
            <div class="card-body text-center p-3">
              <h5 class="card-title fuchsia-rose-text">PCR <br>Kit 1</h5>
              <ul class="list-unstyled list-inline my-2">
                <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>
                <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>
                <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>
                <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>
                <li class="list-inline-item mx-0"><i class="far fa-star mimosa-text"></i></li>
              </ul>
              <p class="chili-pepper-text mb-0">$9.00</p>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="col-4 col-md-4 col-lg-2 mx-auto">
          <div class="card mb-2">
            <div class="view overlay">
              <img class="card-img-top" src="<?php echo WEBSITEURL; ?>images/products/bioglovekitspray.jpg" alt="Bioglove Kit Spray 1">
              <a href="#!">
                <div class="mask rgba-white-slight"></div>
              </a>
            </div>
            <div class="card-body text-center p-3">
              <h5 class="card-title fuchsia-rose-text">Bioglove Kit Spray 1</h5>
              <ul class="list-unstyled list-inline my-2">
                <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>
                <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>
                <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>
                <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>
                <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>
              </ul>
              <p class="chili-pepper-text mb-0">$3.00</p>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="col-4 col-md-4 col-lg-2 mx-auto">
          <div class="card mb-2">
            <div class="view overlay">
              <img class="card-img-top" src="<?php echo WEBSITEURL; ?>images/products/bioglovespray.jpg" alt="Bioglove spray1">
              <a href="#!">
                <div class="mask rgba-white-slight"></div>
              </a>
            </div>
            <div class="card-body text-center p-3">
              <h5 class="card-title fuchsia-rose-text">Bioglove <br>spray1
</h5>
              <ul class="list-unstyled list-inline my-2">
                <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>
                <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>
                <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>
                <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>
                <li class="list-inline-item mx-0"><i class="fas fa-star-half-alt mimosa-text"></i></li>
              </ul>
              <p class="chili-pepper-text mb-0">$1.00</p>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="col-4 col-md-4 col-lg-2 mx-auto">
          <div class="card mb-2">
            <div class="view overlay">
              <img class="card-img-top" src="<?php echo WEBSITEURL; ?>images/products/bioglovehandwash.png" alt="Bioglove Handwash 2">
              <a href="#!">
                <div class="mask rgba-white-slight"></div>
              </a>
            </div>
            <div class="card-body text-center p-3">
              <h5 class="card-title fuchsia-rose-text">Bioglove Handwash 2</h5>
              <ul class="list-unstyled list-inline my-2">
                <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>
                <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>
                <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>
                <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>
                <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>
              </ul>
              <p class="chili-pepper-text mb-0">$1.00</p>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="col-4 col-md-4 col-lg-2 mx-auto">
          <div class="card mb-2">
            <div class="view overlay">
              <img class="card-img-top" src="<?php echo WEBSITEURL; ?>images/products/pcr-kit.jpg" alt="PCR Kit 2">
              <a href="#!">
                <div class="mask rgba-white-slight"></div>
              </a>
            </div>
            <div class="card-body text-center p-3">
              <h5 class="card-title fuchsia-rose-text">PCR <br>Kit 2</h5>
              <ul class="list-unstyled list-inline my-2">
                <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>
                <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>
                <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>
                <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>
                <li class="list-inline-item mx-0"><i class="fas fa-star-half-alt mimosa-text"></i></li>
              </ul>
              <p class="chili-pepper-text mb-0">$9.00</p>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="col-4 col-md-4 col-lg-2 mx-auto">
          <div class="card mb-2">
            <div class="view overlay">
              <img class="card-img-top" src="<?php echo WEBSITEURL; ?>images/products/bioglovekitspray.jpg" alt="Bioglove Kit Spray 2">
              <a href="#!">
                <div class="mask rgba-white-slight"></div>
              </a>
            </div>
            <div class="card-body text-center p-3">
              <h5 class="card-title fuchsia-rose-text">Bioglove Kit Spray 2</h5>
              <ul class="list-unstyled list-inline my-2">
                <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>
                <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>
                <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>
                <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>
                <li class="list-inline-item mx-0"><i class="far fa-star mimosa-text"></i></li>
              </ul>
              <p class="chili-pepper-text mb-0">$3.00</p>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="col-4 col-md-4 col-lg-2 mx-auto">
          <div class="card mb-2">
            <div class="view overlay">
              <img class="card-img-top" src="<?php echo WEBSITEURL; ?>images/products/bioglovespray.jpg" alt="Bioglove spray2">
              <a href="#!">
                <div class="mask rgba-white-slight"></div>
              </a>
            </div>
            <div class="card-body text-center p-3">
              <h5 class="card-title fuchsia-rose-text">Bioglove <br>spray2</h5>
              <ul class="list-unstyled list-inline my-2">
                <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>
                <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>
                <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>
                <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>
                <li class="list-inline-item mx-0"><i class="fas fa-star-half-alt mimosa-text"></i></li>
              </ul>
              <p class="chili-pepper-text mb-0">$1.00</p>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="col-4 col-md-4 col-lg-2 mx-auto">
          <div class="card mb-2">
            <div class="view overlay">
              <img class="card-img-top" src="<?php echo WEBSITEURL; ?>images/products/bioglovehandwash.png" alt="Bioglove Handwash 3">
              <a href="#!">
                <div class="mask rgba-white-slight"></div>
              </a>
            </div>
            <div class="card-body text-center p-3">
              <h5 class="card-title fuchsia-rose-text">Bioglove Handwash 3</h5>
              <ul class="list-unstyled list-inline my-2">
                <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>
                <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>
                <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>
                <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>
                <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>
              </ul>
              <p class="chili-pepper-text mb-0">$1.00</p>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>

</div>

</div>
    </section>-->
<!-- logo carousel -->
<section class="logo-carousel-section pv-80">
	<div class="container">
		<div class="row">
				<div class="logo-carousel-inner">
					<div class="single-logo-item">
						<img src="<?php echo WEBSITEURL; ?>images/hippa-Compliant-Logo.png" alt="">
					</div>
					<div class="single-logo-item">
						<img src="<?php echo WEBSITEURL; ?>images/hitrust-logo.png" alt="">
					</div>
					<div class="single-logo-item">
						<img src="<?php echo WEBSITEURL; ?>images/fedramp-logo.png" alt="">
					</div>
					<div class="single-logo-item">
						<img src="<?php echo WEBSITEURL; ?>images/pci-logo.jpg" alt="">
					</div>
					<div class="single-logo-item">
						<img src="<?php echo WEBSITEURL; ?>images/gdpr-logo.png" alt="">
					</div>
				</div>
		</div>
	</div>
</section>
<!-- end logo carousel -->
<?php include_once("footer.php"); ?>