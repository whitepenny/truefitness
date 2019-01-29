<?php

  $gravity = get_sub_field( 'gravity' );
  $title = get_sub_field( 'title' );
  $subtitle = get_sub_field( 'subtitle' );
  $content = get_sub_field( 'content' );
  $button = get_sub_field( 'button' );
  $sidebar = get_sub_field( 'sidebar' );
?>

<section class="split_callout">
  <div class="fs-row">
    <div class="fs-cell fs-lg-6 callout_content_cell js-checkpoint" data-checkpoint-animation="fade-up">
      <h2 class="callout_title"><?php echo $title; ?></h2>
      <?php if( ! empty( $subtitle ) ) : ?>
      <h3 class="callout_subtitle"><?php echo $subtitle; ?></h3>
      <?php endif; ?>
      <div class="callout_content page_content">
        <?php echo $content; ?>
        <?php if( ! empty( $button ) ) : ?>
          <a class="callout_button" href="<?php echo $button['url'] ?>"><?php echo $button['title']; ?></a>
        <?php endif; ?>
      </div>
    </div>
    <?php if( $gravity == 'left' ) : ?>
    <div class="fs-cell fs-sm-first fs-md-first fs-lg-first fs-lg-6 fs-xl-5 fs-lg-justify-start callout_sidebar_cell js-checkpoint" data-checkpoint-animation="fade-up">
    <?php else : ?>
    <div class="fs-cell fs-sm-first fs-md-first fs-lg-6 fs-xl-5 fs-lg-justify-end callout_sidebar_cell js-checkpoint" data-checkpoint-animation="fade-up">
    <?php endif; ?>

  <?php
    while( the_flexible_field( 'sidebar' ) ) :
      if( get_row_layout() == 'logo_button' ) :
        $logo = get_sub_field( 'logo' );
        $link = get_sub_field( 'link' );
    ?>
      <a href="<?php echo $link['url'] ?>">
        <?php tf_responsive_image( tf_image_split_callout( $logo['ID'] ), 'callout_sidebar_image' ); ?>
      </a>
    <?php endif; ?>
    <?php
      if( get_row_layout() == 'image' ) :
        $image = get_sub_field( 'image' );
          tf_responsive_image( tf_image_split_callout( $image['ID'] ), 'callout_sidebar_image' );
      endif;
    endwhile;
    ?>

    </div>
  </div>
</section>
