<?php

function w_se_options() {
  if ( function_exists( 'acf_add_options_page' ) ) {

    acf_add_options_page( array(
                            'page_title'  => 'ACF Simply Events',
                            'menu_title'  => 'Simply Events Options',
                            'parent_slug' => 'edit.php?post_type=w_se_events',
                          ) );
  }
}

add_action( 'init', 'w_se_options' );

if ( ! function_exists( 'w_se_options_fields' ) ) {
  function w_se_options_fields() {
    if ( function_exists( 'acf_add_local_field_group' ) ):

      acf_add_local_field_group( array(
                                   'key'                   => 'group_586aa8aeaa673',
                                   'title'                 => 'Simply Events Options',
                                   'fields'                => array(
                                     array(
                                       'placement'         => 'top',
                                       'endpoint'          => 0,
                                       'key'               => 'field_586aa8f7bdaa7',
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
                                       'default_value'     => '',
                                       'maxlength'         => '',
                                       'placeholder'       => '',
                                       'prepend'           => '',
                                       'append'            => '',
                                       'key'               => 'field_586aa8b7f9e35',
                                       'label'             => 'Google Maps API Key',
                                       'name'              => 'w_se_google_maps_key',
                                       'type'              => 'text',
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
                                       'placement'         => 'top',
                                       'endpoint'          => 0,
                                       'key'               => 'field_586ac2005f312',
                                       'label'             => 'Display',
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
                                       'multiple'          => 0,
                                       'allow_null'        => 0,
                                       'choices'           => array(
                                         'h1'   => 'h1',
                                         'h2'   => 'h2',
                                         'h3'   => 'h3',
                                         'h4'   => 'h4',
                                         'h5'   => 'h5',
                                         'h6'   => 'h6',
                                         'div'  => 'div',
                                         'p'    => 'p',
                                         'span' => 'span',
                                       ),
                                       'default_value'     => array(
                                         0 => 'h3',
                                       ),
                                       'ui'                => 0,
                                       'ajax'              => 0,
                                       'placeholder'       => '',
                                       'return_format'     => 'value',
                                       'key'               => 'field_586ac20e5f313',
                                       'label'             => 'Heading Elements',
                                       'name'              => 'w_se_heading_element',
                                       'type'              => 'select',
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
                                       'placement'         => 'top',
                                       'endpoint'          => 0,
                                       'key'               => 'field_586c11ab5d184',
                                       'label'             => 'Labels',
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
                                       'default_value'     => 'Date/Time',
                                       'maxlength'         => '',
                                       'placeholder'       => 'Date/Time',
                                       'prepend'           => '',
                                       'append'            => '',
                                       'key'               => 'field_586ac361a7119',
                                       'label'             => 'Date/Time',
                                       'name'              => 'w_se_datetime_label',
                                       'type'              => 'text',
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
                                       'default_value'     => 'Start',
                                       'maxlength'         => '',
                                       'placeholder'       => 'Start',
                                       'prepend'           => '',
                                       'append'            => '',
                                       'key'               => 'field_586c2c9500ebc',
                                       'label'             => 'Start Date/Time',
                                       'name'              => 'w_se_datetime_start_label',
                                       'type'              => 'text',
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
                                       'default_value'     => 'End',
                                       'maxlength'         => '',
                                       'placeholder'       => 'End',
                                       'prepend'           => '',
                                       'append'            => '',
                                       'key'               => 'field_586c2cf500ebd',
                                       'label'             => 'End Date/Time',
                                       'name'              => 'w_se_datetime_end_label',
                                       'type'              => 'text',
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
                                       'default_value'     => 'Details',
                                       'maxlength'         => '',
                                       'placeholder'       => 'Details',
                                       'prepend'           => '',
                                       'append'            => '',
                                       'key'               => 'field_586c3a7dda75d',
                                       'label'             => 'Event Details',
                                       'name'              => 'w_se_event_details_label',
                                       'type'              => 'text',
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
                                       'default_value'     => 'Location',
                                       'maxlength'         => '',
                                       'placeholder'       => 'Location',
                                       'prepend'           => '',
                                       'append'            => '',
                                       'key'               => 'field_586ac37aa711a',
                                       'label'             => 'Map Location',
                                       'name'              => 'w_se_location_label',
                                       'type'              => 'text',
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
                                       'default_value'     => 'Address',
                                       'maxlength'         => '',
                                       'placeholder'       => 'Address',
                                       'prepend'           => '',
                                       'append'            => '',
                                       'key'               => 'field_586c11315d182',
                                       'label'             => 'Location Address',
                                       'name'              => 'w_se_address_label',
                                       'type'              => 'text',
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
                                       'default_value'     => 'Contact Information',
                                       'maxlength'         => '',
                                       'placeholder'       => 'Contact Information',
                                       'prepend'           => '',
                                       'append'            => '',
                                       'key'               => 'field_586c1eb29f802',
                                       'label'             => 'Contact Information',
                                       'name'              => 'w_se_contact_information_label',
                                       'type'              => 'text',
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
                                       'default_value'     => 'Details',
                                       'maxlength'         => '',
                                       'placeholder'       => 'Details',
                                       'prepend'           => '',
                                       'append'            => '',
                                       'key'               => 'field_586c1eeb9f803',
                                       'label'             => 'Location Details',
                                       'name'              => 'w_se_location_details_label',
                                       'type'              => 'text',
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
                                       'default_value'     => 'Directions',
                                       'maxlength'         => '',
                                       'placeholder'       => 'Directions',
                                       'prepend'           => '',
                                       'append'            => '',
                                       'key'               => 'field_586c1f459f804',
                                       'label'             => 'Location Directions',
                                       'name'              => 'w_se_location_directions_label',
                                       'type'              => 'text',
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
                                       'default_value'     => 'Images',
                                       'maxlength'         => '',
                                       'placeholder'       => 'Images',
                                       'prepend'           => '',
                                       'append'            => '',
                                       'key'               => 'field_586c114a5d183',
                                       'label'             => 'Location Images',
                                       'name'              => 'w_se_images_label',
                                       'type'              => 'text',
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
                                         'param'    => 'options_page',
                                         'operator' => '==',
                                         'value'    => 'acf-options-simply-events-options',
                                       ),
                                     ),
                                   ),
                                   'menu_order'            => 0,
                                   'position'              => 'normal',
                                   'style'                 => 'default',
                                   'label_placement'       => 'top',
                                   'instruction_placement' => 'label',
                                   'hide_on_screen'        => '',
                                   'active'                => 1,
                                   'description'           => '',
                                 ) );

    endif;
  }
}

add_action( 'acf/init', 'w_se_options_fields' );

add_filter( 'acf/settings/google_api_key',
  function () {
    return get_field( 'w_se_google_maps_key', 'option' );
  } );