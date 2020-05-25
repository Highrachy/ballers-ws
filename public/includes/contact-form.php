<form method="post" action="" data-toggle="validator">
    <?php require_once('includes/mail.php') ?>
    <div class="form-group">
        <label for="name">Your Name *</label>
        <input type="text" class="form-control" id="contact-name" name="name" placeholder="" required>
        <small class="help-block with-errors text-danger"></small>
    </div>
    <div class="form-group">
        <label for="email">Your Email *</label>
        <input type="email" class="form-control" id="contact-email" name="email" placeholder="" required>
        <small class="help-block with-errors text-danger"></small>
    </div>
    <div class="form-group">
        <label for="message">Your Message *</label>
        <input type="text" class="form-control" id="contact-message" name="message" placeholder="" required>
        <small class="help-block with-errors text-danger"></small>
    </div>
    <button type="submit" class="btn btn-lg contact-hello-btn">Send Message</button>
</form>
