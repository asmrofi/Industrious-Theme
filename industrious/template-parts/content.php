<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package industrious
 */

?>
<?php 
    get_template_part('template-parts/banner');
    
    get_template_part('template-parts/highlight');
   
    get_template_part('template-parts/cta-content');
    
    get_template_part('template-parts/testimonial');

    the_tags();
?>
