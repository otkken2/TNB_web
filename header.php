<?php $dir = esc_url(get_template_directory_uri()); ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' )?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="ザ・なつやすみバンドの公式webサイトです">
    <!-- css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.css">
    
    
    <!-- カテゴリーごとに読み込むCSSを分岐させる-->
    <?php if(is_category('news')): ?><!-- 「ニュース」のみ、個別投稿のカテゴリ判別は必要なし -->
    <link rel="stylesheet" href="<?php echo $dir; ?>/css/news.css">
    <?php elseif(is_category('live') || in_category('live')): ?>
    <link rel="stylesheet" href="<?php echo $dir; ?>/css/live.css">
    <?php elseif(is_page('about') || in_category('about')): ?>
    <link rel="stylesheet" href="<?php echo $dir; ?>/css/about.css">
    <?php elseif(is_category('video') || in_category('video')): ?>
    <link rel="stylesheet" href="<?php echo $dir; ?>/css/video.css">
    <?php elseif(is_category('discography')): ?>
    <link rel="stylesheet" href="<?php echo $dir; ?>/css/discography.css">
    <?php else: ?>
    <link rel="stylesheet" href="get_stylesheet_directory_uri()">
    <?php endif ;?>
    <!-- カテゴリーごとに読み込むCSSを分岐させる -->



    <link rel="stylesheet" href="<?php echo get_stylesheet_uri();?>">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ザ・なつやすみバンド Official WebSite</title>
    <?php wp_head(); ?>
</head>
<body <?php body_class();?>>
    <div class="container" id="app"> <!-- 全体を囲む-->
        <div class="leftContainer sp-header"><!-- PC→左カラム部のコンテナ　sp→ヘッダー　-->
            <h1 class="sp-main-logo"> <!-- sp版メインロゴ　-->
                <a href="<?php echo esc_url( home_url() );?>">
                    <img src="<?php echo $dir ?>/image/logo.svg" alt="ザ・なつやすみバンド" srcset="">
                </a>
            </h1>
            <div class="hamburger"><!-- spのみ。ハンバーガーアイコン-->
                <img @click="menu" v-if="hamIcon" src="<?php echo $dir ?>/image/hamburger3.svg" class="hamIcon" alt="menu">
                <img @click="menu" src="<?php echo $dir ?>/image/xIcon.png" v-else alt="close" class="xIcon">
            </div>
            <ul class="g-nav"> <!-- 縦のナビメニュー　-->
                <li class="menu li-news"><a href="<?php echo esc_url( home_url( 'category/news' ) );?>"><img class="tMenu" src="<?php echo $dir ?>/image/news.png" alt=""></a></li>
                <li class="menu li-live"><a href="<?php echo esc_url( home_url( 'category/live/' ) );?>"><img class="tMenu live" src="<?php echo $dir ?>/image/live.png" alt=""></a></li>
                <li class="menu li-about"><a href="<?php echo esc_url( home_url( 'about/' ) );?>"><img class="tMenu" src="<?php echo $dir ?>/image/about.png" alt=""></a></li>
                <li class="menu li-video"><a href="<?php echo esc_url( home_url( 'category/video/' ) );?>"><img class="tMenu" src="<?php echo $dir ?>/image/video.png" alt=""></a></li>
                <li class="menu li-discography"><a href="<?php echo esc_url( home_url( 'category/discography' ) );?>"><img class="tMenu" src="<?php echo $dir ?>/image/discography.png" alt=""></a></li>
                <li class="menu li-blog"><a href="https://lineblog.me/natsuyasumiband/" target="_blank" rel="noopener noreferrer"><img class="tMenu blog" src="<?php echo $dir ?>/image/blog.png" alt=""></a></li>
                <li class="menu li-goods"><a href="https://store.skiyaki.net/natsuyasumi" target="_blank" rel="noopener noreferrer"><img class="tMenu" src="<?php echo $dir ?>/image/goods.png" alt=""></a></li>
                <li>
                    <div class="icon-copy"><!--円形リンクアイコンと著作権表示を囲む-->
                        <ul class="linkIcon">
                            <li><a href="https://music.apple.com/jp/artist/%E3%82%B6-%E3%81%AA%E3%81%A4%E3%82%84%E3%81%99%E3%81%BF%E3%83%90%E3%83%B3%E3%83%89/433574020" target="_blank" rel="noopener noreferrer"><img src="<?php echo $dir ?>/image/apple-music.svg" alt="" srcset=""></a></li>
                            <li><a href="https://open.spotify.com/artist/1uyiv8HlmZlrvdY9oGP8hs" target="_blank" rel="noopener noreferrer"><img src="<?php echo $dir ?>/image/spotify.svg" alt="" srcset=""></a></li>
                            <li><a href="https://twitter.com/natsuyasumiband" target="_blank" rel="noopener noreferrer"><img src="<?php echo $dir ?>/image/twitter.svg" alt="" srcset=""></a></li>
                            <li><a href="https://www.facebook.com/thenatsuyasumiband/" target="_blank" rel="noopener noreferrer"><img src="<?php echo $dir ?>/image/facebook.svg" alt="" srcset=""></a></li>
                        </ul>
                        <img class="copyright" src="<?php echo $dir ?>/image/copyrights_logo.svg" alt="the Natsuyasumi Band .2019 &copy;">
                    </div>
                </li>
            </ul>
        </div>
        <transition name = "fade"><!-- sp版ナビメニュー　-->
            <ul v-show="show" class="sp-g-nav"> 
                <li class="menu" ><a href="<?php echo esc_url( home_url( 'category/news' ) );?>"><img class="tMenu" src="<?php echo $dir ?>/image/news.png" alt=""></a></li>
                <li class="menu" ><a href="<?php echo esc_url( home_url( 'category/live' ) );?>"><img class="tMenu" src="<?php echo $dir ?>/image/live.png" alt=""></a></li>
                <li class="menu" ><a href="<?php echo esc_url( home_url( '/about' ) );?>"><img class="tMenu" src="<?php echo $dir ?>/image/about.png" alt=""></a></li>
                <li class="menu" ><a href="<?php echo esc_url( home_url( 'category/video' ) );?>"><img class="tMenu" src="<?php echo $dir ?>/image/video.png" alt=""></a></li>
                <li class="menu" ><a href="<?php echo esc_url( home_url( 'category/discography' ) );?>"><img class="tMenu" src="<?php echo $dir ?>/image/discography.png" alt=""></a></li>
                <li class="menu" ><a href="https://lineblog.me/natsuyasumiband/" target="_blank" rel="noopener noreferrer"><img class="tMenu" src="<?php echo $dir ?>/image/blog.png" alt=""></a></li>
                <li class="menu" ><a href="https://store.skiyaki.net/natsuyasumi" target="_blank" rel="noopener noreferrer"><img class="tMenu" src="<?php echo $dir ?>/image/goods.png" alt=""></a></li>
            </ul>
        </transition>
