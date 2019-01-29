<?php

get_header();

while ( have_posts() ) :
  the_post();

  get_template_part( 'layouts/page_header' );
  get_template_part( 'layouts/blocks' );

endwhile;

get_footer();
