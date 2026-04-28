<?php $cat_id = get_child_category_id(15); ?>
<?php $faqs = SCF::get_term_meta($cat_id, 'category', 'catFaqPosts'); ?>
<div class="bg_F1ECE8 productFaq">
    <div class="wapper productFaqWap">
        <section class="secProductFaq">
            <h2 class="t_center cl_421D12 fw_500 txtset h2ProductFaq">お買い物ガイド・よくあるご質問</h2>

            <ul class="ulProductFaq">
                <?php foreach ($faqs as $key => $val): ?>
                    <li class="bg_F1ECE8 liProductFaq">
                        <div class="cntLiProductFaq">
                            <div class="d_flex j_between c_pointer titleCntLiProductFaq jstitleCntLiProductFaq off">
                                <h3 class="cl_453C3C kaku fw_500 txtset h3ProductFaq">
                                    <?php echo get_the_title($val); ?>
                                </h3>
                                <figure class="iconProductFaq">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="8" viewBox="0 0 13 8" fill="none">
                                        <path d="M0.355469 0.353516L6.35547 6.35352L12.3555 0.353516" stroke="#453C3C" />
                                    </svg>
                                </figure>
                            </div>
                            <div class="mainCntLiProductFaqLxn jsmainCntLiProductFaqLxn">
                                <div class="mainCntLiProductFaq">
                                    <?php get_post_content_by_id($val); ?>
                                </div>
                            </div>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        </section>
    </div>
</div>