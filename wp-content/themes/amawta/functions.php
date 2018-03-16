<?php
  add_action( 'rest_api_init', 'create_api_posts_meta_field' );
  
  function create_api_posts_meta_field() {
    // Add rating info (it's inside post meta fields)
    register_rest_field( 'post', 'post_meta_fields', array(
      'get_callback' => 'rest_get_post_meta',
      'schema' => null,
    ));

    // Add author name
    register_rest_field( 'post', 'author_name', array(
      'get_callback'		=> 'rest_get_author_name',
      'update_callback'	=> null,
      'schema'			=> null
    ));
  }
  
  function rest_get_post_meta( $object ) {
    $post_id = $object['id'];
    
    return get_post_meta( $post_id );
  }

  function rest_get_author_name( $object, $field_name, $request ) {
    return get_the_author_meta( 'display_name' );
  }
?>