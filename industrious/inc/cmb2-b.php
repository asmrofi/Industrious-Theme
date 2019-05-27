<?php
add_action( 'cmb2_init', 'highlight' );
function highlight() {

$prefix = 'highlights';

$cmb = new_cmb2_box( array(
    'id' => $prefix . 'icon',
    'title' => __( 'Icon info', 'industrious' ),
    'object_types' => array( 'highlights' ),
    'context' => 'normal',
    'priority' => 'default',
) );

$cmb->add_field( array(
    'name' => __( 'Icon', 'industrious' ),
    'id' => 'hicon',
    'type' => 'text',
    
) );
}


add_action( 'cmb2_init', 'testimonial' );
function testimonial() {

$prefix = 'testimonial';

$cmb = new_cmb2_box( array(
    'id' => $prefix . 'author_info',
    'title' => __( 'Author info', 'industrious' ),
    'object_types' => array( 'testimonial' ),
    'context' => 'normal',
    'priority' => 'default',
    ) );

$cmb->add_field( array(
    'name' => __( 'Author Designation', 'industrious' ),
    'id' => 'authord',
    'type' => 'text',
    'default' => 'text',
    ) );
    
$cmb->add_field( array(
    'name' => esc_html__( 'Author photo ', 'industrious' ),
    'desc' => esc_html__( 'Upload an image or enter a URL.', 'industrious' ),
    'id'   => 'aimage',
    'type' => 'file',
	) );
}
