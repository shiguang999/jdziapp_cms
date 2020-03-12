<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:31:"template/conch/html/rss/sm.html";i:1578235052;}*/ ?>
<?php echo '<?'; ?>
xml version="1.0" encoding="UTF-8"?>
<urlset>
	<?php $__TAG__ = '{"num":"100","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
	<url>
		<loc><?php echo $maccms['http_type']; ?><?php echo $maccms['site_url']; ?><?php echo mac_url_vod_detail($vo); ?></loc>
		<lastmod><?php echo date('Y-m-d H:i:s',$vo['vod_time']); ?></lastmod>
		<changefreq>always</changefreq>
		<priority>1.0</priority>
	</url>
	<?php endforeach; endif; else: echo "" ;endif; $__TAG__ = '{"num":"100","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Art")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
	<url>
		<loc><?php echo $maccms['http_type']; ?><?php echo $maccms['site_url']; ?><?php echo mac_url_art_detail($vo); ?></loc>
		<lastmod><?php echo date('Y-m-d H:i:s',$vo['art_time']); ?></lastmod>
		<changefreq>always</changefreq>
		<priority>1.0</priority>
	</url>
	<?php endforeach; endif; else: echo "" ;endif; ?>
</urlset>