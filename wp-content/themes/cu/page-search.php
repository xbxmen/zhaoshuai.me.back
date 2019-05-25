<?php
/*
Template Name: 搜索页
*/
?>
<?php get_header(); ?>
    <link rel="stylesheet" href="//cdn.bootcss.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <style>
        .icon-search {
            content: url("<?php bloginfo('template_directory'); ?>/images/search.png");
        }
    </style>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() . '/css/search.css'; ?>" type="text/css"/>
    <div class="wrap-search-box">
        <div class="search-box">
            <input id="input-search" class="input-search" type="text" placeholder="search">
            <i class="icon-search"></i>
        </div>
    </div>
    <article class="mod-archive page-content">
        <div class="mod-archive__item">
            <ul class="mod-archive__list" id="articles">
                <li class="tip">别笑了，眼泪都掉了~</li>
            </ul>
        </div>
    </article>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/search.js"></script>
<?php get_footer(); ?>