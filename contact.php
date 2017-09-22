<?php $pageTitle = 'Contact'; require_once 'php_require/heading.php'; ?>
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header app-color">
            Contact Information
        </h1>
    </div>
    <div class="col-md-12">
        <div class="well">
            <span class="text-success">admin@asiapacpartners.com</span><br>
            <span class="text-success">ross.ramsay@asiapacpartners.com</span><br>
            <hr>
            Ross Ramsay<br>
            <span class="text-danger">Australia phone contact:</span> +61 411 449 123<br>
            <span class="text-danger">Indonesia phone contact:</span> +62 818 888 024
        </div>
    </div>
</div>
<!-- Contact Form -->
<!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
<div class="row" style="display: none;">
    <div class="col-md-8">
        <h3>Send us a Message</h3>
        <form name="sentMessage" id="contactForm" novalidate>
            <div class="control-group form-group">
                <div class="controls">
                    <label>Full Name:</label>
                    <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                    <p class="help-block"></p>
                </div>
            </div>
            <div class="control-group form-group">
                <div class="controls">
                    <label>Phone Number:</label>
                    <input type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
                </div>
            </div>
            <div class="control-group form-group">
                <div class="controls">
                    <label>Email Address:</label>
                    <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
                </div>
            </div>
            <div class="control-group form-group">
                <div class="controls">
                    <label>Message:</label>
                    <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                </div>
            </div>
            <div id="success"></div>
            <!-- For success/fail messages -->
            <button type="submit" class="btn btn-primary">Send Message</button>
        </form>
    </div>

</div>
<!-- /.row -->
<?php require_once 'php_require/footer.php'; ?>
