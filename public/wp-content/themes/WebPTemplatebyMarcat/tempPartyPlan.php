<?php

/**
 * Template Name: パーティープラン
 * Template Post Type: page
 */
?>
<?php get_template_part('include/common/header/header'); ?>
<main class="mainUnder mainPartyPlan">
    <?php get_template_part('include/layouts/partyPlan/01_partyPlanFv'); ?>
    <?php get_template_part('include/layouts/partyPlan/02_partyPlanBtmSec'); ?>
    <?php get_template_part('include/layouts/partyPlan/03_partyPlanNav'); ?>

    <?php get_template_part('include/layouts/partyPlan/04_partyPlanSet'); ?>
    <?php get_template_part('include/layouts/partyPlan/05_familyPlanSet'); ?>

    <?php get_template_part('include/layouts/partyPlan/06_partyPlanSideMenu'); ?>

    <?php get_template_part('include/layouts/partyPlan/07_partyPlanDrinkMenu'); ?>

    <?php get_template_part('include/layouts/partyPlan/08_partyPlanGiftGoods'); ?>

    <?php get_template_part('include/layouts/partyPlan/09_partyBookings'); ?>

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