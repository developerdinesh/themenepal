<?php
$args = array(
	'post_type'=>'testimonial',
	'posts_per_page'=> -1,
);
wp_reset_query();
wp_reset_postdata();
$testimonial_query = new WP_Query($args);
?>
<section id="testimonial">
	<div class="testimonial-wrapper">
		<div class="tn-container">
			<h1 class="testimonial-title">testimonial</h1>
			<h4 class="testimonial-description">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet
			</h4>
			<ul class="testimonial-wrapper-slider " id="lightslider-test" >
				<?php
				while($testimonial_query->have_posts()):$testimonial_query->the_post();
					$tn_testimonial_meta = get_post_meta(get_the_ID(), '_tn_testimonialmeta_info', true);
					$tn_testimonial_meta= $tn_testimonial_meta['_tn_testimonial_meta'];

					?>
					<li class="testimonial-slider-content">
						<h4 class="testimonial-slider-description">
							<?= get_the_excerpt(); ?>
						</h4>
						<div class="star-rating">
							<img src="<?= get_img_url() ?>star.png">
							<img src="<?= get_img_url() ?>star.png">
							<img src="<?= get_img_url() ?>star.png">
							<img src="<?= get_img_url() ?>star.png">
							<img src="<?= get_img_url() ?>star.png">
						</div>
						<div class="name">
							<?= get_the_title(); ?>
						</div>
						<div class="company-details">
							<span class="company-position"><?= $tn_testimonial_meta['designation'];?></span>
							<span>-</span>
							<span class="company-name"><?= $tn_testimonial_meta['company_name'];?></span>
						</div>
						<div class="testimonial-image">
							<img src="<?= wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())); ?>">
						</div>
					</li>
					<?php
				endwhile;
				?>
				<!--
						<li class="testimonial-slider-content">
							<h4 class="testimonial-slider-description">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
							</h4>
							<div class="star-rating">
								<img src="<?= get_img_url() ?>star.png">
								<img src="<?= get_img_url() ?>star.png">
								<img src="<?= get_img_url() ?>star.png">
								<img src="<?= get_img_url() ?>star.png">
								<img src="<?= get_img_url() ?>star.png">
							</div>
							<div class="name">
								jason bourne
							</div>
							<div class="company-details">
								<span class="company-position">ceo</span>
								<span>-</span>
								<span class="company-name">company name</span>
							</div>
							<div class="testimonial-image">
								<img src="<?= get_img_url() ?>testimonial/testimonialimg1.png">
							</div>
						</li>
						<li class="testimonial-slider-content">
							<h4 class="testimonial-slider-description">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
							</h4>
							<div class="star-rating">
								<img src="<?= get_img_url() ?>star.png">
								<img src="<?= get_img_url() ?>star.png">
								<img src="<?= get_img_url() ?>star.png">
								<img src="<?= get_img_url() ?>star.png">
								<img src="<?= get_img_url() ?>star.png">
							</div>
							<div class="name">
								jason bourne
							</div>
							<div class="company-details">
								<span class="company-position">ceo</span>
								<span>-</span>
								<span class="company-name">company name</span>
							</div>
							<div class="testimonial-image">
								<img src="<?= get_img_url() ?>testimonial/testimonialimg1.png">
							</div>
						</li>
						<li class="testimonial-slider-content">
							<h4 class="testimonial-slider-description">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
							</h4>
							<div class="star-rating">
								<img src="<?= get_img_url() ?>star.png">
								<img src="<?= get_img_url() ?>star.png">
								<img src="<?= get_img_url() ?>star.png">
								<img src="<?= get_img_url() ?>star.png">
								<img src="<?= get_img_url() ?>star.png">
							</div>
							<div class="name">
								jason bourne
							</div>
							<div class="company-details">
								<span class="company-position">ceo</span>
								<span>-</span>
								<span class="company-name">company name</span>
							</div>
							<div class="testimonial-image">
								<img src="<?= get_img_url() ?>testimonial/testimonialimg1.png">
							</div>
						</li>
						<li class="testimonial-slider-content">
							<h4 class="testimonial-slider-description">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
							</h4>
							<div class="star-rating">
								<img src="<?= get_img_url() ?>star.png">
								<img src="<?= get_img_url() ?>star.png">
								<img src="<?= get_img_url() ?>star.png">
								<img src="<?= get_img_url() ?>star.png">
								<img src="<?= get_img_url() ?>star.png">
							</div>
							<div class="name">
								jason bourne
							</div>
							<div class="company-details">
								<span class="company-position">ceo</span>
								<span>-</span>
								<span class="company-name">company name</span>
							</div>
							<div class="testimonial-image">
								<img src="<?= get_img_url() ?>testimonial/testimonialimg1.png">
							</div>
						</li>
						-->

			</ul>
		</div>
	</div>
</section>