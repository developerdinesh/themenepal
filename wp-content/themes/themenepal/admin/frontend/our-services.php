<?php
function _tn_services_boxes(){
    add_meta_box('_tn_services_info', 'services Information', '_tn_services_func', 'our-service', 'normal', 'high' );
}
add_action('add_meta_boxes', '_tn_services_boxes');

function _tn_services_func($post){
    wp_nonce_field( basename( __FILE__ ), 'tn_services_meta_nonce' );
    $tn_services_meta = get_post_meta($post->ID, '_tn_servicesmeta_info', true);
    $tn_services_meta = (isset($tn_services_meta['_tn_services_meta'])) ? $tn_services_meta['_tn_services_meta'] : '';
    ?>
    <div class="_tn_wrapper">
        <table>
            <tr class="tn_form_row tn_with_col">
                <td class="tn_col_half">
                    <label>Designation</label>
                </td>
                <td class="tn_col_half">
                    <input type="text" name="_tn_services_meta[designation]" value='<?= (isset($tn_services_meta['designation'])) ? $tn_services_meta['designation'] : ''; ?>' placeholder="Enter your designation"/>
                </td>
            </tr>
            <tr class="tn_form_row tn_with_col">
                <td class="tn_col_half">
                    <label>Font Awesome Class</label>
                </td>
                <td class="tn_col_half">
                    <label>Link</label>
                </td>
            </tr>
            <tr>
                <td class="tn_repeater" colspan="2">
                    <?php
                    if(isset($tn_services_meta['font_awesome'])) {
                        $countRow = count($tn_services_meta['font_awesome']);
                    }
                    if(!$countRow){$countRow=1;}
                    for($i=0; $i<$countRow; $i++){
                        ?>
                        <table class="tn_repeater_single post_block">
                            <tr class="tn_form_row tn_with_col">
                                <td class="tn_col_half">
                                    <input type="text" name="_tn_services_meta[font_awesome][]" value='<?= (isset($tn_services_meta['font_awesome'][$i])) ? $tn_services_meta['font_awesome'][$i] : ''; ?>' placeholder="Font awesome icon"/>
                                </td>
                                <td class="tn_col_half">
                                    <input type="text" name="_tn_services_meta[social_links][]" value='<?= (isset($tn_services_meta['social_links'][$i])) ? $tn_services_meta['social_links'][$i] : ''; ?>' placeholder="Social link"/>
                                    <span class="del_row dashicons dashicons-dismiss"></span>
                                </td>
                            </tr>
                        </table>
                    <?php } ?>
                    <div class="add_row align-right tn_btn_wrapper">
                        <span class="page-title-action">Add Links</span>
                    </div>

                </td>
            </tr>
        </table>
    </div>
    <?php
}

function _tn_services_meta_save($post_id){
    $is_auto_save = wp_is_post_autosave($post_id);
    $is_revision = wp_is_post_revision($post_id);
    $is_valid_nonce = (isset($_POST['tn_services_meta_nonce']) && wp_verify_nonce($_POST['tn_services_meta_nonce'], basename( __FILE__ ) ) ) ? 'true' : 'false';

    if($is_auto_save || $is_revision || !$is_valid_nonce){
        return;
    }

    if(isset($_POST['_tn_services_meta'] ) ){
        $tn_services_meta['_tn_services_meta'] = $_POST['_tn_services_meta'];
        update_post_meta($post_id, '_tn_servicesmeta_info', $tn_services_meta);
    }
}
add_action('save_post', '_tn_services_meta_save');
?>