<?php
/**
 * Template Name: Contact
 */

get_header();

while ( have_posts() ) :
  the_post();

  get_template_part( 'layouts/page_header' );
?>

<section class="contact">
  <div class="fs-row">
    <?php
      get_template_part( 'layouts/partial-gravity_form' );
      get_template_part( 'layouts/sidebar_address' );
    ?>
  </div>
  <?php get_template_part( 'layouts/partial-map' ); ?>
</section>

<?php
endwhile;

get_footer();
