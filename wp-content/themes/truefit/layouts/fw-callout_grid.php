<?php

  $callouts = get_sub_field( 'callout' );
?>

<section class="grid_callout">
  <div class="fs-row">
    <div class="fs-cell">
      <div class="grid_callout_container">
        <?php foreach( $callouts as $callout ) : ?>
            <div class="grid_callout_item <?php echo $callout['color']; ?> js-checkpoint" data-checkpoint-animation="fade-up">
              <?php if( ! empty( $callout['subtitle'] ) ) : ?>
                <h3 class="grid_callout_subtitle"><?php echo $callout['subtitle']; ?></h3>
              <?php endif; ?>
                <h2 class="grid_callout_title"><?php echo $callout['title']; ?></h2>
              <?php if( ! empty( $callout['disclaimer'] ) ) : ?>
                <p class="grid_callout_disclaimer"><?php echo $callout['disclaimer']; ?></p>
              <?php endif; ?>
              <div class="grid_callout_content page_content">
                <?php echo $callout['content']; ?>
              </div>
              <?php if( ! empty( $callout['button'] ) ) : ?>
                <a class="grid_callout_button <?php echo $callout['color']; ?>" href="<?php echo $callout['button']['url']; ?>"><?php echo $callout['button']['title']; ?></a>
              <?php endif; ?>
            </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>
