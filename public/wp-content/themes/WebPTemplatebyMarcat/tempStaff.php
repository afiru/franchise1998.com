<?php

/**
 * Template Name: スタッフの想い
 * Template Post Type: page
 */
?>
<?php get_template_part('include/common/header/header'); ?>
<main class="mainUnder mainStaff">
    <?php get_template_part('include/layouts/staff/01_staffFv'); ?>
    <?php get_template_part('include/layouts/staff/02_staffInfo'); ?>
    <?php get_template_part('include/layouts/staff/03_staffPatissier'); ?>
    <?php get_template_part('include/layouts/staff/04_staffPatissierImage'); ?>
    <?php get_template_part('include/layouts/staff/05_staffPatissierThink'); ?>

    <?php get_template_part('include/layouts/staff/06_staffConecierge'); ?>
    <?php get_template_part('include/layouts/staff/07_staffConeciergeImage'); ?>
    <?php get_template_part('include/layouts/staff/07_staffConeciergeThink'); ?>

    <?php get_template_part('include/layouts/staff/08_staffFlower'); ?>
    <?php get_template_part('include/layouts/staff/09_staffFlowerImage'); ?>
    <?php get_template_part('include/layouts/staff/10_staffFlowerThink'); ?>
    <?php get_template_part('include/layouts/staff/11_staffRecruit'); ?>

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