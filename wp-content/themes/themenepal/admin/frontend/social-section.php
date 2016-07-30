<?php 
    wp_enqueue_media();
    if(isset($_POST['tn_publish'])){
        unset($_POST['tn_publish']);
        update_option( '_tn_social_section', $_POST );
    }
    $social_section = get_option('_tn_social_section');
    if(!$social_section){
        $social_section['socialsection']['fa_icon'][0]=null;
    }
    $social_section = $social_section['socialsection'];
?>

<section class="wrap tn_wrapper">
<form method="post">
	<div class="tn_left_wrap">
		<h1 class="tn_title">Social Field</h1>
			<div class="tn_repeater ">

            <?php foreach($social_section['fa_icon'] as $index=>$value): ?>

				<div class="tn_repeater_single postbox">
					<div class="tn_form_row tn_with_col">
                        <div class="tn_col_half">
                            <input type="text" name="socialsection[fa_icon][]" value="<?= $social_section['fa_icon'][$index]; ?>" placeholder="Please enter fa icon"/>
                        </div>
                        <div class="tn_col_half">
                            <input type="url" name="socialsection[social_url][]" value="<?= $social_section['social_url'][$index]; ?>" placeholder="Please enter Url"/>
                        </div>

                        <div class="tn_clearfix"></div>
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