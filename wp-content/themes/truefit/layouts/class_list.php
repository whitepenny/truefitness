<?php

if ( have_posts() ) :
?>
<div class="fs-row class_list">
  <?php
    while ( have_posts() ) :
      the_post();
      get_template_part( 'layouts/class_item' );
    endwhile;
  ?>
</div>
<?php
endif;
