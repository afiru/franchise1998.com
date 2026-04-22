<?php

/**
 * Template Name: たま卵チーズ
 * Template Post Type: page
 */
?>
<?php get_template_part('include/common/header/header'); ?>
<main class="mainUnder mainTamaran">
    <?php get_template_part('include/layouts/tamaran/01_tamaranFv'); ?>
    <?php get_template_part('include/layouts/tamaran/02_tamaranCheese'); ?>
    <?php get_template_part('include/layouts/tamaran/03_tamaranMvp'); ?>
    <?php get_template_part('include/layouts/tamaran/04_tamaranCommitment'); ?>
    <?php get_template_part('include/layouts/tamaran/05_tamaranVoice'); ?>
    <?php get_template_part('include/layouts/tamaran/06_tamaranHire'); ?>
    <?php get_template_part('include/layouts/tamaran/07_tamaranOnline'); ?>

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