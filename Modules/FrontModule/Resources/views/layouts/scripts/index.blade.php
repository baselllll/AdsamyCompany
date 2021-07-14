
    <script src="{{ asset('front/assets/vendor/jquery/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('front/assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('front/assets/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('front/assets/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('front/assets/vendor/wow/wow.js') }}"></script>
    <script src="{{ asset('front/assets/vendor/jarallax.min.js') }}"></script>
    <script src="{{ asset('front/assets/vendor/multi-animated-counter.js') }}"></script>
    <script src="{{ asset('front/assets/vendor/venobox/venobox.min.js') }}"></script>
    <script src="{{ asset('front/assets/vendor/mixitup/mixitup.min.js') }}"></script>
    <script src="{{ asset('front/assets/vendor/multi-animated-counter.js') }}"></script>


    <script src="{{ asset('front/assets/js/main.js') }}"></script>


    <script>
        //MixItUp
        var mixer = mixitup('.works_content');
        $('.works_section .tabs li').click(function() {

            $(this).addClass('active').siblings().removeClass('active')

        })
    </script>