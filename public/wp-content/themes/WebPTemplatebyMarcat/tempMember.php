<?php

/**
 * Template Name: 会員特典
 * Template Post Type: page
 */
?>
<?php get_template_part('include/common/header/header'); ?>
<main class="mainUnder mainMember">
    <?php get_template_part('include/layouts/member/01_memberFv'); ?>
    <?php get_template_part('include/layouts/member/02_memberFvBtmSec'); ?>
    <?php get_template_part('include/layouts/member/03_memberPresent'); ?>
    <?php get_template_part('include/layouts/member/04_memberPointsystem'); ?>
    <?php get_template_part('include/layouts/member/05_memberShops'); ?>
    <?php get_template_part('include/layouts/member/06_memberBnr'); ?>

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