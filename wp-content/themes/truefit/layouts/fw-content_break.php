<?php

  $subtitle = get_sub_field( 'subtitle' );
  $title = get_sub_field( 'title' );
  $content = get_sub_field( 'content' );
?>

<section class="content_break">
  <div class="fs-row">
    <div class="fs-cell fs-md-4 fs-lg-6 fs-xl-5 fs-all-justify-center js-checkpoint" data-checkpoint-animation="fade-up">
      <?php if( ! empty( $subtitle ) ) : ?>
        <h3 class="content_break_subtitle"><?php echo $subtitle; ?></h3>
      <?php endif; ?>
      <h2 class="content_break_title"><?php echo $title; ?></h2>
      <div class="content_break_content page_content">
        <?php echo $content; ?>
      </div>
    </div>
  </div>
</section>
