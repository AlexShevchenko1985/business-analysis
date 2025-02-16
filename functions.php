<?php
/**
 * main-theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package main-theme
 */

if (!defined('_S_VERSION')) {
    // Replace the version number of the theme on each release.
    define('_S_VERSION', '0.0.6');
    define('SSW_TD', 'node');
}

// THEME SETUP

/**
 * PSR-4 class autoloader
 */
if (file_exists(__DIR__ . "/" . "vendor/autoload.php")) {
    require_once __DIR__ . "/" . "vendor/autoload.php";
} else {
    error_log("Please, install composer dependencies in a theme directory: " . __DIR__);
}

use App\Theme;

$theme = Theme::getInstance();
