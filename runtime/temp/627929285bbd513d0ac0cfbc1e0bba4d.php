<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:35:"template/conch/html/rss/google.html";i:1578235052;}*/ ?>
<?php echo '<?'; ?>
xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:image="http://www.google.com/schemas/sitemap-image/1.1" xmlns:video="http://www.google.com/schemas/sitemap-video/1.1">
	<?php $__TAG__ = '{"num":"100","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
	<url>
		<loc><?php echo $maccms['http_type']; ?><?php echo $maccms['site_url']; ?><?php echo mac_url_vod_detail($vo); ?></loc>
		<image:image>
			<image:loc><?php echo mac_url_img($vo['vod_pic']); ?></image:loc>
		</image:image>
		<video:video>
			<video:title>
				<![CDATA[<?php echo $vo['vod_name']; ?>]]>
			</video:title>
			<video:content_loc><?php echo $maccms['http_type']; ?><?php echo $maccms['site_url']; ?><?php echo mac_url_vod_play($vo,['sid'=>1,'nid'=>1]); ?></video:content_loc>
			<video:category>
				<![CDATA[<?php echo $vo['type']['type_name']; ?>]]>
			</video:category>
			<video:view_count><?php echo $vo['vod_hits']; ?></video:view_count>
			<video:description>
				<![CDATA[<?php echo mac_filter_html($vo['vod_content']); ?>]]>
			</video:description>
		</video:video>
	</url>
	<?php endforeach; endif; else: echo "" ;endif; $__TAG__ = '{"num":"100","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Art")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
	<url>
		<loc><?php echo $maccms['http_type']; ?><?php echo $maccms['site_url']; ?><?php echo mac_url_art_detail($vo); ?></loc>
		<image:image>
			<image:loc>
				<![CDATA[<?php echo mac_url_img($vo['art_pic']); ?>]]>
			</image:loc>
		</image:image>
	</url>
	<?php endforeach; endif; else: echo "" ;endif; ?>
</urlset>