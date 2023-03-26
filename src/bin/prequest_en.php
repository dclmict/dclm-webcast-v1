
<!-- modal6 -->
<div id="myModal6" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">
                    Prayer Request
                </h4>
            </div>
            <div class="modal-body">
            	<script src="assets/js/prequest_form.js"></script>
            	<script src="assets/js/validator.js"></script>
				<script src="https://www.google.com/recaptcha/api.js"></script>

                <form role="form" method="post" id="prayer-form" >
                    <p> Send us your prayer request using the form below. </p>&nbsp;

                    <div class="messages"></div>

                    <div class="form-group">
                        <label for="name"> Name:</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Please enter your full name" required="required" maxlength="50" data-error="Name is required.">
                    </div>
                    <div class="form-group">
                        <label for="email"> Email:</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Please type your valid E-mail address" required="required" maxlength="50" data-error="A valid email is required.">
                    </div>
                    <div class="form-group">
                        <label for="name"> Subject:</label>
                        <input type="text" class="form-control" id="subject" name="subject" placeholder="Type a subject for your prayer request" required="required" maxlength="100">
                    </div>
                    <div class="form-group">
                        <label for="name"> Prayer Request:</label>
                        <textarea class="form-control" type="textarea" name="request" id="request" placeholder="Please type your prayer request inside this box" required="required" maxlength="6000" rows="5" data-error="Please, leave us a message."></textarea>
                    </div>
                    <div class="form-group">
                        <div class="g-recaptcha" data-sitekey="6LeEjMEZAAAAAItQzTrG2vsP3DDrH0jad7Bf1hv1"></div>
                    </div>
                    <button type="submit" class="btn btn-lg btn-success btn-block" id="btnContactUs">Submit &rarr;</button>
                </form>
				<script type="text/javascript">
					jQuery(document).ready(function () {
					jQuery("#prayer-form").submit(function () {
						_gaq.push(
						["_setAccount", "UA-42290414-11"],
						["_trackEvent", "request", "submit"]
							);
						});
					});
				</script> 
            </div>
        </div>
    </div>
</div>
<!-- modal6 -->