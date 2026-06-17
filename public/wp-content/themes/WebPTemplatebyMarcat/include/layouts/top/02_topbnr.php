<?php if (!empty(scf::get('urlbtnTopBnrBx'))): ?>
    <div class="wapper topBnr">
        <div class="topBnrBx">
            <a class="btnTopBnrBx" href="<?php echo scf::get('urlbtnTopBnrBx'); ?>">
                <?php $Pcimg = get_scf_img_url('imgPcBnrTopBnrBx'); ?>
                <?php $Spimg = get_scf_img_url('imgSpBnrTopBnrBx'); ?>
                <figure class="bnrTopBnr">
                    <picture>
                        <source media="(min-width: 768px)" srcset="<?php echo esc_url($Pcimg[0]); ?>">
                        <source media="(max-width: 767px)" srcset="<?php echo esc_url($Spimg[0]); ?>">
                        <img loading="lazy" src="<?php echo esc_url($Pcimg[0]); ?>" alt="<?php echo esc_attr('説明テキスト'); ?>" width="<?php echo $Pcimg[1]; ?>" height="<?php echo $Pcimg[2]; ?>">
                    </picture>
                </figure>

            </a>
        </div>
    </div>
<?php endif; ?>