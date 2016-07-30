<?php
wp_enqueue_media();
if(isset($_POST['tn_publish'])){
	unset($_POST['tn_publish']);
	update_option( '_tn_theme_options', $_POST );

}
$themeOptions = get_option('_tn_theme_options');
$args = array(
	'orderby' => 'id',
	'hide_empty'=> 0,
);
$categories = get_categories($args);
?>
<section class="wrap tn_wrapper">
	<form method="post">
		<div class="tn_left_wrap">
			<h1 class="tn_title">Theme Options</h1>
			<div class="tn_repeater tn_with_col">
				<div class="tn_repeater_single postbox">
					<div class="tn_form_row tn_with_col">
						<div class="tn_col_half">
							<label>Select Team Category</label>
						</div>
						<div class="tn_col_half">
							<select name="category_id">
								<?php foreach($categories as $category): ?>
									<option value="<?= $category->cat_ID; ?>"  <?= ($category->cat_ID==$themeOptions['category_id']) ? 'selected' :''; ?>><?= $category->name; ?></option>
								<?php endforeach; ?>
							</select>
						</div>
						<div class="tn_clearfix"></div>
					</div>
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