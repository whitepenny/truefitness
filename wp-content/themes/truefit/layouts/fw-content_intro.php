<?php

  $title = get_sub_field( 'title' );
  $content = get_sub_field( 'content' );
  $button = get_sub_field( 'button' );
?>

<section class="content_intro <?php echo ( empty( $button ) ? 'content_intro_thin' : '' ) ?>">
  <div class="fs-row">
    <div class="fs-cell">
      <h1 class="content_intro_title js-checkpoint" data-checkpoint-animation="fade-up"><?php echo $title; ?></h1>
    </div>
    <div class="fs-cell fs-md-4 fs-lg-6 fs-xl-6 fs-all-justify-center content_intro_cell">
      <div class="content_intro_content page_content js-checkpoint" data-checkpoint-animation="fade-up">
        <?php tf_format_content( $content ); ?>
      </div>
      <?php if( ! empty( $button ) ) : ?>
      <a class="content_intro_button js-checkpoint" data-checkpoint-animation="fade-up" href="<?php echo $button['url']; ?>"><?php echo $button['title']; ?></a>
      <?php endif; ?>
    </div>
  </div>
</section>
