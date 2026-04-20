<?php
$args = [
    'post_type' => 'post',
    'orderby' => 'menu_order',
    'order' => 'ASC',
    'cat' => 1,
    'posts_per_page' => 9,
    'no_found_rows' => true,
];
?>
<?php $query1 = new WP_Query($args); ?>
<?php if ($query1->have_posts()): ?>
    <div class="topTopics">
        <div class="wapper topTopicsWap">
            <div class="sliderTopTopics">
                <div class="swiper jsSliderTopTopics">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <?php $i = 1;
                        while ($query1->have_posts()): $query1->the_post();
                            $nowcats = get_the_category($post->ID); ?>
                            <div class="swiper-slide">
                                <figure class="picSliderTopTopics">
                                    <?php $img = get_post_thumbsdata($post->ID); ?>
                                    <img class="poab imgThumbsLiListIndexEvent" loading="lazy" src="<?php echo $img[0]; ?>" alt="<?php echo get_the_title($post->ID); ?>サムネイル画像" width="<?php echo $img[1]; ?>" height="<?php echo $img[2]; ?>">
                                </figure>
                                <h3 class="cl_31150D fw_400 txtset txtovflow  h3SliderTopTopics"><?php echo get_the_title($post->ID); ?></h3>
                                <time class="d_block cl_453C3C fw_300 kaku timeSliderTopTopics"><?php echo get_the_date('Y.m.d', $post->ID); ?></time>
                            </div>
                        <?php $i++;
                        endwhile;
                        wp_reset_postdata(); ?>
                    </div>
                    <div class="prevSliderTopTopics"></div>
                    <div class="nextSliderTopTopics"></div>
                </div>

                <div class="btnTopTopicsLxn">
                    <a class="d_flex j_center ali_center cl_F04E11 undernone fw_500 kaku btnTopTopics" href="<?php echo home_url('/topics/'); ?>">
                        <span class="iconBtnTopTopics">一覧を見る</span>
                        <!--bg:../img/index/iconBtnTopTopics.svg-->
                    </a>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>