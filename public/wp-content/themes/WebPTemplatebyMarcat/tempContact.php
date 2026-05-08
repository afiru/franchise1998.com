<?php

/**
 * Template Name: お問い合わせ
 * Template Post Type: page
 */
?>
<?php remove_filter('the_content', 'wpautop'); ?>
<?php get_template_part('include/common/header/header'); ?>
<main class="mainUnder mainContact">
    <?php get_template_part('include/layouts/contact/01_contactFv'); ?>
    <?php get_template_part('include/layouts/contact/02_contactMain'); ?>
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