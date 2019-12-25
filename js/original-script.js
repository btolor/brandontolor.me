$(document).ready(function(){

    // Smooth Scroll Effect...
    $(document).on('click','a[href^="#"]', function (event) {
        event.preventDefault();
        $('html,body').animate({
            scrollTop: $($.attr(this,'href')).offset().top
        }, 800);
    });

    // Mobile-Device-Nav-Menu
    $("#open-mobile-menu").click(function () { 
        $("#open-mobile-menu").css("display","none");
        $("#close-mobile-menu").css("display","block");
        $("#mobile-nav").css("display", "flex").hide().slideDown(300);
    });
    $("#close-mobile-menu").click(function () { 
        $("#open-mobile-menu").css("display","block");
        $("#close-mobile-menu").css("display","none");
        $("#mobile-nav").slideUp();
    });

    $("#mobile-nav").children().click(function () { 
        $("#open-mobile-menu").css("display","block");
        $("#close-mobile-menu").css("display","none");
        $("#mobile-nav").slideUp();
    });





    //Project1 hover fade function...
    $(".project1").hover(function () {
            // over
            $("#info-slide").fadeIn("slow");
            $("#info-slide").css("display","flex");
        }, function () {
            $("#info-slide").fadeOut("swing");
        }
    );

    //Project2 hover fade function...
    $(".project2").hover(function () {
        // over
        $("#info-slide-lawn").fadeIn("slow");
        $("#info-slide-lawn").css("display","flex");
        }, function () {
            $("#info-slide-lawn").fadeOut("swing");
        }
    );

    //Project3 hover fade function...
    $(".project3").hover(function () {
        // over
        $("#info-slide-foodie").fadeIn("slow");
        $("#info-slide-foodie").css("display","flex");
        }, function () {
            $("#info-slide-foodie").fadeOut("swing");
        }
    );

    //Project4 hover fade function...
    $(".project4").hover(function () {
        // over
        $("#info-slide-shine").fadeIn("slow");
        $("#info-slide-shine").css("display","flex");
        }, function () {
            $("#info-slide-shine").fadeOut("swing");
        }
    );

    //Project5 hover fade function...
    $(".project5").hover(function () {
        // over
        $("#info-slide-kohls").fadeIn("slow");
        $("#info-slide-kohls").css("display","flex");
        }, function () {
            $("#info-slide-kohls").fadeOut("swing");
        }
    );

    //Project6 hover fade function...
    $(".project6").hover(function () {
        // over
        $("#info-slide-apple").fadeIn("slow");
        $("#info-slide-apple").css("display","flex");
        }, function () {
            $("#info-slide-apple").fadeOut("swing");
        }
    );

});