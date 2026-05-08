<?php $faqs = SCF::get_term_meta($cat, 'category', 'catFaqPosts'); ?>

<div class="bg_F1ECE8 producetFaq">
    <div class="wapper producetFaqWap">
        <section class="secProductFaq">
            <h3 class="cl_453C3C fw_500 txtset h3ProducetFaqTitle">お買い物ガイド・よくあるご質問</h3>
            <ul class="sbProducetFaq">
                <?php foreach ($faqs as $key => $val): ?>
                <li class="bg_FFF liProducetFaq">
                    <div class="cntLiProducetFaq">
                        <div class="d_flex j_between c_pointer titleCntLiProducetFaq  off jstitleCntLiSbShoppingguideAllPosts">
                            <h3 class="cl_453C3C kaku fw_500 txtset h3ProducetFaq">
                                Q.<?php echo get_the_title($val); ?>
                            </h3>
                            <figure class="iconProducetFaq">
                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="8" viewBox="0 0 13 8" fill="none">
                                    <path d="M0.355469 0.353516L6.35547 6.35352L12.3555 0.353516" stroke="#453C3C" />
                                </svg>
                            </figure>
                        </div>
                        <div class="mainCntLiProducetFaqLxn jsmainCntLiSbShoppingguideAllPostsLxn">
                            <div class="kaku mainCntLiProducetFaq">
                                <?php echo get_post_content_by_id($val); ?>

                            </div>
                        </div>
                    </div>
                </li>
                <?php endforeach; ?>
            </ul>
            <div class="btnProducetArchiveFaqLxn">
                <a class="undernone d_flex j_center ali_center brd_F04E11 cl_F04E11 kaku fw_500 txtset btnProducetArchiveFaq" href="<?php echo home_url('/faq/'); ?>">
                    <span class="iconBtnProducetArchiveFaq">一覧を見る</span>
                    <!--bg:../img/productTop/iconBtnProducetArchiveFaq.svg-->
                </a>
            </div>

        </section>
    </div>
</div>