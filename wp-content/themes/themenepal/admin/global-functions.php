<?php

/*
 * all global functions goes here
 */



/*
 * Return css root
 */
function get_admin_cssurl($location=''){
    return get_template_directory_uri().'/admin/frontend/css/'.$location;
}

/*
 * Return js root
 */
function get_admin_jsurl($location=''){
    return get_template_directory_uri().'/admin/frontend/js/'.$location;
}

/*
 * Return css root
 */
function get_css_url($location=''){
    return get_template_directory_uri().'/css/'.$location;
}

/*
 * Return js root
 */
function get_js_url($location=''){
    return get_template_directory_uri().'/js/'.$location;
}

/*
 * Return img root
 */
function get_img_url($location=''){
    return get_template_directory_uri().'/images/'.$location;
}

?>