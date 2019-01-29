<?php
  $logo = get_field( 'logo' );
  $content = get_field( 'content' );
  $sidebar_link = get_field( 'sidebar_link' );
  $sidebar_content = get_field( 'sidebar_content' );
  $sidebar_button = get_field( 'sidebar_button' );

  $sidebar_exists = ( !empty( $sidebar_link ) || !empty( $sidebar_content ) || !empty( $sidebar_button ) ) ? true : false;
?>

<section class="class_content">
  <div class="fs-row">
    <?php if( $sidebar_exists ) : ?>
    <div class="fs-cell fs-lg-6 class_content_cell">
    <?php else : ?>
    <div class="fs-cell fs-lg-10 fs-all-justify-center class_content_cell">
    <?php endif; ?>
      <div class="class_logo js-checkpoint" data-checkpoint-animation="fade-up">
        <?php tf_responsive_image( tf_image_class_content_logo( $logo['ID'] ), 'class_content_logo' ); ?>
      </div>
      <div class="class_page_content page_content js-checkpoint" data-checkpoint-animation="fade-up">
        <?php echo $content; ?>
      </div>
    </div>
    <?php if( $sidebar_exists ) : ?>
    <div class="fs-cell fs-lg-6 fs-xl-5 fs-lg-justify-end class_sidebar_cell js-checkpoint" data-checkpoint-animation="fade-up">
      <h2 class="class_sidebar_title">Class Information</h2>
      <?php if( !empty( $sidebar_link ) ) : ?>
        <span class="icon calendar class_sidebar_icon"></span>
        <a class="class_sidebar_link" href="<?php echo $sidebar_link['url']; ?>"><?php echo $sidebar_link['title']; ?></a>
      <?php endif; ?>
      <?php if( !empty( $sidebar_content ) ) : ?>
        <div class="class_sidebar_content">
          <?php echo $sidebar_content; ?>
        </div>
      <?php endif; ?>
      <?php if( !empty( $sidebar_button ) ) : ?>
        <a class="class_sidebar_button" href="<?php echo $sidebar_button['url']; ?>"><?php echo $sidebar_button['title']; ?></a>
      <?php endif; ?>
    </div>
    <?php endif; ?>
  </div>
</section>
