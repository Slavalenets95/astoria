<?php
$items = get_sub_field('repeater');
?>

<div>
    <div class="container">
        <?php foreach ($items as $item) : ?>
            <div class="wedding-content <?= $item['css_class'] ?>">
                <div class="wedding-content__img-block">
                    <p class="wedding-content__img-block-title"><?= $item['title'] ?></p>
                    <img src="<?= $item['img'] ?>">
                </div>
                <div class="wedding-content__txt-block sd" style="padding-top: 70px;">
                    <?= $item['content'] ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

