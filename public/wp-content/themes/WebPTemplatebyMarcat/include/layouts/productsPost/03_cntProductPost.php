<section class="secCntProductPost">
    <h1 class="cl_453C3C fw_500 txtset h1CntProductPost">
        <?php echo get_the_title($post->ID); ?>
    </h1>
    <p class="cl_453C3C fw_400 txtset rubyH1CntProductPost">
        <?php echo get_child_category_name(15,); ?>
    </p>
    <p class="kaku cl_453C3C fw_400 txtset text_justify txtCntProductPostTop">
        <?php echo nl2br(scf::get('txtProductsCntTop')); ?>
    </p>
    <div class="bg_E1E1E1 brdCntProductPostTop"></div>
    <div class="priceCntProductPostTop">
        <div class="tablePriceCntProductPostTop">
            <?php echo scf::get('wysiwygPriceCntProductPostTop'); ?>
        </div>
        <ul class="ulPriceCntProductPostTop">
            <li class="d_flex j_start row liPriceCntProductPostTop">
                <h3 class="cl_453C3C kaku txtset fw_500 h3PriceCntProductPostTop">発売日</h3>
                <p class="cl_453C3C fw_400 kaku txtset txtPriceCntProductPostTop">
                    <?php echo scf::get('openProductPost'); ?>
                </p>
            </li>
            <li class="d_flex j_start row liPriceCntProductPostTop">
                <h3 class="cl_453C3C kaku txtset fw_500 h3PriceCntProductPostTop">発売期間</h3>
                <p class="cl_453C3C fw_400 kaku txtset txtPriceCntProductPostTop">
                    <?php echo scf::get('kikanProductPost'); ?>
                </p>
            </li>
        </ul>
    </div>
    <div class="bg_E1E1E1 brdCntProductPostTop02"></div>

    <!--新商品や期間限定-->
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
    <!--新商品や期間限定-->

    <!--ポストタグリスト-->
    <?php $tags = get_the_tags(); ?>
    <?php if ($tags): ?>
    <?php endif; ?>
    <!--ポストタグリスト-->
</section>