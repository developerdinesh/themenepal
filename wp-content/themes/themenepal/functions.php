<?php
/*
 * Direct Script is not allowed
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
if(!ABSPATH){
    exit;
}

/*
 * All Global Functions goes here
 */
require_once('admin/global-functions.php');

/*
 * Theme Nepal Setup
 */
require_once('admin/setup.php');

/*
 * Including Resources
 */
require_once('admin/resources.php');

/*
 * Theme Options
 */
require_once('admin/themeopt.php');

/*
 * Register Sidebar
 */
require_once('admin/sidebar.php');


/*
 * Post Meta
 */
require_once('admin/tn_post_meta.php');

/*
 * Term Meta
 */
require_once('admin/tn_term_meta.php');