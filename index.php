<?php
    $uri = get_theme_file_uri(); 
    $site_url = site_url();

    $paged = get_query_var('paged') ? get_query_var('paged') : 1;
    $args = [
        'post_type' => 'post', // カスタム投稿名
        'paged' => $paged,
        'posts_per_page' => 9, // 表示する数
    ];
    $wp_query = new WP_Query($args);
?>

<?php get_header(); ?>

<section class="hero">
    TOP - First View
</section>

<section class="sp-tab-contents">
    <?php include('inc/new_shop.php'); ?>
</section>

<main class="top">
    <!-- 左サイドバーをいれるばあいはここにラップして入れる -->
    <article>
        <h3 class="headTitle"><img src="<?=$uri?>/img/common/check.svg" alt="">新着情報</h3>
        <section class="news">
            <div class="newsItems">
                <?php if ($wp_query->have_posts()): ?>
                    <?php while ($wp_query->have_posts()): $wp_query->the_post(); ?>
                        <div class="newsItem">
                            <a href="<?php the_permalink(); ?>">
                                <img src="<?php the_field('image'); ?>" class="newsItemImage" />
                            </a>
                            <div class="newsItemText">
                                <a href="<?php the_permalink(); ?>" class="title">
                                    <?=mb_substr(get_field('title_copy'),0,30); ?> ...
                                </a>

                                <div class="newsItemUnder">
                                    <div class="left-newsItemUnder">
                                        <?php $cat = get_the_category(); $cat = $cat[0]; ?>
                                        <p class="<?=$cat->category_nicename; ?>"><?php the_category(' '); ?></p>
                                    </div>
                                    <div class="right-newsItemUnder">
                                        <p class="timestamp"><?=human_time_diff(get_the_time('U'),current_time('timestamp')).'前'; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php else: ?>
                    <p>まだ投稿がありません。</p>
                <?php endif; ?>
            </div>

            <div class="pagenation">
                <?php previous_posts_link(''); ?>
                <?php
                    if ($wp_query->max_num_pages > 1) {
                        $limitnum = 999999999;
                        echo paginate_links(
                            [
                                'base'         => str_replace($limitnum, '%#%', esc_url(get_pagenum_link($limitnum))),
                                'format'       => '',
                                'current'      => max(1, get_query_var('paged')),
                                'total'        => $wp_query->max_num_pages,
                                'prev_next'    => false,
                                'type'         => 'plain',
                            ]
                        );
                    }
                ?>
                <?php next_posts_link(''); ?>
            </div>
        </section>
    </article> 
    <?php get_sidebar(); ?>
</main>

<section class="sp-tab-contents">
    <?php include('inc/special.php'); ?>
</section>

<?php get_footer(); ?>