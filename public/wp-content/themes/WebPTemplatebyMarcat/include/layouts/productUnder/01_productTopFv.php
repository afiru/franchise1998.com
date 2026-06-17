<div class="underFv aboutUnderFv">
    <div class="wapper aboutUnderFvWap">
        <section class="secAboutUnderFv">
            <h1 class="cl_421D12 fw_500 CormorantUnicase txtset h1AboutUnderFv">COLLECTION</h1>
            <p class="cl_453C3C fw_500 txtset txtAboutUnderFv">商品一覧</p>
        </section>
    </div>

    <div class="pore aboutUnderFvLxn">
        <figure class="pc_only poab txtAboutUnderFvFig">
            <picture>
                <source media="(min-width: 768px)" srcset="<?php echo esc_url(get_template_directory_uri() . '/img/about/txtAboutUnderFvPc.svg'); ?>">
                <source media="(max-width: 767px)" srcset="<?php echo esc_url(get_template_directory_uri() . '/img/about/txtAboutUnderFvSp.svg'); ?>">
                <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri() . '/img/about/txtAboutUnderFvPc.svg'); ?>" alt="<?php echo esc_attr('素材へのこだわり'); ?>" width="9.07" height="222.44">
            </picture>
        </figure>
        <?php if ($cat == 2): ?>
            <figure class="picAboutUnderFv">
                <picture>
                    <source media="(min-width: 768px)" srcset="<?php echo esc_url(get_template_directory_uri() . '/img/productTop/picProductTopUnderFvPc.png'); ?>">
                    <source media="(max-width: 767px)" srcset="<?php echo esc_url(get_template_directory_uri() . '/img/productTop/picProductTopUnderFvSp.png'); ?>">
                    <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri() . '/img/productTop/picProductTopUnderFvPc.png'); ?>" alt="<?php echo esc_attr('素材へのこだわり'); ?>" width="1698" height="696">
                </picture>
            </figure>
        <?php endif; ?>
    </div>
</div>
<div class="wapper pore aboutUnderProductsLxn">
    <div class="poab bg_EBEBEB brdLongTopCollection"></div>
    <div class="poab bg_F28962 brdShortTopCollection"></div>
</div>
<div class="breadUnder">
    <div class="wapper breadUnderWap">
        <aside class="kaku breadList">
            <?php if (function_exists('bcn_display')) {
                bcn_display();
            } ?>
        </aside>
    </div>
</div>