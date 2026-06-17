<div id="salon" class="accessSlon">
    <div class="wapper pore accessSlonWap">
        <div class="poab bg_EBEBEB brdLongAccessSlonWap"></div>
        <div class="poab bg_F28962 brdShortAccessSlonWap"></div>
        <section class="secAccessSlon">
            <h2 class="t_center cl_453C3C txtset fw_500 h2AccessSlon">Salon de Franchise</h2>
            <p class="t_center cl_453C3C fw_500 txtset rubyAccessSlon">（サロン・ド・フランシーズ）</p>

            <div class="d_flex j_between row accessSlonFx">
                <div class="photosAccessSlon">
                    <!-- スライダー -->
                    <div class="swiper jsAccess03slider">
                        <div class="swiper-wrapper">
                            <?php foreach (scf::get('loopAccessFranSalon') as $fields): ?>
                                <?php $Pcimg = get_scf_img_loop_url_id($fields['imgPcAccessFranSalon']); ?>
                                <div class="swiper-slide">
                                    <img loading="lazy" src="<?php echo esc_url($Pcimg[0]); ?>" alt="<?php echo $fields['altAccessFranSalon']; ?> " width="<?php echo $Pcimg[1]; ?>" height="<?php echo $Pcimg[2]; ?>">
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <!-- サムネイル -->
                    <div class="swiper jsAccess03sliderThumb">

                        <div class="swiper-wrapper">
                            <?php foreach (scf::get('loopAccessFranSalon') as $fields): ?>
                                <?php $Pcimg = get_scf_img_loop_url_id($fields['imgPcAccessFranSalon']); ?>
                                <div class="swiper-slide">
                                    <img loading="lazy" src="<?php echo esc_url($Pcimg[0]); ?>" alt="<?php echo $fields['altAccessFranSalon']; ?> " width="<?php echo $Pcimg[1]; ?>" height="<?php echo $Pcimg[2]; ?>">
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>

                <div class="mainAccessSlon">
                    <ul class="ulMainAccessSlon">
                        <li class="d_flex j_between ali_center liMainAccessSlon">
                            <h3 class="cl_453C3C fw_500 txtset h3MainAccessSlon">住所</h3>
                            <div class="cntMainAccessSlon">
                                <p class="cl_453C3C fw_400 txtset txtCntMainAccessSlon">〒599-8237 大阪府堺市中区深井水池町3254番地</p>
                            </div>
                        </li>
                        <li class="d_flex j_between ali_center liMainAccessSlon">
                            <h3 class="cl_453C3C fw_500 txtset h3MainAccessSlon">TEL</h3>
                            <div class="d_flex j_start cntMainAccessSlon">
                                <p class="cl_453C3C fw_400 txtset txtCntMainAccessSlon"><a href="tel:072-275-7887">072-275-7887</a></p>
                            </div>
                        </li>
                        <li class="d_flex j_between ali_center liMainAccessSlon">
                            <h3 class="cl_453C3C fw_500 txtset h3MainAccessSlon">営業時間</h3>
                            <div class="cntMainAccessSlon">
                                <p class="cl_453C3C fw_400 txtset txtCntMainAccessSlon">11:00～19:00（ラストオーダー 18:00）</p>
                            </div>
                        </li>
                        <li class="d_flex j_between ali_center liMainAccessSlon">
                            <h3 class="cl_453C3C fw_500 txtset h3MainAccessSlon">定休日</h3>
                            <div class="cntMainAccessSlon">
                                <p class="cl_453C3C fw_400 txtset txtCntMainAccessSlon">火曜日</p>
                            </div>
                        </li>
                        <li class="d_flex j_between ali_center liMainAccessSlon">
                            <h3 class="cl_453C3C fw_500 txtset h3MainAccessSlon">駐車場</h3>
                            <div class="cntMainAccessSlon">
                                <p class="cl_453C3C fw_400 txtset txtCntMainAccessSlon">メイプルタウン共有の無料駐車場をご利用ください。</p>
                            </div>
                        </li>
                        <li class="d_flex j_between ali_center liMainAccessSlon">
                            <h3 class="cl_453C3C fw_500 txtset h3MainAccessSlon">公共交通</h3>
                            <div class="cntMainAccessSlon">
                                <p class="cl_453C3C fw_400 txtset txtCntMainAccessSlon">南海泉北線「深井」駅（東口）から徒歩8分</p>
                            </div>
                        </li>
                        <li class="d_flex j_between ali_center liMainAccessSlon">
                            <h3 class="cl_453C3C fw_500 txtset h3MainAccessSlon">決済<br class="sp_only">サービス</h3>
                            <div class="cntMainAccessSlon">
                                <p class="cl_453C3C fw_400 txtset txtCntMainAccessSlonList">【クレジットカード】VISA、MasterCard、JCB、AMEX、Diners discover、銀聯</p>
                                <p class="cl_453C3C fw_400 txtset txtCntMainAccessSlonList txtCntMainAccessSlonList02">【電子マネー】iD、nanaco、Edy、QUICPay、交通系ICカード（PiTaPa以外）</p>
                                <p class="cl_453C3C fw_400 txtset txtCntMainAccessSlonList txtCntMainAccessSlonList02">【QRコード決済】PayPay、ｄ払い、auPAY</p>
                            </div>
                        </li>
                        <li class="d_flex j_between ali_center liMainAccessSlon">
                            <h3 class="cl_453C3C fw_500 txtset h3MainAccessSlon">SNS</h3>
                            <div class="cntMainAccessSlon">
                                <ul class="d_flex j_start snsMainAccessSlon">
                                    <li class="liSnsMainAccessSlon">
                                        <a class="d_block btnSnsMainAccessSlon" href="https://www.instagram.com/salon_de_franchise/" target="_blank">
                                            <picture>
                                                <source media="(min-width: 768px)" srcset="<?php echo esc_url(get_template_directory_uri() . '/img/access/btnSnsMainAccessFlan01Pc.svg'); ?>">
                                                <source media="(max-width: 767px)" srcset="<?php echo esc_url(get_template_directory_uri() . '/img/access/btnSnsMainAccessFlan01Sp.svg'); ?>">
                                                <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri() . '/img/access/btnSnsMainAccessFlan01Pc.svg'); ?>" alt="<?php echo esc_attr('SNS01'); ?>" width="40" height="40">
                                            </picture>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>

                    <div class="bg_F1ECE8 tyuiMainAccessSlon">
                        <section class="secTyuiMainAccessSlon">
                            <h2 class=" cl_453C3C fw_500 txtset h2TyuiMainAccessSlon">バリアフリー・小さなお子様連れの方へ</h2>
                            <p class="cl_453C3C fw_400 txtset txtTyuiMainAccessSlon">
                                ・スロープがありますので、ベビーカーや車いすでの入店が可能です。<br>
                                ・キッズルーム完備。小さなお子様を遊ばせながらカフェをお楽しみいただけます。<br>
                                ・店内にお手洗いがございます（お子様専用の便器も完備）。<br>
                                ・おむつ交換台はございません。フランシーズのお手洗いをご利用ください。<br>
                                ・授乳室はサンパレス館内にございます。是非、ご利用ください。

                            </p>
                        </section>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>