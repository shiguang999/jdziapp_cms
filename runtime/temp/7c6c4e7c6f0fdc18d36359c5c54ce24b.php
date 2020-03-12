<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:63:"/www/wwwroot/ys512.cn/application/admin/view/urlsend/index.html";i:1544533768;s:61:"/www/wwwroot/ys512.cn/application/admin/view/public/head.html";i:1522628860;s:61:"/www/wwwroot/ys512.cn/application/admin/view/public/foot.html";i:1526021730;}*/ ?>
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

    <blockquote class="layui-elem-quote">
        提示：全部数据将以历史数据新增，建议首次使用完整的提交1次。<br>
        当天数据将以实时数据新增，不包括更新数据，只包含当天新增加的数据。<br>
        断点会记录在缓存中，更新缓存后断点将消失。<br>
        当前站点配置域名：<?php echo $GLOBALS['config']['site']['site_url']; ?><br>
    </blockquote>

    <form class="layui-form layui-form-pane" method="post" action="" id="form2">
            <div class="layui-form-item">
                <label class="layui-form-label">推送token：</label>
                <div class="layui-input-inline  ">
                    <input type="text" class="layui-input" value="<?php echo $config['baidu_push_token']; ?>" placeholder="" id="baidu_push_token" name="urlsend[baidu_push_token]">
                </div>
                <label class="layui-form-label">熊掌号appid：</label>
                <div class="layui-input-inline  ">
                    <input type="text" class="layui-input" value="<?php echo $config['baidu_bear_appid']; ?>" placeholder="" id="baidu_bear_appid" name="urlsend[baidu_bear_appid]">
                </div>
                <label class="layui-form-label">熊掌号token：</label>
                <div class="layui-input-inline  ">
                    <input type="text" class="layui-input" value="<?php echo $config['baidu_bear_token']; ?>" placeholder="" id="baidu_bear_token" name="urlsend[baidu_bear_token]">
                </div>
                <div class="layui-input-inline  ">
                    <button type="submit" class="layui-btn" lay-submit="" lay-filter="formSubmit" data-child="true">保 存</button>
                    <button class="layui-btn layui-btn-warm" type="reset">还 原</button>
                </div>
            </div>
    </form>

    <form class="layui-form layui-form-pane" method="post" action="" id="form1">
            <div class="layui-form-item">

                <fieldset class="layui-elem-field layui-field-title layui-input-inline" style="margin-top: 30px; width:33%; padding: 5px;">
                    <legend>百度主动推送</legend>
                    <input type="button" value="当天视频" class="layui-btn layui-btn-primary" onclick="post('ac=baidu_push&ac2=today&mid=1');">
                    <input type="button" value="全部视频" class="layui-btn layui-btn-primary" onclick="post('ac=baidu_push&ac2=all&mid=1');">
                    <hr class="layui-bg-gray">
                    <input type="button" value="当天文章" class="layui-btn layui-btn-primary" onclick="post('ac=baidu_push&ac2=today&mid=2');">
                    <input type="button" value="全部文章" class="layui-btn layui-btn-primary" onclick="post('ac=baidu_push&ac2=all&mid=2');">
                    <hr class="layui-bg-gray">
                    <input type="button" value="当天专题" class="layui-btn layui-btn-primary" onclick="post('ac=baidu_push&ac2=today&mid=3');">
                    <input type="button" value="全部专题" class="layui-btn layui-btn-primary" onclick="post('ac=baidu_push&ac2=all&mid=3');">
                    <hr class="layui-bg-gray">
                    <input type="button" value="当天演员" class="layui-btn layui-btn-primary" onclick="post('ac=baidu_push&ac2=today&mid=8');">
                    <input type="button" value="全部演员" class="layui-btn layui-btn-primary" onclick="post('ac=baidu_push&ac2=all&mid=8');">
                    <hr class="layui-bg-gray">
                    <input type="button" value="当天角色" class="layui-btn layui-btn-primary" onclick="post('ac=baidu_push&ac2=today&mid=9');">
                    <input type="button" value="全部角色" class="layui-btn layui-btn-primary" onclick="post('ac=baidu_push&ac2=all&mid=9');">
                    <hr class="layui-bg-gray">
                    <?php if($urlsend_break_baidu_push != ''): ?>
                    <a href="<?php echo $urlsend_break_baidu_push; ?>" class="layui-btn layui-btn-danger ">【进入断点继续推送】</a>
                    <?php endif; ?>
                </fieldset>

                <fieldset class="layui-elem-field layui-field-title layui-input-inline" style="margin-top: 30px; width:33%; padding: 5px;">
                    <legend>熊掌号推送</legend>
                    <input type="button" value="当天视频" class="layui-btn layui-btn-primary" onclick="post('ac=baidu_bear&ac2=today&type=realtime&mid=1');">
                    <input type="button" value="全部视频" class="layui-btn layui-btn-primary" onclick="post('ac=baidu_bear&ac2=all&type=batch&mid=1');">
                    <hr class="layui-bg-gray">
                    <input type="button" value="当天文章" class="layui-btn layui-btn-primary" onclick="post('ac=baidu_bear&ac2=today&type=realtime&mid=2');">
                    <input type="button" value="全部文章" class="layui-btn layui-btn-primary" onclick="post('ac=baidu_bear&ac2=all&type=batch&mid=2');">
                    <hr class="layui-bg-gray">
                    <input type="button" value="当天专题" class="layui-btn layui-btn-primary" onclick="post('ac=baidu_bear&ac2=today&type=realtime&mid=3');">
                    <input type="button" value="全部专题" class="layui-btn layui-btn-primary" onclick="post('ac=baidu_bear&ac2=all&type=batch&mid=3');">
                    <hr class="layui-bg-gray">
                    <input type="button" value="当天演员" class="layui-btn layui-btn-primary" onclick="post('ac=baidu_bear&ac2=today&type=realtime&mid=8');">
                    <input type="button" value="全部演员" class="layui-btn layui-btn-primary" onclick="post('ac=baidu_bear&ac2=all&type=batch&mid=8');">
                    <hr class="layui-bg-gray">
                    <input type="button" value="当天角色" class="layui-btn layui-btn-primary" onclick="post('ac=baidu_bear&ac2=today&type=realtime&mid=9');">
                    <input type="button" value="全部角色" class="layui-btn layui-btn-primary" onclick="post('ac=baidu_bear&ac2=all&type=batch&mid=9');">
                    <hr class="layui-bg-gray">
                    <?php if($urlsend_break_baidu_bear != ''): ?>
                    <a href="<?php echo $urlsend_break_baidu_bear; ?>" class="layui-btn layui-btn-danger ">【进入断点继续推送】</a>
                    <?php endif; ?>
                </fieldset>
            </div>

    </form>

</div>

<script type="text/javascript" src="/static/js/admin_common.js"></script>

<script type="text/javascript">
    var curUrl = "<?php echo url('push'); ?>";
    layui.use(['form', 'layer'], function() {
        var form = layui.form
                , layer = layui.layer;


    });
    function post(p)
    {
        $("#form1").attr("action", curUrl + "?"+p);
        $("#form1").submit();
    }


</script>
</body>
</html>
