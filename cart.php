<?php include_once("header.php"); ?>
<body>
    <div class="page-wrapper">
         <section class="page-header">
            <div class="page-header__bg" style="background-image: url(<?php echo WEBSITEURL; ?>images/inner-banner.jpg);"></div>
            <div class="container">
                <h2>Cart</h2>
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="<?php echo WEBSITEURL; ?>">Home</a></li>
                    <li>/</li>
                    <li><span>Cart</span></li>
                </ul>
            </div>
        </section>
        <?php //echo "<pre>"; print_r($_SESSION["shopping_cart"]); echo "</pre>"; exit; ?>
        <section class="cart-page">
            <div class="container">
                <?php 
                $total = 0;
                $sub_total = 0;
                $shiping_total = 0;
                if(!empty($_SESSION["shopping_cart"])){ ?>
                <div class="table-responsive">
                    <div class="remove_cart_item_responce"></div>
                    <table class="table cart-table">
                        <thead>
                            <tr>
                                <th>Item</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                                <th>Remove</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach($_SESSION["shopping_cart"] as $keys => $values){ ?>
                            <tr>
                                <td>
                                    <div class="product-box">
                                        <img src="<?php echo $values["product_image"]; ?>" alt="<?php echo $values["product_image_name"]; ?>">
                                        <h3><a href="<?php echo WEBSITEURL."product-details.php?product_id=".$values['id']; ?>"><?php echo $values["name"]; ?></a></h3>
                                    </div>
                                </td>
                                <td>$<?php echo $values["price"]; ?></td>
                                <td>
                                    <div class="quantity-box">
                                        <button type="button" class="sub">-</button>
                                        <input type="number"  class="product_qut" value="<?php echo $values["quantity"]; ?>" />
                                        <button type="button" class="add">+</button>
                                    </div>
                                </td>
                                <td>$<?php echo $values["quantity"] * $values["price"]; ?></td>
                                <td><a href="javascript:void(0)" class="remove_cart_item" data-product_id="<?php echo $values["item_id"]; ?>"><i class="organik-icon-close remove-icon"></i></a></td>
                            </tr>
                             <?php //sub total and total cal
                            $sub_total = $sub_total + ($values["quantity"] * $values["price"]);
                             $total = $total + ($values["quantity"] * $values["price"]); ?>
                             
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
                <?php } else { ?>
				    <div class="back-to-shop">
                        <a href="<?php echo WEBSITEURL; ?>products.php">Back To Shop</a>
                    </div>
                    <div class="cart text-center">
                        <p>Cart is empty.</p>
                    </div>
                <?php } ?>
                <div class="row">
                    <div class="col-lg-8"></div>
                    
                    <div class="col-lg-4">
                        <ul class="cart-total list-unstyled">
                            <li>
                                <span>Subtotal</span>
                                <span>$<?php echo number_format($sub_total, 2); ?></span>
                            </li>
                            <li>
                                <span>Shipping Cost</span>
                                <span>$<?php echo number_format($shiping_total, 2); ?></span>
                            </li>
                            <li>
                                <span>Total</span>
                                <span>$<?php echo number_format($total, 2); ?></span>
                            </li>
                        </ul>
                        <div class="button-box">
                            <a href="javascript:void(0)" class="thm-btn update_add_to_cart" data-product_id = "YUTU" >Update</a>
                            <a href="<?php echo WEBSITEURL; ?>checkout.php" class="thm-btn">Checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
   <?php include_once("footer.php"); ?>
