<?php

  $posts = tf_get_posts();
?>

<?php foreach( $posts as $post ) :
          $link = get_the_permalink( $post );
          $time = get_the_time( 'n.j.y', $post );
  ?>

  <div class="sidebar_post js-checkpoint" data-checkpoint-animation="fade-up">
    <a class="sidebar_post_link" href="<?php echo $link ?>">
      <span class="sidebar_post_date"><?php echo $time; ?></span>
      <h4 class="sidebar_post_title"><?php echo $post->post_title; ?></h4>
    </a>
  </div>

<?php endforeach; ?>
