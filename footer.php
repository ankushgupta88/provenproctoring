<footer class="site-footer background-black-2">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                <div class="footer-widget footer-widget__about-widget">
                    <a href="<?php echo WEBSITEURL; ?>" class="footer-widget__logo">
                        <img src="<?php echo WEBSITEURL; ?>images/proven-white.png" alt="" style=" max-width: 194px; width: 100%;">
                    </a>
                    <p class="thm-text-dark">PROVEN Proctoring verifies everything from identifications, results, security, and compliance. </p>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
			 <div class="footer-widget">
                    <h3 class="footer-widget__title">Quick Links</h3>
                    <ul class="list-unstyled footer-widget__links">
                        <li>
                            <a href="<?php echo WEBSITEURL; ?>">Home</a>
                        </li>
                        <li>
                            <a href="<?php echo WEBSITEURL; ?>who-we-are.php">Who We Are</a>
                        </li>
                        <li>
                            <a href="<?php echo WEBSITEURL; ?>news.php">News</a>
                        </li>
                        <li>
                            <a href="<?php echo WEBSITEURL; ?>products.php">Shop</a>
                        </li>
                    </ul>
                </div>
            </div>
      
            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-2">
                <div class="footer-widget">
                    <h3 class="footer-widget__title">Explore</h3>
                    <ul class="list-unstyled footer-widget__links">
                        <li>
                            <a href="<?php echo WEBSITEURL; ?>products.php">New Products</a>
                        </li>
                        <li>
                            <a href="<?php echo WEBSITEURL; ?>checkout.php">My Account</a>
                        </li>
                        <li>
                            <a href="<?php echo WEBSITEURL; ?>contact.php">Support</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
               <div class="footer-widget footer-widget__contact-widget">
                    <h3 class="footer-widget__title">Contact</h3>
                    <ul class="list-unstyled footer-widget__contact">
                        <li>
                            <i class="fa fa-phone-square"></i>
                            <a href="tel:1.888.404.2775">1.888.404.2775</a>
                        </li>
                        <li>
                            <i class="fa fa-envelope"></i>
                            <a href="mailto:info@provenproctoring.com">info@provenproctoring.com</a>
                        </li>
                        <li>
                            <i class="fa fa-map-marker-alt"></i>
                             <p class="thm-text-dark mt-0">PROVEN 221 N Broad St, Suite 3A, Middletown DE 19709</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom-footer">
        <div class="container">
            <hr>
            <div class="inner-container text-center">
                <div class="bottom-footer__social">
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-facebook-square"></a>
                    <a href="#" class="fab fa-instagram"></a>
                </div>
                <p class="thm-text-dark">© 2021 PROVEN 221 N Broad St, Suite 3A, Middletown DE 19709</p>
            </div>
        </div>
    </div>
</footer>
<script src="<?php echo WEBSITEURL; ?>vendors/jquery/jquery-3.5.1.min.js"></script>
<script src="<?php echo WEBSITEURL; ?>vendors/bootstrap/bootstrap.bundle.min.js"></script>
<!--Custome js files -->
<script src="<?php echo WEBSITEURL; ?>js/jquery.validate.min.js"></script>
<script type="text/javascript" src="<?php echo WEBSITEURL; ?>js/custom-ajax.js"></script>
<script type="text/javascript" src="<?php echo WEBSITEURL; ?>js/jquery.fancybox.min.js"></script>
<script>
 /*$(function(){
     $('.selectpicker').selectpicker();
});*/
"use strict"; // Start of use strict
(function($) {
    function bootstrapAnimatedLayer() {
        function doAnimations(elems) {
            //Cache the animationend event in a variable
            var animEndEv = "webkitAnimationEnd animationend";
            elems.each(function() {
                var $this = $(this),
                    $animationType = $this.data("animation");
                $this.addClass($animationType).one(animEndEv, function() {
                    $this.removeClass($animationType);
                });
            });
        }

        //Variables on page load
        var $myCarousel = $("#minimal-bootstrap-carousel"),
            $firstAnimatingElems = $myCarousel
            .find(".carousel-item:first")
            .find("[data-animation ^= 'animated']");

        //Initialize carousel
        $myCarousel.carousel();

        //Animate captions in first slide on page load
        doAnimations($firstAnimatingElems);

        //Other slides to be animated on carousel slide event
        $myCarousel.on("slide.bs.carousel", function(e) {
            var $animatingElems = $(e.relatedTarget).find(
                "[data-animation ^= 'animated']"
            );
            doAnimations($animatingElems);
        });
    }
    bootstrapAnimatedLayer();
})(jQuery);

jQuery(document).ready(function () {
    jQuery('.carousel.carousel-multi-item.v-2 .carousel-item').each(function(){
      var next = $(this).next();
      if (!next.length) {
        next = $(this).siblings(':first');
      }
      next.children(':first-child').clone().appendTo($(this));
    
      for (var i=0;i<3;i++) {
        next=next.next();
        if (!next.length) {
          next = $(this).siblings(':first');
        }
        next.children(':first-child').clone().appendTo($(this));
      }
    });
});





</script>
</body>
</html>