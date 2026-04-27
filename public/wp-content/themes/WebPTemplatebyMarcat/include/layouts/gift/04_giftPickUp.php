<?php
$args = [
    'post_type' => 'post',
    'orderby' => 'menu_order',
    'order' => 'ASC',
    'cat' => 35,
    'posts_per_page' => -1,
    'no_found_rows' => true,
];
?>
<?php $query1 = new WP_Query($args); ?>
<?php if ($query1->have_posts()): ?>
    <div class="giftPickUp">
        <div class="wapper giftPickUpWap">
            <h2 class="cl_212121 fw_500 h2GiftPickUp">PICK UP</h2>
            <?php $i = 1; ?>
            <ul class="d_flex row j_between ulGiftPickUp">
                <?php while ($query1->have_posts()): $query1->the_post(); ?>
                    <?php $nowcats = get_the_category($post->ID); ?>
                    <?php $img = get_post_thumbsdata($post->ID); ?>
                    <li class="bg_fff liGiftPickUp">
                        <section class="liGiftPickUpLxn">
                            <h3 class="t_center cl_453C3C fw_500 txtset h3GiftPickUpLxn"><?php echo get_the_title($post->ID); ?></h3>
                            <figure class="photoGiftPickUp">
                                <img class="poab imgThumbsLiListIndexEvent" loading="lazy" src="<?php echo $img[0]; ?>" alt="<?php echo get_the_title($post->ID); ?>サムネイル画像" width="<?php echo $img[1]; ?>" height="<?php echo $img[2]; ?>">
                            </figure>
                            <h4 class="cl_453C3C fw_500 txtset kaku h4GiftPickUp">
                                <?php echo scf::get('subArchiveSuggestion'); ?>
                            </h4>
                            <p class="cl_453C3C text_justify txtset kaku txtGiftPickUp">
                                <?php echo scf::get('txtArchiveSuggestion'); ?>
                            </p>
                            <div class="btnGiftPickUpLxn">
                                <a class="d_flex j_center ali_center undernone kaku bg_fff brd_F04E11 cl_F04E11  fw_500 btnGiftPickUp" href="<?php echo get_permalink($post->ID); ?>">
                                    <span class="d_block t_center iconBtnGiftPickUp">
                                        <!---bg:../img/gift/d_block t_center iconBtnGiftPickUp.svg-->
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