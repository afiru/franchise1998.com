<?php

/**
 * Template Name: フランシーズについて
 * Template Post Type: page
 */
?>
<?php get_template_part('include/common/header/header'); ?>
<main class="mainUnder mainAbout">
    <?php get_template_part('include/layouts/about/01_fv'); ?>
    <?php get_template_part('include/layouts/about/02_concept'); ?>
    <?php get_template_part('include/layouts/about/03_brandStoryTitle'); ?>
    <?php get_template_part('include/layouts/about/04_brandStory01'); ?>
    <?php get_template_part('include/layouts/about/05_brandStory02'); ?>
    <?php get_template_part('include/layouts/about/06_brandStoryBtm'); ?>
    <?php get_template_part('include/layouts/about/07_brandStoryImage'); ?>
    <?php get_template_part('include/layouts/about/08_commitment'); ?>
    <?php get_template_part('include/layouts/about/09_productAppeal'); ?>
    <?php get_template_part('include/layouts/about/10_thoughts'); ?>
    <?php get_template_part('include/layouts/about/11_giftIdeas'); ?>
    <?php get_template_part('include/layouts/about/12_consulTingRoom'); ?>
    <?php get_template_part('include/layouts/about/13_giftSuggestions'); ?>

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