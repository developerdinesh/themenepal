<?php
	$themeOptions = get_option('_tn_theme_options');
	$cat_id= $themeOptions['category_id'];
	$args = array(
		'post_type'=>'our-team',
		'posts_per_page'=> -1,
		'cat'			=>$cat_id,
	);
	wp_reset_query();
	wp_reset_postdata();
	$team_query = new WP_Query($args);

	$taxonomy_id=$cat_id;
	$tn_taxonomy_category_info = get_term_meta($taxonomy_id, 'tn_taxonomy_category_info');
	$tn_taxonomy_category_info = $tn_taxonomy_category_info[0];
?>
<section id="the-team">
	<div class="the-team-wrapper" style="background-image:url(<?= $tn_taxonomy_category_info['category_image']; ?>);">
		<div class="tn-container">
			<h1 class="the-team-title"><?= get_cat_name($cat_id); ?></h1>
			<h4 class="the-team-description">
				<?= category_description($cat_id); ?>
			</h4>
			<div class="team-slider" id="lightslider-team">
				<?php
				while( $team_query->have_posts() ): $team_query->the_post();
					$tn_team_meta = get_post_meta(get_the_ID(), '_tn_teammeta_info', true);
					$tn_team_meta = (isset($tn_team_meta['_tn_team_meta'])) ? $tn_team_meta['_tn_team_meta'] : '';
				?>
				<div class="team-slider-themeNepal">
					<?php the_post_thumbnail(); ?>
					<div class="team-member" style="width:100%;">
						<h1 class="team-member-name"><?php the_title(); ?></h1>
						<h4 class="team-member-designation"><?= $tn_team_meta['designation']; ?></h4>
						<div class="team-member-description">
							<?php the_excerpt(); ?>
						</div>
						<div class="team-contact-social-icons">
							<?php
							$countVal = count($tn_team_meta['font_awesome']);
							for($i=0; $i<$countVal; $i++){ ?>
								<a target="_blank" href="<?= $tn_team_meta['social_links'][$i]; ?>"><i class="fa <?= $tn_team_meta['font_awesome'][$i]; ?>"></i></a>
							<?php } ?>
						</div>
					</div>
				</div>
				<?php endwhile; ?>
			</div>
		</div>
	</div>
</section>