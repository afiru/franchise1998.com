<?php

/**
 * Template Name: 素材へのこだわり
 * Template Post Type: page
 */
?>
<?php get_template_part('include/common/header/header'); ?>
<main class="mainUnder mainMaterial">
    <?php get_template_part('include/layouts/material/01_materialFv'); ?>
    <?php get_template_part('include/layouts/material/02_materialFvBtmSec'); ?>
    <?php get_template_part('include/layouts/material/03_materialInfo'); ?>
    <?php get_template_part('include/layouts/material/04_materialMade'); ?>

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