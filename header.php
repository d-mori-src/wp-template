<?php
    $uri = get_theme_file_uri(); // ルートpath
    global $post;
    $slug = $post->post_name;
    $site_url = site_url(); // サイトURL
    $server_uri = $_SERVER['REQUEST_URI'];
    $server_uri_trimed = substr($server_uri, 0, strcspn($server_uri,'?')); 
?>

<!DOCTYPE html>
<html lang="ja">
<head>
<title>Kiss PRESS(キッスプレス) | 兵庫五国を楽しもう</title>
    <meta name="description" content="KissPRESSは兵庫五国の地域情報サイトです。兵庫五国のおでかけ情報やイベント・スポット情報が盛りだくさん">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="canonical" href="<?=$site_url?>">
    <meta property="og:title" content="Kiss PRESS(キッスプレス) | 兵庫五国を楽しもう">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?=$site_url?>">
    <meta property="og:image" content="<?= $uri ?>/meta/OGP.jpg">
    <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#">
    <meta name="theme-color" content="">
    <link rel="apple-touch-icon" href="<?= $uri ?>/meta/icon.png">
    <link rel="shortcut icon" href="<?= $uri ?>/meta/favicon.ico">
    <link rel="stylesheet" href="<?= get_stylesheet_uri(); ?>">
    <link rel="stylesheet" href="<?= $uri ?>/css/normalize.css">
    <link rel="stylesheet" href="<?= $uri ?>/css/style.css">
    <link rel="stylesheet" href="<?= $uri ?>/css/bottomSlidein.css">
    <link rel="stylesheet" href="<?= $uri ?>/css/drawer.css">
    <link rel="stylesheet" href="<?= $uri ?>/css/header.css">
    <link rel="stylesheet" href="<?= $uri ?>/css/footer.css">
    <link rel="stylesheet" href="<?= $uri ?>/css/sidebar.css">
    <script src="<?= $uri ?>/js/jquery.3.4.1.js"></script>
    <script src="<?= $uri ?>/js/main.js"></script>
    <link href="<?= $uri ?>/js/slick-theme.css" rel="stylesheet" type="text/css">
    <link href="<?= $uri ?>/js/slick.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="<?= $uri ?>/js/slick.min.js"></script>
    <script src="<?= $uri ?>/js/thumb_slide.js"></script>
    <link rel="stylesheet" href="<?= $uri ?>/css/slide_orijinal.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100;200;400;500;600;700&display=swap" rel="stylesheet">

    <?php if ($server_uri === '/'): ?>
        <link rel="stylesheet" href="<?= $uri ?>/css/top.css">
    <?php endif; ?>

    <link rel="stylesheet" href="<?= $uri ?>/css/news.css">
    
    <?php if ($slug === 'contact'): ?>
        <link rel="stylesheet" href="<?= $uri ?>/css/contact.css">
    <?php endif; ?>
    
    <?php wp_head(); ?>
</head>
    <body>
        <div class="container">
            <header>
                <div class="innerHeader">
                    <a href="<?=$site_url;?>" class="logo">
                        <img src="<?=$uri?>/img/common/logo.svg" class="logo" alt="logo">
                    </a>
                    <ul class="pc-navi">
                        <li><a href="<?=$site_url;?>/"><span class="event">EVENTS</span>イベント</a></li>
                        <li><a href="<?=$site_url;?>/"><span class="groumet">GOURMETS</span>グルメ</a></li>
                        <li><a href="<?=$site_url;?>/"><span class="news">NEWS</span>ニュース</a></li>
                        <li><a href="<?=$site_url;?>/"><span class="feature">FEATURES</span>特集記事</a></li>
                    </ul>
                    <ul class="icon">
                        <li>
                            <a href="<?=$site_url;?>/">
                                <img src="<?=$uri?>/img/header/nice.svg" alt="お気に入り">
                                <span>お気に入り</span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <img src="<?=$uri?>/img/header/roulette.svg" alt="おでかけ">
                                <span>おでかけ</span>
                            </a>
                        </li>
                    </ul>

                    <!-- <ul>
                        <li><a href="<?=$site_url;?>" class="<?=$active = ($server_uri === '/') ? 'active' : ''; ?>">HOME</a></li>
                        <li><a href="<?=$site_url;?>/news" class="<?=$active = ($server_uri === '/news/') ? 'active' : ''; ?>">NEWS</a></li>
                        <li><a href="<?=$site_url;?>/contact" class="<?=$active = ($slug === 'contact') ? 'active' : ''; ?>">CONTACT</a></li>
                    </ul> -->
                </div>
            </header>