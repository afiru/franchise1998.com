<?php
$parent_id = 40;

// 親カテゴリ40の子カテゴリ取得
$child_categories = get_categories(array(
    'parent'     => $parent_id,
    'hide_empty' => false
));
?>
<?php if ($child_categories) : ?>
<div class="shoppingguideAllPosts">
    <div class="wapper shoppingguideAllPostsWap">
        <ul class="ulShoppingguideAllPosts">
            <?php foreach ($child_categories as $cat) : ?>
            <li class="liShoppingguideAllPosts">
                <h3 class="cl_453C3C fw_500 txtset h3LiShoppingguideAllPosts"><?php echo esc_html($cat->name); ?></h3>
                <?php
                        $query = new WP_Query(array(
                            'post_type'      => 'post',
                            'posts_per_page' => -1,
                            'cat'            => $cat->term_id
                        ));
                        ?>
                <?php if ($query->have_posts()) : ?>
                <ul class="sbShoppingguideAllPosts">
                    <?php while ($query->have_posts()) : $query->the_post(); ?>
                    <li class="bg_F1ECE8 liSbShoppingguideAllPosts">
                        <div class="cntLiSbShoppingguideAllPosts">
                            <div class="d_flex j_between c_pointer titleCntLiSbShoppingguideAllPosts jstitleCntLiSbShoppingguideAllPosts off">
                                <h3 class="cl_453C3C kaku fw_500 txtset h3SbShoppingguideAllPosts">
                                    <?php echo get_the_title($post->ID); ?>
                                </h3>
                                <figure class="iconSbShoppingguideAllPosts">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="8" viewBox="0 0 13 8" fill="none">
                                        <path d="M0.355469 0.353516L6.35547 6.35352L12.3555 0.353516" stroke="#453C3C" />
                                    </svg>
                                </figure>
                            </div>
                            <div class="mainCntLiSbShoppingguideAllPostsLxn jsmainCntLiSbShoppingguideAllPostsLxn">
                                <div class="mainCntLiSbShoppingguideAllPosts">
                                    <?php the_content(); ?>
                                </div>
                            </div>
                        </div>
                    </li>
                    <?php endwhile; ?>
                </ul>
                <?php endif; ?>
            </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>
<?php endif; ?>