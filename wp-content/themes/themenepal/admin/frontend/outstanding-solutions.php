<?php
wp_enqueue_media();
if(isset($_POST['tn_publish'])){
	unset($_POST['tn_publish']);
	update_option( '_tn_outstanding_solution', $_POST );
}
$outstandingSolution = get_option('_tn_outstanding_solution');
?>
<section class="wrap tn_wrapper">
	<form method="post">
		<div class="tn_left_wrap">
			<h1 class="tn_title">Our Awesome Design</h1>
			<div class="tn_repeater_single postbox">
				<div class="tn_form_row tn_upload_wrap">
					<div class="tn_btn_wrapper">
						<span class="tn_add_image page-title-action">Add Image</span>
						<span class="tn_remove_image page-title-action">Remove Image</span>
					</div>
					<input class="tn_upload_image_link" type="hidden" name="image_url" value="<?= $outstandingSolution['image_url'] ?>"/>
					<div class="img-uploaded">
						<img class="tn_upload_img_src" src="<?= $outstandingSolution['image_url']; ?>" alt="" title=""/>
					</div>
				</div>
				<div class="tn_form_row">
					<div class="tn_with_col">
						<input type="text" name="title_first" value="<?= $outstandingSolution['title_first']; ?>" placeholder="Enter first title"/>
					</div>
				</div>
				<div class="tn_form_row">
					<div class="tn_with_col">
						<input type="text" name="title_second" value="<?= $outstandingSolution['title_second']; ?>" placeholder="Enter second title"/>
					</div>
					<div class="tn_clearfix"></div>
				</div>

				<div class="tn_form_row">
					<p>Enter short description here</p>
					<textarea name="description" id="" cols="30" rows="10"><?= $outstandingSolution['description']; ?></textarea>
				</div>

				<div class="tn_form_row tn_with_col">
					<div class="tn_with_col tn_col_half">
						<input type="text" name="button_first_level" value="<?= $outstandingSolution['button_first_level']; ?>" placeholder="Enter first title"/>
					</div>
					<div class="tn_with_col tn_col_half">
						<input type="url" name="button_first_link" value="<?= $outstandingSolution['button_first_link']; ?>" placeholder="Enter first link"/>
					</div>
					<div class="tn_clearfix"></div>
				</div>

				<div class="tn_form_row tn_with_col">
					<div class="tn_with_col tn_col_half">
						<input type="text" name="button_second_level" value="<?= $outstandingSolution['button_second_level']; ?>" placeholder="Enter Second title"/>
					</div>
					<div class="tn_with_col tn_col_half">
						<input type="url" name="button_second_link" value="<?= $outstandingSolution['button_second_link']; ?>" placeholder="Enter second link"/>
					</div>
					<div class="tn_clearfix"></div>
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