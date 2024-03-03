
            <footer class="site-footer">
                <div class="site-footer__copyright">
                    Copyright &copy; 2024 <?php bloginfo('name'); ?>
                </div>
                <?php
                $args = [
                    'container'         => 'ul',
                    'menu_class'        => 'site-footer__menu',
                    'theme_location'    => 'footer_menu'
                ];
            
                wp_nav_menu( $args );
                ?>
                <!-- <a href="" class="site-footer__trademark">Trademark policy</a> -->
                <?php edit_post_link('Edit this', '', '', $post, 'site-footer__edit'); ?>
                <!-- <a href="" class="site-footer__edit">Edit this page on github</a> -->
            </footer>
        </div>

    </div>
</div>
<?php wp_footer(); ?>
</body>
</html>