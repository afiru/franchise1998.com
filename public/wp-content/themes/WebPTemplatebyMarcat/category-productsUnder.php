<?php

/**
 * Template Name: 商品一覧-下層
 * Template Post Type: category
 */

?>
<?php get_template_part('include/common/header/header'); ?>
<main class="mainUnder mainAbout">
    <?php get_template_part('include/layouts/productTop/01_productTopFv'); ?>
    <div class="ovhidden prodoctLoop">
        <div class="wapper prodoctLoopWap">
            <div class="d_flex j_between row prodoctLoopFx">
                <div class="sidebarProdoctLoop">
                    <?php get_template_part('include/layouts/productTop/02_sidebarProduct'); ?>
                </div>
                <div class="mainProdctLoop">
                    <?php get_template_part('include/layouts/productUnder/01_productUnderLoop'); ?>
                </div>

            </div>
        </div>
    </div>

    <?php get_template_part('include/layouts/productTop/12_productFaq'); ?>

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