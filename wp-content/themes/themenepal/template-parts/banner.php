<section id="slider-banner">
    <div class="slider-wrap">
        <ul class="bxslider">
            <?php
            $mainSlider = get_option('_tn_main_banner');
            $mainSlider = $mainSlider['mainslider'];
            foreach($mainSlider['title'] as $index=>$value): ?>
            <li>
                <img src="<?= $mainSlider['image_url'][$index]; ?>">
                <div class="slider-caption">
                    <div class="tn-container">
                        <h1 class="caption-title">
                            <span style="max-width:550px; margin:0 auto;"><?= $mainSlider['title'][$index]; ?></span>
                        </h1>
                        <p class="caption-description">
                            <?= $mainSlider['description'][$index]; ?>
                        </p>
                        <div class="slider-subscription">
                            <form>
                                <input type="text" class="banner-subscription-input" placeholder="email address">
                                <input type="submit" value="submit now" class="banner-subscription-submit">
                            </form>
                        </div>
                    </div>
                </div>
            </li>
            <?php endforeach; ?>
            <!--<li>
                <img src="<?= get_img_url() ?>bannerimg.png">
                <div class="slider-caption">
                    <div class="tn-container">
                        <h1 class="caption-title">
                            <span>exceptional talent breeds</span>
                            <span>exceptional productivity</span>
                        </h1>
                        <p class="caption-description">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                        <div class="slider-subscription">
                            <form>
                                <input type="text" class="banner-subscription-input" placeholder="email address">
                                <input type="submit" value="submit now" class="banner-subscription-submit">
                            </form>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <img src="<?= get_img_url() ?>bannerimg.png">
                <div class="slider-caption">
                    <div class="tn-container">
                        <h1 class="caption-title">
                            <span>exceptional talent breeds</span>
                            <span>exceptional productivity</span>
                        </h1>
                        <p class="caption-description">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                        <div class="slider-subscription">
                            <form>
                                <input type="text" class="banner-subscription-input" placeholder="email address">
                                <input type="submit" value="submit now" class="banner-subscription-submit">
                            </form>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <img src="<?= get_img_url() ?>bannerimg.png">
                <div class="slider-caption">
                    <div class="tn-container">
                        <h1 class="caption-title">
                            <span>exceptional talent breeds</span>
                            <span>exceptional productivity</span>
                        </h1>
                        <p class="caption-description">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                    </div>
                    <div class="slider-subscription">
                        <form>
                            <input type="text" class="banner-subscription-input" placeholder="email address">
                            <input type="submit" value="submit now" class="banner-subscription-submit">
                        </form>
                    </div>
                </div>
            </li>-->
        </ul>
    </div>
</section>