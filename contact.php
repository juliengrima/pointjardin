<?php include('includes/header.php') ?>


    <div class="row" id="contactform">
        <h3 class="contacth3">Contactez-nous</h3>
        <form class="col s12">
            <div class="row">
                <div class="input-field col s6">
                    <i class="material-icons prefix">account_circle</i>
                    <input id="first_name" type="text" class="validate">
                    <label for="first_name">Nom</label>
                </div>
                <div class="input-field col s6">
                    <input id="last_name" type="text">
                    <label for="last_name">Prénom</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <i class="material-icons prefix">mail</i>
                    <input id="email" type="email" class="validate">
                    <label for="email" data-error="L'adresse mail n'est pas valide" data-success="">Email</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <i class="material-icons prefix">mode_edit</i>
                    <textarea id="textarea1" class="materialize-textarea"></textarea>
                    <label for="textarea1">Votre message</label>
                </div>
            </div>
            <button class="btn waves-effect waves-light btn modal-trigger" href="#modal1" type="submit" name="action">Envoyer
                <i class="material-icons right">send</i>
            </button>

            <!-- Modal Structure -->
            <div id="modal1" class="modal">
                <div class="modal-content">
                    <h4>Votre message a bien été envoyé</h4>
                    <p>Nous vous répondrons dans les plus brefs délais.</p>
                    <p class="abientot">A bientôt sur <a href="http://www.point-jardin.fr/">Point Jardin</a></p>
                </div>
                <div class="modal-footer">
                    <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat"><i class="material-icons">close</i></a>
                </div>
            </div>
        </form>
    </div>
    

    <?php include('includes/footer.php') ?>