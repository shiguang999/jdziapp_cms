<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:60:"/www/wwwroot/ys512.cn/application/admin/view/ulog/index.html";i:1545136474;s:61:"/www/wwwroot/ys512.cn/application/admin/view/public/head.html";i:1522628860;s:61:"/www/wwwroot/ys512.cn/application/admin/view/public/foot.html";i:1526021730;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?php echo $title; ?> - 苹果CMS</title>
    <link rel="stylesheet" href="/static/layui/css/layui.css">
    <link rel="stylesheet" href="/static/css/admin_style.css">
    <script type="text/javascript" src="/static/js/jquery.js"></script>
    <script type="text/javascript" src="/static/layui/layui.js"></script>
    <script>
        var ROOT_PATH="",ADMIN_PATH="<?php echo $_SERVER['SCRIPT_NAME']; ?>", MAC_VERSION='v10';
    </script>
</head>
<body>
<div class="page-container p10">

    <div class="my-toolbar-box" >
        <div class="center mb10">
            <form class="layui-form " method="post">
                <div class="layui-input-inline w150">
                    <select name="mid">
                        <option value="">选择模块</option>
                        <option value="1" <?php if($param['mid'] == '1'): ?>selected <?php endif; ?>>视频</option>
                        <option value="2" <?php if($param['mid'] == '2'): ?>selected <?php endif; ?>>文章</option>
                        <option value="3" <?php if($param['mid'] == '3'): ?>selected <?php endif; ?>>专题</option>
                    </select>
                </div>
                <div class="layui-input-inline w150">
                    <select name="type">
                        <option value="">选择类型</option>
                        <option value="1" <?php if($param['type'] == '1'): ?>selected <?php endif; ?>>浏览</option>
                        <option value="2" <?php if($param['type'] == '2'): ?>selected <?php endif; ?>>收藏</option>
                        <option value="3" <?php if($param['type'] == '3'): ?>selected <?php endif; ?>>想看</option>
                        <option value="4" <?php if($param['type'] == '4'): ?>selected <?php endif; ?>>点播</option>
                        <option value="5" <?php if($param['type'] == '5'): ?>selected <?php endif; ?>>下载</option>
                    </select>
                </div>
                <div class="layui-input-inline">
                    <input type="text" autocomplete="off" placeholder="请输入搜索条件" class="layui-input" name="wd" value="<?php echo $param['wd']; ?>">
                </div>
                <button class="layui-btn mgl-20 j-search" >查询</button>
            </form>
        </div>

        <div class="layui-btn-group">
            <a data-href="<?php echo url('del'); ?>" class="layui-btn layui-btn-primary j-page-btns confirm"><i class="layui-icon">&#xe640;</i>删除</a>
            <a data-href="<?php echo url('del'); ?>?ids=1&all=1" class="layui-btn layui-btn-primary j-ajax" confirm="确认清空数据吗？操作不可恢复"><i class="layui-icon">&#xe640;</i>清空</a>
        </div>
    </div>

     <form class="layui-form " method="post" id="pageListForm">
         <table class="layui-table" lay-size="sm">
            <thead>
            <tr>
                <th width="25"><input type="checkbox" lay-skin="primary" lay-filter="allChoose"></th>
                <th width="80">编号</th>
                <th width="100">用户</th>
                <th width="50">模块</th>
                <th width="50">类型</th>
                <th width="50">积分</th>
                <th width="80">关联id-sid-nid</th>
                <th>数据名称</th>
                <th width="140">日志时间</th>
                <th width="50">操作</th>
            </tr>
            </thead>

            <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <tr>
                <td><input type="checkbox" name="ids[]" value="<?php echo $vo['ulog_id']; ?>" class="layui-checkbox checkbox-ids" lay-skin="primary"></td>
                <td><?php echo $vo['ulog_id']; ?></td>
                <td>[<?php echo $vo['user_id']; ?>]<?php echo $vo['user_name']; ?></td>
                <td><?php echo mac_get_ulog_mid_text($vo['ulog_mid']); ?></td>
                <td><?php echo mac_get_ulog_type_text($vo['ulog_type']); ?></td>
                <td><?php echo $vo['ulog_points']; ?></td>
                <td><?php echo $vo['ulog_rid']; if($vo['ulog_sid'] > 0): ?>-<?php echo $vo['ulog_sid']; endif; if($vo['ulog_nid'] > 0): ?>-<?php echo $vo['ulog_nid']; endif; ?></td>
                <td>[<?php echo $vo['data']['name']; ?>]</td>
                <td><?php echo mac_day($vo['ulog_time'],color); ?></td>
                <td>
                    <a class="layui-badge-rim j-tr-del" data-href="<?php echo url('del?ids='.$vo['ulog_id']); ?>" href="javascript:;" title="删除">删除</a>
                </td>
            </tr>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            </tbody>
        </table>

        <div id="pages" class="center"></div>

    </form>
</div>

<script type="text/javascript" src="/static/js/admin_common.js"></script>


<script type="text/javascript">
    var curUrl="<?php echo url('ulog/index',$param); ?>";
    layui.use(['laypage', 'layer'], function() {
        var laypage = layui.laypage
                , layer = layui.layer;

        laypage.render({
            elem: 'pages'
            ,count: <?php echo $total; ?>
            ,limit: <?php echo $limit; ?>
            ,curr: <?php echo $page; ?>
            ,layout: ['count', 'prev', 'page', 'next', 'limit', 'skip']
            ,jump: function(obj,first){
                if(!first){
                    location.href = curUrl.replace('%7Bpage%7D',obj.curr).replace('%7Blimit%7D',obj.limit);
                }
            }
        });
    });
</script>
</body>
</html>