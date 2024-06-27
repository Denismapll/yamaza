<?php

/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main div element.
 *
 * @package Odin
 * @since 2.2.0
 */
?>
<!--Footer Start-->
<footer class="footer-style-1">

    <div class="container">
        <div class="row align-items-center">
            <!--Social-->
            <div class="col-12 col-lg-6 text-center text-lg-left order-2 order-lg-1">
                <div class="footer-social text-center text-lg-left ">
                    <ul class="list-unstyled">
                        <!-- <li><a class="wow fadeInUp" href="javascript:void(0);"><i aria-hidden="true" class="fab fa-facebook-f"></i></a></li>
                        <li><a class="wow fadeInDown" href="javascript:void(0);"><i aria-hidden="true" class="fab fa-twitter"></i></a></li>
                        <li><a class="wow fadeInUp" href="javascript:void(0);"><i aria-hidden="true" class="fab fa-google-plus-g"></i></a></li>
                        <li><a class="wow fadeInDown" href="javascript:void(0);"><i aria-hidden="true" class="fab fa-linkedin-in"></i></a></li>
                        <li><a class="wow fadeInUp" href="javascript:void(0);"><i aria-hidden="true" class="fab fa-instagram"></i></a></li>
                        <li><a class="wow fadeInDown" href="javascript:void(0);"><i aria-hidden="true" class="fab fa-pinterest-p"></i></a></li> -->
                    </ul>
                </div>
                <p class="company-about fadeIn mt-3 mt-lg-5">&copy; 2024 Yamaza. Made With Love By <a href="javascript:void(0);">Mdd Web</a>
                </p>
            </div>
            <!--Text-->
            <div class="col-12 col-lg-6 text-center order-1 order-lg-2">
                <div class="contact-pot">
                    <img src="<?php echo get_stylesheet_directory_uri().'/assets/images';?>/contact-pot.png" class="wow slideInRight"  data-wow-delay=".5" alt="contact-pot">
                </div>
            </div>
        </div>
    </div>
</footer>
<!--Footer End-->

<!--Animated Cursor-->
<div class="aimated-cursor">
    <div class="cursor">
        <div class="cursor-loader"></div>
    </div>
</div>
<!--Animated Cursor End-->

<!--Scroll Top Start-->
<span class="scroll-top-arrow"><i class="fas fa-angle-up"></i></span>
<!--Scroll Top End-->

<?php wp_footer(); ?>

</body>
</html>