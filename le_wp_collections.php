<?php

/*
Plugin Name: le_wp_collections
Plugin URI: http://github.com/larsemil/le_wp_collections
Description: Adds laravels collections to Wordpress
Version: 1.0
Author: larsemil
Author URI: http://larsemil.se
License: MIT
*/

require_once('vendor/autoload.php');

add_action('after_setup_theme', function(){

    // The filters that we will have returning a collection instead of an array.
    // Preferably set in themes functions.php
    $filters = new \Illuminate\Support\Collection(
        apply_filters('le_collections_filters', [])
    );

    $filters->each(function($filter){
        add_filter($filter, function($array){
            return new \Illuminate\Support\Collection($array);
        });
    });

});
