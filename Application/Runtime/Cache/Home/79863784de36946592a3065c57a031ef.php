<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html class="no-js">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>This is student index</title>
<meta name="description" content="This is student index">
<meta name="keywords" content="index">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta name="renderer" content="webkit">
<meta http-equiv="Cache-Control" content="no-siteapp" />
<link rel="icon" type="image/png" href="/lsacms/Public/stuassets/i/favicon.png">
<link rel="apple-touch-icon-precomposed" href="/lsacms/Public/stuassets/i/app-icon72x72@2x.png">
<meta name="apple-mobile-web-app-title" content="Amaze UI" />
<link rel="stylesheet" href="/lsacms/Public/stuassets/css/amazeui.min.css"/>
<link rel="stylesheet" href="/lsacms/Public/stuassets/css/admin.css">
<script src="/lsacms/Public/stuassets/js/jquery.min.js"></script>
<script src="/lsacms/Public/stuassets/js/app.js"></script>
</head>
<body>
<!--[if lte IE 9]><p class="browsehappy">升级你的浏览器吧！ <a href="http://se.360.cn/" target="_blank">升级浏览器</a>以获得更好的体验！</p><![endif]-->
</head>

<body>
<header class="am-topbar admin-header">
  <div class="am-topbar-brand"><img src="/lsacms/Public/stuassets/i/logo.png"></div>

  <div class="am-collapse am-topbar-collapse" id="topbar-collapse">
    <ul class="am-nav am-nav-pills am-topbar-nav admin-header-list">

   

 <li class="kuanjie">
  
 	<a href="/lsacms/index.php/Home/Stumain/stuhome">HOME</a> 
 	<a href="/lsacms/index.php/Home/Stumain/index">个人主页</a> 
 	 <a href="/lsacms/index.php/Home/Stumain/stulogout">退出登录</a>
 </li>


    </ul>
  </div>
</header>








<div class="am-cf admin-main"> 

<div class="nav-navicon admin-main admin-sidebar">
    
    
    <div class="sideMenu am-icon-dashboard" style="color:#aeb2b7; margin: 10px 0 0 0;"> welcome student: <?php echo (session('student')); ?></div>
    <div class="sideMenu">
      <h3 class="am-icon-flag"><em></em>个人展示</h3>
      <ul>
        <li><a href="/lsacms/index.php/Home/Stumain/getselfinfo">个人信息</a></li>
        <li class="func" dataType='html' dataLink='msn.htm' iconImg='images/msn.gif'><a href="/lsacms/index.php/Home/Stumain/getselflesson?stuid=<?php echo (session('student')); ?>">个人课程</a></li>
        <li><a href="/lsacms/index.php/Home/Stumain/chooseles?stuid=<?php echo (session('student')); ?>">选课</a></li>
        
      </ul>
      <h3 class="am-icon-cart-plus"><em></em> <a href="#"> 订单管理</a></h3>
      <ul>
        <li>订单列表</li>
        <li>合并订单</li>
        <li>订单打印</li>
        <li>添加订单</li>
        <li>发货单列表</li>
        <li>换货单列表</li>
      </ul>
      <h3 class="am-icon-users"><em></em> <a href="#">会员管理</a></h3>
      <ul>
        <li>会员列表 </li>
        <li>未激活会员</li>
        <li>团队系谱图</li>
        <li>会员推荐图</li>
        <li>推荐列表</li>
      </ul>
      <h3 class="am-icon-volume-up"><em></em> <a href="#">信息通知</a></h3>
      <ul>
        <li>站内消息 /留言 </li>
        <li>短信</li>
        <li>邮件</li>
        <li>微信</li>
        <li>客服</li>
      </ul>
      <h3 class="am-icon-gears"><em></em> <a href="#">系统设置</a></h3>
      <ul>
        <li>数据备份</li>
        <li>邮件/短信管理</li>
        <li>上传/下载</li>
        <li>权限</li>
        <li>网站设置</li>
        <li>第三方支付</li>
        <li>提现 /转账 出入账汇率</li>
        <li>平台设置</li>
        <li>声音文件</li>
      </ul>
    </div>
    <!-- sideMenu End --> 
    
    <script type="text/javascript">
			jQuery(".sideMenu").slide({
				titCell:"h3", //鼠标触发对象
				targetCell:"ul", //与titCell一一对应，第n个titCell控制第n个targetCell的显示隐藏
				effect:"slideDown", //targetCell下拉效果
				delayTime:300 , //效果时间
				triggerTime:150, //鼠标延迟触发时间（默认150）
				defaultPlay:true,//默认是否执行效果（默认true）
				returnDefault:true //鼠标从.sideMen移走后返回默认状态（默认false）
				});
		</script> 

    
    
    
    
    
    
    
</div>

<div class=" admin-content">
	
		
	<div class="daohang">
			
              <font color="white">个人主页->个人信息</font>

	</div>	
	


<div class="admin">
	

<table width="600" border="1" cellpadding="1" cellspacing="1" bgcolor="#99CC33" bordercolor="#FFFFFF">
  <tr>
    <td colspan="6" bgcolor="#FFFFFF" class="title" align="center">当前登录用户：<?php echo (session('student')); ?></td>
  </tr>
  <tr>
    <td colspan="6" bgcolor="#FFFFFF" class="title" align="center">个人信息</td>
  </tr>
  <tr class="title">
    <td bgcolor="#FFFFFF" width="100">ID</td>
    <td bgcolor="#FFFFFF" width="120">姓名</td>
    <td bgcolor="#FFFFFF" width="50">性别</td>
    <td bgcolor="#FFFFFF" width="50">年龄</td>
    <td bgcolor="#FFFFFF" width="150">帮派</td>
    <td bgcolor="#FFFFFF" width="150">已修课程数</td>
  </tr>
  <?php if(is_array($list)): foreach($list as $key=>$stu): ?><tr class="content">
    <td bgcolor="#FFFFFF">&nbsp;<?php echo ($stu["stuid"]); ?></td>
    <td bgcolor="#FFFFFF">&nbsp;<?php echo ($stu["stuname"]); ?></td>
    <td bgcolor="#FFFFFF">&nbsp;<?php echo ($stu["stusex"]); ?></td>
    <td bgcolor="#FFFFFF" width="50"><?php echo ($stu["stuage"]); ?></td>
    <td bgcolor="#FFFFFF" width="150"><?php echo ($stu["stufaction"]); ?></td>
    <td bgcolor="#FFFFFF" width="150"><?php echo ($stu["stulesnum"]); ?></td>
  </tr><?php endforeach; endif; ?>
</table>



   
     
     
     
      <script type="text/javascript">jQuery(".slideTxtBox").slide();</script> 
   


</div>




</div>

<!--[if lt IE 9]>
<script src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="/lsacms/Public/stuassets/js/polyfill/rem.min.js"></script>
<script src="/lsacms/Public/stuassets/js/polyfill/respond.min.js"></script>
<script src="/lsacms/Public/stuassets/js/amazeui.legacy.js"></script>
<![endif]--> 

<!--[if (gte IE 9)|!(IE)]><!--> 
<script src="/lsacms/Public/stuassets/js/amazeui.min.js"></script>
<!--<![endif]-->



</body>
</html>