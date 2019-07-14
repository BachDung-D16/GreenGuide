<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package blogger_buzz
 */
$footer_widgets = get_theme_mod('blogger_buzz_enable_footer_widget', 'disable' );
?>    
	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
        <?php if ($footer_widgets == 'enable' ): ?>
            <div class="upper_footer">
                <div class="container">
                    <div class="row">
                        <?php 
                            if(is_active_sidebar( 'footer-1' ) || is_active_sidebar( 'footer-2' ) || is_active_sidebar( 'footer-3' )):

                                $widget_count = 0;

                                for ($i = 1; $i <= 3; $i++) {

                                    if (is_active_sidebar('footer-' . $i)) {
                                        $widget_count++;
                                    }
                                }

                                $widget_count = 12 / $widget_count;

                                for ($i = 1; $i <= 3; $i++) {
                                    if (is_active_sidebar('footer-' . $i)) {
                                        ?>
                                        <div class="col-lg-<?php echo intval($widget_count); ?> col-md-6 col-sm-12">
                                            <?php dynamic_sidebar('footer-' . $i); ?>
                                        </div>
                                    <?php }
                                }
                            endif;
                        ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <div class="lower_bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12 lower_left" >
                        <div class="copyright">
                            <?php 
                                $copyright = get_theme_mod('blogger_buzz_footer_copyright');

                                if (!empty($copyright)) {
                                    echo esc_html(apply_filters('blogger_buzz_copyright_text', $copyright), 'blogger-buzz');
                                } else {
                                    echo esc_html(apply_filters('blogger_buzz_copyright_text', $content = esc_html__('Copyright  &copy; ', 'blogger-buzz') . date('Y') . ' ' . get_bloginfo('name')));
                                }
                                /* translators: %s: CMS name, i.e. WordPress. */
                                printf( ' WordPress Theme : by %1$s', '<a href=" ' . esc_url('https://sparklewpthemes.com/') . ' " rel="designer" target="_blank">'.esc_html__('Sparkle Themes','blogger-buzz').'</a>' ); 
                            ?>
                        </div>
                    </div>
                        
                    <?php 
                        $social_icon   = get_theme_mod('blogger_buzz_social_links');

                        if (!empty( $social_icon ) ) :

                            $social_icon = json_decode($social_icon);

                            echo '<div class="col-lg-6 col-md-12 col-sm-12 lower_right"><ul>';

                                foreach ($social_icon as $icon):

                                    echo '<li><a href="'.esc_url($icon->social_link).'"><i class="'.esc_attr($icon->social_icon).'"></i></a></li>';
                                
                                endforeach;

                            echo '</ul></div>';

                        endif;
                    ?>
                </div>

            </div>
        </div>
		
	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
