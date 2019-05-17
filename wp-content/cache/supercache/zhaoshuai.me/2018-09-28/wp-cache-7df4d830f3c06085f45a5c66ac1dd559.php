<?php die(); ?><!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <title>【Nginx】域名添加 HTTPS 证书 - 碎念</title>
<meta name="keywords" content="Nginx"/>
<meta name="description" content="
1、前期准备



需要有个域名：www.zhaoshuai.me（&nbsp;阿里云&nbsp;、腾讯云）有一台 Linux ECS；LNMP环境：Nginx服务器 + PHP-FPM



2、申请SSL证书（以阿里云为例）



2.1 控制台 -&gt; 域名 -&gt; 域名列表 -&gt; 管理（最右侧）"/>
    <link rel="stylesheet" href="https://qiniu.zhaoshuai.me/wp-content/themes/cu/style.css" media="screen" type="text/css"/>
    <link rel="shortcut icon" href="https://qiniu.zhaoshuai.me/wp-content/themes/cu/images/favicon.ico" type="image/x-icon"/>
    <link rel='dns-prefetch' href='//qiniu.zhaoshuai.me' />
<meta name='description' content='1、前期准备 需要有个域名：www.zhaoshuai.me（&nbsp;阿里云&nbsp;、腾讯云）有一台 Linux ECS；LNMP环境：Nginx服务器 + PHP-FPM 2、申请SSL证书（以阿里云为例） 2.1 控制台 -&gt; 域名 -&gt; 域名列表 -&gt; 管理（最右侧） 2.2 域名 ...' />
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
                    <div class="zjgx">1</div>
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
            <h1 class="mod-post__title">【Nginx】域名添加 HTTPS 证书</h1>
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
                    2018年09月29日                </span>
            </div>

            <div class="single-header-bar">
                <img class="single" src="https://qiniu.zhaoshuai.me/wp-content/themes/cu/images/comment.png">
                <span class="single-header-span">
                    0                </span>
            </div>

            <div class="single-header-bar">
                <img class="single" src="https://qiniu.zhaoshuai.me/wp-content/themes/cu/images/pageview.png">
                <span class="single-header-span">
                    0                </span>
            </div>
        </div>

        <div>
                            <div class="mod-post__entry wzulli">
<h2>1、前期准备</h2>



<ul><li>需要有个域名：www.zhaoshuai.me（&nbsp;<a href="https://mi.aliyun.com/" target="_blank" rel="noreferrer noopener">阿里云</a>&nbsp;、<a href="https://cloud.tencent.com/act/domainsales?from=sem&amp;fromSource=gwzcw.604251.604251.604251" target="_blank" rel="noreferrer noopener">腾讯云</a>）</li><li>有一台 Linux ECS；</li><li>LNMP环境：Nginx服务器 + PHP-FPM</li></ul>



<h2>2、申请SSL证书（以阿里云为例）</h2>



<h3>2.1 控制台 -&gt; 域名 -&gt; 域名列表 -&gt; 管理（最右侧）</h3>



<div class="wp-block-image"><figure class="aligncenter"><img data-attachment-id="95" data-permalink="https://zhaoshuai.me/07759fd3e6b0631d7d6a5a1796255d88/" data-orig-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2018/09/07759FD3E6B0631D7D6A5A1796255D88.jpg" data-orig-size="1677,173" data-comments-opened="1" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;0&quot;}" data-image-title="07759FD3E6B0631D7D6A5A1796255D88" data-image-description="" data-medium-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2018/09/07759FD3E6B0631D7D6A5A1796255D88.jpg" data-large-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2018/09/07759FD3E6B0631D7D6A5A1796255D88.jpg" src="https://qiniu.zhaoshuai.me/wp-content/uploads/2018/09/07759FD3E6B0631D7D6A5A1796255D88.jpg" alt="" class="wp-image-95"/></figure></div>



<h3>2.2 域名信息 -&gt; 开启免费SSL证书</h3>



<div class="wp-block-image"><figure class="aligncenter"><img data-attachment-id="97" data-permalink="https://zhaoshuai.me/543308beb410117c164af2eec5a1a952/" data-orig-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2018/09/543308BEB410117C164AF2EEC5A1A952.jpg" data-orig-size="835,433" data-comments-opened="1" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;0&quot;}" data-image-title="543308BEB410117C164AF2EEC5A1A952" data-image-description="" data-medium-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2018/09/543308BEB410117C164AF2EEC5A1A952.jpg" data-large-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2018/09/543308BEB410117C164AF2EEC5A1A952.jpg" src="https://qiniu.zhaoshuai.me/wp-content/uploads/2018/09/543308BEB410117C164AF2EEC5A1A952.jpg" alt="" class="wp-image-97"/></figure></div>



<h3>2.3&nbsp;单域名免费证书</h3>



<h4>（1）可以填入自己要申请的域名前缀（示例：www.zhaoshuai.me），提交即可。</h4>



<div class="wp-block-image"><figure class="aligncenter"><img data-attachment-id="101" data-permalink="https://zhaoshuai.me/e83294de495c7b2149d2ead896eaae41/" data-orig-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2018/09/E83294DE495C7B2149D2EAD896EAAE41.jpg" data-orig-size="783,350" data-comments-opened="1" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;0&quot;}" data-image-title="E83294DE495C7B2149D2EAD896EAAE41" data-image-description="" data-medium-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2018/09/E83294DE495C7B2149D2EAD896EAAE41.jpg" data-large-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2018/09/E83294DE495C7B2149D2EAD896EAAE41.jpg" src="https://qiniu.zhaoshuai.me/wp-content/uploads/2018/09/E83294DE495C7B2149D2EAD896EAAE41.jpg" alt="" class="wp-image-101"/></figure></div>



<h4>（2）返回上级列表，我们就能看到已经申请的证书，需要一个审核时间，一般很快的。</h4>



<div class="wp-block-image"><figure class="aligncenter"><img data-attachment-id="103" data-permalink="https://zhaoshuai.me/f4f39e56dc71ccd29901ec0e6b42ae00/" data-orig-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2018/09/F4F39E56DC71CCD29901EC0E6B42AE00.jpg" data-orig-size="945,242" data-comments-opened="1" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;0&quot;}" data-image-title="F4F39E56DC71CCD29901EC0E6B42AE00" data-image-description="" data-medium-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2018/09/F4F39E56DC71CCD29901EC0E6B42AE00.jpg" data-large-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2018/09/F4F39E56DC71CCD29901EC0E6B42AE00.jpg" src="https://qiniu.zhaoshuai.me/wp-content/uploads/2018/09/F4F39E56DC71CCD29901EC0E6B42AE00.jpg" alt="" class="wp-image-103"/></figure></div>



<h3>3、Nginx 添加配置</h3>



<h3>3.1 我的订单 -&gt; 下载</h3>



<div class="wp-block-image"><figure class="aligncenter"><img data-attachment-id="106" data-permalink="https://zhaoshuai.me/b12da81fdb824db4a31acecb83639502/" data-orig-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2018/09/B12DA81FDB824DB4A31ACECB83639502.jpg" data-orig-size="1312,397" data-comments-opened="1" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;0&quot;}" data-image-title="B12DA81FDB824DB4A31ACECB83639502" data-image-description="" data-medium-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2018/09/B12DA81FDB824DB4A31ACECB83639502.jpg" data-large-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2018/09/B12DA81FDB824DB4A31ACECB83639502.jpg" src="https://qiniu.zhaoshuai.me/wp-content/uploads/2018/09/B12DA81FDB824DB4A31ACECB83639502.jpg" alt="" class="wp-image-106"/></figure></div>



<h3>3.2 依据教程进行配置即可。</h3>



<h4>下述简单概述本博客的配置样例，以Nginx为例：</h4>



<p>概要说明：</p>



<ul><li>listen 监听端口</li><li>server_name 监听域名</li><li>access_log 、error_log 日志目录</li><li>root 项目的目录路径</li><li>fastcgi_pass 监听了php-fpm的9000端口</li></ul>



<p>示例：nginx配置，<strong><em>/etc/nginx/conf.d/zhaoshuai.me.conf</em></strong> :</p>


<!-- Crayon Syntax Highlighter v_2.7.2_beta -->

		<div id="crayon-5cde3abdf0362010623330" class="crayon-syntax crayon-theme-solarized-light crayon-font-monaco crayon-os-mac print-yes notranslate" data-settings=" minimize scroll-mouseover" style=" margin-top: 12px; margin-bottom: 12px; font-size: 12px !important; line-height: 15px !important;">
		
			<div class="crayon-toolbar" data-settings=" mouseover overlay hide delay" style="font-size: 12px !important;height: 18px !important; line-height: 18px !important;"><span class="crayon-title"></span>
			<div class="crayon-tools" style="font-size: 12px !important;height: 18px !important; line-height: 18px !important;"><div class="crayon-button crayon-nums-button" title="Toggle Line Numbers"><div class="crayon-button-icon"></div></div><div class="crayon-button crayon-plain-button" title="Toggle Plain Code"><div class="crayon-button-icon"></div></div><div class="crayon-button crayon-wrap-button" title="Toggle Line Wrap"><div class="crayon-button-icon"></div></div><div class="crayon-button crayon-expand-button" title="Expand Code"><div class="crayon-button-icon"></div></div><div class="crayon-button crayon-copy-button" title="Copy"><div class="crayon-button-icon"></div></div><div class="crayon-button crayon-popup-button" title="Open Code In New Window"><div class="crayon-button-icon"></div></div><span class="crayon-language">Default</span></div></div>
			<div class="crayon-info" style="min-height: 16.8px !important; line-height: 16.8px !important;"></div>
			<div class="crayon-plain-wrap"><textarea wrap="soft" class="crayon-plain print-no" data-settings="dblclick" readonly style="-moz-tab-size:4; -o-tab-size:4; -webkit-tab-size:4; tab-size:4; font-size: 12px !important; line-height: 15px !important;">
server {
    listen 80;
    server_name zhaoshuai.me;
    access_log /data0/www/logs/zhaoshuai.me.access_log;
    error_log /data0/www/logs/zhaoshuai.me.error_log;
    root /data0/www/htdocs/wordpress;

    location / {
        root /data0/www/htdocs/wordpress;
        index  index.php index.html index.htm;
        if (!-e $request_filename){
            rewrite ^/(.*) /index.php last;
        }
    }

    location ~ \.php$ {
        set $real_script_name $fastcgi_script_name;
        fastcgi_pass   127.0.0.1:9000;
        fastcgi_index  index.php;
        fastcgi_param  SCRIPT_FILENAME  $document_root$real_script_name;
        include        fastcgi_params;
    }
}
server {
    listen 443;
    server_name zhaoshuai.me;
    ssl on;
    root /data0/www/htdocs/wordpress;
    index index.html index.htm index.php;
    ssl_certificate   cert/1539297736883.pem;
    ssl_certificate_key  cert/1539297736883.key;
    ssl_session_timeout 5m;
    ssl_ciphers 
    ECDHE-RSA-AES128-GCM-SHA256:ECDHE:ECDH:AES:HIGH:!NULL:!aNULL:!MD5:!ADH:!RC4;
    ssl_protocols TLSv1 TLSv1.1 TLSv1.2;
    ssl_prefer_server_ciphers on;

    location / {
        root /data0/www/htdocs/wordpress;
        index  index.php index.html index.htm;
        if (!-e $request_filename){
            rewrite ^/(.*) /index.php last;
        }
    }

    location ~ \.php$ {
        set $real_script_name $fastcgi_script_name;
        fastcgi_pass   127.0.0.1:9000;
        fastcgi_index  index.php;
        fastcgi_param  SCRIPT_FILENAME  $document_root$real_script_name;
        include        fastcgi_params;
    }
}</textarea></div>
			<div class="crayon-main" style="">
				<table class="crayon-table">
					<tr class="crayon-row">
				<td class="crayon-nums " data-settings="show">
					<div class="crayon-nums-content" style="font-size: 12px !important; line-height: 15px !important;"><div class="crayon-num" data-line="crayon-5cde3abdf0362010623330-1">1</div><div class="crayon-num crayon-striped-num" data-line="crayon-5cde3abdf0362010623330-2">2</div><div class="crayon-num" data-line="crayon-5cde3abdf0362010623330-3">3</div><div class="crayon-num crayon-striped-num" data-line="crayon-5cde3abdf0362010623330-4">4</div><div class="crayon-num" data-line="crayon-5cde3abdf0362010623330-5">5</div><div class="crayon-num crayon-striped-num" data-line="crayon-5cde3abdf0362010623330-6">6</div><div class="crayon-num" data-line="crayon-5cde3abdf0362010623330-7">7</div><div class="crayon-num crayon-striped-num" data-line="crayon-5cde3abdf0362010623330-8">8</div><div class="crayon-num" data-line="crayon-5cde3abdf0362010623330-9">9</div><div class="crayon-num crayon-striped-num" data-line="crayon-5cde3abdf0362010623330-10">10</div><div class="crayon-num" data-line="crayon-5cde3abdf0362010623330-11">11</div><div class="crayon-num crayon-striped-num" data-line="crayon-5cde3abdf0362010623330-12">12</div><div class="crayon-num" data-line="crayon-5cde3abdf0362010623330-13">13</div><div class="crayon-num crayon-striped-num" data-line="crayon-5cde3abdf0362010623330-14">14</div><div class="crayon-num" data-line="crayon-5cde3abdf0362010623330-15">15</div><div class="crayon-num crayon-striped-num" data-line="crayon-5cde3abdf0362010623330-16">16</div><div class="crayon-num" data-line="crayon-5cde3abdf0362010623330-17">17</div><div class="crayon-num crayon-striped-num" data-line="crayon-5cde3abdf0362010623330-18">18</div><div class="crayon-num" data-line="crayon-5cde3abdf0362010623330-19">19</div><div class="crayon-num crayon-striped-num" data-line="crayon-5cde3abdf0362010623330-20">20</div><div class="crayon-num" data-line="crayon-5cde3abdf0362010623330-21">21</div><div class="crayon-num crayon-striped-num" data-line="crayon-5cde3abdf0362010623330-22">22</div><div class="crayon-num" data-line="crayon-5cde3abdf0362010623330-23">23</div><div class="crayon-num crayon-striped-num" data-line="crayon-5cde3abdf0362010623330-24">24</div><div class="crayon-num" data-line="crayon-5cde3abdf0362010623330-25">25</div><div class="crayon-num crayon-striped-num" data-line="crayon-5cde3abdf0362010623330-26">26</div><div class="crayon-num" data-line="crayon-5cde3abdf0362010623330-27">27</div><div class="crayon-num crayon-striped-num" data-line="crayon-5cde3abdf0362010623330-28">28</div><div class="crayon-num" data-line="crayon-5cde3abdf0362010623330-29">29</div><div class="crayon-num crayon-striped-num" data-line="crayon-5cde3abdf0362010623330-30">30</div><div class="crayon-num" data-line="crayon-5cde3abdf0362010623330-31">31</div><div class="crayon-num crayon-striped-num" data-line="crayon-5cde3abdf0362010623330-32">32</div><div class="crayon-num" data-line="crayon-5cde3abdf0362010623330-33">33</div><div class="crayon-num crayon-striped-num" data-line="crayon-5cde3abdf0362010623330-34">34</div><div class="crayon-num" data-line="crayon-5cde3abdf0362010623330-35">35</div><div class="crayon-num crayon-striped-num" data-line="crayon-5cde3abdf0362010623330-36">36</div><div class="crayon-num" data-line="crayon-5cde3abdf0362010623330-37">37</div><div class="crayon-num crayon-striped-num" data-line="crayon-5cde3abdf0362010623330-38">38</div><div class="crayon-num" data-line="crayon-5cde3abdf0362010623330-39">39</div><div class="crayon-num crayon-striped-num" data-line="crayon-5cde3abdf0362010623330-40">40</div><div class="crayon-num" data-line="crayon-5cde3abdf0362010623330-41">41</div><div class="crayon-num crayon-striped-num" data-line="crayon-5cde3abdf0362010623330-42">42</div><div class="crayon-num" data-line="crayon-5cde3abdf0362010623330-43">43</div><div class="crayon-num crayon-striped-num" data-line="crayon-5cde3abdf0362010623330-44">44</div><div class="crayon-num" data-line="crayon-5cde3abdf0362010623330-45">45</div><div class="crayon-num crayon-striped-num" data-line="crayon-5cde3abdf0362010623330-46">46</div><div class="crayon-num" data-line="crayon-5cde3abdf0362010623330-47">47</div><div class="crayon-num crayon-striped-num" data-line="crayon-5cde3abdf0362010623330-48">48</div><div class="crayon-num" data-line="crayon-5cde3abdf0362010623330-49">49</div><div class="crayon-num crayon-striped-num" data-line="crayon-5cde3abdf0362010623330-50">50</div><div class="crayon-num" data-line="crayon-5cde3abdf0362010623330-51">51</div><div class="crayon-num crayon-striped-num" data-line="crayon-5cde3abdf0362010623330-52">52</div><div class="crayon-num" data-line="crayon-5cde3abdf0362010623330-53">53</div></div>
				</td>
						<td class="crayon-code"><div class="crayon-pre" style="font-size: 12px !important; line-height: 15px !important; -moz-tab-size:4; -o-tab-size:4; -webkit-tab-size:4; tab-size:4;"><div class="crayon-line" id="crayon-5cde3abdf0362010623330-1"><span class="crayon-e">server</span><span class="crayon-h"> </span><span class="crayon-sy">{</span></div><div class="crayon-line crayon-striped-line" id="crayon-5cde3abdf0362010623330-2"><span class="crayon-h">&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="crayon-i">listen</span><span class="crayon-h"> </span><span class="crayon-cn">80</span><span class="crayon-sy">;</span></div><div class="crayon-line" id="crayon-5cde3abdf0362010623330-3"><span class="crayon-h">&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="crayon-e">server_name </span><span class="crayon-v">zhaoshuai</span><span class="crayon-sy">.</span><span class="crayon-v">me</span><span class="crayon-sy">;</span></div><div class="crayon-line crayon-striped-line" id="crayon-5cde3abdf0362010623330-4"><span class="crayon-h">&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="crayon-v">access_log</span><span class="crayon-h"> </span><span class="crayon-o">/</span><span class="crayon-v">data0</span><span class="crayon-o">/</span><span class="crayon-v">www</span><span class="crayon-o">/</span><span class="crayon-v">logs</span><span class="crayon-o">/</span><span class="crayon-v">zhaoshuai</span><span class="crayon-sy">.</span><span class="crayon-v">me</span><span class="crayon-sy">.</span><span class="crayon-v">access_log</span><span class="crayon-sy">;</span></div><div class="crayon-line" id="crayon-5cde3abdf0362010623330-5"><span class="crayon-h">&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="crayon-v">error_log</span><span class="crayon-h"> </span><span class="crayon-o">/</span><span class="crayon-v">data0</span><span class="crayon-o">/</span><span class="crayon-v">www</span><span class="crayon-o">/</span><span class="crayon-v">logs</span><span class="crayon-o">/</span><span class="crayon-v">zhaoshuai</span><span class="crayon-sy">.</span><span class="crayon-v">me</span><span class="crayon-sy">.</span><span class="crayon-v">error_log</span><span class="crayon-sy">;</span></div><div class="crayon-line crayon-striped-line" id="crayon-5cde3abdf0362010623330-6"><span class="crayon-h">&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="crayon-v">root</span><span class="crayon-h"> </span><span class="crayon-o">/</span><span class="crayon-v">data0</span><span class="crayon-o">/</span><span class="crayon-v">www</span><span class="crayon-o">/</span><span class="crayon-v">htdocs</span><span class="crayon-o">/</span><span class="crayon-v">wordpress</span><span class="crayon-sy">;</span></div><div class="crayon-line" id="crayon-5cde3abdf0362010623330-7">&nbsp;</div><div class="crayon-line crayon-striped-line" id="crayon-5cde3abdf0362010623330-8"><span class="crayon-h">&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="crayon-e">location</span><span class="crayon-h"> </span><span class="crayon-o">/</span><span class="crayon-h"> </span><span class="crayon-sy">{</span></div><div class="crayon-line" id="crayon-5cde3abdf0362010623330-9"><span class="crayon-h">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="crayon-v">root</span><span class="crayon-h"> </span><span class="crayon-o">/</span><span class="crayon-v">data0</span><span class="crayon-o">/</span><span class="crayon-v">www</span><span class="crayon-o">/</span><span class="crayon-v">htdocs</span><span class="crayon-o">/</span><span class="crayon-v">wordpress</span><span class="crayon-sy">;</span></div><div class="crayon-line crayon-striped-line" id="crayon-5cde3abdf0362010623330-10"><span class="crayon-h">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="crayon-e">index&nbsp;&nbsp;</span><span class="crayon-v">index</span><span class="crayon-sy">.</span><span class="crayon-e">php </span><span class="crayon-v">index</span><span class="crayon-sy">.</span><span class="crayon-e">html </span><span class="crayon-v">index</span><span class="crayon-sy">.</span><span class="crayon-v">htm</span><span class="crayon-sy">;</span></div><div class="crayon-line" id="crayon-5cde3abdf0362010623330-11"><span class="crayon-h">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="crayon-st">if</span><span class="crayon-h"> </span><span class="crayon-sy">(</span><span class="crayon-o">!</span><span class="crayon-o">-</span><span class="crayon-i">e</span><span class="crayon-h"> </span><span class="crayon-sy">$</span><span class="crayon-v">request_filename</span><span class="crayon-sy">)</span><span class="crayon-sy">{</span></div><div class="crayon-line crayon-striped-line" id="crayon-5cde3abdf0362010623330-12"><span class="crayon-h">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="crayon-v">rewrite</span><span class="crayon-h"> </span><span class="crayon-o">^</span><span class="crayon-o">/</span><span class="crayon-sy">(</span><span class="crayon-sy">.</span><span class="crayon-o">*</span><span class="crayon-sy">)</span><span class="crayon-h"> </span><span class="crayon-o">/</span><span class="crayon-v">index</span><span class="crayon-sy">.</span><span class="crayon-e">php </span><span class="crayon-v">last</span><span class="crayon-sy">;</span></div><div class="crayon-line" id="crayon-5cde3abdf0362010623330-13"><span class="crayon-h">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="crayon-sy">}</span></div><div class="crayon-line crayon-striped-line" id="crayon-5cde3abdf0362010623330-14"><span class="crayon-h">&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="crayon-sy">}</span></div><div class="crayon-line" id="crayon-5cde3abdf0362010623330-15">&nbsp;</div><div class="crayon-line crayon-striped-line" id="crayon-5cde3abdf0362010623330-16"><span class="crayon-h">&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="crayon-v">location</span><span class="crayon-h"> </span><span class="crayon-o">~</span><span class="crayon-h"> </span><span class="crayon-sy">\</span><span class="crayon-sy">.</span><span class="crayon-v">php</span><span class="crayon-sy">$</span><span class="crayon-h"> </span><span class="crayon-sy">{</span></div><div class="crayon-line" id="crayon-5cde3abdf0362010623330-17"><span class="crayon-h">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="crayon-i">set</span><span class="crayon-h"> </span><span class="crayon-sy">$</span><span class="crayon-v">real_script</span><span class="crayon-sy">_</span>name<span class="crayon-h"> </span><span class="crayon-sy">$</span><span class="crayon-v">fastcgi_script_name</span><span class="crayon-sy">;</span></div><div class="crayon-line crayon-striped-line" id="crayon-5cde3abdf0362010623330-18"><span class="crayon-h">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="crayon-v">fastcgi</span><span class="crayon-sy">_</span>pass<span class="crayon-h">&nbsp;&nbsp; </span><span class="crayon-cn">127.0.0.1</span><span class="crayon-o">:</span><span class="crayon-cn">9000</span><span class="crayon-sy">;</span></div><div class="crayon-line" id="crayon-5cde3abdf0362010623330-19"><span class="crayon-h">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="crayon-e">fastcgi_index&nbsp;&nbsp;</span><span class="crayon-v">index</span><span class="crayon-sy">.</span><span class="crayon-v">php</span><span class="crayon-sy">;</span></div><div class="crayon-line crayon-striped-line" id="crayon-5cde3abdf0362010623330-20"><span class="crayon-h">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="crayon-e">fastcgi_param&nbsp;&nbsp;</span><span class="crayon-v">SCRIPT</span><span class="crayon-sy">_</span>FILENAME<span class="crayon-h">&nbsp;&nbsp;</span><span class="crayon-sy">$</span><span class="crayon-v">document_root</span><span class="crayon-sy">$</span><span class="crayon-v">real_script_name</span><span class="crayon-sy">;</span></div><div class="crayon-line" id="crayon-5cde3abdf0362010623330-21"><span class="crayon-h">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="crayon-e">include&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="crayon-v">fastcgi_params</span><span class="crayon-sy">;</span></div><div class="crayon-line crayon-striped-line" id="crayon-5cde3abdf0362010623330-22"><span class="crayon-h">&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="crayon-sy">}</span></div><div class="crayon-line" id="crayon-5cde3abdf0362010623330-23"><span class="crayon-sy">}</span></div><div class="crayon-line crayon-striped-line" id="crayon-5cde3abdf0362010623330-24"><span class="crayon-e">server</span><span class="crayon-h"> </span><span class="crayon-sy">{</span></div><div class="crayon-line" id="crayon-5cde3abdf0362010623330-25"><span class="crayon-h">&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="crayon-i">listen</span><span class="crayon-h"> </span><span class="crayon-cn">443</span><span class="crayon-sy">;</span></div><div class="crayon-line crayon-striped-line" id="crayon-5cde3abdf0362010623330-26"><span class="crayon-h">&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="crayon-e">server_name </span><span class="crayon-v">zhaoshuai</span><span class="crayon-sy">.</span><span class="crayon-v">me</span><span class="crayon-sy">;</span></div><div class="crayon-line" id="crayon-5cde3abdf0362010623330-27"><span class="crayon-h">&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="crayon-e">ssl </span><span class="crayon-v">on</span><span class="crayon-sy">;</span></div><div class="crayon-line crayon-striped-line" id="crayon-5cde3abdf0362010623330-28"><span class="crayon-h">&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="crayon-v">root</span><span class="crayon-h"> </span><span class="crayon-o">/</span><span class="crayon-v">data0</span><span class="crayon-o">/</span><span class="crayon-v">www</span><span class="crayon-o">/</span><span class="crayon-v">htdocs</span><span class="crayon-o">/</span><span class="crayon-v">wordpress</span><span class="crayon-sy">;</span></div><div class="crayon-line" id="crayon-5cde3abdf0362010623330-29"><span class="crayon-h">&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="crayon-e">index </span><span class="crayon-v">index</span><span class="crayon-sy">.</span><span class="crayon-e">html </span><span class="crayon-v">index</span><span class="crayon-sy">.</span><span class="crayon-e">htm </span><span class="crayon-v">index</span><span class="crayon-sy">.</span><span class="crayon-v">php</span><span class="crayon-sy">;</span></div><div class="crayon-line crayon-striped-line" id="crayon-5cde3abdf0362010623330-30"><span class="crayon-h">&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="crayon-e">ssl_certificate&nbsp;&nbsp; </span><span class="crayon-v">cert</span><span class="crayon-o">/</span><span class="crayon-cn">1539297736883.pem</span><span class="crayon-sy">;</span></div><div class="crayon-line" id="crayon-5cde3abdf0362010623330-31"><span class="crayon-h">&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="crayon-e">ssl_certificate_key&nbsp;&nbsp;</span><span class="crayon-v">cert</span><span class="crayon-o">/</span><span class="crayon-cn">1539297736883.key</span><span class="crayon-sy">;</span></div><div class="crayon-line crayon-striped-line" id="crayon-5cde3abdf0362010623330-32"><span class="crayon-h">&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="crayon-v">ssl_session</span><span class="crayon-sy">_</span>timeout<span class="crayon-h"> </span><span class="crayon-cn">5m</span><span class="crayon-sy">;</span></div><div class="crayon-line" id="crayon-5cde3abdf0362010623330-33"><span class="crayon-h">&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="crayon-e">ssl_ciphers </span></div><div class="crayon-line crayon-striped-line" id="crayon-5cde3abdf0362010623330-34"><span class="crayon-e">&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="crayon-v">ECDHE</span><span class="crayon-o">-</span><span class="crayon-v">RSA</span><span class="crayon-o">-</span><span class="crayon-v">AES128</span><span class="crayon-o">-</span><span class="crayon-v">GCM</span><span class="crayon-o">-</span><span class="crayon-v">SHA256</span><span class="crayon-o">:</span><span class="crayon-v">ECDHE</span><span class="crayon-o">:</span><span class="crayon-v">ECDH</span><span class="crayon-o">:</span><span class="crayon-v">AES</span><span class="crayon-o">:</span><span class="crayon-v">HIGH</span><span class="crayon-o">:</span><span class="crayon-o">!</span><span class="crayon-t">NULL</span><span class="crayon-o">:</span><span class="crayon-o">!</span><span class="crayon-v">aNULL</span><span class="crayon-o">:</span><span class="crayon-o">!</span><span class="crayon-v">MD5</span><span class="crayon-o">:</span><span class="crayon-o">!</span><span class="crayon-v">ADH</span><span class="crayon-o">:</span><span class="crayon-o">!</span><span class="crayon-v">RC4</span><span class="crayon-sy">;</span></div><div class="crayon-line" id="crayon-5cde3abdf0362010623330-35"><span class="crayon-h">&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="crayon-e">ssl_protocols </span><span class="crayon-e">TLSv1 </span><span class="crayon-v">TLSv1</span><span class="crayon-sy">.</span><span class="crayon-cn">1</span><span class="crayon-h"> </span><span class="crayon-v">TLSv1</span><span class="crayon-sy">.</span><span class="crayon-cn">2</span><span class="crayon-sy">;</span></div><div class="crayon-line crayon-striped-line" id="crayon-5cde3abdf0362010623330-36"><span class="crayon-h">&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="crayon-e">ssl_prefer_server_ciphers </span><span class="crayon-v">on</span><span class="crayon-sy">;</span></div><div class="crayon-line" id="crayon-5cde3abdf0362010623330-37">&nbsp;</div><div class="crayon-line crayon-striped-line" id="crayon-5cde3abdf0362010623330-38"><span class="crayon-h">&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="crayon-e">location</span><span class="crayon-h"> </span><span class="crayon-o">/</span><span class="crayon-h"> </span><span class="crayon-sy">{</span></div><div class="crayon-line" id="crayon-5cde3abdf0362010623330-39"><span class="crayon-h">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="crayon-v">root</span><span class="crayon-h"> </span><span class="crayon-o">/</span><span class="crayon-v">data0</span><span class="crayon-o">/</span><span class="crayon-v">www</span><span class="crayon-o">/</span><span class="crayon-v">htdocs</span><span class="crayon-o">/</span><span class="crayon-v">wordpress</span><span class="crayon-sy">;</span></div><div class="crayon-line crayon-striped-line" id="crayon-5cde3abdf0362010623330-40"><span class="crayon-h">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="crayon-e">index&nbsp;&nbsp;</span><span class="crayon-v">index</span><span class="crayon-sy">.</span><span class="crayon-e">php </span><span class="crayon-v">index</span><span class="crayon-sy">.</span><span class="crayon-e">html </span><span class="crayon-v">index</span><span class="crayon-sy">.</span><span class="crayon-v">htm</span><span class="crayon-sy">;</span></div><div class="crayon-line" id="crayon-5cde3abdf0362010623330-41"><span class="crayon-h">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="crayon-st">if</span><span class="crayon-h"> </span><span class="crayon-sy">(</span><span class="crayon-o">!</span><span class="crayon-o">-</span><span class="crayon-i">e</span><span class="crayon-h"> </span><span class="crayon-sy">$</span><span class="crayon-v">request_filename</span><span class="crayon-sy">)</span><span class="crayon-sy">{</span></div><div class="crayon-line crayon-striped-line" id="crayon-5cde3abdf0362010623330-42"><span class="crayon-h">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="crayon-v">rewrite</span><span class="crayon-h"> </span><span class="crayon-o">^</span><span class="crayon-o">/</span><span class="crayon-sy">(</span><span class="crayon-sy">.</span><span class="crayon-o">*</span><span class="crayon-sy">)</span><span class="crayon-h"> </span><span class="crayon-o">/</span><span class="crayon-v">index</span><span class="crayon-sy">.</span><span class="crayon-e">php </span><span class="crayon-v">last</span><span class="crayon-sy">;</span></div><div class="crayon-line" id="crayon-5cde3abdf0362010623330-43"><span class="crayon-h">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="crayon-sy">}</span></div><div class="crayon-line crayon-striped-line" id="crayon-5cde3abdf0362010623330-44"><span class="crayon-h">&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="crayon-sy">}</span></div><div class="crayon-line" id="crayon-5cde3abdf0362010623330-45">&nbsp;</div><div class="crayon-line crayon-striped-line" id="crayon-5cde3abdf0362010623330-46"><span class="crayon-h">&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="crayon-v">location</span><span class="crayon-h"> </span><span class="crayon-o">~</span><span class="crayon-h"> </span><span class="crayon-sy">\</span><span class="crayon-sy">.</span><span class="crayon-v">php</span><span class="crayon-sy">$</span><span class="crayon-h"> </span><span class="crayon-sy">{</span></div><div class="crayon-line" id="crayon-5cde3abdf0362010623330-47"><span class="crayon-h">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="crayon-i">set</span><span class="crayon-h"> </span><span class="crayon-sy">$</span><span class="crayon-v">real_script</span><span class="crayon-sy">_</span>name<span class="crayon-h"> </span><span class="crayon-sy">$</span><span class="crayon-v">fastcgi_script_name</span><span class="crayon-sy">;</span></div><div class="crayon-line crayon-striped-line" id="crayon-5cde3abdf0362010623330-48"><span class="crayon-h">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="crayon-v">fastcgi</span><span class="crayon-sy">_</span>pass<span class="crayon-h">&nbsp;&nbsp; </span><span class="crayon-cn">127.0.0.1</span><span class="crayon-o">:</span><span class="crayon-cn">9000</span><span class="crayon-sy">;</span></div><div class="crayon-line" id="crayon-5cde3abdf0362010623330-49"><span class="crayon-h">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="crayon-e">fastcgi_index&nbsp;&nbsp;</span><span class="crayon-v">index</span><span class="crayon-sy">.</span><span class="crayon-v">php</span><span class="crayon-sy">;</span></div><div class="crayon-line crayon-striped-line" id="crayon-5cde3abdf0362010623330-50"><span class="crayon-h">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="crayon-e">fastcgi_param&nbsp;&nbsp;</span><span class="crayon-v">SCRIPT</span><span class="crayon-sy">_</span>FILENAME<span class="crayon-h">&nbsp;&nbsp;</span><span class="crayon-sy">$</span><span class="crayon-v">document_root</span><span class="crayon-sy">$</span><span class="crayon-v">real_script_name</span><span class="crayon-sy">;</span></div><div class="crayon-line" id="crayon-5cde3abdf0362010623330-51"><span class="crayon-h">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="crayon-e">include&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="crayon-v">fastcgi_params</span><span class="crayon-sy">;</span></div><div class="crayon-line crayon-striped-line" id="crayon-5cde3abdf0362010623330-52"><span class="crayon-h">&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="crayon-sy">}</span></div><div class="crayon-line" id="crayon-5cde3abdf0362010623330-53"><span class="crayon-sy">}</span></div></div></td>
					</tr>
				</table>
			</div>
		</div>
<!-- [Format Time: 0.0015 seconds] -->
</div>
                                    </div>

        <div class="mod-post__meta">
            <div>
                <div>— 于
                    <time datetime="2018年09月29日 11:52:31">2018年09月29日</time>
                    ，<span>共写了462个字</span>；
                </div>
                <div>— 文内使用到的标签：<span class="mod_tag"><a href="https://zhaoshuai.me/tag/nginx/" rel="tag">Nginx</a></span></div>
            </div>
        </div>
        <ul class="sxwk">
            <li></li>
            <li></li>
        </ul>
    </article>
    <section class="mod-comment">
        
<!-- You can start editing here. -->


			<!-- If comments are open, but there are no comments. -->

	
	<div id="respond" class="comment-respond">
		<h3 id="reply-title" class="comment-reply-title">发表评论 <small><a rel="nofollow" id="cancel-comment-reply-link" href="/2018-09-28/#respond" style="display:none;">取消回复</a></small></h3>			<form action="https://zhaoshuai.me/wp-comments-post.php" method="post" id="commentform" class="comment-form">
				<p class="logged-in-as"><a href="https://zhaoshuai.me/wp-admin/profile.php" aria-label="已登入为zhaoshuai。编辑您的个人资料。">已登入为zhaoshuai</a>。<a href="https://zhaoshuai.me/wp-login.php?action=logout&amp;redirect_to=https%3A%2F%2Fzhaoshuai.me%2F2018-09-28%2F&amp;_wpnonce=71dfd39768">登出？</a></p><p class="comment-form-comment"><label for="comment">评论</label> <textarea id="comment" name="comment" cols="45" rows="8" maxlength="65525" required="required"></textarea></p><p class="form-submit"><input name="submit" type="submit" id="submit" class="submit" value="发表评论" /> <input type='hidden' name='comment_post_ID' value='90' id='comment_post_ID' />
<input type='hidden' name='comment_parent' id='comment_parent' value='0' />
</p><p style="display: none;"><input type="hidden" id="akismet_comment_nonce" name="akismet_comment_nonce" value="5aeabf85b0" /></p><input type="hidden" id="_wp_unfiltered_html_comment_disabled" name="_wp_unfiltered_html_comment_disabled" value="c3dfebcfe7" /><script>(function(){if(window===window.parent){document.getElementById('_wp_unfiltered_html_comment_disabled').name='_wp_unfiltered_html_comment';}})();</script>
<p style="display: none;"><input type="hidden" id="ak_js" name="ak_js" value="187"/></p>			</form>
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
var jetpackCarouselStrings = {"widths":[370,700,1000,1200,1400,2000],"is_logged_in":"1","lang":"zh","ajaxurl":"https:\/\/zhaoshuai.me\/wp-admin\/admin-ajax.php","nonce":"f4bffc0c02","display_exif":"1","display_geo":"1","single_image_gallery":"1","single_image_gallery_media_file":"","background_color":"black","comment":"\u6761\u8bc4\u8bba","post_comment":"\u53d1\u8868\u8bc4\u8bba","write_comment":"\u64b0\u5199\u8bc4\u8bba...","loading_comments":"\u6b63\u5728\u52a0\u8f7d\u8bc4\u8bba...","download_original":"\u67e5\u770b\u5168\u5c3a\u5bf8 <span class=\"photo-size\">{0}<span class=\"photo-size-times\">\u00d7<\/span>{1}<\/span>","no_comment_text":"\u8bf7\u786e\u4fdd\u4e0e\u60a8\u7684\u8bc4\u8bba\u4e00\u8d77\u63d0\u4ea4\u90e8\u5206\u6587\u672c\u3002","no_comment_email":"\u8bf7\u63d0\u4f9b\u7528\u4e8e\u53d1\u8868\u8bc4\u8bba\u7684\u7535\u5b50\u90ae\u4ef6\u5730\u5740\u3002","no_comment_author":"\u8bf7\u63d0\u4f9b\u60a8\u7528\u4e8e\u53d1\u8868\u8bc4\u8bba\u7684\u59d3\u540d\u3002","comment_post_error":"\u62b1\u6b49\uff0c\u53d1\u8868\u60a8\u7684\u8bc4\u8bba\u65f6\u51fa\u9519\u3002\u8bf7\u7a0d\u540e\u91cd\u8bd5\u3002","comment_approved":"\u60a8\u7684\u8bc4\u8bba\u5df2\u83b7\u5f97\u6279\u51c6\u3002","comment_unapproved":"\u6b63\u5728\u5ba1\u6838\u60a8\u7684\u8bc4\u8bba\u3002","camera":"\u7167\u76f8\u673a","aperture":"\u5149\u5708","shutter_speed":"\u5feb\u95e8\u901f\u5ea6","focal_length":"\u7126\u8ddd","copyright":"\u7248\u6743","comment_registration":"0","require_name_email":"1","login_url":"https:\/\/zhaoshuai.me\/wp-login.php?redirect_to=https%3A%2F%2Fzhaoshuai.me%2F2018-09-28%2F","blog_id":"1","meta_data":["camera","aperture","shutter_speed","focal_length","copyright"],"local_comments_commenting_as":"<p id=\"jp-carousel-commenting-as\">\u4f5c\u4e3a zhaoshuai \u53d1\u8868\u8bc4\u8bba<\/p>"};
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
				<ul id='wp-admin-bar-root-default' class="ab-top-menu"><li id='wp-admin-bar-wp-logo' class="menupop"><a class='ab-item' aria-haspopup="true" href='https://zhaoshuai.me/wp-admin/about.php'><span class="ab-icon"></span><span class="screen-reader-text">关于WordPress</span></a><div class="ab-sub-wrapper"><ul id='wp-admin-bar-wp-logo-default' class="ab-submenu"><li id='wp-admin-bar-about'><a class='ab-item' href='https://zhaoshuai.me/wp-admin/about.php'>关于WordPress</a></li></ul><ul id='wp-admin-bar-wp-logo-external' class="ab-sub-secondary ab-submenu"><li id='wp-admin-bar-wporg'><a class='ab-item' href='https://cn.wordpress.org/'>WordPress.org</a></li><li id='wp-admin-bar-documentation'><a class='ab-item' href='https://codex.wordpress.org/'>文档</a></li><li id='wp-admin-bar-support-forums'><a class='ab-item' href='http://zh-cn.forums.wordpress.org/'>Support</a></li><li id='wp-admin-bar-feedback'><a class='ab-item' href='http://zh-cn.forums.wordpress.org/forum/suggestions'>反馈</a></li></ul></div></li><li id='wp-admin-bar-site-name' class="menupop"><a class='ab-item' aria-haspopup="true" href='https://zhaoshuai.me/wp-admin/'>碎念</a><div class="ab-sub-wrapper"><ul id='wp-admin-bar-site-name-default' class="ab-submenu"><li id='wp-admin-bar-dashboard'><a class='ab-item' href='https://zhaoshuai.me/wp-admin/'>仪表盘</a></li></ul><ul id='wp-admin-bar-appearance' class="ab-submenu"><li id='wp-admin-bar-themes'><a class='ab-item' href='https://zhaoshuai.me/wp-admin/themes.php'>主题</a></li><li id='wp-admin-bar-menus'><a class='ab-item' href='https://zhaoshuai.me/wp-admin/nav-menus.php'>菜单</a></li></ul></div></li><li id='wp-admin-bar-customize' class="hide-if-no-customize"><a class='ab-item' href='https://zhaoshuai.me/wp-admin/customize.php?url=https%3A%2F%2Fzhaoshuai.me%2F2018-09-28%2F'>自定义</a></li><li id='wp-admin-bar-comments'><a class='ab-item' href='https://zhaoshuai.me/wp-admin/edit-comments.php'><span class="ab-icon"></span><span class="ab-label awaiting-mod pending-count count-0" aria-hidden="true">0</span><span class="screen-reader-text comments-in-moderation-text">0 Comments in moderation</span></a></li><li id='wp-admin-bar-new-content' class="menupop"><a class='ab-item' aria-haspopup="true" href='https://zhaoshuai.me/wp-admin/post-new.php'><span class="ab-icon"></span><span class="ab-label">新建</span></a><div class="ab-sub-wrapper"><ul id='wp-admin-bar-new-content-default' class="ab-submenu"><li id='wp-admin-bar-new-post'><a class='ab-item' href='https://zhaoshuai.me/wp-admin/post-new.php'>文章</a></li><li id='wp-admin-bar-new-media'><a class='ab-item' href='https://zhaoshuai.me/wp-admin/media-new.php'>媒体</a></li><li id='wp-admin-bar-new-link'><a class='ab-item' href='https://zhaoshuai.me/wp-admin/link-add.php'>链接</a></li><li id='wp-admin-bar-new-page'><a class='ab-item' href='https://zhaoshuai.me/wp-admin/post-new.php?post_type=page'>页面</a></li><li id='wp-admin-bar-new-user'><a class='ab-item' href='https://zhaoshuai.me/wp-admin/user-new.php'>用户</a></li></ul></div></li><li id='wp-admin-bar-edit'><a class='ab-item' href='https://zhaoshuai.me/wp-admin/post.php?post=90&#038;action=edit'>编辑文章</a></li><li id='wp-admin-bar-delete-cache'><a class='ab-item' href='https://zhaoshuai.me/wp-admin/index.php?action=delcachepage&#038;path=%2F2018-09-28%2F&#038;_wpnonce=5d77f34996' title='删除当前页面的缓存'>删除缓存</a></li><li id='wp-admin-bar-stats'><a class='ab-item' href='https://zhaoshuai.me/wp-admin/admin.php?page=stats'><div><script type='text/javascript'>var src;if(typeof(window.devicePixelRatio)=='undefined'||window.devicePixelRatio<2){src='https://zhaoshuai.me/wp-admin/admin.php?page=stats&amp;noheader&amp;proxy&amp;chart=admin-bar-hours-scale';}else{src='https://zhaoshuai.me/wp-admin/admin.php?page=stats&amp;noheader&amp;proxy&amp;chart=admin-bar-hours-scale-2x';}document.write('<img src=\''+src+'\' alt=\'统计\' title=\'查看超过 48 小时。点击以查看更多站点统计信息。\' />');</script></div></a></li></ul><ul id='wp-admin-bar-top-secondary' class="ab-top-secondary ab-top-menu"><li id='wp-admin-bar-search' class="admin-bar-search"><div class="ab-item ab-empty-item" tabindex="-1"><form action="https://zhaoshuai.me/" method="get" id="adminbarsearch"><input class="adminbar-input" name="s" id="adminbar-search" type="text" value="" maxlength="150" /><label for="adminbar-search" class="screen-reader-text">搜索</label><input type="submit" class="adminbar-button" value="搜索"/></form></div></li><li id='wp-admin-bar-my-account' class="menupop with-avatar"><a class='ab-item' aria-haspopup="true" href='https://zhaoshuai.me/wp-admin/profile.php'>嗨，<span class="display-name">zhaoshuai</span><img alt='' src='https://secure.gravatar.com/avatar/256c88fc2de20125bfaf6a16c3c9f6f3?s=26&#038;d=mm&#038;r=g' srcset='https://secure.gravatar.com/avatar/256c88fc2de20125bfaf6a16c3c9f6f3?s=52&#038;d=mm&#038;r=g 2x' class='avatar avatar-26 photo' height='26' width='26' /></a><div class="ab-sub-wrapper"><ul id='wp-admin-bar-user-actions' class="ab-submenu"><li id='wp-admin-bar-user-info'><a class='ab-item' tabindex="-1" href='https://zhaoshuai.me/wp-admin/profile.php'><img alt='' src='https://secure.gravatar.com/avatar/256c88fc2de20125bfaf6a16c3c9f6f3?s=64&#038;d=mm&#038;r=g' srcset='https://secure.gravatar.com/avatar/256c88fc2de20125bfaf6a16c3c9f6f3?s=128&#038;d=mm&#038;r=g 2x' class='avatar avatar-64 photo' height='64' width='64' /><span class='display-name'>zhaoshuai</span></a></li><li id='wp-admin-bar-edit-profile'><a class='ab-item' href='https://zhaoshuai.me/wp-admin/profile.php'>编辑我的个人资料</a></li><li id='wp-admin-bar-logout'><a class='ab-item' href='https://zhaoshuai.me/wp-login.php?action=logout&#038;_wpnonce=71dfd39768'>登出</a></li></ul></div></li><li id='wp-admin-bar-notes' class="menupop"><div class="ab-item ab-empty-item"><span id="wpnt-notes-unread-count" class="wpnt-loading wpn-read">
					<span class="noticon noticon-notification"></span>
					</span></div><div id="wpnt-notes-panel2" style="display:none" lang="zh-cn" dir="ltr"><div class="wpnt-notes-panel-header"><span class="wpnt-notes-header">通知</span><span class="wpnt-notes-panel-link"></span></div></div></li></ul>			</div>
						<a class="screen-reader-shortcut" href="https://zhaoshuai.me/wp-login.php?action=logout&#038;_wpnonce=71dfd39768">登出</a>
					</div>

		</body></html>