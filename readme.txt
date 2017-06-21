=== Geo hCard Map ===
Contributors: anewholm
Tags: map, location, OSM, leaflet, hCard, vCard
Requires at least: 4.0
Tested up to: 4.7.2
Stable tag: 1.0
License: GPLv2
License URI: https://www.gnu.org/licenses/gpl-2.0.html

[geo_hcard_map] map of hCard points found in the current webpage

== Description ==
[geo_hcard_map] map of hCard points found in the current webpage.
All .cb-popup sub-elements will be included in the map popup for the corresponding .vcard item.

== Companion plugins ==
CMB2-field-Leaflet-Geocoder (https://github.com/villeristi/CMB2-field-Leaflet-Geocoder)
CMB2-field-Icon (https://github.com/anewholm/CMB2-field-Icon)

== Example hCard Markup for a post ==
* http://microformats.org/wiki/hcard and http://microformats.org/wiki/geo
  <div class="vcard">
    <h2><a class="url fn org" href="http://example.com/locations/magnet-bank/">Magnet Bank</a></h2>
    <div class="cb-popup">Balacs utca, 1000 Budapest, Hungary</div>
    <div class="cb-popup">Mon-Fri, 8:00 - 18:00</div>
    <div class="adr">
      <div class="geo">
        <span class="latitude">47.50496815665008</span>,
        <span class="longitude">19.063553810119632</span>
        <span class="icon">/wp-content/plugins/commons-booking/public/assets/images/gray-green.png</span>
        <span class="icon-shadow"></span>
      </div>
    </div>
  </div>

== Installation ==

1. Download and install the Plugin
2. Upload the plugin folder to the '/wp-content/plugins/' directory
3. Activate the plugin through the 'Plugins' menu in WordPress
4. Include the appropriate hcard markup in your template output (WordPress plugins can help you)
5. You will now have [geo_hcard_map] shortcode

== Screenshots ==

In /assets/

1. Example

== Changelog ==

= 1.0 =
* Birth.
