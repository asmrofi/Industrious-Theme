<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package industrious
 */

?>
<!-- Footer -->
<footer id="footer">
    <div class="inner">
        <div class="content">

            <?php if ( is_active_sidebar( 'widget-1' )  ) {
                        dynamic_sidebar( 'widget-1' );
                    }
		          ?>

            <section>
                <?php if ( is_active_sidebar( 'widget-2' )  ) {
                        dynamic_sidebar( 'widget-2' );
                    }
		          ?>

            </section>
            <section>
                <h4>
                    <?php
                        global $industrious;
                        echo wp_kses_post($industrious['widget3-title']);
                    ?>
                </h4>
                <ul class="plain">
                    <li><a href="<?php
                                    global $industrious;
                                    echo wp_kses_post($industrious['widget3-twitter']);
                                    ?>"><i class="icon fa-twitter">&nbsp;</i>Twitter</a></li>

                    <li><a href="<?php
                                    global $industrious;
                                    echo wp_kses_post($industrious['widget3-facebook']);
                                ?>"><i class="icon fa-facebook">&nbsp;</i>Facebook</a></li>

                    <li><a href="<?php
                                    global $industrious;
                                    echo wp_kses_post($industrious['widget3-instagram']);
                                ?>"><i class="icon fa-instagram">&nbsp;</i>Instagram</a></li>

                    <li><a href="<?php
                                    global $industrious;
                                    echo wp_kses_post($industrious['widget3-github']);
                                ?>"><i class="icon fa-github">&nbsp;</i>Github</a></li>
                </ul>
            </section>
        </div>
        <div class="copyright">
            <?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Copyright &copy; %2$s.', 'industrious' ), 'industrious', '<a href="https://www.facebook.com/abu.sayem.50702">A.S.M ROFI-UDDIN</a>' );
				?>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>
