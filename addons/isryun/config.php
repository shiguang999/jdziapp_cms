<?php
$path = 'application/data/config/quickmenu.txt';
$isryun = @require ('application/extra/maccms.php');
$info = 'ISR.Yun资源库,' . $isryun['site']['install_dir'] . 'addons/isryun/isryunzyk.php';
if (stristr(file_get_contents($path), $info))
    exit('快捷菜单已存在，请刷新页面后，在 后台首页>>快捷菜单 中查找【ISR.Yun资源库】菜单');
elseif (file_put_contents($path, chr(13) . chr(10) . $info, FILE_APPEND))
	exit('快捷菜单添加成功，请刷新页面后，在 后台首页>>快捷菜单 中查找【ISR.Yun资源库】菜单');
else
    exit('快捷菜单添加失败，请检查文件权限或者查看是否被防火墙拦截');
?>