/////////////////////////
// *** page accueil ***//
/////////////////////////

// variables résolution écran         
let screenW = window.innerWidth;
let screenH = window.innerHeight;
console.log(screenW);
console.log(screenH);

// carousel publicitaire

let leftArrow = "";
let rightArrow = "";
let container = "";

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
    let top_of_element = $("#promo").offset().top;
    let bottom_of_element = $("#promo").offset().top + $("#promo").outerHeight();
    let bottom_of_screen = $(window).scrollTop() + $(window).innerHeight();
    let top_of_screen = $(window).scrollTop();
    if ((bottom_of_screen > top_of_element) && (top_of_screen < bottom_of_element)) {
        // si la div avec l'id #promo est visible sur l'écran...
        $(".promo1").addClass("animationPromo1");
        $(".promo2").addClass("animationPromo2");
        $(".promo3").addClass("animationPromo3");
    }
});



/////////////////////////
// *** page produit ***//
/////////////////////////


// Slider produit //

let img_container = document.querySelector(".image-container");

// Scroll avec boutons "arrow"
let next_btn = document.querySelector(".zap-btn.next");
next_btn.addEventListener("click", () => {
    img_container.scrollLeft += 200
});

let prev_btn = document.querySelector(".zap-btn.prev");
prev_btn.addEventListener("click", () => {
    img_container.scrollLeft -= 200
});

// mise à jour class 'active' pour les indicateurs nav-btns
let nav_btns = document.querySelectorAll(".nav-btn")
img_container.addEventListener("scroll", () => {
    let scroll_pos = img_container.scrollLeft

    nav_btns.forEach(nav_btn => {
        nav_btn.classList.remove("active")
    })

    if (scroll_pos < 200) {
        nav_btns[0].classList.add("active")
    }
    else if (scroll_pos < 400) {
        nav_btns[1].classList.add("active")
    }
    else if (scroll_pos < 600) {
        nav_btns[2].classList.add("active")
    }
    else if (scroll_pos < 800) {
        nav_btns[3].classList.add("active")
    }
    else if (scroll_pos = 1000) {
        nav_btns[4].classList.add("active")
    }
});

// choix image avec l'indicateur nav-btn
nav_btns.forEach((nav_btn, i) => {
    nav_btn.addEventListener("click", () => {
        img_container.scrollLeft = i * 200
    })
})

// prix total / choix qté

let unit_price = document.getElementById("unit-price").innerText;
let quantity = document.getElementById("quantity");
let total_amount = document.getElementById("total-amount");

// initialisation du prix total au chargement de la page
total_amount.innerText = unit_price;

// mise à jour du prix total en fonction de la sté choisie
quantity.addEventListener("input", () => {
    total_amount.innerText = (quantity.value != 0) ? quantity.value * unit_price : unit_price
});
