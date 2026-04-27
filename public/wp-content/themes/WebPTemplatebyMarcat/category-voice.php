<?php

/**
 * Template Name: お客様の声
 * Template Post Type: category
 */
?>
<?php get_template_part('include/common/header/header'); ?>
<main class="mainUnder mainVoice">
    <?php get_template_part('include/layouts/voice/01_voiceFv'); ?>
    <?php get_template_part('include/layouts/voice/02_voiceBread'); ?>
    <?php get_template_part('include/layouts/voice/03_voiceAllPosts'); ?>
    <?php get_template_part('include/layouts/voice/04_voiceLoop'); ?>

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