<?php
$news = get_posts(array(
    'numberposts' => 5,
    'category' => 0,
    'orderby' => 'date',
    'order' => 'DESC',
    'include' => array(),
    'exclude' => array(),
    'meta_key' => '',
    'meta_value' => '',
    'post_type' => 'news',
    'suppress_filters' => true,
));
if (count($news)) : ?>
    <div class="stock-block">
        <div class="container">
            <div class="stock-block__header">
                <h2 class="stock-block__title">Новости</h2>
                <a href="<?= get_post_type_archive_link('news') ?>" class="stock-block__header-link">Смотреть все</a>
            </div>
            <div class="stock-cards">
                <?php foreach ($news as $post) : setup_postdata($post); ?>

                    <div class="stock-card">
                        <a href="<?= get_permalink() ?>" class="stock-card__header">
                            <img src="<?= get_the_post_thumbnail_url() ?>" class="stock-card__img">
                        </a>
                        <div class="stock-card__body">
                            <h3 class="stock-card__title"><?= get_the_title() ?></h3>
                            <p class="stock-card__description"><?= get_the_excerpt() ?></p>
                        </div>
                        <div class="stock-card__footer">
                            <a href="<?= get_permalink() ?>" class="stock-card__link">подробнее</a>
                        </div>
                    </div>

                <?php
                endforeach;
                wp_reset_postdata();
                ?>
            </div>
        </div>
    </div>
<?php
endif;
?>