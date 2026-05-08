<div class="pagerPoductsPager">
    <div class="pagerPoductsPagerWap">
        <div class="d_flex j_center ali_center bg_F6F4F2 pagerMainPoductsPager">
            <?php
            $prev = get_adjacent_post(true, '', true, 'category');
            $next = get_adjacent_post(true, '', false, 'category');
            ?>
            <div class="prevPoductsPagerWap">
                <?php if (!empty($prev)): ?>
                <a class="d_flex j_between undernone cl_453C3C nextPoductsPager" href="<?php echo get_permalink($prev->ID); ?>">
                    <figure class="iconPoductsPager">
                        <svg xmlns="http://www.w3.org/2000/svg" width="11" height="3" viewBox="0 0 11 3" fill="none">
                            <path d="M10.6523 2.41602H1.65234L4.65234 0.416016" stroke="#F04E11" />
                        </svg>
                    </figure>
                    <span class="txtPoductsPager">前の商品</span>
                </a>
                <?php endif; ?>
            </div>
            <div class="btnPagerPoductsLxn">
                <a class="cl_453C3C fw_500 txtPoducts btnPagerPoducts" href="<?php echo  get_category_link(2); ?>">商品一覧</a>
            </div>
            <div class="nextPoductsPagerWap">
                <?php if (!empty($next)): ?>
                <a class="d_flex j_between undernone cl_453C3C prevPoductsPager" href="<?php echo get_permalink($prev->ID); ?>">
                    <span class="txtPoductsPager">次の商品</span>
                    <figure class="iconPoductsPager">
                        <svg xmlns="http://www.w3.org/2000/svg" width="11" height="3" viewBox="0 0 11 3" fill="none">
                            <path d="M0 2.41602H9L6 0.416016" stroke="#F04E11" />
                        </svg>
                    </figure>
                </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>