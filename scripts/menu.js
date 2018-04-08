function smoothScroll(name) {
    if (name == "products2" || name == "products3" || name == 'productos')
        var posicion = $("#div-" + name).offset().top;
    else {
        var posicion = $("#div-" + name).offset().top - 80;
    }

    $("html, body").animate({
        scrollTop: posicion
    }, 750);
}

function scrollTop2() {
    $("html, body").animate({
        scrollTop: 0
    }, 750);
}

function openMenu() {
    $('.movMenu').addClass('active');
}

function closeMenu() {
    $('.movMenu').removeClass('active');
}

function scrollMov(name) {
    var posicion = $("#div-" + name).offset().top;
    $("html, body").animate({
        scrollTop: posicion - 80
    }, 750);
    closeMenu();
}