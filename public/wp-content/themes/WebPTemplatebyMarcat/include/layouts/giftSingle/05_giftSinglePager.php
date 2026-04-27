<div class="d_flex j_center ali_center pagerSinglePager">
    <?php
    $prev = get_adjacent_post(true, '', true, 'category');
    $next = get_adjacent_post(true, '', false, 'category');
    ?>
    <div class="prevSinglePagerWap">
        <?php if (!empty($prev)): ?>
            <a class="prevSinglePager" href="<?php echo get_permalink($prev->ID); ?>">
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50" fill="none">
                    <circle cx="25" cy="25" r="25" transform="matrix(-1 0 0 1 50 0)" fill="white" />
                    <path d="M30 26H21L24 24" stroke="#F04E11" />
                </svg>
            </a>
        <?php endif; ?>
    </div>
    <div class="btnPagerSingleLxn">
        <a class="cl_453C3C fw_500 txtSingle btnPagerSingle" href="<?php echo  get_category_link(34); ?>">一覧を見る</a>
    </div>
    <div class="nextSinglePagerWap">
        <?php if (!empty($next)): ?>
            <a class="nextSinglePager" href="<?php echo get_permalink($next->ID); ?>">
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50" fill="none">
                    <circle cx="25" cy="25" r="25" fill="white" />
                    <path d="M20 26H29L26 24" stroke="#F04E11" />
                </svg>
            </a>
        <?php endif; ?>
    </div>
</div>