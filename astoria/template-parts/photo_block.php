<?php
$items = get_sub_field('repeater');
?>

<div class="photo-block">
    <div class="container">
        <div class="photo-block__items">
            <?php foreach ($items as $item) : ?>
                <div class="photo-block__item">
                    <img src="<?= $item['img'] ?>" class="photo-block__img">
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
