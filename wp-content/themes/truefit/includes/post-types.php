<?php

// Register Custom Post types

function tf_register_post_types() {
  // Blog / Posts
  unregister_taxonomy_for_object_type( 'post_tag', 'post' );
  // unregister_taxonomy_for_object_type( 'category', 'post' );
  remove_post_type_support( 'post', 'comments' );

  $home_url = get_home_url();
  $np_options = get_option( 'nestedpages_posttypes' );

  // $team_root_id = $np_options['team']['post_type_page_assignment_page_id'];
  // $team_slug = trim( str_replace( $home_url, '', get_permalink( $team_root_id ) ), '/' );
  // $corporate_workshop_root_id = $np_options['corporate_workshop']['post_type_page_assignment_page_id'];
  // $corporate_workshop_slug = trim( str_replace( $home_url, '', get_permalink( $corporate_workshop_root_id ) ), '/' );
  // $public_workshop_root_id = $np_options['public_workshop']['post_type_page_assignment_page_id'];
  // $public_workshop_slug = trim( str_replace( $home_url, '', get_permalink( $public_workshop_root_id ) ), '/' );
  $class_root_id = $np_options['class']['post_type_page_assignment_page_id'];
  $class_slug = trim( str_replace( $home_url, '', get_permalink( $class_root_id ) ), '/' );
  // $team_root_id = $np_options['team']['post_type_page_assignment_page_id'];
  // $team_slug = trim( str_replace( $home_url, '', get_permalink( $team_root_id ) ), '/' );

  $slugs = array(
    // 'team' => $team_slug,
    // 'team_id' => $team_root_id,
    // 'corporate_workshop' => $corporate_workshop_slug,
    // 'corporate_workshop_id' => $corporate_workshop_root_id,
    // 'public_workshop' => $public_workshop_slug,
    // 'public_workshop_id' => $public_workshop_root_id,
    'class' => $class_slug,
    'class_id' => $class_root_id,
    // 'team' => $team_slug,
    // 'team_id' => $team_root_id,
  );

  // Team
  // register_taxonomy( 'team_type', 'team', array(
  //   'labels'            => array(
  //     'name'            => 'Types',
  //     'add_new_item'    => 'Add New Type',
  //     'new_item_name'   => 'New Type',
  //   ),
  //   'show_ui'           => true,
  //   'show_tagcloud'     => false,
  //   'show_admin_column' => true,
  //   'hierarchical'      => true,
  //   'rewrite'           => array(
  //     'slug'            => $slugs['team'] . '/type',
  //     'with_front'      => false,
  //   ),
  // ) );
  //
  // register_post_type( 'team', array(
  //   'labels'              => array(
  //     'name'              => 'Team',
  //     'singular_name'     => 'Person',
  //     'add_new'           => 'Add New',
  //     'add_new_item'      => 'Add New Person',
  //     'edit_item'         => 'Edit Person',
  //   ),
  //   'description'         => '',
  //   'menu_icon'           => 'dashicons-groups',
  //   'menu_position'       => '21',
  //   'public'              => true,
  //   'show_ui'             => true,
  //   'has_archive'         => true,
  //   'show_in_menu'        => true,
  //   'show_in_nav_menus'   => false,
  //   'exclude_from_search' => false,
  //   'publicly_queryable'  => true,
  //   'capability_type'     => 'post',
  //   'capabilities'        => array(),
  //   'supports'            => array( 'title', 'editor', 'revisions' ),
  //   'map_meta_cap'        => true,
  //   'map_meta_cap'        => true,
  //   'hierarchical'        => false,
  //   'rewrite'             => array(
  //     'slug'              => $slugs['team'],
  //     'with_front'        => false,
  //   ),
  //   'query_var'           => true,
  // ) );
  //
  // register_taxonomy_for_object_type( 'team_type', 'team' );

  // Corportate Workshops
  // register_post_type( 'corporate_workshop', array(
  //   'labels'              => array(
  //     'name'              => 'Corporate Workshops',
  //     'singular_name'     => 'Corporate Workshop',
  //     'add_new'           => 'Add New Workshop',
  //     'add_new_item'      => 'Add New Workshop',
  //     'edit_item'         => 'Edit Workshop',
  //   ),
  //   'description'         => '',
  //   'menu_icon'           => 'dashicons-calendar-alt',
  //   'menu_position'       => '22',
  //   'public'              => true,
  //   'show_ui'             => true,
  //   'has_archive'         => true,
  //   'show_in_menu'        => true,
  //   'show_in_nav_menus'   => false,
  //   'exclude_from_search' => false,
  //   'publicly_queryable'  => true,
  //   'capability_type'     => 'post',
  //   'capabilities'        => array(),
  //   'supports'            => array( 'title', 'editor', 'revisions' ),
  //   'map_meta_cap'        => true,
  //   'map_meta_cap'        => true,
  //   'hierarchical'        => false,
  //   'rewrite'             => array(
  //     'slug'              => $slugs['corporate_workshop'],
  //     'with_front'        => false,
  //   ),
  //   'query_var'           => true,
  // ) );

  // Public Workshops
  // register_taxonomy( 'public_workshop_type', 'public_workshop', array(
  //   'labels'            => array(
  //     'name'            => 'Types',
  //     'add_new_item'    => 'Add New Type',
  //     'new_item_name'   => 'New Type',
  //   ),
  //   'show_ui'           => true,
  //   'show_tagcloud'     => false,
  //   'show_admin_column' => true,
  //   'hierarchical'      => true,
  //   'rewrite'           => array(
  //     'slug'            => $slugs['public_workshop'] . '/type',
  //     'with_front'      => false,
  //   ),
  // ) );
  //
  // register_post_type( 'public_workshop', array(
  //   'labels'              => array(
  //     'name'              => 'Public Workshops',
  //     'singular_name'     => 'Public Workshop',
  //     'add_new'           => 'Add New Workshop',
  //     'add_new_item'      => 'Add New Workshop',
  //     'edit_item'         => 'Edit Workshop',
  //   ),
  //   'description'         => '',
  //   'menu_icon'           => 'dashicons-calendar-alt',
  //   'menu_position'       => '22',
  //   'public'              => true,
  //   'show_ui'             => true,
  //   'has_archive'         => true,
  //   'show_in_menu'        => true,
  //   'show_in_nav_menus'   => false,
  //   'exclude_from_search' => false,
  //   'publicly_queryable'  => true,
  //   'capability_type'     => 'post',
  //   'capabilities'        => array(),
  //   'supports'            => array( 'title', 'editor', 'revisions' ),
  //   'map_meta_cap'        => true,
  //   'map_meta_cap'        => true,
  //   'hierarchical'        => false,
  //   'rewrite'             => array(
  //     'slug'              => $slugs['public_workshop'],
  //     'with_front'        => false,
  //   ),
  //   'query_var'           => true,
  // ) );
  //
  // register_post_type( 'public_session', array(
  //   'labels'              => array(
  //     'name'              => 'Public Sessions',
  //     'singular_name'     => 'Public Session',
  //     'add_new'           => 'Add New Session',
  //     'add_new_item'      => 'Add New Session',
  //     'edit_item'         => 'Edit Session',
  //   ),
  //   'description'         => '',
  //   'menu_icon'           => 'dashicons-calendar-alt',
  //   'menu_position'       => '23',
  //   'public'              => false,
  //   'show_ui'             => true,
  //   'has_archive'         => false,
  //   'show_in_menu'        => true,
  //   'show_in_nav_menus'   => false,
  //   'exclude_from_search' => false,
  //   'publicly_queryable'  => false,
  //   'capability_type'     => 'post',
  //   'capabilities'        => array(),
  //   'supports'            => array( 'title', 'editor', 'revisions' ),
  //   'map_meta_cap'        => true,
  //   'map_meta_cap'        => true,
  //   'hierarchical'        => false,
  //   'rewrite'             => false,
  //   // 'rewrite'             => array(
  //   //   'slug'              => $slugs['public_workshop'] . '/session',
  //   //   'with_front'        => false,
  //   // ),
  //   'query_var'           => true,
  // ) );

  // register_taxonomy_for_object_type( 'public_workshop_type', 'public_workshop' );


  register_post_type( 'class', array(
    'labels'              => array(
      'name'              => 'Classes',
      'singular_name'     => 'Class',
      'add_new'           => 'Add New Class',
      'add_new_item'      => 'Add New Class',
      'edit_item'         => 'Edit Class',
    ),
    'description'         => '',
    'menu_icon'           => 'dashicons-clipboard',
    'menu_position'       => '22',
    'public'              => true,
    'show_ui'             => true,
    'has_archive'         => true,
    'show_in_menu'        => true,
    'show_in_nav_menus'   => false,
    'exclude_from_search' => false,
    'publicly_queryable'  => true,
    'capability_type'     => 'post',
    'capabilities'        => array(),
    'supports'            => array( 'title', 'editor', 'revisions' ),
    'map_meta_cap'        => true,
    'map_meta_cap'        => true,
    'hierarchical'        => false,
    'rewrite'             => array(
      // 'slug'              => $slugs['public_workshop'],
      'slug'              => $slugs['class'],
      'with_front'        => false,
    ),
    'query_var'           => true,
  ) );

  register_post_type( 'team', array(
    'labels'              => array(
      'name'              => 'Team',
      'singular_name'     => 'Team Member',
      'add_new'           => 'Add New Team Member',
      'add_new_item'      => 'Add New Team Member',
      'edit_item'         => 'Edit Team Member',
    ),
    'description'         => '',
    'menu_icon'           => 'dashicons-groups',
    'menu_position'       => '23',
    'public'              => false,
    'show_ui'             => true,
    'has_archive'         => true,
    'show_in_menu'        => true,
    'show_in_nav_menus'   => false,
    'exclude_from_search' => false,
    'publicly_queryable'  => true,
    'capability_type'     => 'post',
    'capabilities'        => array(),
    'supports'            => array( 'title', 'editor', 'revisions' ),
    'map_meta_cap'        => true,
    'map_meta_cap'        => true,
    'hierarchical'        => false,
    'rewrite'             => array(
      // 'slug'              => $slugs['public_workshop'],
      // 'slug'              => $slugs['team'],
      'slug'              => 'team',
      'with_front'        => false,
    ),
    'query_var'           => true,
  ) );

  //

  $old_slugs = get_option( 'tf_post_type_slugs' );
  if ( empty( $old_slugs ) || (
    // $slugs['team'] != $old_slugs['team'] ||
    // $slugs['corporate_workshop'] != $old_slugs['corporate_workshop'] ||
    // $slugs['public_workshop'] != $old_slugs['public_workshop'] ||
    $slugs['class'] != $old_slugs['class']
    // $slugs['team'] != $old_slugs['team']
  ) ) {
    flush_rewrite_rules();
    update_option( 'tf_post_type_slugs', $slugs );
  }
}
add_action( 'init', 'tf_register_post_types', 5 );


function tf_pre_get_posts( $query ) {
  if ( ! is_admin() && $query->is_main_query() && ! $query->is_single() && ! is_author() ) {
    $featured_posts = get_posts( array(
      'posts_per_page' => 1,
      'meta_query' => array(
        array(
    			'key' => 'featured',
          'compare' => 'LIKE',
    			'value' => 'on',
    		),
      ),
    ) );

    if ( ! empty( $featured_posts ) ) {
      $query->set( 'post__not_in', array( $featured_posts[0]->ID ) );
    }
  }

  // Public sessions
  if ( ! empty( $query->query_vars['post_type'] ) && $query->query_vars['post_type'] == 'public_session' ) {
    $query->set( 'orderby', 'meta_value' );
    $query->set( 'meta_key', 'start_date' );
    $query->set( 'order', is_admin() ? 'DESC' : 'ASC' );
  }
}
// add_action( 'pre_get_posts', 'tf_pre_get_posts' );


//


function tf_edit_public_session_columns( $columns ) {
  $columns = array(
    'cb' => '<input type="checkbox">',
    'title' => 'Title',
    'location' => 'Location',
    'date' => 'Date',
  );

  return $columns;
}
// add_filter( 'manage_edit-public_session_columns', 'tf_edit_public_session_columns' );

function tf_manage_public_session_columns( $column, $post_id ) {
  global $post;

  switch( $column ) {
    case 'location' :
      $location = get_field( 'location', $post_id );

      if ( empty( $location ) ) {
        echo '';
      } else {
        echo $location;
      }

      break;
    default :
      break;
  }
}
// add_action( 'manage_public_session_posts_custom_column', 'tf_manage_public_session_columns', 10, 2 );
