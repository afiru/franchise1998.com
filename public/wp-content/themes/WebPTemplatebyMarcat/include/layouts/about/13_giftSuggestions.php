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
    <div class="bg_F1ECE8 giftSuggestions">
        <div class="wapper giftSuggestionsWap">
            <section class="titleGiftSuggestions">
                <h2 class="t_center cl_421D12 txtset h2TitleGiftSuggestions">GIFT SUGGESTIONS</h2>
                <p class="t_center cl_453C3C txtset rubyTitleGiftSuggestions">お祝いや季節のギフトについて、フランシーズからのご提案。</p>
            </section>

            <ul class="d_flex j_between row ulGiftSuggestions">
                <?php $i = 1; ?>
                <?php while ($query1->have_posts()): $query1->the_post(); ?>
                    <?php $i++; ?>
                    <li class="liGiftSuggestions">
                        <a class="d_flex j_between undernone btnLiGiftSuggestions">
                            <figure class="picBtnLiGiftSuggestions">
                                <?php $img = get_post_thumbsdata($post->ID); ?>
                                <img class="poab imgPicBtnLiGiftSuggestions" loading="lazy" src="<?php echo $img[0]; ?>" alt="<?php echo get_the_title($post->ID); ?>サムネイル画像" width="<?php echo $img[1]; ?>" height="<?php echo $img[2]; ?>">
                            </figure>
                            <section class="secBtnLiGiftSuggestions">
                                <h3 class="cl_421D12 fw_500 txtset h3BtnLiGiftSuggestions"><?php echo get_the_title($post->ID); ?></h3>
                                <p class="cl_453C3C fw_500 txtset text_justify txtBtnLiGiftSuggestions">
                                    <?php echo scf::get('txtArchiveSuggestion'); ?>
                                </p>
                            </section>
                        </a>
                    </li>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            </ul>

            <div class="btnCntGiftSuggestionsLxn">
                <a class="d_flex j_center ali_center cl_F04E11 undernone fw_500 kaku btnCntGiftSuggestions" href="<?php echo home_url('/'); ?>">
                    <span class="iconBbtnCntGiftSuggestionss">一覧を見る</span>
                    <!--bg:../img/index/iconBbtnCntGiftSuggestionss.svg-->
                </a>
            </div>
        </div>
    </div>
<?php endif; ?>