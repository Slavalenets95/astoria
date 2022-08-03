<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package euromedia
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bad+Script&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
    <script type="text/javascript">
        var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";
    </script>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
    <header class="header <?= is_front_page() ? 'front-header' : '' ?>">
        <div class="container">
            <div class="header-top">
                <div class="header-logo">
                    <a href="<?= get_home_url() ?>" class="header-logo__link">
                        <img src="<?= get_template_directory_uri() ?>/assets/images/logo.png" alt="Логотип" class="header-logo__img">
                    </a>
                </div>
                <div class="header-social">
                    <ul class="social-list">
                        <li class="social-list__item">
                            <a href="#" class="social-list__link">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                        </li>
                        <li class="social-list__item">
                            <a href="#" class="social-list__link">
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>
                        </li>
                        <li class="social-list__item">
                            <a href="#" class="social-list__link">
                                <i class="fa-brands fa-vk"></i>
                            </a>
                        </li>
                        <li class="social-list__item">
                            <a href="#" class="social-list__link">
                                <i class="fa-brands fa-telegram"></i>
                            </a>
                        </li>
                        <li class="social-list__item">
                            <a href="#" class="social-list__link">
                                <i class="fa-solid fa-phone"></i>
                            </a>
                        </li>
                    </ul>
                    <button class="header-bottom__menu-btn">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M17 14C17.5523 14 18 14.4477 18 15C18 15.5523 17.5523 16 17 16H3C2.44772 16 2 15.5523 2 15C2 14.4477 2.44772 14 3 14H17ZM17 9C17.5523 9 18 9.44772 18 10C18 10.5523 17.5523 11 17 11H3C2.44772 11 2 10.5523 2 10C2 9.44772 2.44772 9 3 9H17ZM17 4C17.5523 4 18 4.44772 18 5C18 5.55228 17.5523 6 17 6H3C2.44772 6 2 5.55228 2 5C2 4.44772 2.44772 4 3 4H17Z" fill="white"/>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="header-bottom">
                <?php
                wp_nav_menu([
                    'theme_location' => 'menu-1',
                    'menu' => 'menu-1',
                    'container' => 'nav',
                    'container_class' => 'header-nav',
                    'container_id' => '',
                    'menu_class' => '',
                    'menu_id' => '',
                    'echo' => true,
                    'fallback_cb' => 'wp_page_menu',
                    'before' => '',
                    'after' => '',
                    'link_before' => '',
                    'link_after' => '',
                    'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    'depth' => 0,
                    'walker' => '',
                ]);
                ?>
            </div>
        </div>
        <div class="mobile-menu">
            <button class="mobile-menu__back-btn"> <svg xmlns="http://www.w3.org/2000/svg" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" image-rendering="optimizeQuality" fill-rule="evenodd" clip-rule="evenodd" viewBox="0 0 500 511.61"><path fill-rule="nonzero" d="m218.54 261.95 15.5 101.27c.56 3.8-.47 7.81-3.19 10.93-4.92 5.64-13.5 6.24-19.14 1.32L4.64 195.09l-1.53-1.59c-4.77-5.76-3.96-14.32 1.8-19.08L211.98 3.08c2.99-2.41 6.96-3.59 11.03-2.87 7.34 1.31 12.22 8.35 10.91 15.69l-15.44 85.83c17.97 2.09 37.59 6.57 57.77 13.36 52.66 17.69 109.96 51.41 153.32 100.33 43.79 49.39 73.45 114.21 70.18 193.61-1.17 28.92-6.76 59.73-17.63 92.34-1.34 5.29-5.82 9.46-11.55 10.14-7.44.88-14.19-4.44-15.06-11.87-11.94-100.09-50.53-158.11-98.25-191.8-42.66-30.12-93.19-41.36-138.72-45.89z"></path></svg> </button>
            <button class="mobile-menu__close-svg"> <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" width="121.31px" height="122.876px" viewBox="0 0 121.31 122.876" enable-background="new 0 0 121.31 122.876" xml:space="preserve"><g><path fill-rule="evenodd" clip-rule="evenodd" d="M90.914,5.296c6.927-7.034,18.188-7.065,25.154-0.068 c6.961,6.995,6.991,18.369,0.068,25.397L85.743,61.452l30.425,30.855c6.866,6.978,6.773,18.28-0.208,25.247 c-6.983,6.964-18.21,6.946-25.074-0.031L60.669,86.881L30.395,117.58c-6.927,7.034-18.188,7.065-25.154,0.068 c-6.961-6.995-6.992-18.369-0.068-25.397l30.393-30.827L5.142,30.568c-6.867-6.978-6.773-18.28,0.208-25.247 c6.983-6.963,18.21-6.946,25.074,0.031l30.217,30.643L90.914,5.296L90.914,5.296z"></path></g></svg> </button>
            <div class="mobile-menu__header">
                <span>Меню</span>
            </div>
            <div class="mobile-menu__item">
                <?php
                wp_nav_menu( [
                    'theme_location'  => 'menu-1',
                    'menu'            => 'menu-1',
                    'container'       => 'nav',
                    'container_class' => 'mobile-nav',
                    'container_id'    => '',
                    'menu_class'      => 'menu',
                    'menu_id'         => '',
                    'echo'            => true,
                    'fallback_cb'     => 'wp_page_menu',
                    'before'          => '',
                    'after'           => '',
                    'link_before'     => '',
                    'link_after'      => '',
                    'items_wrap'      => '<ul>%3$s</ul>',
                    'depth'           => 0,
                    'walker'          => '',
                ] );
                ?>
            </div>
            <div class="mobile-menu__footer">

            </div>
        </div>
    </header>
    <?php if(is_shop()) {
            get_template_part('template-parts/woocommerce/shop_page_header');
    }
    ?>

    <?php if(is_product_category())  {
        get_template_part('template-parts/woocommerce/card-body');
    }
    ?>
