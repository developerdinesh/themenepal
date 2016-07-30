<?php
/*
 * Theme Option Goes Here
 */
class themeopt{
    function __construct(){
        self::tn_init();
    }

    function tn_init(){
        add_action('admin_menu', array($this,'tn_add_menu_page'));
    }

    function tn_add_menu_page()
    {

        //call register settings function
        add_action( 'admin_init', array($this, 'tn_initialize_admin'));

       /*
       * @parem
       * parem 1: Page Title
       * parem 2: Menu Name
       * parem 3: Capability
       * parem 4: Menu Slug
       * parem 5: Call Back Function
       */
        add_options_page('TN Settings', 'TN Settings', 'administrator', 'tn_settings', array($this, 'tn_settings_page'));

        /*
         * @parem
         * parem 1: Page Title
         * parem 2: Menu Name
         * parem 3: User Capability
         * parem 4: Menu Slug
         * parem 5: call Back function
         * parem 6: Icon Url
         * parem 7: Menu Index
         */
        add_menu_page('TN Options', 'Theme Options', 'administrator', 'tn_theme_option', array($this, 'tn_option_page'), '', 60);

        /*
         * @parem
         * parem 1: parent Slug
         * parem 2: page title
         * parem 3: menu title
         * parem 4: capability
         * parem 5: menu slug
         * parem 6: callable function
         */
        add_submenu_page('tn_theme_option', 'Main Banner', 'Main Banner', 'administrator', 'tn_main_banner', array($this, 'tn_option_subpage'));
        add_submenu_page('tn_theme_option', 'Design Block', 'Design Block', 'administrator', 'tn_awesome_design', array($this, 'tn_awesome_design'));
        add_submenu_page('tn_theme_option', 'Outstanding Solution', 'Outstanding Solution', 'administrator', 'tn_outstanding_solution', array($this, 'tn_outstanding_solution'));
    }

    function tn_initialize_admin(){
        register_setting( '_tn_group_main_banner', '_tn_main_banner' );
    }

    function tn_settings_page(){
        require_once('frontend/social-section.php');
    }

    function tn_option_page(){
        require_once('frontend/theme-option.php');
    }

    function tn_option_subpage(){
        require_once('frontend/banner-section.php');
    }

    function tn_awesome_design(){
        require_once('frontend/awesome-design.php');
    }

    function tn_outstanding_solution(){
        require_once('frontend/outstanding-solutions.php');
    }

}

new themeopt();
