<?php die(); ?><?xml version="1.0" encoding="UTF-8"?><rss version="2.0"
	xmlns:content="http://purl.org/rss/1.0/modules/content/"
	xmlns:wfw="http://wellformedweb.org/CommentAPI/"
	xmlns:dc="http://purl.org/dc/elements/1.1/"
	xmlns:atom="http://www.w3.org/2005/Atom"
	xmlns:sy="http://purl.org/rss/1.0/modules/syndication/"
	xmlns:slash="http://purl.org/rss/1.0/modules/slash/"
	
xmlns:georss="http://www.georss.org/georss" xmlns:geo="http://www.w3.org/2003/01/geo/wgs84_pos#"
>

<channel>
	<title>碎念</title>
	<atom:link href="https://zhaoshuai.me/feed/" rel="self" type="application/rss+xml" />
	<link>https://zhaoshuai.me</link>
	<description>赵帅的笔记</description>
	<lastBuildDate>Tue, 09 Oct 2018 06:43:49 +0000</lastBuildDate>
	<language>zh-CN</language>
	<sy:updatePeriod>
	hourly	</sy:updatePeriod>
	<sy:updateFrequency>
	1	</sy:updateFrequency>
	<generator>https://wordpress.org/?v=5.2</generator>
	<item>
		<title>【WordPress】Crayon Syntax Highlighter 与主题不兼容</title>
		<link>https://zhaoshuai.me/2019-05-16/</link>
				<comments>https://zhaoshuai.me/2019-05-16/#respond</comments>
				<pubDate>Thu, 16 May 2019 14:00:16 +0000</pubDate>
		<dc:creator><![CDATA[zhaoshuai]]></dc:creator>
				<category><![CDATA[Wordpress]]></category>

		<guid isPermaLink="false">https://zhaoshuai.me/?p=433</guid>
				<description><![CDATA[【Wordpress】Crayon Syntax Highlighter 与主题不兼容]]></description>
								<content:encoded><![CDATA[
<h2>写在前面：</h2>



<p>很多博主在写一些技术博客的时候，会在博文中添加一些代码，但是在展示的时候代码高亮的话会让博客整体布局更优雅。找到网上的不少插件，最终还是选择了 <a href="https://wordpress.org/plugins/crayon-syntax-highlighter/"><strong>Crayon Syntax Highlighter</strong></a> 这个插件。江湖称 WordPress 最强大的代码高亮插件！</p>



<div class="wp-block-image"><figure class="aligncenter"><img data-attachment-id="437" data-permalink="https://zhaoshuai.me/2019-05-16/79a4e33b1720bef946c03002d319180b/" data-orig-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2019/05/79A4E33B1720BEF946C03002D319180B.jpg" data-orig-size="951,309" data-comments-opened="1" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;0&quot;}" data-image-title="79A4E33B1720BEF946C03002D319180B" data-image-description="" data-medium-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2019/05/79A4E33B1720BEF946C03002D319180B.jpg" data-large-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2019/05/79A4E33B1720BEF946C03002D319180B.jpg" src="https://qiniu.zhaoshuai.me/wp-content/uploads/2019/05/79A4E33B1720BEF946C03002D319180B.jpg" alt="" class="wp-image-437"/></figure></div>



<h2>推荐理由：</h2>



<ul><li>集成主题编辑器</li><li>切换行号</li><li>复制 / 粘贴代码</li><li>在新窗口中打开代码</li><li>自动获取博客文章 / 评论中的&lt;pre>…&lt;/pre> 进行高亮</li><li>远程请求缓存</li><li>可以在一个代码框内混合语言高亮显示</li><li>支持迷你标签，如 <pre class="crayon-plain-tag"></pre></li><li>可以在行内调用代码高亮</li><li>支持 &lt;pre> 标记</li><li>手机 / 触摸屏设备检测</li><li>鼠标事件交互（例如在工具栏上双击可以全选代码）</li><li>Retina!</li><li>文件扩展名检测</li><li>设置实时预览</li><li>支持修改尺寸，边距，对齐方式，字体大小，行高等等</li></ul>



<h2>安装插件：</h2>



<p>打开后台，左侧<strong>菜单栏</strong>，找到<strong>插件</strong>，点击<strong>安装插件</strong>， 搜索<strong> Crayon Syntax Highlighter</strong>，安装即可~</p>



<div class="wp-block-image"><figure class="aligncenter is-resized"><img data-attachment-id="439" data-permalink="https://zhaoshuai.me/2019-05-16/image/" data-orig-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2019/05/image.png" data-orig-size="1740,666" data-comments-opened="1" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;0&quot;}" data-image-title="image" data-image-description="" data-medium-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2019/05/image.png" data-large-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2019/05/image.png" src="https://qiniu.zhaoshuai.me/wp-content/uploads/2019/05/image.png" alt="" class="wp-image-439" width="772" height="295"/></figure></div>



<p> 安装完成并<strong>启用</strong>，然后点击后台菜单栏的<strong>设置</strong>，找到 <strong>Crayon</strong> 进行自定义编辑。</p>



<h2>遇到问题</h2>



<h4>问题1、显示出来的代码块无法点击，右上角的<strong>复制/粘贴</strong>、<strong>展开</strong>等功能button点击不起作用：</h4>



<div class="wp-block-image"><figure class="aligncenter is-resized"><img data-attachment-id="443" data-permalink="https://zhaoshuai.me/2019-05-16/f7356803d96df9efc2f6c2cea50987b6/" data-orig-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2019/05/F7356803D96DF9EFC2F6C2CEA50987B6.jpg" data-orig-size="1010,365" data-comments-opened="1" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;0&quot;}" data-image-title="F7356803D96DF9EFC2F6C2CEA50987B6" data-image-description="" data-medium-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2019/05/F7356803D96DF9EFC2F6C2CEA50987B6.jpg" data-large-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2019/05/F7356803D96DF9EFC2F6C2CEA50987B6.jpg" src="https://qiniu.zhaoshuai.me/wp-content/uploads/2019/05/F7356803D96DF9EFC2F6C2CEA50987B6.jpg" alt="" class="wp-image-443" width="850" height="307"/></figure></div>



<p>网上找了很多资料，都没有找到原因。后来看到了一篇 <a href="https://axiu.me/learning_notes/crayon-syntax-highlighter-to-theme/">整合代码高亮插件Crayon Syntax Highlighter到主题模板</a> 的博客，找到了一些灵感（感谢这位博主分享）：</p>



<div class="wp-block-image"><figure class="aligncenter is-resized"><img data-attachment-id="444" data-permalink="https://zhaoshuai.me/2019-05-16/image-1/" data-orig-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2019/05/image-1.png" data-orig-size="800,482" data-comments-opened="1" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;0&quot;}" data-image-title="image-1" data-image-description="" data-medium-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2019/05/image-1.png" data-large-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2019/05/image-1.png" src="https://qiniu.zhaoshuai.me/wp-content/uploads/2019/05/image-1.png" alt="" class="wp-image-444" width="614" height="370"/></figure></div>



<p>这个说明某些主题的代码中有可能就做了上面的这种不自动加载 <strong>jQuery </strong>改动。 这样就导致了某些依赖js文件的插件不起作用。看到这里，我们就不防去验证一下。打开我们一篇有代码的博客，右键<strong>检查</strong>元素，在 <strong>element</strong> 中搜索 <strong>crayon.min </strong>，果不其然网页元素中只加载了css文件 <strong>crayon.min.css</strong> :</p>



<div class="wp-block-image"><figure class="aligncenter is-resized"><img data-attachment-id="446" data-permalink="https://zhaoshuai.me/2019-05-16/image-2/" data-orig-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2019/05/image-2.png" data-orig-size="542,955" data-comments-opened="1" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;0&quot;}" data-image-title="image-2" data-image-description="" data-medium-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2019/05/image-2.png" data-large-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2019/05/image-2.png" src="https://qiniu.zhaoshuai.me/wp-content/uploads/2019/05/image-2.png" alt="" class="wp-image-446" width="350" height="617"/></figure></div>



<p>那么接下来，就基本上可以确定是主题本身的问题了，然后我们可以全局找一下主题的哪个文件中有用到下面这行代码：</p>



<pre class="crayon-plain-tag">wp_deregister_script('jquery');  // JS $handle</pre>



<p>果然，我们看到在<strong> cu/info.php </strong>这个文件中，有这样一行，找到他，先注释调：</p>



<div class="wp-block-image"><figure class="aligncenter is-resized"><img data-attachment-id="450" data-permalink="https://zhaoshuai.me/2019-05-16/image-3/" data-orig-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2019/05/image-3.png" data-orig-size="656,639" data-comments-opened="1" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;0&quot;}" data-image-title="image-3" data-image-description="" data-medium-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2019/05/image-3.png" data-large-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2019/05/image-3.png" src="https://qiniu.zhaoshuai.me/wp-content/uploads/2019/05/image-3.png" alt="" class="wp-image-450" width="449" height="437"/></figure></div>



<p>刷新页面（如果有缓存记得清理一下缓存，包括cdn、浏览器缓存），终于我们解放了插件代码的 复制 / 粘贴 等功能了！！</p>



<p>这时候再看一下页面元素，发现<strong> crayon.min.js </strong>, 已经正常被加载了~ 感觉心情无比舒畅！！</p>



<div class="wp-block-image"><figure class="aligncenter is-resized"><img data-attachment-id="456" data-permalink="https://zhaoshuai.me/2019-05-16/image-7/" data-orig-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2019/05/image-7.png" data-orig-size="509,932" data-comments-opened="1" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;0&quot;}" data-image-title="image-7" data-image-description="" data-medium-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2019/05/image-7.png" data-large-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2019/05/image-7.png" src="https://qiniu.zhaoshuai.me/wp-content/uploads/2019/05/image-7.png" alt="" class="wp-image-456" width="327" height="599"/></figure></div>



<h4>问题2、HTML实体字符转义问题：</h4>



<p>在Wordpress中使用 Crayon Syntax Highlighter 时，代码段内的HTML实体不会被解释，导致'&lt;'显示为'&amp;lt','>'显示为'&amp;gt'。</p>



<p>解决方案：打开Crayon Syntax Highlighter的插件设置，找到 <strong>Code</strong> 部分，勾选上 <strong>Decode HTML entities in code</strong> , 即可设置将代码段内的HTML实体显示出来。</p>



<div class="wp-block-image"><figure class="aligncenter"><img data-attachment-id="459" data-permalink="https://zhaoshuai.me/2019-05-16/image-8/" data-orig-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2019/05/image-8.png" data-orig-size="624,416" data-comments-opened="1" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;0&quot;}" data-image-title="image-8" data-image-description="" data-medium-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2019/05/image-8.png" data-large-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2019/05/image-8.png" src="https://qiniu.zhaoshuai.me/wp-content/uploads/2019/05/image-8.png" alt="" class="wp-image-459"/></figure></div>
]]></content:encoded>
							<wfw:commentRss>https://zhaoshuai.me/2019-05-16/feed/</wfw:commentRss>
		<slash:comments>0</slash:comments>
							</item>
		<item>
		<title>【Mac】Mojave · Squeal Pro 闪退问题解决</title>
		<link>https://zhaoshuai.me/2019-05-15/</link>
				<comments>https://zhaoshuai.me/2019-05-15/#respond</comments>
				<pubDate>Wed, 15 May 2019 08:25:46 +0000</pubDate>
		<dc:creator><![CDATA[zhaoshuai]]></dc:creator>
				<category><![CDATA[mac]]></category>
		<category><![CDATA[Mac]]></category>

		<guid isPermaLink="false">https://zhaoshuai.me/?p=355</guid>
				<description><![CDATA[【Mac】Mojave · Squeal Pro 闪退问题解决]]></description>
								<content:encoded><![CDATA[<p><img data-attachment-id="369" data-permalink="https://zhaoshuai.me/2019-05-15/9da861cc-98e2-4795-89ce-c607f7be5f44/" data-orig-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2019/05/9DA861CC-98E2-4795-89CE-C607F7BE5F44.jpg" data-orig-size="997,344" data-comments-opened="1" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;0&quot;}" data-image-title="9DA861CC-98E2-4795-89CE-C607F7BE5F44" data-image-description="" data-medium-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2019/05/9DA861CC-98E2-4795-89CE-C607F7BE5F44.jpg" data-large-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2019/05/9DA861CC-98E2-4795-89CE-C607F7BE5F44.jpg" class="aligncenter size-full wp-image-369" src="https://qiniu.zhaoshuai.me/wp-content/uploads/2019/05/9DA861CC-98E2-4795-89CE-C607F7BE5F44.jpg" alt="" width="997" height="344"></p>


<h2>写在前面</h2>



<p>最近升级 MacOS Mojave 之后，在使用 Squeal Pro 的时候，关闭某个Tab的时候会出现闪退，而且经常可复现。</p>



<p>上官网看下，发现我们用的版本时1.1.2，版本已经很老了。<a href="https://github.com/sequelpro/sequelpro.git">GitHub</a>上面有更新的版本，不过需要自己构建。<br></p>



<div class="wp-block-image"><figure class="aligncenter is-resized"><img data-attachment-id="358" data-permalink="https://zhaoshuai.me/2019-05-15/ab94005075f1e4b1b9248ed8655e3b56/" data-orig-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2019/05/AB94005075F1E4B1B9248ED8655E3B56.jpg" data-orig-size="1172,696" data-comments-opened="1" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;0&quot;}" data-image-title="AB94005075F1E4B1B9248ED8655E3B56" data-image-description="" data-medium-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2019/05/AB94005075F1E4B1B9248ED8655E3B56.jpg" data-large-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2019/05/AB94005075F1E4B1B9248ED8655E3B56.jpg" src="https://qiniu.zhaoshuai.me/wp-content/uploads/2019/05/AB94005075F1E4B1B9248ED8655E3B56.jpg" alt="" class="wp-image-358" width="674" height="400"/></figure></div>



<h2>构建Sequal Pro</h2>



<p>在Mac上构建自己的APP需要先下载Xcode工具，命令行工具不行，必须下载那个6个多G的客户端，在AppStore中直接下载就可以了。我尝试了很多方法不想下载庞大的Xcode但是都失败了。如果你有更好的方法请留言告诉我。</p>



<h4>完成安装Xcode之后，即可以开始以下构建工作</h4>



<h4>第1步：克隆源代码</h4>



<pre class="crayon-plain-tag">$ git clone https://github.com/sequelpro/sequelpro.git --depth=1
$ cd sequelpro</pre>



<h4>第2步：将构建配置更改为Release</h4>



<pre class="crayon-plain-tag">sed -i '' -e 's/Debug/Release/g' Makefile</pre>



<h4>第3步：从ARCHS环境变量中删除i386（32位）</h4>



<pre class="crayon-plain-tag">find . -type f -name "*.pbxproj" -exec sed -i '' -e 's/ARCHS_STANDARD_32_64_BIT/ARCHS_STANDARD_64_BIT/g' {} +</pre>



<h4>第4步：构建</h4>



<pre class="crayon-plain-tag">make</pre>



<h4>第五步：复制到Application文件夹</h4>



<pre class="crayon-plain-tag">cp -R build/Release/Sequel\ Pro.app /Applications/Sequel\ Pro.app</pre>



<p>第五步构建完可能不在这个文件夹，请自行搜索Sequel Pro.app 文件，然后复制或者剪切到/Applications就可以了。</p>



<h4>常见错误 </h4>



<h5>xcode-select: error: tool 'xcodebuild' requires Xcode, but active developer directory '/Library/Developer/CommandLineTools' is a command line tools instance</h5>



<p>解决方法：先检查是否已下载Xcode，如果已下载请执行命令：</p>



<pre class="crayon-plain-tag">//切换xcode的编译文件目录
sudo xcode-select -switch /Applications/Xcode.app/Contents/Developer</pre>



<h2>下载Test版本</h2>



<p>直接下载测试版本，安装完成之后拖入到 <strong>应用程序</strong> 即可： <a href="https://sequelpro.com/test-builds"><strong>https://sequelpro.com/test-builds</strong></a></p>



<div class="wp-block-image"><figure class="aligncenter is-resized"><img data-attachment-id="387" data-permalink="https://zhaoshuai.me/2019-05-15/417b444b-d8c3-4843-90ad-0560371dc327/" data-orig-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2019/05/417B444B-D8C3-4843-90AD-0560371DC327.jpg" data-orig-size="1540,872" data-comments-opened="1" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;0&quot;}" data-image-title="417B444B-D8C3-4843-90AD-0560371DC327" data-image-description="" data-medium-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2019/05/417B444B-D8C3-4843-90AD-0560371DC327.jpg" data-large-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2019/05/417B444B-D8C3-4843-90AD-0560371DC327.jpg" src="https://qiniu.zhaoshuai.me/wp-content/uploads/2019/05/417B444B-D8C3-4843-90AD-0560371DC327.jpg" alt="" class="wp-image-387" width="645" height="365"/></figure></div>
]]></content:encoded>
							<wfw:commentRss>https://zhaoshuai.me/2019-05-15/feed/</wfw:commentRss>
		<slash:comments>0</slash:comments>
							</item>
		<item>
		<title>【随笔】视频资源分享</title>
		<link>https://zhaoshuai.me/2019-05-09/</link>
				<comments>https://zhaoshuai.me/2019-05-09/#respond</comments>
				<pubDate>Thu, 09 May 2019 06:36:32 +0000</pubDate>
		<dc:creator><![CDATA[zhaoshuai]]></dc:creator>
				<category><![CDATA[个人随笔]]></category>
		<category><![CDATA[随笔]]></category>

		<guid isPermaLink="false">https://zhaoshuai.me/?p=320</guid>
				<description><![CDATA[LOL 雅加达亚运会表演赛决赛 中国 VS 韩国【高清】 链接: https://pan.baidu.com/s/1-tPQmTRvShn4ZbnChW90bA 密码: ehcc 钢铁侠3 电影链接:https://www.993dy.com/vod-detail-id-19375.html (部分链接不可用) 字幕链接: https://pan.baid ...]]></description>
								<content:encoded><![CDATA[
<h2>LOL 雅加达亚运会表演赛决赛 中国 VS 韩国【高清】</h2>


<p><img data-attachment-id="322" data-permalink="https://zhaoshuai.me/2019-05-09/attachment/995831002563231/" data-orig-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2019/05/995831002563231.jpg" data-orig-size="1268,495" data-comments-opened="1" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;0&quot;}" data-image-title="995831002563231" data-image-description="" data-medium-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2019/05/995831002563231.jpg" data-large-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2019/05/995831002563231.jpg" class="aligncenter size-full wp-image-322" src="https://qiniu.zhaoshuai.me/wp-content/uploads/2019/05/995831002563231.jpg" alt="" width="1268" height="495"></p>


<p style="text-align:center">链接: <a href="https://pan.baidu.com/s/1-tPQmTRvShn4ZbnChW90bA">https://pan.baidu.com/s/1-tPQmTRvShn4ZbnChW90bA</a> 密码: <strong><em>ehcc</em></strong></p>



<h2>钢铁侠3</h2>


<p><img data-attachment-id="331" data-permalink="https://zhaoshuai.me/2019-05-09/p2094561649_meitu_1/" data-orig-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2019/05/p2094561649_meitu_1.jpg" data-orig-size="1600,661" data-comments-opened="1" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;1&quot;}" data-image-title="p2094561649_meitu_1" data-image-description="" data-medium-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2019/05/p2094561649_meitu_1.jpg" data-large-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2019/05/p2094561649_meitu_1.jpg" class="aligncenter size-full wp-image-331" src="https://qiniu.zhaoshuai.me/wp-content/uploads/2019/05/p2094561649_meitu_1.jpg" alt="" width="1600" height="661"></p>


<p style="text-align:center">电影链接:<a href="https://www.993dy.com/vod-detail-id-19375.html">https://www.993dy.com/vod-detail-id-19375.html</a> (部分链接不可用)</p>



<p style="text-align:center">字幕链接: <a href="https://pan.baidu.com/s/1SUm0Z9ovPKCapsJGx0tmPA">https://pan.baidu.com/s/1SUm0Z9ovPKCapsJGx0tmPA</a>  密码: <strong><em>8yfh</em></strong></p>



<p></p>



<h2>蜘蛛侠:平行宇宙 . 1080P . 国英双语 . BD中英字幕</h2>


<p><img data-attachment-id="328" data-permalink="https://zhaoshuai.me/2019-05-09/d0dc468b0630a989315f9e01effa1121/" data-orig-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2019/05/D0DC468B0630A989315F9E01EFFA1121.jpg" data-orig-size="823,420" data-comments-opened="1" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;0&quot;}" data-image-title="D0DC468B0630A989315F9E01EFFA1121" data-image-description="" data-medium-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2019/05/D0DC468B0630A989315F9E01EFFA1121.jpg" data-large-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2019/05/D0DC468B0630A989315F9E01EFFA1121.jpg" class="aligncenter size-full wp-image-328" src="https://qiniu.zhaoshuai.me/wp-content/uploads/2019/05/D0DC468B0630A989315F9E01EFFA1121.jpg" alt="" width="823" height="420"></p>


<p style="text-align:center">链接: <a href="https://pan.baidu.com/s/1nJqBr-2xkdArXxFrxWKCew">https://pan.baidu.com/s/1nJqBr-2xkdArXxFrxWKCew</a> 密码: <strong><em>g7n1</em></strong> </p>



<h2>驯龙高手1 - 3 . 国英双语 . 超清</h2>


<p><img class="wp-image-336 alignnone aligncenter" src="https://qiniu.zhaoshuai.me/wp-content/uploads/2019/05/p490385643_meitu_1.jpg" alt="" width="315" height="438" data-wp-editing="1" /></p>
<h4 style="text-align: center;"><strong><a href="thunder://QUFtYWduZXQlM0ElM0Z4dCUzRHVybiUzQWJ0aWglM0EzQzdFMDFCNjdFOTI3ODRGQzBENTEyMTAyQTAxMEVGMkMzM0EwQ0ZCJTI2ZG4lM0QlRTklQTklQUYlRTklQkUlOTklRTklQUIlOTglRTYlODklOEIuJUU5JUE5JUFGJUU5JUJFJTk5JUU5JUFCJTk4JUU2JTg5JThCLjEwODBQLiVFOCU4QiVCMSVFOCVBRiVBRCVFNCVCOCVBRCVFNSVBRCU5NyUyNlpa">驯龙高手1 迅雷链接</a></strong></h4>
<p style="text-align: center;"><img data-attachment-id="337" data-permalink="https://zhaoshuai.me/2019-05-09/p2206333677_meitu_2/" data-orig-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2019/05/p2206333677_meitu_2.jpg" data-orig-size="1079,1600" data-comments-opened="1" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;0&quot;}" data-image-title="p2206333677_meitu_2" data-image-description="" data-medium-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2019/05/p2206333677_meitu_2.jpg" data-large-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2019/05/p2206333677_meitu_2.jpg" class="alignnone wp-image-337" src="https://qiniu.zhaoshuai.me/wp-content/uploads/2019/05/p2206333677_meitu_2.jpg" alt="" width="320" height="475" /></p>
<h4 style="text-align: center;"><strong><a href="https://pan.baidu.com/s/1tF9wWKBuluf2hM2aOneylA">驯龙高手2 百度网盘</a></strong></h4>
<p><img data-attachment-id="350" data-permalink="https://zhaoshuai.me/2019-05-09/p2549127581_meitu_2/" data-orig-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2019/05/p2549127581_meitu_2.jpg" data-orig-size="948,1500" data-comments-opened="1" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;0&quot;}" data-image-title="p2549127581_meitu_2" data-image-description="" data-medium-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2019/05/p2549127581_meitu_2.jpg" data-large-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2019/05/p2549127581_meitu_2.jpg" class="aligncenter wp-image-350" src="https://qiniu.zhaoshuai.me/wp-content/uploads/2019/05/p2549127581_meitu_2.jpg" alt="" width="320" height="506" /></p>
<h4 style="text-align: center;"><a href="https://pan.baidu.com/s/1QdfUcwTUoFrIl8dufsadtw"><strong>驯龙高手3 · 隐秘世界 百度网盘 种子</strong></a></h4>


<h2>调音师 · HD1080P · 高清 · 中英双字</h2>



<figure class="wp-block-image"><img data-attachment-id="353" data-permalink="https://zhaoshuai.me/2019-05-09/p2551252994_meitu_3/" data-orig-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2019/05/p2551252994_meitu_3.jpg" data-orig-size="1600,629" data-comments-opened="1" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;1&quot;}" data-image-title="p2551252994_meitu_3" data-image-description="" data-medium-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2019/05/p2551252994_meitu_3.jpg" data-large-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2019/05/p2551252994_meitu_3.jpg" src="https://qiniu.zhaoshuai.me/wp-content/uploads/2019/05/p2551252994_meitu_3.jpg" alt="" class="wp-image-353"/></figure>



<p style="text-align:center">链接: <a href="https://pan.baidu.com/s/1h0vlw-COyvSkskC9TKb6kQ">https://pan.baidu.com/s/1h0vlw-COyvSkskC9TKb6kQ</a>  密码: <strong><em>n6he</em></strong></p>
]]></content:encoded>
							<wfw:commentRss>https://zhaoshuai.me/2019-05-09/feed/</wfw:commentRss>
		<slash:comments>0</slash:comments>
							</item>
		<item>
		<title>【Mac】优雅的使用mail软件</title>
		<link>https://zhaoshuai.me/2019-05-05/</link>
				<comments>https://zhaoshuai.me/2019-05-05/#respond</comments>
				<pubDate>Sun, 05 May 2019 09:43:31 +0000</pubDate>
		<dc:creator><![CDATA[zhaoshuai]]></dc:creator>
				<category><![CDATA[mac]]></category>
		<category><![CDATA[Mac]]></category>

		<guid isPermaLink="false">https://zhaoshuai.me/?p=249</guid>
				<description><![CDATA[写在前面： 在这里给大家推荐一下，Mac自带mail的软件如何优雅的支持各类邮件账号（QQ、Exchange、ICloud、Gmail 等） 添加账号： 首先要在 系统设置 的 互联网账号 里面添加上我们自己的各类邮箱，注意在添加QQ邮箱的时候，密码是 “授 ...]]></description>
								<content:encoded><![CDATA[
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



<pre class="crayon-plain-tag">cd ~ &amp;&amp; sh Desktop/Proxy.sh</pre>



<p></p>
]]></content:encoded>
							<wfw:commentRss>https://zhaoshuai.me/2019-05-05/feed/</wfw:commentRss>
		<slash:comments>0</slash:comments>
							</item>
		<item>
		<title>【WordPress】七牛云如何刷新缓存CSS/JS文件</title>
		<link>https://zhaoshuai.me/2018-10-09/</link>
				<comments>https://zhaoshuai.me/2018-10-09/#respond</comments>
				<pubDate>Tue, 09 Oct 2018 03:34:35 +0000</pubDate>
		<dc:creator><![CDATA[zhaoshuai]]></dc:creator>
				<category><![CDATA[Wordpress]]></category>

		<guid isPermaLink="false">https://zhaoshuai.me/?p=209</guid>
				<description><![CDATA[1、遇到问题 在写博客的过程中，可能会根据自己的喜好对于网站进行一些样式的自定义修改，会对CSS/JS文件进行修改。 但是如果使用了七牛云缓存和CDN镜像存储，会发现无论怎么修改CSS，浏览器中的样式都不会修改。 2、定位问题 我们打开浏览器的控制 ...]]></description>
								<content:encoded><![CDATA[<h2><span style="font-family: terminal, monaco, monospace;">1、遇到问题</span></h2>
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
]]></content:encoded>
							<wfw:commentRss>https://zhaoshuai.me/2018-10-09/feed/</wfw:commentRss>
		<slash:comments>0</slash:comments>
							</item>
		<item>
		<title>【WordPress】获取作者信息的函数</title>
		<link>https://zhaoshuai.me/2018-10-08/</link>
				<comments>https://zhaoshuai.me/2018-10-08/#comments</comments>
				<pubDate>Mon, 08 Oct 2018 13:08:58 +0000</pubDate>
		<dc:creator><![CDATA[zhaoshuai]]></dc:creator>
				<category><![CDATA[Wordpress]]></category>

		<guid isPermaLink="false">https://zhaoshuai.me/?p=197</guid>
				<description><![CDATA[Wordpress 中文文档 1、文章中-&#62;作者 显示文章的作者 : &#60;?php the_author(); ?&#62;&#160;&#160;显示该文章的作者名称，该函数必须放在Loop中(文章的主循环中)。如果用在php中而不让作者名称显示出来可以使用get_the_author()，使用方法和下 ...]]></description>
								<content:encoded><![CDATA[
<h2><a rel="noreferrer noopener" href="http://codex.wordpress.org.cn/%E9%A6%96%E9%A1%B5" target="_blank">WordPress 中文文档</a> </h2>



<h2>1、文章中-&gt;作者</h2>



<ul><li>显示文章的作者 : <code>&lt;?php the_author(); ?&gt;&nbsp;</code>&nbsp;显示该文章的作者名称，该函数必须放在Loop中(文章的主循环中)。如果用在php中而不让作者名称显示出来可以使用get_the_author()，使用方法和下面是一样的。</li><li>显示文章作者的描述（作者个人资料中的描述）: <code>&lt;?php the_author_description(); ?&gt;&nbsp;</code></li><li>显示文章作者的登录名 : <code>&lt;?php the_author_login(); ?&gt;&nbsp;</code></li><li>显示文章作者的firstname（名）: <code>&lt;?php the_author_firstname(); ?&gt;&nbsp;</code></li><li>显示文章作者的lastname（姓）: <code>&lt;?php the_author_lastname(); ?&gt;&nbsp;</code></li><li>显示文章作者的昵称 : <code>&lt;?php the_author_nickname(); ?&gt;&nbsp;</code></li><li>显示文章作者的ID号 : <code>&lt;?php the_author_ID(); ?&gt;&nbsp;</code></li><li>显示文章作者的电子邮箱 : <code>&lt;?php the_author_email(); ?&gt;</code>&nbsp;</li><li>显示文章作者的网站地址 :&nbsp;<code>&lt;?php the_author_url(); ?&gt;&nbsp;</code> </li><li>(添加于2.1版本) 显示一个以文章作者名为链接名，链接地址为文章作者的网址的链接 :&nbsp;<code>&lt;?php the_author_link (); ?&gt;</code></li><li>显示文章作者已发表文章的篇数 : <code>&lt;?php the_author_posts(); ?&gt;</code>&nbsp;</li><li>显示一个链接到文章作者已发表文章列表的链接 : <code>&lt;?php the_author_posts_link(); ?&gt;</code>&nbsp;</li></ul>



<h2>2、独立获取-&gt; 作者</h2>



<h4>文档描述：</h4>



<pre class="crayon-plain-tag">&lt;?php get_the_author_meta( $field, $author_id);?></pre>



<h4>示例：</h4>



<pre class="crayon-plain-tag">global $post;
$author_id=$post->post_author;
//获取用户昵称
$nickname = get_the_author_meta( 'nickname',  $author_id);</pre>



<h4>参数枚举：</h4>



<ul><li>user_login (用户登录名)</li><li>user_pass (用户登录密码)</li><li>user_nicename(用户昵称)</li><li>user_email(用户邮箱地址)</li><li>user_url(用户网站地址)</li><li>user_registered(用户注册时间)</li><li>user_status(用户状态)</li><li>display_name(作者显示的名称)</li><li>nickname(作者昵称)</li><li>first_name(作者名字)</li><li>last_name(作者姓氏)</li><li>description(作者描述)</li><li>user_level(用户等级)</li><li>user_firstname(用户名字)</li><li>user_lastname(用户姓氏)</li><li>user_description(用户描述)</li></ul>
]]></content:encoded>
							<wfw:commentRss>https://zhaoshuai.me/2018-10-08/feed/</wfw:commentRss>
		<slash:comments>4</slash:comments>
							</item>
		<item>
		<title>【WordPress】博客+七牛云+CDN+SSL证书</title>
		<link>https://zhaoshuai.me/2018-10-01/</link>
				<comments>https://zhaoshuai.me/2018-10-01/#comments</comments>
				<pubDate>Sat, 06 Oct 2018 08:00:08 +0000</pubDate>
		<dc:creator><![CDATA[zhaoshuai]]></dc:creator>
				<category><![CDATA[Wordpress]]></category>

		<guid isPermaLink="false">https://zhaoshuai.me/?p=127</guid>
				<description><![CDATA[1、写在前面 随着博客的积累，上传的图片和其他文件会占用服务器很多空间。博客的响应速度可能就会变慢，而我们可以将这些静态资源放在“CDN云存储服务器”上面，CDN 加速优点是成本低，速度快，适合访问量比较大的网站。这样既可以实现网站的瘦身，也能够 ...]]></description>
								<content:encoded><![CDATA[<h2><span style="font-family: terminal, monaco, monospace;">1、写在前面</span></h2>
<p><span style="font-family: terminal, monaco, monospace; font-size: 10pt;">随着博客的积累，上传的图片和其他文件会占用服务器很多空间。博客的响应速度可能就会变慢，而我们可以将这些静态资源放在“CDN云存储服务器”上面，CDN 加速优点是成本低，速度快，适合访问量比较大的网站。这样既可以实现网站的瘦身，也能够提高响应的速度。</span></p>
<h2><span style="font-family: terminal, monaco, monospace;">2、七牛云</span></h2>
<p><span style="font-family: terminal, monaco, monospace; font-size: 10pt;"><img data-attachment-id="231" data-permalink="https://zhaoshuai.me/wordpress-qiniu-cdn/" data-orig-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2018/10/wordpress-qiniu-cdn.gif" data-orig-size="716,297" data-comments-opened="1" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;0&quot;}" data-image-title="wordpress-qiniu-cdn" data-image-description="" data-medium-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2018/10/wordpress-qiniu-cdn.gif" data-large-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2018/10/wordpress-qiniu-cdn.gif" class="aligncenter size-full wp-image-231" src="https://qiniu.zhaoshuai.me/wp-content/uploads/2018/10/wordpress-qiniu-cdn.gif" alt="" width="716" height="297" /></span></p>
<p><span style="font-family: terminal, monaco, monospace; font-size: 10pt;">推荐七牛云的原因：</span></p>
<ul>
<li><span style="font-family: terminal, monaco, monospace; font-size: 10pt;">安全性能：为用户数据创建至少三个副本并跨IDC存储到多个数据中心，同时支持防盗链设置；</span></li>
<li><span style="font-family: terminal, monaco, monospace; font-size: 10pt;">数据存储：支持图片、音频、视频、JS、CSS等多种静态文件的存储，并支持断点续传；</span></li>
<li><span style="font-family: terminal, monaco, monospace; font-size: 10pt;">云端加速：七牛的500多个加速节点遍布全球，会自动选择离用户最近的节点，并实现数据上传下载的双向加速；</span></li>
<li><span style="font-family: terminal, monaco, monospace; font-size: 10pt;">数据处理：支持云端在线压缩、裁剪等图片处理及音频、视频格式转换，还可在线进行视频截图；</span></li>
<li><span style="font-family: terminal, monaco, monospace; font-size: 10pt;">开发合作：为开发者提供了多种接入工具及丰富的开发包，提供API、SDK教程示例；</span></li>
<li><span style="font-family: terminal, monaco, monospace; font-size: 10pt;">域名绑定：已备案的网站可申请绑定自己的域名，未备案的用户可使用七牛的二级域名绑定；</span></li>
<li><span style="font-family: terminal, monaco, monospace; font-size: 10pt;">镜像功能：通过一定的设置，可自动将网站原有图片等静态文件镜像到七牛，而无需重新上传到七牛服务器；</span></li>
<li><span style="font-family: terminal, monaco, monospace; font-size: 10pt;">外链分享：由于七牛云支持外链，可以将文件上传至七牛，直接利用文件链接地址作外链调用。</span></li>
</ul>
<h4><span style="font-family: terminal, monaco, monospace;">2.1、创建对象存储空间</span></h4>
<p><span style="font-family: terminal, monaco, monospace; font-size: 10pt;">登录-&gt;管理控制台-&gt;对象存储-&gt;新建存储空间-&gt;填写信息</span></p>
<p><span style="font-family: terminal, monaco, monospace; font-size: 10pt;"><img data-attachment-id="137" data-permalink="https://zhaoshuai.me/3e52067187c0ffbc965f12c07d8e336f/" data-orig-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2018/10/3E52067187C0FFBC965F12C07D8E336F.jpg" data-orig-size="1010,585" data-comments-opened="1" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;0&quot;}" data-image-title="3E52067187C0FFBC965F12C07D8E336F" data-image-description="" data-medium-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2018/10/3E52067187C0FFBC965F12C07D8E336F.jpg" data-large-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2018/10/3E52067187C0FFBC965F12C07D8E336F.jpg" class="aligncenter size-full wp-image-137" src="https://qiniu.zhaoshuai.me/wp-content/uploads/2018/10/3E52067187C0FFBC965F12C07D8E336F.jpg" alt="" width="1010" height="585" /></span></p>
<p><span style="font-family: terminal, monaco, monospace; font-size: 10pt;">示例，空间的名称为blog：</span></p>
<p><span style="font-family: terminal, monaco, monospace; font-size: 10pt;"><img data-attachment-id="138" data-permalink="https://zhaoshuai.me/d8edbd2ffe4b45c69c490a246bfeb6e7/" data-orig-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2018/10/D8EDBD2FFE4B45C69C490A246BFEB6E7.jpg" data-orig-size="1263,585" data-comments-opened="1" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;0&quot;}" data-image-title="D8EDBD2FFE4B45C69C490A246BFEB6E7" data-image-description="" data-medium-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2018/10/D8EDBD2FFE4B45C69C490A246BFEB6E7.jpg" data-large-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2018/10/D8EDBD2FFE4B45C69C490A246BFEB6E7.jpg" class="aligncenter size-full wp-image-138" src="https://qiniu.zhaoshuai.me/wp-content/uploads/2018/10/D8EDBD2FFE4B45C69C490A246BFEB6E7.jpg" alt="" width="1263" height="585" /></span></p>
<h4><span style="font-family: terminal, monaco, monospace;">2.2、绑定域名</span></h4>
<p><span style="font-family: terminal, monaco, monospace; font-size: 10pt;">接下来我们需要绑定一个CDN的域名，（1）在你创建存储空间的时候会自动分配一个不规则的域名，（2）如果自己的域名是已经备案过了，我们可以使用CNAME，创建自定义的CDN域名。</span></p>
<p><span style="font-family: terminal, monaco, monospace; font-size: 10pt;"><em><strong>示例：qiniu.zhaoshuai.me</strong></em></span></p>
<p><span style="font-family: terminal, monaco, monospace; font-size: 10pt;"><img data-attachment-id="140" data-permalink="https://zhaoshuai.me/f2aab5a109c8625123b3266897ed477c/" data-orig-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2018/10/F2AAB5A109C8625123B3266897ED477C.jpg" data-orig-size="1120,596" data-comments-opened="1" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;0&quot;}" data-image-title="F2AAB5A109C8625123B3266897ED477C" data-image-description="" data-medium-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2018/10/F2AAB5A109C8625123B3266897ED477C.jpg" data-large-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2018/10/F2AAB5A109C8625123B3266897ED477C.jpg" class="aligncenter size-full wp-image-140" src="https://qiniu.zhaoshuai.me/wp-content/uploads/2018/10/F2AAB5A109C8625123B3266897ED477C.jpg" alt="" width="1120" height="596" /></span></p>
<p><span style="font-family: terminal, monaco, monospace; font-size: 10pt;">在通信协议这里：</span></p>
<ul>
<li><span style="font-family: terminal, monaco, monospace; font-size: 10pt;">如果你的博客域名没有申请SSL证书，即不支持HTTPS协议，那就选HTTP就好。</span></li>
<li><span style="font-family: terminal, monaco, monospace; font-size: 10pt;">由于本站加了SSL证书（<a href="https://zhaoshuai.me/2018-09-28/" target="_blank" rel="noopener">【Nginx】域名添加 https 证书</a>），我们就要选择HTTPS。另外，在下图我们可以看到，需要们选择一个相对应的SSL证书，点击 <span style="color: #0000ff;"><em><a href="https://portal.qiniu.com/certificate/ssl" target="_blank" rel="noopener">SSL证书管理</a> </em></span> 申请（下面我们会进行介绍）：</span></li>
</ul>
<p><span style="font-family: terminal, monaco, monospace; font-size: 10pt;"><img data-attachment-id="145" data-permalink="https://zhaoshuai.me/0080690c037b47723555332ad592a643/" data-orig-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2018/10/0080690C037B47723555332AD592A643.jpg" data-orig-size="899,585" data-comments-opened="1" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;0&quot;}" data-image-title="0080690C037B47723555332AD592A643" data-image-description="" data-medium-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2018/10/0080690C037B47723555332AD592A643.jpg" data-large-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2018/10/0080690C037B47723555332AD592A643.jpg" class="aligncenter size-full wp-image-145" src="https://qiniu.zhaoshuai.me/wp-content/uploads/2018/10/0080690C037B47723555332AD592A643.jpg" alt="" width="899" height="585" /></span></p>
<p><span style="font-family: terminal, monaco, monospace; font-size: 10pt;">源站配置选择 之前创建的空间的名字就可以:</span></p>
<p><span style="font-family: terminal, monaco, monospace; font-size: 10pt;"><img data-attachment-id="144" data-permalink="https://zhaoshuai.me/23b97fdfd13887e14c9648ffab81b306/" data-orig-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2018/10/23B97FDFD13887E14C9648FFAB81B306.jpg" data-orig-size="930,572" data-comments-opened="1" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;0&quot;}" data-image-title="23B97FDFD13887E14C9648FFAB81B306" data-image-description="" data-medium-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2018/10/23B97FDFD13887E14C9648FFAB81B306.jpg" data-large-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2018/10/23B97FDFD13887E14C9648FFAB81B306.jpg" class="aligncenter size-full wp-image-144" src="https://qiniu.zhaoshuai.me/wp-content/uploads/2018/10/23B97FDFD13887E14C9648FFAB81B306.jpg" alt="" width="930" height="572" /></span></p>
<p><span style="font-family: terminal, monaco, monospace; font-size: 10pt;">其他高级设置，如果有需要可以自定义设置，然后点击创建，可以在域名管理里面看见刚刚创建的域名：</span></p>
<p><span style="font-family: terminal, monaco, monospace; font-size: 10pt;"><img data-attachment-id="148" data-permalink="https://zhaoshuai.me/625e242db78514d7ad55d5214ef17b69/" data-orig-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2018/10/625E242DB78514D7AD55D5214EF17B69.jpg" data-orig-size="1259,373" data-comments-opened="1" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;0&quot;}" data-image-title="625E242DB78514D7AD55D5214EF17B69" data-image-description="" data-medium-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2018/10/625E242DB78514D7AD55D5214EF17B69.jpg" data-large-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2018/10/625E242DB78514D7AD55D5214EF17B69.jpg" class="aligncenter size-full wp-image-148" src="https://qiniu.zhaoshuai.me/wp-content/uploads/2018/10/625E242DB78514D7AD55D5214EF17B69.jpg" alt="" width="1259" height="373" /></span></p>
<h4><span style="font-family: terminal, monaco, monospace;">2.3、SSL证书申请</span></h4>
<p><span style="font-family: terminal, monaco, monospace; font-size: 10pt;">上述步骤，我们选择了HTTPS通信协议，需要我们申请一个证书。很简单。</span></p>
<h4><span style="font-family: terminal, monaco, monospace; font-size: 12pt;">SSL证书服务-&gt;购买证书：</span></h4>
<p><span style="font-family: terminal, monaco, monospace; font-size: 10pt;">选择一个免费的，提交即可</span></p>
<p><span style="font-family: terminal, monaco, monospace; font-size: 10pt;"><img data-attachment-id="149" data-permalink="https://zhaoshuai.me/23d04354e3b1ace23c801e18fb309ba3/" data-orig-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2018/10/23D04354E3B1ACE23C801E18FB309BA3.jpg" data-orig-size="752,591" data-comments-opened="1" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;0&quot;}" data-image-title="23D04354E3B1ACE23C801E18FB309BA3" data-image-description="" data-medium-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2018/10/23D04354E3B1ACE23C801E18FB309BA3.jpg" data-large-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2018/10/23D04354E3B1ACE23C801E18FB309BA3.jpg" class="aligncenter size-full wp-image-149" src="https://qiniu.zhaoshuai.me/wp-content/uploads/2018/10/23D04354E3B1ACE23C801E18FB309BA3.jpg" alt="" width="752" height="591" /></span></p>
<h4><span style="font-family: terminal, monaco, monospace; font-size: 12pt;">SSL证书服务-&gt;补全信息-&gt;提交</span></h4>
<ul>
<li><span style="font-family: terminal, monaco, monospace; font-size: 10pt;">域名（通用名称），示例：qiniu.zhaoshuai.me</span></li>
<li><span style="font-family: terminal, monaco, monospace; font-size: 10pt;">证书备注：博客</span></li>
<li><span style="font-family: terminal, monaco, monospace; font-size: 10pt;">验证方式：DNS验证</span></li>
<li><span style="font-family: terminal, monaco, monospace; font-size: 10pt;">加密算法：RSA</span></li>
</ul>
<p><span style="font-family: terminal, monaco, monospace; font-size: 10pt;"><img data-attachment-id="152" data-permalink="https://zhaoshuai.me/455099083019c787faf6fff4b8e318a6/" data-orig-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2018/10/455099083019C787FAF6FFF4B8E318A6.jpg" data-orig-size="954,710" data-comments-opened="1" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;1&quot;}" data-image-title="455099083019C787FAF6FFF4B8E318A6" data-image-description="" data-medium-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2018/10/455099083019C787FAF6FFF4B8E318A6.jpg" data-large-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2018/10/455099083019C787FAF6FFF4B8E318A6.jpg" class="aligncenter size-full wp-image-152" src="https://qiniu.zhaoshuai.me/wp-content/uploads/2018/10/455099083019C787FAF6FFF4B8E318A6.jpg" alt="" width="954" height="710" /></span></p>
<h4><span style="font-family: terminal, monaco, monospace; font-size: 12pt;">SSL证书服务-&gt;证书管理-&gt;详情-&gt;DNS验证</span></h4>
<p><span style="font-family: terminal, monaco, monospace; font-size: 10pt;">在证书管理，找到自己申请的证书，点击最右侧详情。</span></p>
<p><span style="font-family: terminal, monaco, monospace; font-size: 10pt;">域名所有权验证，DNS（TXT）-&gt; <a href="https://developer.qiniu.com/ssl/manual/3667/ssl-certificate-of-free-dns-validation-guide" target="_blank" rel="noopener">免费证书验证指南</a></span></p>
<p><span style="font-family: terminal, monaco, monospace; font-size: 10pt;"><img data-attachment-id="155" data-permalink="https://zhaoshuai.me/6dc6a30497c3e56d57ac0954e5039949/" data-orig-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2018/10/6DC6A30497C3E56D57AC0954E5039949.jpg" data-orig-size="1153,540" data-comments-opened="1" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;0&quot;}" data-image-title="6DC6A30497C3E56D57AC0954E5039949" data-image-description="" data-medium-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2018/10/6DC6A30497C3E56D57AC0954E5039949.jpg" data-large-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2018/10/6DC6A30497C3E56D57AC0954E5039949.jpg" class="aligncenter size-full wp-image-155" src="https://qiniu.zhaoshuai.me/wp-content/uploads/2018/10/6DC6A30497C3E56D57AC0954E5039949.jpg" alt="" width="1153" height="540" /></span></p>
<p><span style="font-family: terminal, monaco, monospace; font-size: 10pt;">配置成功之后，等待一段时间就会看到自己的证书已经完成验证，可以使用了。之后在绑定域名的时候，就可以看到相对应的SSL证书。</span></p>
<h2><span style="font-family: terminal, monaco, monospace;">3、Wordpress插件</span></h2>
<p><span style="font-family: terminal, monaco, monospace; font-size: 10pt;">下载三个插件：</span></p>
<ul>
<li><span style="font-family: terminal, monaco, monospace; font-size: 10pt;"><strong>WP Super Cache</strong></span></li>
<li><span style="font-family: terminal, monaco, monospace; font-size: 10pt;"><strong>WPJAM BASIC</strong></span></li>
<li><span style="font-family: terminal, monaco, monospace; font-size: 10pt;"><strong>WPJAM 七牛镜像存储</strong></span></li>
</ul>
<p><span style="font-family: terminal, monaco, monospace; font-size: 10pt;"><img data-attachment-id="163" data-permalink="https://zhaoshuai.me/4d05874ac262d1bc309677454b223507/" data-orig-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2018/10/4D05874AC262D1BC309677454B223507.jpg" data-orig-size="1121,231" data-comments-opened="1" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;0&quot;}" data-image-title="4D05874AC262D1BC309677454B223507" data-image-description="" data-medium-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2018/10/4D05874AC262D1BC309677454B223507.jpg" data-large-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2018/10/4D05874AC262D1BC309677454B223507.jpg" class="aligncenter size-full wp-image-163" src="https://qiniu.zhaoshuai.me/wp-content/uploads/2018/10/4D05874AC262D1BC309677454B223507.jpg" alt="" width="1121" height="231" /></span></p>
<h4><span style="font-family: terminal, monaco, monospace;">3.1 WPJAM BASIC 配置</span></h4>
<p><span style="font-family: terminal, monaco, monospace; font-size: 10pt;">在配置中，打开七牛镜像云存储：<img data-attachment-id="158" data-permalink="https://zhaoshuai.me/474913fd840fbb21950372708a44d4e8/" data-orig-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2018/10/474913FD840FBB21950372708A44D4E8.jpg" data-orig-size="886,515" data-comments-opened="1" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;0&quot;}" data-image-title="474913FD840FBB21950372708A44D4E8" data-image-description="" data-medium-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2018/10/474913FD840FBB21950372708A44D4E8.jpg" data-large-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2018/10/474913FD840FBB21950372708A44D4E8.jpg" class="aligncenter size-full wp-image-158" src="https://qiniu.zhaoshuai.me/wp-content/uploads/2018/10/474913FD840FBB21950372708A44D4E8.jpg" alt="" width="886" height="515" /></span></p>
<h4><span style="font-family: terminal, monaco, monospace;"><span style="font-size: 10pt;">3.2 </span>WPJAM 七牛镜像存储配置</span></h4>
<ul>
<li><span style="font-family: terminal, monaco, monospace; font-size: 10pt;">七牛域名，示例：https://qiniu.zhaoshuai.me/</span></li>
<li><span style="font-family: terminal, monaco, monospace; font-size: 10pt;">七牛空间名，创建的空间名字， 示例：blog</span></li>
<li><span style="font-family: terminal, monaco, monospace; font-size: 10pt;">ACCESS KEY &amp; SECRET KEY， 七牛云-&gt;个人面板-&gt;<a href="https://portal.qiniu.com/user/key" target="_blank" rel="noopener">密钥管理</a>（选择其中一对即可）</span></li>
</ul>
<p><span style="font-family: terminal, monaco, monospace; font-size: 10pt;"><img data-attachment-id="159" data-permalink="https://zhaoshuai.me/31039234a063d7358fd138f2b3a0ff36/" data-orig-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2018/10/31039234A063D7358FD138F2B3A0FF36.jpg" data-orig-size="836,454" data-comments-opened="1" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;0&quot;}" data-image-title="31039234A063D7358FD138F2B3A0FF36" data-image-description="" data-medium-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2018/10/31039234A063D7358FD138F2B3A0FF36.jpg" data-large-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2018/10/31039234A063D7358FD138F2B3A0FF36.jpg" class="aligncenter size-full wp-image-159" src="https://qiniu.zhaoshuai.me/wp-content/uploads/2018/10/31039234A063D7358FD138F2B3A0FF36.jpg" alt="" width="836" height="454" /></span></p>
<p><span style="font-size: 10pt; font-family: terminal, monaco, monospace;">登陆 wordpress 仪表盘后，在浏览器中输入：<em><code></code></em></span></p>
<p><span style="font-size: 10pt; font-family: terminal, monaco, monospace;"><em><code>https://{自己域名}/wp-admin/options.php</code></em></span></p>
<p><span style="font-size: 10pt; font-family: terminal, monaco, monospace;">使用Ctrl+F命令找到 upload_url_path 选项，在其中输入:<em><code></code></em></span></p>
<p><span style="font-size: 10pt; font-family: terminal, monaco, monospace;"><em><code>https://{七牛域名}/wp-content/uploads</code></em> </span></p>
<p><span style="font-family: terminal, monaco, monospace; font-size: 10pt;">注意！！后面一定不要加"/", 示例 ：</span></p>
<blockquote><p><span style="font-family: terminal, monaco, monospace; font-size: 10pt;"><code>https://qiniu.zhaoshuai.me/wp-content/uploads</code></span></p></blockquote>
<p><span style="font-family: terminal, monaco, monospace; font-size: 10pt;"><img data-attachment-id="164" data-permalink="https://zhaoshuai.me/7fa3b198680a1c54a63f4d3fe1e72a6e/" data-orig-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2018/10/7FA3B198680A1C54A63F4D3FE1E72A6E.jpg" data-orig-size="836,109" data-comments-opened="1" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;0&quot;}" data-image-title="7FA3B198680A1C54A63F4D3FE1E72A6E" data-image-description="" data-medium-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2018/10/7FA3B198680A1C54A63F4D3FE1E72A6E.jpg" data-large-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2018/10/7FA3B198680A1C54A63F4D3FE1E72A6E.jpg" class="aligncenter size-full wp-image-164" src="https://qiniu.zhaoshuai.me/wp-content/uploads/2018/10/7FA3B198680A1C54A63F4D3FE1E72A6E.jpg" alt="" width="836" height="109" /></span></p>
<p><span style="font-size: 10pt; font-family: terminal, monaco, monospace;">记得点击保存，然后我们再看媒体库中的所有的图片的链接格式都已经更改了。改成了刚刚更改的URL前缀。</span></p>
<p><span style="font-size: 10pt; font-family: terminal, monaco, monospace;">然后我们再去七牛云对应的存储空间上去看，发现博客的图片都已经同步过去了：</span></p>
<p><span style="font-family: terminal, monaco, monospace;"><img data-attachment-id="168" data-permalink="https://zhaoshuai.me/d47f1d3a346c5b4462d08c4ef8f19b88/" data-orig-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2018/10/D47F1D3A346C5B4462D08C4EF8F19B88.jpg" data-orig-size="1034,540" data-comments-opened="1" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;0&quot;}" data-image-title="D47F1D3A346C5B4462D08C4EF8F19B88" data-image-description="" data-medium-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2018/10/D47F1D3A346C5B4462D08C4EF8F19B88.jpg" data-large-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2018/10/D47F1D3A346C5B4462D08C4EF8F19B88.jpg" class="aligncenter size-full wp-image-168" src="https://qiniu.zhaoshuai.me/wp-content/uploads/2018/10/D47F1D3A346C5B4462D08C4EF8F19B88.jpg" alt="" width="1034" height="540" /></span></p>
<p><span style="font-family: terminal, monaco, monospace; font-size: 10pt;">之后再新上传的照片也会自动同步到七牛上，此方法的好处在于你只需在wordpress中上传图片，就会自动同步到七牛空间，而无需登陆七牛上传并手动输入图片地址了。并且除了图片地址改变外，其他操作如常。引用图片时会自动加载七牛空间中的图片，实现 wordpress 免费CDN全网加速。不便之处是上传的图片仍会在 wordpress 空间中保留，占用空间容量。也就是说，它仍然在你的本地保存了一份，不过访问时会访问七牛的网址，也就可以实现CDN加速，而且为你的主机节省流量了。当然，由于图片已同步至七牛镜像空间中，你也可以选择删除 wordpress 中的图片。</span></p>
<h4><span style="font-family: terminal, monaco, monospace;"><span style="font-size: 10pt;">3.3 </span>W<strong>P Super Cache 配置</strong></span></h4>
<p><span style="font-family: terminal, monaco, monospace; font-size: 10pt;">wordpress仪表盘 -&gt; Settings -&gt; WP Super Cache </span></p>
<ul>
<li><span style="font-size: 10pt; font-family: terminal, monaco, monospace;">站点地址（URL）, 示例：https://zhaoshuai.me</span></li>
<li><span style="font-family: terminal, monaco, monospace; font-size: 10pt;">Off-site URL，七牛域名，示例：https://qiniu.zhaoshuai.me</span></li>
</ul>
<p><span style="font-family: terminal, monaco, monospace;"><img data-attachment-id="170" data-permalink="https://zhaoshuai.me/ac076235-447e-4e9d-8700-824c2044092b/" data-orig-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2018/10/AC076235-447E-4E9D-8700-824C2044092B.jpeg" data-orig-size="866,915" data-comments-opened="1" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;1&quot;}" data-image-title="AC076235-447E-4E9D-8700-824C2044092B" data-image-description="" data-medium-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2018/10/AC076235-447E-4E9D-8700-824C2044092B.jpeg" data-large-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2018/10/AC076235-447E-4E9D-8700-824C2044092B.jpeg" class="aligncenter size-full wp-image-170" src="https://qiniu.zhaoshuai.me/wp-content/uploads/2018/10/AC076235-447E-4E9D-8700-824C2044092B.jpeg" alt="" width="866" height="915" /></span></p>
<p><span style="font-size: 10pt; font-family: terminal, monaco, monospace;">保存修改，这样就能够实现CDN加速了。</span></p>
<p><span style="font-family: terminal, monaco, monospace;">通过上述步骤，就可以将我们的博客部署到七牛云存储上，并实现了HTTPS加密保证安全，既可以提高网站加载速度，同时也节省我们的主机流量。</span></p>
<p><span style="font-family: terminal, monaco, monospace;">如果有什么不正确或者不完善的地方，欢迎留言~</span></p>
<h2><span style="font-family: terminal, monaco, monospace;">4、参考博文：</span></h2>
<ul>
<li><span style="font-family: terminal, monaco, monospace;">https://wordpress.org/plugins/wpjam-qiniu/</span></li>
<li><span style="font-family: terminal, monaco, monospace;">https://cuiqingcai.com/357.html</span></li>
</ul>
<p>&nbsp;</p>
]]></content:encoded>
							<wfw:commentRss>https://zhaoshuai.me/2018-10-01/feed/</wfw:commentRss>
		<slash:comments>2</slash:comments>
							</item>
		<item>
		<title>【Nginx】域名添加 HTTPS 证书</title>
		<link>https://zhaoshuai.me/2018-09-28/</link>
				<comments>https://zhaoshuai.me/2018-09-28/#respond</comments>
				<pubDate>Sat, 29 Sep 2018 15:52:31 +0000</pubDate>
		<dc:creator><![CDATA[zhaoshuai]]></dc:creator>
				<category><![CDATA[Nginx]]></category>

		<guid isPermaLink="false">https://zhaoshuai.me/?p=90</guid>
				<description><![CDATA[1、前期准备 需要有个域名：www.zhaoshuai.me（&#160;阿里云&#160;、腾讯云）有一台 Linux ECS；LNMP环境：Nginx服务器 + PHP-FPM 2、申请SSL证书（以阿里云为例） 2.1 控制台 -&#62; 域名 -&#62; 域名列表 -&#62; 管理（最右侧） 2.2 域名 ...]]></description>
								<content:encoded><![CDATA[
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


<pre class="crayon-plain-tag">server {
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
}</pre>]]></content:encoded>
							<wfw:commentRss>https://zhaoshuai.me/2018-09-28/feed/</wfw:commentRss>
		<slash:comments>0</slash:comments>
							</item>
		<item>
		<title>【Mac】APP无法打开或文件损坏的处理方法</title>
		<link>https://zhaoshuai.me/2018-09-27/</link>
				<comments>https://zhaoshuai.me/2018-09-27/#comments</comments>
				<pubDate>Thu, 27 Sep 2018 02:23:36 +0000</pubDate>
		<dc:creator><![CDATA[zhaoshuai]]></dc:creator>
				<category><![CDATA[mac]]></category>
		<category><![CDATA[Mac]]></category>

		<guid isPermaLink="false">https://zhaoshuai.me/?p=56</guid>
				<description><![CDATA[1、遇到问题 有些用户下载了一些程序之后，却发现无法在MAC中安装，安装时会弹出下图所示警告框：“打不开 xxx，因为它来自身份不明的开发者”；xxx.app已损坏，打不开。你应该将它移到废纸篓 2、原因 在&#160;MAC 下安装一些软件时提示"来自身份 ...]]></description>
								<content:encoded><![CDATA[
<h2>1、遇到问题</h2>



<ul><li>有些用户下载了一些程序之后，却发现无法在MAC中安装，安装时会弹出下图所示警告框：“<strong>打不开 xxx，因为它来自身份不明的开发者</strong>”；</li><li><strong>xxx.app已损坏</strong>，打不开。你应该将它移到废纸篓</li></ul>



<h2>2、原因</h2>



<p>
在&nbsp;<strong><em>MAC </em></strong>下安装一些软件时提示"<strong>来自身份不明开发者</strong>"，其实这是MAC新系统启用了新的安全机制。 默认只信任&nbsp;<strong><em>Mac App Store</em></strong>&nbsp;下载的软件和拥有开发者 ID 签名的应用程序。
</p>



<h2>3、解决方法</h2>



<h4>3.1、按住Control后，再次点击软件图标，即可。</h4>



<h4>3.2、系统偏好设置 -&gt; 安全性与隐私。</h4>



<p><strong>系统偏好设置:</strong></p>



<div class="wp-block-image"><figure class="aligncenter"><img data-attachment-id="71" data-permalink="https://zhaoshuai.me/155ee078-8b82-4976-b961-ab64b4988462/" data-orig-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2018/09/155EE078-8B82-4976-B961-AB64B4988462.jpg" data-orig-size="660,352" data-comments-opened="1" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;0&quot;}" data-image-title="155EE078-8B82-4976-B961-AB64B4988462" data-image-description="" data-medium-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2018/09/155EE078-8B82-4976-B961-AB64B4988462.jpg" data-large-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2018/09/155EE078-8B82-4976-B961-AB64B4988462.jpg" src="https://qiniu.zhaoshuai.me/wp-content/uploads/2018/09/155EE078-8B82-4976-B961-AB64B4988462.jpg" alt="" class="wp-image-71"/></figure></div>



<p><strong>安全性与隐私：</strong></p>



<div class="wp-block-image"><figure class="aligncenter"><img data-attachment-id="77" data-permalink="https://zhaoshuai.me/c81cf16e78d529fc8cc91d9b16565d79/" data-orig-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2018/09/C81CF16E78D529FC8CC91D9B16565D79.jpg" data-orig-size="668,573" data-comments-opened="1" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;0&quot;}" data-image-title="C81CF16E78D529FC8CC91D9B16565D79" data-image-description="" data-medium-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2018/09/C81CF16E78D529FC8CC91D9B16565D79.jpg" data-large-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2018/09/C81CF16E78D529FC8CC91D9B16565D79.jpg" src="https://qiniu.zhaoshuai.me/wp-content/uploads/2018/09/C81CF16E78D529FC8CC91D9B16565D79.jpg" alt="" class="wp-image-77"/></figure></div>



<p>并记得点击左下角的小锁，需要输入密码，完成保存！！！</p>



<h2>4、写在后面！</h2>



<pre class="crayon-plain-tag">sudo spctl --master-disable</pre>



<h4>macOS Sierra 10.12 之后的系统可能没有 “任何来源” 这个选项，打开<code>终端（命令行）</code>，输入一下命令，然后按<code>回车</code>。然后会看见个<code>password</code>，继续输入自己电脑解锁密码，重新打开安全与隐私，就看见任何来源了。</h4>
]]></content:encoded>
							<wfw:commentRss>https://zhaoshuai.me/2018-09-27/feed/</wfw:commentRss>
		<slash:comments>2</slash:comments>
							</item>
		<item>
		<title>【Laravel】使用QQ SMTP发送邮件</title>
		<link>https://zhaoshuai.me/2018-09-21/</link>
				<comments>https://zhaoshuai.me/2018-09-21/#comments</comments>
				<pubDate>Fri, 21 Sep 2018 04:15:42 +0000</pubDate>
		<dc:creator><![CDATA[zhaoshuai]]></dc:creator>
				<category><![CDATA[php]]></category>
		<category><![CDATA[PHP]]></category>

		<guid isPermaLink="false">http://zhaoshuai.me/?p=16</guid>
				<description><![CDATA[1、 Laravel 文件 需要涉及到的文件 .env&#160; 在根目录下面，composer初始化项目的时候会生成/config/mail.php 2、 .env代码 [crayon-5cdd83974952c662209781/] 3、mail.php 代码 其中要设置一下发件人以及名字'from' =&#62; ['addres ...]]></description>
								<content:encoded><![CDATA[
<h2>1、 Laravel 文件</h2>



<p>需要涉及到的文件</p>



<ul><li>.env&nbsp; 在根目录下面，composer初始化项目的时候会生成</li><li>/config/mail.php</li></ul>



<h2>2、 .env代码</h2>



<pre class="crayon-plain-tag">MAIL_DRIVER=smtp
MAIL_HOST=smtp.qq.com
MAIL_PORT=465
MAIL_USERNAME=[**邮箱地址**]
MAIL_PASSWORD=[**QQ邮箱的授权码（不是邮箱密码）**]
MAIL_ENCRYPTION=ssl</pre>



<h2>3、mail.php 代码</h2>



<p>其中要设置一下发件人以及名字<code>'from' =&gt; ['address' =&gt; "mail@zhaoshuai.me", 'name' =&gt; '赵帅'],</code></p>



<h2>4、开启QQ邮箱smtp和imap功能</h2>



<div class="wp-block-image"><figure class="aligncenter"><img data-attachment-id="42" data-permalink="https://zhaoshuai.me/2018-09-21/260b34f14fa4cced721ced1dd3391032/" data-orig-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2018/09/260B34F14FA4CCED721CED1DD3391032.jpg" data-orig-size="789,242" data-comments-opened="1" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;0&quot;}" data-image-title="260B34F14FA4CCED721CED1DD3391032" data-image-description="" data-medium-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2018/09/260B34F14FA4CCED721CED1DD3391032.jpg" data-large-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2018/09/260B34F14FA4CCED721CED1DD3391032.jpg" src="https://qiniu.zhaoshuai.me/wp-content/uploads/2018/09/260B34F14FA4CCED721CED1DD3391032.jpg" alt="" class="wp-image-42"/></figure></div>



<h2>5、生成授权码，并填入到上述 “<code>MAIL_PASSWORD</code>”</h2>



<p>QQ邮箱的后台开启smtp和imap发送邮箱授权功能，否则将一直提示你没有授权。详情：<a href="https://mail.qq.com/" target="_blank" rel="noreferrer noopener">https://mail.qq.com/</a></p>



<div class="wp-block-image"><figure class="aligncenter"><img data-attachment-id="43" data-permalink="https://zhaoshuai.me/2018-09-21/accddb0c2a8924e85b9d889796e0be89/" data-orig-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2018/09/ACCDDB0C2A8924E85B9D889796E0BE89.png" data-orig-size="529,336" data-comments-opened="1" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;0&quot;}" data-image-title="ACCDDB0C2A8924E85B9D889796E0BE89" data-image-description="" data-medium-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2018/09/ACCDDB0C2A8924E85B9D889796E0BE89.png" data-large-file="https://qiniu.zhaoshuai.me/wp-content/uploads/2018/09/ACCDDB0C2A8924E85B9D889796E0BE89.png" src="https://qiniu.zhaoshuai.me/wp-content/uploads/2018/09/ACCDDB0C2A8924E85B9D889796E0BE89.png" alt="" class="wp-image-43"/></figure></div>



<h2>6、发送邮件</h2>



<pre class="crayon-plain-tag">Mail::send('email', ['data' => $data], function ($message) {
    $to = '982599220@qq.com';
    $message->to($to)->subject('12306抢票邮件, 有票啦~~');
});</pre>



<p></p>
]]></content:encoded>
							<wfw:commentRss>https://zhaoshuai.me/2018-09-21/feed/</wfw:commentRss>
		<slash:comments>1</slash:comments>
							</item>
	</channel>
</rss>
