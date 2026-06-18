<?php

/**
 * Template Name: カレンダー
 * Template Post Type: page
 */
?>
<?php get_template_part('include/common/header/header'); ?>
<main class="mainUnder mainCalendars">
    <?php remove_filter('the_content', 'wpautop'); ?>
    <?php if (have_posts()) while (have_posts()) : the_post();  ?>
        <div class="wapper calendarWap">
            <?php echo do_shortcode('[tribe_events view="month"]'); ?>
        </div>
    <?php endwhile; // end of the loop.
    ?>
    <?php get_template_part('include/layouts/top/17_topContact'); ?>
</main>
<footer class="bg_795E55 footer">
    <?php get_template_part('include/layouts/top/18_topFooterTop'); ?>
    <?php get_template_part('include/layouts/top/19_topFooterBtm'); ?>
</footer>
<?php get_template_part('include/layouts/top/20_topFooterBtmFix'); ?>
<?php get_template_part('include/common/footer/footer'); ?>