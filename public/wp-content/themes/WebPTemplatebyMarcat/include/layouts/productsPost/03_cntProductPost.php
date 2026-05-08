<section class="secCntProductPost">
    <h1 class="cl_453C3C fw_500 txtset h1CntProductPost">
        <?php echo esc_html(get_the_title($post->ID)); ?>
    </h1>

    <p class="cl_453C3C fw_400 txtset rubyH1CntProductPost">
        <?php echo esc_html(get_child_category_name(15)); ?>
    </p>

    <p class="kaku cl_453C3C fw_400 txtset text_justify txtCntProductPostTop">
        <?php echo nl2br(esc_html(scf::get('txtProductsCntTop'))); ?>
    </p>

    <div class="bg_E1E1E1 brdCntProductPostTop"></div>

    <div class="priceCntProductPostTop">
        <div class="tablePriceCntProductPostTop">
            <?php echo wp_kses_post(scf::get('wysiwygPriceCntProductPostTop')); ?>
        </div>

        <ul class="ulPriceCntProductPostTop">
            <li class="d_flex j_start row liPriceCntProductPostTop">
                <h3 class="cl_453C3C kaku txtset fw_500 h3PriceCntProductPostTop">発売日</h3>
                <p class="cl_453C3C fw_400 kaku txtset txtPriceCntProductPostTop">
                    <?php echo esc_html(scf::get('openProductPost')); ?>
                </p>
            </li>

            <li class="d_flex j_start row liPriceCntProductPostTop">
                <h3 class="cl_453C3C kaku txtset fw_500 h3PriceCntProductPostTop">発売期間</h3>
                <p class="cl_453C3C fw_400 kaku txtset txtPriceCntProductPostTop">
                    <?php echo esc_html(scf::get('kikanProductPost')); ?>
                </p>
            </li>
        </ul>
    </div>

    <div class="bg_E1E1E1 brdCntProductPostTop02"></div>

    <!-- 新商品や期間限定 -->
    <?php $cats = get_categories_under_parent(23); ?>
    <?php if ($cats): ?>
    <ul class="d_flex j_start row ulGenrePurpose">
        <?php foreach ($cats as $cat): ?>
        <li class="bg_F28962 cl_fff kaku fw_500 liGenrePurpose">
            <?php echo esc_html($cat->name); ?>
        </li>
        <?php endforeach; ?>
    </ul>
    <?php endif; ?>

    <!-- タグ一覧 -->
    <?php $tags = get_the_tags(); ?>
    <?php if ($tags): ?>
    <ul class="d_flex j_start row ulPostTags">
        <?php foreach ($tags as $tag): ?>
        <li class="bg_fff cl_979797 fw_500 kaku liPostTags">
            #<?php echo esc_html($tag->name); ?>
        </li>
        <?php endforeach; ?>
    </ul>
    <?php endif; ?>

    <!-- ケーキWEB予約 -->
    <?php $flugcake = scf::get('flugProductCakeBtn'); ?>
    <?php if ($flugcake === '表示'): ?>
    <div class="btnFlugProductCakeLxn">
        <a class="undernone d_flex j_center ali_center bg_F28962 cl_fff fw_500 kaku btnFlugProductCake" href="<?php echo esc_url(scf::get('urlProductCakeBtn')); ?>" target="_blank" rel="noopener noreferrer">
            <span class="iconBtnFlugProductCake"><?php echo esc_html(scf::get('txtProductCakeBtn')); ?></span>
            <!--bg:../img/productsPost/iconBtnFlugProductCake.svg-->
        </a>
    </div>
    <?php endif; ?>
    <!-- ケーキWEB予約 -->

    <!-- オンライン予約 -->
    <?php $flugcake = scf::get('flugOnline'); ?>
    <?php if ($flugcake === '表示'): ?>
    <section class="secBtnOnlineProducts">
        <h2 class="kaku cl_453C3C fw_500 txtset h2BtnOnlineProducts">オンラインショップで購入可能</h2>
        <!--bg:../img/productsPost/iconH2BtnOnlineProducts.svg-->
        <ul class="ulBtnOnlineProducts">
            <?php foreach (scf::get('loopOnlineBtn') as $fields): ?>
            <?php $img = get_scf_img_loop_url_id($fields['btnOnlineBtn']); ?>
            <li class="liBtnOnlineProducts">
                <a class="btnOnlineProducts" target="_blank" href="<?php echo $fields['urlOnlineBtn']; ?>">
                    <img loading="lazy" src="<?php echo $img[0]; ?>" alt="<?php echo $fields['altOnlineBtn']; ?>" width="<?php echo $img[1]; ?>" height="<?php echo $img[2]; ?>">
                </a>
            </li>
            <?php endforeach; ?>
        </ul>
    </section>
    <?php endif; ?>
    <!-- オンライン予約 -->

    <!-- お電話で注文する -->
    <?php $flugcake = scf::get('flugBtnProductTel'); ?>
    <?php if ($flugcake === '表示'): ?>
    <div class="btnBtnProductTellxn">
        <a class="d_flex j_center ali_center bg_F28962 cl_fff undernone kaku btnBtnProductTel" href="tel:<?php echo scf::get('telBtnProduct'); ?>">
            <span class="d_block t_center iconBtnProductTel">
                <span class="txtNameBtnProductTel">お電話で注文する</span>
                <span class="txtTelBtnProductTel"><?php echo scf::get('telBtnProduct'); ?></span>
            </span>
        </a>
        <p class="t_center cl_453C3C fw_400 txtset txtBtnProductTel"><?php echo scf::get('timeBtnProduct'); ?></p>
    </div>
    <?php endif; ?>
    <!-- お電話で注文する -->

    <!-- 本品に含まれている主なアレルゲン/特定原材料に準ずるもの -->
    <div class="bg_F1ECE8 listInfoProductsPosts">
        <div class="listInfoProductsPostsLxn">
            <section class="secListInfoProductsPosts">
                <h2 class="d_flex j_start ali_end cl_453C3C fw_500 kaku txtset h2ListInfoProductsPosts">
                    <span class="BigH2ListInfoProductsPosts">本品に含まれている主なアレルゲン</span>
                    <span class="littleH2ListInfoProductsPosts">特定原材料（10品目）</span>
                </h2>
                <ul class="d_flex j_start row ulListInfoProductsPosts">
                    <?php foreach (scf::get('chackListAllergyProductsPost') as $key => $val): ?>
                    <li class="bg_fff cl_453C3C fw_500 kaku liListInfoProductsPosts"><?php echo $val; ?></li>
                    <?php endforeach; ?>
                </ul>
            </section>
            <section class="secListInfoProductsPosts secListInfoProductsPosts02">
                <h2 class="d_flex j_start ali_end cl_453C3C fw_500 txtset kaku h2ListInfoProductsPosts">
                    <span class="BigH2ListInfoProductsPosts">本品に含まれている主なアレルゲン</span>
                </h2>
                <ul class="d_flex j_start row ulListInfoProductsPosts ulListInfoProductsPosts02">
                    <?php foreach (scf::get('genzairyoProductsPosts') as $key => $val): ?>
                    <li class="bg_fff cl_453C3C fw_500 kaku liListInfoProductsPosts"><?php echo $val; ?></li>
                    <?php endforeach; ?>
                </ul>
            </section>

        </div>
    </div>
    <!-- 本品に含まれている主なアレルゲン/特定原材料に準ずるもの -->

    <div class="bg_E1E1E1 brdCntProductPostTop03"></div>
    <div class="kaku cl_606060 editorCntProductPost">
        <?php the_content(); ?>
    </div>
</section>