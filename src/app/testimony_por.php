
<!-- modal5 -->
<div id="myModal5" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">
                    Boîte de Témoignage
                </h4>
            </div>
            <div class="modal-body">
            	<script src="assets/js/testimony_form.js"></script>
            	<script src="assets/js/validator.js"></script>
				<script src="https://www.google.com/recaptcha/api.js"></script>

                <form role="form" method="post" id="testimony-form" >
                    <p> Est-ce que le Seigneur a été bon avec toi? Puis partagez avec nous la bonté et la gentillesse du Seigneur sur vous. </p>&nbsp;

                    <div class="messages"></div>

                    <div class="form-group">
                        <label for="name"> Nom:</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="S'il vous plait entrez votre nom entier" required="required" maxlength="50" data-error="Name is required.">
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
                        <label for="name"> Témoignage:</label>
                        <textarea class="form-control" type="textarea" name="testimony" id="testimony" placeholder="S'il vous plaît partagez votre témoignage ici" required="required" maxlength="6000" rows="5" data-error="S'il vous plaît partagez votre témoignage ici."></textarea>
                    </div>
                    <div class="form-group">
                        <div class="g-recaptcha" data-sitekey="6LeEjMEZAAAAAItQzTrG2vsP3DDrH0jad7Bf1hv1"></div>
                    </div>
                    <button type="submit" class="btn btn-lg btn-success btn-block" id="btnContactUs">Submit &rarr;</button>
                </form>
				<script type="text/javascript">
					jQuery(document).ready(function () {
					jQuery("#testimony-form").submit(function () {
						_gaq.push(
						["_setAccount", "UA-42290414-11"],
						["_trackEvent", "testimony", "submit"]
							);
						});
					});
				</script> 
            </div>
        </div>
    </div>
</div>
<!-- modal5 -->