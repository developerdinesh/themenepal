<?php
$outstandingSolution = get_option('_tn_outstanding_solution');
?>
<section id="our-value">
    <div class="our-value-wrap" style="background-image:url(<?= $outstandingSolution['image_url'] ?>);>
        <div class="tn-container">
            <h1 class="our-value-title">
                <?= $outstandingSolution['title_first']; ?>
            </h1>
            <h4 class="our-value-sub-title">
                <?= $outstandingSolution['title_second']; ?>
            </h4>
            <div class="our-value-description">
                <?= $outstandingSolution['description']; ?>
            </div>
            <div class="our-value-links">
                <a href="<?= $outstandingSolution['button_first_link']; ?>"><?= $outstandingSolution['button_first_level']; ?></a>
                <a href="<?= $outstandingSolution['button_second_link']; ?>"><?= $outstandingSolution['button_second_level']; ?></a>
            </div>
        </div>
    </div>
</section>
