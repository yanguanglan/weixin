<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
<title>功能介绍－LANRAIN 微信帮手 微信公众账号</title>
<meta name="keywords" content="LANRAIN 微信帮手 微信公众账号 微信公众平台 微信公众账号开发 微信二次开发 微信接口开发 微信托管服务 微信营销 微信公众平台接口开发"/>
<meta name="description" content="微信公众平台接口开发、托管、营销活动、二次开发"/>
<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/style.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/index.css"/>
<!-- add new html css -->
<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/indexhome.css"/>
<!--[if lte IE 6]>
<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/ie6.css"/>
<![endif]-->
<!-- old html mode -->
<script type="text/javascript">window.onerror=function(){return true;}</script>
<script type="text/javascript" src="<?php echo RES;?>/js/lang.js"></script>
<script type="text/javascript" src="<?php echo RES;?>/js/config.js"></script>
<script type="text/javascript" src="<?php echo RES;?>/js/jquery183.js"></script>
<script type="text/javascript" src="<?php echo RES;?>/js/common.js"></script>
<script type="text/javascript" src="<?php echo RES;?>/js/page.js"></script>
<script type="text/javascript" src="<?php echo RES;?>/js/jquery.lazyload.js"></script>
<!-- add new html mode -->
<script type="text/javascript" src="<?php echo RES;?>/js/html5.js"></script>
<script type="text/javascript" src="<?php echo RES;?>/js/project.js"></script>
<script type="text/javascript" src="<?php echo RES;?>/js/carouFredSel.js"></script>
<script type="text/javascript" src="<?php echo RES;?>/js/wei-index.js"></script>
<script type="text/javascript">
GoMobile('');
var searchid = 5;
</script>
</head>
<body>
<div class="topbg">
<div class="top">
<div class="toplink">
<div class="welcome">欢迎使用微信多用户微信营销服务平台!</div>
    <div class="memberinfo"  id="destoon_member">	
		<?php if($_SESSION[uid]==false): ?>你好&nbsp;&nbsp;<span class="f_red">游客</span>&nbsp;&nbsp;
			<a href="<?php echo U('Index/login');?>">登录</a>&nbsp;&nbsp;|&nbsp;&nbsp;
			<a href="<?php echo U('Index/login');?>">注册</a>
			<?php else: ?>
			你好,<a href="/#" hidefocus="true"  ><span style="color:red"><?php echo (session('uname')); ?></span></a>（uid:<?php echo (session('uid')); ?>）
			<a href="/#" onclick="Javascript:window.open('<?php echo U('Admin/Admin/logout');?>','_blank')" >退出</a><?php endif; ?>	
	</div>
</div>
    <div class="logo">
        <div style="float:left"></div>
            <h1><a href="/" title="多用户微信营销服务平台"><img src="<?php echo RES;?>/images/logo-lanrain.png" /></a></h1>
            <div class="navr">
        <ul id="topMenu">           
			 <li <?php if((ACTION_NAME == 'index') and (GROUP_NAME == 'Home')): ?>class="menuon"<?php endif; ?> ><a href="/" >首页</a></li>
                <li <?php if((ACTION_NAME) == "fc"): ?>class="menuon"<?php endif; ?>><a href="<?php echo U('Home/Index/fc');?>">功能介绍</a></li>
                <li <?php if((ACTION_NAME) == "about"): ?>class="menuon"<?php endif; ?>><a href="<?php echo U('Home/Index/about');?>">关于我们</a></li>
                <li <?php if((ACTION_NAME) == "price"): ?>class="menuon"<?php endif; ?>><a href="<?php echo U('Home/Index/price');?>">资费说明</a></li>
                <li <?php if((ACTION_NAME) == "common"): ?>class="menuon"<?php endif; ?>><a href="<?php echo U('Home/Index/common');?>">微信导航</a></li>
                <li <?php if((GROUP_NAME) == "User"): ?>class="menuon"<?php endif; ?>><a href="<?php echo U('User/Index/index');?>">管理中心</a></li>
                <li <?php if((ACTION_NAME) == "help"): ?>class="menuon"<?php endif; ?>><a href="<?php echo U('Home/Index/help');?>">帮助中心</a></li>
            
            </ul>
        </div>
        </div>
    </div>
</div>
<div class="banner nbanner"></div>
<div class="main">
   <div class="pos"> 当前位置&raquo;<a href="<?php echo C('site_url');?> "><?php echo C('site_name');?></a> &raquo; <a href="">帮助中心</a></div>
<style type="text/css">
.normalTitle {
    border-bottom: 1px solid #D7DDE6;
    border-radius: 10px 10px 0 0;
    padding: 20px;
    text-shadow: 0 1px 1px #FFFFFF;
}
.normalTitle h2, .panelTitle h2, .processTitle h2 {
    font-size: 20px;
    font-weight: bold;
}
.content {
 margin: 0 auto;
    text-align: left;
    width: 707px;
}
.article, .intro, .download, .document, .developer {
margin:40px 0px;

background:#f5f6f7;
box-shadow:0px 1px 3px #ccc;
}
.section {
padding:0 0 20px 0;
margin:0 0 20px 0;
border-bottom:1px solid #eee;
overflow: hidden;
}
.lastSection {
border:none;
margin-bottom:0px;
}
.normalTitle {
border-bottom:1px solid #d7dde6;
border-radius:10px 10px 0 0;
padding:20px 40px;
text-shadow:0 1px 1px #fff;
}
.normalContent {
background:#fff;/*border-radius:0 0 10px 10px;*/
padding:40px;
}
.normalTitle h2, .panelTitle h2, .processTitle h2 {
font-size:20px;
font-weight:bold;
}
.green{ color:#090}
.red{ color: #F00}
.collapsible {
    background: none repeat scroll 0 0 #FFFFFF;
    padding: 20px;
}
.CollapsiblePanel {
    margin-bottom: 10px;
    width: 870px;
}
.CollapsiblePanelTab {
    background: url(style/images/img/arrow_unclick.png) no-repeat scroll 820px 20px #FFFFFF;
    border: 1px solid #DEDEDE;
    border-radius: 3px 3px 3px 3px;
    color: #626B8A;
    cursor: pointer;
    font-size: 18px;
    padding: 20px 40px 20px 20px;
    text-shadow: 0 1px 0 white;
}
.CollapsiblePanelTab.hover {
    background: url(style/images/img/arrow_unclick.png) no-repeat scroll 820px 20px #D7DDE6;
border: 1px solid #C1C9D4;
}
.CollapsiblePanelTab.clicked {
    background: url(style/images/img/arrow_click.png) no-repeat scroll 820px 20px #D7DDE6;
border: 1px solid #C1C9D4;
}
.CollapsiblePanelContent {
    display: none;
    overflow: hidden;
}
.CollapsiblePanelContent .normalContent {
    padding: 20px 20px 0;
}
</style>
<div class="content" style="width:985px;">
<div class="document" style="margin-top:0px;">
            <div class="normalTitle"><h2>如何为微信公众号配置接口？</h2></div>
                <div class="collapsible">
<div class="section lastSection">
<p>请务必认真阅读以下2步内容，才能更有效的完成配置工作，有疑问的请联系QQ：<?php echo C('site_qq');?>提问。<br/><?php if($_GET['token'] != ''): ?>你的接口URL是：<font color="red"><?php echo C('site_url');?>/index.php/api/<?php echo $_GET['token']; ?></font><br>您的token是：<font color="red"><?php echo $_GET['token']; ?></font><?php endif; ?></p>
</div>
                <div id="CollapsiblePanel2" class="CollapsiblePanel">
                    <div class="CollapsiblePanelTab clicked">第一步、在<?php echo C('site_name');?>绑定你的微信公众号。<span></span></div>
                    <div style="" class="">
                        <div class="articleContent catalogHome normalContent">
                            <div class="section lastSection">
                                <p>1、注册并登录<a href="<?php echo U('Index/login');?>"><?php echo C('site_name');?>接口平台</a></p>
                                <p>2、添加公众号 → 功能管理 → 勾选要开启的功能</p>									
								<p><img src="<?php echo STATICS;?>/help/help01.jpg" width="790px"></p>
								<p><img src="<?php echo STATICS;?>/help/help0.jpg" width="790px"></p>
                            </div>
                        </div>
                    </div>                        
                </div>
<div id="CollapsiblePanel3" class="CollapsiblePanel">
                        <div class="CollapsiblePanelTab clicked">第二步、到微信公众平台设置接口。<span></span></div>
                        <div style="" class="">
                            <div class="articleContent catalogHome normalContent">
                                <div class="section lastSection">
                                   <div class="section lastSection">
                                    <p>1、登录 <a href="http://mp.weixin.qq.com/">微信公众平台</a>（<a href="http://mp.weixin.qq.com/">http://mp.weixin.qq.com/</a>），进行身份认证，填写信息，提交身份证。</p>
                                    <p>认证后，点击高级功能 → 进入开发模式</p><br>
                                    <p><img src="<?php echo STATICS;?>/help/help002.jpg" width="790px"></p><br>
									<p>2、点击"成为开发者"按钮</p>
									<p><img src="<?php echo STATICS;?>/help/help003.jpg" width="790px"></p><br>
									<p>3、填写接口配置信息</p>
									<?php if($_GET['token'] == ''): ?><p>比如你<?php echo C('site_name');?>平台上的地址是<?php echo C('site_url');?>/index.php/api/demo</p>
									<p>那么URL就是<?php echo C('site_url');?>/INDEX.PHP/api/demo</p>
									<?php else: ?>
									<p>你的URL是 <font color="red"><?php echo C('site_url');?>/index.php/api/<?php echo $_GET['token']; ?></font></p><?php endif; ?>
									<p>Token填写 <font color="red"><?php echo $_GET['token']; ?></font></p>
									<p><img src="<?php echo STATICS;?>/help/help004.jpg" width="790px"></p><br>
									<p>4、确认开启</p>
									<p>5、在手机上用微信给你的公众号输入"帮助"，测试你的接口是否配置正常！</p><br>									
                                </div>
                              
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
    </div>
    </div>
<!--结束-->
</div>
<script type="text/javascript">try{Dd('webpage_7').className='left_menu_on';}catch(e){}</script>
<div class="footer">
	<div class="footer-content clearfix">
		
		<div class="copyright">
			Copyright © 2011-2013 www.weilgo.com. All Rights Reserved 创想公司版权所有 
		</div>
	</div>
</div>
<script>
	function feedbackSubmit(){
		var $data = {
			feedback: $('#feedback-text').val(),
			email: $('#feedback-input').val(),
			url: self.location.href
		};
		$.post('/site/feedback', $data, function(rs){
			alert(rs.error);
			if (200 == rs.code)
			{
				$('#feedback, #feedback_cover').toggleClass('on');
			}
		}, 'json');
	}
</script>
<!--公告信息-->
	<div id="notice_mask"></div>
	<div id="notice_message" style="position: absolute; left: 373.5px; top: 20%;">
		<div class="title">公 告<a onclick="javascript:jQuery('#notice_mask').hide(),jQuery('#notice_message').hide();">×</a></div>
		<div class="content">
			<pre style="white-space:pre-wrap;"><p style="text-align:center;">
	创想官网模板管理改版啦！
</p>
<p>
	随着您们对于模板需求的增加，微官网模板也越来越多，为了以后创想能够有越来越多的漂亮模板，创想团队对模板进行的详细划分，以便您们能更加便捷的选择所需模板。
</p>
<p>
	<span style="line-height:1.5;">亮点一：系统通过对创想7万多用户使用模板的数据统计，筛选出前10名的热门模板推荐给大家，让您能够一键就能找到最钟爱的模板，便捷又高效。</span>
</p>
<p>
	<span style="line-height:1.5;">亮点二：模板进行了详细的划分，分别有经典大方、简约时尚、五彩斑斓、个性定制、VIP尊享，风格各异，根据您们官网模板的需求赶紧来体验吧！</span>
</p>
<p>
	VIP尊享仅支持增强版、至尊版及行业版商户，如果您没有权限，并且已经使用此类模板，请谨慎替换，一旦替换则不能再次使用，给您带来的不便尽请谅解。
</p>
<p style="text-align:right;">
	创想
</p>
<p style="text-align:right;">
	2013-12-08
</p></pre>
		</div>
	</div>

<script type="text/javascript">
	$(document).ready(function(){
		$('#notice_mask').click(function(){
			$('#notice_mask').hide();
			$('#notice_qrcode').hide();
			$('#notice_message').hide();
		});

		$(window).resize(function(){
			$('#notice_qrcode').css({
				position:'absolute',
				left: ($(window).width() - $('#notice_qrcode').outerWidth())/2,
				top: ($(window).height() - $('#notice_qrcode').outerHeight())/2
			});

			$('#notice_message').css({
				position:'absolute',
				left: ($(window).width() - $('#notice_message').outerWidth())/2,
				top: ($(window).height() - $('#notice_message').outerHeight())/2
			});
		});
	});
</script>
</body>
</html>