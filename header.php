<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        <?php if ( is_home() ) {
            bloginfo('name'); echo " - "; bloginfo('description');
            } elseif ( is_category() ) {
                single_cat_title(); echo " - "; bloginfo('name');
            } elseif (is_single() || is_page() ) {
                single_post_title();
            } elseif (is_search() ) {
                echo "搜索结果"; echo " - "; bloginfo('name');
            } elseif (is_404() ) {
                echo '页面未找到!';
            } else {
                wp_title('',true);
            } ?>
    </title>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <link rel="alternate" type="application/rss+xml" title="RSS 2.0 - 所有文章" href="<?php echo get_bloginfo('rss2_url'); ?>" />
    <link rel="alternate" type="application/rss+xml" title="RSS 2.0 - 所有评论" href="<?php bloginfo('comments_rss2_url'); ?>" />

    <!-- 新 Bootstrap4 核心 CSS 文件 -->
    <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
    <style>
        @media only screen and (max-width: 1024px) {
            .nav-link{
                float: left;
                margin-left: 10px;

            }
            .nav-link ul {
                display: inline;
                list-style-type: none;
                overflow: hidden;
            }
            .nav-link li {
                float: left;
                padding: 10px 8px;
                font-size: 12px;
            }
            .logo_img{
                float: left;
                height:100%;
            }
            .index-posts-list-img{
                float: left;
                border-radius: 4px;
                margin-right: 20px;
                width: 160px;
            }
        
        }
        @media only screen and (max-width: 768px) {
            .hide-768px{
                display: none;
            }
            nav{
                font-size: 15px;
                height: 40px;
                padding: 0px 20px;
                background-color: #fff;
                box-shadow: 0px 1px 12px 1px #888;
            }
            
            .logo_img{
                float: left;
                height:40px;
            }
            .user_img{
                border-radius:4px;
                float: right;
                margin-top: 4px;
                width: 32px;
            }
            .index-posts-list-img{
                float: left;
                border-radius: 4px;
                margin-right: 20px;
                width: 160px;
            }
            .index-posts-list-title{
                font-size: 16px;
                font-weight: 400;
            }
            .page-support-content{
                padding: 0px 10px;
            }
            
        }
        
        
        
        body{
            /*font-family: -apple-system, BlinkMacSystemFont, 'Microsoft YaHei', sans-serif;  字体*/
            font-family: "PingFang SC", "Lantinghei SC", "Microsoft YaHei", "HanHei SC", "Helvetica Neue", "Open Sans", Arial, "Hiragino Sans GB", 微软雅黑, STHeiti, "WenQuanYi Micro Hei", SimSun, sans-serif;
            color: #333;    /*字体颜色*/
            line-height: 1.5em;
            background-color: #fff;
        }
        a{
            text-decoration: none;
            color: #333;
            transition: all 0.1s ease-in-out;
        }
        a:hover{
            text-decoration:none; 
            color: #ff5c00;
        }
    
    </style>
    <?php wp_head(); ?>
</head>
<?php flush(); ?>
<body>
    <nav>
        <a href="<?php echo get_option('home'); ?>/">
            <img src="<?php bloginfo('template_url'); ?>/images/083456tqzn4xxw99f1999w.jpg" class="logo_img">
        </a>
        <div class="nav-link hide-768px">
            <ul>
                <li><a href="<?php echo get_option('home'); ?>">首页</a></li>
                <li><a href="#">设计文章</a></li>
                <li><a href="#">设计专题</a></li>
                <li><a href="#">设计素材</a></li>
                <li class="about-us"><a href="#">关于我们</a></li>
            </ul>
        </div>
        
        
        <img src="<?php bloginfo('template_url'); ?>/images/bird.jpg" class="user_img">
        
    </nav>
    
    <main style="margin-top: 20px;">