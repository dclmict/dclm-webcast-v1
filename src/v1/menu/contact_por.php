
    <!-- Modal -->
    <div id="myModal4" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">
                        Contactez Nous
                    </h4>
                </div>
                <div class="modal-body">
                    <form role="form" method="post" id="contact-form" >
                        <p> Envoyez votre message dans le formulaire ci-dessous et nous vous répondrons le plus tôt possible. </p>&nbsp;
                        <div class="messages"></div>
                        <div class="form-group">
                            <label for="name"> Nom:</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="S'il vous plait entrez votre nom entier" required="required" maxlength="50" data-error="Le nom est requis.">
                        </div>
                        <div class="form-group">
                            <label for="email"> Email:</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Veuillez taper votre adresse e-mail valide" required="required" maxlength="50" data-error="Un courriel valide est requis.">
                        </div>
                        <div class="form-group">
                            <label for="name"> Sujet:</label>
                            <input type="text" class="form-control" id="subject" name="subject" placeholder="Tapez un sujet pour votre message" required="required" maxlength="100">
                        </div>
                        <div class="form-group">
                            <label for="name"> Message:</label>
                            <textarea class="form-control" type="textarea" name="message" id="message" placeholder="S'il vous plaît entrez votre message ici" required="required" maxlength="6000" rows="5" data-error="S'il vous plaît, laissez-nous un message."></textarea>
                        </div>
                        <div class="form-group">
                            <div class="g-recaptcha" data-sitekey="6LdSjzUlAAAAAHSJ923HUZD75Wu4G3Ux08u1MWWJ"></div>
                        </div>
                        <button type="submit" class="btn btn-lg btn-success btn-block" id="btnContactUs">Soumettre &rarr;</button>
                    </form>
                </div>
            </div>
        </div>
    </div>