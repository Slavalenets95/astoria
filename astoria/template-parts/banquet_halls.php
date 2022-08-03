<?php
$args = array(
    'numberposts' => -1,
    'category' => '17',
    'orderby' => 'date',
    'order' => 'DESC',
    'include' => array(),
    'exclude' => array(),
    'meta_key' => '',
    'meta_value' => '',
    'post_type' => 'restaurant',
    'suppress_filters' => true,
);

$posts = get_posts($args);
?>

<div class="rooms">
    <div class="container">
        <div class="rooms-cards">
            <?php foreach ($posts as $item) :
                $excerptItems = get_field('excerpt_items', $item);
                ?>

                <div class="room-card">
                    <a href="<?= get_the_permalink($item) ?>" class="room-card__header">
                        <img src="<?= get_the_post_thumbnail_url($item) ?>">
                    </a>
                    <div class="room-card__body">
                        <h3 class="room-card__body-title"><?= get_the_title($item) ?></h3>
                        <?php if ($excerptItems) : ?>
                            <ul class="room-card__body-list">
                                <?php foreach ($excerptItems as $item) : ?>
                                    <li class="room-card__body-item"><?= $item['content'] ?></li>
                                <?php endforeach ?>
                            </ul>
                        <?php endif ?>
                    </div>
                    <div class="room-card__footer">
                        <a href="<?= get_the_permalink($item) ?>" class="room-card__footer-link">
                            подробнее
                        </a>
                    </div>
                </div>

            <?php
                endforeach;
            ?>
        </div>
    </div>
</div>
