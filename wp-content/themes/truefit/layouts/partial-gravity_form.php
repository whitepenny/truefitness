<?php
$title = get_field( 'title' );
$textarea = get_field( 'textarea' );
$form = get_field( 'gravity_form' );

if ( ! empty( $form ) && function_exists( 'gravity_form' ) ) :
?>
<div class="fs-cell fs-lg-7 gravityform_cell">
  <div class="gravityform_block">
    <h2 class="form_title js-checkpoint" data-checkpoint-animation="fade-up"><?php echo $title; ?></h2>
    <?php if( !empty( $textarea ) ) : ?>
    <p class="form_textarea js-checkpoint" data-checkpoint-animation="fade-up"><?php tf_format_content( $textarea ); ?></p>
    <?php endif; ?>
    <div class="gravityform_block_container gravityform_container js-checkpoint" data-checkpoint-animation="fade-up">
      <?php gravity_form( $form, false, false ); ?>
    </div>
  </div>
</div>
<?php
endif;
