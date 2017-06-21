<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html class="no-js">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>This is admin index</title>
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
  <a href="/lsacms/admin.php/Main/ahome">HOME</a> 
 	<a href="/lsacms/admin.php/Main/index">个人主页</a> 
 	 <a href="/lsacms/admin.php/Main/alogout">退出登录</a>
 </li>

 


    </ul>
  </div>
</header>








<div class="am-cf admin-main"> 

<div class="nav-navicon admin-main admin-sidebar">
    
    
     <div class="sideMenu am-icon-dashboard" style="color:#aeb2b7; margin: 10px 0 0 0;"> welcome admin: <?php echo (session('admin')); ?></div>
    <div class="sideMenu">
      <h3 class="am-icon-flag"><em></em>信息管理</h3>
      <ul>
        <li><a href="/lsacms/admin.php/Main/stuinfomanage">学生信息管理</a></li>
        <li class="func" dataType='html' dataLink='msn.htm' iconImg='images/msn.gif'><a href="/lsacms/admin.php/Main/teainfomanage">教师信息管理</a></li>
     
      
      </ul>
      <h3 class="am-icon-cart-plus"><em></em> <a href="#">课程查询</a></h3>
      <ul>
        <li><a href="/lsacms/admin.php/Main/stulesmanage">学生课程查询</a></li>
        <li><a href="/lsacms/admin.php/Main/tealesmanage">教师课程查询</a></li>
        <li>订单打印</li>
        <li>添加订单</li>
        <li>发货单列表</li>
        <li>换货单列表</li>
      </ul>
      <h3 class="am-icon-users"><em></em> <a href="#">用户管理</a></h3>
      <ul>
        <li><a href="/lsacms/admin.php/Main/stumanage">学生用户查询</a></li>
        <li><a href="/lsacms/admin.php/Main/teamanage">教师用户查询</a></li>
        <li><a href="/lsacms/admin.php/Main/addstu">新增学生</a></li>
        <li><a href="/lsacms/admin.php/Main/addtea">新增教师</a></li>
        <li>推荐列表</li>
      </ul>
      <h3 class="am-icon-volume-up"><em></em> <a href="#">管理员管理</a></h3>
      <ul>
        <li><a href="/lsacms/admin.php/Main/adminmanage">管理员查询</a></li>
        <li><a href="/lsacms/admin.php/Main/addadmin">新增管理员</a></li>
        <li><a href="/lsacms/admin.php/Main/changeapwd">修改密码</a></li>
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
			
              <font color="white">个人主页->教师信息查询</font>

	</div>	
	


<div class="admin">
	

<table width="1000" border="1" cellpadding="1" cellspacing="1" bgcolor="#99CC33" bordercolor="#FFFFFF">
  <tr>
    <td colspan="7" bgcolor="#FFFFFF" class="title" align="center">当前登录用户：<?php echo (session('admin')); ?></td>
  </tr>
  <tr>
    <td colspan="7" bgcolor="#FFFFFF" class="title" align="center">教师信息</td>
  </tr>
  <tr class="title">
    <td bgcolor="#FFFFFF" width="100">教师ID</td>
    <td bgcolor="#FFFFFF" width="200">教师姓名</td>
    <td bgcolor="#FFFFFF" width="100">教师性别</td>
    <td bgcolor="#FFFFFF" width="100">教师年龄</td>
    <td bgcolor="#FFFFFF" width="150">教师帮派</td>
    <td bgcolor="#FFFFFF" width="200">开设课程数</td>
    <td bgcolor="#FFFFFF" width="200">操作</td>
  </tr>
  <?php if(is_array($result)): foreach($result as $key=>$tea): ?><tr class="content">
    <td bgcolor="#FFFFFF" width="100"><?php echo ($tea["teaid"]); ?></td>
    <td bgcolor="#FFFFFF" width="200"><?php echo ($tea["teaname"]); ?></td>
    <td bgcolor="#FFFFFF" width="100"><?php echo ($tea["teasex"]); ?></td>
    <td bgcolor="#FFFFFF" width="100"><?php echo ($tea["teaage"]); ?></td>
    <td bgcolor="#FFFFFF" width="150"><?php echo ($tea["teafaction"]); ?></td>
    <td bgcolor="#FFFFFF" width="200"><?php echo ($tea["tealesnum"]); ?></td>
    <td bgcolor="#FFFFFF" width="200"><a href="/lsacms/admin.php/Main/udteainfomb?teaid=<?php echo ($tea["teaid"]); ?>&teaname=<?php echo ($tea["teaname"]); ?>&teasex=<?php echo ($tea["teasex"]); ?>&teaage=<?php echo ($tea["teaage"]); ?>&teafaction=<?php echo ($tea["teafaction"]); ?>">修改</a>/<a href="/lsacms/admin.php/Main/deltea?teaid=<?php echo ($tea["teaid"]); ?>">删除该教师</a></td>


  </tr><?php endforeach; endif; ?>
 <tr>
    <td colspan="7" bgcolor="#FFFFFF">&nbsp;<?php echo ($page); ?></td>
    </tr>
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