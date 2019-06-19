<?php

  $title = get_sub_field( 'title' );
  $content = get_sub_field( 'content' );
  $list = get_sub_field('list');
  $button = get_sub_field( 'button' );
  $lightbox = get_sub_field('lightbox');
?>

<section class="content_intro <?php echo ( empty( $button ) ? 'content_intro_thin' : '' ) ?>">
  <div class="fs-row">
    <div class="fs-cell">
      <h1 class="content_intro_title js-checkpoint" data-checkpoint-animation="fade-up"><?php echo $title; ?></h1>
    </div>
  <div>
  <div class="fs-row fs-all-justify-around">
    <div class="fs-cell fs-lg-5">
      <div class="content_intro_content js-checkpoint" data-checkpoint-animation="fade-up">
        <?php tf_format_content( $content ); ?>
      </div>
    </div>
    <div class="fs-cell fs-lg-5">
      <div class="content_intro_content content_intro_list js-checkpoint" data-checkpoint-animation="fade-up">
        <?php tf_format_content( $list ); ?>
      </div>
    </div>
  </div>  
  <div class="fs-row fs-all-justify-center">
    <div class="fs-cell fs-lg-6 fs-xl-6 content_intro_cell">
      <?php if( ! empty( $button ) ) : ?>
      <a class="content_intro_button js-checkpoint" data-checkpoint-animation="fade-up" href="<?php echo $button['url']; ?>"><?php echo $button['title']; ?></a>
      <?php endif; ?>
      <?php if( ! empty( $lightbox ) ) : ?>
      <a class="content_intro_button js-checkpoint lightbox" data-checkpoint-animation="fade-up" href="<?php echo $lightbox['url']; ?>"><?php echo $lightbox['title']; ?></a>
      <?php endif; ?>

    </div>
  </div>
</section>
