<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produit</title>
    <link rel="stylesheet" href="./css/styles.css">
</head>

<body>

    <!-- header -->
    <?php require('./inc_header.php') ?>
    <?php require('./inc_article_search.php') ?>

    <!-- main -->
    <main>

        <!-- ----------fiche produit ------------- -->
        <div class="product_area">

            <section class="container m-auto row g-5 mb-4">

                <h3 class="product_title text-center">Nom du produit</h3>

                <div class="product-wrapper col-xs-12 col-md-6">
                    <button class="zap-btn prev"><i class="bi bi-chevron-left"></i></button>
                    <div class="image-container">
                        <img src="./img/produits/gant_veg/fit-max-1.jpg" alt="slide 1">
                        <img src="./img/produits/gant_veg/fit-max-2.jpg" alt="slide 2">
                        <img src="./img/produits/gant_veg/fit-max-3.jpg" alt="slide 3">
                        <img src="./img/produits/gant_veg/fit-max-4.jpg" alt="slide 4">
                        <img src="./img/produits/gant_veg/fit-max-5.jpg" alt="slide 5">

                    </div>
                    <button class="zap-btn next"><i class="bi bi-chevron-right"></i></button>

                    <div class="nav-btns">
                        <button class="nav-btn active"></button>
                        <button class="nav-btn"></button>
                        <button class="nav-btn"></button>
                        <button class="nav-btn"></button>
                        <button class="nav-btn"></button>
                    </div>
                </div>



                <div class="product-info col-xs-12 col-md-6">
                    <div class="product_description">
                        <div class="price-container">
                            <p class="txt_price">Prix unitaire :</p>
                            <p class="price">
                                <span class="montant" id="unit-price">199</span>
                                <span class="euro"> €</span>
                            </p>
                        </div>
                        <div class="product_description mt-3">
                            <h4>Description du produit</h4>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa excepturi animi at
                                odit
                                reprehenderit, incidunt cupiditate molestiae ab quam recusandae, officiis, non
                                nam
                                delectus!
                                Sequi mollitia consequatur nulla nemo nihil.
                            </p>
                        </div>
                    </div>
                    <div class="product-form mt-3">
                        <form method="#">
                            <div class="finalize">
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>choisissez votre taille</option>
                                    <option value="1">10oz</option>
                                    <option value="2">12oz</option>
                                    <option value="3">14oz</option>
                                    <option value="3">16oz</option>
                                    <option value="3">18oz</option>
                                </select>
                                <p class="guide ms-2">
                                    <a href="#"><span class="text-decoration-underline">guide des tailles</span>
                                        *</a>
                                </p>
                                <h4>quantité</h4>
                                <input type="number" name="quantity" id="quantity" min="1" placeholder="1">
                                <p class="txt_price">
                                    Prix total :
                                    <span class="total-amount" id="total-amount">--</span>
                                    <span> €</span>
                                </p>
                                <button class="product-btn" type="button"><i class="bi bi-cart-plus"></i>
                                    Ajouter au
                                    panier</button>
                            </div>
                        </form>
                    </div>
                </div>
            </section>

            <!-- ----------avis autres clients ------------- -->
            <section class="container m-auto row g-5 mb-4">
                <h3 class="text-center">Avis de nos autres clients</h3>
                <div class="col-xs-12 col-md-4">
                    <div class="avis_name">
                        <p><span><strong>Fabien D</strong></span></p>
                        <div class="avis_icon" style="color:goldenrod;">
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                        </div>
                    </div>
                    <p class="avis_text">
                        <span class="avis_desc">
                            Lorem ipsum dolor, sit amet consectetur
                            adipisicing elit. Dignissimos suscipit ab
                            impedit nulla, fugit officia totam adipisci
                            commodi, vero assumenda repellendus, ullam
                            ratione fuga magni ipsam maxime? Ratione,
                            obcaecati id Lorem, ipsum dolor sit amet
                            consectetur adipisicing elit.
                        </span>
                        <br>
                        <br>
                        <span class="avis_date">
                            le xx/xx/2022
                        </span>
                    </p>
                </div>
                <div class="col-xs-12 col-md-4">
                    <div class="avis_name">
                        <p><span><strong>Thierry X</strong></span></p>
                        <div class="avis_icon" style="color:goldenrod;">
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                        </div>
                    </div>
                    <p class="avis_text">
                        <span class="avis_desc">
                            Lorem ipsum dolor, sit amet consectetur
                            adipisicing elit. Dignissimos suscipit ab
                            impedit nulla, fugit officia totam adipisci
                            commodi, vero assumenda repellendus, ullam
                            ratione fuga magni ipsam maxime? Ratione,
                            obcaecati id Lorem, ipsum dolor sit amet
                            consectetur adipisicing elit.
                        </span>
                        <br>
                        <br>
                        <span class="avis_date">
                            le xx/xx/2022
                        </span>
                    </p>
                </div>
                <div class="col-xs-12 col-md-4">
                    <div class="avis_name">
                        <p><span><strong>Sophie P</strong></span></p>
                        <div class="avis_icon" style="color:goldenrod;">
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                        </div>
                    </div>
                    <p class="avis_text">
                        <span class="avis_desc">
                            Lorem ipsum dolor, sit amet consectetur
                            adipisicing elit. Dignissimos suscipit ab
                            impedit nulla, fugit officia totam adipisci
                            commodi, vero assumenda repellendus, ullam
                            ratione fuga magni ipsam maxime? Ratione,
                            obcaecati id Lorem, ipsum dolor sit amet
                            consectetur adipisicing elit.
                        </span>
                        <br>
                        <br>
                        <span class="avis_date">
                            le xx/xx/2022
                        </span>
                    </p>
                </div>
            </section>

            <!-- ----------produits similaires ------------- -->
            <section class="container m-auto row g-5 mb-4">
                <h3 class="similar_product_title text-center">Produits similaires</h3>
                <div class="similar_product_container col-xs-6 col-md-2">
                    <a href="#" class="similar_product_item">
                        <img src="./img/produits/fit-max-goku.jpg" alt="gant de boxe dbz goku" />
                        <p class="similar_product_item">
                            <span class="similar_product_name">nom du produit</span>
                            <span class="similar_product_description">discipline, code, marque...</span>
                        </p>
                    </a>
                </div>
                <div class="similar_product_container col-xs-6 col-md-2">
                    <a href="#" class="similar_product_item">
                        <img src="./img/produits/fit-max-gohan.jpg" alt="gant de boxe dbz gohan" />
                        <p class="similar_product_item">
                            <span class="similar_product_name">nom du produit</span>
                            <span class="similar_product_description">discipline, code, marque...</span>
                        </p>
                    </a>
                </div>
                <div class="similar_product_container col-xs-6 col-md-2">
                    <a href="#" class="similar_product_item">
                        <img src="./img/produits/fit-max-vegeta.jpg" alt="gant de boxe dbz vegeta" />
                        <p class="similar_product_item">
                            <span class="similar_product_name">nom du produit</span>
                            <span class="similar_product_description">discipline, code, marque...</span>
                        </p>
                    </a>
                </div>
                <div class="similar_product_container col-xs-6 col-md-2">
                    <a href="#" class="similar_product_item">
                        <img src="./img/produits/fit-max-freezer.jpg" alt="gant de boxe dbz freezer" />
                        <p class="similar_product_item">
                            <span class="similar_product_name">nom du produit</span>
                            <span class="similar_product_description">discipline, code, marque...</span>
                        </p>
                    </a>
                </div>
                <div class="similar_product_container col-xs-6 col-md-2">
                    <a href="#" class="similar_product_item">
                        <img src="./img/produits/fit-max-cell.jpg" alt="gant de boxe dbz cell" />
                        <p class="similar_product_item">
                            <span class="similar_product_name">nom du produit</span>
                            <span class="similar_product_description">discipline, code, marque...</span>
                        </p>
                    </a>
                </div>
                <div class="similar_product_container col-xs-6 col-md-2">
                    <a href="#" class="similar_product_item">
                        <img src="./img/produits/fit-max-majinbuu.jpg" alt="gant de boxe dbz buu" />
                        <p class="similar_product_item">
                            <span class="similar_product_name">nom du produit</span>
                            <span class="similar_product_description">discipline, code, marque...</span>
                        </p>
                    </a>
                </div>
            </section>
        </div>
    </main>

    <!-- Footer -->
    <?php require('./inc_footer.php') ?>

</body>

</html>