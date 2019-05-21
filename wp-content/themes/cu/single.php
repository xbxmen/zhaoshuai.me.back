<?php get_header(); ?>
    <style>
        .single-header {
            line-height: 20px;
            margin-top: -45px;
            text-align: center;
            padding-bottom: 15px;
        }

        .single-header-bar {
            display: inline-block;
            vertical-align: top;
            margin-right: 30px;
            margin-top: 10px;
        }

        .single-header-bar img {
            margin-right: 10px;
            width: 20px;
            height: 20px;
        }

        .single-header-span {
            vertical-align: top;
            display: inline-block;
        }
    </style>
    <article class="mod-post mod-post__type-post">
        <header>
            <h1 class="mod-post__title"><?php the_title(); ?></h1>
        </header>

        <div class="single-header">
            <div class="single-header-bar">
                <img class="single" src="<?php bloginfo('template_url'); ?>/images/author.png">
                <span class="single-header-span">
                    <?php echo trim(get_the_author_meta('nickname', $post->post_author)); ?>
                </span>
            </div>

            <div class="single-header-bar">
                <img class="single" src="<?php bloginfo('template_url'); ?>/images/calendar.png">
                <span class="single-header-span">
                    <?php the_time('Y年m月d日'); ?>
                </span>
            </div>

            <div class="single-header-bar">
                <img class="single" src="<?php bloginfo('template_url'); ?>/images/comment.png">
                <span class="single-header-span">
                    <?php echo trim(get_comment_count($post->ID)['total_comments']); ?>
                </span>
            </div>

            <div class="single-header-bar">
                <img class="single" src="<?php bloginfo('template_url'); ?>/images/pageview.png">
                <span class="single-header-span">
                    <?php if(function_exists('the_views')) { the_views(); } ?>
                </span>
            </div>
        </div>

        <div>
            <?php while (have_posts()): the_post();
                $p_id = get_the_ID(); ?>
                <div class="mod-post__entry wzulli"><?php the_content(); ?></div>
                <?php wp_link_pages('before=<div class="posts-nav"><span> — 文章分页：</span>&after=</div>'); ?>
            <?php endwhile; ?>
        </div>

        <div class="mod-post__meta">
            <div>
                <div>— 于
                    <time datetime="<?php the_time('Y年m月d日 h:i:s'); ?>"><?php the_time('Y年m月d日'); ?></time>
                    ，<span><?php echo count_words($text); ?></span>；
                </div>
                <div>— 文内使用到的标签：<span class="mod_tag"><?php the_tags('', ' ', ''); ?></span></div>
            </div>
        </div>
        <ul class="sxwk">
            <li><?php previous_post_link('下一篇：%link', '%title', true); ?></li>
            <li><?php next_post_link('上一篇：%link', '%title', true); ?></li>
        </ul>
    </article>
    <section class="mod-comment">
        <?php comments_template(); ?>
    </section>
<?php get_footer('single'); ?>