<?php die(); ?><!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <title>【WordPress】七牛云如何刷新缓存CSS/JS文件 - 碎念</title>
<meta name="keywords" content="Wordpress"/>
<meta name="description" content="1、遇到问题
在写博客的过程中，可能会根据自己的喜好对于网站进行一些样式的自定义修改，会对CSS/JS文件进行修改。
但是如果使用了七牛云缓存和CDN镜像存储，会发现无论怎么修改CSS，浏览器中的样式都不会修改。
2、定位问题
我们打开浏"/>
    <link rel="stylesheet" href="https://qiniu.zhaoshuai.me/wp-content/themes/cu/style.css" media="screen" type="text/css"/>
    <link rel="shortcut icon" href="https://qiniu.zhaoshuai.me/wp-content/themes/cu/images/favicon.ico" type="image/x-icon"/>
    <link rel='dns-prefetch' href='//s.w.org' />
<link rel='dns-prefetch' href='//qiniu.zhaoshuai.me' />
<meta name='description' content='1、遇到问题 在写博客的过程中，可能会根据自己的喜好对于网站进行一些样式的自定义修改，会对CSS/JS文件进行修改。 但是如果使用了七牛云缓存和CDN镜像存储，会发现无论怎么修改CSS，浏览器中的样式都不会修改。 2、定位问题 我们打开浏览器的控制 ...' />
<meta name='robots' content='index,follow' />
<style type='text/css'>img#wpstats{display:none}</style><style type="text/css" media="print">#wpadminbar { display:none; }</style>
	<style type="text/css" media="screen">
	html { margin-top: 32px !important; }
	* html body { margin-top: 32px !important; }
	@media screen and ( max-width: 782px ) {
		html { margin-top: 46px !important; }
		* html body { margin-top: 46px !important; }
	}
</style>
	
<style type='text/css'>
#wpadminbar .quicklinks li#wp-admin-bar-stats {
	height: 32px;
}
#wpadminbar .quicklinks li#wp-admin-bar-stats a {
	height: 32px;
	padding: 0;
}
#wpadminbar .quicklinks li#wp-admin-bar-stats a div {
	height: 32px;
	width: 95px;
	overflow: hidden;
	margin: 0 10px;
}
#wpadminbar .quicklinks li#wp-admin-bar-stats a:hover div {
	width: auto;
	margin: 0 8px 0 10px;
}
#wpadminbar .quicklinks li#wp-admin-bar-stats a img {
	height: 24px;
	margin: 4px 0;
	max-width: none;
	border: none;
}
</style>
<script type="text/javascript">
/* <![CDATA[ */
	var wpNotesIsJetpackClient = true;
	var wpNotesIsJetpackClientV2 = true;
/* ]]> */
</script>
    <script type="text/javascript" src="https://qiniu.zhaoshuai.me/wp-content/themes/cu/js/jquery.js"></script>
</head>
<body>
<header class="mod-head">
    <h1 class="mod-head__title"><a href="https://zhaoshuai.me">碎念</a></h1>
    <div class="mod-head__logo">
        <a href="https://zhaoshuai.me">
            <img class="avatar" src="https://qiniu.zhaoshuai.me/wp-content/themes/cu/images/avatar.png" alt="" width="30"
                 height="30">
        </a>
                    <div class="zjgx">2</div>
            </div>
    <nav class="mod-head__nav">
        <ul id="menu-%e5%af%bc%e8%88%aa%e8%8f%9c%e5%8d%95" class="mod-head__ul"><li id="menu-item-13" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-13"><a href="https://zhaoshuai.me/">Index</a><span>·</span></li>
<li id="menu-item-309" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-309"><a href="https://zhaoshuai.me/articles/">Articles</a><span>·</span></li>
<li id="menu-item-25" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-25"><a href="https://zhaoshuai.me/tags/">Tags</a><span>·</span></li>
<li id="menu-item-24" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-24"><a href="https://zhaoshuai.me/about/">About</a><span>·</span></li>
<li id="menu-item-184" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-184"><a href="https://zhaoshuai.me/chat/">Chat</a><span>·</span></li>
<li id="menu-item-35" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-35"><a href="https://zhaoshuai.me/friendlinks/">FriendLinks</a><span>·</span></li>
<li id="menu-item-230" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-230"><a href="https://zhaoshuai.me/job-position/">Job Position</a></li>
</ul>    </nav>
    <a id="right-panel-link" href="#right-panel"></a>
    <div id="right-panel" class="panel">
        <h3 class="rightnavh3">Menu</h3>
        <ul id="menu-%e5%af%bc%e8%88%aa%e8%8f%9c%e5%8d%95-1" class="ymod-head"><li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-13"><a href="https://zhaoshuai.me/">Index</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-309"><a href="https://zhaoshuai.me/articles/">Articles</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-25"><a href="https://zhaoshuai.me/tags/">Tags</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-24"><a href="https://zhaoshuai.me/about/">About</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-184"><a href="https://zhaoshuai.me/chat/">Chat</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-35"><a href="https://zhaoshuai.me/friendlinks/">FriendLinks</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-230"><a href="https://zhaoshuai.me/job-position/">Job Position</a></li>
</ul>        <button id="close-panel-bt">X Close</button>
    </div>
    <script src="https://qiniu.zhaoshuai.me/wp-content/themes/cu/js/slider.js"></script>
    <script>$('#right-panel-link').panelslider({side: 'right', duration: 200});
        $('#close-panel-bt').click(function () {
            $.panelslider.close();
        });</script>
</header>    <style>
        .single-header {
            line-height: 20px;
            margin-top: -45px;
            text-align: center;
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
            <h1 class="mod-post__title">【WordPress】七牛云如何刷新缓存CSS/JS文件</h1>
        </header>

        <div class="single-header">
            <div class="single-header-bar">
                <img class="single" src="https://qiniu.zhaoshuai.me/wp-content/themes/cu/images/author.png">
                <span class="single-header-span">
                    zhaoshuai                </span>
            </div>

            <div class="single-header-bar">
                <img class="single" src="https://qiniu.zhaoshuai.me/wp-content/themes/cu/images/calendar.png">
                <span class="single-header-span">
                    2018年10月09日                </span>
            </div>

            <div class="single-header-bar">
                <img class="single" src="https://qiniu.zhaoshuai.me/wp-content/themes/cu/images/comment.png">
                <span class="single-header-span">
                    0                </span>
            </div>
        </div>

        <div>
                            <div class="mod-post__entry wzulli"><h2><span style="font-family: terminal, monaco, monospace;">1、遇到问题</span></h2>
<p><span style="font-family: terminal, monaco, monospace; font-size: 10pt;">在写博客的过程中，可能会根据自己的喜好对于网站进行一些样式的自定义修改，会对CSS/JS文件进行修改。</span></p>
<p><span style="font-family: terminal, monaco, monospace; font-size: 10pt;">但是如果使用了七牛云缓存和CDN镜像存储，会发现无论怎么修改CSS，浏览器中的样式都不会修改。</span></p>
<h2><span style="font-family: terminal, monaco, monospace;">2、定位问题</span></h2>
<p><span style="font-family: terminal, monaco, monospace; font-size: 10pt;">我们打开浏览器的控制台，刷新博客页面，在 <strong>Sources</strong> 一栏，可以看到，我们的静态资源都是走了我们的配置的七牛云的空间域名： </span></p>
<p><span style="font-family: terminal, monaco, monospace; font-size: 10pt;"><strong><em>https://qiniu.zhaoshuai.me/wp-content/themes/cu/style.css</em></strong> ，这样我们就大概知道，需要更新七牛云的静态资源的缓存。</span></p>
<p><span style="font-family: terminal, monaco, monospace;"><img data-attachment-id="212" data-permalink="https://zhaoshuai.me/3c40ba1416a7e2bb020ccbb3859a36da/" data-orig-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2018/10/3C40BA1416A7E2BB020CCBB3859A36DA.jpg" data-orig-size="553,355" data-comments-opened="1" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;0&quot;}" data-image-title="3C40BA1416A7E2BB020CCBB3859A36DA" data-image-description="" data-medium-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2018/10/3C40BA1416A7E2BB020CCBB3859A36DA.jpg" data-large-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2018/10/3C40BA1416A7E2BB020CCBB3859A36DA.jpg" class="size-full wp-image-212 aligncenter" src="https://qiniu.zhaoshuai.me/wp-content/uploads/2018/10/3C40BA1416A7E2BB020CCBB3859A36DA.jpg" alt="" width="553" height="355" /></span></p>
<h2><span style="font-family: terminal, monaco, monospace;">3、直接刷新缓存</span></h2>
<p><span style="font-family: terminal, monaco, monospace;"><strong>七牛云开发者中心-&gt;融合CDN-&gt;刷新预取</strong></span></p>
<p><span style="font-size: 10pt; font-family: terminal, monaco, monospace;">按要求填写需要刷新的 URL，点击提交即可。</span></p>
<p><span style="font-family: terminal, monaco, monospace; font-size: 10pt;">示例：https://qiniu.zhaoshuai.me/wp-content/themes/cu/style.css</span></p>
<p><span style="font-family: terminal, monaco, monospace;"><img data-attachment-id="215" data-permalink="https://zhaoshuai.me/4be322e21bbf853a76c6f259d04a2615/" data-orig-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2018/10/4BE322E21BBF853A76C6F259D04A2615.jpg" data-orig-size="1099,407" data-comments-opened="1" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;0&quot;}" data-image-title="4BE322E21BBF853A76C6F259D04A2615" data-image-description="" data-medium-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2018/10/4BE322E21BBF853A76C6F259D04A2615.jpg" data-large-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2018/10/4BE322E21BBF853A76C6F259D04A2615.jpg" class="aligncenter size-full wp-image-215" src="https://qiniu.zhaoshuai.me/wp-content/uploads/2018/10/4BE322E21BBF853A76C6F259D04A2615.jpg" alt="" width="1099" height="407" /></span></p>
<h2><span style="font-family: terminal, monaco, monospace;">4、镜像存储刷新缓存方法</span></h2>
<p><span style="font-size: 10pt; font-family: terminal, monaco, monospace;">如果使用了 <strong>镜像存储</strong> ，直接刷新不会生效，因为他还是会去存储空间（blog）中去找对应的文件。</span></p>
<ul>
<li><span style="font-size: 10pt; font-family: terminal, monaco, monospace;">提交刷新请求后 <strong>10 分钟</strong> 左右，刷新全网生效。</span></li>
<li><span style="font-size: 10pt; font-family: terminal, monaco, monospace;">刷新 <strong>https</strong> 域名下的链接，会同时刷新 <strong>http</strong> 和 <strong>https</strong>，占用两次刷新额度。</span></li>
</ul>
<p><span style="font-family: terminal, monaco, monospace;"><strong>4.1 七牛云开发者中心-&gt;对象存储-&gt;{博客存储空间}-&gt;内容管理-&gt;删除对应文件</strong></span></p>
<p><span style="font-family: terminal, monaco, monospace;"><img data-attachment-id="216" data-permalink="https://zhaoshuai.me/2686609ee9f416253799c4504c98c4ab/" data-orig-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2018/10/2686609EE9F416253799C4504C98C4AB.jpg" data-orig-size="1589,637" data-comments-opened="1" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;0&quot;}" data-image-title="2686609EE9F416253799C4504C98C4AB" data-image-description="" data-medium-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2018/10/2686609EE9F416253799C4504C98C4AB.jpg" data-large-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2018/10/2686609EE9F416253799C4504C98C4AB.jpg" class="aligncenter size-full wp-image-216" src="https://qiniu.zhaoshuai.me/wp-content/uploads/2018/10/2686609EE9F416253799C4504C98C4AB.jpg" alt="" width="1589" height="637" /></span></p>
<p><span style="font-family: terminal, monaco, monospace;"><strong>4.2 再次按照“直接刷新缓存”方法，更新文件。</strong></span></p>
<p><span style="font-family: terminal, monaco, monospace; font-size: 10pt;">这样我们<strong>清一下浏览器的缓存</strong>！或者换一个浏览器！刷新博客页面，这样再去对象存储中看一下相对应文件的更新时间，如果没有问题，应该就会生效了！</span></p>
<h2><span style="font-family: terminal, monaco, monospace;">5、参考文档</span></h2>
<ul>
<li><a href="https://developer.qiniu.com/fusion/kb/1325/refresh-the-cache-and-the-effect-of-time" target="_blank" rel="noopener"><span style="font-family: terminal, monaco, monospace;">https://developer.qiniu.com/fusion/kb/1325/refresh-the-cache-and-the-effect-of-time</span></a></li>
<li><a href="https://developer.qiniu.com/fusion/kb/4215/image-storage-refresh-the-cache-method" target="_blank" rel="noopener"><span style="font-family: terminal, monaco, monospace;">https://developer.qiniu.com/fusion/kb/4215/image-storage-refresh-the-cache-method</span></a></li>
</ul>
</div>
                                    </div>

        <div class="mod-post__meta">
            <div>
                <div>— 于
                    <time datetime="2018年10月09日 11:34:35">2018年10月09日</time>
                    ，<span>共写了793个字</span>；
                </div>
                <div>— 文内使用到的标签：<span class="mod_tag"><a href="https://zhaoshuai.me/tag/wordpress/" rel="tag">Wordpress</a></span></div>
            </div>
        </div>
        <ul class="sxwk">
            <li>下一篇：<a href="https://zhaoshuai.me/2018-10-08/" rel="prev">【WordPress】获取作者信息的函数</a></li>
            <li>上一篇：<a href="https://zhaoshuai.me/2019-05-16/" rel="next">【WordPress】Crayon Syntax Highlighter 与主题不兼容</a></li>
        </ul>
    </article>
    <section class="mod-comment">
        
<!-- You can start editing here. -->


			<!-- If comments are open, but there are no comments. -->

	
	<div id="respond" class="comment-respond">
		<h3 id="reply-title" class="comment-reply-title">发表评论 <small><a rel="nofollow" id="cancel-comment-reply-link" href="/2018-10-09/#respond" style="display:none;">取消回复</a></small></h3>			<form action="https://zhaoshuai.me/wp-comments-post.php" method="post" id="commentform" class="comment-form">
				<p class="logged-in-as"><a href="https://zhaoshuai.me/wp-admin/profile.php" aria-label="已登入为zhaoshuai。编辑您的个人资料。">已登入为zhaoshuai</a>。<a href="https://zhaoshuai.me/wp-login.php?action=logout&amp;redirect_to=https%3A%2F%2Fzhaoshuai.me%2F2018-10-09%2F&amp;_wpnonce=a0766f365c">登出？</a></p><p class="comment-form-comment"><label for="comment">评论</label> <textarea id="comment" name="comment" cols="45" rows="8" maxlength="65525" required="required"></textarea></p><p class="form-submit"><input name="submit" type="submit" id="submit" class="submit" value="发表评论" /> <input type='hidden' name='comment_post_ID' value='209' id='comment_post_ID' />
<input type='hidden' name='comment_parent' id='comment_parent' value='0' />
</p><p style="display: none;"><input type="hidden" id="akismet_comment_nonce" name="akismet_comment_nonce" value="d5303967b7" /></p><input type="hidden" id="_wp_unfiltered_html_comment_disabled" name="_wp_unfiltered_html_comment_disabled" value="70a34d03b1" /><script>(function(){if(window===window.parent){document.getElementById('_wp_unfiltered_html_comment_disabled').name='_wp_unfiltered_html_comment';}})();</script>
<p style="display: none;"><input type="hidden" id="ak_js" name="ak_js" value="6"/></p>			</form>
			</div><!-- #respond -->
	    </section>
<footer class="mod-footer mod-footer-single" role="contentinfo" id="footer_in" style="text-align: center;">
    <p class="f_bq">
        Copyright ©
        2019 碎念 Powered by <a class="banquan" target="_blank" href="http://www.2zzt.com">WordPress</a>    </p>

    <script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");
        document.write(unescape("%3Cspan id='cnzz_stat_icon_1260972202'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s4.cnzz.com/z_stat.php%3Fid%3D1260972202%26online%3D1%26show%3Dline' type='text/javascript'%3E%3C/script%3E"));
    </script>
</footer>
<link rel='stylesheet' id='dashicons-css'  href='https://qiniu.zhaoshuai.me/wp-includes/css/dashicons.min.css?ver=5.2' type='text/css' media='all' />
<link rel='stylesheet' id='admin-bar-css'  href='https://qiniu.zhaoshuai.me/wp-includes/css/admin-bar.min.css?ver=5.2' type='text/css' media='all' />
<link rel='stylesheet' id='crayon-css'  href='https://qiniu.zhaoshuai.me/wp-content/plugins/crayon-syntax-highlighter/css/min/crayon.min.css?ver=_2.7.2_beta' type='text/css' media='all' />
<link rel='stylesheet' id='wpcom-notes-admin-bar-css'  href='https://s0.wp.com/wp-content/mu-plugins/notes/admin-bar-v2.css?ver=7.3.1-201920' type='text/css' media='all' />
<link rel='stylesheet' id='noticons-css'  href='https://s0.wp.com/i/noticons/noticons.css?ver=7.3.1-201920' type='text/css' media='all' />
<link rel='stylesheet' id='jetpack_css-css'  href='https://qiniu.zhaoshuai.me/wp-content/plugins/jetpack/css/jetpack.css?ver=7.3.1' type='text/css' media='all' />
<script type='text/javascript' src='https://qiniu.zhaoshuai.me/wp-includes/js/admin-bar.min.js?ver=5.2'></script>
<script type='text/javascript' src='https://qiniu.zhaoshuai.me/wp-includes/js/jquery/jquery.js?ver=1.12.4'></script>
<script type='text/javascript' src='https://qiniu.zhaoshuai.me/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.4.1'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var CrayonSyntaxSettings = {"version":"_2.7.2_beta","is_admin":"0","ajaxurl":"https:\/\/zhaoshuai.me\/wp-admin\/admin-ajax.php","prefix":"crayon-","setting":"crayon-setting","selected":"crayon-setting-selected","changed":"crayon-setting-changed","special":"crayon-setting-special","orig_value":"data-orig-value","debug":""};
var CrayonSyntaxStrings = {"copy":"Press %s to Copy, %s to Paste","minimize":"Click To Expand Code"};
/* ]]> */
</script>
<script type='text/javascript' src='https://qiniu.zhaoshuai.me/wp-content/plugins/crayon-syntax-highlighter/js/min/crayon.min.js?ver=_2.7.2_beta'></script>
<script type='text/javascript' src='https://qiniu.zhaoshuai.me/wp-content/plugins/jetpack/_inc/build/spin.min.js?ver=1.3'></script>
<script type='text/javascript' src='https://qiniu.zhaoshuai.me/wp-content/plugins/jetpack/_inc/build/jquery.spin.min.js?ver=1.3'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var jetpackCarouselStrings = {"widths":[370,700,1000,1200,1400,2000],"is_logged_in":"1","lang":"zh","ajaxurl":"https:\/\/zhaoshuai.me\/wp-admin\/admin-ajax.php","nonce":"dedbdb27a3","display_exif":"1","display_geo":"1","single_image_gallery":"1","single_image_gallery_media_file":"","background_color":"black","comment":"\u6761\u8bc4\u8bba","post_comment":"\u53d1\u8868\u8bc4\u8bba","write_comment":"\u64b0\u5199\u8bc4\u8bba...","loading_comments":"\u6b63\u5728\u52a0\u8f7d\u8bc4\u8bba...","download_original":"\u67e5\u770b\u5168\u5c3a\u5bf8 <span class=\"photo-size\">{0}<span class=\"photo-size-times\">\u00d7<\/span>{1}<\/span>","no_comment_text":"\u8bf7\u786e\u4fdd\u4e0e\u60a8\u7684\u8bc4\u8bba\u4e00\u8d77\u63d0\u4ea4\u90e8\u5206\u6587\u672c\u3002","no_comment_email":"\u8bf7\u63d0\u4f9b\u7528\u4e8e\u53d1\u8868\u8bc4\u8bba\u7684\u7535\u5b50\u90ae\u4ef6\u5730\u5740\u3002","no_comment_author":"\u8bf7\u63d0\u4f9b\u60a8\u7528\u4e8e\u53d1\u8868\u8bc4\u8bba\u7684\u59d3\u540d\u3002","comment_post_error":"\u62b1\u6b49\uff0c\u53d1\u8868\u60a8\u7684\u8bc4\u8bba\u65f6\u51fa\u9519\u3002\u8bf7\u7a0d\u540e\u91cd\u8bd5\u3002","comment_approved":"\u60a8\u7684\u8bc4\u8bba\u5df2\u83b7\u5f97\u6279\u51c6\u3002","comment_unapproved":"\u6b63\u5728\u5ba1\u6838\u60a8\u7684\u8bc4\u8bba\u3002","camera":"\u7167\u76f8\u673a","aperture":"\u5149\u5708","shutter_speed":"\u5feb\u95e8\u901f\u5ea6","focal_length":"\u7126\u8ddd","copyright":"\u7248\u6743","comment_registration":"0","require_name_email":"1","login_url":"https:\/\/zhaoshuai.me\/wp-login.php?redirect_to=https%3A%2F%2Fzhaoshuai.me%2F2018-10-09%2F","blog_id":"1","meta_data":["camera","aperture","shutter_speed","focal_length","copyright"],"local_comments_commenting_as":"<p id=\"jp-carousel-commenting-as\">\u4f5c\u4e3a zhaoshuai \u53d1\u8868\u8bc4\u8bba<\/p>"};
/* ]]> */
</script>
<script type='text/javascript' src='https://qiniu.zhaoshuai.me/wp-content/plugins/jetpack/_inc/build/carousel/jetpack-carousel.min.js?ver=20190102'></script>
<script type='text/javascript' src='https://qiniu.zhaoshuai.me/wp-includes/js/comment-reply.min.js?ver=5.2'></script>
<script type='text/javascript' src='https://qiniu.zhaoshuai.me/wp-includes/js/underscore.min.js?ver=1.8.3'></script>
<script type='text/javascript' src='https://qiniu.zhaoshuai.me/wp-includes/js/backbone.min.js?ver=1.2.3'></script>
<script type='text/javascript' src='https://s1.wp.com/wp-content/js/mustache.js?ver=7.3.1-201920'></script>
<script type='text/javascript' src='https://s1.wp.com/wp-content/mu-plugins/notes/notes-common-v2.js?ver=7.3.1-201920'></script>
<script type='text/javascript' src='https://s0.wp.com/wp-content/mu-plugins/notes/admin-bar-v2.js?ver=7.3.1-201920'></script>
<script async="async" type='text/javascript' src='https://qiniu.zhaoshuai.me/wp-content/plugins/akismet/_inc/form.js?ver=4.1.2'></script>
	<!--[if lte IE 8]>
		<script type="text/javascript">
			document.body.className = document.body.className.replace( /(^|\s)(no-)?customize-support(?=\s|$)/, '' ) + ' no-customize-support';
		</script>
	<![endif]-->
	<!--[if gte IE 9]><!-->
		<script type="text/javascript">
			(function() {
				var request, b = document.body, c = 'className', cs = 'customize-support', rcs = new RegExp('(^|\\s+)(no-)?'+cs+'(\\s+|$)');

						request = true;
		
				b[c] = b[c].replace( rcs, ' ' );
				// The customizer requires postMessage and CORS (if the site is cross domain)
				b[c] += ( window.postMessage && request ? ' ' : ' no-' ) + cs;
			}());
		</script>
	<!--<![endif]-->
			<div id="wpadminbar" class="nojq nojs">
							<a class="screen-reader-shortcut" href="#wp-toolbar" tabindex="1">跳至工具栏</a>
						<div class="quicklinks" id="wp-toolbar" role="navigation" aria-label="工具栏">
				<ul id='wp-admin-bar-root-default' class="ab-top-menu"><li id='wp-admin-bar-wp-logo' class="menupop"><a class='ab-item' aria-haspopup="true" href='https://zhaoshuai.me/wp-admin/about.php'><span class="ab-icon"></span><span class="screen-reader-text">关于WordPress</span></a><div class="ab-sub-wrapper"><ul id='wp-admin-bar-wp-logo-default' class="ab-submenu"><li id='wp-admin-bar-about'><a class='ab-item' href='https://zhaoshuai.me/wp-admin/about.php'>关于WordPress</a></li></ul><ul id='wp-admin-bar-wp-logo-external' class="ab-sub-secondary ab-submenu"><li id='wp-admin-bar-wporg'><a class='ab-item' href='https://cn.wordpress.org/'>WordPress.org</a></li><li id='wp-admin-bar-documentation'><a class='ab-item' href='https://codex.wordpress.org/'>文档</a></li><li id='wp-admin-bar-support-forums'><a class='ab-item' href='http://zh-cn.forums.wordpress.org/'>Support</a></li><li id='wp-admin-bar-feedback'><a class='ab-item' href='http://zh-cn.forums.wordpress.org/forum/suggestions'>反馈</a></li></ul></div></li><li id='wp-admin-bar-site-name' class="menupop"><a class='ab-item' aria-haspopup="true" href='https://zhaoshuai.me/wp-admin/'>碎念</a><div class="ab-sub-wrapper"><ul id='wp-admin-bar-site-name-default' class="ab-submenu"><li id='wp-admin-bar-dashboard'><a class='ab-item' href='https://zhaoshuai.me/wp-admin/'>仪表盘</a></li></ul><ul id='wp-admin-bar-appearance' class="ab-submenu"><li id='wp-admin-bar-themes'><a class='ab-item' href='https://zhaoshuai.me/wp-admin/themes.php'>主题</a></li><li id='wp-admin-bar-menus'><a class='ab-item' href='https://zhaoshuai.me/wp-admin/nav-menus.php'>菜单</a></li></ul></div></li><li id='wp-admin-bar-customize' class="hide-if-no-customize"><a class='ab-item' href='https://zhaoshuai.me/wp-admin/customize.php?url=https%3A%2F%2Fzhaoshuai.me%2F2018-10-09%2F'>自定义</a></li><li id='wp-admin-bar-comments'><a class='ab-item' href='https://zhaoshuai.me/wp-admin/edit-comments.php'><span class="ab-icon"></span><span class="ab-label awaiting-mod pending-count count-0" aria-hidden="true">0</span><span class="screen-reader-text comments-in-moderation-text">0 Comments in moderation</span></a></li><li id='wp-admin-bar-new-content' class="menupop"><a class='ab-item' aria-haspopup="true" href='https://zhaoshuai.me/wp-admin/post-new.php'><span class="ab-icon"></span><span class="ab-label">新建</span></a><div class="ab-sub-wrapper"><ul id='wp-admin-bar-new-content-default' class="ab-submenu"><li id='wp-admin-bar-new-post'><a class='ab-item' href='https://zhaoshuai.me/wp-admin/post-new.php'>文章</a></li><li id='wp-admin-bar-new-media'><a class='ab-item' href='https://zhaoshuai.me/wp-admin/media-new.php'>媒体</a></li><li id='wp-admin-bar-new-link'><a class='ab-item' href='https://zhaoshuai.me/wp-admin/link-add.php'>链接</a></li><li id='wp-admin-bar-new-page'><a class='ab-item' href='https://zhaoshuai.me/wp-admin/post-new.php?post_type=page'>页面</a></li><li id='wp-admin-bar-new-user'><a class='ab-item' href='https://zhaoshuai.me/wp-admin/user-new.php'>用户</a></li></ul></div></li><li id='wp-admin-bar-edit'><a class='ab-item' href='https://zhaoshuai.me/wp-admin/post.php?post=209&#038;action=edit'>编辑文章</a></li><li id='wp-admin-bar-delete-cache'><a class='ab-item' href='https://zhaoshuai.me/wp-admin/index.php?action=delcachepage&#038;path=%2F2018-10-09%2F&#038;_wpnonce=fb2f78cd8c' title='删除当前页面的缓存'>删除缓存</a></li><li id='wp-admin-bar-stats'><a class='ab-item' href='https://zhaoshuai.me/wp-admin/admin.php?page=stats'><div><script type='text/javascript'>var src;if(typeof(window.devicePixelRatio)=='undefined'||window.devicePixelRatio<2){src='https://zhaoshuai.me/wp-admin/admin.php?page=stats&amp;noheader&amp;proxy&amp;chart=admin-bar-hours-scale';}else{src='https://zhaoshuai.me/wp-admin/admin.php?page=stats&amp;noheader&amp;proxy&amp;chart=admin-bar-hours-scale-2x';}document.write('<img src=\''+src+'\' alt=\'统计\' title=\'查看超过 48 小时。点击以查看更多站点统计信息。\' />');</script></div></a></li></ul><ul id='wp-admin-bar-top-secondary' class="ab-top-secondary ab-top-menu"><li id='wp-admin-bar-search' class="admin-bar-search"><div class="ab-item ab-empty-item" tabindex="-1"><form action="https://zhaoshuai.me/" method="get" id="adminbarsearch"><input class="adminbar-input" name="s" id="adminbar-search" type="text" value="" maxlength="150" /><label for="adminbar-search" class="screen-reader-text">搜索</label><input type="submit" class="adminbar-button" value="搜索"/></form></div></li><li id='wp-admin-bar-my-account' class="menupop with-avatar"><a class='ab-item' aria-haspopup="true" href='https://zhaoshuai.me/wp-admin/profile.php'>嗨，<span class="display-name">zhaoshuai</span><img alt='' src='https://secure.gravatar.com/avatar/256c88fc2de20125bfaf6a16c3c9f6f3?s=26&#038;d=mm&#038;r=g' srcset='https://secure.gravatar.com/avatar/256c88fc2de20125bfaf6a16c3c9f6f3?s=52&#038;d=mm&#038;r=g 2x' class='avatar avatar-26 photo' height='26' width='26' /></a><div class="ab-sub-wrapper"><ul id='wp-admin-bar-user-actions' class="ab-submenu"><li id='wp-admin-bar-user-info'><a class='ab-item' tabindex="-1" href='https://zhaoshuai.me/wp-admin/profile.php'><img alt='' src='https://secure.gravatar.com/avatar/256c88fc2de20125bfaf6a16c3c9f6f3?s=64&#038;d=mm&#038;r=g' srcset='https://secure.gravatar.com/avatar/256c88fc2de20125bfaf6a16c3c9f6f3?s=128&#038;d=mm&#038;r=g 2x' class='avatar avatar-64 photo' height='64' width='64' /><span class='display-name'>zhaoshuai</span></a></li><li id='wp-admin-bar-edit-profile'><a class='ab-item' href='https://zhaoshuai.me/wp-admin/profile.php'>编辑我的个人资料</a></li><li id='wp-admin-bar-logout'><a class='ab-item' href='https://zhaoshuai.me/wp-login.php?action=logout&#038;_wpnonce=a0766f365c'>登出</a></li></ul></div></li><li id='wp-admin-bar-notes' class="menupop"><div class="ab-item ab-empty-item"><span id="wpnt-notes-unread-count" class="wpnt-loading wpn-read">
					<span class="noticon noticon-notification"></span>
					</span></div><div id="wpnt-notes-panel2" style="display:none" lang="zh-cn" dir="ltr"><div class="wpnt-notes-panel-header"><span class="wpnt-notes-header">通知</span><span class="wpnt-notes-panel-link"></span></div></div></li></ul>			</div>
						<a class="screen-reader-shortcut" href="https://zhaoshuai.me/wp-login.php?action=logout&#038;_wpnonce=a0766f365c">登出</a>
					</div>

		</body></html>