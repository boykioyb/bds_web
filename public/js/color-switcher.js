$(document).on('ready',function ($) {

    $("#blue").click(function () {
        $("#color").attr("href", "css/colors/blue.css");
        $(".img-1 img").attr("src", "css/colors/icons/blue/1.png");
        $(".img-2 img").attr("src", "css/colors/icons/blue/2.png");
        $(".img-3 img").attr("src", "css/colors/icons/blue/3.png");
        $(".img-4 img").attr("src", "css/colors/icons/blue/4.png");
        return false;
    });

    $("#pink").click(function () {
        $("#color").attr("href", "css/colors/pink.css");
        $(".img-1 img").attr("src", "css/colors/icons/pink/1.png");
        $(".img-2 img").attr("src", "css/colors/icons/pink/2.png");
        $(".img-3 img").attr("src", "css/colors/icons/pink/3.png");
        $(".img-4 img").attr("src", "css/colors/icons/pink/4.png");
        return false;
    });

    $("#orange").click(function () {
        $("#color").attr("href", "css/colors/orange.css");
        $(".img-1 img").attr("src", "css/colors/icons/orange/1.png");
        $(".img-2 img").attr("src", "css/colors/icons/orange/2.png");
        $(".img-3 img").attr("src", "css/colors/icons/orange/3.png");
        $(".img-4 img").attr("src", "css/colors/icons/orange/4.png");
        return false;
    });

    $("#purple").click(function () {
        $("#color").attr("href", "css/colors/purple.css");
        $(".img-1 img").attr("src", "css/colors/icons/purple/1.png");
        $(".img-2 img").attr("src", "css/colors/icons/purple/2.png");
        $(".img-3 img").attr("src", "css/colors/icons/purple/3.png");
        $(".img-4 img").attr("src", "css/colors/icons/purple/4.png");
        return false;
    });


    $("#green").click(function () {
        $("#color").attr("href", "css/colors/green.css");
        $(".img-1 img").attr("src", "css/colors/icons/green/1.png");
        $(".img-2 img").attr("src", "css/colors/icons/green/2.png");
        $(".img-3 img").attr("src", "css/colors/icons/green/3.png");
        $(".img-4 img").attr("src", "css/colors/icons/green/4.png");
        return false;
    });

    $("#red").click(function () {
        $("#color").attr("href", "css/colors/red.css");
        $(".img-1 img").attr("src", "css/colors/icons/red/1.png");
        $(".img-2 img").attr("src", "css/colors/icons/red/2.png");
        $(".img-3 img").attr("src", "css/colors/icons/red/3.png");
        $(".img-4 img").attr("src", "css/colors/icons/red/4.png");
        return false;
    });

    $("#cyan").click(function () {
        $("#color").attr("href", "css/colors/cyan.css");
        $(".img-1 img").attr("src", "css/colors/icons/cyan/1.png");
        $(".img-2 img").attr("src", "css/colors/icons/cyan/2.png");
        $(".img-3 img").attr("src", "css/colors/icons/cyan/3.png");
        $(".img-4 img").attr("src", "css/colors/icons/cyan/4.png");
        return false;
    });

    $("#sky-blue").click(function () {
        $("#color").attr("href", "css/colors/sky-blue.css");
        $(".img-1 img").attr("src", "css/colors/icons/sky-blue/1.png");
        $(".img-2 img").attr("src", "css/colors/icons/sky-blue/2.png");
        $(".img-3 img").attr("src", "css/colors/icons/sky-blue/3.png");
        $(".img-4 img").attr("src", "css/colors/icons/sky-blue/4.png");
        return false;
    });

    $("#gray").click(function () {
        $("#color").attr("href", "css/colors/gray.css");
        $(".img-1 img").attr("src", "css/colors/icons/gray/1.png");
        $(".img-2 img").attr("src", "css/colors/icons/gray/2.png");
        $(".img-3 img").attr("src", "css/colors/icons/gray/3.png");
        $(".img-4 img").attr("src", "css/colors/icons/gray/4.png");
        return false;
    });

    $("#brown").click(function () {
        $("#color").attr("href", "css/colors/brown.css");
        $(".img-1 img").attr("src", "css/colors/icons/brown/1.png");
        $(".img-2 img").attr("src", "css/colors/icons/brown/2.png");
        $(".img-3 img").attr("src", "css/colors/icons/brown/3.png");
        $(".img-4 img").attr("src", "css/colors/icons/brown/4.png");
        return false;
    });

    //add backgrounds
    $("#bg-one").click(function () {
        $("body").addClass("bg1");
        $("body").removeClass("bg2");
        $("body").removeClass("bg3");
        $("body").removeClass("bg4");
        $("body").removeClass("bg5");
        $("body").removeClass("bg6");
        $("body").removeClass("bg7");
        $("body").removeClass("bg8");
        $("body").removeClass("bg9");
        $("body").removeClass("bg10");
    });

    $("#bg-two").click(function () {
        $("body").removeClass("bg1");
        $("body").addClass("bg2");
        $("body").removeClass("bg3");
        $("body").removeClass("bg4");
        $("body").removeClass("bg5");
        $("body").removeClass("bg6");
        $("body").removeClass("bg7");
        $("body").removeClass("bg8");
        $("body").removeClass("bg9");
        $("body").removeClass("bg10");
    });

    $("#bg-three").click(function () {
        $("body").removeClass("bg1");
        $("body").removeClass("bg2");
        $("body").addClass("bg3");
        $("body").removeClass("bg4");
        $("body").removeClass("bg5");
        $("body").removeClass("bg6");
        $("body").removeClass("bg7");
        $("body").removeClass("bg8");
        $("body").removeClass("bg9");
        $("body").removeClass("bg10");
    });

    $("#bg-four").click(function () {
        $("body").removeClass("bg1");
        $("body").removeClass("bg2");
        $("body").removeClass("bg3");
        $("body").addClass("bg4");
        $("body").removeClass("bg5");
        $("body").removeClass("bg6");
        $("body").removeClass("bg7");
        $("body").removeClass("bg8");
        $("body").removeClass("bg9");
        $("body").removeClass("bg10");
    });

    $("#bg-five").click(function () {
        $("body").removeClass("bg1");
        $("body").removeClass("bg2");
        $("body").removeClass("bg3");
        $("body").removeClass("bg4");
        $("body").addClass("bg5");
        $("body").removeClass("bg6");
        $("body").removeClass("bg7");
        $("body").removeClass("bg8");
        $("body").removeClass("bg9");
        $("body").removeClass("bg10");
    });

    $("#bg-six").click(function () {
        $("body").removeClass("bg1");
        $("body").removeClass("bg2");
        $("body").removeClass("bg3");
        $("body").removeClass("bg4");
        $("body").removeClass("bg5");
        $("body").addClass("bg6");
        $("body").removeClass("bg7");
        $("body").removeClass("bg8");
        $("body").removeClass("bg9");
        $("body").removeClass("bg10");
    });

    $("#bg-seven").click(function () {
        $("body").removeClass("bg1");
        $("body").removeClass("bg2");
        $("body").removeClass("bg3");
        $("body").removeClass("bg4");
        $("body").removeClass("bg5");
        $("body").removeClass("bg6");
        $("body").addClass("bg7");
        $("body").removeClass("bg8");
        $("body").removeClass("bg9");
        $("body").removeClass("bg10");
    });

    $("#bg-eight").click(function () {
        $("body").removeClass("bg1");
        $("body").removeClass("bg2");
        $("body").removeClass("bg3");
        $("body").removeClass("bg4");
        $("body").removeClass("bg5");
        $("body").removeClass("bg6");
        $("body").removeClass("bg7");
        $("body").addClass("bg8");
        $("body").removeClass("bg9");
        $("body").removeClass("bg10");
    });

    $("#bg-nine").click(function () {
        $("body").removeClass("bg1");
        $("body").removeClass("bg2");
        $("body").removeClass("bg3");
        $("body").removeClass("bg4");
        $("body").removeClass("bg5");
        $("body").removeClass("bg6");
        $("body").removeClass("bg7");
        $("body").removeClass("bg8");
        $("body").addClass("bg9");
        $("body").removeClass("bg10");
    });

    $("#bg-ten").click(function () {
        $("body").removeClass("bg1");
        $("body").removeClass("bg2");
        $("body").removeClass("bg3");
        $("body").removeClass("bg4");
        $("body").removeClass("bg5");
        $("body").removeClass("bg6");
        $("body").removeClass("bg7");
        $("body").removeClass("bg8");
        $("body").removeClass("bg9");
        $("body").addClass("bg10");
    });
    $("#bg-one, #bg-two, #bg-three, #bg-four, #bg-five, #bg-six, #bg-seven, #bg-eight, #bg-nine, #bg-ten").click(function () {
        $("#wrapper").addClass("boxed-layout");
    });
    $("#wide").click(function () {
        $("body").removeClass("bg1 bg2 bg3 bg4 bg5 bg6 bg7 bg8 bg9 bg10");
    });


    $("#light").click(function () {
        $("#footer").addClass("light");
        $("#footer").removeClass("dark");
        $("#footer img").attr("src", "images/footer-logo.jpg");
    });
    $("#dark").click(function () {
        $("#footer").addCchoose_colorlass("dark");
        $("#footer").removeClass("light");
        $("#footer img").attr("src", "images/footer-logo-dark.jpg");
    });

    $("#header-n").click(function () {
        $("body").removeClass("fixed-header");
    });
    $("#header-f").click(function () {
        $("body").addClass("fixed-header");
    });


    // picker buttton
    $(".picker_close").click(function () {

        $("#choose_color").toggleClass("position");

    });

    //header

    //stickey header
    $(window).scroll(function () {
        var scroll = $(window).scrollTop();
        if (scroll >= 40) {
            $(".fixed-header").addClass("small-header");
        }
        else {
            $(".fixed-header").removeClass("small-header");
        }
    });


});
