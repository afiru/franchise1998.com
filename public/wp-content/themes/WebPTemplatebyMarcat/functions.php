<?php

/**
 * Theme Functions – Final Optimized Version (Google Fonts 追加)
 * WP6.x / PHP8.x
 */

/* =====================================================
 * 基本設定
 * ===================================================== */
add_filter('big_image_size_threshold', '__return_false');
add_theme_support('post-thumbnails');
add_filter('jetpack_implode_frontend_css', '__return_false');

/* =====================================================
 * 不要な head 要素を削除
 * ===================================================== */
remove_action('wp_head', 'rest_output_link_wp_head');
remove_action('wp_head', 'wp_oembed_add_discovery_links');
remove_action('wp_head', 'wp_oembed_add_host_js');
remove_action('wp_head', 'wp_generator');

/* =====================================================
 * 不要CSS削除
 * ===================================================== */
add_action('wp_enqueue_scripts', function () {
    wp_dequeue_style('wp-block-library');
    wp_dequeue_style('dashicons');
    wp_dequeue_style('wp-pagenavi');
    wp_dequeue_style('addtoany');
    wp_dequeue_style('bodhi-svgs-attachment');
}, 100);

/* =====================================================
 * JS / CSS 読み込み
 * ===================================================== */
add_action('wp_enqueue_scripts', function () {

    // 1. Google Fonts
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Fredoka:wght@300;400;500;600;700&family=Shippori+Mincho+B1:wght@400;500;600;700;800&family=Cormorant+Unicase:wght@300;400;500;600;700&family=Zen+Kaku+Gothic+New:wght@300;400;500;700;900&display=swap', [], null);
    // 2. jQuery (CDN)
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery.min.js', [], null, true);

    // 3. Lenis (CDN)
    wp_enqueue_script('lenis', get_template_directory_uri() . '/js/lenis.min.js', [], null, true);

    // 4. Swiper (CDN)
    wp_enqueue_style('swiper-css', get_template_directory_uri() . '/css/swiper-bundle.min.css');
    wp_enqueue_script('swiper-js', get_template_directory_uri() . '/js/swiper-bundle.min.js', [], null, true);

    // 5. Theme CSS
    wp_enqueue_style('theme-common', get_template_directory_uri() . '/css/common.css', [], filemtime(get_template_directory() . '/css/common.css'));

    // 6. Theme JS (config.js)
    // ここで lenis と swiper-js への依存を明記します
    wp_enqueue_script(
        'theme-config',
        get_template_directory_uri() . '/js/config.js',
        ['jquery', 'lenis', 'swiper-js'],
        filemtime(get_template_directory() . '/js/config.js'),
        true
    );
}, 20);
/* =====================================================
 * defer 制御（絶対にURLを壊さない決定版）
 * ===================================================== */
add_filter('script_loader_tag', function ($tag, $handle) {
    // 自分の JS だけを指定
    $target_handles = ['lenis', 'swiper-js', 'theme-config'];

    if (in_array($handle, $target_handles, true)) {
        // もしすでに defer が付いていたら何もしない
        if (strpos($tag, ' defer') !== false) {
            return $tag;
        }
        // <script の直後に defer を差し込む。
        // これなら src や ver の中のクォートを壊す心配がありません。
        return str_replace('<script ', '<script defer ', $tag);
    }
    return $tag;
}, 10, 2);

/* =====================================================
 * Recent Comments CSS 削除
 * ===================================================== */
add_action('widgets_init', function () {
    global $wp_widget_factory;
    if (isset($wp_widget_factory->widgets['WP_Widget_Recent_Comments'])) {
        remove_action(
            'wp_head',
            [$wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style']
        );
    }
});

// WordPress 5.3+ の big image サイズ自動縮小無効
add_filter('big_image_size_threshold', '__return_false');


/* =====================================================
 * 子カテゴリーでも親テンプレートを使う
 * ===================================================== */
add_filter('category_template', 'my_category_template');
function my_category_template($template)
{
    $category = get_queried_object();

    if ($category && $category->parent) {
        $templates = [];
        while ($category->parent) {
            $category = get_category($category->parent);
            if (!isset($category->slug)) break;
            $templates[] = "category-{$category->slug}.php";
            $templates[] = "category-{$category->term_id}.php";
        }
        $templates[] = 'category.php';
        $located = locate_template($templates);
        if ($located) return $located;
    }
    return $template;
}

/* =====================================================
 * 子カテゴリー判定
 * ===================================================== */
function post_is_in_descendant_category($cats, $_post = null)
{
    foreach ((array)$cats as $cat) {
        $descendants = get_term_children((int)$cat, 'category');
        if ($descendants && in_category($descendants, $_post)) {
            return true;
        }
    }
    return false;
}

/* =====================================================
 * 投稿ビュー数
 * ===================================================== */
function get_post_views($postID)
{
    return (int)get_post_meta($postID, 'post_views_count', true);
}

function set_post_views($postID)
{
    $count = (int)get_post_meta($postID, 'post_views_count', true);
    update_post_meta($postID, 'post_views_count', $count + 1);
}

/* =====================================================
 * kses srcset 許可
 * ===================================================== */
add_filter('wp_kses_allowed_html', function ($tags, $context) {
    $tags['img']['srcset'] = true;
    $tags['source']['srcset'] = true;
    $tags['source']['data-srcset'] = true;
    return $tags;
}, 10, 2);

/* =====================================================
 * 画像系ヘルパー
 * ===================================================== */
function get_post_thumbsdata($postID)
{
    return wp_get_attachment_image_src(get_post_thumbnail_id($postID), 'full');
}

function get_post_custom_thumbsdata($thumbnail_id)
{
    return wp_get_attachment_image_src($thumbnail_id, 'full');
}

function get_scf_img_url($name)
{
    return wp_get_attachment_image_src(SCF::get($name), 'full');
}

function get_scf_img_loop_url($name)
{
    return wp_get_attachment_image_src($name, 'full');
}

function get_scf_img_url_id($name, $post_id)
{
    return wp_get_attachment_image_src(SCF::get($name), 'full');
}

function get_scf_img_loop_url_id($name)
{
    return wp_get_attachment_image_src($name, 'full');
}

function get_thumb_url($size = 'full', $post_id = null)
{
    $post_id = $post_id ?: get_the_ID();
    if (!has_post_thumbnail($post_id)) return false;
    return wp_get_attachment_image_src(get_post_thumbnail_id($post_id), $size);
}

/* =====================================================
 * 文字数制限
 * ===================================================== */
function stringOverFlow($strings, $length)
{
    $output = strip_tags($strings);
    $output = preg_replace('/(\s\s|　|&nbsp;)/', '', $output);
    return mb_strimwidth($output, 0, $length, '...', 'UTF-8');
}

/* =====================================================
 * カテゴリースラッグを class に付与
 * ===================================================== */
function category_id_class($classes)
{
    if (is_singular()) {
        foreach (get_the_category() as $cat) {
            $classes[] = esc_attr($cat->slug);
        }
    }
    return $classes;
}
add_filter('post_class', 'category_id_class');
add_filter('body_class', 'category_id_class');

/* =====================================================
 * AIOSEO デフォルトOG画像
 * ===================================================== */
function get_aioseo_global_og_image()
{
    $json = get_option('aioseo_options');
    $aioseo = json_decode($json, true);
    return $aioseo['social']['facebook']['general']['defaultImagePosts']
        ?? $aioseo['social']['twitter']['general']['defaultImagePosts']
        ?? false;
}

/* =====================================================
 * カテゴリーページ ItemList JSON-LD
 * ===================================================== */
add_action('wp_head', function () {

    if (!is_category()) return;

    $paged = max(1, get_query_var('paged'));
    $ppp   = get_query_var('posts_per_page');
    $pos   = ($paged - 1) * $ppp + 1;

    $items = [];

    while (have_posts()) {
        the_post();
        $items[] = [
            '@type' => 'ListItem',
            'position' => $pos++,
            'url' => get_permalink(),
            'name' => get_the_title(),
            'image' => has_post_thumbnail()
                ? get_the_post_thumbnail_url(null, 'full')
                : get_aioseo_global_og_image(),
            'datePublished' => get_the_date('c'),
        ];
    }
    wp_reset_postdata();

    echo '<script type="application/ld+json">' .
        wp_json_encode([
            '@context' => 'https://schema.org',
            '@type' => 'ItemList',
            'itemListElement' => $items
        ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) .
        '</script>';
});


function get_genre_cats($parent_id = 15, $post_id = null)
{

    if (!$post_id) {
        $post_id = get_the_ID();
    }

    $categories = get_the_category($post_id);

    if (!$categories) return '';

    foreach ($categories as $cat) {

        // 直下カテゴリならそのまま返す
        if ($cat->parent == $parent_id) {
            return $cat->name;
        }

        // 親をたどる
        $current_id = $cat->parent;

        while ($current_id) {
            $parent = get_category($current_id);

            if ($parent->parent == $parent_id) {
                return $parent->name;
            }

            $current_id = $parent->parent;
        }
    }

    return '';
}
/*
■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
 * お買い物ガイド・よくあるご質問用のカスタムフィールドを設定
■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
 */
add_action('init', 'faq_init');
function faq_init()
{
    $labels = array(
        'name'               => _x('お買い物ガイド・よくあるご質問', 'post type general name', 'your-plugin-textdomain'),
        'singular_name'      => _x('お買い物ガイド・よくあるご質問', 'post type singular name', 'your-plugin-textdomain'),
        'menu_name'          => _x('お買い物ガイド・よくあるご質問', 'your-plugin-textdomain'),
        'name_admin_bar'     => _x('お買い物ガイド・よくあるご質問', 'add new on admin bar', 'your-plugin-textdomain'),
        'add_new'            => _x('お買い物ガイド・よくあるご質問を新規登録', 'blog', 'your-plugin-textdomain'),
        'add_new_item'       => __('お買い物ガイド・よくあるご質問を新規登録', 'your-plugin-textdomain'),
        'new_item'           => __('お買い物ガイド・よくあるご質問を新規登録', 'your-plugin-textdomain'),
        'edit_item'          => __('お買い物ガイド・よくあるご質問を編集', 'your-plugin-textdomain'),
        'view_item'          => __('お買い物ガイド・よくあるご質問を見る', 'your-plugin-textdomain'),
        'all_items'          => __('すべてのお買い物ガイド・よくあるご質問', 'your-plugin-textdomain'),
        'search_items'       => __('お買い物ガイド・よくあるご質問を探す', 'your-plugin-textdomain'),
        'parent_item_colon'  => __('Parent お買い物ガイド・よくあるご質問:', 'your-plugin-textdomain'),
        'not_found'          => __('No books found.', 'your-plugin-textdomain'),
        'not_found_in_trash' => __('No books found in Trash.', 'your-plugin-textdomain')
    );
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'faqs'),
        'capability_type'    => 'post',
        'show_in_rest' => true,
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 4,
        'supports'           => array('title', 'thumbnail', 'editor')
    );
    register_post_type('faqs', $args);
}
function create_taxonomyFaqs()
{
    register_taxonomy(
        'faq_category',
        'faqs',
        array(
            'show_in_rest' => true,
            'label' => __('お買い物ガイド・よくあるご質問区分'), //管理画面に表示されるラベル
            'hierarchical' => true //trueだとカテゴリー、falseだとタグ
        )
    );
}
add_action('init', 'create_taxonomyFaqs');
