<?php
$muchoConfig = array(
    // 基本设置
    'logo' => '金豆子影视',    // LOGO 设置：若为空则显示图片（后台上传即可），不为空则显示文字
    
    'theme' => 'colorful',    // 默认主题设置：樱桃：cherry ；橘子：orange ；葡萄：grape ；青柠：cyan ；炫彩：colorful ；黑金：black ；
    
    'islider' => '1',    // 首页今日推荐： 1 为滑动显示 0为排列显示 默认滑动·
    
    'islast' => '0',    // 首页最新更新（带排行榜）： 1 为开启 0为关闭 默认关闭·
    
    'isweekday' => '0',    // 首页一周放送表： 1 为开启 0为关闭 默认开启·
    
    'isads' => '1',    // 会员免广告（不包括默认会员）： 1 为开启 0为关闭 默认开启·
    
    'ishowpc' => '0',    // PC端显示404（建议开启）： 1 为开启 0为关闭 默认开启·
    
    'islazy' => '0',    // 图片懒加载： 1 为开启 0为关闭 默认关闭·
    
    'isload' => '1',    // Load加载动画： 1 为开启 0为关闭 默认开启·
    
    // 网站公告设置
    'gonggao' => array(
        
        'isopen' => '0', // 1 为开启 0为关闭 默认开启
        
        'leftlogo' => array(
            
            'state' => '0', // 左侧图片 1 为开启 0为关闭 默认关闭
            
            'img' => '/template/JOELEO/asset/img/gonggao.png', // 图片地址
        ),
        
        'info' => array(
            array(
                'msg' => '这是网站的一条公告示例示例示例示例', //网站公告短信息，最长17个字（带标点符号）
                'url' => 'http://cc.leeleo.top/api1.php?url='  //网站公告指向链接
            ),
            array(
                'msg' => '这是网站的一条公告示例示例示例示例', //网站公告短信息，最长17个字（带标点符号）
                'url' => 'http://cc.leeleo.top/api1.php?url='  //网站公告指向链接
            ),
            array(
                'msg' => '这是网站的一条公告示例示例示例示例', //网站公告短信息，最长17个字（带标点符号）
                'url' => 'http://cc.leeleo.top/api1.php?url='  //网站公告指向链接
            ),
        ),
    ),   
    // 大淘客单页设置
    'dataoke' => array(
        
        'state' => '0', // 是否在更多中显示： 1 为显示 0为不显示 默认显示·
        
        'siteurl' => 'mall.leeleo.vip', // 大淘客站点域名，没有的百度大淘客安装
        
        'siteuid' => '651170', // (打开你的大淘客网站，随便点击一个商品，如地址：http://大淘客域名/index.php?r=l/d&id=16557894&u=651170，u=后边的即为你的uid)
    ),
    // 版权和赞赏弹窗设置
    'dialogs' => array(
        array(
            'copyright' => $maccms['site_name'].'-所展示的影音资源，均来源于互联网，所有影片版权归相关影音公司所有。本站只提供Web页面索引服务，慕乔视频并不参与视频片源的制作、修改、上传服务。如果发现有侵犯到您的权益，请发相关文件至邮箱：'.$maccms['site_email'].'我们会在收到邮件后第一时间删除相关侵权内容！', 
            
            'title' => '感谢赞赏', 
            
            'msg' => '您的支持就是我永远的动力，这里有两种方式可以打赏哦，您是选择支付宝还是微信呢？', 
            
            'btn1' => '支付宝', 
            
            'img1' => '/template/JOELEO/asset/img/zfb.png',  
            
            'btn2' => '微信', 
            
            'img2' => '/template/JOELEO/asset/img/wx.png',  
        ),
    ),   
    // 多解析线路设置（直接增加即可）
    'isapi' => '1',    // 开启切换线路： 1 为开启 0为关闭 默认开启·
    
    'videoapi' => array(
            array(
                'name' => '线路一',
                'url' => 'http://cc.leeleo.top/api1.php?url='
            ),
            array(
                'name' => '线路二',
                'url' => 'http://cc.leeleo.top/api2.php?url='
            ),
            array(
                'name' => '线路三',
                'url' => 'http://cc.leeleo.top/api3.php?url='
            ),
        ),
);
?>