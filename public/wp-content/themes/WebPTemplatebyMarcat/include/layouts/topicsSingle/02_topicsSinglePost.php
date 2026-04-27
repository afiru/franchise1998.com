<?php if (have_posts()) while (have_posts()) : the_post();  ?>
    <div class="topicsSinglePost">
        <div class="wapper topicsSinglePostWap">
            <section class="secTopicsSinglePost">
                <time class="d_block cl_121212 fw_400 kaku timeTopicsSingle"><?php echo get_the_date('Y.m.d', $post->ID); ?></time>
                <h1 class="cl_453C3C fw_500 text_justify h1TopicsSinglePost">
                    <?php echo get_the_title($post->ID); ?>
                </h1>
                <div class="bg_6C6262 brdTopicsSinglePostWap">
                    <?php the_content(); ?>
                </div>
            </section>
        </div>
    </div>
<?php endwhile; // end of the loop.
?>
<div class="pagerSinglePager">
    <div class="wapper pagerSinglePagerWap">
        <div class="d_flex j_center ali_center pagerMainSinglePager">
            <?php
            $prev = get_adjacent_post(true, '', true, 'category');
            $next = get_adjacent_post(true, '', false, 'category');
            ?>
            <div class="prevSinglePagerWap">
                <?php if (!empty($prev)): ?>
                    <a class="prevSinglePager" href="<?php echo get_permalink($prev->ID); ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50" fill="none">
                            <circle cx="25" cy="25" r="25" transform="matrix(-1 0 0 1 50 0)" fill="#F1ECE8" />
                            <path d="M30 26H21L24 24" stroke="#F04E11" />
                        </svg>
                    </a>
                <?php endif; ?>
            </div>
            <div class="btnPagerSingleLxn">
                <a class="cl_453C3C fw_500 txtSingle btnPagerSingle" href="<?php echo  get_category_link(1); ?>">一覧を見る</a>
            </div>
            <div class="nextSinglePagerWap">
                <?php if (!empty($next)): ?>
                    <a class="nextSinglePager" href="<?php echo get_permalink($next->ID); ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50" fill="none">
                            <circle cx="25" cy="25" r="25" fill="#F1ECE8" />
                            <path d="M20 26H29L26 24" stroke="#F04E11" />
                        </svg>
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>