<!-- Modal inscription -->
<section class="modal fade" id="newLogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <p class="modal-title" id="exampleModalLabel">Inscription</p>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" style="color: red;">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post">
                    <p>
                        Choisissez votre login : <br><input type="text" name="user_login" placeholder="Adresse email" />
                    </p>
                    <P>
                        Choisissez votre mot de passe : <br><input type="text" name="user_password" placeholder="Nouveau mot de passe" />
                    </P>
                    <p>
                        <input class="btn btn-warning" type="submit" name="submit_new_account" value="Créer votre compte" />
                    </p>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</section>

<!-- Modal connexion -->
<dsection class="modal fade" id="oldLogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <p class="modal-title" id="exampleModalLabel">Connexion</p>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" style="color: red;">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post">
                    <p>
                        Entrez votre login : <br><input type="text" name="user_input_login" placeholder="Adresse email" />
                    </p>
                    <P>
                        Entrez votre mot de passe : <br><input type="password" name="user_input_password" placeholder="Mot de passe" />
                    </P>
                    <p>
                        <input class="btn btn-success" type="submit" name="submit_account" value="Se connecter" />
                    </p>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
    </section>