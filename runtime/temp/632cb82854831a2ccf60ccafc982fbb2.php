<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:69:"/www/wwwroot/ys512.cn/application/admin/view/public/select_level.html";i:1522373608;}*/ ?>
<form class="layui-form m10" method="post" action="<?php echo $url; ?>">
    <input type="hidden" name="col" value="<?php echo $col; ?>">
    <input type="hidden" name="ids" value="<?php echo $ids; ?>">

    <div class="layui-input-inline w150">
        <select name="val">
            <option value="">选择推荐</option>
            <option value="0">取消推荐</option>
            <?php if(is_array($level_list) || $level_list instanceof \think\Collection || $level_list instanceof \think\Paginator): $i = 0; $__LIST__ = $level_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <option value="<?php echo $vo; ?>">推荐<?php echo $vo; ?></option>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </select>
    </div>
    <div class="layui-input-inline">
        <button type="submit" class="layui-btn" lay-submit="" lay-filter="formSubmit">保 存</button>
    </div>
</form>

