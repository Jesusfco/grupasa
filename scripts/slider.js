$(document).ready(function() {

    for (var x = 0; x < sliderCount; x++) {
        if (x == 0) $(".slider-circles").append("<div class='active' onclick='selectImgSlider(" + x + ")'></div>");
        else
            $(".slider-circles").append("<div onclick='selectImgSlider(" + x + ")'></div>");
    }



    $('.slider-img #slider-piece:gt(0)').hide();

    setInterval(function() {

        slider();
    }, 6000);

});

var sliderCount = $(".slider-img #slider-piece").length;
var sliderSelect = 0;
var button = 0;

function slider() {
    if (button === 0) {
        sliderCircleBasic();
        $('#slider-piece:first-child').fadeOut(1000)
            .next('#slider-piece').fadeIn(1000)
            .end().appendTo('.slider-img');


    } else {
        button = 0;
    }
}

function sliderNext() {
    sliderCircleBasic();
    $('.slider-img #slider-piece:first-child').fadeOut(500)
        .next('#slider-piece').fadeIn(500)
        .end().appendTo('.slider-img');
    button = 1;

}

function sliderBefore() {
    sliderCircleBasicReturn();
    $('.slider-img #slider-piece:last-child').prependTo('.slider-img').fadeIn(500);
    $('.slider-img #slider-piece:nth-child(2)').fadeOut();

    button = 1;
}

function selectImgSlider(img) {

    for (var x = 0; sliderSelect !== img; x++) {
        $('.slider-img #slider-piece:first-child').fadeOut(0)
            .next('#slider-piece').fadeIn(0)
            .end().appendTo('.slider-img');

        sliderCircleBasic();
    }

    button = 1;
}

function sliderCircleBasic() {
    sliderSelect++;
    if (sliderSelect == sliderCount) sliderSelect = 0;

    $('.slider-circles div:nth-child(' + (sliderSelect + 1) + ')').addClass('active');
    if (sliderSelect == 0) {
        $('.slider-circles div:nth-child(' + sliderCount + ')').removeClass('active');
    } else {
        $('.slider-circles div:nth-child(' + sliderSelect + ')').removeClass('active');
    }
}

function sliderCircleBasicReturn() {
    sliderSelect--;
    if (sliderSelect == -1) sliderSelect = sliderCount - 1;

    $('.slider-circles div:nth-child(' + (sliderSelect + 1) + ')').addClass('active');
    if (sliderSelect == (sliderCount - 1)) {
        $('.slider-circles div:nth-child(1)').removeClass('active');
    } else {
        $('.slider-circles div:nth-child(' + (sliderSelect + 2) + ')').removeClass('active');
    }
}

$(window).resize(function() {
    // $('.slider-img').css('height', $('.slider-img div img').height());
});