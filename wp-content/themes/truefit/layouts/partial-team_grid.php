<?php

  $team = get_field( 'team' );
?>

<?php if( !empty( $team ) ) : ?>
<section class="team_grid">
  <div class="fs-row">
  <?php foreach( $team as $member ) :
          $title = get_field( 'title', $member->ID );
          $subtitle = get_field( 'subtitle', $member->ID );
          $content = get_field( 'content', $member->ID );
          $image = get_field( 'image', $member->ID );

          $bg_options = tf_image_background_team_grid( $image['ID'] );
  ?>
  <div class="fs-cell fs-xs-3 fs-sm-2 fs-sm-justify-center fs-md-3 fs-md-justify-center fs-lg-third js-checkpoint" data-checkpoint-animation="fade-up">
    <div class="team_member js-background" data-background-options="<?php tf_json_options( $bg_options ); ?>">
      <div class="team_member_content_container">
        <h2 class="team_member_title"><?php echo $title; ?></h2>
        <?php if( !empty( $subtitle ) ) : ?>
          <h3 class="team_member_subtitle"><?php echo $subtitle; ?></h3>
        <?php endif; ?>
        <?php if( !empty( $content ) ) : ?>
          <p class="team_member_content"><?php tf_format_content( $content ); ?></p>
        <?php endif; ?>
      </div>
    </div>
  </div>
  <?php endforeach; ?>
  </div>
</section>
<?php endif; ?>
