<?php get_header() ?>

<div class="video-section">
    <video loop muted autoplay="autoplay" class="video-section__video">
        <source src="<?= get_template_directory_uri() ?>/assets/video/video.mp4" type="video/mp4">
    </video>
</div>


<section class="home-content">
    <div class="container">
        <div class="home-content__txt-block">
            <h2 class="home-content__title"><?= get_field('content_title') ?></h2>
            <div class="home-content__txt">
                <?= get_field('content') ?>
            </div>
        </div>
        <div class="home-content__img-block">
            <img src="<?= get_field('content_img-1') ?>">
            <img src="<?= get_field('content_img-2') ?>">
        </div>
    </div>
</section>


<?php if (get_field('home_slider')) : ?>
    <section class="slider-section home-slider-wrapper">
        <div class="home-slider">
            <?php foreach (get_field('home_slider') as $item) : ?>
                <div class="home-slide">
                    <img src="<?= $item['img'] ?>">
                </div>
            <?php endforeach ?>
        </div>
    </section>
<?php endif ?>


<?php get_template_part('template-parts/news-section') ?>

<?php get_template_part('template-parts/contact-block') ?>

<?php get_template_part('template-parts/contact-form') ?>

<?php get_footer() ?>
