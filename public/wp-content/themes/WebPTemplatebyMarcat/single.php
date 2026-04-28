<?php
if (in_category(1) || post_is_in_descendant_category(1)) :
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
    ?>
<?php
elseif (in_category(34) || post_is_in_descendant_category(34)) : //ギフト
    get_template_part('include/common/header/header'); ?>
    <?php get_template_part('include/layouts/giftSingle/01_giftSingleFv'); ?>
    <main class="mainUnder mainGiftPost">
        <div class="bg_fff wapper mainGiftCnt">
            <div class="mainGiftCntLxn">
                <?php if (have_posts()) while (have_posts()) : the_post();  ?>
                    <?php get_template_part('include/layouts/giftSingle/02_giftSingleTitle'); ?>
                    <?php get_template_part('include/layouts/giftSingle/03_giftSingleEditor'); ?>
                    <?php get_template_part('include/layouts/giftSingle/04_giftSingleRecMend'); ?>
                <?php endwhile; ?>
            </div>
        </div>
        <?php get_template_part('include/layouts/giftSingle/05_giftSinglePager'); ?>
        <?php get_template_part('include/layouts/gift/08_giftProducts'); ?>
        <?php get_template_part('include/layouts/gift/09_giftInfo'); ?>
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
    get_template_part('include/common/footer/footer');
    ?>
<?php
elseif (in_category(2) || post_is_in_descendant_category(2)) : //ギフト
?>
    <?php get_template_part('include/common/header/header'); ?>
    <?php get_template_part('include/layouts/productsPost/01_productsFv'); ?>
    <main class="mainUnder mainProductPost">
        <?php if (have_posts()) while (have_posts()) : the_post();  ?>
            <div class="productPostMain">
                <div class="wapper productPostMainWap">
                    <div class="d_flex j_between row productPostMainFx">
                        <div class="sidebarProductPost">
                            <?php get_template_part('include/layouts/productsPost/02_sliderProductPost'); ?>
                        </div>
                        <div class="cntProductPost">
                            <?php get_template_part('include/layouts/productsPost/03_cntProductPost'); ?>
                        </div>
                    </div>
                    <?php get_template_part('include/layouts/productsPost/04_pagerProductPager'); ?>
                    <?php get_template_part('include/layouts/productsPost/05_pagerProductNoshi'); ?>
                    <?php get_template_part('include/layouts/productsPost/06_pagerProductOther'); ?>
                    <?php get_template_part('include/layouts/productsPost/07_pagerProductFaq'); ?>
                </div>
            </div>
        <?php endwhile; ?>
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
    <?php get_template_part('include/common/footer/footer'); ?>
<?php
else:
    wp_redirect(home_url());
    exit;
endif;
?>