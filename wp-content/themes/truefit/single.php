<?php

$post_image = get_field( 'post_image' );

get_header();

while ( have_posts() ) :
  the_post();
?>

  <section class="post_detail js-checkpoint" data-checkpoint-animation="fade-up">
    <div class="fs-row">
      <div class="fs-cell post_detail_title_cell">
        <span class="post_detail_date"><?php the_time( 'n.j.y' ); ?></span>
        <h2 class="post_detail_title"><?php the_title(); ?></h2>
      </div>
      <div class="fs-cell fs-lg-7 post_detail_cell">
        <?php if( ! empty( $post_image ) ) : ?>
        <?php tf_responsive_image( tf_image_post_detail( $post_image['ID'] ), 'post_detail_image' ); ?>
        <?php endif; ?>
        <?php  get_template_part( 'layouts/page_content' ); ?>
      </div>
      <div class="fs-cell fs-lg-4 fs-lg-justify-end post_sidebar_cell">
        <?php get_template_part( 'layouts/sidebar_post' ); ?>
      </div>
    </div>
  </section>

<?php
endwhile;

get_footer();
