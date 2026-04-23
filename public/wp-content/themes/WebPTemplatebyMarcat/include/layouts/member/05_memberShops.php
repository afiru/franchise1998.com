<div class="bg_F1ECE8 memberShops">
    <div class="wapper memberShopsWap">
        <section class="secMemberShops">
            <h2 class="cl_453C3C fw_500 txtset h2MemberShops">対象店舗</h2>

            <ul class="d_flex j_between row ulMemberShops">
                <?php foreach (scf::get('loopMemberShop') as $fields): ?>
                    <li class="liMemberShops">
                        <figure class="photoMemberShops">
                            <?php $img = get_scf_img_loop_url_id($fields['imgloopMemberShop']); ?>
                            <img loading="lazy" src="<?php echo $img[0]; ?>" alt="<?php echo $fields['titleloopMemberShop']; ?> " width="<?php echo $img[1]; ?>" height="<?php echo $img[2]; ?>">
                        </figure>
                        <h3 class="cl_453C3C fw_500 txtset h3MemberShops"><?php echo $fields['titleloopMemberShop']; ?></h3>
                        <h4 class="cl_453C3C fw_400 txtse h4MemberShops"><?php echo $fields['genreloopMemberShop']; ?></h4>
                        <p class="cl_453C3C fw_400 txtset text_justify txtMemberShops">
                            <?php echo nl2br($fields['txtloopMemberShop']); ?>
                        </p>
                        <div class="btnMemberShopsLxn">
                            <a class="d_flex j_center ali_center txtset t_center cl_F04E11 fw_500 btnMemberShops">
                                <span class="icnBtnMemberShops">サイトはこちら</span>
                                <!--bg:../img/member/icnBtnMemberShops.svg-->
                            </a>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
            <p class="cl_453C3C fw_500 txtset textLastMemberShops">
                ※ご購入時にポイントカード・ポイントアプリをお持ちでない場合、ポイントの後付けはできませんのでご容赦ください。<br>※ポイント有効期限は、最終利用日から2年間です。
            </p>
        </section>
    </div>
</div>