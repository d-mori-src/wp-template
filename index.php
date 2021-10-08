<?php
    $uri = get_theme_file_uri(); 
    $site_url = site_url();
?>

<?php get_header(); ?>

<main class="top">
    トップページが入ります。
</main>
<aside class="sidebar">
    <!-- 768px以上で表示　スマホは表示なし -->
    <?php get_sidebar(); ?>
</aside>

<?php include ('inc/drawer.php');  ?>
<?php get_footer(); ?>