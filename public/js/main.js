function video_resize() {
    var o = $(document).width(),
        e = $(".head__video video").width();
    if (console.log(o), console.log(e), o < 1920) {
        var t = (o - e) / 2;
        console.log(t), $(".head__video video").css("left", t + "px")
    }
}
window.onload = function() {
    Waves.init({
        duration: 800,
        delay: 200
    })
}, jQuery(document).ready(function(o) {
    $('.nav ul a').click(function (e) {
        e.preventDefault();
        var href = $(this).attr('href');

        $("html, body").animate({
            scrollTop: $(href).offset().top
        }, 500);
    });
    $(".toggle-mnu").click(function() {
        $(this).toggleClass("on");
        $(".main-mnu").slideToggle();
        return false;
    });
    o(".input_phone").mask("+7(999) 999-9999"), o(".formstom__slider").owlCarousel({
        nav: !0,
        navText: ["", ""],
        loop: !0,
        dots: !1,
        responsive: {
            0: {
                items: 1
            },
            1024: {
                items: 2,
                margin: 20
            },
            1280: {
                items: 3,
                margin: 40
            }
        }
    }), o(function() {
        o(".scroll").each(function() {
            o(this).jScrollPane({
                showArrows: o(this).is(".arrow"),
                contentWidth: "0px"
            });
            var e, t = o(this).data("jsp");
            o(window).bind("resize", function() {
                e || (e = setTimeout(function() {
                    t.reinitialise(), e = null
                }, 50))
            })
        })
    }), Waves.attach(".buttons", ["waves-button", "waves-float", "waves-light"]), o(".info__number").counterUp({
        delay: 100,
        time: 2500
    }), o(".modal-open").click(function(e) {
        e.preventDefault(), o(".modal-form").fadeIn()
    }), o(window).keydown(function(e) {
        27 == e.keyCode && o(".modal-form").fadeOut()
    }), o(document).mouseup(function(e) {
        var t = (o(".modal-form"), o(".modal-form__wrapper"));
        t.is(e.target) || 0 !== t.has(e.target).length || o(".modal-form").fadeOut()
    }), o(".popup").magnificPopup({
        type: "image",
        closeOnContentClick: !0,
        mainClass: "mfp-img-mobile",
        image: {
            verticalFit: !0
        }
    }), o(".personal__slider .item").click(function(e) {
        if (e.preventDefault(), o(this).hasClass("personal_button"));
        else {
            o(".personal__slider .item").removeClass("personal_button"), o(this).addClass("personal_button");
            var t = o(this).attr("data-item");
            o(".personal__img").removeClass("active"), o(".personal__img").eq(t).addClass("active"), o(".personal__textitem").removeClass("active"), o(".personal__textitem").eq(t).addClass("active")
        }
    }), video_resize()
}), $(document).ready(function() {
    var o = ".forstom__wrap , p , a , .usluga__title , .usluga__text , .usluga , .usluga__bottom , .etTitle,  .map__title , .form__item input, .forstom__title , .forstom__text , .personal__textwrap , .personal__text , .personal__title , section , .title , .info__text , .uslugi__text , .phone__center , h2 span,  .container,  .container *, body, .head__title strong , .head__title h1, head, .head__title h2, footer, .head__video, .phone__top span";
    $(".fs-outer button").click(function() {
        $("body").css("font-size", $(this).css("font-size")), $.cookie("font-size", $(this).attr("id")), $(".fs-outer button").removeClass("active"), $(this).addClass("active")
    }), $(".cs-outer button").click(function() {
        $(o).css("color", $(this).css("color")), $(o).css("background", $(this).css("background")), $(".head__title strong , .head__title h1, .head__title h2, .head__title span").css("background", "none"), $.cookie("cs", $(this).attr("id")), $(".cs-outer button").removeClass("active"), $(this).addClass("active")
    }), $(".img-outer button").click(function() {
        "on" != $.cookie("img") ? ($("img").css("display", "none"), $.cookie("img", "on"), $(".personal__img").css("display", "none"), $(".forstom__top").css("display", "none"), $(".personal__textwrap").css({
            width: "100%",
            "min-height": "100%"
        }), $(".personal__text").css("height", "auto"), $("#img-onoff-text").text(" Включить"), $(this).addClass("active")) : ($("img").css("display", "block"), $.cookie("img", "off"), $(".personal__img.active").css("display", "block"), $(".personal__textwrap").css("width", "63%"), $(".forstom__top").css("dislpay", "block"), $("#img-onoff-text").text(" Выключить"), $(this).removeClass("active"))
    }), "true" == $.cookie("sv_on") && ($("#sv_on").addClass("active"), $("#sv_on strong").text("Обычная версия"), $("#sv_settings").css("display", "block"), $(".section_forstom").removeClass("section_forstom"), $(".head__video video").css("display", "none"), $(".head__video").removeClass("head__video"), $(o).css("line-height", 1.1), $(o).css("color", "#000"), $(o).css("background", "#fff"), $(".section_reviews").removeClass("section_reviews"), null !== $.cookie("font-size") && $("#" + $.cookie("font-size")).click(), null !== $.cookie("cs") ? $("#" + $.cookie("cs")).click() : ($(o).css("color", "#000"), $(o).css("background", "#fff"))), $("#sv_on").click(function() {
        $(o).css("color", "#000"), $(o).css("background", "#fff"), "true" != $.cookie("sv_on") ? ($.cookie("sv_on", "true"), $(o).css("color", "#000"), $(o).css("background", "#fff"), "null" == $.cookie("font-size") && $(".fs-n").click(), "null" == $.cookie("cs") && ($(".cs-bw").click(), $(o).css("color", "#000"), $(o).css("background", "#fff"))) : $.cookie("sv_on", "false"), location.reload()
    })
});
