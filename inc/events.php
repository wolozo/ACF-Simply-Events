<?php

if ( ! function_exists( 'w_se_event_fields' ) ) {
  function w_se_event_fields() {
    if ( function_exists( 'acf_add_local_field_group' ) ):

      acf_add_local_field_group( array(
                                   'key'                   => 'group_586aa212e8f61',
                                   'title'                 => 'Event Details',
                                   'fields'                => array(
                                     array(
                                       'placement'         => 'top',
                                       'endpoint'          => 0,
                                       'key'               => 'field_586c29933e8dd',
                                       'label'             => 'General',
                                       'name'              => '',
                                       'type'              => 'tab',
                                       'instructions'      => '',
                                       'required'          => 0,
                                       'conditional_logic' => 0,
                                       'wrapper'           => array(
                                         'width' => '',
                                         'class' => '',
                                         'id'    => '',
                                       ),
                                     ),
                                     array(
                                       'display_format'    => 'm/d/Y g:i a',
                                       'return_format'     => 'F j, Y g:i a',
                                       'first_day'         => 0,
                                       'key'               => 'field_586aabb0b0ade',
                                       'label'             => 'Start',
                                       'name'              => 'w_se_start',
                                       'type'              => 'date_time_picker',
                                       'instructions'      => '',
                                       'required'          => 1,
                                       'conditional_logic' => 0,
                                       'wrapper'           => array(
                                         'width' => '50',
                                         'class' => '',
                                         'id'    => '',
                                       ),
                                     ),
                                     array(
                                       'display_format'    => 'm/d/Y g:i a',
                                       'return_format'     => 'F j, Y g:i a',
                                       'first_day'         => 0,
                                       'key'               => 'field_586aabf0b0adf',
                                       'label'             => 'End',
                                       'name'              => 'w_se_end',
                                       'type'              => 'date_time_picker',
                                       'instructions'      => '',
                                       'required'          => 0,
                                       'conditional_logic' => 0,
                                       'wrapper'           => array(
                                         'width' => '50',
                                         'class' => '',
                                         'id'    => '',
                                       ),
                                     ),
                                     array(
                                       'post_type'         => array(
                                         0 => 'w_se_locations',
                                       ),
                                       'taxonomy'          => array(),
                                       'allow_null'        => 0,
                                       'multiple'          => 0,
                                       'return_format'     => 'object',
                                       'ui'                => 1,
                                       'key'               => 'field_586aad55baec5',
                                       'label'             => 'Location',
                                       'name'              => 'w_se_location',
                                       'type'              => 'post_object',
                                       'instructions'      => '',
                                       'required'          => 0,
                                       'conditional_logic' => 0,
                                       'wrapper'           => array(
                                         'width' => '100',
                                         'class' => '',
                                         'id'    => '',
                                       ),
                                     ),
                                     array(
                                       'placement'         => 'top',
                                       'endpoint'          => 0,
                                       'key'               => 'field_586c299d3e8de',
                                       'label'             => 'Details',
                                       'name'              => '',
                                       'type'              => 'tab',
                                       'instructions'      => '',
                                       'required'          => 0,
                                       'conditional_logic' => 0,
                                       'wrapper'           => array(
                                         'width' => '',
                                         'class' => '',
                                         'id'    => '',
                                       ),
                                     ),
                                     array(
                                       'tabs'              => 'all',
                                       'toolbar'           => 'full',
                                       'media_upload'      => 1,
                                       'default_value'     => '',
                                       'delay'             => 0,
                                       'key'               => 'field_586c29873e8dc',
                                       'label'             => 'Details',
                                       'name'              => 'w_se_details',
                                       'type'              => 'wysiwyg',
                                       'instructions'      => '',
                                       'required'          => 0,
                                       'conditional_logic' => 0,
                                       'wrapper'           => array(
                                         'width' => '',
                                         'class' => '',
                                         'id'    => '',
                                       ),
                                     ),
                                   ),
                                   'location'              => array(
                                     array(
                                       array(
                                         'param'    => 'post_type',
                                         'operator' => '==',
                                         'value'    => 'w_se_events',
                                       ),
                                     ),
                                   ),
                                   'menu_order'            => 0,
                                   'position'              => 'acf_after_title',
                                   'style'                 => 'default',
                                   'label_placement'       => 'top',
                                   'instruction_placement' => 'label',
                                   'hide_on_screen'        => array(
                                     0 => 'the_content',
                                   ),
                                   'active'                => 1,
                                   'description'           => '',
                                 ) );

    endif;
  }
}

add_action( 'acf/init', 'w_se_event_fields' );

if ( ! function_exists( 'w_se_events' ) ) {

// Register Custom Post Type
  function w_se_events() {

    $labels  = array(
      'name'                  => _x( 'Simply Events', 'Post Type General Name', 'acf_simply_events' ),
      'singular_name'         => _x( 'Event', 'Post Type Singular Name', 'acf_simply_events' ),
      'menu_name'             => __( 'Simply Events', 'acf_simply_events' ),
      'name_admin_bar'        => __( 'Events', 'acf_simply_events' ),
      'archives'              => __( 'Event Archives', 'acf_simply_events' ),
      'attributes'            => __( 'Event Attributes', 'acf_simply_events' ),
      'parent_item_colon'     => __( 'Parent Event:', 'acf_simply_events' ),
      'all_items'             => __( 'All Events', 'acf_simply_events' ),
      'add_new_item'          => __( 'Add New Event', 'acf_simply_events' ),
      'add_new'               => __( 'Add Event', 'acf_simply_events' ),
      'new_item'              => __( 'New Event', 'acf_simply_events' ),
      'edit_item'             => __( 'Edit Event', 'acf_simply_events' ),
      'update_item'           => __( 'Update Event', 'acf_simply_events' ),
      'view_item'             => __( 'View Event', 'acf_simply_events' ),
      'view_items'            => __( 'View Events', 'acf_simply_events' ),
      'search_items'          => __( 'Search Event', 'acf_simply_events' ),
      'not_found'             => __( 'Event Not found', 'acf_simply_events' ),
      'not_found_in_trash'    => __( 'Not found in Trash', 'acf_simply_events' ),
      'featured_image'        => __( 'Featured Image', 'acf_simply_events' ),
      'set_featured_image'    => __( 'Set featured image', 'acf_simply_events' ),
      'remove_featured_image' => __( 'Remove featured image', 'acf_simply_events' ),
      'use_featured_image'    => __( 'Use as featured image', 'acf_simply_events' ),
      'insert_into_item'      => __( 'Insert into item', 'acf_simply_events' ),
      'uploaded_to_this_item' => __( 'Uploaded to this item', 'acf_simply_events' ),
      'items_list'            => __( 'Items list', 'acf_simply_events' ),
      'items_list_navigation' => __( 'Items list navigation', 'acf_simply_events' ),
      'filter_items_list'     => __( 'Filter items list', 'acf_simply_events' ),
    );
    $rewrite = array(
      'slug'       => 'events',
      'with_front' => true,
      'pages'      => true,
      'feeds'      => true,
    );
    $args    = array(
      'description'         => __( 'Simply Events', 'acf_simply_events' ),
      'labels'              => $labels,
      'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail', ),
      'taxonomies'          => array( 'w_se_locations' ),
      'hierarchical'        => false,
      'public'              => true,
      'show_ui'             => true,
      //      'show_in_menu'        => 'simply-events',
      'show_in_menu'        => true,
      'menu_position'       => 5,
      'menu_icon'           => 'dashicons-calendar-alt',
      'show_in_admin_bar'   => true,
      'show_in_nav_menus'   => true,
      'can_export'          => true,
      'has_archive'         => true,
      'exclude_from_search' => true,
      'publicly_queryable'  => true,
      'rewrite'             => $rewrite,
      'capability_type'     => 'post',
    );
    register_post_type( 'w_se_events', $args );
  }

  add_action( 'init', 'w_se_events' );
}

function w_se_event_content( $content ) {
  global $post;

  if ( $post->post_type != 'w_se_events' ) : return $content; endif;

  $id          = get_the_ID();
  $allowedHTML = wp_kses_allowed_html( 'post' );
  $headingEL   = get_field( 'w_se_heading_element', 'option' );

  //
  // Start
  if ( $start = get_field( 'w_se_start', $id ) ) {
    $heading = get_field( 'w_se_datetime_start_label', 'option' ) ?: __( 'Start', 'acf_simply_events' );
    $heading = wp_kses( $heading, $allowedHTML );

    $start = <<<HTML
<div class="w_se-section-sub w_se-section-sub--start">
  <span class="w_se-heading w_se-heading--start">$heading</span>
  <span class="w_se-start"> $start </span>
</div>
HTML;
  }

  //
  // End
  if ( $end = get_field( 'w_se_end', $id ) ) {
    $heading = get_field( 'w_se_datetime_end_label', 'option' ) ?: __( 'End', 'acf_simply_events' );
    $heading = wp_kses( $heading, $allowedHTML );

    $end = <<<HTML
<div class="w_se-section-sub w_se-section-sub--end">
  <span class="w_se-heading w_se-heading--end">$heading</span>
  <span class="w_se-end"> $end </span>
</div>
HTML;
  }

  //
  // Date/Time
  if ( $end || $start ) {
    $heading = get_field( 'w_se_datetime_label', 'option' ) ?: __( 'Date/Time', 'acf_simply_events' );
    $heading = wp_kses( $heading, $allowedHTML );

    $datetime = <<<HTML
<div class="w_se-section w_se-section--datetime">
  <$headingEL class="w_se-heading w_se-heading--datetime">$heading</$headingEL>
  <span class="w_se-datetime"> $start $end </span>
</div>
HTML;
  }

  //
  // Details

  if ( $details = get_field( 'w_se_details', $id ) ) {

    $heading = get_field( 'w_se_event_details_label', 'option' ) ?: __( 'Details', 'acf_simply_events' );
    $heading = wp_kses( $heading, $allowedHTML );
    $heading = "<$headingEL class='w_se-heading w_se-heading--start'>$heading</$headingEL>";
    $details = <<<HTML
    
<div class="w_se-section w_se-section--details">
  $heading
  <span class="w_se-details"> $details </span>
</div>
HTML;
  }

  //
  // Location
  $locationID = get_field( 'w_se_location', $id )->ID;
  $location   = w_se_get_location( $locationID, $headingEL, $allowedHTML, true );

  //
  // Content
  $content = <<<HTML
<div class="w_se-outer w_se-outer--location">  
  <div class="w_se-inner w_se-inner--location">
    <div class="w_se-details w_se-details--location">
    $datetime
    $details
    $location
    </div>
  </div>  
</div>
HTML;

  return $content;
}

add_filter( 'the_content', 'w_se_event_content' );
