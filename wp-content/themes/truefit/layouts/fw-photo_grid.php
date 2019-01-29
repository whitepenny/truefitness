<?php

  $image_large = get_sub_field( 'image_1' );
  $image_small = get_sub_field( 'image_2' );
  $image_tall = get_sub_field( 'image_3' );
  $promotion_text = get_sub_field( 'promotion_text' );
  $promotion_link = get_sub_field( 'promotion_link' );

  $bg_options_large = tf_image_photo_grid_large( $image_large['ID'] );
  $bg_options_small = tf_image_photo_grid_small( $image_small['ID'] );
  $bg_options_tall = tf_image_photo_grid_tall( $image_tall['ID'] );
?>

<section class="photo_grid">
  <div class="fs-row">
    <div class="fs-cell fs-md-4 fs-lg-7 fs-xl-8 image_left_cell">
      <div class="fs-row">
        <div class="fs-cell image_large_cell js-checkpoint" data-checkpoint-animation="fade-up">
          <div class="image_large js-background" data-background-options="<?php echo tf_json_options( $bg_options_large ); ?>"></div>
        </div>
        <div class="fs-cell fs-md-5 fs-lg-9 fs-all-justify-end image_small_cell js-checkpoint" data-checkpoint-animation="fade-up">
          <div class="image_small js-background" data-background-options="<?php echo tf_json_options( $bg_options_small ); ?>"></div>
        </div>
      </div>
    </div>
    <div class="fs-cell fs-md-2 fs-lg-5 fs-xl-4 image_right_cell js-checkpoint" data-checkpoint-animation="fade-up">
      <div class="image_tall js-background" data-background-options="<?php echo tf_json_options( $bg_options_tall ); ?>"></div>
    </div>
  </div>
  <?php if( ! empty( $promotion_link ) ) : ?>
  <div class="photo_grid_promotion_container js-checkpoint" data-checkpoint-animation="fade-up">
    <a class="promotion_link" href="<?php echo $promotion_link['url']; ?>">
      <div class="photo_grid_promotion_circle">
        <h2>
          <?php tf_format_content( $promotion_text ); ?><br>
          <span><?php echo $promotion_link['title']; ?></span>
        </h2>
      </div>
    </a>
  </div>
  <?php else : ?>
  <div class="photo_grid_promotion_container">
    <div class="photo_grid_promotion_circle">
      <h2><?php tf_format_content( $promotion_text ); ?></h2>
    </div>
  </div>
  <?php endif; ?>
</section>
