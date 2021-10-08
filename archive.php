<?php 
  $uri = get_theme_file_uri();
  $site_url = site_url();
?>

<?php get_header(); ?>

<main class="news">
    <h2>通常投稿一覧</h2>

    <ul>
        <li class="cat-item"><a href="<?=$site_url;?>/posts">すべて</a></li>
        <?php 
            if (!is_page() && !is_home() && !is_single()){ 
                $catsy = get_the_category();
                $myCat = $catsy->cat_ID; $currentcategory = '&current_category='.$myCat; 
            } elseif (is_single()){ 
                $catsy = get_the_category(); 
                $myCat = $catsy[0]->cat_ID; $currentcategory = '&current_category='.$myCat; 
            } 
            wp_list_categories('depth=1&title_li='.$currentcategory); 
        ?><!-- 最終<li>タグで書き出し -->
    </ul>

    <?php if (have_posts()): ?>
        <?php while (have_posts()): ?>
            <?php the_post(); ?>
            <div>
                <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
                </a>
            </div>
        <?php endwhile; ?>
    <?php else: ?>
        投稿がありません
    <?php endif; ?>

    <div>ページネーション件数は管理画面から設定可能</div>
    <?php previous_posts_link('prev'); ?>
    <?php
        $pagination = [
            'prev_text' => false,
            'next_text' => false,
        ];
        the_posts_pagination($pagination);
    ?>
    <?php next_posts_link('next'); ?>
</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>