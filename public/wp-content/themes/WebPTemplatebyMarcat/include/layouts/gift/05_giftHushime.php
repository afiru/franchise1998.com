<?php
$args = [
    'post_type' => 'post',
    'orderby' => 'menu_order',
    'order' => 'ASC',
    'cat' => 36,
    'posts_per_page' => -1,
    'no_found_rows' => true,
];
?>
<?php $query1 = new WP_Query($args); ?>
<?php if ($query1->have_posts()): ?>
    <div id="fushime" class="giftHushime">
        <div class="wapper giftHushimeWap">
            <h2 class="cl_212121 fw_500 t_center txtset h2GiftHushime">人生の節目を祝うギフト</h2>
            <p class="t_center cl_453C3C fw_500 txtset rubyGiftHushime">
                お子様の成長やご家族の長寿など、かけがえのない記念日に。<br>フランシーズのギフトを贈りませんか？
            </p>
            <?php $i = 1; ?>
            <ul class="d_flex row j_between ulGiftHushime">
                <?php while ($query1->have_posts()): $query1->the_post(); ?>
                    <?php $nowcats = get_the_category($post->ID); ?>
                    <?php $img = get_post_thumbsdata($post->ID); ?>
                    <li class="bg_fff liGiftHushime">
                        <section class="liGiftHushimeLxn">
                            <h3 class="t_center cl_453C3C fw_500 txtset h3GiftHushimeLxn"><?php echo get_the_title($post->ID); ?></h3>
                            <figure class="photoGiftHushime">
                                <img class="poab imgThumbsLiListIndexEvent" loading="lazy" src="<?php echo $img[0]; ?>" alt="<?php echo get_the_title($post->ID); ?>サムネイル画像" width="<?php echo $img[1]; ?>" height="<?php echo $img[2]; ?>">
                            </figure>
                            <h4 class="cl_453C3C fw_500 txtset kaku h4GiftHushime">
                                <?php echo scf::get('subArchiveSuggestion'); ?>
                            </h4>
                            <p class="cl_453C3C text_justify txtset kaku txtGiftHushime">
                                <?php echo scf::get('txtArchiveSuggestion'); ?>
                            </p>
                            <div class="btnGiftHushimeLxn">
                                <a class="d_flex j_center ali_center undernone kaku bg_fff brd_F04E11 cl_F04E11  fw_500 btnGiftHushime" href="<?php echo get_permalink($post->ID); ?>">
                                    <span class="d_block t_center iconBtnGiftHushime">
                                        <!---bg:../img/gift/d_block t_center iconBtnGiftHushime.svg-->
                                        詳しく見る
                                    </span>
                                </a>
                            </div>
                        </section>
                    </li>
                    <?php $i++; ?>
                <?php endwhile; ?>
            </ul>

            <?php wp_reset_postdata(); ?>
        </div>
    </div>
<?php endif; ?>