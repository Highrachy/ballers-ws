<form data-toggle="validator" method="post" action="#" class="mt-5 pt-3">
    <p class="text-left">Pls fill out your details below to be notified when we launch.</p>

    <?php require_once('inc/sendmail.php'); ?>

    <div class="form-group mb-4">
      <label for="full_name" class="small mb-0">Full Name <span class="text-danger">*</span></label>
      <input type="text" class="form-control col-md-9" name="full_name" placeholder="Enter your Full Name" required>
      <small class="help-block with-errors text-danger"></small>
    </div>

    <div class="form-group mb-4">
    <label for="email" class="small mb-0">Email Address <span class="text-danger">*</span></label>
      <input type="email" class="form-control col-md-9" name="email" placeholder="Enter you Email Addresss" required>
      <small class="help-block with-errors text-danger"></small>
    </div>

    <div class="form-group mb-4">
      <label for="phone"  class="small mb-0">Phone Number <span class="text-muted">(optional)</span> </label>
      <input type="text" class="form-control col-md-9" placeholder="Phone Number" name="phone">
      <small class="help-block with-errors text-danger"></small>
    </div>

    <button type="submit" class="btn submit-btn mt-2">Submit</button>
  </form>