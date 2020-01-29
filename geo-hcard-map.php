<?php
/*
Plugin Name: Geo hCard Map
Plugin URI: https://wordpress.org/plugins/geo-hcard-map
Description: Creates a map from the hCard markup (.vcard) in the current webpage at shortcode [geo_hcard_map]
Version: 1.0
Author: Annesley Newholm
License: GPL2
Text Domain: geo-hcard-map
*/

// No script kiddies
if ( ! defined( 'ABSPATH' ) ) exit; 

// Needs CB2
if ( ! defined( 'CB2_VERSION' ) ) exit ( "This version of Geo hCard Map needs CommonsBooking 2 installed."); 

define( 'GEO_HCARD_MAP', 'geo-hcard-map' );
define( 'GEO_HCARD_MAP_TITLE', 'GEO hCard Map' );
define( 'GEO_HCARD_MAP_VERSION', '1.1' );

/* -------------------------------------------- Infrastructure -------------------------------------------- */
function geo_hcard_map_load_scripts() {
  // TODO: conditional inclusion
  $options = array (
    'geo_hcard_map_type' => CB2_Settings::get( 'maps_provider' ) 
  );
  wp_register_script( GEO_HCARD_MAP . '-plugin-options', plugins_url( 'js/options.js',  __FILE__ ) );
  wp_localize_script( GEO_HCARD_MAP . '-plugin-options', 'geo_hcard_map_settings', $options);
  wp_enqueue_script(  GEO_HCARD_MAP . '-plugin-options');
  
  wp_enqueue_script( GEO_HCARD_MAP . '-leaflet', plugins_url( 'leaflet/leaflet.js', __FILE__ ),  array( 'jquery' ), GEO_HCARD_MAP_VERSION );
  wp_enqueue_script( GEO_HCARD_MAP,              plugins_url( 'js/map.js',  __FILE__ ),          array( GEO_HCARD_MAP . '-leaflet', GEO_HCARD_MAP . '-plugin-options' ), GEO_HCARD_MAP_VERSION );
}
add_action( 'wp_enqueue_scripts', 'geo_hcard_map_load_scripts' );

function geo_hcard_map_load_styles() {
  // TODO: conditional inclusion
  wp_enqueue_style(  'leaflet',                 plugins_url( 'leaflet/leaflet.css', __FILE__ ), array(), GEO_HCARD_MAP_VERSION );
  wp_enqueue_style(  GEO_HCARD_MAP . '-styles', plugins_url( 'css/style.css', __FILE__ ), array(), GEO_HCARD_MAP_VERSION );
}
add_action( 'wp_enqueue_scripts',  'geo_hcard_map_load_styles' );

function geo_hcard_map_plugins_loaded(){
  add_shortcode( str_replace( '-', '_', GEO_HCARD_MAP ), 'geo_hcard_map_shortcode_handler');
}
add_action( 'plugins_loaded', 'geo_hcard_map_plugins_loaded' , 20 );

function geo_hcard_map_shortcode_handler( $tag, $content = NULL ) {
  return '<div id="' . GEO_HCARD_MAP . '">&nbsp;</div>';
}
