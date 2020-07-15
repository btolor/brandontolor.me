$(document).ready(function () {

    // Hides tthe mobile menu...
    $(".mobile-menu").hide();

    // Smooth Scroll Effect...
    $(document).on('click', 'a[href^="#"]', function (event) {
        event.preventDefault();
        $('html,body').animate({
            scrollTop: $($.attr(this, 'href')).offset().top
        }, 800);
    });

    /** ****Mobile-Device-Nav-Menu**** */ 
    // Open and close buttons functionality...
    /**
     * This block of code uses the click method to close the 
     * mobile menu when the close-btn or a menu-link element 
     * is clicked. The css method is used to change the display's
     * property value of the open-btn element to block and the 
     * toggle method is used with a slide effect to slide the 
     * mobile menu close from left to right...   
     */
    $("#close-btn, .menu-link").click(function () {  
        $("#open-btn").css("display","block");
        $(".mobile-menu").toggle("slide");
    });

    /**
     * This block of code uses the click method top slide open 
     * the mobile menu when the open-btn element is clicked. 
     * The css method is used to change the display's property 
     * value of the open-btn element to none and the toggle 
     * method is used with a slide effect to slide the mobile 
     * menu open from right to left...   
     */
    $("#open-btn").click(function () { 
        $("#open-btn").css("display","none");
        $(".mobile-menu").toggle("slide");
    });

});