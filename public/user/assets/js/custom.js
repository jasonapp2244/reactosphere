$(document).ready(function() {
    // Pehla slider (left to right)
    $('.logoSlider').slick({
        slidesToShow: 5, // ek time me kitne logo dikhayega
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 0, // continuously chalne ke liye 0
        speed: 3000, // animation speed
        cssEase: 'linear',
        infinite: true,
        arrows: false,
        dots: false,
        pauseOnHover: false
    });

    // Dusra slider (right to left)
    $('.logoSlider2').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 0,
        speed: 3000,
        cssEase: 'linear',
        infinite: true,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        rtl: true // ye important hai right to left ke liye
    });
});
jQuery(document).ready(function() {

    jQuery('.services_drop_btn').click(function() {

        jQuery(this).next().next().slideToggle();

    });

    jQuery('ul.servicesDropdown li a').click(function() {

        jQuery(this).next().slideToggle();

    });

    jQuery('.hamBurger, .menu_close').click(function() {

        jQuery('.responsive_menu').toggleClass('openMenu');

    });

});
// Wait until DOM is ready
document.addEventListener('DOMContentLoaded', () => {
    const toggles = document.querySelectorAll('.toggle-password');

    toggles.forEach(toggle => {
        const targetId = toggle.getAttribute('data-target');
        const input = document.getElementById(targetId);

        if (!input) {
            console.warn(`Password input with ID "${targetId}" not found.`);
            return;
        }

        toggle.classList.add('fa-eye'); // default icon

        toggle.addEventListener('click', function(e) {
            e.preventDefault();
            const type = input.getAttribute('type') === 'password' ? 'text' : 'password';
            input.setAttribute('type', type);

            // Toggle icon
            if (type === 'text') {
                this.classList.remove('fa-eye');
                this.classList.add('fa-eye-slash');
            } else {
                this.classList.remove('fa-eye-slash');
                this.classList.add('fa-eye');
            }
        });
    });
});


$(document).ready(function() {
    let started = false;
    let counter = $('#counter');

    $(window).on('scroll', function() {
        let offsetTop = counter.offset().top - window.innerHeight + 100;

        if (!started && $(window).scrollTop() > offsetTop) {
            $('.counter-value').each(function() {
                let $this = $(this);
                let countTo = parseInt($this.attr('data-count'));

                $({ countNum: 0 }).animate({ countNum: countTo }, {
                    duration: 2000,
                    easing: 'swing',
                    step: function(now) {
                        $this.text(Math.floor(now));
                    },
                    complete: function() {
                        $this.text(countTo);
                    },
                });
            });

            started = true; // ✅ only run once
        }
    });
});


$('.user-clm ul li .user-wrap').click(function() {   $(this).next().toggleClass('open_myDrop');   });
