<?php 

function wporg_callback() {
    // do something
}
add_action( 'init', 'wporg_callback' );



add_action('init', 'wporg_callback_run_me_late', 11);
add_action('init', 'wporg_callback_run_me_normal');
add_action('init', 'wporg_callback_run_me_early', 9);
add_action('init', 'wporg_callback_run_me_later', 11);

// When your callback function is ready, use add_action() to hook it to the action you have selected. 
// At a minimum, add_action() requires two parameters:

// string $hook_name which is the name of the action you’re hooking to, and
// callable $callback the name of your callback function.
?>