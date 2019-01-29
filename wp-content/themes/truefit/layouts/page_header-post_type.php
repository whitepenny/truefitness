<?php

$post_type = tf_get_cpt();
$page_id = tf_get_cpt_page( $post_type );

$page_title = get_field( 'page_title', $page_id );
$page_subtitle = get_field( 'page_subtitle', $page_id );
$page_intro = get_field( 'page_intro', $page_id );
$page_image = get_field( 'page_image', $page_id );
$slim_header = get_field( 'slim_header', $page_id );

if ( empty( $page_title ) ) {
  $page_title = get_the_title( $page_id );
}

tf_template_part( 'layouts/partial-page_header', array(
  'page_title' => $page_title,
  'page_subtitle' => $page_subtitle,
  'page_intro' => $page_intro,
  'page_image' => $page_image,
  'slim_header' => $slim_header,
) );
