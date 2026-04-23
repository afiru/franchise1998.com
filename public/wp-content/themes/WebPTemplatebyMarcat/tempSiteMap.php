<?php

/**
 * Template Name: サイトマップ
 * Template Post Type: page
 */
?>
<?php get_template_part('include/common/header/header'); ?>
<main class="mainUnder mainPartyPlan">
    <?php get_template_part('include/layouts/sitemap/01_sitemapFv'); ?>
    <?php get_template_part('include/layouts/sitemap/02_sitemapMain'); ?>
    <div class="underPicBtmDefo">
        <?php get_template_part('include/layouts/top/11_topPickUp'); ?>
        <?php get_template_part('include/layouts/top/12_topNav'); ?>
        <?php get_template_part('include/layouts/top/17_topContact'); ?>
    </div>
</main>
<footer class="bg_795E55 footer">
    <?php get_template_part('include/layouts/top/18_topFooterTop'); ?>
    <?php get_template_part('include/layouts/top/19_topFooterBtm'); ?>
</footer>
<?php get_template_part('include/layouts/top/20_topFooterBtmFix'); ?>
<?php get_template_part('include/common/footer/footer'); ?>