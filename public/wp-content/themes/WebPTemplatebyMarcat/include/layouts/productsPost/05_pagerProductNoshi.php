<?php $noshi = scf::get('flugMessageService'); ?>
<?php foreach ($noshi as $key => $val): ?>
<?php if ($val == "焼き菓子ギフト"): ?>
<?php get_template_part('include/layouts/productsPost/05_01_yakigashiProductNoshi'); ?>
<?php elseif ($val == "お花・アレンジメント"): ?>
<?php get_template_part('include/layouts/productsPost/05_02_flowerProductNoshi'); ?>
<?php else: ?>
<?php endif; ?>
<?php endforeach; ?>