<?php

  $content = get_sub_field( 'content' );
?>

<section class="wysiwyg_content js-checkpoint" data-checkpoint-animation="fade-up">
  <div class="fs-row">
    <div class="fs-cell fs-lg-11 fs-xl-10 fs-all-justify-center">
      <div class="page_content">
        <?php echo $content; ?>
      </div>
    </div>
  </div>
</section>
