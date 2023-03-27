
<!-- modal6 -->
<div id="myModal6" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">
                    Demande de Prière
                </h4>
            </div>
            <div class="modal-body">
            	<script src="assets/js/prequest_form.js"></script>
            	<script src="assets/js/validator.js"></script>
				<script src="https://www.google.com/recaptcha/api.js"></script>

                <form role="form" method="post" id="prayer-form" >
                    <p> Envoyez-nous votre demande de prière en utilisant le formulaire ci-dessous. </p>&nbsp;

                    <div class="messages"></div>

                    <div class="form-group">
                        <label for="name"> Prénom:</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="S'il vous plait entrez votre nom entier" required="required" maxlength="50" data-error="Le nom est requis.">
                    </div>
                    <div class="form-group">
                        <label for="email"> Email:</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Veuillez taper votre adresse e-mail valide" required="required" maxlength="50" data-error="Une adresse courriel valide est requise.">
                    </div>
                    <div class="form-group">
                        <label for="name"> Assujettir:</label>
                        <input type="text" class="form-control" id="subject" name="subject" placeholder="Tapez un sujet pour votre demande de prière" required="required" maxlength="100">
                    </div>
                    <div class="form-group">
                        <label for="name"> Demande de Prière:</label>
                        <textarea class="form-control" type="textarea" name="request" id="request" placeholder="Veuillez taper votre demande de prière dans cette case" required="required" maxlength="6000" rows="5" data-error="S'il vous plaît, laissez-nous un message."></textarea>
                    </div>
                    <div class="form-group">
                        <div class="g-recaptcha" data-sitekey="6LdSjzUlAAAAAHSJ923HUZD75Wu4G3Ux08u1MWWJ"></div>
                    </div>
                    <button type="submit" class="btn btn-lg btn-success btn-block" id="btnContactUs">Soumettre &rarr;</button>
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