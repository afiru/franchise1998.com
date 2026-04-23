<div class="accessShops">
    <div class="wapper accessShopsWap">
        <ul class="d_flex j_start row accessShopsFx">
            <?php foreach (scf::get('loopAccessLocation') as $fields): ?>
            <li class="liAccessShops">
                <figure class="photoAccessShops">
                    <?php $img = get_scf_img_loop_url_id($fields['imgLoopAccessLocation']); ?>
                    <img loading="lazy" src="<?php echo $img[0]; ?>" alt="<?php echo $fields['titleAccessLocation']; ?> " width="<?php echo $img[1]; ?>" height="<?php echo $img[2]; ?>">
                </figure>
                <h3 class="cl_453C3C fw_500 txtset h3AccessShops"><?php echo $fields['titleAccessLocation']; ?></h3>
                <h4 class="cl_453C3C fw_400 txtse h4AccessShops"><?php echo $fields['genreAccessLocation']; ?></h4>
                <p class="cl_453C3C fw_400 txtset kaku text_justify txtAccessShops">
                    <?php echo nl2br($fields['txtAccessLocation']); ?>
                </p>
                <div class="btnAccessShopsLxn">
                    <a class="d_flex j_center ali_center kaku txtset t_center undernone cl_F04E11 fw_500 btnAccessShops" href="<?php echo $fields['urlAccessLocation']; ?>">
                        <span class="kaku icnBtnAccessShops">サイトはこちら</span>
                        <!--bg:../img/access/icnBtnAccessShops.svg-->
                    </a>
                </div>
            </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>