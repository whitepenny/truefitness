<?php
$post_image = get_field( 'post_image' );
$link = get_the_permalink();

?>
<div class="post_item fs-cell fs-md-third fs-lg-third js-checkpoint" data-checkpoint-animation="fade-up">
  <a href="<?php echo $link; ?>">
    <?php tf_responsive_image( tf_image_post_list( $post_image['ID'] ), 'post_item_image' ); ?>
  </a>
  <div class="post_item_container">
    <span class="post_item_date"><?php the_time( 'n.j.y' ); ?></span>
    <h2 class="post_item_title">
      <a href="<?php echo $link; ?>"><?php the_title(); ?></a>
    </h2>
    <div class="post_item_content">
      <p><?php echo tf_trim_length( strip_tags( get_the_excerpt() ), 100 ); ?></p>
    </div>
    <a href="<?php echo $link; ?>" class="post_item_link">Read More</a>
  </div>
</div>
