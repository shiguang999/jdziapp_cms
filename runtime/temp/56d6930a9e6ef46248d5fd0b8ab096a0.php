<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:61:"/www/wwwroot/ys512.cn/application/admin/view/conch/theme.html";i:1579009603;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>海螺主题设置</title>
    <link rel="stylesheet" href="/static/layui/css/layui.css">
    <link rel="stylesheet" href="/static/css/admin_style.css">
    <script type="text/javascript" src="/static/js/jquery.js"></script>
    <script type="text/javascript" src="/static/layui/layui.js"></script>
    <script>var ROOT_PATH="",ADMIN_PATH="<?php echo $_SERVER['SCRIPT_NAME']; ?>", MAC_VERSION='v10';</script>
    <style>.layui-tab-content {padding: 0;}.layui-elem-field{border-radius: 5px;margin: 20px 0;}.layui-form-item{margin: 15px 0;}.layui-form-label{width: 100px;}.layui-input-block{margin-left: 130px;}.showpic{width: auto;height: 100px;}.hltheme{display: block;margin: 0 10px;}.hlbanner{border-radius: 0 0 10px 10px;height: 40px;line-height: 40px;font-size: 14px;color: #fff;}.hltext{padding: 0 30px;}.hlname{font-size: 15px;font-weight: 700;}.hlversion{float: right;}</style>
</head>
<body>
<?php $hltheme = parse_ini_file(substr('/template/conch/', strlen('/')).'info.ini'); $hlbg = (substr('/template/conch/', strlen()).'asset/admin/hlbg.jpg'); ?>
<div class="hltheme">
	<div class="hlbanner"  style="background: url(<?php echo $hlbg; ?>) center center, linear-gradient(to right, #6246f9 50%, #60a3ff 50%, #60a3ff) left top;background-repeat: no-repeat;background-size: cover;">
		<div class="hltext"><span class="hlversion">当前版本：v<?php echo $hltheme['version']; ?></span><span class="hlname"><?php echo $hltheme['name']; ?></span> - 原创多功能<?php echo $hltheme['cms']; ?>自适应主题</div>
	</div>
</div>
<div class="page-container">
    <div class="showpic" style="display:none;"><img class="showpic_img" width="auto" height="100"></div>
    <form class="layui-form" action="">
        <div class="layui-tab">
            <div class="layui-tab-content">
            <ul class="layui-tab-title">
                <li class="layui-this">海螺主题</li>
                <li>基本设置</li>
                <li>首页配置</li>
                <li>页面配置</li>
                <li>导航菜单</li>
                <li>推广展示</li>
                <li>其他设置</li>
                <li>SEO设置</li> 
                <li>广告设置</li>       
            </ul>
            </div>
            <div class="layui-tab-content">
                <div class="layui-tab-item layui-show">
					<blockquote class="layui-elem-quote">
						<p>欢迎使用 <a target="_blank" href="<?php echo $hltheme['website']; ?>"><?php echo $hltheme['name']; ?></a>，修改前请备份相关文件！以免数据丢失！</p>
						<p>当前主题版本:<span><font color="green" style="margin:0 10px">v<?php echo $hltheme['version']; ?></font></span></p>
					</blockquote>
					<table class="layui-table" style="margin-top: 20px">
						<colgroup>
							<col width="110">
							<col width="180">
				            <col>
					    </colgroup>
				        <thead>
					        <tr>
					            <th colspan="2" scope="col">主题简介</th>
					            <th colspan="1" scope="col">使用说明</th>
					        </tr>
				        </thead>
				        <tbody>
					        <tr>
					            <td>主题名称</td>
					            <td><?php echo $hltheme['name']; ?></td>
					            <td>1. 推荐使用PHP版本≥7.0-7.2</td>
					        </tr>
					        <tr>
					        	<td>适用系统</td>
					            <td><?php echo $hltheme['cms']; ?></td>
					            <td>2. 主题文件读写权限755</td>
					        </tr>
					        <tr>
					        	<td>主题作者</td>
					            <td><?php echo $hltheme['author']; ?></td>
					            <td>3. 不支持IE8及以下浏览器</td>
					        </tr>
					        <tr>
					        	<td>在线客服</td>
					            <td><a target="_blank" title="在线客服" href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo $hltheme['qqnumber']; ?>&site=qq&menu=yes"><?php echo $hltheme['qqnumber']; ?></a></td>
					            <td>4. 使用盗版主题遇到任何问题概不负责</td>
					        </tr>
					        <tr>
					            <td>使用教程</td>
					            <td><a target="_blank" href="<?php echo $hltheme['tutorial']; ?>"><?php echo $hltheme['tutorial']; ?></a></td>
					            <td>5. 因主题是可复制的商品，请勿传播</td>
					        </tr>
					        <tr>
					            <td>交流群</td>
					            <td><?php echo $hltheme['qqgroup']; ?></td>
					            <td>6. 退出售后群即视为放弃使用本主题</td>
					        </tr>
					        <tr>
					            <td>当前版本</td>
					            <td>v<?php echo $hltheme['version']; ?></td>
					            <td>7. 非技术人员请勿私自修改主题文件</td>
					        </tr>
					        <tr>
					        	<td>更新时间</td>
					            <td><?php echo $hltheme['lastdate']; ?></td>
					            <td>8. ※ 倡导文明模板 • 请勿非法使用 ※</td>
					        </tr>
					        <tr>
					        	<td>官方网站</td>
					            <td><a target="_blank" href="<?php echo $hltheme['website']; ?>"><?php echo $hltheme['website']; ?></a></td>
					            <td style="color: red;">禁止任何形式的二次出售、分享他人等侵害作者及正版用户的行为，一经发现将不提供更新并加入黑名单。</td>
					        </tr>
				        </tbody>
				    </table>
				    </br>
				</div>
                <div class="layui-tab-item">
                <fieldset class="layui-elem-field">
				   <legend>基本设置</legend>
				   <div class="layui-field-box">
                        <div class="layui-form-item">
                        <label class="layui-form-label">logo1（深色）</label>
                        <div class="layui-input-inline w400">
                            <input type="text" name="theme[logo][bpic]" placeholder="深色logo地址或路径" value="<?php echo $conch['theme']['logo']['bpic']; ?>" class="layui-input upload-input">
                        </div>
                        <div class="layui-input-inline w100">
                            <button type="button" class="layui-btn layui-btn-primary layui-upload" lay-data="{data:{thumb:0,thumb_class:'theme[logo][bpic]'}}" id="upload1">选择文件</button>
                        </div>
                        <div class="layui-form-mid layui-word-aux">适用于浅色页面展示，建议尺寸328px*96px</div>
                        </div><br>
                        <div class="layui-form-item">
                        <label class="layui-form-label">logo2（浅色）</label>
                        <div class="layui-input-inline w400">
                            <input type="text" name="theme[logo][wpic]" placeholder="浅色logo地址或路径" value="<?php echo $conch['theme']['logo']['wpic']; ?>" class="layui-input upload-input">
                        </div>
                        <div class="layui-input-inline w100">
                            <button type="button" class="layui-btn layui-btn-primary layui-upload" lay-data="{data:{thumb:0,thumb_class:'theme[logo][wpic]'}}" id="upload1">选择文件</button>
                        </div>
                        <div class="layui-form-mid layui-word-aux">适用于深色页面展示，建议尺寸328px*96px</div>
                        </div><br>
                        <div class="layui-form-item">
                        <label class="layui-form-label">网页图标</label>
                        <div class="layui-input-inline w400">
                            <input type="text" name="theme[logo][icon]" placeholder="网页图标地址或路径" value="<?php echo $conch['theme']['logo']['icon']; ?>" class="layui-input upload-input">
                        </div>
                        <div class="layui-input-inline w100">
                            <button type="button" class="layui-btn layui-btn-primary layui-upload" lay-data="{data:{thumb:0,thumb_class:'theme[logo][icon]'}}" id="upload1">选择文件</button>
                        </div>
                        <div class="layui-form-mid layui-word-aux">浏览器窗口小图标，支持png，建议根据演示图片大小制作</div>
                        </div><br>
                        <div class="layui-form-item">
                        <label class="layui-form-label">webapp图标</label>
                        <div class="layui-input-inline w400">
                            <input type="text" name="theme[logo][webapp]" placeholder="webapp图标地址或路径" value="<?php echo $conch['theme']['logo']['webapp']; ?>" class="layui-input upload-input">
                        </div>
                        <div class="layui-input-inline w100">
                            <button type="button" class="layui-btn layui-btn-primary layui-upload" lay-data="{data:{thumb:0,thumb_class:'theme[logo][webapp]'}}" id="upload1">选择文件</button>
                        </div>
                        <div class="layui-form-mid layui-word-aux">网页收藏或添加到桌面展示的图标，建议根据演示图片大小制作</div>
                        </div><br>
                        <div class="layui-form-item">
                        <label class="layui-form-label">懒加载图</label>
                        <div class="layui-input-inline w400">
                            <input type="text" name="theme[lazy]" placeholder="懒加载图地址或路径" value="<?php echo $conch['theme']['lazy']; ?>" class="layui-input upload-input">
                        </div>
                        <div class="layui-input-inline w100">
                            <button type="button" class="layui-btn layui-btn-primary layui-upload" lay-data="{data:{thumb:0,thumb_class:'theme[lazy]'}}" id="upload1">选择文件</button>
                        </div>
                        <div class="layui-form-mid layui-word-aux">封面懒加载图，建议根据演示图片大小制作</div>
                        </div><br>     
						<div class="layui-form-item">
                        <label class="layui-form-label">前台统计</label>
                        <div class="layui-input-inline w200">
                            <input type="radio" name="theme[tj][btn]" value="0" title="隐藏" <?php if($conch['theme']['tj']['btn'] == 0): ?>checked <?php endif; ?>>
                            <input type="radio" name="theme[tj][btn]" value="1" title="开启" <?php if($conch['theme']['tj']['btn'] == 1): ?>checked <?php endif; ?>>
                        </div>
                        <div class="layui-form-mid layui-word-aux">开启后，前台显示统计链接（开启与隐藏都不影响统计代码的正常运行）</div>
						</div><br>
                        <div class="layui-form-item">
                        <label class="layui-form-label">头部代码</label>
                        <div class="layui-input-block">
                            <textarea name="theme[head][text]" class="layui-textarea"  placeholder="支持html代码，css样式代码"><?php echo $conch['theme']['head']['text']; ?></textarea>
                        </div>
                        </div><br>
                        <div class="layui-form-item">
                        <label class="layui-form-label">底部提示</label>
                        <div class="layui-input-block">
                            <textarea name="theme[foot][text]" class="layui-textarea"  placeholder="支持html代码，免责声明"><?php echo $conch['theme']['foot']['text']; ?></textarea>
                        </div>
                        </div>
				   </div>
				</fieldset>
               </div>
               <div class="layui-tab-item">
               <fieldset class="layui-elem-field">
				   <legend>显示分类</legend>
				   <div class="layui-field-box">
						<div class="layui-form-item">
                        <label class="layui-form-label">显示分类ID</label>
                        <div class="layui-input-inline w200">
                            <input type="text" name="theme[type][hom]" placeholder="分类模块ID" value="<?php echo $conch['theme']['type']['hom']; ?>" class="layui-input">
                        </div>
                        <div class="layui-form-mid layui-word-aux">要展示的首页分类ID，留空显示全部，多个ID用“,”分隔</div>
						</div>
					<div class="layui-form-item">
						<label class="layui-form-label">显示数量</label>
							<div class="layui-input-inline w200">
								<select name="theme[vod][hnum]">
                                <option value="6" <?php if($conch['theme']['vod']['hnum'] == '6'): ?>selected <?php endif; ?>>6个</option>
                                <option value="12" <?php if($conch['theme']['vod']['hnum'] == '12'): ?>selected <?php endif; ?>>12个</option>
                            </select>
						</div>
						<div class="layui-form-mid layui-word-aux">分类数据展示数量（不同屏幕宽度下显示数量会有变化）</div>
				   </div>
				   </div>
				</fieldset>
                <fieldset class="layui-elem-field">
				   <legend>分类菜单</legend>
				   <div class="layui-field-box">
				        <div class="layui-form-item">
                        <label class="layui-form-label">菜单状态</label>
                        <div class="layui-input-inline w200">
                            <input type="radio" name="theme[type][meunbtn]" value="0" title="关闭" <?php if($conch['theme']['type']['meunbtn'] == 0): ?>checked <?php endif; ?>> 
                            <input type="radio" name="theme[type][meunbtn]" value="1" title="开启" <?php if($conch['theme']['type']['meunbtn'] == 1): ?>checked <?php endif; ?>>
                        </div>
                        <div class="layui-form-mid layui-word-aux">关闭后不显示对应模块和内容</div>
                        </div>
                        <div class="layui-form-item">
                        <label class="layui-form-label">分类菜单ID</label>
                        <div class="layui-input-inline w200">
                            <input type="text" name="theme[type][meunid]" placeholder="展示的分类ID" value="<?php echo $conch['theme']['type']['meunid']; ?>" class="layui-input">
                        </div>
                        <div class="layui-form-mid layui-word-aux">要展示的首页分类菜单，多个ID用“,”分隔，最多6个</div>
						</div>
                        <div class="layui-form-item">
							<label class="layui-form-label">菜单显示</label>
							<div class="layui-input-inline w200">
								<select name="theme[type][meunys]">
                                <option value="one" <?php if($conch['theme']['type']['meunys'] == 'one'): ?>selected <?php endif; ?>>显示一行</option>
                                <option value="two" <?php if($conch['theme']['type']['meunys'] == 'two'): ?>selected <?php endif; ?>>显示两行</option>
                            </select>
							</div>
							<div class="layui-form-mid layui-word-aux">本设置仅对PC端有效</div>
						</div>
				   </div>
				</fieldset>
                <fieldset class="layui-elem-field">
				   <legend>公告设置</legend>
				   <div class="layui-field-box">
                        <div class="layui-form-item">
                        <label class="layui-form-label">公告状态</label>
                        <div class="layui-input-inline w200">
                            <input type="radio" name="theme[notice][btn]" value="0" title="关闭" <?php if($conch['theme']['notice']['btn'] == 0): ?>checked <?php endif; ?>> 
                            <input type="radio" name="theme[notice][btn]" value="1" title="开启" <?php if($conch['theme']['notice']['btn'] == 1): ?>checked <?php endif; ?>>  
                        </div>
                        <div class="layui-form-mid layui-word-aux">关闭后不显示对应模块和内容</div>
                        </div>
                        <div class="layui-form-item">
                        <label class="layui-form-label">公告内容</label>
                        <div class="layui-input-block">
                            <textarea name="theme[notice][text]" class="layui-textarea"  placeholder="请输入公告内容，支持html代码"><?php echo $conch['theme']['notice']['text']; ?></textarea>
                        </div>
                        </div>
				   </div>
				</fieldset>
                <fieldset class="layui-elem-field">
				   <legend>推荐模块</legend>
				   <div class="layui-field-box">
                    <div class="layui-form-item">
                        <label class="layui-form-label">模块状态</label>
                        <div class="layui-input-inline w200">
                            <input type="radio" name="theme[hotvod][btn]" value="0" title="关闭" <?php if($conch['theme']['hotvod']['btn'] == 0): ?>checked <?php endif; ?>> 
                            <input type="radio" name="theme[hotvod][btn]" value="1" title="开启" <?php if($conch['theme']['hotvod']['btn'] == 1): ?>checked <?php endif; ?>>                       
                        </div>
                        <div class="layui-form-mid layui-word-aux">关闭后不显示对应模块和内容，设置“推荐1”</div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">模块标题</label>
                        <div class="layui-input-inline w200">
                            <input type="text" name="theme[hotvod][title]" placeholder="请输入展示的标题" value="<?php echo $conch['theme']['hotvod']['title']; ?>" class="layui-input">
                        </div>
                        <div class="layui-form-mid layui-word-aux">推荐模块的标题</div>
                    </div>
                    <div class="layui-form-item">
						<label class="layui-form-label">显示数量</label>
							<div class="layui-input-inline w200">
								<select name="theme[hotvod][num]">
                                <option value="6" <?php if($conch['theme']['hotvod']['num'] == '6'): ?>selected <?php endif; ?>>6个</option>
                                <option value="12" <?php if($conch['theme']['hotvod']['num'] == '12'): ?>selected <?php endif; ?>>12个</option>
                            </select>
						</div>
						<div class="layui-form-mid layui-word-aux">推荐数据展示数量（不同屏幕宽度下显示数量会有变化）</div>
					</div>
				   </div>
				 </fieldset>
                <fieldset class="layui-elem-field">
				   <legend>资讯模块</legend>
				   <div class="layui-field-box">
                    <div class="layui-form-item">
                        <label class="layui-form-label">模块状态</label>
                        <div class="layui-input-inline w200">
                            <input type="radio" name="theme[art][hbtn]" value="0" title="关闭" <?php if($conch['theme']['art']['hbtn'] == 0): ?>checked <?php endif; ?>> 
                            <input type="radio" name="theme[art][hbtn]" value="1" title="开启" <?php if($conch['theme']['art']['hbtn'] == 1): ?>checked <?php endif; ?>>                       
                        </div>
                        <div class="layui-form-mid layui-word-aux">关闭后不显示对应模块和内容（全站资讯模块没有开启，本按钮将失效）</div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">模块标题</label>
                        <div class="layui-input-inline w200">
                            <input type="text" name="theme[art][htitle]" placeholder="请输入展示的标题" value="<?php echo $conch['theme']['art']['htitle']; ?>" class="layui-input">
                        </div>
                        <div class="layui-form-mid layui-word-aux">要展示的标题</div>
                    </div>
                    <div class="layui-form-item">
						<label class="layui-form-label">显示数量</label>
							<div class="layui-input-inline w200">
								<select name="theme[art][hnum]">
                                <option value="6" <?php if($conch['theme']['art']['hnum'] == '6'): ?>selected <?php endif; ?>>6个</option>
                                <option value="12" <?php if($conch['theme']['art']['hnum'] == '12'): ?>selected <?php endif; ?>>12个</option>
                            </select>
						</div>
						<div class="layui-form-mid layui-word-aux">资讯数据展示数量（不同屏幕宽度下显示数量会有变化）</div>
					</div>
				   </div>
				 </fieldset>
                 <fieldset class="layui-elem-field">
				   <legend>专题模块</legend>
                   <div class="layui-field-box">
                     <div class="layui-form-item">
                        <label class="layui-form-label">模块状态</label>
                        <div class="layui-input-inline w200">
                            <input type="radio" name="theme[topic][hbtn]" value="0" title="关闭" <?php if($conch['theme']['topic']['hbtn'] == 0): ?>checked <?php endif; ?>> 
                            <input type="radio" name="theme[topic][hbtn]" value="1" title="开启" <?php if($conch['theme']['topic']['hbtn'] == 1): ?>checked <?php endif; ?>>                       
                        </div>
                        <div class="layui-form-mid layui-word-aux">关闭后不显示对应模块和内容（全站专题模块没有开启，本按钮将失效）</div>
                    </div>
                    <div class="layui-form-item">
						<label class="layui-form-label">显示数量</label>
							<div class="layui-input-inline w200">
								<select name="theme[topic][hnum]">
                                <option value="6" <?php if($conch['theme']['topic']['hnum'] == '6'): ?>selected <?php endif; ?>>6个</option>
                                <option value="12" <?php if($conch['theme']['topic']['hnum'] == '12'): ?>selected <?php endif; ?>>12个</option>
                            </select>
						</div>
						<div class="layui-form-mid layui-word-aux">专题数据展示数量（不同屏幕宽度下显示数量会有变化）</div>
					</div>
					</div>
				 </fieldset>
                 <fieldset class="layui-elem-field">
				   <legend>明星模块</legend>
				   <div class="layui-field-box">
                    <div class="layui-form-item">
                        <label class="layui-form-label">模块状态</label>
                        <div class="layui-input-inline w200">
                            <input type="radio" name="theme[actor][hbtn]" value="0" title="关闭" <?php if($conch['theme']['actor']['hbtn'] == 0): ?>checked <?php endif; ?>> 
                            <input type="radio" name="theme[actor][hbtn]" value="1" title="开启" <?php if($conch['theme']['actor']['hbtn'] == 1): ?>checked <?php endif; ?>>                       
                        </div>
                        <div class="layui-form-mid layui-word-aux">关闭后不显示对应模块和内容，设置明星“推荐1”（全站明星模块没有开启，本按钮将失效）</div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">模块标题</label>
                        <div class="layui-input-inline w200">
                            <input type="text" name="theme[actor][htitle]" placeholder="请输入展示的标题" value="<?php echo $conch['theme']['actor']['htitle']; ?>" class="layui-input">
                        </div>
                        <div class="layui-form-mid layui-word-aux">要展示的标题</div>
                    </div>
				   </div>
				 </fieldset>
                <fieldset class="layui-elem-field">
				   <legend>排行模块</legend>
				   <div class="layui-field-box">
                    <div class="layui-form-item">
                        <label class="layui-form-label">模块状态</label>
                        <div class="layui-input-inline w200">
                            <input type="radio" name="theme[rank][hbtn]" value="0" title="关闭" <?php if($conch['theme']['rank']['hbtn'] == 0): ?>checked <?php endif; ?>> 
                            <input type="radio" name="theme[rank][hbtn]" value="1" title="开启" <?php if($conch['theme']['rank']['hbtn'] == 1): ?>checked <?php endif; ?>>                       
                        </div>
                        <div class="layui-form-mid layui-word-aux">关闭后不显示对应模块和内容</div>
                    </div>
                    <div class="layui-form-item">
						<label class="layui-form-label">排行显示</label>
						<div class="layui-input-inline w200">
							<select name="theme[rank][hby]">
                                <option value="week" <?php if($conch['theme']['rank']['hby'] == 'week'): ?>selected <?php endif; ?>>周榜</option>
                                <option value="month" <?php if($conch['theme']['rank']['hby'] == 'month'): ?>selected <?php endif; ?>>月榜</option>
                                <option value="all" <?php if($conch['theme']['rank']['hby'] == 'all'): ?>selected <?php endif; ?>>总榜</option>
                            </select>
						</div>
						<div class="layui-form-mid layui-word-aux">可按不同时间显示排行榜</div>
					 </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">显示分类ID</label>
                        <div class="layui-input-inline w200">
                            <input type="text" name="theme[rank][hid]" placeholder="请输入分类ID" value="<?php echo $conch['theme']['rank']['hid']; ?>" class="layui-input">
                        </div>
                        <div class="layui-form-mid layui-word-aux">要展示的分类ID，多个ID用“,”分隔，最多显示4个</div>
                    </div>
				   </div>
				 </fieldset>
                 <fieldset class="layui-elem-field">
				   <legend>友链模块</legend>
				   <div class="layui-field-box">
                    <div class="layui-form-item">
                        <label class="layui-form-label">模块状态</label>
                        <div class="layui-input-inline w200">
                            <input type="radio" name="theme[links][btn]" value="0" title="关闭" <?php if($conch['theme']['links']['btn'] == 0): ?>checked <?php endif; ?>> 
                            <input type="radio" name="theme[links][btn]" value="1" title="开启" <?php if($conch['theme']['links']['btn'] == 1): ?>checked <?php endif; ?>>                       
                        </div>
                        <div class="layui-form-mid layui-word-aux">关闭后不显示对应模块和内容</div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">模块标题</label>
                        <div class="layui-input-inline w200">
                            <input type="text" name="theme[links][title]" placeholder="请输入展示的标题" value="<?php echo $conch['theme']['links']['title']; ?>" class="layui-input">
                        </div>
                        <div class="layui-form-mid layui-word-aux">要展示的标题</div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">显示数量</label>
                        <div class="layui-input-inline w200">
                            <input type="text" name="theme[links][num]" placeholder="请输入显示的数量" value="<?php echo $conch['theme']['links']['num']; ?>" class="layui-input">
                        </div>
                        <div class="layui-form-mid layui-word-aux">要展示的友情链接数量</div>
                    </div>
				   </div>
				 </fieldset>
               </div>
                <div class="layui-tab-item">
                <fieldset class="layui-elem-field">
				   <legend>幻灯设置</legend>
				   <div class="layui-field-box">
						<div class="layui-form-item">
							<label class="layui-form-label">幻灯片状态</label>
							<div class="layui-input-inline w200">
								<input type="radio" name="theme[banner][btn]" value="0" title="关闭" <?php if($conch['theme']['banner']['btn'] == 0): ?>checked <?php endif; ?>>
								<input type="radio" name="theme[banner][btn]" value="1" title="开启" <?php if($conch['theme']['banner']['btn'] == 1): ?>checked <?php endif; ?>>
							</div>
							<div class="layui-form-mid layui-word-aux">关闭后不显示对应模块和内容，设置“推荐9”</div>
						</div>
						<div class="layui-form-item">
							<label class="layui-form-label">列表页幻灯</label>
							<div class="layui-input-inline w200">
								<input type="radio" name="theme[lbbanner][btn]" value="0" title="关闭" <?php if($conch['theme']['lbbanner']['btn'] == 0): ?>checked <?php endif; ?>>
								<input type="radio" name="theme[lbbanner][btn]" value="1" title="开启" <?php if($conch['theme']['lbbanner']['btn'] == 1): ?>checked <?php endif; ?>>
							</div>
							<div class="layui-form-mid layui-word-aux">关闭后列表页不显示对应模块和内容</div>
						</div>
						<div class="layui-form-item">
							<label class="layui-form-label">幻灯片模式</label>
							<div class="layui-input-inline w200">
								<select name="theme[banner][ms]">
                                <option value="small" <?php if($conch['theme']['banner']['ms'] == 'small'): ?>selected <?php endif; ?>>小图模式</option>
                                <option value="big" <?php if($conch['theme']['banner']['ms'] == 'big'): ?>selected <?php endif; ?>>大图模式</option>
                            </select>
							</div>
							<div class="layui-form-mid layui-word-aux">大图模式需要上传海报图，建议尺寸1680px*580px 小图模式需设置3个推荐才显示</div>
						</div>
						<div class="layui-form-item">
					    <label class="layui-form-label">幻灯片背景</label>
                        <div class="layui-input-inline w70">
							<select name="theme[banner][smbg]">
                                <option value="0" <?php if($conch['theme']['banner']['smbg'] == 0): ?>selected <?php endif; ?>>隐藏</option>
                                <option value="1" <?php if($conch['theme']['banner']['smbg'] == 1): ?>selected <?php endif; ?>>显示</option>
                            </select>
						</div>
                        <div class="layui-input-inline w600">
                            <input type="text" name="theme[banner][bgstyle]" placeholder="自定义背景，例如颜色#282832，或url(图片地址)等" value="<?php echo $conch['theme']['banner']['bgstyle']; ?>" class="layui-input">
                        </div>
                        <div class="layui-form-mid layui-word-aux" style="margin-left: 130px;">隐藏小图模式及部分页面模糊背景效果，可自定义背景（如果开启模糊背景，自定义背景留空）</div>
                        </div>
				   </div>
				</fieldset>
               	<fieldset class="layui-elem-field">
				   <legend>搜索设置</legend>
				   <div class="layui-field-box">
						<div class="layui-form-item">
                        <label class="layui-form-label">显示文字</label>
                        <div class="layui-input-inline w200">
                            <input type="text" name="theme[search][text]" placeholder="请输入需要显示的文字" value="<?php echo $conch['theme']['search']['text']; ?>" class="layui-input">
                        </div>
                        <div class="layui-form-mid layui-word-aux">视频搜索框默认的提示文字</div>
						</div>
						<div class="layui-form-item">
							<label class="layui-form-label">联想搜索</label>
							<div class="layui-input-inline w200">
								<input type="radio" name="theme[search][lxbtn]" value="0" title="关闭" <?php if($conch['theme']['search']['lxbtn'] == 0): ?>checked <?php endif; ?>>
								<input type="radio" name="theme[search][lxbtn]" value="1" title="开启" <?php if($conch['theme']['search']['lxbtn'] == 1): ?>checked <?php endif; ?>>
							</div>
							<div class="layui-form-mid layui-word-aux">关闭后不显示对应模块和内容</div>
						</div>
				   </div>
				</fieldset>
                <fieldset class="layui-elem-field">
				   <legend>列表页面</legend>
				   <div class="layui-field-box">
						<div class="layui-form-item">
                        <label class="layui-form-label">默认样式ID</label>
                        <div class="layui-input-inline w150">
                            <input type="text" name="theme[type][ht]" placeholder="调用模块ID" value="<?php echo $conch['theme']['type']['ht']; ?>" class="layui-input">
                        </div>
                        <div class="layui-form-mid layui-word-aux">展示有二级分类的一级分类页面，多个ID用“,”分隔</div>
						</div>
						<div class="layui-form-item">
                        <label class="layui-form-label">地区样式ID</label>
                        <div class="layui-input-inline w150">
                            <input type="text" name="theme[type][ho]" placeholder="调用模块ID" value="<?php echo $conch['theme']['type']['ho']; ?>" class="layui-input">
                        </div>
                        <div class="layui-form-mid layui-word-aux">展示无二级分类的一级分类页面，多个ID用“,”分隔</div>
						</div>
						<div class="layui-form-item">
                        <label class="layui-form-label">横版样式ID</label>
                        <div class="layui-input-inline w150">
                            <input type="text" name="theme[type][hb]" placeholder="调用模块ID" value="<?php echo $conch['theme']['type']['hb']; ?>" class="layui-input">
                        </div>
                        <div class="layui-form-mid layui-word-aux">展示频封面横版的分类页面，多个ID用“,”分隔，填写“999”不启用</div>
						</div>
						<div class="layui-form-item">
                        <label class="layui-form-label">直播模块ID</label>
                        <div class="layui-input-inline w150">
                            <input type="text" name="theme[type][zb]" placeholder="调用模块ID" value="<?php echo $conch['theme']['type']['zb']; ?>" class="layui-input">
                        </div>
                        <div class="layui-form-mid layui-word-aux">展示直播分类页面，只能填写一个ID，填写“999”不启用</div>
						</div>
						<div class="layui-form-item">
                        <label class="layui-form-label">明星分类ID</label>
                        <div class="layui-input-inline w150">
                            <input type="text" name="theme[type][mx]" placeholder="调用模块ID" value="<?php echo $conch['theme']['type']['mx']; ?>" class="layui-input">
                        </div>
                        <div class="layui-form-mid layui-word-aux">展示的明星分类列表，多个ID用“,”分隔，填写“999”不启用</div>
						</div>
				   </div>
				</fieldset>
                <fieldset class="layui-elem-field">
				   <legend>列表数据</legend>
				   <div class="layui-field-box">
						<div class="layui-form-item">
							<label class="layui-form-label">显示数量</label>
								<div class="layui-input-inline w150">
									<select name="theme[vod][num]">
									<option value="6" <?php if($conch['theme']['vod']['num'] == '6'): ?>selected <?php endif; ?>>6个</option>
									<option value="12" <?php if($conch['theme']['vod']['num'] == '12'): ?>selected <?php endif; ?>>12个</option>
								</select>
							</div>
							<div class="layui-form-mid layui-word-aux">分类数据展示数量，仅对已分类列表有效（不同屏幕宽度下显示数量会有变化）</div>
					    </div>
				   </div>
				</fieldset>
                 <fieldset class="layui-elem-field">
				   <legend>播放页面</legend>
				   <div class="layui-field-box">
                     <div class="layui-form-item">
                        <label class="layui-form-label">播放器高度</label>
                        <div class="layui-input-inline w60">
                            <input type="text" name="theme[play][height]" placeholder="56.25" value="<?php echo $conch['theme']['play']['height']; ?>" class="layui-input">
                        </div>
                        <div class="layui-form-mid layui-word-aux">%，播放器自适应高度，默认高度56.25%，本设置仅对移动端有效</div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">播放器广告</label>
                        <div class="layui-input-inline w200">
                            <input type="radio" name="theme[play][adbtn]" value="0" title="关闭" <?php if($conch['theme']['play']['adbtn'] == 0): ?>checked <?php endif; ?>> 
                            <input type="radio" name="theme[play][adbtn]" value="1" title="开启" <?php if($conch['theme']['play']['adbtn'] == 1): ?>checked <?php endif; ?>>                       
                        </div>
                        <div class="layui-form-mid layui-word-aux">控制播放器上方的全站通栏横幅广告（仅播放页有效），默认开启有需要可关闭。</div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">播放提示</label>
                        <div class="layui-input-inline w200">
                            <input type="radio" name="theme[play][nbtn]" value="0" title="关闭" <?php if($conch['theme']['play']['nbtn'] == 0): ?>checked <?php endif; ?>> 
                            <input type="radio" name="theme[play][nbtn]" value="1" title="开启" <?php if($conch['theme']['play']['nbtn'] == 1): ?>checked <?php endif; ?>>                       
                        </div>
                        <div class="layui-form-mid layui-word-aux">关闭后不显示对应模块和内容</div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">提示内容</label>
                        <div class="layui-input-inline w500">
                            <textarea name="theme[play][notice]" class="layui-textarea"  placeholder="请输入提示内容，支持html代码"><?php echo $conch['theme']['play']['notice']; ?></textarea>
                        </div>
                        <div class="layui-form-mid layui-word-aux">填写示例：&lt;li&gt;第1条提示&lt;/li&gt;&lt;li&gt;第2条提示&lt;/li&gt;，依此类推</div>
                    </div>
                    </div>
				 </fieldset>
                 <fieldset class="layui-elem-field">
				   <legend>筛选页面</legend>
				   <div class="layui-field-box">
                    <div class="layui-form-item">
                    <label class="layui-form-label">筛选规则</label>
                    <div class="layui-input-inline w500">
                        <input type="checkbox" lay-skin="primary" name="theme[show][filter][]" value="a" title="分类" <?php if(strpos($conch['theme']['show']['filter'],'a') !==false): ?>checked <?php endif; ?>>
                        <input type="checkbox" lay-skin="primary" name="theme[show][filter][]" value="b" title="类型" <?php if(strpos($conch['theme']['show']['filter'],'b') !==false): ?>checked <?php endif; ?>>
                        <input type="checkbox" lay-skin="primary" name="theme[show][filter][]" value="c" title="地区" <?php if(strpos($conch['theme']['show']['filter'],'c') !==false): ?>checked <?php endif; ?>>
                        <input type="checkbox" lay-skin="primary" name="theme[show][filter][]" value="d" title="年份" <?php if(strpos($conch['theme']['show']['filter'],'d') !==false): ?>checked <?php endif; ?>>
                        <input type="checkbox" lay-skin="primary" name="theme[show][filter][]" value="e" title="语言" <?php if(strpos($conch['theme']['show']['filter'],'e') !==false): ?>checked <?php endif; ?>>
                        <input type="checkbox" lay-skin="primary" name="theme[show][filter][]" value="f" title="字母" checked disabled>
                    </div>
                    <div class="layui-form-mid layui-word-aux">勾选需要的筛选规则</div>
                    </div>
				 </fieldset>
                 <fieldset class="layui-elem-field">
				   <legend>跳转页面</legend>
				   <div class="layui-field-box">
						<div class="layui-form-item">
                        <label class="layui-form-label">跳转状态</label>
                        <div class="layui-input-inline w200">
                            <input type="radio" name="theme[playlink][btn]" value="0" title="关闭" <?php if($conch['theme']['playlink']['btn'] == 0): ?>checked <?php endif; ?>>
                            <input type="radio" name="theme[playlink][btn]" value="1" title="开启" <?php if($conch['theme']['playlink']['btn'] == 1): ?>checked <?php endif; ?>>
                        </div>
                        <div class="layui-form-mid layui-word-aux">开启后，点击视频信息跳转到播放页，默认跳转内容页，对部分页面无效，例如：直播模块，横版样式等</div>
						</div>
				   </div>
				</fieldset>
                 <fieldset class="layui-elem-field">
				   <legend>排行模块</legend>
				   <div class="layui-field-box">
                    <div class="layui-form-item">
						<label class="layui-form-label">排行显示</label>
						<div class="layui-input-inline w200">
							<select name="theme[rank][vby]">
                                <option value="week" <?php if($conch['theme']['rank']['vby'] == 'week'): ?>selected <?php endif; ?>>周榜</option>
                                <option value="month" <?php if($conch['theme']['rank']['vby'] == 'month'): ?>selected <?php endif; ?>>月榜</option>
                                <option value="all" <?php if($conch['theme']['rank']['vby'] == 'all'): ?>selected <?php endif; ?>>总榜</option>
                            </select>
						</div>
						<div class="layui-form-mid layui-word-aux">可按不同时间显示排行榜，模块主要分布内容页/下载页/播放页</div>
					 </div>
				 </fieldset>
                 </div>
               <div class="layui-tab-item">
               <fieldset class="layui-elem-field">
				   <legend>顶部导航</legend>
				   <div class="layui-field-box">
					   <div class="layui-form-item">
						   <label class="layui-form-label">友情提示</label>
						   <div class="layui-input-block"><blockquote class="layui-elem-quote layui-quote-nm" style="padding: 8px;">建议最多显示7个菜单（包含开启的自定义菜单），请合理选择。</blockquote>
						   </div>
					   </div>
						<div class="layui-form-item">
                        <label class="layui-form-label">显示分类</label>
                        <div class="layui-input-inline w200">
                            <input type="text" name="theme[nav][id]" placeholder="导航分类ID" value="<?php echo $conch['theme']['nav']['id']; ?>" class="layui-input">
                        </div>
                        <div class="layui-form-mid layui-word-aux">要展示的导航分类，留空显示全部，多个ID用“,”分隔</div>
						</div>
						<div class="layui-form-item">
                        <label class="layui-form-label">自定义菜单</label>
                        <div class="layui-input-inline w200">
                            <input type="radio" name="theme[nav][zdybtn]" value="0" title="关闭" <?php if($conch['theme']['nav']['zdybtn'] == 0): ?>checked <?php endif; ?>> 
                            <input type="radio" name="theme[nav][zdybtn]" value="1" title="开启" <?php if($conch['theme']['nav']['zdybtn'] == 1): ?>checked <?php endif; ?>> 
                        </div>
                        <div class="layui-form-mid layui-word-aux">本按钮仅对自定义菜单有效，关闭后不显示对应模块和内容</div>
                        </div>
				   </div>
				</fieldset>
                <fieldset class="layui-elem-field">
				   <legend>自定义菜单</legend>
				   <div class="layui-field-box">
				   		<div class="layui-form-item">
						   <label class="layui-form-label">友情提示</label>
						   <div class="layui-input-block"><blockquote class="layui-elem-quote layui-quote-nm" style="padding: 8px;">可在顶部导航菜单基础上增加4个自定义链接（菜单开启状态下显示），同时在全部分类内显示</blockquote>
						   </div>
					   </div>
						<div class="layui-form-item">
                        <label class="layui-form-label">自定义1</label>
                        <div class="layui-input-inline w70">
							<select name="theme[nav][zdybtn1]">
                                <option value="0" <?php if($conch['theme']['nav']['zdybtn1'] == 0): ?>selected <?php endif; ?>>隐藏</option>
                                <option value="1" <?php if($conch['theme']['nav']['zdybtn1'] == 1): ?>selected <?php endif; ?>>显示</option>
                            </select>
						</div>
                        <div class="layui-input-inline w100">
                            <input type="text" name="theme[nav][zdyname1]" placeholder="菜单名称" value="<?php echo $conch['theme']['nav']['zdyname1']; ?>" class="layui-input author.qq362695000">
                        </div>
                        <div class="layui-input-inline w200">
                            <input type="text" name="theme[nav][zdylink1]" placeholder="菜单链接" value="<?php echo $conch['theme']['nav']['zdylink1']; ?>" class="layui-input">
                        </div>
                        <div class="layui-input-inline w200">
                            <input type="text" name="theme[nav][zdypic1]" placeholder="菜单图标地址或路径" value="<?php echo $conch['theme']['nav']['zdypic1']; ?>" class="layui-input upload-input">
                        </div>
                        <div class="layui-input-inline w100">
                            <button type="button" class="layui-btn layui-btn-primary layui-upload" lay-data="{data:{thumb:0,thumb_class:'theme[nav][zdypic1]'}}" id="upload1">选择文件</button>
                        </div>
                        <div class="layui-form-mid layui-word-aux">要展示的自定义导航菜单</div>
						</div>
						<div class="layui-form-item">
                        <label class="layui-form-label">自定义2</label>
                        <div class="layui-input-inline w70">
							<select name="theme[nav][zdybtn2]">
                                <option value="0" <?php if($conch['theme']['nav']['zdybtn2'] == 0): ?>selected <?php endif; ?>>隐藏</option>
                                <option value="1" <?php if($conch['theme']['nav']['zdybtn2'] == 1): ?>selected <?php endif; ?>>显示</option>
                            </select>
						</div>
                        <div class="layui-input-inline w100">
                            <input type="text" name="theme[nav][zdyname2]" placeholder="菜单名称" value="<?php echo $conch['theme']['nav']['zdyname2']; ?>" class="layui-input">
                        </div>
                        <div class="layui-input-inline w200">
                            <input type="text" name="theme[nav][zdylink2]" placeholder="菜单链接" value="<?php echo $conch['theme']['nav']['zdylink2']; ?>" class="layui-input">
                        </div>
                        <div class="layui-input-inline w200">
                            <input type="text" name="theme[nav][zdypic2]" placeholder="菜单图标地址或路径" value="<?php echo $conch['theme']['nav']['zdypic2']; ?>" class="layui-input upload-input">
                        </div>
                        <div class="layui-input-inline w100">
                            <button type="button" class="layui-btn layui-btn-primary layui-upload" lay-data="{data:{thumb:0,thumb_class:'theme[nav][zdypic2]'}}" id="upload1">选择文件</button>
                        </div>
                        <div class="layui-form-mid layui-word-aux">要展示的自定义导航菜单</div>
						</div>
						<div class="layui-form-item">
                        <label class="layui-form-label">自定义3</label>
                        <div class="layui-input-inline w70">
							<select name="theme[nav][zdybtn3]">
                                <option value="0" <?php if($conch['theme']['nav']['zdybtn3'] == 0): ?>selected <?php endif; ?>>隐藏</option>
                                <option value="1" <?php if($conch['theme']['nav']['zdybtn3'] == 1): ?>selected <?php endif; ?>>显示</option>
                            </select>
						</div>
                        <div class="layui-input-inline w100">
                            <input type="text" name="theme[nav][zdyname3]" placeholder="菜单名称" value="<?php echo $conch['theme']['nav']['zdyname3']; ?>" class="layui-input">
                        </div>
                        <div class="layui-input-inline w200">
                            <input type="text" name="theme[nav][zdylink3]" placeholder="菜单链接" value="<?php echo $conch['theme']['nav']['zdylink3']; ?>" class="layui-input">
                        </div>
                        <div class="layui-input-inline w200">
                            <input type="text" name="theme[nav][zdypic3]" placeholder="菜单图标地址或路径" value="<?php echo $conch['theme']['nav']['zdypic3']; ?>" class="layui-input upload-input">
                        </div>
                        <div class="layui-input-inline w100">
                            <button type="button" class="layui-btn layui-btn-primary layui-upload" lay-data="{data:{thumb:0,thumb_class:'theme[nav][zdypic3]'}}" id="upload1">选择文件</button>
                        </div>
                        <div class="layui-form-mid layui-word-aux">要展示的自定义导航菜单</div>
						</div>
						<div class="layui-form-item">
                        <label class="layui-form-label">自定义4</label>
                        <div class="layui-input-inline w70">
							<select name="theme[nav][zdybtn4]">
                                <option value="0" <?php if($conch['theme']['nav']['zdybtn4'] == 0): ?>selected <?php endif; ?>>隐藏</option>
                                <option value="1" <?php if($conch['theme']['nav']['zdybtn4'] == 1): ?>selected <?php endif; ?>>显示</option>
                            </select>
						</div>
                        <div class="layui-input-inline w100">
                            <input type="text" name="theme[nav][zdyname4]" placeholder="菜单名称" value="<?php echo $conch['theme']['nav']['zdyname4']; ?>" class="layui-input">
                        </div>
                        <div class="layui-input-inline w200">
                            <input type="text" name="theme[nav][zdylink4]" placeholder="菜单链接" value="<?php echo $conch['theme']['nav']['zdylink4']; ?>" class="layui-input">
                        </div>
                        <div class="layui-input-inline w200">
                            <input type="text" name="theme[nav][zdypic4]" placeholder="菜单图标地址或路径" value="<?php echo $conch['theme']['nav']['zdypic4']; ?>" class="layui-input upload-input">
                        </div>
                        <div class="layui-input-inline w100">
                            <button type="button" class="layui-btn layui-btn-primary layui-upload" lay-data="{data:{thumb:0,thumb_class:'theme[nav][zdypic4]'}}" id="upload1">选择文件</button>
                        </div>
                        <div class="layui-form-mid layui-word-aux">要展示的自定义导航菜单</div>
						</div>
				   </div>
				</fieldset>
                <fieldset class="layui-elem-field">
				   <legend>右上角菜单</legend>
				   <div class="layui-field-box">
					   <div class="layui-form-item">
						   <label class="layui-form-label">友情提示</label>
						   <div class="layui-input-block"><blockquote class="layui-elem-quote layui-quote-nm" style="padding: 8px;">建议最多显示5个菜单，请合理选择。</blockquote>
						   </div>
					   </div>
                    <div class="layui-form-item">
                    <label class="layui-form-label">可选页面</label>
                    <div class="layui-input-inline w600">
                        <input type="checkbox" lay-skin="primary" name="theme[rtnav][ym][]" value="a" title="历史" <?php if(strpos($conch['theme']['rtnav']['ym'],'a') !==false): ?>checked <?php endif; ?>>
                        <input type="checkbox" lay-skin="primary" name="theme[rtnav][ym][]" value="b" title="专题" <?php if(strpos($conch['theme']['rtnav']['ym'],'b') !==false): ?>checked <?php endif; ?>>
                        <input type="checkbox" lay-skin="primary" name="theme[rtnav][ym][]" value="c" title="留言" <?php if(strpos($conch['theme']['rtnav']['ym'],'c') !==false): ?>checked <?php endif; ?>>
                        <input type="checkbox" lay-skin="primary" name="theme[rtnav][ym][]" value="d" title="更新" <?php if(strpos($conch['theme']['rtnav']['ym'],'d') !==false): ?>checked <?php endif; ?>>
                        <input type="checkbox" lay-skin="primary" name="theme[rtnav][ym][]" value="e" title="排行" <?php if(strpos($conch['theme']['rtnav']['ym'],'e') !==false): ?>checked <?php endif; ?>>
                        <input type="checkbox" lay-skin="primary" name="theme[rtnav][ym][]" value="f" title="APP" <?php if(strpos($conch['theme']['rtnav']['ym'],'f') !==false): ?>checked <?php endif; ?>>
                        <input type="checkbox" lay-skin="primary" name="theme[rtnav][ym][]" value="g" title="QQ" <?php if(strpos($conch['theme']['rtnav']['ym'],'g') !==false): ?>checked <?php endif; ?>>
                        <input type="checkbox" lay-skin="primary" name="theme[rtnav][ym][]" value="h" title="微信" <?php if(strpos($conch['theme']['rtnav']['ym'],'h') !==false): ?>checked <?php endif; ?>>
                        <input type="checkbox" lay-skin="primary" name="theme[rtnav][ym][]" value="i" title="会员" <?php if(strpos($conch['theme']['rtnav']['ym'],'i') !==false): ?>checked <?php endif; ?>>
                    </div>
                    <div class="layui-form-mid layui-word-aux">建议不要勾选过多（对应菜单全站关闭，勾选将失效）</div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">自定义1</label>
                        <div class="layui-input-inline w70">
							<select name="theme[rtnav][zdybtn1]">
                                <option value="0" <?php if($conch['theme']['rtnav']['zdybtn1'] == 0): ?>selected <?php endif; ?>>隐藏</option>
                                <option value="1" <?php if($conch['theme']['rtnav']['zdybtn1'] == 1): ?>selected <?php endif; ?>>显示</option>
                            </select>
						</div>
                        <div class="layui-input-inline w100">
                            <input type="text" name="theme[rtnav][zdyname1]" placeholder="菜单名称" value="<?php echo $conch['theme']['rtnav']['zdyname1']; ?>" class="layui-input author.qq362695000">
                        </div>
                        <div class="layui-input-inline w200">
                            <input type="text" name="theme[rtnav][zdylink1]" placeholder="菜单链接" value="<?php echo $conch['theme']['rtnav']['zdylink1']; ?>" class="layui-input">
                        </div>
                        <div class="layui-form-mid layui-word-aux">要展示的右上角自定义菜单</div>
					</div>
			        <div class="layui-form-item">
                        <label class="layui-form-label">自定义2</label>
                        <div class="layui-input-inline w70">
							<select name="theme[rtnav][zdybtn2]">
                                <option value="0" <?php if($conch['theme']['rtnav']['zdybtn2'] == 0): ?>selected <?php endif; ?>>隐藏</option>
                                <option value="1" <?php if($conch['theme']['rtnav']['zdybtn2'] == 1): ?>selected <?php endif; ?>>显示</option>
                            </select>
						</div>
                        <div class="layui-input-inline w100">
                            <input type="text" name="theme[rtnav][zdyname2]" placeholder="菜单名称" value="<?php echo $conch['theme']['rtnav']['zdyname2']; ?>" class="layui-input">
                        </div>
                        <div class="layui-input-inline w200">
                            <input type="text" name="theme[rtnav][zdylink2]" placeholder="菜单链接" value="<?php echo $conch['theme']['rtnav']['zdylink2']; ?>" class="layui-input">
                        </div>
                        <div class="layui-form-mid layui-word-aux">要展示的右上角自定义菜单</div>
					</div>
				   </div>
				</fieldset>
                <fieldset class="layui-elem-field">
				   <legend>底部导航</legend>
				   <div class="layui-field-box">
					   <div class="layui-form-item">
						   <label class="layui-form-label">友情提示</label>
						   <div class="layui-input-block"><blockquote class="layui-elem-quote layui-quote-nm" style="padding: 8px;">建议最多显示5个菜单（可按分类/页面/自定义的自由组合形式），请合理选择。</blockquote>
						   </div>
					   </div>
					   <div class="layui-form-item">
                        <label class="layui-form-label">导航状态</label>
                        <div class="layui-input-inline w200">
                            <input type="radio" name="theme[fnav][btn]" value="0" title="关闭" <?php if($conch['theme']['fnav']['btn'] == 0): ?>checked <?php endif; ?>> 
                            <input type="radio" name="theme[fnav][btn]" value="1" title="开启" <?php if($conch['theme']['fnav']['btn'] == 1): ?>checked <?php endif; ?>>                       
                        </div>
                        <div class="layui-form-mid layui-word-aux">关闭后不显示对应模块和内容</div>
                    </div>
						<div class="layui-form-item">
                        <label class="layui-form-label">显示分类</label>
                        <div class="layui-input-inline w200">
                            <input type="text" name="theme[fnav][id]" placeholder="导航分类ID" value="<?php echo $conch['theme']['fnav']['id']; ?>" class="layui-input">
                        </div>
                        <div class="layui-form-mid layui-word-aux">要展示的导航分类，多个ID用“,”分隔</div>
						</div>
                    <div class="layui-form-item">
                    <label class="layui-form-label">可选页面</label>
                    <div class="layui-input-inline w600">
                        <input type="checkbox" lay-skin="primary" name="theme[fnav][ym][]" value="h" title="首页" <?php if(strpos($conch['theme']['fnav']['ym'],'h') !==false): ?>checked <?php endif; ?>>
                        <input type="checkbox" lay-skin="primary" name="theme[fnav][ym][]" value="a" title="专题" <?php if(strpos($conch['theme']['fnav']['ym'],'a') !==false): ?>checked <?php endif; ?>>
                        <input type="checkbox" lay-skin="primary" name="theme[fnav][ym][]" value="b" title="留言" <?php if(strpos($conch['theme']['fnav']['ym'],'b') !==false): ?>checked <?php endif; ?>>
                        <input type="checkbox" lay-skin="primary" name="theme[fnav][ym][]" value="c" title="更新" <?php if(strpos($conch['theme']['fnav']['ym'],'c') !==false): ?>checked <?php endif; ?>>
                        <input type="checkbox" lay-skin="primary" name="theme[fnav][ym][]" value="d" title="排行" <?php if(strpos($conch['theme']['fnav']['ym'],'d') !==false): ?>checked <?php endif; ?>>
                        <input type="checkbox" lay-skin="primary" name="theme[fnav][ym][]" value="e" title="明星" <?php if(strpos($conch['theme']['fnav']['ym'],'e') !==false): ?>checked <?php endif; ?>>
                        <input type="checkbox" lay-skin="primary" name="theme[fnav][ym][]" value="f" title="角色" <?php if(strpos($conch['theme']['fnav']['ym'],'f') !==false): ?>checked <?php endif; ?>>
                        <input type="checkbox" lay-skin="primary" name="theme[fnav][ym][]" value="h" title="剧情" <?php if(strpos($conch['theme']['fnav']['ym'],'h') !==false): ?>checked <?php endif; ?>>
                        <input type="checkbox" lay-skin="primary" name="theme[fnav][ym][]" value="g" title="会员" <?php if(strpos($conch['theme']['fnav']['ym'],'g') !==false): ?>checked <?php endif; ?>>
                    </div>
                    <div class="layui-form-mid layui-word-aux">建议不要勾选过多（对应菜单全站关闭，勾选将失效）</div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">自定义1</label>
                        <div class="layui-input-inline w70">
							<select name="theme[fnav][zdybtn1]">
                                <option value="0" <?php if($conch['theme']['fnav']['zdybtn1'] == 0): ?>selected <?php endif; ?>>隐藏</option>
                                <option value="1" <?php if($conch['theme']['fnav']['zdybtn1'] == 1): ?>selected <?php endif; ?>>显示</option>
                            </select>
						</div>
                        <div class="layui-input-inline w100">
                            <input type="text" name="theme[fnav][zdyname1]" placeholder="菜单名称" value="<?php echo $conch['theme']['fnav']['zdyname1']; ?>" class="layui-input">
                        </div>
                        <div class="layui-input-inline w200">
                            <input type="text" name="theme[fnav][zdylink1]" placeholder="菜单链接" value="<?php echo $conch['theme']['fnav']['zdylink1']; ?>" class="layui-input">
                        </div>
                        <div class="layui-form-mid layui-word-aux">要展示的底部自定义菜单</div>
					</div>
			        <div class="layui-form-item">
                        <label class="layui-form-label">自定义2</label>
                        <div class="layui-input-inline w70">
							<select name="theme[fnav][zdybtn2]">
                                <option value="0" <?php if($conch['theme']['fnav']['zdybtn2'] == 0): ?>selected <?php endif; ?>>隐藏</option>
                                <option value="1" <?php if($conch['theme']['fnav']['zdybtn2'] == 1): ?>selected <?php endif; ?>>显示</option>
                            </select>
						</div>
                        <div class="layui-input-inline w100">
                            <input type="text" name="theme[fnav][zdyname2]" placeholder="菜单名称" value="<?php echo $conch['theme']['fnav']['zdyname2']; ?>" class="layui-input">
                        </div>
                        <div class="layui-input-inline w200">
                            <input type="text" name="theme[fnav][zdylink2]" placeholder="菜单链接" value="<?php echo $conch['theme']['fnav']['zdylink2']; ?>" class="layui-input">
                        </div>
                        <div class="layui-form-mid layui-word-aux">要展示的底部自定义菜单</div>
					</div>
				   </div>
				</fieldset>
               </div>
               <div class="layui-tab-item">
               <fieldset class="layui-elem-field">
				   <legend>分享链接</legend>
				   <div class="layui-field-box">
                    <div class="layui-form-item">
						   <label class="layui-form-label">友情提示</label>
						   <div class="layui-input-block"><blockquote class="layui-elem-quote layui-quote-nm" style="padding: 8px;">如果使用短链接，请二选一填写。如果不使用短链接，请保持默认设置，如更改可能会出错。新浪和百度的短链填写方法略有不同。</blockquote>
						   </div>
					</div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">百度分享按钮</label>
                        <div class="layui-input-inline w70">
							<select name="theme[share][bdbtn]">
                                <option value="0" <?php if($conch['theme']['share']['bdbtn'] == 0): ?>selected <?php endif; ?>>隐藏</option>
                                <option value="1" <?php if($conch['theme']['share']['bdbtn'] == 1): ?>selected <?php endif; ?>>开启</option>
                            </select>
						</div>
                        <div class="layui-form-mid layui-word-aux">默认仅PC端显示，关闭后不显示对应模块和内容</div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">短链接API</label>
                        <div class="layui-input-inline w70">
							<select name="theme[share][api]">
                                <option value="sina" <?php if($conch['theme']['share']['api'] == 'sina'): ?>selected <?php endif; ?>>新浪</option>
                                <option value="bd" <?php if($conch['theme']['share']['api'] == 'bd'): ?>selected <?php endif; ?>>百度</option>
                            </select>
						</div>
                        <div class="layui-form-mid layui-word-aux">选择短链接生成方式</div>
					</div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">自定义域名</label>
                        <div class="layui-input-inline w400">
                            <input type="text" name="theme[share][link]" placeholder="例如：http://www.conch.vip" value="<?php echo $conch['theme']['share']['link']; ?>" class="layui-input">
                        </div>
                        <div class="layui-form-mid layui-word-aux">自定义分享域名，对链接分享有效，留空获取当前网站域名</div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">新浪接口</label>
                        <div class="layui-input-inline w400">
                            <input type="text" name="theme[share][apiurl]" placeholder="输入新浪接口链接，留空不启用" value="<?php echo $conch['theme']['share']['apiurl']; ?>" class="layui-input">
                        </div>
                        <div class="layui-form-mid layui-word-aux">请输入新浪接口连接，<a target="_blank" title="申请新浪接口" href="https://open.weibo.com/wiki/2/short_url/shorten">新浪接口申请</a></div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">百度接口</label>
                        <div class="layui-input-inline w300">
                            <input type="text" name="theme[share][tok]" placeholder="输入百度Token" value="<?php echo $conch['theme']['share']['tok']; ?>" class="layui-input">
                        </div>
                        <div class="layui-input-inline w100">
							<select name="theme[share][term]">
                                <option value="long" <?php if($conch['theme']['share']['term'] == 'long'): ?>selected <?php endif; ?>>永久有效</option>
                                <option value="one" <?php if($conch['theme']['share']['term'] == 'one'): ?>selected <?php endif; ?>>一年有效</option>
                            </select>
						</div>
                        <div class="layui-form-mid layui-word-aux">可选短链有效期，<a target="_blank" title="申请百度Token" href="https://dwz.cn/console/userinfo">百度Token申请</a></div>
                    </div>
				   </div>
				</fieldset>
                <fieldset class="layui-elem-field">
				   <legend>联系方式</legend>
				   <div class="layui-field-box">
                    <div class="layui-form-item">
                        <label class="layui-form-label">按钮状态</label>
                        <div class="layui-input-inline w200">
                            <input type="radio" name="theme[qq][btn]" value="0" title="关闭" <?php if($conch['theme']['qq']['btn'] == 0): ?>checked <?php endif; ?>>
                            <input type="radio" name="theme[qq][btn]" value="1" title="开启" <?php if($conch['theme']['qq']['btn'] == 1): ?>checked <?php endif; ?>>
                        </div>
                        <div class="layui-form-mid layui-word-aux">关闭后不显示对应模块和内容</div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">联系标题</label>
                        <div class="layui-input-inline w400">
                            <input type="text" name="theme[qq][title]" placeholder="输入要展示的标题" value="<?php echo $conch['theme']['qq']['title']; ?>" class="layui-input">
                        </div>
                        <div class="layui-form-mid layui-word-aux">要展示的标题，建议QQ或QQ群相关</div>
                    </div>
                        <div class="layui-form-item">
                        <label class="layui-form-label">联系链接</label>
                        <div class="layui-input-inline w400">
                            <input type="text" name="theme[qq][link]" placeholder="输入跳转链接" value="<?php echo $conch['theme']['qq']['link']; ?>" class="layui-input">
                        </div>
                        <div class="layui-form-mid layui-word-aux">建议QQ链接或QQ群链接</div>
                    </div>
				   </div>
				</fieldset>
                <fieldset class="layui-elem-field">
				   <legend>微信关注</legend>
				   <div class="layui-field-box">
                    <div class="layui-form-item">
                        <label class="layui-form-label">关注状态</label>
                        <div class="layui-input-inline w200">
                            <input type="radio" name="theme[weixin][btn]" value="0" title="关闭" <?php if($conch['theme']['weixin']['btn'] == 0): ?>checked <?php endif; ?>>
                            <input type="radio" name="theme[weixin][btn]" value="1" title="开启" <?php if($conch['theme']['weixin']['btn'] == 1): ?>checked <?php endif; ?>>
                        </div>
                        <div class="layui-form-mid layui-word-aux">关闭后不显示对应模块和内容</div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">按钮内容</label>
                        <div class="layui-input-inline w400">
                            <input type="text" name="theme[weixin][btntext]" placeholder="请输入内容" value="<?php echo $conch['theme']['weixin']['btntext']; ?>" class="layui-input">
                        </div>
                        <div class="layui-form-mid layui-word-aux">播放页显示的按钮内容</div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">微信二维码</label>
                        <div class="layui-input-inline w400">
                            <input type="text" name="theme[weixin][qrcode]" placeholder="微信二维码图片地址或路径" value="<?php echo $conch['theme']['weixin']['qrcode']; ?>" class="layui-input upload-input">
                        </div>
                        <div class="layui-input-inline ">
                            <button type="button" class="layui-btn layui-btn-primary layui-upload" lay-data="{data:{thumb:0,thumb_class:'theme[weixin][qrcode]'}}" id="upload1">选择文件</button>
                        </div>
                    </div>
                    <div class="layui-form-item">
                    <label class="layui-form-label">弹窗标题</label>
                    <div class="layui-input-inline w400">
                        <input type="text" name="theme[weixin][title]" placeholder="弹窗显示标题" value="<?php echo $conch['theme']['weixin']['title']; ?>" class="layui-input">
                    </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">弹窗内容</label>
                        <div class="layui-input-block">
                            <textarea name="theme[weixin][text]" class="layui-textarea"  placeholder="弹窗显示内容，支持html代码"><?php echo $conch['theme']['weixin']['text']; ?></textarea>
                        </div>
                    </div>
				   </div>
				</fieldset>
                <fieldset class="layui-elem-field">
				   <legend>赞赏设置</legend>
				   <div class="layui-field-box">
                    <div class="layui-form-item">
                        <label class="layui-form-label">赞赏状态</label>
                        <div class="layui-input-inline w200">
                            <input type="radio" name="theme[zans][btn]" value="0" title="关闭" <?php if($conch['theme']['zans']['btn'] == 0): ?>checked <?php endif; ?>>
                            <input type="radio" name="theme[zans][btn]" value="1" title="开启" <?php if($conch['theme']['zans']['btn'] == 1): ?>checked <?php endif; ?>>
                        </div>
                        <div class="layui-form-mid layui-word-aux">关闭后不显示对应模块和内容</div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">赞赏二维码</label>
                        <div class="layui-input-inline w400">
                            <input type="text" name="theme[zans][qrcode]" placeholder="赞赏二维码图片地址或路径" value="<?php echo $conch['theme']['zans']['qrcode']; ?>" class="layui-input upload-input">
                        </div>
                        <div class="layui-input-inline ">
                            <button type="button" class="layui-btn layui-btn-primary layui-upload" lay-data="{data:{thumb:0,thumb_class:'theme[zans][qrcode]'}}" id="upload1">选择文件</button>
                        </div>
                    </div>
                    <div class="layui-form-item">
                    <label class="layui-form-label">弹窗标题</label>
                    <div class="layui-input-inline w400">
                        <input type="text" name="theme[zans][title]" placeholder="弹窗显示标题" value="<?php echo $conch['theme']['zans']['title']; ?>" class="layui-input">
                    </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">弹窗内容</label>
                        <div class="layui-input-block">
                            <textarea name="theme[zans][text]" class="layui-textarea"  placeholder="弹窗显示内容，支持html代码"><?php echo $conch['theme']['zans']['text']; ?></textarea>
                        </div>
                    </div>
				   </div>
				</fieldset>  
                <fieldset class="layui-elem-field">
				   <legend>APP推广</legend>
				   <div class="layui-field-box">
                    <div class="layui-form-item">
                        <label class="layui-form-label">推广状态</label>
                        <div class="layui-input-inline w200">
                            <input type="radio" name="theme[apps][btn]" value="0" title="关闭" <?php if($conch['theme']['apps']['btn'] == 0): ?>checked <?php endif; ?>>
                            <input type="radio" name="theme[apps][btn]" value="1" title="开启" <?php if($conch['theme']['apps']['btn'] == 1): ?>checked <?php endif; ?>>
                        </div>
                        <div class="layui-form-mid layui-word-aux">关闭后不显示对应模块和内容</div>
                    </div>
                    <div class="layui-form-item">
                    <label class="layui-form-label">下载链接</label>
                    <div class="layui-input-inline w400">
                        <input type="text" name="theme[apps][link]" placeholder="APP下载链接地址" value="<?php echo $conch['theme']['apps']['link']; ?>" class="layui-input">
                    </div>
                    </div>
				   </div>
				</fieldset>
                 </div>
                 <div class="layui-tab-item">
                 <fieldset class="layui-elem-field">
				   <legend>排行页面</legend>
				   <div class="layui-field-box">
                     <div class="layui-form-item">
                        <label class="layui-form-label">页面状态</label>
                        <div class="layui-input-inline w200">
                            <input type="radio" name="theme[rank][btn]" value="0" title="关闭" <?php if($conch['theme']['rank']['btn'] == 0): ?>checked <?php endif; ?>>
                            <input type="radio" name="theme[rank][btn]" value="1" title="开启" <?php if($conch['theme']['rank']['btn'] == 1): ?>checked <?php endif; ?>>
                        </div>
                        <div class="layui-form-mid layui-word-aux">关闭后全站对应的排行入口将关闭</div>
                     </div>
                     <div class="layui-form-item">
                        <label class="layui-form-label">模块标题</label>
                        <div class="layui-input-inline w200">
                            <input type="text" name="theme[rank][title]" placeholder="请输入展示的标题" value="<?php echo $conch['theme']['rank']['title']; ?>" class="layui-input">
                        </div>
                        <div class="layui-form-mid layui-word-aux">要展示的标题，所有页面中的排行榜标题</div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">模块数量</label>
                        <div class="layui-input-inline w200">
                            <input type="text" name="theme[rank][num]" placeholder="请输入数量" value="<?php echo $conch['theme']['rank']['num']; ?>" class="layui-input">
                        </div>
                        <div class="layui-form-mid layui-word-aux">要展示的分类数量，建议：6或9或12</div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">显示分类</label>
                        <div class="layui-input-inline w200">
                            <input type="text" name="theme[rank][id]" placeholder="请输入分类ID" value="<?php echo $conch['theme']['rank']['id']; ?>" class="layui-input">
                        </div>
                        <div class="layui-form-mid layui-word-aux">要展示的分类ID，多个ID用“,”分隔</div>
                    </div>
				   </div>
				 </fieldset>
				 <fieldset class="layui-elem-field">
				   <legend>最近更新</legend>
				   <div class="layui-field-box">
                     <div class="layui-form-item">
                        <label class="layui-form-label">页面状态</label>
                        <div class="layui-input-inline w200">
                            <input type="radio" name="theme[map][btn]" value="0" title="关闭" <?php if($conch['theme']['map']['btn'] == 0): ?>checked <?php endif; ?>>
                            <input type="radio" name="theme[map][btn]" value="1" title="开启" <?php if($conch['theme']['map']['btn'] == 1): ?>checked <?php endif; ?>>
                        </div>
                        <div class="layui-form-mid layui-word-aux">关闭后全站对应的最近更新入口将关闭</div>
                     </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">模块标题</label>
                        <div class="layui-input-inline w200">
                            <input type="text" name="theme[map][title]" placeholder="请输入展示的标题" value="<?php echo $conch['theme']['map']['title']; ?>" class="layui-input">
                        </div>
                        <div class="layui-form-mid layui-word-aux">要展示的标题</div>
                    </div>
                     <div class="layui-form-item">
                        <label class="layui-form-label">显示分类</label>
                        <div class="layui-input-inline w200">
                            <input type="text" name="theme[map][id]" placeholder="请输入分类ID" value="<?php echo $conch['theme']['map']['id']; ?>" class="layui-input">
                        </div>
                        <div class="layui-form-mid layui-word-aux">要展示的分类ID，多个ID用“,”分隔，留空显示全部</div>
                    </div>
				   </div>
				 </fieldset>
                 <fieldset class="layui-elem-field">
				   <legend>个性配置</legend>
				   <div class="layui-field-box">
				   		<div class="layui-form-item">
							<label class="layui-form-label">主题颜色</label>
							<div class="layui-input-inline w200">
								<select name="theme[color][select]">
                                <option value="0" <?php if($conch['theme']['color']['select'] == 0): ?>selected <?php endif; ?>>默认主题</option>
                                <option value="green" <?php if($conch['theme']['color']['select'] == 'green'): ?>selected <?php endif; ?>>绿色主题</option>
                                <option value="blue" <?php if($conch['theme']['color']['select'] == 'blue'): ?>selected <?php endif; ?>>蓝色主题</option>
                                <option value="pink" <?php if($conch['theme']['color']['select'] == 'pink'): ?>selected <?php endif; ?>>粉色主题</option>
                                <option value="red" <?php if($conch['theme']['color']['select'] == 'red'): ?>selected <?php endif; ?>>红色主题</option>
                                <option value="gold" <?php if($conch['theme']['color']['select'] == 'gold'): ?>selected <?php endif; ?>>金色主题</option>
                            </select>
							</div>
							<div class="layui-input-inline">
                            <input type="radio" name="theme[color][sbtn]" value="0" title="关闭" <?php if($conch['theme']['color']['sbtn'] == 0): ?>checked <?php endif; ?>>
                            <input type="radio" name="theme[color][sbtn]" value="1" title="开启" <?php if($conch['theme']['color']['sbtn'] == 1): ?>checked <?php endif; ?>>
                            </div>
							<div class="layui-form-mid layui-word-aux">关闭前台主题颜色按钮，不影响后台设置</div>
						</div>
						<div class="layui-form-item">
							<label class="layui-form-label">浏览模式</label>
							<div class="layui-input-inline w200">
								<select name="theme[color][ms]">
                                <option value="white" <?php if($conch['theme']['color']['ms'] == 'white'): ?>selected <?php endif; ?>>白昼模式</option>
                                <option value="black" <?php if($conch['theme']['color']['ms'] == 'black'): ?>selected <?php endif; ?>>暗夜模式</option>
                            </select>
							</div>
							<div class="layui-input-inline">
                            <input type="radio" name="theme[color][mbtn]" value="0" title="关闭" <?php if($conch['theme']['color']['mbtn'] == 0): ?>checked <?php endif; ?>>
                            <input type="radio" name="theme[color][mbtn]" value="1" title="开启" <?php if($conch['theme']['color']['mbtn'] == 1): ?>checked <?php endif; ?>>
                            </div>
							<div class="layui-form-mid layui-word-aux">关闭前台浏览模式按钮，不影响后台设置</div>
						</div>
						<div class="layui-form-item">
                        <label class="layui-form-label">专题模块</label>
                        <div class="layui-input-inline w200">
                            <input type="text" name="theme[topic][title]" placeholder="请输入展示的标题" value="<?php echo $conch['theme']['topic']['title']; ?>" class="layui-input">
                        </div>
                        <div class="layui-input-inline">
                            <input type="radio" name="theme[topic][btn]" value="0" title="关闭" <?php if($conch['theme']['topic']['btn'] == 0): ?>checked <?php endif; ?>>
                            <input type="radio" name="theme[topic][btn]" value="1" title="开启" <?php if($conch['theme']['topic']['btn'] == 1): ?>checked <?php endif; ?>>
                        </div>
                        <div class="layui-form-mid layui-word-aux">关闭后全站对应的专题入口将关闭</div>
						</div>
						<div class="layui-form-item">
                        <label class="layui-form-label">明星模块</label>
                        <div class="layui-input-inline w200">
                            <input type="text" name="theme[actor][title]" placeholder="请输入展示的标题" value="<?php echo $conch['theme']['actor']['title']; ?>" class="layui-input">
                        </div>
                        <div class="layui-input-inline">
                            <input type="radio" name="theme[actor][btn]" value="0" title="关闭" <?php if($conch['theme']['actor']['btn'] == 0): ?>checked <?php endif; ?>>
                            <input type="radio" name="theme[actor][btn]" value="1" title="开启" <?php if($conch['theme']['actor']['btn'] == 1): ?>checked <?php endif; ?>>
                        </div>
                        <div class="layui-form-mid layui-word-aux">关闭后全站对应的明星入口将关闭</div>
						</div>
						<div class="layui-form-item">
                        <label class="layui-form-label">角色模块</label>
                        <div class="layui-input-inline w200">
                            <input type="text" name="theme[role][title]" placeholder="请输入展示的标题" value="<?php echo $conch['theme']['role']['title']; ?>" class="layui-input">
                        </div>
                        <div class="layui-input-inline">
                            <input type="radio" name="theme[role][btn]" value="0" title="关闭" <?php if($conch['theme']['role']['btn'] == 0): ?>checked <?php endif; ?>>
                            <input type="radio" name="theme[role][btn]" value="1" title="开启" <?php if($conch['theme']['role']['btn'] == 1): ?>checked <?php endif; ?>>
                        </div>
                        <div class="layui-form-mid layui-word-aux">关闭后全站对应的角色入口将关闭</div>
						</div>
						<div class="layui-form-item">
                        <label class="layui-form-label">剧情模块</label>
                        <div class="layui-input-inline w200">
                            <input type="text" name="theme[plot][title]" placeholder="请输入展示的标题" value="<?php echo $conch['theme']['plot']['title']; ?>" class="layui-input">
                        </div>
                        <div class="layui-input-inline">
                            <input type="radio" name="theme[plot][btn]" value="0" title="关闭" <?php if($conch['theme']['plot']['btn'] == 0): ?>checked <?php endif; ?>>
                            <input type="radio" name="theme[plot][btn]" value="1" title="开启" <?php if($conch['theme']['plot']['btn'] == 1): ?>checked <?php endif; ?>>
                        </div>
                        <div class="layui-form-mid layui-word-aux">关闭后全站对应的剧情入口将关闭</div>
						</div>
						<div class="layui-form-item">
                        <label class="layui-form-label">留言模块</label>
                        <div class="layui-input-inline w200">
                            <input type="text" name="theme[gbook][title]" placeholder="请输入展示的标题" value="<?php echo $conch['theme']['gbook']['title']; ?>" class="layui-input">
                        </div>
                        <div class="layui-form-mid layui-word-aux">留言展示的标题，如需关闭留言请到CMS的留言设置</div>
						</div>
						<div class="layui-form-item">
                        <label class="layui-form-label">会员模块</label>
                        <div class="layui-input-inline w200">
                            <input type="text" name="theme[user][title]" placeholder="请输入展示的标题" value="<?php echo $conch['theme']['user']['title']; ?>" class="layui-input">
                        </div>
                        <div class="layui-form-mid layui-word-aux">会员展示的标题，如需关闭会员请到CMS的会员设置</div>
						</div>
						<div class="layui-form-item">
							<label class="layui-form-label">网站字体</label>
							<div class="layui-input-inline w200">
								<select name="theme[font]">
                                <option value="0" <?php if($conch['theme']['font'] == 0): ?>selected <?php endif; ?>>简体</option>
                                <option value="1" <?php if($conch['theme']['font'] == 1): ?>selected <?php endif; ?>>繁體</option>
                            </select>
							</div>
							<div class="layui-form-mid layui-word-aux">网站字体繁简设置</div>
						</div>
				   </div>
				</fieldset>
                 </div>
                 <div class="layui-tab-item">
                 <blockquote class="layui-elem-quote">
						<p>特别说明：所需标签都已包含，无需填写。主要填写需要优化的标题，关键词等等。</p>
				 </blockquote>
                 <fieldset class="layui-elem-field">
				   <legend>网站首页</legend>
				   <div class="layui-field-box">
                 		<div class="layui-form-item">
                        <label class="layui-form-label">标题</label>
                        <div class="layui-input-inline w600">
                            <input type="text" name="theme[seos][index_name]" placeholder="标题title" value="<?php echo $conch['theme']['seos']['index_name']; ?>" class="layui-input">
                        </div>
						</div>
                        <div class="layui-form-item">
                        <label class="layui-form-label">关键字</label>
                        <div class="layui-input-inline w600">
                            <input type="text" name="theme[seos][index_key]" placeholder="关键字keywords" value="<?php echo $conch['theme']['seos']['index_key']; ?>" class="layui-input">
                        </div>
						</div>
                        <div class="layui-form-item">
                        <label class="layui-form-label">描述</label>
                        <div class="layui-input-inline w600">
                            <input type="text" name="theme[seos][index_des]" placeholder="描述description" value="<?php echo $conch['theme']['seos']['index_des']; ?>" class="layui-input">
                        </div>
						</div>
                   </div>
                   </fieldset>
                   <fieldset class="layui-elem-field">
				   <legend>视频详情</legend>
				   <div class="layui-field-box">
                 		<div class="layui-form-item">
                        <label class="layui-form-label">标题</label>
                        <div class="layui-input-inline w600">
                            <input type="text" name="theme[seos][detail_name]" placeholder="标题title" value="<?php echo $conch['theme']['seos']['detail_name']; ?>" class="layui-input">
                        </div>
						</div>
                        <div class="layui-form-item">
                        <label class="layui-form-label">关键字</label>
                        <div class="layui-input-inline w600">
                            <input type="text" name="theme[seos][detail_key]" placeholder="关键字keywords" value="<?php echo $conch['theme']['seos']['detail_key']; ?>" class="layui-input">
                        </div>
						</div>
                        <div class="layui-form-item">
                        <label class="layui-form-label">描述</label>
                        <div class="layui-input-inline w600">
                            <input type="text" name="theme[seos][detail_des]" placeholder="描述description" value="<?php echo $conch['theme']['seos']['detail_des']; ?>" class="layui-input">
                        </div>
						</div>
                   </div>
                   </fieldset>
                   <fieldset class="layui-elem-field">
				   <legend>视频播放</legend>
				   <div class="layui-field-box">
                 		<div class="layui-form-item">
                        <label class="layui-form-label">标题</label>
                        <div class="layui-input-inline w600">
                            <input type="text" name="theme[seos][play_name]" placeholder="标题title" value="<?php echo $conch['theme']['seos']['play_name']; ?>" class="layui-input">
                        </div>
						</div>
                        <div class="layui-form-item">
                        <label class="layui-form-label">关键字</label>
                        <div class="layui-input-inline w600">
                            <input type="text" name="theme[seos][play_key]" placeholder="关键字keywords" value="<?php echo $conch['theme']['seos']['play_key']; ?>" class="layui-input">
                        </div>
						</div>
                        <div class="layui-form-item">
                        <label class="layui-form-label">描述</label>
                        <div class="layui-input-inline w600">
                            <input type="text" name="theme[seos][play_des]" placeholder="描述description" value="<?php echo $conch['theme']['seos']['plays_des']; ?>" class="layui-input">
                        </div>
						</div>
                   </div>
                   </fieldset>
                   <fieldset class="layui-elem-field">
				   <legend>视频下载</legend>
				   <div class="layui-field-box">
                 		<div class="layui-form-item">
                        <label class="layui-form-label">标题</label>
                        <div class="layui-input-inline w600">
                            <input type="text" name="theme[seos][down_name]" placeholder="标题title" value="<?php echo $conch['theme']['seos']['down_name']; ?>" class="layui-input">
                        </div>
						</div>
                        <div class="layui-form-item">
                        <label class="layui-form-label">关键字</label>
                        <div class="layui-input-inline w600">
                            <input type="text" name="theme[seos][down_key]" placeholder="关键字keywords" value="<?php echo $conch['theme']['seos']['down_key']; ?>" class="layui-input">
                        </div>
						</div>
                        <div class="layui-form-item">
                        <label class="layui-form-label">描述</label>
                        <div class="layui-input-inline w600">
                            <input type="text" name="theme[seos][down_des]" placeholder="描述description" value="<?php echo $conch['theme']['seos']['down_des']; ?>" class="layui-input">
                        </div>
						</div>
                   </div>
                   </fieldset>
                   <fieldset class="layui-elem-field">
				   <legend>文章首页</legend>
				   <div class="layui-field-box">
                 		<div class="layui-form-item">
                        <label class="layui-form-label">标题</label>
                        <div class="layui-input-inline w600">
                            <input type="text" name="theme[seos][arti_name]" placeholder="标题title" value="<?php echo $conch['theme']['seos']['arti_name']; ?>" class="layui-input">
                        </div>
						</div>
                        <div class="layui-form-item">
                        <label class="layui-form-label">关键字</label>
                        <div class="layui-input-inline w600">
                            <input type="text" name="theme[seos][arti_key]" placeholder="关键字keywords" value="<?php echo $conch['theme']['seos']['arti_key']; ?>" class="layui-input">
                        </div>
						</div>
                        <div class="layui-form-item">
                        <label class="layui-form-label">描述</label>
                        <div class="layui-input-inline w600">
                            <input type="text" name="theme[seos][arti_des]" placeholder="描述description" value="<?php echo $conch['theme']['seos']['arti_des']; ?>" class="layui-input">
                        </div>
						</div>
                   </div>
                   </fieldset>
                   <fieldset class="layui-elem-field">
				   <legend>文章详情</legend>
				   <div class="layui-field-box">
                 		<div class="layui-form-item">
                        <label class="layui-form-label">标题</label>
                        <div class="layui-input-inline w600">
                            <input type="text" name="theme[seos][artd_name]" placeholder="标题title" value="<?php echo $conch['theme']['seos']['artd_name']; ?>" class="layui-input">
                        </div>
						</div>
                        <div class="layui-form-item">
                        <label class="layui-form-label">关键字</label>
                        <div class="layui-input-inline w600">
                            <input type="text" name="theme[seos][artd_key]" placeholder="关键字keywords" value="<?php echo $conch['theme']['seos']['artd_key']; ?>" class="layui-input">
                        </div>
						</div>
                        <div class="layui-form-item">
                        <label class="layui-form-label">描述</label>
                        <div class="layui-input-inline w600">
                            <input type="text" name="theme[seos][artd_des]" placeholder="描述description" value="<?php echo $conch['theme']['seos']['artd_des']; ?>" class="layui-input">
                        </div>
						</div>
                   </div>
                   </fieldset>
                   <fieldset class="layui-elem-field">
				   <legend>专题首页</legend>
				   <div class="layui-field-box">
                 		<div class="layui-form-item">
                        <label class="layui-form-label">标题</label>
                        <div class="layui-input-inline w600">
                            <input type="text" name="theme[seos][topic_name]" placeholder="标题title" value="<?php echo $conch['theme']['seos']['topic_name']; ?>" class="layui-input">
                        </div>
						</div>
                        <div class="layui-form-item">
                        <label class="layui-form-label">关键字</label>
                        <div class="layui-input-inline w600">
                            <input type="text" name="theme[seos][topic_key]" placeholder="关键字keywords" value="<?php echo $conch['theme']['seos']['topic_key']; ?>" class="layui-input">
                        </div>
						</div>
                        <div class="layui-form-item">
                        <label class="layui-form-label">描述</label>
                        <div class="layui-input-inline w600">
                            <input type="text" name="theme[seos][topic_des]" placeholder="描述description" value="<?php echo $conch['theme']['seos']['topic_des']; ?>" class="layui-input">
                        </div>
						</div>
                   </div>
                   </fieldset>
                   <fieldset class="layui-elem-field">
				   <legend>专题首页</legend>
				   <div class="layui-field-box">
                 		<div class="layui-form-item">
                        <label class="layui-form-label">标题</label>
                        <div class="layui-input-inline w600">
                            <input type="text" name="theme[seos][topic_name]" placeholder="标题title" value="<?php echo $conch['theme']['seos']['topic_name']; ?>" class="layui-input">
                        </div>
						</div>
                        <div class="layui-form-item">
                        <label class="layui-form-label">关键字</label>
                        <div class="layui-input-inline w600">
                            <input type="text" name="theme[seos][topic_key]" placeholder="关键字keywords" value="<?php echo $conch['theme']['seos']['topic_key']; ?>" class="layui-input">
                        </div>
						</div>
                        <div class="layui-form-item">
                        <label class="layui-form-label">描述</label>
                        <div class="layui-input-inline w600">
                            <input type="text" name="theme[seos][topic_des]" placeholder="描述description" value="<?php echo $conch['theme']['seos']['topic_des']; ?>" class="layui-input">
                        </div>
						</div>
                   </div>
                   </fieldset>
                   <fieldset class="layui-elem-field">
				   <legend>专题详情</legend>
				   <div class="layui-field-box">
                 		<div class="layui-form-item">
                        <label class="layui-form-label">标题</label>
                        <div class="layui-input-inline w600">
                            <input type="text" name="theme[seos][topicd_name]" placeholder="标题title" value="<?php echo $conch['theme']['seos']['topicd_name']; ?>" class="layui-input">
                        </div>
						</div>
                        <div class="layui-form-item">
                        <label class="layui-form-label">关键字</label>
                        <div class="layui-input-inline w600">
                            <input type="text" name="theme[seos][topicd_key]" placeholder="关键字keywords" value="<?php echo $conch['theme']['seos']['topicd_key']; ?>" class="layui-input">
                        </div>
						</div>
                        <div class="layui-form-item">
                        <label class="layui-form-label">描述</label>
                        <div class="layui-input-inline w600">
                            <input type="text" name="theme[seos][topicd_des]" placeholder="描述description" value="<?php echo $conch['theme']['seos']['topicd_des']; ?>" class="layui-input">
                        </div>
						</div>
                   </div>
                   </fieldset>                 
                 </div>
                 <div class="layui-tab-item">
                 <fieldset class="layui-elem-field">
				   <legend>全站广告开关</legend>
				   <div class="layui-field-box">
                    <div class="layui-form-item">
                        <label class="layui-form-label">广告状态</label>
                        <div class="layui-input-inline w400">
                            <input type="radio" name="theme[ads][btn]" value="0" title="关闭广告" <?php if($conch['theme']['ads']['btn'] == 0): ?>checked <?php endif; ?>>
                            <input type="radio" name="theme[ads][btn]" value="1" title="开启广告" <?php if($conch['theme']['ads']['btn'] == 1): ?>checked <?php endif; ?>>
                            <input type="radio" name="theme[ads][btn]" value="2" title="VIP会员隐藏" <?php if($conch['theme']['ads']['btn'] == 2): ?>checked <?php endif; ?>>
                        </div>
                        <div class="layui-form-mid layui-word-aux">关闭后不显示全站广告</div>
                    </div>
				   </div>
				 </fieldset>
                 <fieldset class="layui-elem-field">
				   <legend>全站底部浮动广告</legend>
				   <div class="layui-field-box">
                    <div class="layui-form-item">
                        <label class="layui-form-label">广告状态</label>
                        <div class="layui-input-inline w200">
                            <input type="radio" name="theme[ads][bottom][btn]" value="0" title="关闭" <?php if($conch['theme']['ads']['bottom']['btn'] == 0): ?>checked <?php endif; ?>>
                            <input type="radio" name="theme[ads][bottom][btn]" value="1" title="开启" <?php if($conch['theme']['ads']['bottom']['btn'] == 1): ?>checked <?php endif; ?>>
                        </div>
                        <div class="layui-form-mid layui-word-aux">关闭后不显示对应模块和内容，底部浮动广告由iframe引入</div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">广告代码</label>
                        <div class="layui-input-block">
                            <textarea name="theme[ads][bottom][content]" class="layui-textarea"  placeholder="请输入广告代码"><?php echo $conch['theme']['ads']['bottom']['content']; ?></textarea>
                        </div>
                    </div>
				   </div>
				 </fieldset>
                 <fieldset class="layui-elem-field">
				   <legend>全站通栏横幅广告</legend>
				   <div class="layui-field-box">
                    <div class="layui-form-item">
                        <label class="layui-form-label">广告状态</label>
                        <div class="layui-input-inline w200">
                            <input type="radio" name="theme[ads][all][btn]" value="0" title="关闭" <?php if($conch['theme']['ads']['all']['btn'] == 0): ?>checked <?php endif; ?>>
                            <input type="radio" name="theme[ads][all][btn]" value="1" title="开启" <?php if($conch['theme']['ads']['all']['btn'] == 1): ?>checked <?php endif; ?>>
                        </div>
                        <div class="layui-form-mid layui-word-aux">关闭后不显示对应模块和内容</div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">广告代码</label>
                        <div class="layui-input-block">
                            <textarea name="theme[ads][all][content]" class="layui-textarea"  placeholder="请输入广告代码"><?php echo $conch['theme']['ads']['all']['content']; ?></textarea>
                        </div>
                    </div>
				   </div>
				 </fieldset>
				 <fieldset class="layui-elem-field">
				   <legend>首页幻灯片广告</legend>
				   <div class="layui-field-box">
                    <div class="layui-form-item">
                        <label class="layui-form-label">广告状态</label>
                        <div class="layui-input-inline w200">
                            <input type="radio" name="theme[ads][banner][btn]" value="0" title="关闭" <?php if($conch['theme']['ads']['banner']['btn'] == 0): ?>checked <?php endif; ?>>
                            <input type="radio" name="theme[ads][banner][btn]" value="1" title="开启" <?php if($conch['theme']['ads']['banner']['btn'] == 1): ?>checked <?php endif; ?>>
                        </div>
                        <div class="layui-form-mid layui-word-aux">关闭后不显示对应模块和内容</div>
                        <label class="layui-form-label">广告提示标签</label>
                        <div class="layui-input-inline w200" style="margin: 0;">
                            <input type="radio" name="theme[ads][banner][tbtn]" value="0" title="关闭" <?php if($conch['theme']['ads']['banner']['tbtn'] == 0): ?>checked <?php endif; ?>>
                            <input type="radio" name="theme[ads][banner][tbtn]" value="1" title="开启" <?php if($conch['theme']['ads']['banner']['tbtn'] == 1): ?>checked <?php endif; ?>>
                        </div>
                    </div>
                    <div class="layui-form-item">
                    <label class="layui-form-label">广告标题</label>
                    <div class="layui-input-inline w300">
                        <input type="text" name="theme[ads][banner][title]" placeholder="广告标题" value="<?php echo $conch['theme']['ads']['banner']['title']; ?>" class="layui-input">
                    </div>
                    </div>
                    <div class="layui-form-item">
                    <label class="layui-form-label">广告副标</label>
                    <div class="layui-input-inline w300">
                        <input type="text" name="theme[ads][banner][sub]" placeholder="广告副标题" value="<?php echo $conch['theme']['ads']['banner']['sub']; ?>" class="layui-input">
                    </div>
                    </div>
                    <div class="layui-form-item">
                    <label class="layui-form-label">广告链接</label>
                    <div class="layui-input-inline w300">
                        <input type="text" name="theme[ads][banner][link]" placeholder="广告链接" value="<?php echo $conch['theme']['ads']['banner']['link']; ?>" class="layui-input">
                    </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">广告图片</label>
                        <div class="layui-input-inline w300">
                            <input type="text" name="theme[ads][banner][pic]]" placeholder="图片地址或路径" value="<?php echo $conch['theme']['ads']['banner']['pic']; ?>" class="layui-input upload-input">
                        </div>
                        <div class="layui-input-inline ">
                            <button type="button" class="layui-btn layui-btn-primary layui-upload" lay-data="{data:{thumb:0,thumb_class:'theme[ads][banner][pic]'}}" id="upload1">选择文件</button>
                        </div>
                    </div>
				   </div>
				 </fieldset>
				 <fieldset class="layui-elem-field">
				   <legend>视频页横幅广告</legend>
				   <div class="layui-field-box">
                    <div class="layui-form-item">
                        <label class="layui-form-label">广告状态</label>
                        <div class="layui-input-inline w200">
                            <input type="radio" name="theme[ads][vod_w][btn]" value="0" title="关闭" <?php if($conch['theme']['ads']['vod_w']['btn'] == 0): ?>checked <?php endif; ?>>
                            <input type="radio" name="theme[ads][vod_w][btn]" value="1" title="开启" <?php if($conch['theme']['ads']['vod_w']['btn'] == 1): ?>checked <?php endif; ?>>
                        </div>
                        <div class="layui-form-mid layui-word-aux">关闭后不显示对应模块和内容</div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">广告代码</label>
                        <div class="layui-input-block">
                            <textarea name="theme[ads][vod_w][content]" class="layui-textarea"  placeholder="请输入广告代码"><?php echo $conch['theme']['ads']['vod_w']['content']; ?></textarea>
                        </div>
                    </div>
				   </div>
				 </fieldset>
				 <fieldset class="layui-elem-field">
				   <legend>视频页侧边栏广告</legend>
				   <div class="layui-field-box">
                    <div class="layui-form-item">
                        <label class="layui-form-label">广告状态</label>
                        <div class="layui-input-inline w200">
                            <input type="radio" name="theme[ads][vod_r][btn]" value="0" title="关闭" <?php if($conch['theme']['ads']['vod_r']['btn'] == 0): ?>checked <?php endif; ?>>
                            <input type="radio" name="theme[ads][vod_r][btn]" value="1" title="开启" <?php if($conch['theme']['ads']['vod_r']['btn'] == 1): ?>checked <?php endif; ?>>
                        </div>
                        <div class="layui-form-mid layui-word-aux">关闭后不显示对应模块和内容（本模块仅PC端显示）</div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">广告代码</label>
                        <div class="layui-input-block">
                            <textarea name="theme[ads][vod_r][content]" class="layui-textarea"  placeholder="请输入广告代码"><?php echo $conch['theme']['ads']['vod_r']['content']; ?></textarea>
                        </div>
                    </div>
				   </div>
				 </fieldset>
				 <fieldset class="layui-elem-field">
				   <legend>视频播放页列表栏广告</legend>
				   <div class="layui-field-box">
                    <div class="layui-form-item">
                        <label class="layui-form-label">广告状态</label>
                        <div class="layui-input-inline w200">
                            <input type="radio" name="theme[ads][play][btn]" value="0" title="关闭" <?php if($conch['theme']['ads']['play']['btn'] == 0): ?>checked <?php endif; ?>>
                            <input type="radio" name="theme[ads][play][btn]" value="1" title="开启" <?php if($conch['theme']['ads']['play']['btn'] == 1): ?>checked <?php endif; ?>>
                        </div>
                        <div class="layui-form-mid layui-word-aux">关闭后不显示对应模块和内容</div>
                        <label class="layui-form-label">广告提示标签</label>
                        <div class="layui-input-inline w200" style="margin: 0;">
                            <input type="radio" name="theme[ads][play][tbtn]" value="0" title="关闭" <?php if($conch['theme']['ads']['play']['tbtn'] == 0): ?>checked <?php endif; ?>>
                            <input type="radio" name="theme[ads][play][tbtn]" value="1" title="开启" <?php if($conch['theme']['ads']['play']['tbtn'] == 1): ?>checked <?php endif; ?>>
                        </div>
                    </div>
                    <div class="layui-form-item">
                    <label class="layui-form-label">广告标题</label>
                    <div class="layui-input-inline w300">
                        <input type="text" name="theme[ads][play][title]" placeholder="广告标题" value="<?php echo $conch['theme']['ads']['play']['title']; ?>" class="layui-input">
                    </div>
                    </div>
                    <div class="layui-form-item">
                    <label class="layui-form-label">广告链接</label>
                    <div class="layui-input-inline w300">
                        <input type="text" name="theme[ads][play][link]" placeholder="广告链接" value="<?php echo $conch['theme']['ads']['play']['link']; ?>" class="layui-input">
                    </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">广告图片</label>
                        <div class="layui-input-inline w300">
                            <input type="text" name="theme[ads][play][pic]" placeholder="图片地址或路径" value="<?php echo $conch['theme']['ads']['play']['pic']; ?>" class="layui-input upload-input">
                        </div>
                        <div class="layui-input-inline ">
                            <button type="button" class="layui-btn layui-btn-primary layui-upload" lay-data="{data:{thumb:0,thumb_class:'theme[ads][play][pic]'}}" id="upload1">选择文件</button>
                        </div>
                    </div>
				   </div>
				 </fieldset>
				 <fieldset class="layui-elem-field">
				   <legend>视频搜索页列表栏广告</legend>
				   <div class="layui-field-box">
                    <div class="layui-form-item">
                        <label class="layui-form-label">广告状态</label>
                        <div class="layui-input-inline w200">
                            <input type="radio" name="theme[ads][search_v][btn]" value="0" title="关闭" <?php if($conch['theme']['ads']['search_v']['btn'] == 0): ?>checked <?php endif; ?>>
                            <input type="radio" name="theme[ads][search_v][btn]" value="1" title="开启" <?php if($conch['theme']['ads']['search_v']['btn'] == 1): ?>checked <?php endif; ?>>
                        </div>
                        <div class="layui-form-mid layui-word-aux">关闭后不显示对应模块和内容</div>
                        <label class="layui-form-label">广告提示标签</label>
                        <div class="layui-input-inline w200" style="margin: 0;">
                            <input type="radio" name="theme[ads][search_v][tbtn]" value="0" title="关闭" <?php if($conch['theme']['ads']['search_v']['tbtn'] == 0): ?>checked <?php endif; ?>>
                            <input type="radio" name="theme[ads][search_v][tbtn]" value="1" title="开启" <?php if($conch['theme']['ads']['search_v']['tbtn'] == 1): ?>checked <?php endif; ?>>
                        </div>
                    </div>
                    <div class="layui-form-item">
                    <label class="layui-form-label">广告标题</label>
                    <div class="layui-input-inline w300">
                        <input type="text" name="theme[ads][search_v][title]" placeholder="广告标题" value="<?php echo $conch['theme']['ads']['search_v']['title']; ?>" class="layui-input">
                    </div>
                    </div>
                    <div class="layui-form-item">
                    <label class="layui-form-label">广告副标</label>
                    <div class="layui-input-inline w300">
                        <input type="text" name="theme[ads][search_v][sub]" placeholder="广告副标题" value="<?php echo $conch['theme']['ads']['search_v']['sub']; ?>" class="layui-input">
                    </div>
                    </div>
                    <div class="layui-form-item">
                    <label class="layui-form-label">广告链接</label>
                    <div class="layui-input-inline w300">
                        <input type="text" name="theme[ads][search_v][link]" placeholder="广告链接" value="<?php echo $conch['theme']['ads']['search_v']['link']; ?>" class="layui-input">
                    </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">广告图片</label>
                        <div class="layui-input-inline w300">
                            <input type="text" name="theme[ads][search_v][pic]]" placeholder="图片地址或路径" value="<?php echo $conch['theme']['ads']['search_v']['pic']; ?>" class="layui-input upload-input">
                        </div>
                        <div class="layui-input-inline ">
                            <button type="button" class="layui-btn layui-btn-primary layui-upload" lay-data="{data:{thumb:0,thumb_class:'theme[ads][search_v][pic]'}}" id="upload1">选择文件</button>
                        </div>
                    </div>
				   </div>
				 </fieldset>
				 <fieldset class="layui-elem-field">
				   <legend>文章页横幅广告</legend>
				   <div class="layui-field-box">
                    <div class="layui-form-item">
                        <label class="layui-form-label">广告状态</label>
                        <div class="layui-input-inline w200">
                            <input type="radio" name="theme[ads][art_w][btn]" value="0" title="关闭" <?php if($conch['theme']['ads']['art_w']['btn'] == 0): ?>checked <?php endif; ?>>
                            <input type="radio" name="theme[ads][art_w][btn]" value="1" title="开启" <?php if($conch['theme']['ads']['art_w']['btn'] == 1): ?>checked <?php endif; ?>>
                        </div>
                        <div class="layui-form-mid layui-word-aux">关闭后不显示对应模块和内容</div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">广告代码</label>
                        <div class="layui-input-block">
                            <textarea name="theme[ads][art_w][content]" class="layui-textarea"  placeholder="请输入广告代码"><?php echo $conch['theme']['ads']['art_w']['content']; ?></textarea>
                        </div>
                    </div>
				   </div>
				 </fieldset>
				 <fieldset class="layui-elem-field">
				   <legend>文章页侧边栏广告</legend>
				   <div class="layui-field-box">
                    <div class="layui-form-item">
                        <label class="layui-form-label">广告状态</label>
                        <div class="layui-input-inline w200">
                            <input type="radio" name="theme[ads][art_r][btn]" value="0" title="关闭" <?php if($conch['theme']['ads']['art_r']['btn'] == 0): ?>checked <?php endif; ?>>
                            <input type="radio" name="theme[ads][art_r][btn]" value="1" title="开启" <?php if($conch['theme']['ads']['art_r']['btn'] == 1): ?>checked <?php endif; ?>>
                        </div>
                        <div class="layui-form-mid layui-word-aux">关闭后不显示对应模块和内容（本模块仅PC端显示）</div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">广告代码</label>
                        <div class="layui-input-block">
                            <textarea name="theme[ads][art_r][content]" class="layui-textarea"  placeholder="请输入广告代码"><?php echo $conch['theme']['ads']['art_r']['content']; ?></textarea>
                        </div>
                    </div>
				   </div>
				 </fieldset>
				 <fieldset class="layui-elem-field">
				   <legend>文章页侧列表广告</legend>
				   <div class="layui-field-box">
                    <div class="layui-form-item">
                        <label class="layui-form-label">广告状态</label>
                        <div class="layui-input-inline w200">
                            <input type="radio" name="theme[ads][artlist][btn]" value="0" title="关闭" <?php if($conch['theme']['ads']['artlist']['btn'] == 0): ?>checked <?php endif; ?>>
                            <input type="radio" name="theme[ads][artlist][btn]" value="1" title="开启" <?php if($conch['theme']['ads']['artlist']['btn'] == 1): ?>checked <?php endif; ?>>
                        </div>
                        <div class="layui-form-mid layui-word-aux">关闭后不显示对应模块和内容</div>
                        <label class="layui-form-label">广告提示标签</label>
                        <div class="layui-input-inline w200" style="margin: 0;">
                            <input type="radio" name="theme[ads][artlist][tbtn]" value="0" title="关闭" <?php if($conch['theme']['ads']['artlist']['tbtn'] == 0): ?>checked <?php endif; ?>>
                            <input type="radio" name="theme[ads][artlist][tbtn]" value="1" title="开启" <?php if($conch['theme']['ads']['artlist']['tbtn'] == 1): ?>checked <?php endif; ?>>
                        </div>
                    </div>
                    <div class="layui-form-item">
                    <label class="layui-form-label">广告标题</label>
                    <div class="layui-input-inline w300">
                        <input type="text" name="theme[ads][artlist][title]" placeholder="广告标题" value="<?php echo $conch['theme']['ads']['artlist']['title']; ?>" class="layui-input">
                    </div>
                    </div>
                    <div class="layui-form-item">
                    <label class="layui-form-label">广告链接</label>
                    <div class="layui-input-inline w300">
                        <input type="text" name="theme[ads][artlist][link]" placeholder="广告链接" value="<?php echo $conch['theme']['ads']['artlist']['link']; ?>" class="layui-input">
                    </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">广告图片</label>
                        <div class="layui-input-inline w300">
                            <input type="text" name="theme[ads][artlist][pic]" placeholder="图片地址或路径" value="<?php echo $conch['theme']['ads']['artlist']['pic']; ?>" class="layui-input upload-input">
                        </div>
                        <div class="layui-input-inline ">
                            <button type="button" class="layui-btn layui-btn-primary layui-upload" lay-data="{data:{thumb:0,thumb_class:'theme[ads][artlist][pic]'}}" id="upload1">选择文件</button>
                        </div>
                    </div>
				   </div>
				 </fieldset>
				 <fieldset class="layui-elem-field">
				   <legend>会员中心推荐有礼宣传图</legend>
				   <div class="layui-field-box">
                    <div class="layui-form-item">
                        <label class="layui-form-label">图片状态</label>
                        <div class="layui-input-inline w200">
                            <input type="radio" name="theme[ads][user][btn]" value="0" title="关闭" <?php if($conch['theme']['ads']['user']['btn'] == 0): ?>checked <?php endif; ?>>
                            <input type="radio" name="theme[ads][user][btn]" value="1" title="开启" <?php if($conch['theme']['ads']['user']['btn'] == 1): ?>checked <?php endif; ?>>
                        </div>
                        <div class="layui-form-mid layui-word-aux">不添加图片关闭即可</div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">图片地址</label>
                        <div class="layui-input-inline w300">
                            <input type="text" name="theme[ads][user][pic]" placeholder="图片地址或路径，建议尺寸640px*100px" value="<?php echo $conch['theme']['ads']['user']['pic']; ?>" class="layui-input upload-input">
                        </div>
                        <div class="layui-input-inline ">
                            <button type="button" class="layui-btn layui-btn-primary layui-upload" lay-data="{data:{thumb:0,thumb_class:'theme[ads][user][pic]'}}" id="upload1">选择文件</button>
                        </div>
                    </div>
				   </div>
				 </fieldset>
                </div>
                <div class="layui-form-item">
                    <div class="layui-input-block" style="margin-left: 145px;">
                        <button type="submit" class="layui-btn layui-btn-normal" lay-submit="" lay-filter="formSubmit">保存设置</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<script type="text/javascript" src="/static/js/admin_common.js"></script>
<script type="text/javascript">
    layui.use(['form','upload', 'layer'], function(){
        // 操作对象
        var form = layui.form
                , layer = layui.layer
                , upload = layui.upload;

        form.on('radio(cache_type)',function(data){
            $('.row_cache_server').hide();
           if(data.value=='memcache' || data.value=='redis' || data.value=='memcached'){
               $('.row_cache_server').show();
           }
        });
        upload.render({
            elem: '.layui-upload'
            ,url: "<?php echo url('upload/upload'); ?>?flag=site"
            ,method: 'post'
            ,before: function(input) {
                layer.msg('文件上传中...', {time:3000000});
            },done: function(res, index, upload) {
                var obj = this.item;
                if (res.code == 0) {
                    layer.msg(res.msg);
                    return false;
                }
                layer.closeAll();
                var input = $(obj).parent().parent().find('.upload-input');
                if ($(obj).attr('lay-type') == 'image') {
                    input.siblings('img').attr('src', res.data.file).show();
                }
                input.val(res.data.file);

                if(res.data.thumb_class !=''){
                    $('.'+ res.data.thumb_class).val(res.data.thumb[0].file);
                }
            }
        });
        $('.upload-input').hover(function (e){
            var e = window.event || e;
            var imgsrc = $(this).val();
            if(imgsrc.trim()==""){ return; }
            var left = e.clientX+document.body.scrollLeft+20;
            var top = e.clientY+document.body.scrollTop+20;
            $(".showpic").css({left:left,top:top,display:""});
            if(imgsrc.indexOf('://')<0){ imgsrc = ROOT_PATH + '/' + imgsrc;	} else{ imgsrc = imgsrc.replace('mac:','http:'); }
            $(".showpic_img").attr("src", imgsrc);
        },function (e){
            $(".showpic").css("display","none");
        });

    });
</script>
</body>
</html>