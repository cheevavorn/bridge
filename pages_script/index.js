$('.owl-carousel').owlCarousel({
    items: 2,
    lazyLoad: true,
    autoplay: true,
    autoplayTimeout: 5000,
    dots: true,
    smartSpeed: 1000,
    fluidSpeed: 500,
    autoHeight: true,
    responsive: {
        0: {
            items: 1
        },
        993: {
            items: 2
        },
        1200: {
            items: 2
        },
        1920: {
            items: 3
        }
    }
});

$('[data-toggle="tooltip"]').tooltip();