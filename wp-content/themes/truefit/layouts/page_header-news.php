<?php

$page_id = get_option( 'page_for_posts' );

$page_title = get_field( 'page_title', $page_id );
$page_subtitle = get_field( 'page_subtitle', $page_id );
$page_intro = get_field( 'page_intro', $page_id );
$page_image = get_field( 'page_image', $page_id );
$slim_header = get_field( 'slim_header', $page_id );

$background_options = tf_image_background_page_header( $page_image['ID'] );
?>

<section class="page_header <?php echo ( ! empty( $slim_header ) ) ? $slim_header[0] : ''; ?> js-background" data-background-options="<?php echo tf_json_options( $background_options ); ?>">
  <div class="fs-row">
    <div class="fs-cell fs-md-5 fs-lg-7 fs-xl-6 page_header_cell">
      <?php if( ! empty( $page_subtitle ) ) : ?>
        <h3 class="page_header_subtitle"><?php echo $page_subtitle; ?></h3>
      <?php endif; ?>
      <h1 class="page_header_title"><?php echo $page_title; ?></h1>
      <?php if( ! empty( $page_intro ) ) : ?>
        <p class="page_header_intro"><?php echo $page_intro; ?></p>
      <?php endif; ?>
    </div>
  </div>
</section>
