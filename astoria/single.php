<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package euromedia
 */

get_header();
?>

	<main id="primary" class="site-main">
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

<?php
get_footer();
