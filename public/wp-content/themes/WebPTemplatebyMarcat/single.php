<?php
if (in_category(1) || post_is_in_descendant_category(1)) {
    get_template_part('include/common/header/header');
?>
    <main class="mainUnder mainToicsPost">
        <?php get_template_part('include/layouts/topicsSingle/01_topicsSingleFv'); ?>
        <?php get_template_part('include/layouts/topicsSingle/02_topicsSinglePost'); ?>
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
<?php
    get_template_part('include/layouts/top/20_topFooterBtmFix');
    get_template_part('include/common/footer/footer');
}
