<?php die(); ?><!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <title>【Mac】优雅的使用mail软件 - 碎念</title>
<meta name="keywords" content="Mac"/>
<meta name="description" content="
写在前面：



在这里给大家推荐一下，Mac自带mail的软件如何优雅的支持各类邮件账号（QQ、Exchange、ICloud、Gmail 等）







添加账号：







首先要在 系统设置 的 互联网账号 里面添加上我们自己的各类邮箱，注意在添加QQ邮箱的"/>
    <link rel="stylesheet" href="https://qiniu.zhaoshuai.me/wp-content/themes/cu/style.css" media="screen" type="text/css"/>
    <link rel="shortcut icon" href="https://qiniu.zhaoshuai.me/wp-content/themes/cu/images/favicon.ico" type="image/x-icon"/>
    <link rel='dns-prefetch' href='//s.w.org' />
<link rel='dns-prefetch' href='//qiniu.zhaoshuai.me' />
<meta name='description' content='写在前面： 在这里给大家推荐一下，Mac自带mail的软件如何优雅的支持各类邮件账号（QQ、Exchange、ICloud、Gmail 等） 添加账号： 首先要在 系统设置 的 互联网账号 里面添加上我们自己的各类邮箱，注意在添加QQ邮箱的时候，密码是 “授 ...' />
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
            <h1 class="mod-post__title">【Mac】优雅的使用mail软件</h1>
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
                    2019年05月05日                </span>
            </div>

            <div class="single-header-bar">
                <img class="single" src="https://qiniu.zhaoshuai.me/wp-content/themes/cu/images/comment.png">
                <span class="single-header-span">
                    0                </span>
            </div>

            <div class="single-header-bar">
                <img class="single" src="https://qiniu.zhaoshuai.me/wp-content/themes/cu/images/comment.png">
                <span class="single-header-span">
                </span>
            </div>
        </div>

        <div>
                            <div class="mod-post__entry wzulli">
<h2>写在前面：</h2>



<p>在这里给大家推荐一下，Mac自带mail的软件如何优雅的支持各类邮件账号（QQ、Exchange、ICloud、Gmail 等）</p>



<figure class="wp-block-image"><img data-attachment-id="250" data-permalink="https://zhaoshuai.me/2019-05-05/2f7282b4b561c614c68ce8fe242562bf/" data-orig-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2019/05/2F7282B4B561C614C68CE8FE242562BF.jpg" data-orig-size="1516,344" data-comments-opened="1" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;0&quot;}" data-image-title="2F7282B4B561C614C68CE8FE242562BF" data-image-description="" data-medium-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2019/05/2F7282B4B561C614C68CE8FE242562BF.jpg" data-large-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2019/05/2F7282B4B561C614C68CE8FE242562BF.jpg" src="https://qiniu.zhaoshuai.me/wp-content/uploads/2019/05/2F7282B4B561C614C68CE8FE242562BF.jpg" alt="" class="wp-image-250"/></figure>



<h2>添加账号：</h2>



<figure class="wp-block-image"><img data-attachment-id="255" data-permalink="https://zhaoshuai.me/2019-05-05/f1e30561c16d5e0bb158c94e066fdede/" data-orig-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2019/05/F1E30561C16D5E0BB158C94E066FDEDE.jpg" data-orig-size="1336,972" data-comments-opened="1" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;0&quot;}" data-image-title="F1E30561C16D5E0BB158C94E066FDEDE" data-image-description="" data-medium-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2019/05/F1E30561C16D5E0BB158C94E066FDEDE.jpg" data-large-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2019/05/F1E30561C16D5E0BB158C94E066FDEDE.jpg" src="https://qiniu.zhaoshuai.me/wp-content/uploads/2019/05/F1E30561C16D5E0BB158C94E066FDEDE.jpg" alt="" class="wp-image-255"/></figure>



<p>首先要在 <strong>系统设置</strong> 的 <strong>互联网账号</strong> 里面添加上我们自己的各类邮箱，注意在添加QQ邮箱的时候，密码是 “授权码” ：<a href="https://jingyan.baidu.com/article/29697b91613f7fab20de3c2e.html"><strong>Mac邮件客户端如何添加QQ邮箱教程</strong></a></p>



<h2>使用代理：</h2>



<p>添加完成账号之后，打开邮件，你可能会发现谷歌账号会出现一个感叹号，并提示“<em>通过默认端口连接到服务器“imap.gmail.com”超时</em>”，接受不到新的邮件，那可能就被墙了。</p>


<p><img data-attachment-id="272" data-permalink="https://zhaoshuai.me/2019-05-05/4b7336fd0954176b1a7c3a674777a16a/" data-orig-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2019/05/4B7336FD0954176B1A7C3A674777A16A.jpg" data-orig-size="234,365" data-comments-opened="1" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;0&quot;}" data-image-title="4B7336FD0954176B1A7C3A674777A16A" data-image-description="" data-medium-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2019/05/4B7336FD0954176B1A7C3A674777A16A.jpg" data-large-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2019/05/4B7336FD0954176B1A7C3A674777A16A.jpg" class="aligncenter size-full wp-image-272" src="https://qiniu.zhaoshuai.me/wp-content/uploads/2019/05/4B7336FD0954176B1A7C3A674777A16A.jpg" alt="" width="234" height="365"></p>
<p><img data-attachment-id="263" data-permalink="https://zhaoshuai.me/2019-05-05/ea4c244b4794bf0d11b704d745fc6dae/" data-orig-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2019/05/EA4C244B4794BF0D11B704D745FC6DAE.jpg" data-orig-size="420,129" data-comments-opened="1" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;0&quot;}" data-image-title="EA4C244B4794BF0D11B704D745FC6DAE" data-image-description="" data-medium-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2019/05/EA4C244B4794BF0D11B704D745FC6DAE.jpg" data-large-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2019/05/EA4C244B4794BF0D11B704D745FC6DAE.jpg" class="size-full wp-image-263 aligncenter" src="https://qiniu.zhaoshuai.me/wp-content/uploads/2019/05/EA4C244B4794BF0D11B704D745FC6DAE.jpg" alt="" width="420" height="129"></p>


<p>我们接下来就使用代理解决谷歌账号被墙的问题，首先你需要有个翻墙的工具，在这里推荐一下：ShadowSocks（江湖人称小飞机），<a rel="noreferrer noopener" aria-label="（在新窗口打开）" href="https://my.v2ss.bid/users/register.php" target="_blank">V2SS</a> 网站上有打包好的Mac系统的安装包，也可以在上面购买翻墙账号。</p>


<div class="wp-block-image"><img data-attachment-id="264" data-permalink="https://zhaoshuai.me/2019-05-05/9fa0d9f642ad436679b051a64935ef03/" data-orig-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2019/05/9FA0D9F642AD436679B051A64935EF03.jpg" data-orig-size="215,345" data-comments-opened="1" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;0&quot;}" data-image-title="9FA0D9F642AD436679B051A64935EF03" data-image-description="" data-medium-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2019/05/9FA0D9F642AD436679B051A64935EF03.jpg" data-large-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2019/05/9FA0D9F642AD436679B051A64935EF03.jpg" class="wp-image-264 aligncenter" src="https://qiniu.zhaoshuai.me/wp-content/uploads/2019/05/9FA0D9F642AD436679B051A64935EF03.jpg" alt=""></div>


<h2>打开代理：</h2>



<p>接下来就需要设置一下我们电脑网络的代理模式</p>



<p>1、打开电脑的系统设置中的 <strong>网路</strong>, 点击 “wifi 或者 以太网” 会看到一个高级设置，点击进去：</p>



<div class="wp-block-image"><figure class="aligncenter"><img data-attachment-id="270" data-permalink="https://zhaoshuai.me/2019-05-05/d3499e7d8ed978fdf6cbee1026dc264c/" data-orig-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2019/05/D3499E7D8ED978FDF6CBEE1026DC264C.jpg" data-orig-size="668,563" data-comments-opened="1" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;0&quot;}" data-image-title="D3499E7D8ED978FDF6CBEE1026DC264C" data-image-description="" data-medium-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2019/05/D3499E7D8ED978FDF6CBEE1026DC264C.jpg" data-large-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2019/05/D3499E7D8ED978FDF6CBEE1026DC264C.jpg" src="https://qiniu.zhaoshuai.me/wp-content/uploads/2019/05/D3499E7D8ED978FDF6CBEE1026DC264C.jpg" alt="" class="wp-image-270"/></figure></div>



<p>2、在高级设置里面，点击 <strong>代理 </strong>然后再左边选择 <strong>SOCKS 代理</strong> （现在就用到了我们上面说的那个ShadowSocks小飞机），在右侧设置代理的服务器地址 + 端口（例如我的就是127.0.0.1:1080），返回上一层，记住一定要点击<strong> 应用 </strong>完成保存！！！</p>



<div class="wp-block-image"><figure class="aligncenter"><img data-attachment-id="271" data-permalink="https://zhaoshuai.me/2019-05-05/ae4d5f6ffcb2795b8f7505e1bec0ca18/" data-orig-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2019/05/AE4D5F6FFCB2795B8F7505E1BEC0CA18.jpg" data-orig-size="669,558" data-comments-opened="1" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;0&quot;}" data-image-title="AE4D5F6FFCB2795B8F7505E1BEC0CA18" data-image-description="" data-medium-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2019/05/AE4D5F6FFCB2795B8F7505E1BEC0CA18.jpg" data-large-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2019/05/AE4D5F6FFCB2795B8F7505E1BEC0CA18.jpg" src="https://qiniu.zhaoshuai.me/wp-content/uploads/2019/05/AE4D5F6FFCB2795B8F7505E1BEC0CA18.jpg" alt="" class="wp-image-271"/></figure></div>



<h2>写在后面：</h2>



<p>刚刚我们介绍了如何打开这个代理设置，但是有个小问题，每次我们一关机，再次开机这些设置就会恢复默认。这就很头疼了，每次进来设置的步骤还是挺麻烦了，下面可以通过命令行实现一键设置：</p>



<h4>1、打开电脑的命令行工具（Iterm 或 Terminal），粘贴下面命令：</h4>



<blockquote class="wp-block-quote"><p>#! /bin/zsh<br> wifi='Wi-Fi'<br> wired='以太网 USB 3.0'<br> #proxy<br> networksetup -setproxyautodiscovery "${wifi}" on<br> networksetup -setproxyautodiscovery "${wired}" on<br> networksetup -setsocksfirewallproxy "${wifi}" 127.0.0.1 1080<br> networksetup -setsocksfirewallproxy "${wired}" 127.0.0.1 1080</p></blockquote>



<h4>2、下载 Proxy.sh 到桌面，执行：</h4>



<p>链接: <a href="https://pan.baidu.com/s/1pKkvpoWUM2Rwn8RRj4z_ew">https://pan.baidu.com/s/1pKkvpoWUM2Rwn8RRj4z_ew</a>  密码: <strong>bchb</strong></p>



<!-- Crayon Syntax Highlighter v_2.7.2_beta -->

		<div id="crayon-5cdd7c9857aad317529701" class="crayon-syntax crayon-theme-solarized-light crayon-font-monaco crayon-os-mac print-yes notranslate" data-settings=" minimize scroll-mouseover" style=" margin-top: 12px; margin-bottom: 12px; font-size: 12px !important; line-height: 15px !important;">
		
			<div class="crayon-toolbar" data-settings=" mouseover overlay hide delay" style="font-size: 12px !important;height: 18px !important; line-height: 18px !important;"><span class="crayon-title"></span>
			<div class="crayon-tools" style="font-size: 12px !important;height: 18px !important; line-height: 18px !important;"><div class="crayon-button crayon-nums-button" title="Toggle Line Numbers"><div class="crayon-button-icon"></div></div><div class="crayon-button crayon-plain-button" title="Toggle Plain Code"><div class="crayon-button-icon"></div></div><div class="crayon-button crayon-wrap-button" title="Toggle Line Wrap"><div class="crayon-button-icon"></div></div><div class="crayon-button crayon-expand-button" title="Expand Code"><div class="crayon-button-icon"></div></div><div class="crayon-button crayon-copy-button" title="Copy"><div class="crayon-button-icon"></div></div><div class="crayon-button crayon-popup-button" title="Open Code In New Window"><div class="crayon-button-icon"></div></div><span class="crayon-language">Default</span></div></div>
			<div class="crayon-info" style="min-height: 16.8px !important; line-height: 16.8px !important;"></div>
			<div class="crayon-plain-wrap"><textarea wrap="soft" class="crayon-plain print-no" data-settings="dblclick" readonly style="-moz-tab-size:4; -o-tab-size:4; -webkit-tab-size:4; tab-size:4; font-size: 12px !important; line-height: 15px !important;">
cd ~ &amp;&amp; sh Desktop/Proxy.sh</textarea></div>
			<div class="crayon-main" style="">
				<table class="crayon-table">
					<tr class="crayon-row">
				<td class="crayon-nums " data-settings="show">
					<div class="crayon-nums-content" style="font-size: 12px !important; line-height: 15px !important;"><div class="crayon-num" data-line="crayon-5cdd7c9857aad317529701-1">1</div></div>
				</td>
						<td class="crayon-code"><div class="crayon-pre" style="font-size: 12px !important; line-height: 15px !important; -moz-tab-size:4; -o-tab-size:4; -webkit-tab-size:4; tab-size:4;"><div class="crayon-line" id="crayon-5cdd7c9857aad317529701-1"><span class="crayon-v">cd</span><span class="crayon-h"> </span><span class="crayon-o">~</span><span class="crayon-h"> </span><span class="crayon-o">&amp;&amp;</span><span class="crayon-h"> </span><span class="crayon-e">sh </span><span class="crayon-v">Desktop</span><span class="crayon-o">/</span><span class="crayon-v">Proxy</span><span class="crayon-sy">.</span><span class="crayon-v">sh</span></div></div></td>
					</tr>
				</table>
			</div>
		</div>
<!-- [Format Time: 0.0001 seconds] -->




<p></p>
</div>
                                    </div>

        <div class="mod-post__meta">
            <div>
                <div>— 于
                    <time datetime="2019年05月05日 05:43:31">2019年05月05日</time>
                    ，<span>共写了1008个字</span>；
                </div>
                <div>— 文内使用到的标签：<span class="mod_tag"><a href="https://zhaoshuai.me/tag/mac/" rel="tag">Mac</a></span></div>
            </div>
        </div>
        <ul class="sxwk">
            <li>下一篇：<a href="https://zhaoshuai.me/2018-09-27/" rel="prev">【Mac】APP无法打开或文件损坏的处理方法</a></li>
            <li>上一篇：<a href="https://zhaoshuai.me/2019-05-15/" rel="next">【Mac】Mojave · Squeal Pro 闪退问题解决</a></li>
        </ul>
    </article>
    <section class="mod-comment">
        
<!-- You can start editing here. -->


			<!-- If comments are open, but there are no comments. -->

	
	<div id="respond" class="comment-respond">
		<h3 id="reply-title" class="comment-reply-title">发表评论 <small><a rel="nofollow" id="cancel-comment-reply-link" href="/2019-05-05/#respond" style="display:none;">取消回复</a></small></h3>			<form action="https://zhaoshuai.me/wp-comments-post.php" method="post" id="commentform" class="comment-form">
				<p class="logged-in-as"><a href="https://zhaoshuai.me/wp-admin/profile.php" aria-label="已登入为zhaoshuai。编辑您的个人资料。">已登入为zhaoshuai</a>。<a href="https://zhaoshuai.me/wp-login.php?action=logout&amp;redirect_to=https%3A%2F%2Fzhaoshuai.me%2F2019-05-05%2F&amp;_wpnonce=a0766f365c">登出？</a></p><p class="comment-form-comment"><label for="comment">评论</label> <textarea id="comment" name="comment" cols="45" rows="8" maxlength="65525" required="required"></textarea></p><p class="form-submit"><input name="submit" type="submit" id="submit" class="submit" value="发表评论" /> <input type='hidden' name='comment_post_ID' value='249' id='comment_post_ID' />
<input type='hidden' name='comment_parent' id='comment_parent' value='0' />
</p><p style="display: none;"><input type="hidden" id="akismet_comment_nonce" name="akismet_comment_nonce" value="cf1c28b99a" /></p><input type="hidden" id="_wp_unfiltered_html_comment_disabled" name="_wp_unfiltered_html_comment_disabled" value="c68553a999" /><script>(function(){if(window===window.parent){document.getElementById('_wp_unfiltered_html_comment_disabled').name='_wp_unfiltered_html_comment';}})();</script>
<p style="display: none;"><input type="hidden" id="ak_js" name="ak_js" value="175"/></p>			</form>
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
<link rel='stylesheet' id='crayon-theme-solarized-light-css'  href='https://qiniu.zhaoshuai.me/wp-content/plugins/crayon-syntax-highlighter/themes/solarized-light/solarized-light.css?ver=_2.7.2_beta' type='text/css' media='all' />
<link rel='stylesheet' id='crayon-font-monaco-css'  href='https://qiniu.zhaoshuai.me/wp-content/plugins/crayon-syntax-highlighter/fonts/monaco.css?ver=_2.7.2_beta' type='text/css' media='all' />
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
var jetpackCarouselStrings = {"widths":[370,700,1000,1200,1400,2000],"is_logged_in":"1","lang":"zh","ajaxurl":"https:\/\/zhaoshuai.me\/wp-admin\/admin-ajax.php","nonce":"dedbdb27a3","display_exif":"1","display_geo":"1","single_image_gallery":"1","single_image_gallery_media_file":"","background_color":"black","comment":"\u6761\u8bc4\u8bba","post_comment":"\u53d1\u8868\u8bc4\u8bba","write_comment":"\u64b0\u5199\u8bc4\u8bba...","loading_comments":"\u6b63\u5728\u52a0\u8f7d\u8bc4\u8bba...","download_original":"\u67e5\u770b\u5168\u5c3a\u5bf8 <span class=\"photo-size\">{0}<span class=\"photo-size-times\">\u00d7<\/span>{1}<\/span>","no_comment_text":"\u8bf7\u786e\u4fdd\u4e0e\u60a8\u7684\u8bc4\u8bba\u4e00\u8d77\u63d0\u4ea4\u90e8\u5206\u6587\u672c\u3002","no_comment_email":"\u8bf7\u63d0\u4f9b\u7528\u4e8e\u53d1\u8868\u8bc4\u8bba\u7684\u7535\u5b50\u90ae\u4ef6\u5730\u5740\u3002","no_comment_author":"\u8bf7\u63d0\u4f9b\u60a8\u7528\u4e8e\u53d1\u8868\u8bc4\u8bba\u7684\u59d3\u540d\u3002","comment_post_error":"\u62b1\u6b49\uff0c\u53d1\u8868\u60a8\u7684\u8bc4\u8bba\u65f6\u51fa\u9519\u3002\u8bf7\u7a0d\u540e\u91cd\u8bd5\u3002","comment_approved":"\u60a8\u7684\u8bc4\u8bba\u5df2\u83b7\u5f97\u6279\u51c6\u3002","comment_unapproved":"\u6b63\u5728\u5ba1\u6838\u60a8\u7684\u8bc4\u8bba\u3002","camera":"\u7167\u76f8\u673a","aperture":"\u5149\u5708","shutter_speed":"\u5feb\u95e8\u901f\u5ea6","focal_length":"\u7126\u8ddd","copyright":"\u7248\u6743","comment_registration":"0","require_name_email":"1","login_url":"https:\/\/zhaoshuai.me\/wp-login.php?redirect_to=https%3A%2F%2Fzhaoshuai.me%2F2019-05-05%2F","blog_id":"1","meta_data":["camera","aperture","shutter_speed","focal_length","copyright"],"local_comments_commenting_as":"<p id=\"jp-carousel-commenting-as\">\u4f5c\u4e3a zhaoshuai \u53d1\u8868\u8bc4\u8bba<\/p>"};
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
				<ul id='wp-admin-bar-root-default' class="ab-top-menu"><li id='wp-admin-bar-wp-logo' class="menupop"><a class='ab-item' aria-haspopup="true" href='https://zhaoshuai.me/wp-admin/about.php'><span class="ab-icon"></span><span class="screen-reader-text">关于WordPress</span></a><div class="ab-sub-wrapper"><ul id='wp-admin-bar-wp-logo-default' class="ab-submenu"><li id='wp-admin-bar-about'><a class='ab-item' href='https://zhaoshuai.me/wp-admin/about.php'>关于WordPress</a></li></ul><ul id='wp-admin-bar-wp-logo-external' class="ab-sub-secondary ab-submenu"><li id='wp-admin-bar-wporg'><a class='ab-item' href='https://cn.wordpress.org/'>WordPress.org</a></li><li id='wp-admin-bar-documentation'><a class='ab-item' href='https://codex.wordpress.org/'>文档</a></li><li id='wp-admin-bar-support-forums'><a class='ab-item' href='http://zh-cn.forums.wordpress.org/'>Support</a></li><li id='wp-admin-bar-feedback'><a class='ab-item' href='http://zh-cn.forums.wordpress.org/forum/suggestions'>反馈</a></li></ul></div></li><li id='wp-admin-bar-site-name' class="menupop"><a class='ab-item' aria-haspopup="true" href='https://zhaoshuai.me/wp-admin/'>碎念</a><div class="ab-sub-wrapper"><ul id='wp-admin-bar-site-name-default' class="ab-submenu"><li id='wp-admin-bar-dashboard'><a class='ab-item' href='https://zhaoshuai.me/wp-admin/'>仪表盘</a></li></ul><ul id='wp-admin-bar-appearance' class="ab-submenu"><li id='wp-admin-bar-themes'><a class='ab-item' href='https://zhaoshuai.me/wp-admin/themes.php'>主题</a></li><li id='wp-admin-bar-menus'><a class='ab-item' href='https://zhaoshuai.me/wp-admin/nav-menus.php'>菜单</a></li></ul></div></li><li id='wp-admin-bar-customize' class="hide-if-no-customize"><a class='ab-item' href='https://zhaoshuai.me/wp-admin/customize.php?url=https%3A%2F%2Fzhaoshuai.me%2F2019-05-05%2F'>自定义</a></li><li id='wp-admin-bar-comments'><a class='ab-item' href='https://zhaoshuai.me/wp-admin/edit-comments.php'><span class="ab-icon"></span><span class="ab-label awaiting-mod pending-count count-0" aria-hidden="true">0</span><span class="screen-reader-text comments-in-moderation-text">0 Comments in moderation</span></a></li><li id='wp-admin-bar-new-content' class="menupop"><a class='ab-item' aria-haspopup="true" href='https://zhaoshuai.me/wp-admin/post-new.php'><span class="ab-icon"></span><span class="ab-label">新建</span></a><div class="ab-sub-wrapper"><ul id='wp-admin-bar-new-content-default' class="ab-submenu"><li id='wp-admin-bar-new-post'><a class='ab-item' href='https://zhaoshuai.me/wp-admin/post-new.php'>文章</a></li><li id='wp-admin-bar-new-media'><a class='ab-item' href='https://zhaoshuai.me/wp-admin/media-new.php'>媒体</a></li><li id='wp-admin-bar-new-link'><a class='ab-item' href='https://zhaoshuai.me/wp-admin/link-add.php'>链接</a></li><li id='wp-admin-bar-new-page'><a class='ab-item' href='https://zhaoshuai.me/wp-admin/post-new.php?post_type=page'>页面</a></li><li id='wp-admin-bar-new-user'><a class='ab-item' href='https://zhaoshuai.me/wp-admin/user-new.php'>用户</a></li></ul></div></li><li id='wp-admin-bar-edit'><a class='ab-item' href='https://zhaoshuai.me/wp-admin/post.php?post=249&#038;action=edit'>编辑文章</a></li><li id='wp-admin-bar-delete-cache'><a class='ab-item' href='https://zhaoshuai.me/wp-admin/index.php?action=delcachepage&#038;path=%2F2019-05-05%2F&#038;_wpnonce=fb2f78cd8c' title='删除当前页面的缓存'>删除缓存</a></li><li id='wp-admin-bar-stats'><a class='ab-item' href='https://zhaoshuai.me/wp-admin/admin.php?page=stats'><div><script type='text/javascript'>var src;if(typeof(window.devicePixelRatio)=='undefined'||window.devicePixelRatio<2){src='https://zhaoshuai.me/wp-admin/admin.php?page=stats&amp;noheader&amp;proxy&amp;chart=admin-bar-hours-scale';}else{src='https://zhaoshuai.me/wp-admin/admin.php?page=stats&amp;noheader&amp;proxy&amp;chart=admin-bar-hours-scale-2x';}document.write('<img src=\''+src+'\' alt=\'统计\' title=\'查看超过 48 小时。点击以查看更多站点统计信息。\' />');</script></div></a></li></ul><ul id='wp-admin-bar-top-secondary' class="ab-top-secondary ab-top-menu"><li id='wp-admin-bar-search' class="admin-bar-search"><div class="ab-item ab-empty-item" tabindex="-1"><form action="https://zhaoshuai.me/" method="get" id="adminbarsearch"><input class="adminbar-input" name="s" id="adminbar-search" type="text" value="" maxlength="150" /><label for="adminbar-search" class="screen-reader-text">搜索</label><input type="submit" class="adminbar-button" value="搜索"/></form></div></li><li id='wp-admin-bar-my-account' class="menupop with-avatar"><a class='ab-item' aria-haspopup="true" href='https://zhaoshuai.me/wp-admin/profile.php'>嗨，<span class="display-name">zhaoshuai</span><img alt='' src='https://secure.gravatar.com/avatar/256c88fc2de20125bfaf6a16c3c9f6f3?s=26&#038;d=mm&#038;r=g' srcset='https://secure.gravatar.com/avatar/256c88fc2de20125bfaf6a16c3c9f6f3?s=52&#038;d=mm&#038;r=g 2x' class='avatar avatar-26 photo' height='26' width='26' /></a><div class="ab-sub-wrapper"><ul id='wp-admin-bar-user-actions' class="ab-submenu"><li id='wp-admin-bar-user-info'><a class='ab-item' tabindex="-1" href='https://zhaoshuai.me/wp-admin/profile.php'><img alt='' src='https://secure.gravatar.com/avatar/256c88fc2de20125bfaf6a16c3c9f6f3?s=64&#038;d=mm&#038;r=g' srcset='https://secure.gravatar.com/avatar/256c88fc2de20125bfaf6a16c3c9f6f3?s=128&#038;d=mm&#038;r=g 2x' class='avatar avatar-64 photo' height='64' width='64' /><span class='display-name'>zhaoshuai</span></a></li><li id='wp-admin-bar-edit-profile'><a class='ab-item' href='https://zhaoshuai.me/wp-admin/profile.php'>编辑我的个人资料</a></li><li id='wp-admin-bar-logout'><a class='ab-item' href='https://zhaoshuai.me/wp-login.php?action=logout&#038;_wpnonce=a0766f365c'>登出</a></li></ul></div></li><li id='wp-admin-bar-notes' class="menupop"><div class="ab-item ab-empty-item"><span id="wpnt-notes-unread-count" class="wpnt-loading wpn-read">
					<span class="noticon noticon-notification"></span>
					</span></div><div id="wpnt-notes-panel2" style="display:none" lang="zh-cn" dir="ltr"><div class="wpnt-notes-panel-header"><span class="wpnt-notes-header">通知</span><span class="wpnt-notes-panel-link"></span></div></div></li></ul>			</div>
						<a class="screen-reader-shortcut" href="https://zhaoshuai.me/wp-login.php?action=logout&#038;_wpnonce=a0766f365c">登出</a>
					</div>

		</body></html>