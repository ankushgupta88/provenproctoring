<?php include_once("header.php"); ?>
    <div class="page-wrapper">
        <section class="page-header">
            <div class="page-header__bg" style="background-image: url(<?php echo WEBSITEURL; ?>/images/inner-banner.jpg);"></div>
           <div class="container">
                <h2>Products</h2>
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="<?php echo WEBSITEURL; ?>">Home</a></li>
                    <li>/</li>
                    <li><span>Products</span></li>
                </ul>
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
        <section class="products-page">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="product-sorter">
                            <p>Showing All Results</p>
                            <div class="product-sorter__select">
                                <select class="selectpicker">
                                    <option value="#">Sort By Popular</option>
                                    <option value="#">Sort by Date</option>
                                </select>
                            </div>
                        </div>
                        <?php if(count($product_output->data) >= 1){ ?>
                       <div class="row filter-layout">
                           <?php $count = 1;
                           foreach($product_output->data as $product){ ?>
                            <div class="col-lg-3 col-md-6">
                                <div class="product-card__two">
                                    <div class="product-card__two-image">
                                       <a href="<?php echo WEBSITEURL."product-details.php?product_id=".$product->product_id; ?>"> <span class="product-card__two-sale">sale</span>
                                        <img src="<?php echo $product->product_image; ?>" alt="<?php echo $product->product_image_name; ?>"style="width: 100%;">
                                        </a>
                                    </div>
                                    <div class="product-card__two-content">
                                        <h3><a href="<?php echo WEBSITEURL."product-details.php?product_id=".$product->product_id; ?>"><?php echo $product->name; ?></a></h3>
                                        <p>$<?php echo $product->price; ?></p>
                                        <div class="cart-btn"><a href="javascript:void(0)" class="custom_add_to_cart" data-product_id="<?php echo $product->product_id; ?>" data-product_quantity="1" data-product_count="<?php echo $count; ?>">Add To Cart</a></div>
                                         <div class="product-page-text add_to_cart_responce<?php echo $count; ?>"></div>
                                    </div>
                                </div>
                            </div>
                        <?php $count++; } ?>
                </div>
                <?php } else { ?>
                    <div class="text-center">
                        <p>No Product Found.</p>
                    </div>
                <?php } ?>
                    </div>
                </div>
            </div>
        </section>
    </div>
   <?php include_once("footer.php"); ?>