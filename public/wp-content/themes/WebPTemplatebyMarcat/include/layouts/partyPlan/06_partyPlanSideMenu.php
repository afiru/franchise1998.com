<div id="side" class="bg_F1ECE8 partyPlanSideMenu">
    <div class="wapper partyPlanSideMenuWap">
        <section class="secPartyPlanSideMenu">
            <h2 class="cl_453C3C fw_400 txtset h2PartyPlanSideMenu">上記セットにプラスして選べる追加メニュー</h2>
            <h3 class="cl_772D2D fw_500 txtset h3PartyPlanSideMenu">SIDE MENU</h3>
            <p class="cl_453C3C fw_500 txtset rubyPartyPlanSideMenu">サイドメニュー</p>
        </section>

        <ul class="d_flex j_start ulPartyPlanSideMenu">
            <?php foreach (scf::get('loopSideMenu') as $fields): ?>
                <li class="liPartyPlanSideMenu">
                    <figure class="photoPartyPlanSideMenu">
                        <?php $img = get_scf_img_loop_url_id($fields['imgsSideMenu']); ?>
                        <img loading="lazy" src="<?php echo $img[0]; ?>" alt="<?php echo $fields['titleSideMenu']; ?>写真" width="<?php echo $img[1]; ?>" height="<?php echo $img[2]; ?>">
                    </figure>
                    <h4 class="cl_772D2D fw_500 txtset h4PartyPlanSideMenu"><?php echo $fields['titleSideMenu']; ?></h4>
                    <p class="cl_772D2D fw_600 txtset pricePartyPlanSideMenu"><?php echo $fields['priceSideMenu']; ?></p>
                    <p class="cl_453C3C fw_400 txtset text_justify txtPartyPlanSideMenu">
                        <?php echo nl2br($fields['txtSideMenu']); ?>
                    </p>
                </li>

            <?php endforeach; ?>

        </ul>

        <p class="cl_6C6262 fw_400 txtDetailSideMenuOther">
            ※写真はイメージです。※商品の変更や、商品サイズの変更なども承っております。お気軽にお問い合わせください。
        </p>
        <div class="btnDetailSideMenuLxn">
            <a class="d_flex j_center ali_center bg_F28962 kaku cl_fff undernone btnDetailSideMenu" href="">
                ご注文・商品受け取り方法について
            </a>
        </div>
    </div>
</div>