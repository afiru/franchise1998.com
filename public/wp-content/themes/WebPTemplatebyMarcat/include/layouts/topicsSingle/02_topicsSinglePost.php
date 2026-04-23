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