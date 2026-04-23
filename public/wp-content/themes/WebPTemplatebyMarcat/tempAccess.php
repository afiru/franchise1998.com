<?php

/**
 * Template Name: 店舗情報・アクセス
 * Template Post Type: page
 */
?>
<?php get_template_part('include/common/header/header'); ?>
<main class="mainUnder mainAccess">
    <?php get_template_part('include/layouts/access/01_accessFv'); ?>
    <?php get_template_part('include/layouts/access/02_accessFvBtmSec'); ?>
    <?php get_template_part('include/layouts/access/03_accessNav'); ?>

    <?php get_template_part('include/layouts/access/04_accessFlan'); ?>
    <?php get_template_part('include/layouts/access/05_accessFlanMap'); ?>
    <?php get_template_part('include/layouts/access/06_accessFlanParking'); ?>

    <?php get_template_part('include/layouts/access/07_accessYukitaka'); ?>
    <?php get_template_part('include/layouts/access/08_accessYukitakaMap'); ?>

    <?php get_template_part('include/layouts/access/09_accessSalon'); ?>
    <?php get_template_part('include/layouts/access/10_accessSalonMap'); ?>

    <?php get_template_part('include/layouts/access/11_accessLocation'); ?>
    <?php get_template_part('include/layouts/access/12_accessShops'); ?>
    <?php get_template_part('include/layouts/access/13_accessMap'); ?>

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