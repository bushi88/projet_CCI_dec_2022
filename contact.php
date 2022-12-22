<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="./css/styles.css">
</head>

<body>

    <!-- header -->
    <?php require_once('inc_header.php') ?>

    <!-- main -->
    <main class="mt-5 mb-5">
        <div class="text-center mb-5">
            <h3>Demande d'information</h3>
        </div>

        <div class="formulaire container text-start">
            <div class="bgc_form p-5">
                <form action="#" method="post">
                    <fieldset>
                        <legend class="text-start text-danger">Un soucis, une question, une remarque ? <strong>Contactez-nous...</strong></legend>

                        <div class="row">
                            <div class="col-4 col-md-3 mb-md-2 mt-md-2 pb-2">
                                <div class="form-outline">
                                    <label class="form-label" for="gender">Genre</label>
                                    <select class="form-select" id="gender" name="gender">
                                        <option value="1">M.</option>
                                        <option value="2">Mme</option>
                                        <option value="3">-</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-8 col-md-5 mb-md-2 mt-md-2 pb-2">
                                <div class="form-outline">
                                    <label class="form-label" for="lastname">Nom</label>
                                    <input type="text" id="lastname" class="form-control" />
                                </div>
                            </div>
                            <div class="col-md-4 mb-md-2 mt-md-2 pb-2">
                                <div class="form-outline">
                                    <label class="form-label" for="firstname">Prénom</label>
                                    <input type="text" id="firstname" class="form-control" />
                                </div>
                            </div>

                            <div class="mb-md-2 mt-md-2 pb-2 mb-3">
                                <label for="email" class="form-label">Email :</label>
                                <input type="email" class="form-control" id="email" placeholder="votre adresse mail" name="email">
                            </div>

                            <div class="mb-md-2 mt-md-2 pb-2 mb-3">
                                <label for="objet" class="form-label">Objet du message :</label>
                                <select class="form-select" id="objet" aria-label="Objet du message" name="objet">
                                    <option value="1">remarque</option>
                                    <option value="2">question</option>
                                    <option value="3">problème</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Votre message :</label>
                                <textarea name="message" class="form-control" id="message" rows="3" placeholder="Comment pouvons-nous vous aider ?"></textarea>
                            </div>

                            <div class="valid text-center">
                                <div class="confirm mb-3">
                                    <label id="checkbox" class="form-check-label" for="mentions">J'accepte les <a href="#" class="form-text text-danger"><strong>mentions légales</strong></a> et j'autorise l'envoi de mes informations</label>
                                    <input type="checkbox" class="form-check-input me-2" name="checkbox" id="mentions">
                                </div>
                                <button type="submit" name="submit" class="btn btn-primary m-2">ENVOYER</button>
                                <button type="reset" name="reset" class="btn btn-danger m-2">EFFACER</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <?php require_once('inc_footer.php') ?>

</body>

</html>