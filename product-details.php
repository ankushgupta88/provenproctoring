<?php include_once("header.php"); ?>

<?php 
//check if product id is exit or not
if(empty($_GET['product_id'])){
    header('location: products.php'); 
} 

//Get product id from url
$product_id = $_GET['product_id']; 

//Call Api For Product Details
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, APIURL);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, true);
$parameters = array(
    'user_auth' => array(
        'auth_user' => CRMUSER,
        'auth_user_password' => CRMPASSWORD,
        'product_id' => $product_id
    ),
);
$json = json_encode($parameters);
$postArgs = array(
    'method' => 'showSingleProductDetail',
    'input_type' => 'JSON',
    'response_type' => 'JSON',
    'rest_data' => $json,
);
curl_setopt($ch, CURLOPT_POSTFIELDS, $postArgs);
$product_output = json_decode(curl_exec($ch));
//echo "<pre>"; print_r($product_output); echo "</pre>"; exit;
?>
<div class="page-wrapper">
    <section class="page-header">
        <div class="page-header__bg" style="background-image: url(<?php echo WEBSITEURL; ?>images/inner-banner.jpg);"></div>
        <div class="container">
            <h2>Product</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="<?php echo WEBSITEURL; ?>">Home</a></li>
                <li>/</li>
                <li><span>Product</span></li>
            </ul>
        </div>
    </section>
    <section class="product_detail">
        <div class="container">
            <?php if(count($product_output->data) >= 1){ ?>
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="product_detail_image">
                        <img src="<?php echo $product_output->data[0]->product_image; ?>" alt="<?php echo $product_output->data[0]->product_image_name; ?>">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="product_detail_content">
                        <h2><?php echo $product_output->data[0]->name; ?></h2>
                        <div class="product_detail_review_box">
                            <div class="product_detail_price_box">
                                <p>$<?php echo $product_output->data[0]->price; ?></p>
                            </div>
                        </div>
                        <div class="product_detail_text">
                            <p><?php echo $product_output->data[0]->description; ?></p>
                        </div>
                        <ul class="list-unstyled product_detail_address">
                            <li>PART NUMBER. <?php echo $product_output->data[0]->part_number; ?></li>
                            <li>Available in store</li>
                        </ul>
                        <div class="product-quantity-box">
                            <div class="quantity-box">
                                <button type="button" class="sub">-</button>
                                <input type="number" id="2" value="1" />
                                <button type="button" class="add">+</button>
                            </div>
                            <div class="addto-cart-box">
                                <button class="thm-btn custom_add_to_cart" type="button" data-product_id="<?php echo $product_output->data[0]->product_id; ?>" data-product_quantity="1" data-product_count="1">Add to Cart</button>
                                <div class="product-page-text add_to_cart_responce1"></div>
                            </div>
                        </div>
                        <div class="product_detail_share_box">
                            <div class="share_box_title">
                                <h2>Share with friends</h2>
                            </div>
                            <div class="share_box_social">
                                <a href="#"><i class="fab fa-facebook-square"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php } else { ?>
                <div class="row">
                    <div class="col-xl-6 col-lg-6">No Product Found.</div>
                </div>
            <?php } ?>
        </div>
    </section>
</div>
<?php include_once("footer.php"); ?>