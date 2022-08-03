<?php
$items = get_sub_field('photo_slider_repeater');
$headerContent = get_sub_field('photo_slider_header');
?>

<div class="room-post__slider-wrapper sd">
    <div class="container">
        <div class="room-post__slider-header">
            <?= $headerContent ?>
        </div>
        <div class="room-post__slider">
            <?php foreach ($items as $item) : ?>
                <div class="room-post__slide">
                    <img src="<?= $item['img'] ?>">
                </div>
            <?php endforeach ?>
        </div>
    </div>
</div>