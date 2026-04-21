<?php

/**
 * Template Name: 商品の魅力
 * Template Post Type: page
 */
?>
<?php get_template_part('include/common/header/header'); ?>
<main class="mainUnder mainAppeal">
    <?php get_template_part('include/layouts/appeal/01_appealFv'); ?>
    <?php get_template_part('include/layouts/appeal/02_appealFvBtmSec'); ?>
    <?php get_template_part('include/layouts/appeal/03_appealFvBtmNav'); ?>
    <?php get_template_part('include/layouts/appeal/04_appealCake'); ?>
    <?php get_template_part('include/layouts/appeal/05_appealCakeImage'); ?>
    <?php get_template_part('include/layouts/appeal/06_appealCakeInfo'); ?>
    <?php get_template_part('include/layouts/appeal/07_appealCakeRec'); ?>

    <?php get_template_part('include/layouts/appeal/08_appealGift'); ?>
    <?php get_template_part('include/layouts/appeal/09_appealGiftImage'); ?>
    <div class="bg_F1ECE8 appealGiftBg">
        <?php get_template_part('include/layouts/appeal/10_appealGiftService'); ?>
        <?php get_template_part('include/layouts/appeal/11_appealGiftOnline'); ?>
        <?php get_template_part('include/layouts/appeal/12_appealGiftSuggestion'); ?>
    </div>
    <?php get_template_part('include/layouts/appeal/13_appealFlowr'); ?>
    <?php get_template_part('include/layouts/appeal/14_appealFlowrGift'); ?>
    <?php get_template_part('include/layouts/appeal/15_appealFlowrHaiso'); ?>

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