<?php
$items = get_sub_field('gazebos_repeater');
?>

<div class="gazebos">
    <div class="container">
        <?php foreach($items as $item) : ?>
            <div class="gazebos-item">
                <div class="gazebos-item__img-block sd">
                    <div class="gazebos-item__img-block-header">
                        <h3><?= $item['title'] ?></h3>
                    </div>
                    <div class="gazebos-item__slider">
                        <?php foreach($item['imgs_repeater'] as $img) : ?>
                            <div class="gazebos-item__slider-item">
                                <img src="<?= $img['img'] ?>">
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="gazebos-item__content-block sd">
                    <?= $item['content'] ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
