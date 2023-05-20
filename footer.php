<footer class="site-footer">
    <div class="container">
        <div class="row">

            <div class="col-lg-3 col-md-6 col-12 mb-4 mb-md-0 mb-lg-0">
                <h6 class="site-footer-title mb-3">Contact</h6>

                <p class="mb-2"><strong class="d-inline me-2">Phone:</strong>
                    <a href="tel: +91 8320903662">8320903662</a>
                </p>

                <p>
                    <strong class="d-inline me-2">Email:</strong>
                    <a href="ajay@gmail.com">ajay@gmail.com</a>
                </p>
            </div>

            <div class="col-lg-3 col-md-6 col-12">

                <h6 class="site-footer-title mb-3">Social</h6>

                <ul class="social-icon">
                    <li class="social-icon-item">
                        <a href="#" class="social-icon-link
                                    bi-instagram"></a>
                    </li>

                    <li class="social-icon-item">
                        <a href="#" class="social-icon-link bi-twitter"></a>
                    </li>

                    <li class="social-icon-item">
                        <a href="#" class="social-icon-link
                                    bi-whatsapp"></a>
                    </li>
                </ul>
            </div>

        </div>
    </div>

    <div class="container pt-5">
        <div class="row align-items-center">

            <div class="col-lg-2 col-md-3 col-12">
                <a class="navbar-brand" href="index.html">
                    <!-- <img src="images/pod-talk-logo.png" class="logo-image img-fluid" alt="templatemo pod -->
                    <!-- talk"> -->
                </a>
            </div>

            <div class="col-lg-7 col-md-9 col-12">
                <ul class="site-footer-links">
                    <li class="site-footer-link-item">
                        <a href="index.php" class="site-footer-link">Home</a>
                    </li>

                    <li class="site-footer-link-item">
                        <a href="destination.php" class="site-footer-link">Destinations</a>
                    </li>

                    <li class="site-footer-link-item">
                        <a href="blog.php" class="site-footer-link">Blog</a>
                    </li>

                    <li class="site-footer-link-item">
                        <a href="contact.php" class="site-footer-link">Contact Us</a>
                    </li>
                </ul>
            </div>

            <div class="col-lg-3 col-12">
                <p class="copyright-text mb-0">Copyright © 2023 Krishna Tours & Travels
                    <br><br>
                    Design: <a rel="nofollow" href="https://unityfort.in" target="_parent">Unityfort</a>
            </div>
        </div>
    </div>
</footer>


<!-- JAVASCRIPT FILES -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/custom.js"></script>
<script>
    function whatsapp() {
        var name = document.getElementById("fullname").value;
        var email = document.getElementById("phone").value;
        var message = document.getElementById("message").value;

        var url = "https://wa.me/+918320903662?text="
            + "*Name :* " + name + "%0a"
            + "*Email :* " + email + "%0a"
            + "*Message :* " + message;

        window.open(url, '_blank').focus();
    }
    function myFunction()) {
        var dots = document.getElementById("dots");
        var moreText = document.getElementById("more");
        var btnText = document.getElementById("myBtn");

        if (dots.style.display === "none") {
            dots.style.display = "inline";
            btnText.innerHTML = "Read more";
            moreText.style.display = "none";
        } else {
            dots.style.display = "none";
            btnText.innerHTML = "Read less";
            moreText.style.display = "inline";
        }
    }
</script>

</body>

</html>