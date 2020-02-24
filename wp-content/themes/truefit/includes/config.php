<?php

// Env

$tf_page_protocol = ( isset( $_SERVER['HTTPS'] ) && $_SERVER['HTTPS'] ) ? 'https://' : 'http://';
$tf_page_url      = $tf_page_protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$tf_domain        = $tf_page_protocol . $_SERVER['HTTP_HOST'];

if ( strpos( $tf_page_url, '?') > -1 ) {
  $tf_page_url = substr( $tf_page_url, 0, strpos( $tf_page_url, '?') );
}

// Globals

define( 'TF_VERSION', '1.4.3' );
define( 'TF_DEBUG', true );
define( 'TF_DEV', ( strpos( $tf_page_url, '.test') !== false || strpos( $tf_page_url, 'localhost') !== false ) );
