<?php include_once("header.php"); ?>
    <div class="page-wrapper">
        <section class="page-header">
            <div class="page-header__bg" style="background-image: url(<?php echo WEBSITEURL; ?>images/inner-banner.jpg);"></div>
            <div class="container">
                <h2>Contact</h2>
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="<?php echo WEBSITEURL; ?>">Home</a></li>
                    <li>/</li>
                    <li><span>Contact</span></li>
                </ul>
            </div>
        </section>
        <section class="contact-one">
            <div class="container">
                <div class="block-title text-center">
                    <div class="block-title__decor"></div>
                    <p>Get in Touch With Us</p>
                    <h3>Do You’ve Any Question? <br>
                        Write us a Message</h3>
                </div>
                <form action="#" class="contact-form-validated contact-one__form" id="contact_form">
                    <div class="row">
                        <div class="col-md-6">
                            <input type="text" name="fullname" id="fullname" value="" placeholder="Your Name">
                        </div>
                        <div class="col-md-6">
                            <input type="text" placeholder="Email Address" name="email" id="email">
                        </div>
                        <div class="col-md-6">
                            <input type="text" placeholder="Phone Number" name="phone_number" id="phone_number">
                        </div>
                        <div class="col-md-6">
                            <input type="text" placeholder="Subject" name="subject" id="subject">
                        </div>
                        <div class="col-md-12">
                            <textarea placeholder="Write a Message" name="message" id="message"></textarea>
                        </div>
                        <div class="col-md-12 text-center">
                            <button type="submit" class="thm-btn submit-disable">Send a Message</button>
                            <div class="contact_form_responce"></div>
                        </div>
                    </div>
                </form>
            </div>
        </section>

        <section class="contact-infos">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="contact-infos__single">
                            <i class="organik-icon-location"></i>
                            <h3>Visit Anytime</h3>
                            <p>PROVEN 221 N Broad St, Suite 3A, Middletown DE 19709</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="contact-infos__single">
                            <i class="organik-icon-email"></i>
                            <h3>Send Email</h3>
                            <p>
                                <a href="mailto:info@provenproctoring.com">info@provenproctoring.com</a>
                            </p>
                        </div>
                    </div>
                     <div class="col-sm-4">
                        <div class="contact-infos__single">
                            <i class="organik-icon-calling"></i>
                            <h3>Call Center</h3>
                            <p><a href="tel:1.888.404.2775">1.888.404.2775</a> 
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="google-map__default">
           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3080.766211502821!2d-75.71923478509802!3d39.45201582166675!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c7a07701340001%3A0x7609a3addd03001e!2sPROVEN%20Pass!5e0!3m2!1sen!2sin!4v1656075481910!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
 <?php include_once("footer.php"); ?>