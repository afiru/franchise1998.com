<?php
$args = [
    'post_type' => 'post',
    'orderby' => 'menu_order',
    'order' => 'ASC',
    'cat' => 30,
    'posts_per_page' => 9,
    'no_found_rows' => true,
];
?>
<div class="topPicUpOut">
    <div class="wapper topPicUpWap">
        <section class="secTopPickUp">
            <h2 class="cl_421D12 fw_500 txtset h2TopPickUp">PICK UP</h2>

            <div class="topPicUpLxn">
                <?php $query1 = new WP_Query($args); ?>
                <?php if ($query1->have_posts()): ?>
                <div class="swiper topPicUp jsactionLxn02" data-slidercount="4">
                    <div class="swiper-wrapper">
                        <?php $i = 1;
                            while ($query1->have_posts()): $query1->the_post();
                                $nowcats = get_the_category($post->ID); ?>
                        <div class="swiper-slide">
                            <a class="btnAction d_block btnTopLimited" href="action01.php">
                                <figure class="picSliderTopLimited picSliderTopLimitedPick">
                                    <?php $img = get_post_thumbsdata($post->ID); ?>
                                    <img class="imgThumbsLiListIndexEvent" loading="lazy" src="<?php echo $img[0]; ?>" alt="<?php echo get_the_title($post->ID); ?>サムネイル画像" width="<?php echo $img[1]; ?>" height="<?php echo $img[2]; ?>">
                                </figure>
                            </a>
                        </div>
                        <?php $i++;
                            endwhile;
                            wp_reset_postdata(); ?>
                        <!-- スクロールバー -->
                    </div>

                    <div class="swiper-scrollbar topPicUpScrollbar"></div>
                </div>
                <?php endif; ?>
            </div>
        </section>
    </div>
</div>