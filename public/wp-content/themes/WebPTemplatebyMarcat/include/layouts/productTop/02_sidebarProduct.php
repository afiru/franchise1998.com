<div class="bg_F1ECE8 sidebarProduct">
    <div class="sidebarProductLxn">
        <nav class="navSidebarProduct">
            <div class="d_flex j_between ali_center c_pointer titleNavSidebarProduct jstitleNavSidebarProduct off">
                <h2 class="cl_453C3C fw_500 txtse h2TitleNavSidebarProduct">商品カテゴリから探す</h2>
                <div class="pore btnNavSidebarProductLxn">
                    <span class="brdNavSidebarProduct01"></span>
                    <span class="brdNavSidebarProduct02"></span>
                </div>
            </div>
            <div class="ulNavSidebarProductWap">
                <?php
                $categories = get_categories(array(
                    'taxonomy'   => 'category',
                    'parent'     => 15,     // 親カテゴリーID
                    'hide_empty' => false,  // 投稿なしも表示するなら false
                    'orderby'    => 'term_order',
                    'order'      => 'ASC'
                ));
                ?>
                <?php if ($categories): ?>
                <ul class="d_flex j_between row ulNavSidebarProduct">
                    <?php foreach ($categories as $cat): ?>
                    <li class="liNavSidebarProduct">
                        <a class="undernone cl_31150D fw_400 btnNavSidebarProduct" href="<?php echo esc_url(get_category_link($cat->term_id)); ?>">
                            <?php echo esc_html($cat->name); ?>
                        </a>
                    </li>
                    <?php endforeach; ?>
                </ul>
                <?php endif; ?>
            </div>
        </nav>

        <nav class="navSidebarProduct navSidebarProduct02">
            <div class="d_flex j_between ali_center c_pointer titleNavSidebarProduct jstitleNavSidebarProduct off">
                <h2 class="cl_453C3C fw_500 txtse h2TitleNavSidebarProduct">目的から探す</h2>
                <div class="pore btnNavSidebarProductLxn">
                    <span class="brdNavSidebarProduct01"></span>
                    <span class="brdNavSidebarProduct02"></span>
                </div>
            </div>
            <div class="ulNavSidebarProductWap">
                <?php
                $categories = get_categories(array(
                    'taxonomy'   => 'category',
                    'parent'     => 23,     // 親カテゴリーID
                    'hide_empty' => false,  // 投稿なしも表示するなら false
                    'orderby'    => 'term_order',
                    'order'      => 'ASC'
                ));
                ?>
                <?php if ($categories): ?>
                <ul class="d_flex j_between row ulNavSidebarProduct">
                    <?php foreach ($categories as $cat): ?>
                    <li class="liNavSidebarProduct">
                        <a class="undernone cl_31150D fw_400 btnNavSidebarProduct" href="<?php echo esc_url(get_category_link($cat->term_id)); ?>">
                            <?php echo esc_html($cat->name); ?>
                        </a>
                    </li>
                    <?php endforeach; ?>
                </ul>
                <?php endif; ?>
            </div>
        </nav>
    </div>
</div>