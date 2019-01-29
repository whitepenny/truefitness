<?php

  $posts = tf_get_posts();
?>
<div class="news_grid">
  <div class="fs-row">
    <div class="fs-cell fs-xl-11 fs-all-justify-end">
      <div class="fs-row post_row">
        <?php foreach( $posts as $post ) :
                $link = get_the_permalink( $post->ID );
        ?>
        <div class="fs-cell fs-md-third fs-lg-third js-checkpoint" data-checkpoint-animation="fade-up">
          <div class="post_item_container">
            <span class="post_item_date"><?php echo get_the_time( 'n.j.y', $post->ID ); ?></span>
            <h2 class="post_item_title">
              <a href="<?php echo $link; ?>"><?php the_title(); ?></a>
            </h2>
            <div class="post_item_content">
              <p><?php echo tf_trim_length( strip_tags( $post->post_content ), 100 ); ?></p>
            </div>
            <a href="<?php echo $link; ?>" class="post_item_link">Read More</a>
          </div>
        </div>
        <hr class="news_grid_mobile_break">
      <?php endforeach; ?>
      </div>
    </div>
  </div>
  <div class="news_grid_bg_graphic"></div>
</div>
