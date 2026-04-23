<div class="weddingSweetsProducts">
    <div class="wapper weddingSweetsProductsWap">
        <section class="secWeddingSweetsProducts">
            <h2 class="cl_453C3C fw_500 txtset h2WeddingSweetsProducts">ウェディングギフトに人気の商品</h2>
            <ul class="d_flex j_start row ulWeddingSweetsProducts">
                <?php foreach (scf::get('loopProductsWedding') as $fields): ?>
                    <li class="liWeddingSweetsProducts">
                        <a class="d_block cl_453C3C btnWeddingSweetsProducts" href="<?php echo $fields['titleProductsWedding']; ?>" target="">
                            <figure class="photoWeddingSweetsProducts">
                                <?php $img = get_scf_img_loop_url_id($fields['imgProductsWedding']); ?>
                                <img loading="lazy" src="<?php echo $img[0]; ?>" alt="" width="<?php echo $img[1]; ?>" height="<?php echo $img[2]; ?>">
                            </figure>
                            <h3 class="cl_453C3C underline fw_500 txtset h3WeddingSweetsProducts">
                                <?php echo $fields['titleProductsWedding']; ?>
                            </h3>
                            <p class=" text_justify txtset fw_400 cl_453C3C txtWeddingSweetsProducts">
                                <?php echo nl2br($fields['txtProductsWedding']); ?>
                            </p>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </section>
    </div>
</div>