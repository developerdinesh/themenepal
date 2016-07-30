<?php
function _tn_testimonial_boxes(){
    add_meta_box('_tn_testimonial_info', 'Testimonial Information', '_tn_testinomial_metabox_func', 'testimonial', 'normal', 'high' );
}
add_action('add_meta_boxes', '_tn_testimonial_boxes');

function _tn_testinomial_metabox_func($post){
    wp_nonce_field( basename( __FILE__ ), 'tn_testimonial_meta_nonce' );
    $tn_testimonial_meta = get_post_meta($post->ID, '_tn_testimonialmeta_info', true);
    $tn_testimonial_meta = (isset($tn_testimonial_meta['_tn_testimonial_meta'])) ? $tn_testimonial_meta['_tn_testimonial_meta'] : '';
    ?>
    <div class="_tn_wrapper">
        <table>
            <tr class="tn_form_row tn_with_col">
                <td class="tn_col_half">
                    <label>Designation</label>
                </td>
                <td class="tn_col_half">
                    <input type="text" name="_tn_testimonial_meta[designation]" value='<?= (isset($tn_testimonial_meta['designation'])) ? $tn_testimonial_meta['designation'] : ''; ?>' placeholder="Enter your designation"/>
                </td>
            </tr>
            <tr class="tn_form_row tn_with_col">
                <td class="tn_col_half">
                    <label>Company Name</label>
                </td>
                <td class="tn_col_half">
                    <input type="text" name="_tn_testimonial_meta[company_name]" value='<?= (isset($tn_testimonial_meta['company_name'])) ? $tn_testimonial_meta['company_name'] : ''; ?>' placeholder="Company Name"/>
                </td>
            </tr>
        </table>
    </div>
    <?php
}

function _tn_testimonial_meta_save($post_id){
    $is_auto_save = wp_is_post_autosave($post_id);
    $is_revision = wp_is_post_revision($post_id);
    $is_valid_nonce = (isset($_POST['_tn_testimonial_meta']) && wp_verify_nonce($_POST['tn_testimonial_meta_nonce'], basename( __FILE__ ) ) ) ? 'true' : 'false';

    if($is_auto_save || $is_revision || !$is_valid_nonce){
        return;
    }

    if(isset($_POST['_tn_testimonial_meta'] ) ){
        $tn_testimonial_meta['_tn_testimonial_meta'] = $_POST['_tn_testimonial_meta'];
        update_post_meta($post_id, '_tn_testimonialmeta_info', $tn_testimonial_meta);
    }
}
add_action('save_post', '_tn_testimonial_meta_save');

?>