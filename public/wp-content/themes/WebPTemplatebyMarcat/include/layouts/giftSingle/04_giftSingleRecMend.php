<section class="giftSingleRecMend">
    <h2 class="bg_F1ECE8 d_flex j_start ali_center cl_453C3C fw_500 h2GiftSingleRecMend">おすすめ商品</h2>
    <ul class="ulGiftSingleRecMend">
        <?php foreach (scf::get('connectionSuggestion') as $ids =>$val): ?>
        <li class="d_flex j_between row liGiftSingleRecMend">
            <figure class="photoGiftSingleRecMend">
                <?php $img = get_post_thumbsdata($val); ?>
                <img loading="lazy" src="<?php echo $img[0]; ?>" alt="" width="<?php echo $img[1]; ?>" height="<?php echo $img[2]; ?>">
            </figure>
            <section class="secGiftSingleRecMend">
                <p class="cl_25272F fw_400 kaku txtset txtGiftSingleRecMend">
                    <?php echo nl2br(scf::get('txtProdoctsArchive',$val)); ?>
                </p>
                <h3 class="cl_453C3C fw_500 txtset txtovflow2 h3GiftSingleRecMend"><?php echo get_the_title($val); ?></h3>
                <p class="cl_453C3C fw_600 mincho priceGiftSingleRecMend">
                    <?php echo scf::get('prodoctsPrice',$val); ?>
                </p>
                <div class="btnGiftSingleRecMendLxn">
                    <a class="d_flex j_center ali_center bg_F28962 cl_fff kaku fw_500 undernone btnGiftSingleRecMend" href="<?php echo get_permalink($ids); ?>">商品詳細ページへ</a>
                </div>

            </section>
        </li>
        <?php endforeach; ?>
    </ul>

</section>