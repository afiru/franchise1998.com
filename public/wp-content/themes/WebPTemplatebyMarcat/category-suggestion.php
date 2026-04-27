<?php

/**
 * Template Name: お祝い・ギフトのご提案
 * Template Post Type: category
 */
?>
<?php get_template_part('include/common/header/header'); ?>
<main class="mainUnder mainGift">
    <div class=" giftLxn">
        <?php get_template_part('include/layouts/gift/01_giftFv'); ?>
        <?php get_template_part('include/layouts/gift/02_giftSec'); ?>
        <?php get_template_part('include/layouts/gift/03_giftNav'); ?>

        <?php get_template_part('include/layouts/gift/04_giftPickUp'); ?>
        <?php get_template_part('include/layouts/gift/05_giftHushime'); ?>
        <?php get_template_part('include/layouts/gift/06_giftUchiiwai'); ?>
        <?php get_template_part('include/layouts/gift/07_giftOkueimono'); ?>
        <?php get_template_part('include/layouts/gift/08_giftProducts'); ?>
        <?php get_template_part('include/layouts/gift/09_giftInfo'); ?>
    </div>
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