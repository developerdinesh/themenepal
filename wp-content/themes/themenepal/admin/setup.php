<?php
if(!function_exists('themeNepal_setup')):
/*
* Sets up theme defaults and registers support for various WordPress features.
*
* Note that this function is hooked into the after_setup_theme hook, which
* runs before the init hook. The init hook is too late for some features, such
* as indicating support for post thumbnails.
*
* Create your own themeNepal_setup() function to override in a child theme.
*
* @since Twenty Sixteen 1.0
*/

    function themeNepal_setup(){
        // This theme uses wp_nav_menu() in two locations.
        register_nav_menus(array(
            'primary' => __( 'Primary Menu', 'themenepal' ),
        ));

        add_theme_support( 'post-thumbnails' );


    }
endif;

add_action( 'after_setup_theme', 'themeNepal_setup' );




add_action( 'admin_menu', '_tn_teaminfo_metabox' );
add_action( 'save_post', 'my_save_post_meta_box', 10, 2 );

/*
 * @parem
 * Parem 1: ID of metabox
 * Parem 2: Title of Metabox
 * Parem 3: Callback Function
 * Parem 4: Where Metabox need to be shown
 * Parem 5: Screen show normal, show and advanced
 * Parem 6: Priority (default, hight, low);
 * Parem 7: Call Back argument
 */
function _tn_teaminfo_metabox() {
    add_meta_box( 'my-meta-box', 'Second Excerpt', 'my_post_meta_box', 'post', 'normal', 'high' );
}

function my_post_meta_box( $object, $box ) { ?>
    <p>
        <label for="second-excerpt">Second Excerpt</label>
        <br />
        <textarea name="second-excerpt" id="second-excerpt" cols="60" rows="4" tabindex="30" style="width: 97%;"><?php echo wp_specialchars( get_post_meta( $object->ID, 'Second Excerpt', true ), 1 ); ?></textarea>
        <input type="hidden" name="my_meta_box_nonce" value="<?php echo wp_create_nonce( plugin_basename( __FILE__ ) ); ?>" />
    </p>
<?php }

function my_save_post_meta_box( $post_id, $post ) {

    if ( !wp_verify_nonce( $_POST['my_meta_box_nonce'], plugin_basename( __FILE__ ) ) )
        return $post_id;

    if ( !current_user_can( 'edit_post', $post_id ) )
        return $post_id;

    $meta_value = get_post_meta( $post_id, 'Second Excerpt', true );
    $new_meta_value = stripslashes( $_POST['second-excerpt'] );

    if ( $new_meta_value && '' == $meta_value )
        add_post_meta( $post_id, 'Second Excerpt', $new_meta_value, true );

    elseif ( $new_meta_value != $meta_value )
        update_post_meta( $post_id, 'Second Excerpt', $new_meta_value );

    elseif ( '' == $new_meta_value && $meta_value )
        delete_post_meta( $post_id, 'Second Excerpt', $meta_value );
}

/*
 * post type register
 */
function tn_register_post_type(){
    /*post type register*/
    $team_args = array(
        'public'          => true,
        'label'           => __( 'Our Teams', 'Our Team' ),
        'menu_icon'       => 'dashicons-book',
        'capability_type' => 'post',
        'taxonomies'      => array('category'),
        'has_archive'     => true,
        'supports'        => array('title', 'editor', 'excerpt', 'thumbnail', '_tn_team_info'),
    );
    register_post_type( 'our-team', $team_args );

    $portfolio_args = array(
        'public'          => true,
        'label'           => __( 'Our Portfolio', 'Our Portfolio' ),
        'menu_icon'       => 'dashicons-nametag',
        'capability_type' => 'post',
        'public'          => true,
        'has_archive'     => true,
        'supports'        => array('title', 'editor', 'excerpt', 'thumbnail', '_tn_portfolio'),
        'taxonomies'      => array('category'),
    );
    register_post_type( 'our-portfolio', $portfolio_args );

    $testimonial_args = array(
        'public'          => true,
        'label'           => __( 'Testimonial', 'Testimonial' ),
        'menu_icon'       => 'dashicons-admin-customizer',
        'capability_type' => 'post',
        'public'          => true,
        'has_archive'     => true,
        'supports'        => array('title', 'editor', 'excerpt', 'thumbnail', '_tn_testimonial'),
        'taxonomies'      => array('category'),
    );
    register_post_type( 'testimonial', $testimonial_args );

    $ourservice_args = array(
        'public'          => true,
        'label'           => __( 'Our Service', 'Our Service' ),
        'menu_icon'       => 'dashicons-admin-customizer',
        'capability_type' => 'post',
        'public'          => true,
        'has_archive'     => true,
        'supports'        => array('title', 'editor', 'excerpt', 'thumbnail', '_tn_our_service'),
        'taxonomies'      => array('category'),
    );
    register_post_type( 'our-service', $ourservice_args );

}
add_action( 'init', 'tn_register_post_type');
