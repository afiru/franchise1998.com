<?php

/**
 * Template Name: オリジナルプリントスイーツ
 * Template Post Type: page
 */
?>
<?php get_template_part('include/common/header/header'); ?>
<main class="mainUnder mainPrintedSweets">
    <?php get_template_part('include/layouts/printedSweets/01_printedSweetsFv'); ?>
    <?php get_template_part('include/layouts/printedSweets/02_printedSweetsFvBtmSec'); ?>
    <?php get_template_part('include/layouts/printedSweets/03_printedSweetsNav'); ?>
    <?php get_template_part('include/layouts/printedSweets/04_printedCookie'); ?>
    <?php get_template_part('include/layouts/printedSweets/05_printedCookieScene'); ?>
    <?php get_template_part('include/layouts/printedSweets/06_printedCookieVoice'); ?>
    <?php get_template_part('include/layouts/printedSweets/07_printedCookieType'); ?>

    <?php get_template_part('include/layouts/printedSweets/08_printedChoco'); ?>
    <?php get_template_part('include/layouts/printedSweets/09_printedChocoScene'); ?>

    <?php get_template_part('include/layouts/printedSweets/10_printedFlow'); ?>
    <?php get_template_part('include/layouts/printedSweets/11_printedAlert'); ?>
    <?php get_template_part('include/layouts/printedSweets/12_printedPrice'); ?>

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