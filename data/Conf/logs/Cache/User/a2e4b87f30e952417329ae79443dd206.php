<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> <?php echo C('site_title');?> <?php echo C('site_name');?></title>
<meta name="keywords" content="<?php echo C('keyword');?>" />
<meta name="description" content="<?php echo C('content');?>" />
<meta http-equiv="MSThemeCompatible" content="Yes" />
<script>var SITEURL='';</script>
<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/style_2_common.css?BPm" />
<script src="<?php echo RES;?>/js/common.js" type="text/javascript"></script>
</head>
<body oncontextmenu="return false" onselectstart ="return false" id="nv_member" class="pg_CURMODULE" onkeydown="if(event.keyCode==27) return false;">

<div class="topbg">
<div class="top">
<div class="toplink">
<style>
.topbg{BACKGROUND-IMAGE: url(<?php echo RES;?>/images/top.png);BACKGROUND-REPEAT: repeat-x; height:124px; box-shadow:0 0 10px #000;-moz-box-shadow:0 0 10px #000;-webkit-box-shadow:0 0 10px #000;}
.top {
	MARGIN: 0px auto; WIDTH: 988px; HEIGHT: 124px;
}

.top .toplink{ height:27px; line-height:27px; color:#999; font-size:12px;}
.top .toplink .welcome{ float:left;}
.top .toplink .memberinfo{ float:right;}
.top .toplink .memberinfo a{ color:#999;}
.top .toplink .memberinfo a:hover{ color:#F90}
.top .toplink .memberinfo a.green{ background:none; color:#0C0}

.top .logo {WIDTH: 990px;COLOR: #333; height:70px;  FONT-SIZE:16px; PADDING-TOP:25px}
.top h1{ font-size:25px; margin-top:20px; float:left; width:230px; margin:0; padding:0;}
.top .navr {WIDTH:750px; float:right; overflow:hidden; margin-top:10px;}
.top .navr ul{ width:850px;}
.navr LI {TEXT-ALIGN:center;FLOAT: left;HEIGHT:32px;FONT-SIZE:1em;width:103px; margin-right:5px;}
.navr LI A {width:103px;TEXT-ALIGN:center; LINE-HEIGHT:30px; FLOAT: left;HEIGHT:32px;COLOR: #333; FONT-SIZE: 1em;TEXT-DECORATION: none
}
.navr LI A:hover {BACKGROUND: url(<?php echo RES;?>/images/navhover.gif) center no-repeat;color:#009900;}
.navr LI.menuon {BACKGROUND: url(<?php echo RES;?>/images/navon.gif) center no-repeat; display:block;width:103px;HEIGHT:32px;}
.navr LI.menuon a{color:#FFF;}
.navr LI.menuon a:hover{BACKGROUND: url(img/navon.gif) center no-repeat;}
.banner{height:200px; text-align:center; border-bottom:2px solid #ddd;}
.hbanner{ background: url(img/h2003070126.jpg) center no-repeat #B4B4B4;}
.gbanner{ background: url(img/h2003070127.jpg) center no-repeat #264C79;}
.jbanner{ background: url(img/h2003070128.jpg) center no-repeat #E2EAD5;}
.dbanner{ background: url(img/h2003070129.jpg) center no-repeat #009ADA;}
.nbanner{ background: url(img/h2003070130.jpg) center no-repeat #ffca22;}
</style>
<div class="welcome">欢迎使用微信营销平台!</div>
    <div class="memberinfo"  id="destoon_member">	
		<?php if($_SESSION[uid]==false): ?><a href="<?php echo U('Index/login');?>">登录</a>&nbsp;&nbsp;|&nbsp;&nbsp;
			<a href="<?php echo U('Index/login');?>">注册</a>
			<?php else: ?>
			你好,<a href="/#" hidefocus="true"  ><span style="color:red"><?php echo (session('uname')); ?></span></a>（uid:<?php echo (session('uid')); ?>）
			<a href="/#" onclick="Javascript:window.open('<?php echo U('Admin/Admin/logout');?>','_blank')" >退出</a><?php endif; ?>	
	</div>
</div>
    <div class="logo">
        <div style="float:left"></div>
            <h1><a href="/" title="多用户微信营销服务平台"><img src="tpl/Home/lanrain/common/images/logo-lanrain.png" /></a></h1>
            <div class="navr">
        <ul id="topMenu">           
            <li <?php if((ACTION_NAME == 'index') and (GROUP_NAME == 'Home')): ?>class="menuon"<?php endif; ?> ><a href="/">首页</a></li>
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
<div id="aaa"></div>


<div id="mu" class="cl"></div>
</div>
</div>
<div id="aaa"></div>

<div id="wp" class="wp"><link href="<?php echo RES;?>/css/style.css" rel="stylesheet" type="text/css" />
 <div class="contentmanage">
    <div class="developer">
       <div class="appTitle normalTitle" style="padding: 20px;">
        <h2>管理平台</h2>
        <div class="accountInfo">
        
        </div>
        <div class="clr"></div>
      </div>
      <div class="tableContent">
        <!--左侧功能菜单-->
        <div class="sideBar">
          <div class="catalogList">
            <ul>
            	<li class="subCatalogList"> <a href="<?php echo U('Index/useredit');?>">修改密码</a> </li>
				<li class="selected" > <a href="<?php echo U('Index/index');?>">我的公众号</a></li>
				<li class=" subCatalogList "> <a href="<?php echo U('Index/add');?>">添加公众号</a> </li>
				<li class=" subCatalogList "> <a href="<?php echo U('Alipay/index');?>">会员充值</a> </li>
            </ul>
          </div>
        </div>

<div class="content">
          <div class="cLineB"><h4>添加微信公众号</h4></div>
          <form method="post" action="<?php echo U('User/Index/upsave');?>" enctype="multipart/form-data">
          <input type="hidden" name="id" value="<?php echo ($info["id"]); ?>">
          <div class="msgWrap">
            <table class="userinfoArea" border="0" cellspacing="0" cellpadding="0" width="100%">
              <thead>
                <tr>
                  <th><span class="red">*</span>公众号名称：</th>
                  <td><input type="text" required="" class="px" name="wxname" value="<?php echo ($info["wxname"]); ?>" tabindex="1" size="25">
                  </td>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th><span class="red">*</span>公众号原始id：</th>
                  <td><input type="text" required="" name="wxid" value="<?php echo ($info["wxid"]); ?>" onmouseup="this.value=this.value.replace('_430','')" class="px" tabindex="1" size="25">　<span class="red">请认真填写，错了不能修改。</span>比如：gh_423dwjkeww3 <a href="http://jingyan.baidu.com/article/63f23628eb6b490209ab3d6b.html" target="_blank"><img src="<?php echo RES;?>/images/help.png" class="vm helpimg" title="帮助"></a></td>
                </tr>
                <tr>
                  <th><span class="red">*</span>微信号：</th>
                  <td><input type="text" required="" name="weixin" value="<?php echo ($info["weixin"]); ?>" class="px" tabindex="1" size="25">　比如：lentu123 </td>
                </tr>
                  <tr>
                  <th>头像地址（url）:</th>
                  <td><input class="px" name="headerpic" value="<?php echo ($info["headerpic"]); ?>" size="60">  请填写图片外链地址 <a href="forum.php?mod=viewthread&amp;tid=69&amp;extra=page%3D1" target="_blank"><img src="<?php echo RES;?>/images/help.png" class="vm helpimg" title="帮助"></a></td>
                </tr>
                 
                 <input type="hidden" name="token" value="<?php echo ($info["token"]); ?>" class="px" tabindex="1" size="40">
               
                
                <tr>
                  <th><span class="red">*</span>地区</th>
                  <td>
                  省：<input type="text" class="px" id="province" value="<?php echo ($info["province"]); ?>" name="province" tabindex="1" size="20">  市：<input id="city" value="<?php echo ($info["city"]); ?>" type="text" name="city" class="px" tabindex="1" size="20">
               （此处关联公交等本地化查询）
                  </td>
                </tr>
                <tr>
                  <th>公众号邮箱：</th>
                  <td><input type="text" required="" class="px" tabindex="1" value="<?php echo ($info["qq"]); ?>" name="qq" size="25"></td>
                </tr>
                 <tr>
                  <th>粉丝数：</th>
                  <td><input type="text" required="" name="wxfans" value="<?php echo ($info["wxfans"]); ?>" class="px" tabindex="1" size="25"></td>
                </tr>
             
                <tr>
                  <th>类型：</th>
                  <td><select id="type" name="type">
                  <option value="1,情感" <?php if(($info["typeid"]) == "1"): ?>selected<?php endif; ?> >情感</option>
                  <option value="2,数码" <?php if(($info["typeid"]) == "2"): ?>selected<?php endif; ?> >数码</option>
                  <option value="3,娱乐" <?php if(($info["typeid"]) == "3"): ?>selected<?php endif; ?> >娱乐</option>
                  <option value="4,IT" <?php if(($info["typeid"]) == "4"): ?>selected<?php endif; ?> >IT</option>
                  <option value="5,数码" <?php if(($info["typeid"]) == "5"): ?>selected<?php endif; ?> >数码</option>
                  <option value="6,购物" <?php if(($info["typeid"]) == "6"): ?>selected<?php endif; ?> >购物</option>
                  <option value="7,生活" <?php if(($info["typeid"]) == "7"): ?>selected<?php endif; ?> >生活</option>
                  <option value="8,服务" <?php if(($info["typeid"]) == "8"): ?>selected<?php endif; ?> >服务</option>
                  </select></td>
                </tr>
              
                <tr>
                  <th></th>
                  <td><button type="submit" class="btnGreen" id="saveSetting">保存</button></td>
                </tr>
              </tbody>
            </table>
            
          </div>
          </form>
        </div>
        
        <div class="clr"></div>
      </div>
    </div>
  </div>
  <!--底部-->
  	</div>
</div>
</div>
</div>

<style>
.IndexFoot {
	BACKGROUND-COLOR: #333; WIDTH: 100%; HEIGHT: 39px
}
.foot{ width:988px; margin:0px auto; font-size:12px; line-height:39px;}
.foot .foot_page{ float:left; width:600px;color:white;}
.foot .foot_page a{ color:white; text-decoration:none;}
#copyright{ float:right; width:380px; text-align:right; font-size:12px; color:#FFF;}
</style>
<div class="IndexFoot" style="height:120px;clear:both">
<div class="foot">
<div class="foot_page" >
<a href="<?php echo C('site_url');?>">微信微信营销平台</a><br/>
帮助您快速搭建属于自己的营销平台，构建自己的客户群体。<br/>
大转盘、刮刮卡、会员卡、优惠卷、订餐、订房等营销模块，客户易用，易懂，易营销。
</div>
<!--div id="copyright" style="color:white">
	<?php echo C('site_name');?>(c)2013 版权所有<br/>
	技术支持：<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=381988326&site=qq&menu=yes"><img height="20" border="0" src="http://wpa.qq.com/pa?p=2:381988326:51" alt="联系我吧" title="联系我吧"/></a>
	售前咨询：<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=381988326&site=qq&menu=yes"><img height="20" src="http://wpa.qq.com/pa?p=2:381988326:51" alt="联系我吧" title="联系我吧"/></a>

</div-->
    </div>
</div>
<script src="/images/css/qqserver.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="/images/css/qqserver.css"/>
<!--div id="onlinebox" class="onlinebox onlinebox_1 onlinebox_1_2" style="position: fixed; top: 80px; right:35px; "
	<div class="onlinebox-showbox" id="onlinebox-showbox" onMouseMove="qq(0)"><span>在<br>线<br>客<br>服<br></span></div>
	<div class="onlinebox-conbox" id="onlinebox-conbox" style="position: absolute; left: -94px; width: 118px; display:none;">
		<div class="onlinebox-top" id="onlinebox-top" title="点击可隐藏" onClick="qq(1)"><span>在线客服</span></div>
		<div class="onlinebox-center">
			<div class="onlinebox-center-box">
				<dl>
					<dt>使用帮助</dt>
						<dd><a href="tencent://message/?uin=381988326&amp;Site=&amp;Menu=yes" title="QQ咨询服务">
						<img border="0" src="http://wpa.qq.com/pa?p=2:381988326:42"></a>
						</dd>
					</dl>
				<div class="clear"></div>
				<dl>
					<dt>技术询问</dt>
					<dd>
						<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=381988326&site=qq&menu=yes">
							<img border="0" src="http://wpa.qq.com/pa?p=2:381988326:42" alt="咨询服务" title="咨询服务"/>
						</a>
					</dd>
				</dl>
				<div class="clear"></div>
				<dl><dt>合作加盟</dt>
				<dd>
					<a href="tencent://message/?uin=381988326&amp;Site=&amp;Menu=yes" title="QQ合作加盟">
						<img border="0" src="http://wpa.qq.com/pa?p=2:381988326:47">
					</a>
				</dd>
				</dl>
				<div class="clear"></div>
			</div>
		</div>
		<div class="onlinebox-bottom">
			<div class="onlinebox-bottom-box">
				<div class="online-tbox">
					<div style="text-align: center; "><strong>在线时间</strong><br>	08:30-17:30<br>
						<span style="color:#999;">—————————</span><br>
						
					</div>
				</div>
			</div>
		</div>
		<div class="onlinebox-bottom-bg"></div>
	</div>
</div>-->
<div style="display:none">
<?php echo ($alert); ?>
<script src="http://s15.cnzz.com/stat.php?id=5524076&web_id=5524076" language="JavaScript"></script>
</div>
</body>
</html>