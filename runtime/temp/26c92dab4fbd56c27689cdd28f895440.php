<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:34:"template/conch/html/rss/index.html";i:1578235052;}*/ ?>
<?php echo '<?'; ?>
xml version="1.0" encoding="utf-8"?>
<rss version="2.0" xmlns:atom="http://www.w3.org/2005/Atom">
	<channel>
		<title><?php echo $maccms['site_name']; ?></title>
		<language>zh-cn</language>
		<pubDate><?php echo date('Y-m-d H:i:s'); ?></pubDate>
		<generator>Rss Powered By <?php echo $maccms['site_url']; ?></generator>
		<description><?php echo $maccms['site_description']; ?></description>
		<link><?php echo $maccms['http_type']; ?><?php echo $maccms['site_url']; ?></link>
		<?php $__TAG__ = '{"num":"100","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
		<item>
			<title>
				<![CDATA[<?php echo $vo['vod_name']; ?> <?php echo $vo['vod_remarks']; ?>]]>
			</title>
			<link><?php echo $maccms['http_type']; ?><?php echo $maccms['site_url']; ?><?php echo mac_url_vod_detail($vo); ?></link>
			<guid><?php echo $maccms['http_type']; ?><?php echo $maccms['site_url']; ?><?php echo mac_url_vod_detail($vo); ?></guid>
			<description>
				<![CDATA[<?php echo mac_filter_html($vo['vod_content']); ?>]]>
			</description>
			<pubDate><?php echo date('Y-m-d H:i:s',$vo['vod_time']); ?></pubDate>
		</item>
		<?php endforeach; endif; else: echo "" ;endif; $__TAG__ = '{"num":"100","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Art")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
		<item>
			<title>
				<![CDATA[<?php echo $vo['art_name']; ?> <?php echo $vo['art_remarks']; ?>]]>
			</title>
			<link><?php echo $maccms['http_type']; ?><?php echo $maccms['site_url']; ?><?php echo mac_url_art_detail($vo); ?></link>
			<guid><?php echo $maccms['http_type']; ?><?php echo $maccms['site_url']; ?><?php echo mac_url_art_detail($vo); ?></guid>
			<description>
				<![CDATA[<?php echo mac_filter_html($vo['art_content']); ?>]]>
			</description>
			<pubDate><?php echo date('Y-m-d H:i:s',$vo['art_time']); ?></pubDate>
		</item>
		<?php endforeach; endif; else: echo "" ;endif; ?>
	</channel>
</rss>