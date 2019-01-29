<?php

get_header();

get_template_part( 'layouts/page_header', 'post_type' );
get_template_part( 'layouts/class_list' );

$post_type = tf_get_cpt();
$page_id = tf_get_cpt_page( $post_type );

tf_template_part( 'layouts/blocks', array(
  'page_id' => $page_id,
) );

get_footer();
