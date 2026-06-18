<?php

/**
 * Template Name: カレンダー
 * Template Post Type: page
 */
?>
<?php get_template_part('include/common/header/header'); ?>
<main class="mainUnder mainAppeal">
    <?php remove_filter('the_content', 'wpautop'); ?>
    <?php if (have_posts()) while (have_posts()) : the_post();  ?>
        <div class="wapper calendarWap">
            <?php the_content(); ?>
        </div>
    <?php endwhile; // end of the loop.
    ?>
</main>
<footer class="bg_795E55 footer">
    <?php get_template_part('include/layouts/top/18_topFooterTop'); ?>
    <?php get_template_part('include/layouts/top/19_topFooterBtm'); ?>
</footer>
<?php get_template_part('include/layouts/top/20_topFooterBtmFix'); ?>
<?php get_template_part('include/common/footer/footer'); ?>