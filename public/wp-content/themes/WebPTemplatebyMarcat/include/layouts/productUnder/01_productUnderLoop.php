<?php
$catid = $cat;
$cat_url = get_category_link($cat_id);

$current_orderby = $_GET['orderby'] ?? '';
$current_order   = $_GET['order'] ?? '';
$args = [
    'post_type'      => 'post',
    'cat'            => $catid,
    'posts_per_page' => -1,
    'no_found_rows'  => true,
];

switch ($orderby) {

    case 'price':
        $args['meta_key'] = 'price';
        $args['orderby']  = 'meta_value_num';
        break;

    case 'date':
    default:
        $args['orderby'] = 'date';
        break;
}

$args['order'] = ($order === 'ASC') ? 'ASC' : 'DESC';
?>
<?php $query1 = new WP_Query($args); ?>
<?php if ($query1->have_posts()): ?>
    <div class="prductLoopDefo prductLoopLimited">
        <section class="secPrductLoopDefo secPrductLoopLimited">
            <div class="d_flex j_between row secPrductLoopDefoFxIn">
                <section class="secPrductLoopDefoFxIn">
                    <h2 class="cl_F28962 fw_500 txtset CormorantUnicase h2PrductLoopDefo"><?php echo SCF::get_term_meta($cat, 'category', 'enTitle'); ?></h2>
                    <p class="cl_453C3C fw_500 txtset rubyPrductLoopDefo"><?php echo single_cat_title('', false); ?></p>
                </section>

                <div class="bg_fff selectOrderFormCnt">
                    <div class="d_flex j_between selectOrderFormCntBx">
                        <h3 class="cl_453C3C mincho fw_500 txtset h3SelectOrderFormCntBx">並べ替え</h3>
                        <select id="sort-select" class="mincho selectedOrderFormCntBx jsselectedOrderFormCntBx">
                            <option value="">並び替え</option>
                            <option value="<?php echo esc_url(add_query_arg([
                                                'orderby' => 'price',
                                                'order'   => 'asc'
                                            ], $cat_url)); ?>" <?php selected($current_orderby, 'price');
                                                                if ($current_order === 'asc') echo ' selected'; ?>>
                                価格の安い順
                            </option>

                            <option value="<?php echo esc_url(add_query_arg([
                                                'orderby' => 'price',
                                                'order'   => 'desc'
                                            ], $cat_url)); ?>" <?php if ($current_orderby === 'price' && $current_order === 'desc') echo 'selected'; ?>>
                                価格の高い順
                            </option>

                            <option value="<?php echo esc_url(add_query_arg([
                                                'orderby' => 'date',
                                                'order'   => 'desc'
                                            ], $cat_url)); ?>" <?php if ($current_orderby === 'date' && $current_order === 'desc') echo 'selected'; ?>>
                                新着順
                            </option>
                        </select>
                    </div>
                </div>
            </div>
            <script>

            </script>
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