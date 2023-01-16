<?php
/*
Template Name: О преподавателях
*/

add_filter('body_class','services_body_class');
function services_body_class( $classes ) {
	$classes[] = 'education';
	$classes[] = 'about';
	return $classes;
}

get_header();

the_post();
$id = get_the_ID();
$title              = get_the_title($id);
$image_id           = get_post_meta( get_the_ID(), 'cdiservices-meta-image', true );
$image_url          = wp_get_attachment_image_src( $image_id, 'large' )[0];

wp_reset_postdata();
get_footer();