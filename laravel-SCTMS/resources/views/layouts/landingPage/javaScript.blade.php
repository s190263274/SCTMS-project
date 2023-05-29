<!-- ========================= JS here ========================= -->
<script src="{{ asset('assets/js/landingPage/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/landingPage/count-up.min.js') }}"></script>
<script src="{{ asset('assets/js/landingPage/wow.min.js') }}"></script>
<script src="{{ asset('assets/js/landingPage/tiny-slider.js') }}"></script>
<script src="{{ asset('assets/js/landingPage/glightbox.min.js') }}"></script>
<script src="{{ asset('assets/js/landingPage/main.js') }}"></script>
<script>
    
    tns({
        container: '.client-logo-carousel',
        slideBy: 'page',
        autoplay: true,
        autoplayButtonOutput: false,
        mouseDrag: true,
        gutter: 15,
        nav: false,
        controls: false,
        responsive: {
            0: {
                items: 1,
            },
            540: {
                items: 3,
            },
            768: {
                items: 4,
            },
            992: {
                items: 4,
            },
            1170: {
                items: 6,
            }
        }
    });
</script>
<script>
    tns({
        container: '.testimonial-slider',
        items: 3,
        slideBy: 'page',
        autoplay: false,
        mouseDrag: true,
        gutter: 0,
        nav: true,
        controls: false,
        controlsText: ['<i class="lni lni-arrow-left"></i>', '<i class="lni lni-arrow-right"></i>'],
        responsive: {
            0: {
                items: 1,
            },
            540: {
                items: 1,
            },
            768: {
                items: 2,
            },
            992: {
                items: 2,
            },
            1170: {
                items: 3,
            }
        }
    });
</script>
<script>
    tns({
        container: '.hero-slider',
        items: 1,
        slideBy: 'page',
        autoplay: false,
        mouseDrag: true,
        gutter: 0,
        nav: true,
        controls: false,
        controlsText: ['<i class="lni lni-arrow-left"></i>', '<i class="lni lni-arrow-right"></i>'],
    });
</script>





