<?php

/**
 * Template Name: ウェディングサービス
 * Template Post Type: page
 */
?>
<?php get_template_part('include/common/header/header'); ?>
<main class="mainUnder mainWedding">
    <?php get_template_part('include/layouts/wedding/01_weddingFv'); ?>
    <?php get_template_part('include/layouts/wedding/02_weddingBtmSec'); ?>
    <?php get_template_part('include/layouts/wedding/03_weddingNav'); ?>
    <?php get_template_part('include/layouts/wedding/04_weddingCake'); ?>
    <?php get_template_part('include/layouts/wedding/05_weddingSweets'); ?>
    <?php get_template_part('include/layouts/wedding/06_weddingSweetsProducts'); ?>
    <?php get_template_part('include/layouts/wedding/07_weddingSweetsBnr'); ?>
    <?php get_template_part('include/layouts/wedding/08_weddingBouquet'); ?>
    <?php get_template_part('include/layouts/wedding/09_weddingVenue'); ?>

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