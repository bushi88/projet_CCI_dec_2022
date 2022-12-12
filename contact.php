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
    <?php require('inc_header.php') ?>

    <!-- main -->
    <main class="mt-5 mb-5">
        <div class="text-center mb-5">
            <h3>Demande d'information</h3>
        </div>

        <div class="container formulaire text-start w-75">
            <form action="#" method="post">
                <fieldset>
                    <legend class="text-start text-danger">Un soucis, une question, une remarque ? <strong>Contactez-nous...</strong></legend>

                    <div class="mb-3">
                        <label for="lastname" class="form-label">Nom :</label>
                        <input type="text" class="form-control" id="lastname" placeholder="votre nom" name="lastname">
                    </div>

                    <div class="mb-3">
                        <label for="firstname" class="form-label">Prénom :</label>
                        <input type="text" class="form-control" id="firstname" placeholder="votre prénom" name="firstname">
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email :</label>
                        <input type="email" class="form-control" id="email" placeholder="votre adresse mail" name="email">
                    </div>

                    <div class="mb-3">
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
                            <label id="checkbox" for="mentions">J'accepte les <a href="#"><strong>mentions légales</strong></a> et j'autorise l'envoi de mes informations</label>
                            <input type="checkbox" name="checkbox" id="mentions">
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">ENVOYER</button>
                        <button type="reset" name="reset" class="btn btn-danger">EFFACER</button>
                    </div>
                </fieldset>
            </form>
        </div>
    </main>

    <!-- Footer -->
    <?php require('inc_footer.php') ?>

</body>

</html>