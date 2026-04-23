<div id="" class="bg_F1ECE8 partyPlanDrinkMenu">
    <div id="drink" class="wapper pore partyPlanDrinkMenuWap">
        <div class="poab bg_FFFFFF brdLongTopDrinkMenu"></div>
        <div class="poab bg_F28962 brdShortTopDrinkMenu"></div>

        <section class="secPartyPlanDrinkMenu">
            <h2 class="cl_453C3C fw_400 txtset h2PartyPlanDrinkMenu">パーティをさらにリッチに盛り上げるドリンクメニュー</h2>
            <h3 class="cl_772D2D fw_500 txtset h3PartyPlanDrinkMenu">DRINK MENU</h3>
            <p class="cl_453C3C fw_500 txtset rubyPartyPlanDrinkMenu">ドリンクメニュー</p>
        </section>


        <ul class="d_flex j_start ulPartyPlanDrinkMenu">
            <?php foreach (scf::get('loopDrinkMenu') as $fields): ?>
            <li class="liPartyPlanDrinkMenu">
                <div class="d_flex j_between row liPartyPlanDrinkMenuFx">
                    <figure class="photoPartyPlanDrinkMenu">
                        <?php $img = get_scf_img_loop_url_id($fields['imgsDrinkMenu']); ?>
                        <img loading="lazy" src="<?php echo $img[0]; ?>" alt="<?php echo $fields['titleDrinkMenu']; ?>写真" width="<?php echo $img[1]; ?>" height="<?php echo $img[2]; ?>">
                    </figure>
                    <section class="secPartyPlanDrinkMenuFx">
                        <h4 class="cl_772D2D fw_500 txtset h4PartyPlanDrinkMenu"><?php echo $fields['titleDrinkMenu']; ?></h4>
                        <p class="cl_772D2D fw_600 txtset pricePartyPlanDrinkMenu"><?php echo $fields['priceDrinkMenu']; ?></p>
                    </section>
                </div>
                <p class="cl_453C3C fw_400 txtset text_justify txtPartyPlanDrinkMenu">
                    <?php echo nl2br($fields['txtdrinkmenu']); ?>
                </p>
            </li>
            <?php endforeach; ?>

        </ul>

        <p class="cl_6C6262 fw_400 txtDetailDrinkMenuOther">
            ※写真はイメージです。※掲載の商品以外にもお取り扱いがございます。お気軽にお問い合わせください。
        </p>
        <div class="btnDetailDrinkMenuLxn">
            <a class="d_flex j_center ali_center bg_F28962 kaku cl_fff undernone btnDetailDrinkMenu" href="">
                ご注文・商品受け取り方法について
            </a>
        </div>
    </div>
</div>