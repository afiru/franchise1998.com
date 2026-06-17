<div id="" class="accessYukitaka">
    <div id="ekitaka" class="wapper pore accessYukitakaWap">
        <div class="poab bg_EBEBEB brdLongAccessYukitakaWap"></div>
        <div class="poab bg_F28962 brdShortAccessYukitakaWap"></div>
        <section id="" class="secAccessYukitaka">
            <h2 class="t_center cl_453C3C txtset fw_500 h2AccessYukitaka">花とお菓子の工房 フランシーズ<br>エキ・タカ泉ケ丘店</h2>

            <div class="d_flex j_between row accessYukitakaFx">
                <div class="photosAccessYukitaka">
                    <!-- スライダー -->
                    <div class="swiper jsAccess02slider">
                        <div class="swiper-wrapper">
                            <?php foreach (scf::get('loopAccessFranEkikita') as $fields): ?>
                            <?php $Pcimg = get_scf_img_loop_url_id($fields['imgPcAccessFranEkikita']); ?>
                            <div class="swiper-slide">
                                <img loading="lazy" src="<?php echo esc_url($Pcimg[0]); ?>" alt="<?php echo $fields['altAccessFranEkikita']; ?> " width="<?php echo $Pcimg[1]; ?>" height="<?php echo $Pcimg[2]; ?>">
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <!-- サムネイル -->
                    <div class="swiper jsAccess02sliderThumb">
                        <div class="swiper-wrapper">
                            <?php foreach (scf::get('loopAccessFranEkikita') as $fields): ?>
                            <?php $Pcimg = get_scf_img_loop_url_id($fields['imgPcAccessFranEkikita']); ?>
                            <div class="swiper-slide">
                                <img loading="lazy" src="<?php echo esc_url($Pcimg[0]); ?>" alt="<?php echo $fields['altAccessFranEkikita']; ?> " width="<?php echo $Pcimg[1]; ?>" height="<?php echo $Pcimg[2]; ?>">
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>

                <div class="mainAccessYukitaka">
                    <ul class="ulMainAccessYukitaka">
                        <li class="d_flex j_between ali_center liMainAccessYukitaka">
                            <h3 class="cl_453C3C fw_500 txtset h3MainAccessYukitaka">住所</h3>
                            <div class="cntMainAccessYukitaka">
                                <p class="cl_453C3C fw_400 txtset txtCntMainAccessYukitaka">〒590-0105　大阪府堺市南区竹城台1-1-1　南海泉北線「泉ヶ丘」駅ナカ</p>
                            </div>
                        </li>
                        <li class="d_flex j_between ali_center liMainAccessYukitaka">
                            <h3 class="cl_453C3C fw_500 txtset h3MainAccessYukitaka">TEL</h3>
                            <div class="d_flex j_start cntMainAccessYukitaka">
                                <p class="cl_453C3C fw_400 txtset txtCntMainAccessYukitaka"><a href="tel:0120-656-567">0120-656-567</a>（通話無料）</p>
                                <p class="cl_453C3C fw_400 txtset txtCntMainAccessYukitaka txtCntMainAccessYukitaka02"><a href="tel:072-281-1010">072-281-1010</a></p>
                            </div>
                        </li>
                        <li class="d_flex j_between ali_center liMainAccessYukitaka">
                            <h3 class="cl_453C3C fw_500 txtset h3MainAccessYukitaka">FAX</h3>
                            <div class="cntMainAccessYukitaka">
                                <p class="cl_453C3C fw_400 txtset txtCntMainAccessYukitaka">072-281-1551</p>
                            </div>
                        </li>
                        <li class="d_flex j_between ali_center liMainAccessYukitaka">
                            <h3 class="cl_453C3C fw_500 txtset h3MainAccessYukitaka">営業時間</h3>
                            <div class="cntMainAccessYukitaka">
                                <p class="cl_453C3C fw_400 txtset txtCntMainAccessYukitaka">
                                    ケーキ類の販売／12:00～20:00<br>焼き菓子のみの販売／10:00～12:00・20:00～21:00
                                </p>
                            </div>
                        </li>
                        <li class="d_flex j_between ali_center liMainAccessYukitaka">
                            <h3 class="cl_453C3C fw_500 txtset h3MainAccessYukitaka">定休日</h3>
                            <div class="cntMainAccessYukitaka">
                                <p class="cl_453C3C fw_400 txtset txtCntMainAccessYukitaka">エキ・タカ泉ケ丘店定休日に準ずる
                                </p>
                            </div>
                        </li>
                        <li class="d_flex j_between ali_center liMainAccessYukitaka">
                            <h3 class="cl_453C3C fw_500 txtset h3MainAccessYukitaka">駐車場</h3>
                            <div class="cntMainAccessYukitaka">
                                <p class="cl_453C3C fw_400 txtset txtCntMainAccessYukitaka">泉北高島屋の駐車場を利用可能</p>
                            </div>
                        </li>
                        <li class="d_flex j_between ali_center liMainAccessYukitaka">
                            <h3 class="cl_453C3C fw_500 txtset h3MainAccessYukitaka">公共交通</h3>
                            <div class="cntMainAccessYukitaka">
                                <p class="cl_453C3C fw_400 txtset txtCntMainAccessYukitaka">南海泉北線「泉ヶ丘」駅</p>
                            </div>
                        </li>
                        <li class="d_flex j_between ali_center liMainAccessYukitaka">
                            <h3 class="cl_453C3C fw_500 txtset h3MainAccessYukitaka">決済<br class="sp_only">サービス</h3>
                            <div class="cntMainAccessYukitaka">
                                <p class="cl_453C3C fw_400 txtset txtCntMainAccessYukitakaList">泉北高島屋に準ずる</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
    </div>
</div>