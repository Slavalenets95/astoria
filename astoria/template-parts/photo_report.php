<?php
$items = get_sub_field('repeater');
?>

<div class="photo-report">
    <div class="container">
        <?php foreach ($items as $item) : ?>
            <div class="item">
                <div class="item-header">
                    <h2 class="item-header__title"><?= $item['title'] ?></h2>
                </div>
                <div class="item-slider">
                    <?php foreach($item['img_repeater'] as $slide) : ?>
                        <div class="slide">
                            <img src="<?= $slide['img'] ?>" class="slide-img">
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="item-footer sd">
                    <?= $item['footer_content'] ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
