<?php

$type = get_field( 'type' );
$gallery = get_field( 'gallery' );
$video = get_field( 'video', null, false );
$video_thumb = get_field( 'video_thumbnail' );
$header_links = get_field( 'header_links' );

if ( empty( $type ) || $type == 'gallery' ) :

$carousel_options = array(
  "autoAdvance" => true,
  "autoTime"   => 4000,
  "controls"   => false,
  "pagination" => ".header_gallery_pagination",
  "infinite"   => true,
  // "paged"     => true,
);
?>
<section class="page_header_home">
  <div class="fs-row page_header_home_row">
    <div class="fs-cell fs-lg-half">
      <div class="header_left">
        <div class="header_menu_container">
        <?php foreach( $header_links as $l ) : ?>
          <a class="header_link" href="<?php echo $l['link']['url']; ?>">
            <?php echo $l['link']['title']; ?>
            <span class="icon blue_arrow_large"></span>
          </a><br>
        <?php endforeach; ?>
        </div>
      </div>
<!--       <div class="page_header_home_logo_mobile"></div> -->
    </div>
    <div class="header_right">
      <div class="header_gallery_container js-carousel" data-carousel-options="<?php echo tf_json_options( $carousel_options ); ?>">
        <?php foreach( $gallery as $image ) :
                $bg_options = tf_image_background_home_gallery( $image['ID'] );
        ?>
          <div class="gallery_item js-background" data-background-options="<?php echo tf_json_options( $bg_options ); ?>"></div>
        <?php endforeach; ?>
      </div>
    </div>
    <div class="header_gallery_pagination"></div>
<!--     <div class="page_header_home_logo"></div> -->
  </div>
</section>
<?php
else :
  $thumb_file = tf_get_image( $video_thumb['ID'], 'wide-large' );
  $background_options = array(
    'autoPlay' => true,
    'source' => array(
      'video' => $video,
      'poster' => $thumb_file['src'],
    ),
  );
?>
<section class="page_header_home">
  <div class="fs-row page_header_home_row">
    <div class="fs-cell fs-lg-half">
      <div class="header_left">
        <div class="header_menu_container">
        <?php foreach( $header_links as $l ) : ?>
          <a class="header_link" href="<?php echo $l['link']['url']; ?>">
            <?php echo $l['link']['title']; ?>
            <span class="icon blue_arrow_large"></span>
          </a><br>
        <?php endforeach; ?>
        </div>
      </div>
<!--       <div class="page_header_home_logo_mobile"></div> -->
    </div>
    <div class="header_right">
      <div class="header_video js-background" data-background-options="<?php tf_json_options( $background_options ); ?>">
      </div>
    </div>
<!--     <div class="page_header_home_logo"></div> -->
  </div>
</section>
<?php
endif;
?>
