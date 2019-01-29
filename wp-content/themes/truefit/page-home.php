<?php
/**
 * Template Name: Home Page
 */

get_header();

while ( have_posts() ) :
  the_post();

  get_template_part( 'layouts/page_header', 'home' );
  get_template_part( 'layouts/blocks' );
  get_template_part( 'layouts/partial-news_grid' );

endwhile;

get_footer();
