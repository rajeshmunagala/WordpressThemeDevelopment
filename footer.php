    <!--stite footer starts -->
    <footer class="site-footer">
    <p><?php bloginfo('name'); ?> -&copy; <?php echo date('Y'); ?></p>
    <nav class="site-nav">
           <?php
                $args = array(
                    'theme_location' => 'footer'
                );
            ?>
            <?php wp_nav_menu( $args); ?>
        </nav>
    </footer>
<!--stite footer end-->
</div>
<?php wp_footer(); ?>
</body>
</html>