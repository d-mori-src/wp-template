<?php
    $uri = get_theme_file_uri(); 
    $site_url = site_url();

    $paged = get_query_var('paged') ? get_query_var('paged') : 1;
    $args = [
        'post_type' => 'post', // カスタム投稿名
        'paged' => $paged,
        'posts_per_page' => 2, // 表示する数
    ];
    $wp_query = new WP_Query($args);
?>

<?php get_header(); ?>

<main class="top">
    <article>
        <section class="newsWrapper">
            <h3><img src="<?=$uri?>/img/common/check.svg" alt="">新着情報</h3>
            <div class="newsItems">
                <?php if ($wp_query->have_posts()): ?>
                    <?php while ($wp_query->have_posts()): $wp_query->the_post(); ?>
                        <a href="<?php the_permalink(); ?>">
                            <div class="newsItem">
                                <img src="<?php the_field('image'); ?>" class="newsItemImage" />
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
                        </a>
                    <?php endwhile; ?>
                <?php else: ?>
                    <p>まだ投稿がありません。</p>
                <?php endif; ?>

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

    <aside class="sidebar">
        <?php get_sidebar(); ?><!-- 768px以上で表示　スマホは表示なし -->
    </aside>
</main>

<?php include ('inc/drawer.php');  ?>
<?php get_footer(); ?>