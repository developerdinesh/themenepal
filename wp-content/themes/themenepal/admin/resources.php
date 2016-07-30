<?php
/**
* Enqueues scripts and styles.
*
* @since Theme Nepal 1.0
*/



/*
 * Enquee Css Js and Script to Backend
 */


function load_custom_wp_admin_style() {
    wp_register_style( 'tn_admin_style', get_admin_cssurl('tn_admin_style.css'), false, '1.0.0' );
    wp_enqueue_style( 'tn_admin_style' );
    wp_enqueue_script( 'custom', get_admin_jsurl().'tn_admin_script.js', 'jQuery', '5', true );
}
add_action( 'admin_enqueue_scripts', 'load_custom_wp_admin_style' );

/*
 * Enquee Css Js and Script to Frontend
 */
function themenepal_scripts() {

    /*
     * Adding Theme Nepal Styles Here
     */

    wp_enqueue_style( 'fonts-lato', 'https://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic');
    wp_enqueue_style( 'font-awesome', 'http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css');
    wp_enqueue_style( 'tn-jquery.bxslider', get_css_url().'jquery.bxslider.css', array(), '1.0.0' );
    wp_enqueue_style( 'tn-lightslider', get_css_url().'lightslider.css', array(), '1.0.0' );
    wp_enqueue_style( 'tn-fancybox', get_css_url().'jquery.fancybox.css', array(), '1.0.0' );
    wp_enqueue_style( 'tn-fancybox-thumbs', get_css_url().'jquery.fancybox-thumbs.css', array(), '1.0.0' );
    wp_enqueue_style( 'tn-reset', get_css_url().'reset.css', array(), '1.0.0' );
    wp_enqueue_style( 'tn-styles', get_css_url().'style.css', array(), '1.0.0' );
    wp_enqueue_style( 'tn-responsive', get_css_url().'responsive.css', array(), '1.0.0' );


    wp_enqueue_script( 'jQuery', get_js_url().'jquery.min.js', '', '1', true );
    wp_enqueue_script( 'bxslider', get_js_url().'jquery.bxslider.min.js', 'jQuery', '2', true );
    wp_enqueue_script( 'fancybox', get_js_url().'jquery.fancybox.js', 'jQuery', '2', true );
    wp_enqueue_script( 'fancybox-thumbs', get_js_url().'jquery.fancybox-thumbs.js', 'jQuery', '2', true );
    wp_enqueue_script( 'isotope', get_js_url().'isotope.pkgd.min.js', 'jQuery', '3', true );
    wp_enqueue_script( 'lightslider', get_js_url().'lightslider.min.js', 'jQuery', '3', true );
    wp_enqueue_script( 'support', get_js_url().'support.js', 'jQuery', '4', true );
    wp_enqueue_script( 'custom', get_js_url().'custom.js', 'jQuery', '5', true );

}
add_action( 'wp_enqueue_scripts', 'themenepal_scripts' );
