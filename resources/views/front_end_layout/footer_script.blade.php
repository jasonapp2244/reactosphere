<!-- jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Bootstrap & Slick -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.8/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>

<!-- Alert Auto Hide Script (yeh last me rahe) -->
<script>
window.addEventListener('load', function () {
    const alertBox = document.getElementById('alertMessage');
    if (alertBox) {
        // wait 4s, fade out in 0.6s
        setTimeout(() => {
            alertBox.style.transition = 'opacity 0.6s ease';
            alertBox.style.opacity = '0';
            setTimeout(() => {
                if (alertBox && alertBox.parentNode) {
                    alertBox.parentNode.removeChild(alertBox);
                }
            }, 3000);
        }, 3100);
    }
});
</script>


<!-- Custom JS -->
<script src="{{ asset('user/assets/js/custom.js') }}"></script>

