<?php include_once('head.php'); ?> 
<body>
    <div class="page-wrapper">
        <header class="main-header">
            <div class="topbar">
                <div class="container">
                    <div class="main-logo">
                        <a href="<?php echo WEBSITEURL; ?>" class="logo">
                            <img src="<?php echo WEBSITEURL; ?>images/logo.png" width="150px" alt="">
                        </a>
                        <div class="mobile-nav__buttons">
                            <a href="#" class="search-toggler"><i class="organik-icon-magnifying-glass"></i></a>
                            <a href="<?php echo WEBSITEURL; ?>/cart.php" class="mini-cart__toggler">
                                <i class="organik-icon-shopping-cart">
                                        <?php if($_SESSION["shopping_cart"]){ ?>
                                            <span class="cart-count-item"><?php         echo count($_SESSION["shopping_cart"]);?> 
                                            </span>
                                        <?php } ?>
                                    </i>
                            </a>
                        </div>

                       
                    </div>

                    <div class="topbar__left">
                        <div class="topbar__social">
                            <a href="#" class="fab fa-twitter"></a>
                            <a href="#" class="fab fa-facebook-square"></a>
                            <a href="#" class="fab fa-instagram"></a>
                        </div>
                        <div class="topbar__info">
                            <i class="organik-icon-email"></i>
                            <p>Email <a href="mailto:info@provenproctoring.com">info@provenproctoring.com</a></p>
                        </div>
                    </div>
                    <div class="topbar__right">
                        <div class="topbar__info">
                            <i class="organik-icon-calling"></i>
                            <p>Phone <a href="tel:1.888.404.2775">1.888.404.2775</a></p>
                        </div>
                        <div class="topbar__buttons">
                            <a href="<?php echo WEBSITEURL; ?>cart.php" class="mini-cart__toggler">
                                    <i class="organik-icon-shopping-cart">
                                        <?php if($_SESSION["shopping_cart"]){ ?>
                                            <span class="cart-count-item"><?php         echo count($_SESSION["shopping_cart"]);?> 
                                            </span>
                                        <?php } ?>
                                    </i>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
            <nav class="main-menu navbar navbar-expand-lg navbar-light p-lg-0">
            	<div class="container">
            	    <div class="main-menu__login"> 
            	    <?php if($_SESSION['login_user_detail']){ ?>
            	        <a href="<?php echo WEBSITEURL; ?>customer/dashboard.php"><i class="nav-icon fas fa-tachometer-alt custom-das"></i>Dashboard</a>
            	   <?php } else { ?>
            	        <a href="<?php echo WEBSITEURL; ?>login.php"><i class="organik-icon-user"></i>Login / Register</a> 
            	   <?php } ?>
            	   </div>
            		<button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
            		
            		<div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            			<ul class="navbar-nav mr-auto mt-2 mt-lg-0 main-menu__list">
            				<li class="dropdown current"> <a href="<?php echo WEBSITEURL; ?>">Home</a> </li>
            				<li class="dropdown"> <a href="<?php echo WEBSITEURL; ?>who-we-are.php">Who We Are</a> </li>
            				<li class="dropdown"><a href="<?php echo WEBSITEURL; ?>news.php">News</a> </li>
            				<li class="dropdown"> <a href="<?php echo WEBSITEURL; ?>products.php">Shop</a> </li>
            				<li class="dropdown"> <a href="<?php echo WEBSITEURL; ?>contact.php">Contact Us</a> </li>
            				<?php
            	if($_SESSION['login_user_detail']){ ?>
            					<li class="dropdown current"> <a href="#">My Account</a>
            						<ul>
            							<li class="dropdown"><a href="<?php echo WEBSITEURL; ?>customer/dashboard.php">Dashboard</a></li>
            							<li class="dropdown"><a href="<?php echo WEBSITEURL; ?>logout.php">Logout</a></li>
            						</ul>
            					</li>
            					<?php } ?>
            			</ul>
            		</div>
            	</div>
            </nav>
        </header>