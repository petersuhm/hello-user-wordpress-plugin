<?php

/**
 * Plugin Name: Hello User
 * Author: WP Pusher
 * Version: 1.0.18
 */

add_filter( "wp_loaded", "checkForGreeting" );

function checkForGreeting()
{
    if (isset($_GET['hello'])) {

        echo "Hello " . $_GET['hello'] . "!";
        die();

    }
}
