<div id="" class="partyPlanGiftGoods">
    <div class="wapper partyPlanGiftGoodsWap">
        <section class="secPartyPlanGiftGoods">
            <h2 class="cl_453C3C fw_400 txtset h2PartyPlanGiftGoods">パーティーをさらに盛り上げるギフトやグッズも合わせてご注文いただけます</h2>
            <h3 class="cl_772D2D fw_500 txtset h3PartyPlanGiftGoods">GIFT&GOODS</h3>
            <p class="cl_453C3C fw_500 txtset rubyPartyPlanGiftGoods">ギフト＆グッズ</p>
        </section>

        <section class="productsPlanGiftGoods">
            <div class="d_flex j_between ali_end titleProductsPlanGiftGoods">
                <h4 class="cl_772D2D fw500 CormorantUnicase h4TitleProductsPlanGiftGoods">FLOWER</h4>
                <p class="cl_453C3C fw_500 txtset rubyTitleProductsPlanGiftGoods">お花のギフト</p>
            </div>

            <ul class="d_flex j_start ulProductsPlanGiftGoods">
                <?php foreach (scf::get('loopPlanFlower') as $fields): ?>
                    <li class="liProductsPlanGiftGoods">
                        <div class="d_flex j_between row liProductsPlanGiftGoodsFx">
                            <figure class="photoProductsPlanGiftGoods">
                                <?php $img = get_scf_img_loop_url_id($fields['imgLoopPlanFlower']); ?>
                                <img loading="lazy" src="<?php echo $img[0]; ?>" alt="<?php echo $fields['titleLoopPlanFlower']; ?>写真" width="<?php echo $img[1]; ?>" height="<?php echo $img[2]; ?>">
                            </figure>
                            <section class="secProductsPlanGiftGoods">
                                <h4 class="cl_772D2D fw_500 txtset h4ProductsPlanGiftGoods"><?php echo $fields['titleLoopPlanFlower']; ?></h4>
                                <p class="cl_772D2D fw_600 txtset priceProductsPlanGiftGoods"><?php echo $fields['priceLoopPlanFlower']; ?></p>
                            </section>
                        </div>
                        <p class="cl_453C3C fw_400 txtset text_justify txtProductsPlanGiftGoods">
                            <?php echo nl2br($fields['txtLoopPlanFlower']); ?>
                        </p>
                    </li>
                <?php endforeach; ?>

            </ul>

            <p class="cl_6C6262 fw_400 txtDetailDrinkMenuOther">
                ※写真はイメージです。 ご希望の色味などございましたらお気軽にお問い合わせください。
            </p>
        </section>


        <section class="productsPlanGiftGoods productsPlanGiftGoods02">
            <div class="d_flex j_between ali_end titleProductsPlanGiftGoods">
                <h4 class="cl_772D2D fw500 CormorantUnicase h4TitleProductsPlanGiftGoods">SOUVENIR</h4>
                <p class="cl_453C3C fw_500 txtset rubyTitleProductsPlanGiftGoods">手土産</p>
            </div>

            <ul class="d_flex j_start ulProductsPlanGiftGoods">
                <?php foreach (scf::get('loopProductsSouvenir') as $fields): ?>
                    <li class="liProductsPlanGiftGoods">
                        <div class="d_flex j_between row liProductsPlanGiftGoodsFx">
                            <figure class="photoProductsPlanGiftGoods">
                                <?php $img = get_scf_img_loop_url_id($fields['imgloopProductsSouvenir']); ?>
                                <img loading="lazy" src="<?php echo $img[0]; ?>" alt="<?php echo $fields['titleloopProductsSouvenir']; ?>写真" width="<?php echo $img[1]; ?>" height="<?php echo $img[2]; ?>">
                            </figure>
                            <section class="secProductsPlanGiftGoods">
                                <h4 class="cl_772D2D fw_500 txtset h4ProductsPlanGiftGoods"><?php echo $fields['titleloopProductsSouvenir']; ?></h4>
                                <p class="cl_772D2D fw_600 txtset priceProductsPlanGiftGoods"><?php echo $fields['priceloopProductsSouvenir']; ?></p>
                            </section>
                        </div>

                        <p class="cl_453C3C fw_400 txtset text_justify txtProductsPlanGiftGoods">
                            <?php echo nl2br($fields['txtloopProductsSouvenir']); ?>
                        </p>
                    </li>
                <?php endforeach; ?>

            </ul>

            <p class="cl_6C6262 fw_400 txtDetailDrinkMenuOther">
                ※写真はイメージです。 ご希望の色味などございましたらお気軽にお問い合わせください。
            </p>
        </section>


        <section class="productsPlanGiftGoods productsPlanGiftGoods02">
            <div class="d_flex j_between ali_end titleProductsPlanGiftGoods">
                <h4 class="cl_772D2D fw500 CormorantUnicase h4TitleProductsPlanGiftGoods">CANDLE</h4>
                <p class="cl_453C3C fw_500 txtset rubyTitleProductsPlanGiftGoods">キャンドル</p>
            </div>

            <ul class="d_flex j_start ulProductsPlanGiftGoods">
                <?php foreach (scf::get('loopProductsCandle') as $fields): ?>
                    <li class="liProductsPlanGiftGoods">
                        <div class="d_flex j_between row liProductsPlanGiftGoodsFx">
                            <figure class="photoProductsPlanGiftGoods">
                                <?php $img = get_scf_img_loop_url_id($fields['imgloopProductsCandle']); ?>
                                <img loading="lazy" src="<?php echo $img[0]; ?>" alt="<?php echo $fields['titleloopProductsCandle']; ?>写真" width="<?php echo $img[1]; ?>" height="<?php echo $img[2]; ?>">
                            </figure>
                            <section class="secProductsPlanGiftGoods">
                                <h4 class="cl_772D2D fw_500 txtset h4ProductsPlanGiftGoods"><?php echo $fields['titleloopProductsCandle']; ?></h4>
                                <p class="cl_772D2D fw_600 txtset priceProductsPlanGiftGoods"><?php echo $fields['priceloopProductsCandle']; ?></p>
                            </section>
                        </div>

                        <?php if (!empty($fields['txtloopProductsCandle'])): ?>
                            <p class="cl_453C3C fw_400 txtset text_justify txtProductsPlanGiftGoods">
                                <?php echo nl2br($fields['txtloopProductsCandle']); ?>
                            </p>
                        <?php endif; ?>
                    </li>
                <?php endforeach; ?>

            </ul>

            <p class="cl_6C6262 fw_400 txtDetailDrinkMenuOther">
                ※写真はイメージです。 ご希望の色味などございましたらお気軽にお問い合わせください。
            </p>
        </section>
    </div>
</div>