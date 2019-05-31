<?php
/*
Template Name: 友情链接
*/
?>
<?php get_header(); ?>
    <article class="mod-post mod-post__type-page page-content">
        <div class="mod-post__entry" style="text-align: center">
            <div class="linksul"><?php wp_list_bookmarks('show_images=0&show_description=1'); ?></div>
        </div>
    </article>
    <section class="mod-comment">
        <?php comments_template(); ?>
    </section>
<?php get_footer(); ?>