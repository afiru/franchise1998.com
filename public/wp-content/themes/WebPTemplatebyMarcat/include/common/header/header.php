<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="format-detection" content="telephone=no">
  <meta name="copyright" content="<?php bloginfo('name'); ?>">

  <?php
  // Author
  $user = get_user_by('id', 1);
  if (!empty($user->first_name)) :
  ?>
    <meta name="author" content="<?php echo esc_attr($user->first_name . $user->last_name); ?>">
  <?php endif; ?>

  <?php
  /* =====================================================
 * Title（既存ロジック尊重）
 * ===================================================== */
  ?>
  <title><?php echo esc_html(get_the_site_title(get_php_customzer('seo_title'))); ?></title>

  <?php
  /* =====================================================
 * single : BlogPosting JSON-LD
 * ===================================================== */
  if (is_single()) :

    $post = get_post();
    $desc = wp_strip_all_tags($post->post_content);
    $desc = preg_replace('/(\s\s|　|&nbsp;)/', '', $desc);
    $desc = mb_strimwidth($desc, 0, 160, '…', 'UTF-8');

    $thumb = get_post_thumbsdata($post->ID);
    $ogimg = $thumb ? $thumb[0] : get_aioseo_global_og_image();
  ?>
    <script type="application/ld+json">
      <?php echo wp_json_encode([
        '@context' => 'https://schema.org',
        '@type' => 'BlogPosting',
        'headline' => get_the_title(),
        'description' => $desc,
        'author' => [
          '@type' => 'Person',
          'name' => get_bloginfo('name'),
        ],
        'publisher' => [
          '@type' => 'Organization',
          'name' => get_bloginfo('name'),
          'logo' => [
            '@type' => 'ImageObject',
            'url' => $ogimg,
          ],
        ],
        'mainEntityOfPage' => [
          '@type' => 'WebPage',
          '@id' => get_permalink(),
        ],
        'datePublished' => get_the_date('c'),
        'dateModified' => get_the_modified_date('c'),
      ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES); ?>
    </script>
  <?php endif; ?>

  <?php
  /* =====================================================
 * page : SCF JSON-LD
 * ===================================================== */
  if (is_page() && !empty(SCF::get('jsonld'))) :
  ?>
    <script type="application/ld+json">
      <?php echo SCF::get('jsonld'); ?>
    </script>
  <?php endif; ?>

  <?php
  /* =====================================================
 * wp_head（最重要）
 * ===================================================== */
  wp_head();
  ?>

  <?php
  /* =====================================================
 * グローバル変数（最小限・安全）
 * ===================================================== */
  ?>
  <script>
    window.themeConfig = {
      homeUrl: "<?php echo esc_url(home_url('/')); ?>",
      themeUrl: "<?php echo esc_url(get_template_directory_uri()); ?>",
      restUrl: "<?php echo esc_url(rest_url()); ?>"
    };
  </script>

</head>

<body <?php body_class('baseBody'); ?>>
  <div id="pageTop" class="wap">

    <header id="scroll_off" class="baseHeader">
      <div class="pc_only">
        <?php get_template_part('include/common/header/01_headerPc'); ?>
      </div>
      <div class="sp_only">
        <?php get_template_part('include/common/header/02_headerSp'); ?>
      </div>
      <div class="pc_only">
        <?php get_template_part('include/common/header/03_headerMemuPc'); ?>
      </div>
      <div class="sp_only">
        <?php get_template_part('include/common/header/04_headerMemuSp'); ?>
      </div>
    </header>