<?php
    $args = array(
        'post_type'=>'our-portfolio',
        'posts_per_page'=> -1,
    );
    $query_portfolio = new WP_Query($args);
?>
<section id="portfolio">
    <div class="portfolio-wrap">
        <div class="tn-container">
            <h3 class="portfolio-title">our portfolio</h3>
            <div class="portfolio-list">
                <div  class="button-group  filter-button-group">
                    <button  data-filter="*">all</button>
                    <?php
                    $args = array(
                        'type'                     => 'our-portfolio',
                        'orderby'                  => 'name',
                        'order'                    => 'ASC',
                        'hide_empty'               => 1,
                    );
                    $categories = get_categories($args);
                    ?>
                    <?php foreach($categories as $category): ?>
                        <button  data-filter=".<?= $category->slug ?>"><?= $category->name; ?></button>
                    <?php endforeach; ?>

                    <!--<button  data-filter=".personal">personal</button>
                    <button  data-filter=".business">business</button>
                    <button  data-filter=".ecommerce">ecommerce</button>-->
                </div>
                <div class="grid">
                    <?php while($query_portfolio->have_posts()): $query_portfolio->the_post(); ?>
                        <?php
                        $all_categories=get_the_category( get_the_ID() );
                        ?>
                    <div class="grid-item <?php foreach($all_categories as $single_category){ echo $single_category->slug.' ';} ?>">
                        <div class="grid-image-item">
                            <?php echo get_the_post_thumbnail(); ?>
                            <div class="portfolio-overlay">
                                <a class="fancybox" rel="gallery1" href="" title="Morning Godafoss (Brads5)">
                                    <?php the_excerpt(); ?>
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; ?>
                    <!--
                    <div class="grid-item business">
                        <div class="grid-image-item"><img src="<?= get_img_url() ?>portfolio-image/portfolio2.png">
                            <div class="portfolio-overlay"></div>
                        </div>
                    </div>
                    <div class="grid-item ecommerce">
                        <div class="grid-image-item"><img src="<?= get_img_url() ?>portfolio-image/portfolio3.png">
                            <div class="portfolio-overlay"></div>
                        </div>
                    </div>
                    <div class="grid-item personal">
                        <div class="grid-image-item"><img src="<?= get_img_url() ?>portfolio-image/portfolio4.png">
                            <div class="portfolio-overlay"></div>
                        </div>
                    </div>
                    <div class="grid-item business">
                        <div class="grid-image-item"><img src="<?= get_img_url() ?>portfolio-image/portfolio5.png">
                            <div class="portfolio-overlay"></div>
                        </div>
                    </div>
                    <div class="grid-item ecommerce">
                        <div class="grid-image-item"><img src="<?= get_img_url() ?>portfolio-image/portfolio6.png">
                            <div class="portfolio-overlay"></div>
                        </div>
                    </div>
                    <div class="grid-item personal">
                        <div class="grid-image-item"><img src="<?= get_img_url() ?>portfolio-image/portfolio7.png">
                            <div class="portfolio-overlay"></div>
                        </div>
                    </div>
                    <div class="grid-item business">
                        <div class="grid-image-item"><img src="<?= get_img_url() ?>portfolio-image/portfolio8.png">
                            <div class="portfolio-overlay"></div>
                        </div>
                    </div>
                    <div class="grid-item ecommerce">
                        <div class="grid-image-item"><img src="<?= get_img_url() ?>portfolio-image/portfolio1.png">
                            <div class="portfolio-overlay"></div>
                        </div>
                    </div>
                    <div class="grid-item personal">
                        <div class="grid-image-item"><img src="<?= get_img_url() ?>portfolio-image/portfolio2.png">
                            <div class="portfolio-overlay"></div>
                        </div>
                    </div>
                    <div class="grid-item business">
                        <div class="grid-image-item"><img src="<?= get_img_url() ?>portfolio-image/portfolio3.png">
                            <div class="portfolio-overlay"></div>
                        </div>
                    </div>
                    <div class="grid-item ecommerce">
                        <div class="grid-image-item"><img src="<?= get_img_url() ?>portfolio-image/portfolio4.png">
                            <div class="portfolio-overlay"></div>
                        </div>
                    </div>
                    -->
                </div>
            </div>
        </div>
    </div>
</section>