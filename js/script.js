// carousel publicitaire

// variables résolution écran         
let screenW = window.innerWidth;
let screenH = window.innerHeight;
console.log(screenW);
console.log(screenH);

// au chargement de la page...
window.onload = function createDiv() {
    nbr = 7;
    p = 0;
    container = document.getElementById("containerPerso");
    leftArrow = document.getElementById("leftArrow");
    rightArrow = document.getElementById("rightArrow");
    // largeur du container : width = largeur écran * 7 img
    container.style.width = (1300 * nbr) + "px";
    // création des images
    for (i = 1; i <= nbr; i++) {
        div = document.createElement("div");
        div.className = "divContent";
        div.style.background = "url(./img/carousel_pub/q-90_" + i + ".jpg)" + 1300 + "px";
        container.appendChild(div);
    }
    opacityBtn();
};

// clavier flèche gauche
function prevImage() {
    if (p > -nbr + 1) {
        p--;
        container.style.transform = "translate(" + p * 1300 + "px)";
        container.style.transition = "all 0.5s ease";
    }
    opacityBtn();
};

// bouton flèche gauche
leftArrow.onclick = function () {
    prevImage();
};

// clavier flèche droite
function nextImage() {
    if (p < 0) {
        p++;
        container.style.transform = "translate(" + p * 1300 + "px)";
        container.style.transition = "all 0.5s ease";
    }
    opacityBtn();
};

// bouton flèche droite
rightArrow.onclick = function () {
    nextImage();
};

// touche gauche ou touche droite du clavier
document.addEventListener("keydown", function (e) {
    if (e.keyCode === 37) {
        prevImage();
    }
    else if (e.keyCode === 39) {
        nextImage();
    }
});

// opacity réduite pour les flèches gauche ou droite à la première ou à la dernière image
function opacityBtn() {
    if (p == -nbr + 1) {
        leftArrow.style.opacity = 0.1;
        leftArrow.style.transition = "all 0.5s ease";
    }
    else {
        leftArrow.style.opacity = 0.6;
        leftArrow.style.transition = "all 0.5s ease";
    }

    if (p == 0) {
        rightArrow.style.opacity = 0.1;
        rightArrow.style.transition = "all 0.5s ease";
    }
    else {
        rightArrow.style.opacity = 0.6;
        rightArrow.style.transition = "all 0.5s ease";
    }
};

// owl-carousel

$(document).ready(function () {
    // owl-carousel marques
    $('.marques').owlCarousel({
        nav: true,
        loop: true,
        margin: 30,
        autoplay: true,
        autoplayTimeout: 2000,
        autoplayHoverPause: true,
        responsive: {
            0: {
                nav: true,
                items: 1
            },
            600: {
                nav: true,
                items: 3
            },
            1300: {
                nav: true,
                items: 5
            }
        }
    });

    // owl-carousel sport
    $('.sports').owlCarousel({
        nav: true,
        margin: 30,
        loop: true,
        autoplay: true,
        autoplayTimeout: 2000,
        autoplayHoverPause: true,
        responsiveClass: true,
        responsive: {
            0: {
                nav: true,
                items: 1,
            },
            600: {
                nav: true,
                items: 3,
            },
            1300: {
                nav: true,
                items: 5,
            }
        }
    });
});

// animation promos

$(window).scroll(function () {
    var top_of_element = $("#promo").offset().top;
    var bottom_of_element = $("#promo").offset().top + $("#promo").outerHeight();
    var bottom_of_screen = $(window).scrollTop() + $(window).innerHeight();
    var top_of_screen = $(window).scrollTop();
    if ((bottom_of_screen > top_of_element) && (top_of_screen < bottom_of_element)) {
        // si la div avec l'id #promo est visible sur l'écran...
        $(".promo1").addClass("animationPromo1");
        $(".promo2").addClass("animationPromo2");
        $(".promo3").addClass("animationPromo3");
    }
});

// API carte

// function init() {
//     map = new OpenLayers.Map("basicMap");
//     var mapnik = new OpenLayers.Layer.OSM();
//     map.addLayer(mapnik);
//     map.setCenter(new OpenLayers.LonLat(13.41, 52.52) // Centre de la carte
//         .transform(
//             new OpenLayers.Projection("EPSG:4326"), // transformation de WGS 1984
//             new OpenLayers.Projection("EPSG:900913") // en projection Mercator sphérique
//         ), 15 // Zoom level
//     );
// }