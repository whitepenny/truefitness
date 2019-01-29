<?php

  $promotion_text = get_sub_field( 'promotion_text' );
  $content = get_sub_field( 'content' );
  $link = get_sub_field( 'link' );
  $image = get_sub_field( 'image' );
?>

<section class="flexible_callout">
  <div class="fs-row">
    <div class="fs-cell fs-xs-3 fs-sm-2 fs-sm-justify-center fs-md-2 fs-lg-4 fs-xl-3 flexible_callout_content_cell">
      <?php if( ! empty( $promotion_text ) ) : ?>
      <div class="flexible_promotion_container js-checkpoint" data-checkpoint-animation="fade-up">
        <h2><?php tf_format_content( $promotion_text ); ?></h2>
      </div>
      <?php endif; ?>
      <div class="flexible_callout_content page_content js-checkpoint" data-checkpoint-animation="fade-up">
        <?php echo $content; ?>
        <?php if( ! empty( $link ) ) : ?>
          <a class="flexible_callout_link" href="<?php echo $link['url'] ?>"><?php echo $link['title']; ?></a>
        <?php endif; ?>
      </div>
    </div>
    <div class="fs-cell fs-md-4 fs-lg-7 fs-xl-8 fs-all-justify-end flexible_callout_sidebar_cell js-checkpoint" data-checkpoint-animation="fade-up">
      <?php tf_responsive_image( tf_image_flexible_callout( $image['ID'] ), 'flexible_callout_image' ); ?>
    </div>
  </div>
</section>
