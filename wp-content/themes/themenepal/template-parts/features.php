<?php
    $awesomeDesign = get_option('_tn_awesome_design');
    $awesomeDesign = $awesomeDesign['awesomeDesign'];
?>
<section id="features">
    <div class="feature-wrap">
        <div class="tn-container">
            <h1 class="feature-title">
                <?= $awesomeDesign['title_first']; ?><span><?= $awesomeDesign['title_second']; ?></span>
            </h1>
            <div class="feature-description">
                <?= $awesomeDesign['description']; ?>
            </div>

            <div class="feature-content clearfix">
                <?php
                if(!isset($awesomeDesign['repeater_block']['repeater_title'])):
                    $awesomeDesign['repeater_block']['repeater_title'][]=null;
                endif;
                $repeaterBlock = $awesomeDesign['repeater_block'];
                $i=0;
                foreach($repeaterBlock['repeater_title'] as $index=>$value):
                    $i++;
                ?>
                <div class="feature-box box-<?=$i;?>">
                    <div class="feature-box-icon">

                    </div>
                    <h1 class="feature-box-title">
                        <?= $repeaterBlock['repeater_title'][$index]; ?>
                    </h1>
                    <div class="feature-box-description">
                        <?= $repeaterBlock['repeater_description'][$index]; ?>
                    </div>
                </div>
                <?php
                    endforeach;
                ?>
<!--                <div class="feature-box box-2">
                    <div class="feature-box-icon">

                    </div>
                    <h1 class="feature-box-title">
                        responsive layout
                    </h1>
                    <div class="feature-box-description">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit
                    </div>
                </div>
                <div class="feature-box box-3`">
                    <div class="feature-box-icon">

                    </div>
                    <h1 class="feature-box-title">
                        advanced features
                    </h1>
                    <div class="feature-box-description">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit
                    </div>
                </div>-->
            </div>
        </div>
    </div>
</section>