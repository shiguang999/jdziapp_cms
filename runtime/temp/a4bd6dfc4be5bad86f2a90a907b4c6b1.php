<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:63:"/www/wwwroot/ys512.cn/application/admin/view/timming/index.html";i:1546331282;s:61:"/www/wwwroot/ys512.cn/application/admin/view/public/head.html";i:1522628860;s:61:"/www/wwwroot/ys512.cn/application/admin/view/public/foot.html";i:1526021730;}*/ ?>
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
    <div class="my-toolbar-box">

        <div class="layui-btn-group">
            <a data-href="<?php echo url('info'); ?>" class="layui-btn layui-btn-primary j-iframe"><i class="layui-icon">&#xe654;</i>添加</a>
            <a data-href="<?php echo url('index/select'); ?>?tab=vod&col=status&tpl=select_state&url=timming/field" data-width="470" data-height="100" data-checkbox="1" class="layui-btn layui-btn-primary j-select"><i class="layui-icon">&#xe620;</i>状态</a>
        </div>

    </div>

    <form class="layui-form " method="post" id="pageListForm">
        <table class="layui-table" lay-size="sm">
            <thead>
            <tr>
                <th width="25"><input type="checkbox" lay-skin="primary" lay-filter="allChoose"></th>

                <th width="80">名称</th>
                <th width="150">描述</th>
                <th width="80">执行</th>
                <th width="80">状态</th>
                <th width="80">运行时间</th>
                <th width="100">操作</th>
            </tr>
            </thead>
            <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <tr>
                <td><input type="checkbox" name="ids[]" value="<?php echo $vo['name']; ?>" class="layui-checkbox checkbox-ids" lay-skin="primary"></td>
                <td><?php echo $vo['name']; ?></td>
                <td><?php echo $vo['des']; ?></td>
                <td><?php echo $vo['file']; ?></td>
                <td>
                    <input type="checkbox" name="status" <?php if($vo['status'] == 1): ?>checked<?php endif; ?> value="<?php echo $vo['status']; ?>" lay-skin="switch" lay-filter="switchStatus" lay-text="正常|关闭" data-href="<?php echo url('field?col=status&ids='.$vo['name']); ?>">
                </td>
                <td><?php echo mac_day($vo['runtime']); ?></td>
                <td>
                    <a class="layui-badge-rim" target="_blank" href="<?php echo $GLOBALS['config']['site']['install_dir']; ?>api.php/timming/index.html?name=<?php echo rawurlencode($vo['name']); ?>" title="测试">测试</a>
                    <a class="layui-badge-rim j-iframe" data-href="<?php echo url('info'); ?>?id=<?php echo rawurlencode($vo['name']); ?>" href="javascript:;" title="编辑">编辑</a>
                    <a class="layui-badge-rim j-tr-del" data-href="<?php echo url('del'); ?>?ids=<?php echo rawurlencode($vo['name']); ?>" href="javascript:;" title="删除">删除</a>
                </td>
            </tr>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            </tbody>
        </table>

    </form>
</div>
<script type="text/javascript" src="/static/js/admin_common.js"></script>

<script type="text/javascript">

</script>
</body>
</html>