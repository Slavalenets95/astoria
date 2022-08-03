<?php get_header() ?>

<main class="main">

    <?php
    if (have_rows('constructor')) {
        while (have_rows('constructor')) {
            the_row();
            $part = get_row_layout();
            get_template_part('template-parts/' . $part);
        }
    }
    ?>

</main>

<?php get_footer() ?>
