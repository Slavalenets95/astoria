<?php
$items = get_sub_field('repeater');
?>

<div class="wedding-cards">
    <div class="container">
        <?php foreach ($items as $item) : ?>
            <h2 id="#<?= $item['id'] ?>" class="wedding-post__title"><?= $item['title'] ?></h2>
            <div class="wedding-content wedding-content--left">
                <div class="wedding-content__img-block">
                    <img src="<?= $item['img'] ?>">
                </div>
                <div class="wedding-content__txt-block sd">
                    <?= $item['content'] ?>
                </div>
            </div>
            <div class="wedding-content wedding-content--right wedding-content--bordered">
                <div class="wedding-content__img-block">
                    <img src="<?= $item['second_img'] ?>">
                </div>
                <div class="wedding-content__txt-block sd">
                    <?= $item['second_content'] ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
