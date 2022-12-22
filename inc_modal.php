<!-- Modal inscription -->
<section class="modal fade" id="newLogin" tabindex="-1" role="dialog" aria-labelledby="newLogin" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content bg-black">
            <div class="modal-header">
                <img src="./img/icones/user_wth.png" alt="user" width="30">
                <h2 class="fw-bold mb-2 text-white text-uppercase">S' inscrire</h2>
                <button type="button" class="close-btn close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">X</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row d-flex justify-content-center align-items-center">
                    <div class="col-12">
                        <div class="card bg-dark text-white" style="border-radius: 1rem;">
                            <div class="card-body text-center">

                                <div class="row">
                                    <div class="col-4 mb-2 mt-2 pb-2">
                                        <div class="form-outline">
                                            <select class="form-select" id="gender" name="gender">
                                                <option value="1">M.</option>
                                                <option value="2">Mme</option>
                                                <option value="3">-</option>
                                            </select>
                                            <label class="form-label" for="gender">Genre</label>
                                        </div>
                                    </div>
                                    <div class="col-8 mb-2 mt-2 pb-2">
                                        <div class="form-outline">
                                            <input type="text" class="form-control" id="lastname" name="lastname" />
                                            <label class="form-label" for="lastname">Nom</label>
                                        </div>
                                    </div>
                                    <div class="col-7 mb-2 mt-2 pb-2">
                                        <div class="form-outline">
                                            <input type="text" class="form-control" id="firstname" name="firstname" />
                                            <label class="form-label" for="firstname">Prénom</label>
                                        </div>
                                    </div>
                                    <div class="col-5 mb-2 mt-2 pb-2">
                                        <div class="form-outline">
                                            <input type="date" class="form-control" id="birthday" name="birthday">
                                            <label for="birthday">Date de naissance</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-md-2 mt-md-2 pb-2">
                                    <p class="text-white-50 mb-2">Veuillez indiquer vos coordonnées</p>

                                    <div class="row">
                                        <div class="col-3 mb-2 mt-2 pb-2">
                                            <div class="form-outline">
                                                <input type="text" id="number" class="form-control" name="number" />
                                                <label class="form-label" for="number">N°</label>
                                            </div>
                                        </div>
                                        <div class="col-9 mb-2 mt-2 pb-2">
                                            <div class="form-outline">
                                                <input type="text" id="address" class="form-control" name="address" />
                                                <label class="form-label" for="address">adresse</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-5 mb-2 mt-2 pb-2">
                                            <div class="form-outline">
                                                <input type="text" id="zip_code" class="form-control" name="zip_code" />
                                                <label class="form-label" for="zip_code">code postal</label>
                                            </div>
                                        </div>
                                        <div class="col-7 mb-2 mt-2 pb-2">
                                            <div class="form-outline">
                                                <input type="text" id="city" class="form-control" name="city" />
                                                <label class="form-label" for="city">ville</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mb-md-2 mt-md-2 pb-2">
                                            <div class="form-outline">
                                                <input type="country" id="country" class="form-control" name="country" />
                                                <label class="form-label" for="country">pays</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-md-2 mt-md-2 pb-2">
                                            <div class="form-outline">
                                                <input type="phone" id="phone" class="form-control" name="phone" />
                                                <label class="form-label" for="phone">téléphone</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-md-2 mt-md-2 pb-2">
                                        <p class="text-white-50 mb-2">Veuillez choisir un identifiant et un mot de passe!</p>

                                        <!-- Email input -->
                                        <div class="form-outline mb-4">
                                            <input type="email" id="email" class="form-control" name="email" />
                                            <label class="form-label" for="email">Email</label>
                                        </div>

                                        <!-- Password input -->
                                        <div class="form-outline mb-4">
                                            <input type="password" id="password" class="form-control" name="password" />
                                            <label class="form-label" for="password">Mot de passe</label>
                                        </div>

                                        <!-- Checkbox -->
                                        <div class="form-check d-flex justify-content-center mb-4">
                                            <input class="form-check-input me-2" type="checkbox" value="newsletter" id="newsletter" name="newsletter" checked />
                                            <label class="form-check-label" for="newsletter">
                                                S'inscrire à la newsletter
                                            </label>
                                        </div>

                                        <!-- Submit button -->
                                        <button class="btn btn-outline-light btn-lg px-5" type="submit">inscription</button>

                                        <!-- Register buttons -->
                                        <div class="d-flex justify-content-center text-center mt-4 pt-1">
                                            <div class="d-block mt-3">
                                                <p class="text-white">ou s'inscrire avec :</p>
                                                <div class="text-white">
                                                    <button type="button" class="text-white btn btn-link btn-floating mx-1">
                                                        <i class="fab fa-facebook-f"></i>
                                                    </button>
                                                    <button type="button" class="text-white btn btn-link btn-floating mx-1">
                                                        <i class="fab fa-google"></i>
                                                    </button>
                                                    <button type="button" class="text-white btn btn-link btn-floating mx-1">
                                                        <i class="fab fa-twitter"></i>
                                                    </button>
                                                    <button type="button" class="text-white btn btn-link btn-floating mx-1">
                                                        <i class="fab fa-github"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="product-btn" data-bs-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
</section>

<!-- Modal connexion -->
<section class="modal fade" id="oldLogin" tabindex="-1" role="dialog" aria-labelledby="oldLogin" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content bg-black">
            <div class="modal-header">
                <img src="./img/icones/user_wth.png" alt="user" width="30">
                <h2 class="fw-bold mb-2 text-white text-uppercase">Se connecter</h2>
                <button type="button" class="close-btn close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">X</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row d-flex justify-content-center align-items-center">
                    <div class="col-12">
                        <div class="card bg-dark text-white" style="border-radius: 1rem;">
                            <div class="card-body text-center">

                                <div class="mb-md-2 mt-md-2 pb-2">

                                    <p class="text-white-50 mb-2">Veuillez entrer votre identifiant et votre mot de passe!</p>

                                    <div class="form-outline form-white mb-4">
                                        <input type="email" id="typeEmailX" class="form-control form-control-lg" name="typeEmailX" />
                                        <label class="form-label" for="typeEmailX">Email</label>
                                    </div>

                                    <div class="form-outline form-white mb-4">
                                        <input type="password" id="typePasswordX" class="form-control form-control-lg" name="typePasswordX" />
                                        <label class="form-label" for="typePasswordX">Mot de passe</label>
                                    </div>

                                    <p class="small mb-2 pb-lg-2"><a class="text-danger" href="#">Mot de passe oublié?</a></p>

                                    <button class="btn btn-outline-light btn-lg px-5" type="submit">connexion</button>

                                    <!-- Register buttons -->
                                    <div class="d-flex justify-content-center text-center mt-4 pt-1">
                                        <div class="d-block mt-3">
                                            <p class="text-white">ou se connecter avec :</p>
                                            <div class="text-white">
                                                <button type="button" class="text-white btn btn-link btn-floating mx-1">
                                                    <i class="fab fa-facebook-f"></i>
                                                </button>
                                                <button type="button" class="text-white btn btn-link btn-floating mx-1">
                                                    <i class="fab fa-google"></i>
                                                </button>
                                                <button type="button" class="text-white btn btn-link btn-floating mx-1">
                                                    <i class="fab fa-twitter"></i>
                                                </button>
                                                <button type="button" class="text-white btn btn-link btn-floating mx-1">
                                                    <i class="fab fa-github"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="product-btn" data-bs-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</section>