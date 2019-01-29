<?php
// global $header_transparent;

$main_title = get_bloginfo( 'name' );
$home_header;
// $social_links = get_field( 'global_social', 'option' );
//
$scripts_head = get_field( 'scripts_head', 'option' );
$scripts_body = get_field( 'scripts_body', 'option' );

$header_link = get_field( 'header_cta_link', 'option' );

if ( is_front_page() ) {
  $home_header = "home_header";
}

$navigation_options = array(
  'type'     => 'overlay',
  'gravity'  => 'right',
  'labels'    => false,
  'maxWidth' => '10000px'
);

?>
<!DOCTYPE html>
<html lang="en" class="no-js">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <?php wp_head(); ?>
    <?php tf_favicons(); ?>
    <?php echo $scripts_head; ?>
  </head>
  <body <?php body_class( 'fs-grid' ); ?> >
    <?php echo $scripts_body; ?>

    <div class="container js-mobile_nav_content">

    <?php if( !empty( $home_header ) ) : ?>
      <header class="header <?php echo $home_header; ?>">
    <?php else : ?>
      <header class="header">
    <?php endif; ?>
        <div class="fs-row">
          <div class="fs-cell">
            <div class="header_content_wrapper">
              <a href="<?php echo get_home_url(); ?>" class="header_logo">
                <span class="icon logo"></span>
                <span class="screenreader"><?php echo $main_title; ?></span>
              </a>
              <div class="header_right">
                <a href="<?php echo $header_link; ?>" class="header_cta">
                  <span class="icon menu_arrow"></span>
                  <span class="screenreader">arrow</span>
                  <span class="header_cta_text">TRY TRUEFITNESS<br>NOW</span>
                </a>
                <button href="#" class="header_menu js-mobile_nav_handle js-nav_content">
                  <!-- <span class="icon menu"></span> -->
                  <span class="menu_line first"></span>
                  <span class="menu_line_long second"></span>
                  <span class="menu_line third"></span>
                  <span class="screenreader">menu button</span>
                </button>
              </div>
            </div>
          </div>
        </div>

        <div class="mobile_nav_tray js-navigation" data-navigation-handle=".js-mobile_nav_handle" data-navigation-content=".js-nav_content" data-navigation-options="<?php echo tf_json_options( $navigation_options ); ?>" aria-hidden="true">
          <div class="mobile_nav_container">
            <nav class="mobile_nav main_nav">
              <button class="mobile_nav_close js-mobile_nav_handle">&times;</button>
              <?php tf_main_navigation( 1 ); ?>
            </nav>
          </div>
        </div>

      </header>

      <div class="page_wrapper">
        <main class="main">
