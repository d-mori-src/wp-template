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
    <link rel="stylesheet" href="<?= $uri ?>/css/header.css">
    <link rel="stylesheet" href="<?= $uri ?>/css/footer.css">
    <link rel="stylesheet" href="<?= $uri ?>/css/hamburger.css">
    <link href="<?= $uri ?>/js/slick-theme.css" rel="stylesheet" type="text/css">
    <link href="<?= $uri ?>/js/slick.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="<?= $uri ?>/css/slide_orijinal.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100;200;400;500;600;700&display=swap" rel="stylesheet">

    <!-- 各ページcss -->
    <link rel="stylesheet" href="<?= $uri ?>/css/top.css">
    <link rel="stylesheet" href="<?= $uri ?>/css/search.css">
    <link rel="stylesheet" href="<?= $uri ?>/css/news_detail.css"><!-- single.php関連 -->

    <!-- 各コンポーネントcss -->
    <link rel="stylesheet" href="<?= $uri ?>/css/news.css">
    <link rel="stylesheet" href="<?= $uri ?>/css/new_shop.css">
    <link rel="stylesheet" href="<?= $uri ?>/css/special.css">
    <link rel="stylesheet" href="<?= $uri ?>/css/special_detail.css">
    
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
                        <li><a href="<?=$site_url;?>/search/イベント"><span class="eventLink">EVENTS</span>イベント</a></li>
                        <li><a href="<?=$site_url;?>/search/グルメ"><span class="groumetLink">GOURMETS</span>グルメ</a></li>
                        <li><a href="<?=$site_url;?>/search/ニュース"><span class="newsLink">NEWS</span>ニュース</a></li>
                        <li><a href="<?=$site_url;?>/"><span class="featureLink">FEATURES</span>特集記事</a></li>
                    </ul>

                    <?php get_search_form(); ?>

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
                        <div id="hamburger">
                            <div class="innerHamburger">
                                <span class="inner_line" id="line1"></span>
                                <span class="inner_line" id="line2"></span>
                                <span class="inner_line" id="line3"></span>
                            </div>
                        </div>
                    </ul>

                    <!-- activeにする場合の例 -->
                    <!-- <ul>
                        <li><a href="<?=$site_url;?>" class="<?=$active = ($server_uri === '/') ? 'active' : ''; ?>">HOME</a></li>
                        <li><a href="<?=$site_url;?>/news" class="<?=$active = ($server_uri === '/news/') ? 'active' : ''; ?>">NEWS</a></li>
                        <li><a href="<?=$site_url;?>/contact" class="<?=$active = ($slug === 'contact') ? 'active' : ''; ?>">CONTACT</a></li>
                    </ul> -->
                </div>
            </header>

            <nav id="nav">
                ナビメニューが入ります。
            </nav>