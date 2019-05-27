<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package industrious
 */

get_header();
?>
<section class="wrapper">
    <div class="inner">
        <?php
		while ( have_posts() ) :
			the_post();
			
            the_title();
            the_content();
			the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
		endwhile; // End of the loop.
		?>
    </div>
</section>

<?php
get_sidebar();
get_footer();
