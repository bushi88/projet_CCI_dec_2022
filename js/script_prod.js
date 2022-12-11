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



let e = document.getElementById("unit-price").textContent;
e.style.color = "green";
e.style.padding = '0.5rem';
