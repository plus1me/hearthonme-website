<?php
/**
 * WordPress function mocks for local preview.
 * This file is NOT uploaded to the server — local preview only.
 */

define('THEME_DIR', __DIR__);
define('THEME_URI', '');   // relative paths work fine locally

function get_template_directory_uri() {
    return '';  // images are in the same folder
}

function get_stylesheet_uri() {
    return 'css/webflow-style.css';
}

function wp_head() {
    echo '<link rel="stylesheet" href="css/webflow-style.css">';
    echo '<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@500;600;700&display=swap" rel="stylesheet">';
}

function wp_footer() {
    // nothing needed locally
}

function get_header() {
    include THEME_DIR . '/header.php';
}

function get_footer() {
    include THEME_DIR . '/footer.php';
}

function esc_url($url)   { return htmlspecialchars($url); }
function esc_html($str)  { return htmlspecialchars($str); }
function esc_attr($str)  { return htmlspecialchars($str); }
function __($str, $domain = '') { return $str; }
function _e($str, $domain = '') { echo $str; }
function printf($format, ...$args) { echo vsprintf($format, $args); }
function apply_filters($tag, $value) { return $value; }
function is_singular() { return false; }
function comments_open() { return false; }
function get_option($key) { return ''; }
