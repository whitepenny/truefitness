<?php

$post_title = get_field( 'page_title' );
$post_image = get_field( 'page_image' );
$link = get_the_permalink();

$bg_options = tf_image_background_class_item( $post_image['ID'] );
?>

<div class="fs-cell fs-md-half fs-lg-third class_list_cell js-checkpoint" data-checkpoint-animation="fade-up">
  <a href="<?php echo $link; ?>" class="class_list_item_link">
    <div class="class_list_item js-background" data-background-options="<?php echo tf_json_options( $bg_options ); ?>">
      <h4 class="class_list_item_title"><?php echo $post_title; ?></h4>
    </div>
  </a>
</div>
