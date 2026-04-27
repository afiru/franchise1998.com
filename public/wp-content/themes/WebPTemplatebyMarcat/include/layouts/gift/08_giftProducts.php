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
<div class="giftProducts">
    <div class="wapper giftProductsWap">
        <section class="secGiftProducts">
            <h2 class="t_center cl_453C3C fw_500 txtset h2GiftProducts">フランシーズの<br>人気商品・定番ギフト</h2>
            <p class="t_center cl_453C3C fw_500 mincho rubyGiftProducts">
                季節のご挨拶や日頃の感謝を、心づかいとともに。
            </p>

            <div class="giftProductsSliderLxn">
                <?php $query1 = new WP_Query($args); ?>
                <?php if ($query1->have_posts()): ?>
                <div class="swiper GiftProductsSlider jsactionLxnGift" data-slidercount="4">
                    <div class="swiper-wrapper">
                        <?php $i = 1;
                            while ($query1->have_posts()): $query1->the_post();
                                $nowcats = get_the_category($post->ID); ?>
                        <div class="swiper-slide">
                            <a class="btnAction d_block btnGiftProducts" href="<?php echo get_permalink($post->ID); ?>">
                                <figure class="picSliderGiftProducts">
                                    <?php $img = get_post_thumbsdata($post->ID); ?>
                                    <img class="poab imgThumbsLiListIndexEvent" loading="lazy" src="<?php echo $img[0]; ?>" alt="<?php echo get_the_title($post->ID); ?>サムネイル画像" width="<?php echo $img[1]; ?>" height="<?php echo $img[2]; ?>">
                                </figure>
                                <p class="cl_453C3C fw_400 mincho txtset catsSliderGiftProducts"><?php echo get_genre_cats(15, $post->ID); ?></p>
                                <h3 class="cl_453C3C fw_500 txtset txtovflow2 h3SliderGiftProducts"><?php echo get_the_title($post->ID); ?></h3>
                                <p class="cl_453C3C fw_600 mincho priceSliderGiftProducts">
                                    <?php echo scf::get('prodoctsPrice'); ?>
                                </p>
                            </a>
                        </div>
                        <?php $i++;
                            endwhile;
                            wp_reset_postdata(); ?>
                    </div>
                    <!-- スクロールバー -->
                    <div class="swiper-scrollbar GiftProductsSliderScrollbar"></div>

                </div>
                <?php endif; ?>
            </div>
            <div class="btnCntGiftProductsLxn">
                <a class="d_flex j_center ali_center cl_F04E11 undernone fw_500 kaku btnCntGiftProducts" href="<?php echo home_url('/products/purpose/gift/'); ?>">
                    <span class="iconBbtnCntGiftProductss">焼き菓子・ギフト一覧を見る</span>
                    <!--bg:../img/index/iconBbtnCntGiftProductss.svg-->
                </a>
            </div>
        </section>
    </div>
</div>