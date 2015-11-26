$(document).ready(function() {
    function heightDetect(){
        $(".main_head").css("height", $(window).height());
    }

    heightDetect();

    $(window).resize(function(){
        heightDetect();
    });

    $("#sandwich, .menu_item").click(function() {
        $("#sandwich").toggleClass("active");
        //$(".top_mnu").fadeIn(600);
    });

    $(".toggle_mnu").click(function(){
        if($(".top_mnu").is(":visible")){
            $(".top_mnu").fadeOut(600);
        }else{
            $(".top_mnu").fadeIn(600);
        }
    });

});

$(window).load(function() {
    $(".loader_inner").fadeOut();
    $(".loader").delay(400).fadeOut("slow");
});