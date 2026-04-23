<?php
$paged = get_query_var('paged') ? get_query_var('paged') : 1;
$args = array(
    'post_type'      => 'post',
    'posts_per_page' => 20,
    'paged'          => $paged,
    'cat'            => 39, // カテゴリーID
);
$query = new WP_Query($args);
?>
<?php if ($query->have_posts()) : ?>
<div class="voiceLoop">
    <div class="wapper voiceLoopWap">
        <ul class="ulVoiceLoop">
            <?php while ($query->have_posts()) : $query->the_post(); ?>
            <li class="liVoiceLoop">
                <time class="d_block cl_929292 fw_400 kaku timeVoiceLoop"><?php echo get_the_date('Y.m.d', $post->ID); ?></time>
                <h3 class="cl_772D2D fw_400 txtset h3VoiceLoop">
                    <?php echo get_the_title($post->ID); ?>
                </h3>
                <div class="bg_F1ECE8 cntVoiceLoop">
                    <div class="kaku cl_453C3C cntVoiceLoopLxn">
                        <?php the_content(); ?>
                    </div>
                </div>
            </li>
            <?php endwhile; wp_reset_postdata(); ?>
        </ul>

        <div class="d_flex j_center pagerVoice">
            <?php if (function_exists('wp_pagenavi')) {
                    wp_pagenavi(array('query' => $query));
                } ?>
        </div>
    </div>
</div>
<?php endif; ?>