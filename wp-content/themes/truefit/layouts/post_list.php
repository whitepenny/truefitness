<?php

if ( have_posts() ) :
?>
<div class="fs-row post_list">
  <?php
    while ( have_posts() ) :
      the_post();
      get_template_part( 'layouts/post_item' );
    endwhile;
  ?>
  <div class="post_pagination fs-cell js-checkpoint" data-checkpoint-animation="fade-up">
    <?php tf_pagination(); ?>
  </div>
</div>
<?php
else:
?>
<p>Sorry, no posts found.</p>
<?php
endif;
