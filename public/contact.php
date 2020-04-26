<?php require_once('includes/header.php'); ?>
<section class="contact-holding">
    <h1 class="contact-holding-heading">Contact Us</h1>
    <h6 class="contact-holding-text">Do you have questions about BALL or would you like to hear more about the platform? <br> Then feel free to contact us by mail, phone or chat. We're usually pretty quick.</h6>
</section>
<section class="contact-hello row">
    <div class="col-lg-6 col-12">
        <div class="col-10 contact-hello-form">
            <h4 class="contact-hello-heading">Send a message</h4>
            <form method="post" action="">
                <?php require_once('includes/mail.php') ?>
                <div class="form-group">
                    <label for="name">Your Name *</label>
                    <input type="text" class="form-control" id="contact-name" name="name" placeholder="" required>
                </div>
                <div class="form-group">
                    <label for="email">Your Email *</label>
                    <input type="email" class="form-control" id="contact-email" name="email" placeholder="" required>
                </div>
                <div class="form-group">
                    <label for="message">Your Message *</label>
                    <input type="text" class="form-control" id="contact-message" name="message" placeholder="" required>
                </div>
                <button type="submit" class="btn btn-lg contact-hello-btn">Send Message</button>
            </form>
        </div>
    </div>
    <div class="row col-lg-6 col-12 contact-hello-info">
        <div class="col-lg-12 col-sm-6 col-12">
            <h4 class="contact-hello-text">SAY HELLO</h4>
            <h2 class="contact-hello-heading"><a href="mailto:hello@ballers.ng" target="_blank">hello@ballers.ng</a></h2>
        </div>
        <div class="col-lg-12 col-sm-6 col-12">
            <h4 class="contact-hello-text-2">Follow us in our everyday <br> lives</h4>
            <ul class="contact-hello-sm-text">
                <li class="contact-hello-sm-text-item"><a href="#">Instagram</a></li>
                <li class="contact-hello-sm-text-item"><a href="#">Facebook</a></li>
                <li class="contact-hello-sm-text-item"><a href="#">Twitter</a></li>
                <li class="contact-hello-sm-text-item"><a href="#">LinkedIn</a></li>
            </ul>
            <div class="contact-hello-sm-icon col-12 row">
                <h4 class="contact-hello-text col-12">FOLLOW US</h4> <br>
                
                <div class="contact-hello-sm-icon-item col-sm-6 col-3">
                    <a href="#"><img src="./assets/img/icons/instagram.png" alt="instagram" class="icon"></a> &nbsp;
                </div>
                <div class="contact-hello-sm-icon-item col-sm-6 col-3">
                    <a href="#"><img src="./assets/img/icons/twitter.png" alt="twitter" class="icon"></a>
                </div>
                <div class="contact-hello-sm-icon-item col-sm-6 col-3">
                    <a href="#"><img src="./assets/img/icons/facebook.png" alt="facebook" class="icon"></a> &nbsp;
                </div>
                <div class="contact-hello-sm-icon-item col-sm-6 col-3">
                    <a href="#"><img src="./assets/img/icons/linkedin.png" alt="linkedin" class="icon"></a> &nbsp;
                </div>
            </div>
        </div>
    </div>
</section>
<section class="contact-address row">
    <div class="col-lg-6 col-12 contact-address-coffee">
        <h4 class="contact-address-text">COME OVER FOR COFFEE</h4>
        <h2 class="contact-address-heading"> 5th Floor, Ibukun House, <br> No.70 Adetokunbo Ademola Street, <br> Victoria Island, Lagos.</h2>
    </div>
    <div class="col-lg-6 col-12 contact-address-map">
        <img src="./assets/img/map.png" alt="map image">
    </div>
</section>
<?php require_once('includes/footer.php'); ?>
