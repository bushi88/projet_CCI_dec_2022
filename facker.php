<?php

$host = 'localhost';
$adminUser = 'root';
$pwd = '';
$table = 'bushi.do';
$conn = mysqli_connect($host, $adminUser, $pwd, $table);

// php orienté objet
// $conn = new mysqli('localhost', 'root', '', 'bushi.do');

if (!$conn) {
    die("erreur de connexion" . mysqli_connect_error());
};

require_once './vendor/autoload.php';

$faker = Faker\Factory::create('fr_FR');

// on vide toutes les tables.
// $trunc1 = 'TRUNCATE `article`';
// mysqli_query($conn, $trunc1);
// $trunc2 = 'TRUNCATE `category`';
// mysqli_query($conn, $trunc2);
// $trunc3 = 'TRUNCATE `contact_form`';
// mysqli_query($conn, $trunc3);
// $trunc4 = 'TRUNCATE `customer_address`';
// mysqli_query($conn, $trunc4);
// $trunc5 = 'TRUNCATE `discount`';
// mysqli_query($conn, $trunc5);
// $trunc6 = 'TRUNCATE `purchaseorder`';
// mysqli_query($conn, $trunc6);
// $trunc7 = 'TRUNCATE `shipping`';
// mysqli_query($conn, $trunc7);
// $trunc8 = 'TRUNCATE `testimonial`';
// mysqli_query($conn, $trunc8);
// $trunc9 = 'TRUNCATE `user`';
// mysqli_query($conn, $trunc9);
// $trunc10 = 'TRUNCATE `wish_list`';
// mysqli_query($conn, $trunc10);

// ******************************* //
// insertion dans la table `user`  //
// ******************************* //

// $sql_user = "SELECT * FROM `user`";

for ($i = 1; $i < 25; $i++) {
    $user_mail = $faker->unique()->email();
    $user_password = $faker->password(5, 10);
    $user_gender = rand(1, 3);
    $user_lastname = $faker->lastName();
    $user_firstname = $faker->firstName();
    $user_birthdate = $faker->dateTimeThisCentury()->format('Y-m-d');
    $user_rgpd = rand(0, 1);

    $sql_user = 'INSERT INTO user(
                                user_mail, 
                                user_password,
                                user_gender,
                                user_lastname,
                                user_firstname,
                                user_birthdate,
                                user_rgpd
                                )        
                VALUES          (
                                "' . $user_mail . '",
                                "' . htmlspecialchars($user_password) . '",
                                "' . $user_gender . '",
                                "' . $user_lastname . '",
                                "' . $user_firstname . '",
                                "' . $user_birthdate . '",
                                "' . $user_rgpd . '"
                                )';

    echo $sql_user;

    if (mysqli_query($conn, $sql_user)) {
        echo '<br> insert into table user ok <br><br>';
    } else {
        echo 'error ' . $sql_user . '<br>' . $mysqli_error($conn);
    }
};

echo '<br>';

// ******************************************* //
// insertion dans la table `customer_address`  //
// ******************************************* //

// $sql_customer_address = "SELECT * FROM `customer_address`";

for ($i = 1; $i < 25; $i++) {

    $street_number = rand(1, 999);
    $street_name = $faker->sentence();
    $zip_code = $faker->postcode();
    $city = $faker->city();
    $country = $faker->country();
    $phone = $faker->phoneNumber();

    $sql_customer_address = 'INSERT INTO customer_address(
                                street_number,
                                street_name,
                                zip_code,
                                city,
                                country,
                                phone
                            )
            VALUES          (
                            ' . $street_number . ',
                            "' . $street_name . '",
                            "' . $zip_code . '",
                            "' . $city . '",
                            "' . $country . '",
                            "' . $phone . '"
                            )';

    echo $sql_customer_address;

    if (mysqli_query($conn, $sql_customer_address)) {
        echo '<br> insert into table customer_address ok <br><br>';
    } else {
        echo 'error ' . $sql_customer_address . '<br>' . $mysqli_error($conn);
    }
};

echo '<br>';

// *************************************** //
// insertion dans la table `contact_form`  //
// *************************************** //

// $sql_contact_form = "SELECT * FROM `contact_form`";

for ($i = 1; $i < 25; $i++) {

    $contact_gender = rand(1, 3);
    $contact_lastname = $faker->lastName();
    $contact_firstname = $faker->firstName();
    $contact_mail = $faker->unique()->email();
    $contact_object = $faker->sentence();
    $contact_message = $faker->sentence();
    $contact_rgpd = rand(0, 1);

    $sql_contact_form = 'INSERT INTO contact_form(
                                gender,
                                lastname,
                                firstname,
                                mail,
                                object,
                                message,
                                user_rgpd
                                )
                        VALUES  (
                                ' . $contact_gender . ',
                                "' . $contact_lastname . '",
                                "' . $contact_firstname . '",
                                "' . $contact_mail . '",
                                "' . $contact_object . '",
                                "' . $contact_message . '",
                                ' . $contact_rgpd . '
                                )';

    echo $sql_contact_form;

    if (mysqli_query($conn, $sql_contact_form)) {
        echo '<br> insert into table contact_form ok <br><br>';
    } else {
        echo 'error ' . $sql_contact_form . '<br>' . $mysqli_error($conn);
    }
};

echo '<br>';

// *********************************** //
// insertion dans la table `category`  //
// *********************************** //

// $sql_category = "SELECT * FROM `category`";

for ($i = 1; $i < 25; $i++) {

    $category_name = $faker->sentence(3);
    $category_description = $faker->sentence();
    $category_slug = $faker->sentence();
    $category_img = $faker->imageUrl(700, 400, 'category', true);
    $category_alt = $faker->sentence();

    $sql_category = 'INSERT INTO category(
                                name,
                                description,
                                slug,
                                image,
                                alt
                            )
            VALUES          (
                            "' . $category_name . '",
                            "' . $category_description . '",
                            "' . $category_slug . '",
                            "' . $category_img . '",
                            "' . $category_alt . '"
                            )';

    echo $sql_category;

    if (mysqli_query($conn, $sql_category)) {
        echo '<br> insert into table category ok <br><br>';
    } else {
        echo 'error ' . $sql_category . '<br>' . $mysqli_error($conn);
    }
};

echo '<br>';

// ********************************** //
// insertion dans la table `article`  //
// ********************************** //

// $sql_article = "SELECT * FROM `article`";

for ($i = 1; $i < 25; $i++) {

    $article_name = $faker->sentence(3);
    $article_description = $faker->sentence();
    $article_slug = $faker->sentence();
    $article_image = $faker->imageUrl(800, 800, 'article', true);
    $article_image_alt = $faker->sentence();
    $article_price = $faker->randomFloat(2, 1, 1000); // nb décimal, mini, maxi
    $article_size = $faker->randomFloat(2, 1, 1000);
    $article_length = $faker->randomFloat(2, 1, 1000);
    $article_weigth = $faker->randomFloat(2, 1, 1000);
    $article_gtin = $faker->randomNumber();
    $article_stock_qty = rand(1, 999);
    $article_similar_name = $faker->sentence(3);
    $article_similar_slug = $faker->sentence();
    $article_similar_image = $faker->imageUrl(800, 800, 'similar_article', true);
    $article_similar_alt = $faker->sentence();

    $sql_article = 'INSERT INTO article(
                                article_name,
                                article_description,
                                article_slug,
                                article_image,
                                article_image_alt,
                                article_price,
                                article_size,
                                article_length,
                                article_weigth,
                                article_gtin,
                                article_stock_qty,
                                article_similar_name,
                                article_similar_slug,
                                article_similar_image,
                                article_similar_alt
                                )
                    VALUES      (
                                "' . $article_name . '",
                                "' . $article_description . '",
                                "' . $article_slug . '",
                                "' . $article_image . '",
                                "' . $article_image_alt . '",
                                ' . $article_price . ',
                                ' . $article_size . ',
                                ' . $article_length . ',
                                ' . $article_weigth . ',
                                ' . $article_gtin . ',
                                ' . $article_stock_qty . ',
                                "' . $article_similar_name . '",
                                "' . $article_similar_slug . '",
                                "' . $article_similar_image . '",
                                "' . $article_similar_alt . '"
                                )';

    echo $sql_article;

    if (mysqli_query($conn, $sql_article)) {
        echo '<br> insert into table article ok <br><br>';
    } else {
        echo 'error ' . $sql_article . '<br>' . $mysqli_error($conn);
    }
};

echo '<br>';

// ************************************ //
// insertion dans la table `wish_list`  //
// ************************************ //

// $sql_wish = "SELECT * FROM `wish_list`";

for ($i = 1; $i < 25; $i++) {
    $wish_price = $faker->randomFloat(2, 1, 1000);
    $wish_article = $faker->sentence(3);
    $wish_qty = rand(1, 10);

    $sql_wish = 'INSERT INTO wish_list(
                                wish_price,
                                wish_article,                                
                                wish_qty
                            )        
                 VALUES     (
                            ' . $wish_price . ',
                            "' . $wish_article . '",
                            ' . $wish_qty . '
                            )';

    echo $sql_wish;

    if (mysqli_query($conn, $sql_wish)) {
        echo '<br> insert into table wish_list ok <br><br>';
    } else {
        echo 'error ' . $sql_wish . '<br>' . $mysqli_error($conn);
    }
};

echo '<br>';

// *********************************** //
// insertion dans la table `shipping`  //
// *********************************** //

// $sql_shipping = "SELECT * FROM `shipping`";

for ($i = 1; $i < 25; $i++) {

    $tracking_number = $faker->sentence(1);
    $carrier = $faker->word(3);

    $sql_shipping = 'INSERT INTO shipping(                              
                                tracking_number,
                                carrier
                            )
            VALUES          (                       
                            "' . $tracking_number . '",
                            "' . $carrier . '"
                            )';

    echo $sql_shipping;

    if (mysqli_query($conn, $sql_shipping)) {
        echo '<br> insert into table shipping ok <br><br>';
    } else {
        echo 'error ' . $sql_shipping . '<br>' . $mysqli_error($conn);
    }
};

echo '<br>';

// *********************************** //
// insertion dans la table `discount`  //
// *********************************** //

// $sql_discount = "SELECT * FROM `discount`";

for ($i = 1; $i < 25; $i++) {

    $pourcentage_value = $faker->randomFloat(2, 0, 100);
    $reduction_value = $faker->randomFloat(2);
    $promotion_code = $faker->word(1);
    $start_date_time = $faker->dateTimeThisCentury()->format('Y-m-d');
    $end_date_time = $faker->dateTimeThisCentury()->format('Y-m-d');

    $sql_discount = 'INSERT INTO discount(
                                pourcentage_value,
                                reduction_value,
                                promotion_code,
                                start_date_time,
                                end_date_time
                            )
                    VALUES  (
                            ' . $pourcentage_value . ',
                            ' . $reduction_value . ',
                            "' . $promotion_code . '",
                            "' . $start_date_time . '",
                            "' . $end_date_time . '"
                            )';

    echo $sql_discount;

    if (mysqli_query($conn, $sql_discount)) {
        echo '<br> insert into table discount ok <br><br>';
    } else {
        echo 'error ' . $sql_discount . '<br>' . $mysqli_error($conn);
    }
};

echo '<br>';

// **************************************** //
// insertion dans la table `purchaseorder`  //
// **************************************** //

// $sql_order = "SELECT * FROM `purchaseorder`";

for ($i = 1; $i < 25; $i++) {
    $order_number = $faker->sentence(1);
    $order_date = $faker->dateTimeThisCentury()->format('Y-m-d');
    $order_article_qty = rand(1, 100);
    $order_price_ht = $faker->randomFloat(2);
    $order_price_ttc = $faker->randomFloat(2);
    $order_tax = $faker->randomFloat(2, 0, 100);
    $order_confirm = rand(0, 1);
    $order_delete = rand(0, 1);

    $sql_order = 'INSERT INTO purchaseorder(                             
                                order_number,
                                order_date,
                                order_article_qty,
                                order_price_ht,
                                order_price_ttc,
                                order_tax,
                                order_confirm,
                                order_delete
                            )
                VALUES      (                   
                            "' . $order_number . '",
                            "' . $order_date . '",
                            ' . $order_article_qty . ',
                            ' . $order_price_ht . ',
                            ' . $order_price_ttc . ',
                            ' . $order_tax . ',
                            "' . $order_confirm . '",
                            "' . $order_delete . '"
                            )';

    echo $sql_order;

    if (mysqli_query($conn, $sql_order)) {
        echo '<br> insert into table purchaseorder ok <br><br>';
    } else {
        echo 'error ' . $sql_order . '<br>' . $mysqli_error($conn);
    }
};

echo '<br>';

// ************************************** //
// insertion dans la table `testimonial`  //
// ************************************** //

// $sql_testimonial = "SELECT * FROM `testimonial`";

for ($i = 1; $i < 25; $i++) {

    $testimonial_note = rand(1, 5);
    $testimonial_comment = $faker->sentence(5);
    $testimonial_created_date = $faker->dateTimeThisCentury()->format('Y-m-d');
    $testimonial_updated_date = $faker->dateTimeThisCentury()->format('Y-m-d');

    $sql_testimonial = 'INSERT INTO testimonial(
                                note,
                                comment,
                                created_date,
                                updated_date
                            )
            VALUES          (                          
                            ' . $testimonial_note . ',
                            "' . $testimonial_comment . '",
                            "' . $testimonial_created_date . '",
                            "' . $testimonial_updated_date . '"
                            )';

    echo $sql_testimonial;

    if (mysqli_query($conn, $sql_testimonial)) {
        echo '<br> insert into table testimonial ok <br><br>';
    } else {
        echo 'error ' . $sql_testimonial . '<br>' . $mysqli_error($conn);
    }
};

echo '<br>';


mysqli_close($conn);
