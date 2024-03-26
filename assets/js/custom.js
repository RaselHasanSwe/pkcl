

//PAGE LOADER
$(window).on("load", function () {

    "use strict";
    $(".loader1").fadeOut(800);

    $('.side-menu').removeClass('hidden');



    /*===================================
            Cube Portfolio OWL CAROUSEL
    ======================================*/

    $('#js-grid-blog-posts').cubeportfolio({
        filters: '#js-filters-blog-posts',
        search: '#js-search-blog-posts',
        defaultFilter: '*',
        animationType: '3dflip',
        gapHorizontal: 70,
        gapVertical: 30,
        gridAdjustment: 'responsive',
        mediaQueries: [{
            width: 1500,
            cols: 3,
        }, {
            width: 1100,
            cols: 3,
        }, {
            width: 800,
            cols: 3,
        }, {
            width: 481,
            cols: 2,
            options: {}
        }, {
            width: 320,
            cols: 1,
            options: {}
        }],
        caption: 'none',
        displayType: 'fadeIn',
        displayTypeSpeed: 400,
    });

    /*===================================
        sync-portfolio- and Owl Carousel
======================================*/

    $('.sync-portfolio-carousel').owlCarousel({
        loop: true,
        margin: 0,
        dots: false,
        nav: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });

    $(".owl-prev").html('<div class="navigation-link-prev"><a class="prev-btn"><i class="lni-chevron-left"></i> </a></div>');
    $(".owl-next").html('<div class="navigation-link-next"><a class="next-btn"><i class="lni-chevron-right"></i> </a></div>');

    // $('.navigation-links a.prev-btn').click(function() {
//     var owl = $('.sync-portfolio-carousel');
//     owl.owlCarousel();
//     owl.trigger('next.owl.carousel');
// });
// $('.navigation-links a.next-btn').click(function() {
//     var owl = $('.sync-portfolio-carousel');
//     owl.owlCarousel();
//     owl.trigger('prev.owl.carousel', [300]);
// });




});