<?php
$paged = get_query_var('paged') ? get_query_var('paged') : 1;
$args = array(
    'post_type'      => 'post',
    'posts_per_page' => 21,
    'paged'          => $paged,
    'cat'            => 1, // カテゴリーID
);
$query = new WP_Query($args);
?>
<?php if ($query->have_posts()) : ?>
<div class="topicsAllPost">
    <div class="wapper topicsAllPostWap">
        <ul class="d_flex j_start row ulTopicsAllPost">
            <?php while ($query->have_posts()) : $query->the_post(); ?>
            <?php $img = get_post_thumbsdata($post->ID); ?>
            <li class="liTopicsAllPost">
                <a class="undernone btnliTopicsAllPost" href="<?php echo get_permalink($post->ID); ?>">
                    <figure class="photoTopicsAllPost">
                        <img loading="lazy" src="<?php echo $img[0]; ?>" alt="<?php echo get_the_title($post->ID); ?>" width="<?php echo $img[1]; ?>" height="<?php echo $img[2]; ?>">
                    </figure>
                    <time class="d_block cl_121212 fw_400 kaku timeTopicsLoop"><?php echo get_the_date('Y.m.d', $post->ID); ?></time>
                    <p class="txtovflow3 txtset cl_453C3C fw_500 txtTopicsLoop">
                        <?php echo get_the_title($post->ID); ?>
                    </p>
                </a>
            </li>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        </ul>

        <div class="d_flex j_center CormorantUnicase pagerVoice pagerTopics">
            <?php if (function_exists('wp_pagenavi')) {
                    wp_pagenavi(array('query' => $query));
                } ?>
        </div>
    </div>
</div>
<?php endif; ?>