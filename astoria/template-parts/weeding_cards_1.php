<?php
$items = get_sub_field('weeding_repeater');
$headerTitle = get_sub_field('header_title');
?>

<div class="wedding-post__choose">
    <div class="container">
        <div class="wedding-post__chose-header">
            <h2><?= $headerTitle ?></h2>
        </div>
        <div class="choose-cards">
            <?php foreach($items as $item) : ?>
                <a href="<?= $item['link'] ?>" class="choose-card">
                    <img src="<?= $item['img']['url'] ?>" class="choose-img">
                    <h3 class="choose-title"><?= $item['title'] ?></h3>
                </a>
            <?php endforeach ?>
        </div>
    </div>
</div>
