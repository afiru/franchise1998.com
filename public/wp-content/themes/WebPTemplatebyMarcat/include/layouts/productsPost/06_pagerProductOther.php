<?php $cat_id = get_child_category_id(15); ?>
<?php
$args = [
    'post_type' => 'post',
    'orderby' => 'menu_order',
    'order' => 'ASC',
    'cat' => $cat_id,
    'posts_per_page' => 4,
    'no_found_rows' => true,
];
?>
<?php $query1 = new WP_Query($args); ?>
<?php if ($query1->have_posts()): ?>
    <div class="pagerProductOther">
        <div class="wapper pore pagerProductOtherWap">
            <div class="poab bg_EBEBEB brdLongPagerProductOther"></div>
            <div class="poab bg_F28962 brdShortPagerProductOther"></div>
            <h2 class="cl_453C3C fw_500 txtset h2ProductOther">その他の<?php echo esc_html(get_cat_name($cat_id)); ?></h2>

            <ul class="d_flex j_start row ulProductOther">
                <?php while ($query1->have_posts()): $query1->the_post(); ?>
                    <?php $img = get_post_thumbsdata($post->ID); ?>
                    <?php $nowcats = get_the_category($post->ID); ?>
                    <?php $nowgenre = get_genre_cats(15); ?>
                    <?php $limited = get_genre_cats(23); ?>
                    <li class="liProductOther">
                        <a class="undernone btnProductOther" href="<?php echo get_permalink($post->ID); ?>">
                            <div class="pore thumbsProductOther">
                                <figure class="photoProductOther">
                                    <img class="poab imgThumbsLiListIndexEvent" loading="lazy" src="<?php echo $img[0]; ?>" alt="<?php echo get_the_title($post->ID); ?>サムネイル画像" width="<?php echo $img[1]; ?>" height="<?php echo $img[2]; ?>">
                                </figure>
                                <?php $newicon = get_post_new_label($post->ID, 14); ?>
                                <?php if (!empty($newicon)): ?>
                                    <span class="d_flex j_center ali_center bg_772D2D cl_fff fw_500 txtset kaku iconNewProductOther">NEW</span>
                                <?php endif; ?>
                            </div>
                            <h3 class="cl_453C3C fw_400 txtset h3ProductOther"><?php echo $nowgenre; ?></h3>
                            <h4 class="cl_453C3C fw_500 txtset h4ProductOther"><?php echo get_the_title($post->ID); ?></h4>
                            <p class=" cl_453C3C fw_600 txtset rubyProductOther "><?php echo scf::get('prodoctsPrice'); ?></p>
                            <?php if (!empty($limited)): ?>
                                <p class="d_flex j_center ali_center bg_F28962 cl_fff fw_500 kaku iconLimitedProductLoop">期間限定</p>
                            <?php endif; ?>
                        </a>
                    </li>
                    <?php $i++; ?>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            </ul>
        </div>
    </div>
<?php endif; ?>