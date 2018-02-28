<?php
/*
Plugin Name: Nonce Endpoint
*/

add_action('rest_api_init', function () {
  $user = get_current_user_id();
  register_rest_route('nonce/v1', 'get', [
    'methods' => 'GET',
    'callback' => function () use ($user) {
      return [
        'nonce' => wp_create_nonce('wp_rest'),
        'user' => $user,
      ];
    },
  ]);

  register_rest_route('nonce/v1', 'verify', [
    'methods' => 'GET',
    'callback' => function () use ($user) {
      $nonce = !empty($_GET['nonce']) ? $_GET['nonce'] : false;
      return [
        'valid' => (bool) wp_verify_nonce($nonce, 'wp_rest'),
        'user' => $user,
      ];
    },
  ]);
});