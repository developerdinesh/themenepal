<?php
wp_enqueue_media();
if(isset($_POST['tn_publish'])){
	unset($_POST['tn_publish']);
	update_option( '_tn_awesome_design', $_POST );
}
$awesomeDesign = get_option('_tn_awesome_design');
$awesomeDesign = $awesomeDesign['awesomeDesign'];
?>
<section class="wrap tn_wrapper">
	<form method="post">
		<div class="tn_left_wrap">
			<h1 class="tn_title">Our Awesome Design</h1>
			<div class="tn_repeater_single postbox">
				<div class="tn_form_row tn_with_col">
					<div class="tn_with_col tn_col_half">
						<input type="text" name="awesomeDesign[title_first]" value="<?= $awesomeDesign['title_first']; ?>" placeholder="Enter first title"/>
					</div>
					<div class="tn_with_col tn_col_half">
						<input type="text" name="awesomeDesign[title_second]" value="<?= $awesomeDesign['title_second']; ?>" placeholder="Enter second title"/>
					</div>
					<div class="tn_clearfix"></div>
				</div>

				<div class="tn_form_row">
					<p>Enter short description here</p>
					<textarea name="awesomeDesign[description]" id="" cols="30" rows="10"><?= $awesomeDesign['description']; ?></textarea>
				</div>
			</div>
			<div class="tn_repeater">
				<?php
				if(!isset($awesomeDesign['repeater_block']['repeater_title'])):
					$awesomeDesign['repeater_block']['repeater_title'][]=null;
				endif;
				$repeaterBlock = $awesomeDesign['repeater_block'];
				foreach($repeaterBlock['repeater_title'] as $index=>$value):
					?>
					<div class="tn_repeater_single postbox">
						<div class="tn_form_row">
							<input type="text" name="awesomeDesign[repeater_block][repeater_title][]" value="<?= $repeaterBlock['repeater_title'][$index]; ?>" placeholder="Enter title here"/>
						</div>
						<div class="tn_form_row">
							<p>Enter short description here</p>
							<textarea name="awesomeDesign[repeater_block][repeater_description][]" id="" cols="30" rows="10"><?= $repeaterBlock['repeater_description'][$index]; ?></textarea>
						</div>
						<span class="del_row dashicons dashicons-dismiss"></span>
					</div>
					<?php
				endforeach;

				?>
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