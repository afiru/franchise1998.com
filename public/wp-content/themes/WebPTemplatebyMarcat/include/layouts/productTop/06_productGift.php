<?php
$catid = 20;
$args = [
    'post_type' => 'post',
    'orderby' => 'menu_order',
    'order' => 'ASC',
    'cat' => $catid,
    'posts_per_page' => -1,
    'no_found_rows' => true,
];
?>
<?php $query1 = new WP_Query($args); ?>
<?php if ($query1->have_posts()): ?>
    <div class="prductLoopDefo pore prductLoopUnder">
        <div class="poab bg_EBEBEB brdLongPrductLoopUnder"></div>
        <div class="poab bg_F28962 brdShortPrductLoopUnder"></div>

        <section class="secPrductLoopDefo secPrductLoopUnder">
            <h2 class="cl_F28962 fw_500 txtset CormorantUnicase h2PrductLoopDefo">BAKED・GIFT</h2>
            <p class="cl_453C3C fw_500 txtset rubyPrductLoopDefo">焼き菓子・ギフト</p>
            <ul class="d_flex j_start row ulPrductLoopDefo">
                <?php $i = 1; ?>
                <?php while ($query1->have_posts()): $query1->the_post(); ?>
                    <?php $img = get_post_thumbsdata($post->ID); ?>
                    <?php $nowcats = get_the_category($post->ID); ?>
                    <?php $nowgenre = get_genre_cats(15); ?>
                    <?php $limited = get_genre_cats(23); ?>
                    <li class="liPrductLoopDefo">
                        <a class="undernone btnPrductLoopDefo" href="<?php echo get_permalink($post->ID); ?>">
                            <div class="pore thumbsPrductLoopDefo">
                                <figure class="photoPrductLoopDefo">
                                    <img class="poab imgThumbsLiListIndexEvent" loading="lazy" src="<?php echo $img[0]; ?>" alt="<?php echo get_the_title($post->ID); ?>サムネイル画像" width="<?php echo $img[1]; ?>" height="<?php echo $img[2]; ?>">
                                </figure>
                                <?php $newicon = get_post_new_label($post->ID, 14); ?>
                                <?php if (!empty($newicon)): ?>
                                    <span class="d_flex j_center ali_center bg_772D2D cl_fff fw_500 txtset kaku iconNewPrductLoopDefo">NEW</span>
                                <?php endif; ?>
                            </div>
                            <h3 class="cl_453C3C fw_400 txtset h3PrductLoopDefo"><?php echo $nowgenre; ?></h3>
                            <h4 class="cl_453C3C fw_500 txtset h4PrductLoopDefo"><?php echo get_the_title($post->ID); ?></h4>
                            <p class=" cl_453C3C fw_600 txtset rubyPrductLoopDefo "><?php echo scf::get('prodoctsPrice'); ?></p>
                            <?php if (!empty($limited)): ?>
                                <p class="d_flex j_center ali_center bg_F28962 cl_fff fw_500 kaku iconLimitedProductLoop">期間限定</p>
                            <?php endif; ?>
                        </a>
                    </li>
                    <?php $i++; ?>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            </ul>
        </section>

        <?php $dekoAllergy = SCF::get_term_meta($catid, 'category', 'flugDecoAllergy'); ?>
        <?php if ($dekoAllergy === "表示"): ?>
            <?php get_template_part('include/layouts/productTop/03_01_productLoopAllergy'); ?>
        <?php endif; ?>


        <?php $flugWorldCake = SCF::get_term_meta($catid, 'category', 'flugWorldCake'); ?>
        <?php if ($flugWorldCake === "表示"): ?>
            <?php get_template_part('include/layouts/productTop/03_02_productLoopWorldCake'); ?>
        <?php endif; ?>


        <?php $flugWorldCake = SCF::get_term_meta($catid, 'category', 'flugSpecialOrder'); ?>
        <?php if ($flugWorldCake === "表示"): ?>
            <?php get_template_part('include/layouts/productTop/03_03_productLoopWeddingCake'); ?>
        <?php endif; ?>
    </div>
<?php endif; ?>