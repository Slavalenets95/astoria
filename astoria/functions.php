<?php
/**
 * euromedia functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package euromedia
 */

if (!defined('_S_VERSION')) {
    // Replace the version number of the theme on each release.
    define('_S_VERSION', '1.0.0');
}

function euromedia_setup()
{
    load_theme_textdomain('euromedia', get_template_directory() . '/languages');
    add_theme_support('automatic-feed-links');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    register_nav_menus(
        array(
            'menu-1' => esc_html__('Header Menu', 'header-menu'),
            'menu-2' => esc_html__('Footer Menu', 'footer-menu'),
        )
    );
    add_theme_support(
        'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
        )
    );
    add_theme_support(
        'custom-background',
        apply_filters(
            'euromedia_custom_background_args',
            array(
                'default-color' => 'ffffff',
                'default-image' => '',
            )
        )
    );
    add_theme_support('customize-selective-refresh-widgets');
    add_theme_support(
        'custom-logo',
        array(
            'height' => 250,
            'width' => 250,
            'flex-width' => true,
            'flex-height' => true,
        )
    );
}

add_action('after_setup_theme', 'euromedia_setup');

function euromedia_content_width()
{
    $GLOBALS['content_width'] = apply_filters('euromedia_content_width', 640);
}

add_action('after_setup_theme', 'euromedia_content_width', 0);

/**
 * Enqueue scripts and styles.
 */
function euromedia_scripts()
{
    wp_enqueue_style('reset-styles', get_template_directory_uri() . '/assets/css/reset.css', array(), _S_VERSION);
    wp_enqueue_style('slick-theme', get_template_directory_uri() . '/assets/lib/slick/slick-theme.css', array(), _S_VERSION);
    wp_enqueue_style('slick-styles', get_template_directory_uri() . '/assets/lib/slick/slick.css', array(), _S_VERSION);
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/fonts/fontawesome-free-6.1.1-web/css/all.min.css', array(), _S_VERSION);
    wp_enqueue_style('main-styles', get_template_directory_uri() . '/assets/css/styles.css', array(), _S_VERSION);
    wp_enqueue_script('slick-js', get_template_directory_uri() . '/assets/lib/slick/slick.js', array('jquery'), _S_VERSION);
    wp_enqueue_script('custom-js', get_template_directory_uri() . '/assets/js/custom.js', array('jquery', 'slick-js'), _S_VERSION);
}

add_action('wp_enqueue_scripts', 'euromedia_scripts');

add_filter('show_admin_bar', '__return_false');

add_action('init', 'register_post_types');
function register_post_types()
{
    register_post_type('news', [
        'label' => null,
        'labels' => [
            'name' => 'Новости', // основное название для типа записи
            'singular_name' => 'Новость', // название для одной записи этого типа
            'add_new' => 'Добавить новость', // для добавления новой записи
            'add_new_item' => 'Добавление новости', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item' => 'Редактирование новости', // для редактирования типа записи
            'new_item' => 'Новая новость', // текст новой записи
            'view_item' => 'Смотреть новость', // для просмотра записи этого типа.
            'search_items' => 'Искать новость', // для поиска по этим типам записи
            'not_found' => 'Не найдено', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
            'parent_item_colon' => '', // для родителей (у древовидных типов)
            'menu_name' => 'Новости', // название меню
        ],
        'description' => '',
        'public' => true,
        // 'publicly_queryable'  => null, // зависит от public
        // 'exclude_from_search' => null, // зависит от public
        // 'show_ui'             => null, // зависит от public
        // 'show_in_nav_menus'   => null, // зависит от public
        'show_in_menu' => null, // показывать ли в меню адмнки
        // 'show_in_admin_bar'   => null, // зависит от show_in_menu
        'show_in_rest' => null, // добавить в REST API. C WP 4.7
        'rest_base' => null, // $post_type. C WP 4.7
        'menu_position' => null,
        'menu_icon' => null,
        //'capability_type'   => 'post',
        //'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
        //'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
        'hierarchical' => false,
        'supports' => ['title', 'editor', 'thumbnail', 'excerpt'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'taxonomies' => [],
        'has_archive' => false,
        'rewrite' => true,
        'query_var' => true,
    ]);

    register_post_type('restaurant', [
        'label' => null,
        'labels' => [
            'name' => 'Ресторан', // основное название для типа записи
            'singular_name' => 'Ресторан - запись', // название для одной записи этого типа
            'add_new' => 'Добавить запись', // для добавления новой записи
            'add_new_item' => 'Добавление записи', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item' => 'Редактирование записи', // для редактирования типа записи
            'new_item' => 'Новая запиьс', // текст новой записи
            'view_item' => 'Смотреть запись', // для просмотра записи этого типа.
            'search_items' => 'Искать запись', // для поиска по этим типам записи
            'not_found' => 'Не найдено', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
            'parent_item_colon' => '', // для родителей (у древовидных типов)
            'menu_name' => 'Ресторан', // название меню
        ],
        'description' => '',
        'public' => true,
        // 'publicly_queryable'  => null, // зависит от public
        // 'exclude_from_search' => null, // зависит от public
        // 'show_ui'             => null, // зависит от public
        // 'show_in_nav_menus'   => null, // зависит от public
        'show_in_menu' => null, // показывать ли в меню адмнки
        // 'show_in_admin_bar'   => null, // зависит от show_in_menu
        'show_in_rest' => null, // добавить в REST API. C WP 4.7
        'rest_base' => null, // $post_type. C WP 4.7
        'menu_position' => null,
        'menu_icon' => null,
        //'capability_type'   => 'post',
        //'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
        //'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
        'hierarchical' => false,
        'supports' => ['title', 'editor', 'thumbnail', 'excerpt'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'taxonomies' => ['category'],
        'has_archive' => false,
        'rewrite' => true,
        'query_var' => true,
    ]);

    register_post_type('wedding', [
        'label' => null,
        'labels' => [
            'name' => 'Свадьбы', // основное название для типа записи
            'singular_name' => 'Свадьбы - запись', // название для одной записи этого типа
            'add_new' => 'Добавить запись', // для добавления новой записи
            'add_new_item' => 'Добавление записи', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item' => 'Редактирование записи', // для редактирования типа записи
            'new_item' => 'Новая запиьс', // текст новой записи
            'view_item' => 'Смотреть запись', // для просмотра записи этого типа.
            'search_items' => 'Искать запись', // для поиска по этим типам записи
            'not_found' => 'Не найдено', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
            'parent_item_colon' => '', // для родителей (у древовидных типов)
            'menu_name' => 'Свадьбы', // название меню
        ],
        'description' => '',
        'public' => true,
        // 'publicly_queryable'  => null, // зависит от public
        // 'exclude_from_search' => null, // зависит от public
        // 'show_ui'             => null, // зависит от public
        // 'show_in_nav_menus'   => null, // зависит от public
        'show_in_menu' => null, // показывать ли в меню адмнки
        // 'show_in_admin_bar'   => null, // зависит от show_in_menu
        'show_in_rest' => null, // добавить в REST API. C WP 4.7
        'rest_base' => null, // $post_type. C WP 4.7
        'menu_position' => null,
        'menu_icon' => null,
        //'capability_type'   => 'post',
        //'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
        //'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
        'hierarchical' => false,
        'supports' => ['title', 'editor', 'thumbnail', 'excerpt'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'taxonomies' => [],
        'has_archive' => true,
        'rewrite' => true,
        'query_var' => true,
    ]);

    register_post_type('events', [
        'label' => null,
        'labels' => [
            'name' => 'Мероприятия', // основное название для типа записи
            'singular_name' => 'Мероприятие', // название для одной записи этого типа
            'add_new' => 'Добавить запись', // для добавления новой записи
            'add_new_item' => 'Добавление записи', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item' => 'Редактирование записи', // для редактирования типа записи
            'new_item' => 'Новая запиьс', // текст новой записи
            'view_item' => 'Смотреть запись', // для просмотра записи этого типа.
            'search_items' => 'Искать запись', // для поиска по этим типам записи
            'not_found' => 'Не найдено', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
            'parent_item_colon' => '', // для родителей (у древовидных типов)
            'menu_name' => 'Мероприятия', // название меню
        ],
        'description' => '',
        'public' => true,
        // 'publicly_queryable'  => null, // зависит от public
        // 'exclude_from_search' => null, // зависит от public
        // 'show_ui'             => null, // зависит от public
        // 'show_in_nav_menus'   => null, // зависит от public
        'show_in_menu' => null, // показывать ли в меню адмнки
        // 'show_in_admin_bar'   => null, // зависит от show_in_menu
        'show_in_rest' => null, // добавить в REST API. C WP 4.7
        'rest_base' => null, // $post_type. C WP 4.7
        'menu_position' => null,
        'menu_icon' => null,
        //'capability_type'   => 'post',
        //'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
        //'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
        'hierarchical' => false,
        'supports' => ['title', 'editor', 'thumbnail', 'excerpt'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'taxonomies' => [],
        'has_archive' => true,
        'rewrite' => true,
        'query_var' => true,
    ]);
}

if (function_exists('acf_add_options_page')) {
    acf_add_options_page(array(
        'page_title' => 'Основные настройки',
        'menu_title' => 'Настройки темы',
        'menu_slug' => 'theme-general-settings',
        'capability' => 'edit_posts',
        'redirect' => false
    ));
}

add_filter('bcn_add_post_type_arg', 'my_add_post_type_arg_filt', 10, 3);
function my_add_post_type_arg_filt($add_query_arg, $type, $taxonomy)
{
    return false;
}

add_action('after_setup_theme', 'mywoo_add_woocommerce_support');
function mywoo_add_woocommerce_support()
{
    add_theme_support('woocommerce');
}

add_filter('mime_types', 'dd_add_jfif_files');
function dd_add_jfif_files($mimes)
{
    $mimes['jfif'] = "image/jpeg";
    return $mimes;
}

add_filter('woocommerce_enqueue_styles', 'jk_dequeue_styles');
function jk_dequeue_styles($enqueue_styles)
{
    unset($enqueue_styles['woocommerce-general']);    // Remove the gloss
    unset($enqueue_styles['woocommerce-layout']);        // Remove the layout
    unset($enqueue_styles['woocommerce-smallscreen']);    // Remove the smallscreen optimisation
    return $enqueue_styles;
}

// Or just remove them all in one line
add_filter('woocommerce_enqueue_styles', '__return_false');

remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar', 10);
add_filter('woocommerce_subcategory_count_html', '__return_null');
add_filter('woocommerce_show_page_title', 'woocommerce_archive_page_title');
add_action('woocommerce_after_main_content', 'get_contact_block', 20);
add_action('woocommerce_after_main_content', 'get_news_block', 30);

function get_contact_block()
{
    get_template_part('template-parts/contact-block');
    get_template_part('template-parts/contact-form');
}

function get_news_block()
{
    get_template_part('template-parts/news-section');
}

function woocommerce_archive_page_title()
{
    if (is_shop()) {
        return null;
    } else {
        return true;
    }
}

remove_action('woocommerce_before_shop_loop', 'woocommerce_result_count', 20);
remove_action('woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30);


//add_action('wp', 'prevent_access_to_product_page');
//function prevent_access_to_product_page()
//{
//    if (is_product()) {
//        $shop_page_url = get_permalink(wc_get_page_id('shop'));
//        wp_redirect($shop_page_url);
//    }
//}

remove_action('woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open', 10);
remove_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_product_link_close', 5);
add_action('woocommerce_before_shop_loop_item', 'woo_before_shop_loop_item', 15);

function woo_before_shop_loop_item()
{
    echo '<div>';
}


add_filter('loop_shop_per_page', 'new_loop_shop_per_page', 20);
function new_loop_shop_per_page($cols)
{
    $cols = 999;
    return $cols;
}

add_filter('woocommerce_currency_symbol', 'change_rub_currency_symbol', 10, 2);
function change_rub_currency_symbol($currency_symbol, $currency)
{
    switch ($currency) {
        case'BYN':
            $currency_symbol = 'BYN';
            break;
    }
    return $currency_symbol;
}

add_filter('woocommerce_after_shop_loop_item', 'wpspec_show_product_description', 1);

function wpspec_show_product_description()
{
    echo '<div class="woo-product-short-desc">' . get_the_excerpt() . '</div>';
}

function add_my_custom_product_to_cart($data)
{
    $id = $_POST['id'];
    $cartActive = $_POST['cartActive'];

    $cart_item_key = WC()->cart->add_to_cart($id);
    if (!$cart_item_key) {
        wp_send_json(['status' => 'error', 'message' => 'Add to cart failed']);
    } else {
        $data = [];
        $data['totalAmount'] = WC()->cart->get_cart_contents_total();
        $data['count'] = WC()->cart->get_cart_contents_count();
        get_template_part('template-parts/woocommerce/card', 'body', ['cartActive' => $cartActive]);
        $data['output'] = ob_get_contents();
        ob_end_clean();
        wp_send_json(['status' => 'ok', 'cart_item_key' => $cart_item_key, 'message' => 'Add to cart success', 'data' => $data]);
        die();
    }
}

add_action('wp_ajax_nopriv_add_my_custom_product_to_cart_action', 'add_my_custom_product_to_cart');
add_action('wp_ajax_add_my_custom_product_to_cart_action', 'add_my_custom_product_to_cart');

function remove_cart_item()
{
    $id = $_POST['id'];
    $cartActive = $_POST['cartActive'];
    $product = wc_get_product($id);
    $currentQuantity = get_cart_quantity($product);

    foreach (WC()->cart->get_cart() as $cart_item_key => $cart_item) {
        if ($cart_item['product_id'] == $id) {
            if ($currentQuantity == 1) {
                WC()->cart->remove_cart_item($cart_item_key);
            } else {
                WC()->cart->set_quantity($cart_item_key, $currentQuantity - 1);
            }
            $data['totalAmount'] = WC()->cart->get_cart_contents_total();
            $data['count'] = WC()->cart->get_cart_contents_count();
            get_template_part('template-parts/woocommerce/card', 'body', ['cartActive' => $cartActive]);
            $data['output'] = ob_get_contents();
            ob_end_clean();
            wp_send_json(['status' => 'ok', 'cart_item_key' => $cart_item_key, 'data' => $data]);
            die();
        }
    }
}

add_action('wp_ajax_nopriv_remove_cart_item_action', 'remove_cart_item');
add_action('wp_ajax_remove_cart_item_action', 'remove_cart_item');

add_filter('woocommerce_get_breadcrumb', function ($crumbs, $Breadcrumb) {
    $shop_page_id = wc_get_page_id('shop'); //Get the shop page ID
    if ($shop_page_id > 0 && !is_shop()) { //Check we got an ID (shop page is set). Added check for is_shop to prevent Home / Shop / Shop as suggested in comments
        $new_breadcrumb = [
            _x('Меню', 'breadcrumb', 'woocommerce'), //Title
            get_permalink(wc_get_page_id('shop')) // URL
        ];
        array_splice($crumbs, 1, 0, [$new_breadcrumb]); //Insert a new breadcrumb after the 'Home' crumb
    }
    return $crumbs;
}, 10, 2);

function get_cart_quantity($product)
{
    $currentQuantity = null;

    foreach ( WC()->cart->get_cart() as $cart_item ) {

        $item = $cart_item['data'];

        if(!empty($item) && $item->id == $product->id) {
            $currentQuantity = $cart_item['quantity'];
        }
    }

    return $currentQuantity;
}

