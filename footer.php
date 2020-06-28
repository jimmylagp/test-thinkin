

    <!-- Footer -->
    <footer class="footer">
        <div class="footer__container container">
            <div class="footer__row row">
                <div class="footer__column column">
                    <small class="footer__text"><?= get_field('global_copyright', 'option') ? get_field('global_copyright', 'option') : __('© Copyright bloggers-love-stickers.com - Show with love who you are ❤️', 'thikin-smart'); ?></small>
                </div>
                <div class="footer__column column">
                    <?php
                    wp_nav_menu([
                        'container' => false,
                        'theme_location'=> 'footer_menu',
                        'menu_class'    => 'footer__nav-menu',
                        'echo'            => true,
                    ]);
                    ?>
                </div>
            </div>
        </div>
    </footer>
    <!-- End footer -->

    <?php wp_footer(); ?>
</body>
</html>