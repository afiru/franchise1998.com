<?php
$args = [
    'post_type' => 'post',
    'orderby' => 'menu_order',
    'order' => 'ASC',
    'cat' => 29,
    'posts_per_page' => 9,
    'no_found_rows' => true,
];
?>
<div class="bg_F1ECE8 rounde topLimited">
    <div class="wapper topLimitedWap">
        <section class="secTopLimited">
            <h2 class="t_center cl_F28962 fw_500 CormorantUnicase txtset h2TopLimited">LIMITED</h2>
            <p class="t_center cl_453C3C fw_500 mincho rubyTopLimited">
                新商品・期間限定
            </p>
            <div class="topLimitedSliderLxn">
                <?php $query1 = new WP_Query($args); ?>
                <?php if ($query1->have_posts()): ?>
                    <div class="swiper topLimitedSlider jsactionLxn" data-slidercount="4">
                        <div class="swiper-wrapper">
                            <?php $i = 1;
                            while ($query1->have_posts()): $query1->the_post();
                                $nowcats = get_the_category($post->ID); ?>
                                <div class="swiper-slide">
                                    <a class="btnAction d_block btnTopLimited" href="<?php echo get_permalink($post->ID); ?>">
                                        <figure class="picSliderTopLimited">
                                            <?php $img = get_post_thumbsdata($post->ID); ?>
                                            <img class="poab imgThumbsLiListIndexEvent" loading="lazy" src="<?php echo $img[0]; ?>" alt="<?php echo get_the_title($post->ID); ?>サムネイル画像" width="<?php echo $img[1]; ?>" height="<?php echo $img[2]; ?>">
                                        </figure>
                                        <p class="cl_453C3C fw_400 mincho txtset catsSliderTopLimited"><?php echo get_genre_cats(15, $post->ID); ?></p>
                                        <h3 class="cl_453C3C fw_500 txtset txtovflow2 h3SliderTopLimited"><?php echo get_the_title($post->ID); ?></h3>
                                        <p class="cl_453C3C fw_600 mincho priceSliderTopLimited">
                                            <?php echo scf::get('prodoctsPrice'); ?>
                                        </p>
                                    </a>
                                </div>
                            <?php $i++;
                            endwhile;
                            wp_reset_postdata(); ?>
                        </div>
                        <!-- スクロールバー -->
                        <div class="swiper-scrollbar topLimitedSliderScrollbar"></div>

                    </div>
                <?php endif; ?>
            </div>
            <div class="btnCntTopLimitedLxn">
                <a class="d_flex j_center ali_center cl_F04E11 undernone fw_500 kaku btnCntTopLimited" href="<?php echo home_url('/products/purpose/new-products-limited-time-period/'); ?>">
                    <span class="iconBbtnCntTopLimiteds">新商品・期間限定一覧を見る</span>
                    <!--bg:../img/index/iconBbtnCntTopLimiteds.svg-->
                </a>
            </div>
        </section>
    </div>
</div>