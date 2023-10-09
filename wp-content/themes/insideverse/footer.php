<!-- ========== Footer ========== -->
<footer class="footer">
    <div class="container">
        <div class="footer__content">

            <div class="site-query">
                <p><?php global $insideverse; echo $insideverse['footer-site-query']?></p>
                <a href="mailto:<?php global $insideverse; echo $insideverse['footer-site-query-mail']?>"><?php global $insideverse; echo $insideverse['footer-site-query-mail-text']?></a>
            </div>

            <div class="footer__box">
                <div class="footer__box-item-unique">
                    <img src="<?php global $insideverse;
                                            echo $insideverse['footer-logo']['url'] ?>" alt="Insidverse logo">
                    <p><?php global $insideverse;
                                            echo $insideverse['footer-site-description'] ?></p>
                </div>
                <div class="footer__box-item-common">
                    <h4><?php global $insideverse; echo $insideverse['footer-menu-title']?></h4>
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'footer_menu',
                        'menu_class' => 'list-unstyled',
                    ));
                    ?>

                </div>
                <div class="footer__box-item-common">
                    <h4><?php global $insideverse; echo $insideverse['footer-contact-title']?></h4>
                    <span class="contact-info">Phone: <?php global $insideverse; echo $insideverse['footer-contact-number']?></span>
                    <span class="contact-info">Mail: <?php global $insideverse; echo $insideverse['footer-contact-email']?></span>

                    <ul class="social-profiles">
                        <li><a href="<?php global $insideverse; echo $insideverse['footer-contact-facebook']?>"><ion-icon name="logo-facebook" class="social-profile__link color-blue-lotus"></ion-icon></a></li>
                        <li><a href="<?php global $insideverse; echo $insideverse['footer-contact-instagram']?>"><ion-icon name="logo-instagram" class="social-profile__link color-blue-lotus"></ion-icon></a></li>
                        <li><a href="<?php global $insideverse; echo $insideverse['footer-contact-linkedin']?>"><ion-icon name="logo-linkedin" class="social-profile__link color-blue-lotus"></ion-icon></a></li>
                    </ul>
                </div>
            </div>

            <div class="site-copyright">
                <p><?php global $insideverse; echo $insideverse['copy-right']?></p>
            </div>

        </div>
    </div>
</footer><!-- .footer -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>