<?php

  $logos = get_sub_field( 'logo' );

  $carousel_options = array(
    "show"       => array(
      "0"      => 3,
      "740px"  => 4,
      "980px"  => 6,
      "1220px" => 6,
    ),
    "autoAdvance" => true,
    "autoTime"   => 4000,
    "controls"   => false,
    "pagination" => false,
    "infinite"   => true,
    // "paged"     => true,
  );
?>

<section class="logo_row">
  <div class="logo_container js-carousel" data-carousel-options="<?php tf_json_options( $carousel_options ); ?>">
    <?php foreach( $logos as $logo ) : ?>
      <div class="logo_item">
        <?php tf_responsive_image( tf_image_logo_row( $logo['image']['ID'] ), 'logo_image' ); ?>
      </div>
    <?php endforeach; ?>
  </div>
</section>
