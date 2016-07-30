<?php
function _tn_cat_add_taxonomy_fields($term)
{
    $taxonomy_id = $term->term_id;
    wp_enqueue_media();
    $tn_taxonomy_category_info = get_term_meta($taxonomy_id, 'tn_taxonomy_category_info');
    if (!$_GET['action'] == "edit") {
        echo 'This is Add page';
    } else {
        echo 'This is Edit page';
    }
    $tn_taxonomy_category_info = $tn_taxonomy_category_info[0];
    ?>
    <div class="tn_repeater">
        <div class="form-field tn_upload_wrap">
            <label for="tn_uploaded_image_link">Category Image</label>
            <div class="tn_btn_wrapper">
                <button class="tn_add_image">Upload Image</button>
                <button class="tn_remove_image">Remove Image</button>
            </div>
            <input class="tn_upload_image_link" type="hidden" id="tn_uploaded_image_link" name="tn_taxonomy_category_info[category_image]" value="<?=$tn_taxonomy_category_info['category_image']; ?>" />
            <img src="<?=$tn_taxonomy_category_info['category_image']; ?>" alt="" class="tn_upload_img_src" title="">
            <p>Plese click add image to show image below</p>
        </div>
    </div>
    <?php
}


//add_action ( '_tn_cat_add_taxonomy_fields', '_tn_cat_taxonomy_fields');
add_action ( 'category_add_form_fields', '_tn_cat_add_taxonomy_fields');

function _tn_cat_edit_taxonomy_fields($term){
    $taxonomy_id = $term->term_id;
    wp_enqueue_media();
    $tn_taxonomy_category_info = get_term_meta($taxonomy_id, 'tn_taxonomy_category_info');
    $tn_taxonomy_category_info = $tn_taxonomy_category_info[0];
    ?>
    <table class="form-table">
        <tr class="form-field form-field tn_upload_wrap">
            <th scope="row tn_uploaded_image_link">
                <label for="description">Category Image</label>
            </th>
            <td>
                <p>Plese click add image to show image below</p>
                <div class="tn_btn_wrapper">
                    <button class="tn_add_image">Upload Image</button>
                    <button class="tn_remove_image">Remove Image</button>
                </div>
                <input class="tn_upload_image_link" type="hidden" id="tn_uploaded_image_link" name="tn_taxonomy_category_info[category_image]" value="<?=$tn_taxonomy_category_info['category_image']; ?>" />
                <img src="<?=$tn_taxonomy_category_info['category_image']; ?>" alt="" class="tn_upload_img_src" title="">
            </td>
        </tr>
        </tbody>
    </table>

    <?php
}

//add_action ( 'category_edit_form_fields', '_tn_cat_edit_taxonomy_fields');
if(isset($_GET['taxonomy'])&& isset($_GET['tag_ID']) && $_GET['taxonomy'] == "category" ){
    add_action ( 'edit_category_form', '_tn_cat_edit_taxonomy_fields');
}

function jhp_taxonomy_save_fields( $term_id ) {
    $taxonomy_id = $term_id;
    $tn_taxonomy_category_info="tn_taxonomy_category_info";
    $tn_check_add_update_meta = get_term_meta($taxonomy_id, $tn_taxonomy_category_info);
    if(empty($tn_check_add_update_meta)){
        add_term_meta($taxonomy_id, $tn_taxonomy_category_info, $_POST[$tn_taxonomy_category_info]);
    }else{
        update_term_meta($taxonomy_id, $tn_taxonomy_category_info, $_POST[$tn_taxonomy_category_info]);
    }
}

add_action( 'create_category', 'jhp_taxonomy_save_fields' );
add_action( 'edited_category', 'jhp_taxonomy_save_fields' );
