<?php
  $main_title = get_bloginfo( 'name' );

  $address = get_field( 'address', 'option' );
  $tel = get_field( 'telephone', 'options' );
  $link = get_field( 'address_link' );
?>

<div class="fs-cell fs-sm-first fs-md-first fs-lg-3 fs-lg-justify-end sidebar_address_cell js-checkpoint" data-checkpoint-animation="fade-up">
  <section class="sidebar_address">
    <div class="sidebar_logo">
      <span class="icon blockquote_logo"></span>
      <span class="screenreader"><?php echo $main_title; ?></span>
    </div>
    <p class="sidebar_copy">
      <?php echo $address; ?> <br>
      <?php echo $tel; ?> <br>
      <a class="sidebar_link" href="<?php echo $link['url']; ?>"><?php echo $link['title']; ?></a>
    </p>
  </section>
</div>
