<?php
    $uri = get_theme_file_uri(); 
    $site_url = site_url();
?>

<?php get_header(); ?>

<main class="top search">
    <article>
        <h3 class="headTitle"><img src="<?=$uri?>/img/common/check.svg" alt=""><?php the_search_query(); ?> の検索結果</h3>
        <section class="news">
            <div class="newsItems">
                <?php if (have_posts()): ?>
                    <?php while (have_posts()): the_post(); ?>
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
        </section>  
    </article>

    <?php get_sidebar(); ?>
</main>

<?php get_footer(); ?>