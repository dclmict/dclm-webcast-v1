
<!-- modal4 -->
<div id="myModal4" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">
                    Contact Us
                </h4>
            </div>
            <div class="modal-body">
            	<script src="assets/js/contact_form.js"></script>
            	<script src="assets/js/validator.js"></script>
				<script src="https://www.google.com/recaptcha/api.js"></script>

                <form role="form" method="post" id="contact-form" >
                    <p> Send your message in the form below and we will get back to you as early as possible. </p>&nbsp;

                    <div class="messages"></div>

                    <div class="form-group">
                        <label for="name"> Name:</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Please enter your full name" required="required" maxlength="50" data-error="Name is required.">
                    </div>
                    <div class="form-group">
                        <label for="email"> Email:</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Please type your valid E-mail address" required="required" maxlength="50" data-error="Valid email is required.">
                    </div>
                    <div class="form-group">
                        <label for="name"> Subject:</label>
                        <input type="text" class="form-control" id="subject" name="subject" placeholder="Type a subject for your message" required="required" maxlength="100">
                    </div>
                    <div class="form-group">
                        <label for="name"> Message:</label>
                        <textarea class="form-control" type="textarea" name="message" id="message" placeholder="Please type your Message here" required="required" maxlength="6000" rows="5" data-error="Please, leave us a message."></textarea>
                    </div>
                    <div class="form-group">
                        <div class="g-recaptcha" data-sitekey="6LdSjzUlAAAAAHSJ923HUZD75Wu4G3Ux08u1MWWJ"></div>
                    </div>
                    <button type="submit" class="btn btn-lg btn-success btn-block" id="btnContactUs">Submit &rarr;</button>
                </form>
				<script type="text/javascript">
					jQuery(document).ready(function () {
					jQuery("#contact-form").submit(function () {
						_gaq.push(
						["_setAccount", "UA-42290414-11"],
						["_trackEvent", "message", "submit"]
							);
						});
					});
				</script> 
            </div>
        </div>
    </div>
</div>
<!-- modal4 -->