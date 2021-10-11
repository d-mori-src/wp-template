<?php get_header(); ?>

<main class="news">
    <?php if (have_posts()): ?>
        <?php while (have_posts()): the_post(); ?>
            <h1><?php the_field('title_copy'); ?></h1>
            <p><?php the_time(get_option('date_format')); ?></p>
        <?php endwhile; ?>
    <?php else: ?>
        <p>まだ投稿がありません。</p>
    <?php endif; ?>

    <?php wp_reset_postdata(); ?>

    <a href="<?=$site_url;?>/">一覧へ戻る</a>
</main>

<?php get_footer(); ?>