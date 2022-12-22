<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="stylesheet" href="./css/styles.css">
</head>

<body>

    <!-- header -->
    <?php require_once('./inc_header.php') ?>
    <?php require_once('./inc_article_search.php') ?>

    <main id="main" class="container text-center">

        <!-- carousel publicitaire -->

        <section id="carouselPerso" class="publicite d-none d-md-block col-md-12">
            <div class="wrapper">
                <div id="containerPerso"></div>
            </div>
            <img id="leftArrow" src="img/icones/arrow-right.png" class="arrow" onclick="prevImage()" />
            <img id="rightArrow" src="img/icones/arrow-right.png" class="arrow" onclick="nextImage()" />
        </section>

        <!-- offres du moment -->
        <div class="compte-a-rebours">
            <div class="mt-5 d-flex justify-content-center align-items-center">
                <img src="./img\icones\flash-sale.png" alt="flash sale" width="60px" class="flash_img1">
                <p class="flash_title">
                    <span>Dépêchez vous !</span>
                    <span>il ne vous reste plus que</span>
                </p>
                <img src="./img\icones\flash-sale.png" alt="flash sale" width="60px" class="flash_img2">
            </div>
            <div id="flash">
                <div id="compteur" class="rebours"></div>
            </div>
        </div>

        <section class="moment">
            <h3>NOS OFFRES DU MOMENT</h3>
            <div class="row" id="promo">
                <div class="box col-xs-12 col-md-4 promo1 p-3">
                    <div class="promotion">
                        <img src="./img/moment/man.jpg" class="d-block w-100" alt="man">
                        <div class="wrap-button">
                            <button type="button" class="btn btn-offre mt-4">
                                <h4>HOMME</h4>
                            </button>
                        </div>
                    </div>

                </div>
                <div class="box col-xs-12 col-md-4 promo2 p-3">
                    <div class="promotion">
                        <img src="./img/moment/children2.jpg" class="d-block w-100" alt="children">
                        <div class="wrap-button">
                            <button type="button" class="btn btn-offre mt-4">
                                <h4>ENFANT</h4>
                            </button>
                        </div>
                    </div>

                </div>
                <div class="box col-xs-12 col-md-4 promo3 p-3">
                    <div class="promotion">
                        <img src="./img/moment/woman2.jpg" class="d-block w-100" alt="woman">
                        <div class="wrap-button">
                            <button type="button" class="btn btn-offre mt-4">
                                <h4>FEMME</h4>
                            </button>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- top produits -->
        <section id="top_produits" class="top_produits container ">

            <h3>TOP PRODUITS</h3>

            <div class="card-container row g-5">

                <!-- debut carte produit -->
                <div class="col-xs-12 col-md-6 col-xl-4">
                    <div class="card-produit">
                        <h4>
                            <span>Arts martiaux</span>
                            <span>nom du produit</span>
                        </h4>
                        <p class="description">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit
                            <a href="./produit.php">
                                <span class="more">voir plus</span>
                            </a>
                        </p>
                        <div class="position-relative">
                            <img class="" src="./img/top_produits/martial.jpg" alt="arts martiaux">
                            <div class="shop-price position-absolute">19.99 €</div>
                        </div>
                        <button class="product-btn" type="button"><i class="bi bi-cart-plus"></i> Ajouter au
                            panier</button>
                    </div>
                </div>
                <!-- fin carte produit -->

                <!-- debut carte produit -->
                <div class="col-xs-12 col-md-6 col-xl-4">
                    <div class="card-produit">
                        <h4>
                            <span>Boxe et sports de combat</span>
                            <span>nom du produit</span>
                        </h4>
                        <p class="description">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit<a href="./produit.php">
                                <span class="more">voir plus</span></a>
                        </p>
                        <div class="position-relative">
                            <img src="./img/top_produits/combat.jpg" alt="sports de combat">
                            <div class="shop-price position-absolute">19.99 €</div>
                        </div>
                        <button class="product-btn" type="button"><i class="bi bi-cart-plus"></i> Ajouter au
                            panier</button>
                    </div>
                </div>
                <!-- fin carte produit -->

                <!-- debut carte produit -->
                <div class="col-xs-12 col-md-6 col-xl-4">
                    <div class="card-produit">
                        <h4>
                            <span>Yoga & Meditation</span>
                            <span>nom du produit</span>
                        </h4>
                        <p class="description">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit<a href="./produit.php">
                                <span class="more">voir plus</span></a>
                        </p>
                        <div class="position-relative">
                            <img src="./img/top_produits/yoga.jpg" alt="yoga">
                            <div class="shop-price position-absolute">19.99 €</div>
                        </div>
                        <button class="product-btn" type="button"><i class="bi bi-cart-plus"></i> Ajouter au
                            panier</button>
                    </div>
                </div>
                <!-- fin carte produit -->

                <!-- debut carte produit -->
                <div class="col-xs-12 col-md-6 col-xl-4">
                    <div class="card-produit">
                        <h4>
                            <span>Protections, Gants, Casques</span>
                            <span>nom du produit</span>
                        </h4>
                        <p class="description">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit<a href="./produit.php">
                                <span class="more">voir plus</span></a>
                        </p>
                        <div class="position-relative">
                            <img src="./img/top_produits/protector.jpg" alt="protector">
                            <div class="shop-price position-absolute">19.99 €</div>
                        </div>
                        <button class="product-btn" type="button"><i class="bi bi-cart-plus"></i> Ajouter au
                            panier</button>
                    </div>
                </div>
                <!-- fin carte produit -->

                <!-- debut carte produit -->
                <div class="col-xs-12 col-md-6 col-xl-4">
                    <div class="card-produit">
                        <h4>
                            <span>Materiel de frappe</span>
                            <span>nom du produit</span>
                        </h4>
                        <p class="description">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit<a href="./produit.php">
                                <span class="more">voir plus</span></a>
                        </p>
                        <div class="position-relative">
                            <img src="./img/top_produits/frappe.jpg" alt="materiel de frappe">
                            <div class="shop-price position-absolute">19.99 €</div>
                        </div>
                        <button class="product-btn" type="button"><i class="bi bi-cart-plus"></i> Ajouter au
                            panier</button>
                    </div>
                </div>
                <!-- fin carte produit -->

                <!-- debut carte produit -->
                <div class="col-xs-12 col-md-6 col-xl-4">
                    <div class="card-produit">
                        <h4>
                            <span>Equipement, tatamis, mannequin</span>
                            <span>nom du produit</span>
                        </h4>
                        <p class="description">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit<a href="./produit.php">
                                <span class="more">voir plus</span></a>
                        </p>
                        <div class="position-relative">
                            <img src="./img/top_produits/equipement.jpg" alt="equipement, tatamis, mannequin">
                            <div class="shop-price position-absolute">19.99 €</div>
                        </div>
                        <button class="product-btn" type="button"><i class="bi bi-cart-plus"></i> Ajouter au
                            panier</button>
                    </div>
                </div>
                <!-- fin carte produit -->

                <!-- debut carte produit -->
                <div class="col-xs-12 col-md-6 col-xl-4">
                    <div class="card-produit">
                        <h4>
                            <span>Chaussures</span>
                            <span>nom du produit</span>
                        </h4>
                        <p class="description">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit<a href="./produit.php">
                                <span class="more">voir plus</span></a>
                        </p>
                        <div class="position-relative">
                            <img src="./img/top_produits/chaussures.jpg" alt="Chaussures">
                            <div class="shop-price position-absolute">19.99 €</div>
                        </div>
                        <button class="product-btn" type="button"><i class="bi bi-cart-plus"></i> Ajouter au
                            panier</button>
                    </div>
                </div>
                <!-- fin carte produit -->

                <!-- debut carte produit -->
                <div class="col-xs-12 col-md-6 col-xl-4">
                    <div class="card-produit">
                        <h4>
                            <span>Sacs de sport</span>
                            <span>nom du produit</span>
                        </h4>
                        <p class="description">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit<a href="./produit.php">
                                <span class="more">voir plus</span></a>
                        </p>
                        <div class="position-relative">
                            <img src="./img/top_produits/sac.jpg" alt="Sacs de sport">
                            <div class="shop-price position-absolute">19.99 €</div>
                        </div>
                        <button class="product-btn" type="button"><i class="bi bi-cart-plus"></i> Ajouter au
                            panier</button>
                    </div>
                </div>
                <!-- fin carte produit -->

                <!-- debut carte produit -->
                <div class="col-xs-12 col-md-6 col-xl-4">
                    <div class="card-produit">
                        <h4>
                            <span>Armes, Sabres, Epees</span>
                            <span>nom du produit</span>
                        </h4>
                        <p class="description">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit<a href="./produit.php">
                                <span class="more">voir plus</span></a>
                        </p>
                        <div class="position-relative">
                            <img src="./img/top_produits/armes.jpg" alt="armes, Sabres, Epees">

                            <div class="shop-price position-absolute">19.99 €</div>
                        </div>
                        <button class="product-btn" type="button"><i class="bi bi-cart-plus"></i> Ajouter au
                            panier</button>
                    </div>
                </div>
                <!-- fin carte produit -->
            </div>
        </section>

        <section>
            <h3>NOS SPORTS</h3>
            <div class="sports owl-carousel owl-theme">
                <div class="item sport">
                    <h4>Taekwondo</h4>
                    <img src="./img/sport/taekwondo.jpg" alt="taekwondo">
                    <p>
                        
                    </p>
                    <a href="https://fr.wikipedia.org/wiki/Taekwondo" target="_blank">voir plus</a>
                </div>
                <div class="item sport">
                    <h4>kickboxing</h4>
                    <img src="./img/sport/kickboxing.jpg" alt="kickboxing">
                    <p>
                       
                    </p>
                    <a href="https://fr.wikipedia.org/wiki/kickboxing" target="_blank">voir plus</a>
                </div>
                <div class="item sport">
                    <h4>Karate</h4>
                    <img src="./img/sport/karate.jpg" alt="karate">
                    <p>
                  
                    </p>
                    <a href="https://fr.wikipedia.org/wiki/Karate" target="_blank">voir plus</a>
                </div>
                <div class="item sport">
                    <h4>MMA</h4>
                    <img src="./img/sport/mma.jpg" alt="mma">
                    <p>
           
                    </p>
                    <a href="https://fr.wikipedia.org/wiki/Arts_martiaux_mixtes" target="_blank">voir plus</a>
                </div>
                <div class="item sport">
                    <h4>Judo</h4>
                    <img src="./img/sport/judo.jpeg" alt="judo">
                    <p>
                     
                    </p>
                    <a href="https://fr.wikipedia.org/wiki/Judo" target="_blank">voir plus</a>
                </div>
                <div class="item sport">
                    <h4>Aikido</h4>
                    <img src="./img/sport/aikido.jpg" alt="aikido">
                    <p>
                
                    </p>
                    <a href="https://fr.wikipedia.org/wiki/aikido" target="_blank">voir plus</a>
                </div>
                <div class="item sport">
                    <h4>viet vo dao</h4>
                    <img src="./img/sport/viet_vo_dao.jpg" alt="Việt Võ Đạo">
                    <p>
             
                    </p>
                    <a href="https://fr.wikipedia.org/wiki/Vovinam_Vi%E1%BB%87t_V%C3%B5_%C4%90%E1%BA%A1o" target="_blank">voir plus</a>
                </div>
                <div class="item sport">
                    <h4>Kung Fu</h4>
                    <img src="./img/sport/kung_fu.jpg" alt="kung fu">
                    <p>
                   
                    </p>
                    <a href="https://fr.wikipedia.org/wiki/kung-fu" target="_blank">voir plus</a>
                </div>
                <div class="item sport">
                    <h4>Tai Chi</h4>
                    <img src="./img/sport/tai_chi.jpg" alt="tai chi">
                    <p>
                
                    </p>
                    <a href="https://fr.wikipedia.org/wiki/tai-chi" target="_blank">voir plus</a>
                </div>
                <div class="item sport">
                    <h4>Yoga</h4>
                    <img src="./img/sport/yoga.jpg" alt="Yoga">
                    <p>
              
                    </p>
                    <a href="https://fr.wikipedia.org/wiki/Yoga" target="_blank">voir plus</a>
                </div>
                <div class="item sport">
                    <h4>Krav maga</h4>
                    <img src="./img/sport/krav_maga.jpg" alt="Krav maga">
                    <p>
            
                    </p>
                    <a href="https://fr.wikipedia.org/wiki/krav-maga" target="_blank">voir plus</a>
                </div>
                <div class="item sport">
                    <h4>Pencak Silat</h4>
                    <img src="./img/sport/Penchak_Silat.jpg" alt="Penchak Silat">
                    <p>
              
                    </p>
                    <a href="https://fr.wikipedia.org/wiki/Pencak-Silat" target="_blank">voir plus</a>
                </div>
            </div>
            <div class="owl-controls clickable"></div>
        </section>

        <section>
            <h3>NOS MARQUES</h3>
            <div class="marques owl-carousel owl-theme">
                <div class="item marque fs-6 text-uppercase">
                    <h4>Venum</h4>
                    <img src="./img/marques/venum.png" alt="venum">
                </div>
                <div class="item marque fs-6 text-uppercase">
                    <h4>BudoFight</h4>
                    <img src="./img/marques/budofight.svg" alt="budofight">
                </div>
                <div class="item marque fs-6 text-uppercase">
                    <h4>Adidas</h4>
                    <img src="./img/marques/adidas.png" alt="adidas">
                </div>
                <div class="item marque fs-6 text-uppercase">
                    <h4>Century</h4>
                    <img src="./img/marques/century.png" alt="century">
                </div>
                <div class="item marque fs-6 text-uppercase">
                    <h4>Fairtex</h4>
                    <img src="./img/marques/Fairtex-logo.png" alt="fairtex">
                </div>
                <div class="item marque fs-6 text-uppercase">
                    <h4>Meiji Japon</h4>
                    <img src="./img/marques/meiji.png" alt="meiji">
                </div>
                <div class="item marque fs-6 text-uppercase">
                    <h4>UFC</h4>
                    <img src="./img/marques/ufc.png" alt="ufc">
                </div>
                <div class="item marque fs-6 text-uppercase">
                    <h4>METAL BOXE</h4>
                    <img src="./img/marques/metal_boxe.png" alt="metal boxe">
                </div>
            </div>
            <div class="owl-controls clickable"></div>
        </section>
    </main>

    <!-- Footer -->
    <?php require_once('./inc_footer.php') ?>

</body>

</html>