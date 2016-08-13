



jQuery(document).ready(function ($) {
    
       //          responsive menu
        $('#menu-list5').slicknav({
            closeOnClick:'false',
            prependTo:'.main-menu5'
        });
        
        //          social share
        SocialShareKit.init({
            selector: '.ssk-round .ssk',
            url: 'https://notificamos.com/',
            text: 'Share text default',
            twitter: {
                url: 'https://www.facebook.com',
                text: 'Share text for twitter',
                via: 'twitter-screen-name',
                countCallback: function(shareUrl, onCountReady) {
                    // Get count somewhere manually and call onCountReady() whenever you got the count.
                    var count = 5;
                    return onCountReady(count);
                }
            }
        });
    
    
    //    news
    $newsSlide = $('.top_news').bxSlider({
        auto: false,
        mode: 'vertical',
        maxSlides: 3,
        minSlides:2,
        pager: false,
        slideMargin: 10,
        controls:false
        
    });
    $('.news-next').click(function (e) {
        e.preventDefault();
        $newsSlide.goToNextSlide();
    });
    $('.news-prev').click(function (e) {
        e.preventDefault();
        $newsSlide.goToPrevSlide();
    });
        
    $newsSlide1 = $('.selected_news').bxSlider({
        auto: false,
        mode: 'vertical',
        maxSlides: 3,
        minSlides:2,
        pager: false,
        slideMargin: 10,
        controls:false
        
    });
    $('.news-next1').click(function (e) {
        e.preventDefault();
        $newsSlide1.goToNextSlide();
    });
    $('.news-prev1').click(function (e) {
        e.preventDefault();
        $newsSlide1.goToPrevSlide();
    });
        
        
    
    
    
    
            
    //     home-page national

    $nationalh = $('#national-h').bxSlider({
        auto: false,
        mode: 'vertical',
        maxSlides: 5,
        minSlides:2,
        pager: false,
        slideMargin: 10,
        controls:false
        
    });
    $('#news-next-national').click(function (e) {
        e.preventDefault();
        $nationalh.goToNextSlide();
    });
    $('#news-prev-national').click(function (e) {
        e.preventDefault();
        $nationalh.goToPrevSlide();
    });
    //     home-page job

    $jobh = $('#job-h').bxSlider({
        auto: false,
        mode: 'vertical',
        maxSlides: 5,
        minSlides:2,
        pager: false,
        slideMargin: 10,
        controls:false
        
    });
    $('#news-next-job').click(function (e) {
        e.preventDefault();
        $jobh.goToNextSlide();
    });
    $('#news-prev-job').click(function (e) {
        e.preventDefault();
        $jobh.goToPrevSlide();
    });
    
    //     home-page international

    $internationalh = $('#international-h').bxSlider({
        auto: false,
        mode: 'vertical',
        maxSlides: 5,
        minSlides:2,
        pager: false,
        slideMargin: 10,
        controls:false
        
    });
    $('#news-next-international').click(function (e) {
        e.preventDefault();
        $internationalh.goToNextSlide();
    });
    $('#news-prev-international').click(function (e) {
        e.preventDefault();
        $internationalh.goToPrevSlide();
    });
    //     home-page sport

    $sporth = $('#sport-h').bxSlider({
        auto: false,
        mode: 'vertical',
        maxSlides: 5,
        minSlides:2,
        pager: false,
        slideMargin: 10,
        controls:false
        
    });
    $('#news-next-sport').click(function (e) {
        e.preventDefault();
        $sporth.goToNextSlide();
    });
    $('#news-prev-sport').click(function (e) {
        e.preventDefault();
        $sporth.goToPrevSlide();
    });
    //     home-page entertainment

    $entertainmenth = $('#entertainment-h').bxSlider({
        auto: false,
        mode: 'vertical',
        maxSlides: 5,
        minSlides:2,
        pager: false,
        slideMargin: 10,
        controls:false
        
    });
    $('#news-next-entertainment').click(function (e) {
        e.preventDefault();
        $entertainmenth.goToNextSlide();
    });
    $('#news-prev-entertainment').click(function (e) {
        e.preventDefault();
        $entertainmenth.goToPrevSlide();
    });
    //     home-page carrier

    $carrier = $('#carrier-h').bxSlider({
        auto: false,
        mode: 'vertical',
        maxSlides: 5,
        minSlides:2,
        pager: false,
        slideMargin: 10,
        controls:false
        
    });
    $('#news-next-carrier').click(function (e) {
        e.preventDefault();
        $carrier.goToNextSlide();
    });
    $('#news-prev-carrier').click(function (e) {
        e.preventDefault();
        $carrier.goToPrevSlide();
    });
           
            
    //            slider vedio
   
        $( '.slider_vedio' ).sliderPro({
            width: 960,
            height: 500,
            fade: true,
            arrows: true,
            buttons: false,
            fullScreen: true,
            shuffle: true,
            smallSize: 500,
            mediumSize: 1000,
            largeSize: 3000,
            thumbnailArrows: true,
            autoplay: true
        });

    //            loading
    jQuery(window).load(function() {
        jQuery("#status").fadeOut();
        jQuery("#preloader").delay(1000).fadeOut("slow");
    })
    //            header fix
    $(window).bind("scroll", function(){ //when the user is scrolling...
        if ($(window).scrollTop() >= 50) { //header hide by scroll
            $('#header').addClass('overflow');
        } else {
            $('#header').removeClass('overflow');
        }
        if ($(window).scrollTop() >= 100) { //header is show past 400px
            $('#header').addClass('fixed');
        } else {
            $('#header').removeClass('fixed');
        }
    });
          
   
        $(window).scroll(function () {
    
            if ($(this).scrollTop() > 50) {
                $('#back-top').fadeIn();
            } else {
                $('#back-top').fadeOut();
            }
        });
        // scroll body to 0px on click
        $('#back-top').click(function () {
            $('#back-top a').tooltip('hide');
            $('body,html').animate({
                scrollTop: 0
            }, 800);
            return false;
        });
      
        $('#back-top').tooltip('hide'); 
         
            
});      



 


$(document).ready(function(){
   
    });