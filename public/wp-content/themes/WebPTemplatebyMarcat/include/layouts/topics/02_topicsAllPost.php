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
        <ul class="ulTopicsAllPost">
            <?php while ($query->have_posts()) : $query->the_post(); ?>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        </ul>
    </div>
</div>
<?php endif; ?>