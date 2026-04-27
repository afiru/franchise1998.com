<section class="giftSingleTitle">
    <h1 class="t_center cl_453C3C fw_500 txtset h1GiftSingleTitle"><?php echo get_the_title($post->ID); ?></h1>

    <figure class="photoGiftSingleTitle">
        <?php $img = get_scf_img_url('picSingleSuggestion'); ?>
        <img loading="lazy" src="<?php echo $img[0]; ?>" alt="" width="<?php echo $img[1]; ?>" height="<?php echo $img[2]; ?>">
    </figure>
    <h2 class="cl_453C3C fw_500 txtset kaku h4GiftSingleTitle">
        <?php echo scf::get('subArchiveSuggestion'); ?>
    </h2>
    <p class="cl_453C3C text_justify txtset kaku rubyGiftSingleTitle">
        <?php echo scf::get('txtArchiveSuggestion'); ?>
    </p>
</section>