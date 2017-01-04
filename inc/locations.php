<?php

if ( ! function_exists( 'w_se_location_fields' ) ) {
  function w_se_location_fields() {
    if ( function_exists( 'acf_add_local_field_group' ) ):

      acf_add_local_field_group( array(
                                   'key'                   => 'group_586aa41915725',
                                   'title'                 => 'Location Details',
                                   'fields'                => array(
                                     array(
                                       'placement'         => 'left',
                                       'endpoint'          => 0,
                                       'key'               => 'field_586c179001bc7',
                                       'label'             => 'Location Address',
                                       'name'              => '',
                                       'type'              => 'tab',
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
                                       'tabs'              => 'all',
                                       'toolbar'           => 'basic',
                                       'media_upload'      => 0,
                                       'default_value'     => '',
                                       'delay'             => 0,
                                       'key'               => 'field_586c15d38144e',
                                       'label'             => 'Address',
                                       'name'              => 'w_se_address',
                                       'type'              => 'wysiwyg',
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
                                       'key'               => 'field_586c179c01bc8',
                                       'label'             => 'Map Location',
                                       'name'              => '',
                                       'type'              => 'tab',
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
                                       'height'            => '',
                                       'center_lat'        => '42.877742',
                                       'center_lng'        => '-97.380979',
                                       'zoom'              => 3,
                                       'key'               => 'field_586aa45306c7d',
                                       'label'             => 'Map Location',
                                       'name'              => 'w_se_location',
                                       'type'              => 'google_map',
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
                                       'key'               => 'field_586c17a101bc9',
                                       'label'             => 'Contact Information',
                                       'name'              => '',
                                       'type'              => 'tab',
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
                                       'tabs'              => 'all',
                                       'toolbar'           => 'basic',
                                       'media_upload'      => 0,
                                       'default_value'     => '',
                                       'delay'             => 0,
                                       'key'               => 'field_586c16aa74562',
                                       'label'             => 'Contact Information',
                                       'name'              => 'w_se_contact',
                                       'type'              => 'wysiwyg',
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
                                       'key'               => 'field_586c17a801bca',
                                       'label'             => 'Details',
                                       'name'              => '',
                                       'type'              => 'tab',
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
                                       'tabs'              => 'all',
                                       'toolbar'           => 'full',
                                       'media_upload'      => 1,
                                       'default_value'     => '',
                                       'delay'             => 0,
                                       'key'               => 'field_586c0e801b454',
                                       'label'             => 'Details',
                                       'name'              => 'w_se_location_details',
                                       'type'              => 'wysiwyg',
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
                                       'key'               => 'field_586c17ad01bcb',
                                       'label'             => 'Images',
                                       'name'              => '',
                                       'type'              => 'tab',
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
                                       'library'           => 'all',
                                       'min'               => '',
                                       'max'               => '',
                                       'min_width'         => '',
                                       'min_height'        => '',
                                       'min_size'          => '',
                                       'max_width'         => '',
                                       'max_height'        => '',
                                       'max_size'          => '',
                                       'mime_types'        => '',
                                       'insert'            => 'append',
                                       'key'               => 'field_586bfc25c3921',
                                       'label'             => 'Images',
                                       'name'              => 'w_se_location_images',
                                       'type'              => 'gallery',
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
                                       'key'               => 'field_586c17b601bcd',
                                       'label'             => 'Directions',
                                       'name'              => '',
                                       'type'              => 'tab',
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
                                       'tabs'              => 'all',
                                       'toolbar'           => 'full',
                                       'media_upload'      => 1,
                                       'default_value'     => '',
                                       'delay'             => 0,
                                       'key'               => 'field_586bfc0ec3920',
                                       'label'             => 'Directions',
                                       'name'              => 'w_se_location_directions',
                                       'type'              => 'wysiwyg',
                                       'instructions'      => '',
                                       'required'          => 0,
                                       'conditional_logic' => 0,
                                       'wrapper'           => array(
                                         'width' => '100',
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
                                         'value'    => 'w_se_locations',
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
add_action( 'acf/init', 'w_se_location_fields' );

if ( ! function_exists( 'w_se_locations' ) ) {

// Register Custom Post Type
  function w_se_locations() {

    $labels  = array(
      'name'                  => _x( 'Event Locations', 'Post Type General Name', 'acf_simply_events' ),
      'singular_name'         => _x( 'Event Location', 'Post Type Singular Name', 'acf_simply_events' ),
      'menu_name'             => __( 'Event Locations', 'acf_simply_events' ),
      'name_admin_bar'        => __( 'Event Locations', 'acf_simply_events' ),
      'archives'              => __( 'Event Location Archives', 'acf_simply_events' ),
      'attributes'            => __( 'Event Location Attributes', 'acf_simply_events' ),
      'parent_item_colon'     => __( 'Parent Event Location:', 'acf_simply_events' ),
      'all_items'             => __( 'All Locations', 'acf_simply_events' ),
      'add_new_item'          => __( 'Add New Event Location', 'acf_simply_events' ),
      'add_new'               => __( 'Add Event Location', 'acf_simply_events' ),
      'new_item'              => __( 'New Event Location', 'acf_simply_events' ),
      'edit_item'             => __( 'Edit Event Location', 'acf_simply_events' ),
      'update_item'           => __( 'Update Event Location', 'acf_simply_events' ),
      'view_item'             => __( 'View Event Location', 'acf_simply_events' ),
      'view_items'            => __( 'View Event Location', 'acf_simply_events' ),
      'search_items'          => __( 'Search Event Location', 'acf_simply_events' ),
      'not_found'             => __( 'Event Location Not found', 'acf_simply_events' ),
      'not_found_in_trash'    => __( 'Not found in Trash', 'acf_simply_events' ),
      'featured_image'        => __( 'Featured Image', 'acf_simply_events' ),
      'set_featured_image'    => __( 'Set featured image', 'acf_simply_events' ),
      'remove_featured_image' => __( 'Remove featured image', 'acf_simply_events' ),
      'use_featured_image'    => __( 'Use as featured image', 'acf_simply_events' ),
      'insert_into_item'      => __( 'Insert into item', 'acf_simply_events' ),
      'uploaded_to_this_item' => __( 'Uploaded to this Location', 'acf_simply_events' ),
      'items_list'            => __( 'Locations list', 'acf_simply_events' ),
      'items_list_navigation' => __( 'Locations list navigation', 'acf_simply_events' ),
      'filter_items_list'     => __( 'Filter Locations list', 'acf_simply_events' ),
    );
    $rewrite = array(
      'slug'       => 'event-location',
      'with_front' => true,
      'pages'      => true,
      'feeds'      => true,
    );
    $args    = array(
      'description'  => __( 'Simply Events Locations', 'acf_simply_events' ),
      'labels'       => $labels,
      'supports'     => array( 'title', 'editor', 'excerpt', 'thumbnail', ),
      'hierarchical' => false,
      'public'       => true,
      'show_ui'      => true,

      'show_in_menu'        => 'edit.php?post_type=w_se_events',
      'show_in_nav_menus'   => true,
      'can_export'          => true,
      'has_archive'         => true,
      'exclude_from_search' => true,
      'publicly_queryable'  => true,
      'rewrite'             => $rewrite,
      'capability_type'     => 'post',
    );
    register_post_type( 'w_se_locations', $args );
  }

  add_action( 'init', 'w_se_locations' );
}

// Add 'Add Location' to admin menu within 'Simply Events'
function w_se_admin_menu() {
  global $submenu;

  $submenu[ 'edit.php?post_type=w_se_events' ][] =
    array( __( 'Add Location', 'acf_simply_events' ), 'edit_posts', 'post-new.php?post_type=w_se_locations' );
}

add_action( 'admin_menu', 'w_se_admin_menu' );

// Filter content
function w_se_locations_content( $content ) {
  global $post;

  if ( $post->post_type === 'w_se_locations' ) {

    $id          = get_the_ID();
    $allowedHTML = wp_kses_allowed_html( 'post' );
    $headingEL   = get_field( 'w_se_heading_element', 'option' );

    //
    // Address
    $address = w_se_get_location_address( $id, $headingEL, $allowedHTML );

    //
    // Contact
    if ( $contact = get_field( 'w_se_contact', $id ) ) {

      $heading = get_field( 'w_se_contact_information_label', 'option' ) ?: __( 'Contact Information', 'acf_simply_events' );
      $heading = wp_kses( $heading, $allowedHTML );

      $contact = <<<HTML
<div class="w_se-section w_se-section--contact">
  <$headingEL class="w_se-heading w_se-heading--contact">$heading</$headingEL>
  <div class="w_se-content w_se-content--contact">$contact</div>
</div>
HTML;
    }

    //
    // Details
    if ( $details = get_field( 'w_se_location_details', $id ) ) {

      $heading = get_field( 'w_se_location_details_label', 'option' ) ?: __( 'Details', 'acf_simply_events' );
      $heading = wp_kses( $heading, $allowedHTML );

      $details = <<<HTML
<div class="w_se-section w_se-section--details">
  <$headingEL class="w_se-heading w_se-heading--details">$heading</$headingEL>
  <div class="w_se-content w_se-content--details">$details</div>
</div>
HTML;
    }

    //
    // Directions
    if ( $directions = get_field( 'w_se_location_directions', $id ) ) {

      $heading = get_field( 'w_se_location_directions_label', 'option' ) ?: __( 'Directions', 'acf_simply_events' );
      $heading = wp_kses( $heading, $allowedHTML );

      $directions = <<<HTML
<div class="w_se-section w_se-section--directions">
  <$headingEL class="w_se-heading w_se-heading--directions">$heading</$headingEL>
  <div class="w_se-content w_se-content--directions">$directions</div>
</div>
HTML;
    }

    //
    // Images
    if ( $images = get_field( 'w_se_location_images', $id ) ) {

      $heading = get_field( 'w_se_images_label', 'option' ) ?: __( 'Images', 'acf_simply_events' );
      $heading = wp_kses( $heading, $allowedHTML );

      $out = null;

      foreach ( $images as $image ) {
        $url      = $image[ 'url' ];
        $thumbURL = $image[ 'sizes' ][ 'thumbnail' ];
        $thumbAlt = $image[ 'sizes' ][ 'thumbnail' ];
        $out .= "<li class='w_se-images-item'>";
        $out .= "<a href='$url' class='w_se-images-item-link'>";
        $out .= "<img src='$thumbURL' alt='$thumbAlt' class='w_se-images-item-image'>";
        $out .= '</a>';
        $out .= '</li>';
      }

      $out = "<ul class='w_se-images'>$out</ul>";

      $images = <<<HTML
<div class="w_se-section w_se-section--images">
  <$headingEL class="w_se-heading w_se-heading--images">$heading</$headingEL>
  <div class="w_se-content w_se-content--images">$out</div>
</div>
HTML;
    }

    //
    // Location
    $location = w_se_get_location( $id, $headingEL, $allowedHTML );

    $content = <<<HTML
<div class="w_se-outer w_se-outer--location">  
  <div class="w_se-inner w_se-inner--location">
    <div class="w_se-details w_se-details--location">
    $address
    $contact
    $details
    $directions
    $images
    </div>
    $location      
  </div>  
</div>
HTML;
  }

  return $content;
}

add_filter( 'the_content', 'w_se_locations_content' );

function w_se_get_location( $id, $headingEL, $allowedHTML, $address = false ) {
  if ( $location = get_field( 'w_se_location', $id ) ) {

    $heading = get_field( 'w_se_location_label', 'option' ) ?: __( 'Location', 'acf_simply_events' );
    $heading = wp_kses( $heading, $allowedHTML );

    $locationLat = $location[ 'lat' ];
    $locationLng = $location[ 'lng' ];

    $address = ( $address ) ? w_se_get_location_address( $id, $headingEL, $allowedHTML, $address ) : null;

    return <<<HTML
<div class="w_se-map-outer w_se-section">    
  <$headingEL class="w_se-heading w_se-heading--location">$heading</$headingEL>
  <div class="w_se-map-content">  
  $address
    <div class="w_se-map acf-map ">
      <div class="marker" data-lat="$locationLat" data-lng="$locationLng"></div>
    </div>
  </div>
</div>
HTML;
  }
}

function w_se_get_location_address( $id, $headingEL, $allowedHTML, $subsection = false ) {
  if ( $address = get_field( 'w_se_address', $id ) ) {

    $heading = get_field( 'w_se_address_label', 'option' ) ?: __( 'Address', 'acf_simply_events' );
    $heading = wp_kses( $heading, $allowedHTML );
    $heading = ( $subsection ) //
      ? "<span class='w_se-heading w_se-heading--address'>$heading</span>"
      : "<$headingEL class='w_se-heading w_se-heading--address'>$heading</$headingEL>";

    return <<<HTML
<div class="w_se-section w_se-section--address">
  $heading
  <div class="w_se-content w_se-content--address">$address</div>
</div>
HTML;
  }
}