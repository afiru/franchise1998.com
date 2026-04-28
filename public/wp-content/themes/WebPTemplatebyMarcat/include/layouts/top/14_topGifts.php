<?php
$args = [
    'post_type' => 'post',
    'orderby' => 'menu_order',
    'order' => 'ASC',
    'cat' => 34,
    'posts_per_page' => 4,
    'no_found_rows' => true,
];
?>
<?php $query1 = new WP_Query($args); ?>
<?php if ($query1->have_posts()): ?>
<div class="topGifts">
    <div class="wapper topGiftsWap">
        <div class="d_flex j_start row ali_center titleTopGifts">
            <h2 class="cl_421D12 CormorantUnicase fw_500 txtset h2TitleTopGifts">GIFT SUGGESTIONS</h2>
            <p class="cl_453C3C fw_500 txtset txtTitleTopGifts">
                お祝いや季節のギフトについて、フランシーズからのご提案
            </p>
        </div>

        <ul class="d_flex j_between row ulTopGifts">
            <?php $i = 1; ?>
            <?php while ($query1->have_posts()): $query1->the_post(); ?>
            <?php $i++; ?>
            <li class="liTopGifts">
                <a class="d_flex j_between undernone btnLiTopGifts">
                    <figure class="picBtnLiTopGifts">
                        <?php $img = get_post_thumbsdata($post->ID); ?>
                        <img class="poab imgPicBtnLiTopGifts" loading="lazy" src="<?php echo $img[0]; ?>" alt="<?php echo get_the_title($post->ID); ?>サムネイル画像" width="<?php echo $img[1]; ?>" height="<?php echo $img[2]; ?>">
                    </figure>
                    <section class="secBtnLiTopGifts">
                        <h3 class="cl_421D12 fw_500 txtset h3BtnLiTopGifts"><?php echo get_the_title($post->ID); ?></h3>
                        <p class="cl_453C3C fw_500 txtset text_justify txtBtnLiTopGifts">
                            <?php echo scf::get('txtArchiveSuggestion'); ?>
                        </p>
                    </section>
                </a>
            </li>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        </ul>

        <div class="btnCntTopGiftsLxn">
            <a class="d_flex j_center ali_center cl_F04E11 undernone fw_500 kaku btnCntTopGifts" href="<?php echo home_url('/'); ?>">
                <span class="iconBbtnCntTopGiftss">一覧を見る</span>
                <!--bg:../img/index/iconBbtnCntTopGiftss.svg-->
            </a>
        </div>
    </div>
</div>
<?php endif; ?>