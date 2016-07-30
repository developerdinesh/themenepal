<div class="social-icons-share">
	<?php

	$social_section = get_option('_tn_social_section');
	if(!$social_section){
		$social_section['socialsection']=null;
	}
	$social_section = $social_section['socialsection'];

	?>
	<?php foreach($social_section['fa_icon'] as $index=>$value): ?>
		<a target="_blank" href="<?= $social_section['social_url'][$index]; ?>"><i class="fa <?= $social_section['fa_icon'][$index]; ?>"></i></a>
	<?php endforeach; ?>
<!--	<a href=""><i class="fa fa-facebook"></i></a>
	<a href=""><i class="fa fa-twitter"></i></a>
	<a href=""><i class="fa fa-linkedin"></i></a>
	<a href=""><i class="fa fa-google-plus"></i></a>
	<a href=""><i class="fa fa-github"></i></a>
	-->
</div>