<?php

/**

 * @package           Zestard_Cookie_Consent

 */

/*

 * Plugin Name:       Zestard Cookie Consent

 * Plugin URI:        https://www.zestard.com/

 * Description:       Simple and easy to manage cookie consent bar with GDPR.

 * Version:           1.0.4

 * Author:            Zestard Technologies

 * Author URI:        https://profiles.wordpress.org/zestardtechnologies/

 * License:           GPLv2 or later

 * Text Domain:       zestard-cookie-consent

 */

/*

  Copyright 2019  Zestard Technologies


  This program is free software; you can redistribute it and/or modify

  it under the terms of the GNU General Public License, version 2, as

  published by the Free Software Foundation.


  This program is distributed in the hope that it will be useful,

  but WITHOUT ANY WARRANTY; without even the implied warranty of

  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the

  GNU General Public License for more details.


  You should have received a copy of the GNU General Public License

  along with this program; if not, write to the Free Software

  Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA

 */



// For security check

defined('ABSPATH') or die('You can not access this file');

class ZTPL_CookieConsent {

    public $plugin;

    function __construct() {

        // extracts the name of a plugin from its filename.

        $this->plugin = plugin_basename(__FILE__);

    }

    /* Add all required action & filter */

    function ZTPL_Register() {

        // Plugin Hooks

        add_filter("plugin_action_links_$this->plugin", array($this, 'ZTPL_SettingsLink'));

        // Admin Setting Hooks

        add_action('admin_enqueue_scripts', array($this, 'ZTPL_Enqueue'));

        add_action('admin_enqueue_scripts', array($this, 'ZTPL_AddColorPicker'));

        add_action('admin_menu', array($this, 'ZTPL_RegisterOptionsPage'));

        add_action('admin_init', array($this, 'ZTPL_RegisterSettings'));

        // Frontend Setting Hooks

        add_action('wp_enqueue_scripts', array($this, 'ZTPL_FrontEnqueue'));

        add_action('wp_footer', array($this, 'ZTPL_CookiebarFrontView'));

    }

    /* Add cookie menu option in setting menu */

    function ZTPL_RegisterOptionsPage() {

        $page_name = __('Zestard Cookie Consent', 'zestard-cookie-consent');

        $settings_option_name = __('Cookie Consent', 'zestard-cookie-consent');

        $page_slug = __('zestard_cookie_consent', 'zestard-cookie-consent');

        add_options_page($page_name, $settings_option_name, 'manage_options', $page_slug, array($this, 'ZTPL_CookieOptionPage'));

    }

    /* Add option settings when activate the plugin */

    function ZTPL_SettingsLink($links) {

        $settings = __('Settings', 'zestard-cookie-consent');

        $settings_link = '<a href="options-general.php?page=zestard_cookie_consent">' . $settings . '</a>';

        array_push($links, $settings_link);

        return $links;

    }

    /* Add styles and scripts for admin settings */

    function ZTPL_Enqueue() {

        wp_enqueue_style('ztpl_admin_style', plugins_url('admin/css/ztpl-admin-settings.css', __FILE__));

        wp_enqueue_script('ztpl_admin_script', plugins_url('admin/js/ztpl-admin-settings.js', __FILE__));

	}

    /* Add styles and scripts for public(front end) side */

    function ZTPL_FrontEnqueue() {

        ///wp_enqueue_script('jquery.js');

		wp_enqueue_style('ztpl_public_style', plugins_url('public/css/ztpl-public-settings.css', __FILE__));

        wp_enqueue_script('ztpl_public_script', plugins_url('public/js/ztpl-public-settings.js', __FILE__));
    }

    /* Add cookie bar fields to database */

    function ZTPL_RegisterSettings() {

        include_once('admin/inc/add-option.php');

    }

    /* Add color picker functionality */

    function ZTPL_AddColorPicker($hook) {

        if (is_admin()) {

            // Add the color picker css file       

            wp_enqueue_style('wp-color-picker');

            // Include our custom jQuery file with WordPress Color Picker dependency

            wp_enqueue_script('custom-script-handle', plugins_url('admin/js/ztpl-clr-picker.js', __FILE__), array('wp-color-picker'), false, true);

        }

    }

    /* Div structure for backend(admin side) */

    function ZTPL_CookieOptionPage() {

        include_once('admin/inc/admin-layout.php');

    }

    /* Activation */

    function ZTPL_Activate() {

        // flush rewrite rules

        flush_rewrite_rules();

    }

    /* Deactivation */

    function ZTPL_Deactivate() {

        // flush rewrite rules

        flush_rewrite_rules();

    }

    /* Get data from database & set in div structure for frontend  */

    function ZTPL_CookiebarFrontView() {

        include_once('public/public.php');

    }
}

/* Define object of class & access method through this */

if (class_exists('ZTPL_CookieConsent')) {

    $ztpl_cookie_consent = new ZTPL_CookieConsent();

    $ztpl_cookie_consent->ZTPL_Register();

}

//Activation
register_activation_hook(__FILE__, array($ztpl_cookie_consent, 'ZTPL_Activate'));

//Deactivation
register_deactivation_hook(__FILE__, array($ztpl_cookie_consent, 'ZTPL_Deactivate'));