<!-- スライダー -->
<div class="swiper singleProductSlider">
    <div class="swiper-wrapper">
        <?php foreach (scf::get('loopPorductsSlider') as $fields): ?>
            <?php $img = get_scf_img_loop_url_id($fields['imgPorductsSlider']); ?>
            <div class="swiper-slide">
                <img loading="lazy" src="<?php echo $img[0]; ?>" alt="<?php echo get_the_title($post->ID); ?>の<?php echo $fields['altPorductsSlider']; ?>" width="<?php echo $img[1]; ?>" height="<?php echo $img[2]; ?>">
            </div>
        <?php endforeach; ?>
    </div>
    <!-- 前後の矢印 -->
    <div class="nextSingleProductSlider"></div>
    <div class="prevSingleProductSlider"></div>
</div>

<!-- サムネイル -->
<div class="swiper singleProductSliderThumbs">
    <div class="swiper-wrapper">
        <?php foreach (scf::get('loopPorductsSlider') as $fields): ?>
            <?php $img = get_scf_img_loop_url_id($fields['imgPorductsSlider']); ?>
            <div class="swiper-slide">
                <img loading="lazy" src="<?php echo $img[0]; ?>" alt="<?php echo get_the_title($post->ID); ?>の<?php echo $fields['altPorductsSlider']; ?>" width="<?php echo $img[1]; ?>" height="<?php echo $img[2]; ?>">
            </div>
        <?php endforeach; ?>
    </div>
</div>