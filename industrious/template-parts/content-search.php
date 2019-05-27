<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package industrious
 */

?>
<section id="main" class="wrapper">
    <div class="inner">
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="entry-header">
                <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

                <?php if ( 'post' === get_post_type() ) : ?>
                <div class="entry-meta">
                    <?php
			industrious_posted_on();
			industrious_posted_by();
			?>
                </div><!-- .entry-meta -->
                <?php endif; ?>
            </header><!-- .entry-header -->

            <?php industrious_post_thumbnail(); ?>

            <div class="entry-summary">
                <?php the_excerpt(); ?>
            </div><!-- .entry-summary -->

            <footer class="entry-footer">
                <?php industrious_entry_footer(); ?>
            </footer><!-- .entry-footer -->
        </article><!-- #post-<?php the_ID(); ?> -->
    </div>
</section>
