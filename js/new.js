$(() => {

    // Desktop-Version...
    $('#logo, #home').click(() => {
        $("menu a, .social-links a, .social-container a").css({
            color: '#40E0D0'
        })
        $('.logo a h3').css({
            textShadow: '2px 3px #ffe400',
            color: '#40E0D0',
            webkitTextStroke: '1px #14a76c'
        })
        $('.about-page,.work-page,.contact-page, .product-page').css({
            display: 'none'
        })
        $('.home-page').css({
            display: 'block'
        })
        $("menu a, .social-links a").hover(function () {
            // over
            $(this).css({
                color: '#ffe400'
            })
        }, function () {
            $(this).css({
                color: '#40E0D0'
            })
        })
    })
    // Mobile-Version...
    $('#logo, #mobile-home').click(() => {
        $("html, body").animate({ scrollTop: 0 })
        $("menu a, .social-links a, .social-container a").css({
            color: '#40E0D0'
        })
        $('.logo a h3').css({
            textShadow: '2px 3px #ffe400',
            color: '#40E0D0',
            webkitTextStroke: '1px #14a76c'
        })
        $('.about-page,.work-page,.contact-page, .product-page').css({
            display: 'none'
        })
        $('.home-page').css({
            display: 'block'
        })
        $("menu a, .social-links a").hover(function () {
            // over
            $(this).css({
                color: '#ffe400'
            })
        }, function () {
            $(this).css({
                color: '#40E0D0'
            })
        })
    })

    // Desktop-Version...
    $('#about').click(() => {
        $("menu a, .social-links a, .social-container a").css({
            color: '#FFA500'
        })
        $('.logo a h3').css({
            textShadow: '2px 3px #00BFFF',
            color: '#FFA500',
            webkitTextStroke: '1px #ffe400'
        })
        $('.home-page,.work-page,.contact-page, .product-page').css({
            display: 'none'
        })
        $('.about-page').css({
            display: 'block'
        })
        $("menu a, .social-links a").hover(function () {
            // over
            $(this).css({
                color: '#00BFFF'
            })
        }, function () {
            $(this).css({
                color: '#FFA500'
            })
        })

        setTimeout(() => {
            $('.loading').css({
                display: 'none'
            })
        }, 3800)
    })
    // Mobile-Version...
    $('#mobile-about').click(() => {
        $("html, body").animate({ scrollTop: 0 })
        $("menu a, .social-links a, .social-container a").css({
            color: '#FFA500'
        })
        $('.logo a h3').css({
            textShadow: '2px 3px #00BFFF',
            color: '#FFA500',
            webkitTextStroke: '1px #ffe400'
        })
        $('.home-page,.work-page,.contact-page, .product-page').css({
            display: 'none'
        })
        $('.about-page').css({
            display: 'block'
        })
        $("menu a, .social-links a").hover(function () {
            // over
            $(this).css({
                color: '#00BFFF'
            })
        }, function () {
            $(this).css({
                color: '#FFA500'
            })
        })

        setTimeout(() => {
            $('.loading').css({
                display: 'none'
            })
        }, 3800)
    })

    // Desktop-Version...
    $('#work').click(() => {
        $("menu a, .social-links a, .social-container a").css({
            color: '#ffe400'
        })
        $('.logo a h3').css({
            textShadow: '2px 3px #14a76c',
            color: '#ffe400',
            webkitTextStroke: '1px #40E0D0'
        })
        $('.home-page,.about-page,.contact-page, .product-page').css({
            display: 'none'
        })
        $('.work-page').css({
            display: 'block'
        })

        $("menu a, .social-links a").hover(function () {
            // over
            $(this).css({
                color: '#14a76c'
            })
        }, function () {
            $(this).css({
                color: '#ffe400'
            })
        })

        $('.latest, .websites, .landing-pages, .emails').css({
            display: 'none'
        })

        $('.latest').css({
            display: 'flex'
        })

        $('#websites-link, #landing-pages-link, #emails-link').css({
            color: '#ffe400'
        })
    })
    // Mobile-Version...
    $('#mobile-work').click(() => {
        $("html, body").animate({ scrollTop: 0 })
        $("menu a, .social-links a, .social-container a").css({
            color: '#ffe400'
        })
        $('.logo a h3').css({
            textShadow: '2px 3px #14a76c',
            color: '#ffe400',
            webkitTextStroke: '1px #40E0D0'
        })
        $('.home-page,.about-page,.contact-page, .product-page').css({
            display: 'none'
        })
        $('.work-page').css({
            display: 'block'
        })

        $("menu a, .social-links a").hover(function () {
            // over
            $(this).css({
                color: '#14a76c'
            })
        }, function () {
            $(this).css({
                color: '#ffe400'
            })
        })

        $('.latest, .websites, .landing-pages, .emails').css({
            display: 'none'
        })

        $('.latest').css({
            display: 'flex'
        })

        $('#websites-link, #landing-pages-link, #emails-link').css({
            color: '#ffe400'
        })
    })

    // Desktop-Version...
    $('#contact,#contact-btn').click(() => {
        $("menu a, .social-links a, .social-container a").css({
            color: '#00BFFF'
        })
        $('.logo a h3').css({
            textShadow: '2px 3px #ff0800',
            color: '#00BFFF',
            webkitTextStroke: '1px #40E0D0'
        })
        $('.home-page,.about-page,.work-page, .product-page').css({
            display: 'none'
        })
        $('.contact-page').css({
            display: 'block'
        })
        $("menu a, .social-links a").hover(function () {
            // over
            $(this).css({
                color: '#ff0800'
            })
        }, function () {
            $(this).css({
                color: '#00BFFF'
            })
        })
    })
    // Mobile-Version...
    $('#mobile-contact,#contact-btn').click(() => {
        $("html, body").animate({ scrollTop: 0 })
        $("menu a, .social-links a, .social-container a").css({
            color: '#00BFFF'
        })
        $('.logo a h3').css({
            textShadow: '2px 3px #ff0800',
            color: '#00BFFF',
            webkitTextStroke: '1px #40E0D0'
        })
        $('.home-page,.about-page,.work-page, .product-page').css({
            display: 'none'
        })
        $('.contact-page').css({
            display: 'block'
        })
        $("menu a, .social-links a").hover(function () {
            // over
            $(this).css({
                color: '#ff0800'
            })
        }, function () {
            $(this).css({
                color: '#00BFFF'
            })
        })
    })

    // Categories....
    $('#websites-link').click(() => {
        $("html, body").animate({ scrollTop: 0 })
        $('.latest, .landing-pages, .emails, .product-page').css({
            display: 'none'
        })
        $('.websites').css({
            display: 'flex'
        })
        $('#websites-link').css({
            color: '#14a76c'
        })
        $('#landing-pages-link, #emails-link').css({
            color: '#ffe400'
        })
    })

    $('#landing-pages-link').click(() => {
        $("html, body").animate({ scrollTop: 0 })
        $('.latest, .websites, .emails, .product-page').css({
            display: 'none'
        })
        $('.landing-pages').css({
            display: 'flex'
        })
        $('#landing-pages-link').css({
            color: '#14a76c'
        })
        $('#websites-link, #emails-link').css({
            color: '#ffe400'
        })
    })

    $('#emails-link').click(() => {
        $("html, body").animate({ scrollTop: 0 })
        $('.latest, .websites, .landing-pages, .product-page').css({
            display: 'none'
        })
        $('.emails').css({
            display: 'flex'
        })
        $('#emails-link').css({
            color: '#14a76c'
        })
        $('#websites-link, #landing-pages-link').css({
            color: '#ffe400'
        })
    })

    //** Product-Code-Pages */
    // WebSites...
    // Brookhaven...
    $('.brookhaven').click(() => {
        $("html, body").animate({ scrollTop: 0 })
        $('.latest, .websites, .emails, .landing-pages, .product-page').css({
            display: 'none'
        })
        $('.brookhaven-page').css({
            display: 'block'
        })
    })
    // RoyalsChicken...
    $('.royals-chicken').click(() => {
        $("html, body").animate({ scrollTop: 0 })
        $('.latest, .websites, .emails, .landing-pages, .product-page').css({
            display: 'none'
        })
        $('.royals-page').css({
            display: 'block'
        })
    })
    // MoneyRates...
    $('.money-rates').click(() => {
        $("html, body").animate({ scrollTop: 0 })
        $('.latest, .websites, .emails, .landing-pages, .product-page').css({
            display: 'none'
        })
        $('.money-rates-page').css({
            display: 'block'
        })
    })
    // LandingPages.
    // Puppy...
    $('.puppy').click(() => {
        $("html, body").animate({ scrollTop: 0 })
        $('.latest, .websites, .emails, .landing-pages, .product-page').css({
            display: 'none'
        })
        $('.puppy-page').css({
            display: 'block'
        })
    })
    // Foodie...
    $('.foodie').click(() => {
        $("html, body").animate({ scrollTop: 0 })
        $('.latest, .websites, .emails, .landing-pages, .product-page').css({
            display: 'none'
        })
        $('.foodie-page').css({
            display: 'block'
        })
    })
    // LawnLove...
    $('.lawn-love').click(() => {
        $("html, body").animate({ scrollTop: 0 })
        $('.latest, .websites, .emails, .landing-pages, .product-page').css({
            display: 'none'
        })
        $('.lawn-love-page').css({
            display: 'block'
        })
    })
    // Emails...
    // AmericanAirlines...
    $('.american-airlines').click(() => {
        $("html, body").animate({ scrollTop: 0 })
        $('.latest, .websites, .emails, .landing-pages, .product-page').css({
            display: 'none'
        })
        $('.american-airlines-page').css({
            display: 'block'
        })
    })
    // Burst...
    $('.burst').click(() => {
        $("html, body").animate({ scrollTop: 0 })
        $('.latest, .websites, .emails, .landing-pages, .product-page').css({
            display: 'none'
        })
        $('.burst-page').css({
            display: 'block'
        })
    })
    // deusEx...
    $('.deus-exmachina').click(() => {
        $("html, body").animate({ scrollTop: 0 })
        $('.latest, .websites, .emails, .landing-pages, .product-page').css({
            display: 'none'
        })
        $('.deus-exmachina-page').css({
            display: 'block'
        })
    })
    // BarnesNoble...
    $('.barnes-noble').click(() => {
        $("html, body").animate({ scrollTop: 0 })
        $('.latest, .websites, .emails, .landing-pages, .product-page').css({
            display: 'none'
        })
        $('.barnes-noble-page').css({
            display: 'block'
        })
    })
    // Uber...
    $('.uber').click(() => {
        $("html, body").animate({ scrollTop: 0 })
        $('.latest, .websites, .emails, .landing-pages, .product-page').css({
            display: 'none'
        })
        $('.uber-page').css({
            display: 'block'
        })
    })
    // AmericanHistory...
    $('.american-history').click(() => {
        $("html, body").animate({ scrollTop: 0 })
        $('.latest, .websites, .emails, .landing-pages, .product-page').css({
            display: 'none'
        })
        $('.american-history-page').css({
            display: 'block'
        })
    })

})