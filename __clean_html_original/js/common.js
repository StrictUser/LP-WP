$(document).ready(function() {

    $(".top_text h1").animated("fadeInDown", "fadeOutUp");
    $(".top_text p, .section_header").animated("fadeInUp", "fadeOutDown");

    $(".animation_1").animated("flipInY", "flipOutY");
    $(".animation_2").animated("fadeInLeft", "fadeOutLeft");
    $(".animation_3").animated("fadeInRight", "fadeOutRight");

    $(".left .resume_item").animated("fadeInLeft", "fadeOutLeft");
    $(".right .resume_item").animated("fadeInRight", "fadeOutRight");


    $(".popup").magnificPopup({type:'image'});

    $("section_")

    function heightDetect(){
        $(".main_head").css("height", $(window).height());
    }

    heightDetect();

    $(window).resize(function(){
        heightDetect();
    });

    $(".toggle_mnu").click(function() {
        $("#sandwich").toggleClass("active");
    });

    $(".top_mnu ul a").click(function(){
        $(".top_mnu").fadeOut(400);
        $("#sandwich").toggleClass("active");
    }).append("<span>");

    $(".toggle_mnu").click(function(){
        if($(".top_mnu").is(":visible")){
            $(".top_text").removeClass("h_opacify");
            $(".top_mnu").fadeOut(400);
            $(".top_mnu li a").removeClass("fadeInUp animated");
        }else{
            $(".top_text").addClass("h_opacify");
            $(".top_mnu").fadeIn(600);
            $(".top_mnu li a").addClass("fadeInUp animated");
        }
    });

});

$(window).load(function() {
    $(".loader_inner").fadeOut();
    $(".loader").delay(400).fadeOut("slow");
});