<?php 
    wp_enqueue_media();
    settings_fields( '_tn_group_main_banner' );
    do_settings_sections( '_tn_group_main_banner' );
    
    if(isset($_POST['tn_publish'])){
        unset($_POST['tn_publish']);
        update_option( '_tn_main_banner', $_POST );

    }
    $mainslider = get_option('_tn_main_banner');
    if(!$mainslider){
        $mainslider['mainslider']['title'][]=null;
    }
    $mainslider = $mainslider['mainslider'];
?>

<section class="wrap tn_wrapper">
<form method="post">
	<div class="tn_left_wrap">
		<h1 class="tn_title">Main Slider</h1>
			<div class="tn_repeater ">
            <?php foreach($mainslider['title'] as $index=>$value): ?>
				<div class="tn_repeater_single postbox">
					<div class="tn_form_row">
						<input type="text" name="mainslider[title][]" value="<?= $mainslider['title'][$index]; ?>" placeholder="Enter title here"/>
					</div>

					<div class="tn_form_row tn_upload_wrap">
						<div class="tn_btn_wrapper">
							<span class="tn_add_image page-title-action">Add Image</span>
                            <span class="tn_remove_image page-title-action">Remove Image</span>
						</div>
						<input class="tn_upload_image_link" type="hidden" name="mainslider[image_url][]" value="<?= $mainslider['image_url'][$index]; ?>"/>
                        <div class="img-uploaded">
                            <img class="tn_upload_img_src" src="<?= $mainslider['image_url'][$index]; ?>" alt="" title=""/>
                        </div>
					</div>

					<div class="tn_form_row">
						<p>Enter short description here</p>
						<textarea name="mainslider[description][]" id="" cols="30" rows="10"><?= $mainslider['description'][$index]; ?></textarea>
					</div>

					<span class="del_row dashicons dashicons-dismiss"></span>
				</div>
            <?php endforeach; ?>
				<div class="add_row align-right tn_btn_wrapper">
					<span class="page-title-action">Add Slide</span>
				</div>
			</div>
		
	</div>
	<div class="tn_right_wrap">
		<div class="tn_sidebar">
			<h2 class="hndle ui-sortable-handle"><span>Publish</span></h2>
			<div id="major-publishing-actions">
				<div id="publishing-action tn_btn_wrapper">
					<input name="tn_publish" id="publish" class="button button-primary button-large" value="Publish" type="submit">
				</div>
			</div>
		</div>
	</div>
    </form>
</section>