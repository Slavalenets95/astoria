<div class="contact-block">
    <div class="container">
        <div class="contact-block__content">
            <div class="contact-block__title"><?= get_field('contact_title', 'options') ?></div>
            <?php $items = get_field('contact_block_items', 'options'); ?>
            <?php if ($items) : ?>
                <?php foreach ($items as $item) : $cards = $item['cards']; ?>
                    <div class="contact-block__item">
                        <?php foreach ($cards as $card) : ?>
                            <div class="contact-block__card">
                                <h4 class="contact-block__card-title"><?= $card['title'] ?></h4>
                                <?= $card['content'] ?>
                            </div>
                        <?php endforeach ?>
                    </div>
                <?php endforeach ?>
            <?php endif ?>
        </div>
        <div class="contact-block__map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d150505.9295830918!2d27.453285966964415!3d53.884558462698536!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46dbcfd35b1e6ad3%3A0xb61b853ddb570d9!2z0JzQuNC90YHQug!5e0!3m2!1sru!2sby!4v1653483753644!5m2!1sru!2sby"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</div>