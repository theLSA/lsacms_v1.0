<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html class="no-js">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>This is teacher index</title>
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

<script type="text/javascript">

 $(document).ready(function(){
    $('#getstuinfotd').mouseover(function () {

	var $stuid = $.trim($("#stuidtd").text());  
        // 得到输入框的值
        //var $usernames = $("#username").val();
        // 这里就是我上面说的地址，一定要写对，我是直接写的，没使用 U 方法
      
        // 这里 $retuenmessage 是一个对象，就是返回的值，要把他变成 json 形式，还需要一步，下面讲
        $.ajax({
            type: "post",
            url: '/lsacms/index.php/Home/Teamain/ajaxgetstuinfo',
	    data: {stuid:$stuid},
	    //async: false,
	    datatype: 'json',
            // 这里是当成功时就显示返回信息
            success: function (data,status) {
                // 把 $returnmessage 变成 json 格式的就只要在后面加 .responseText，xml我不知道，我比较喜欢 json 格式
		
		//alert(data[0].stuname);
		$('#showstuinfodiv').html("ID："+data[0].stuid+"</br>姓名："+data[0].stuname+"</br>性别："+data[0].stusex+"</br>帮派："+data[0].stufaction+"</br>课程数："+data[0].stulesnum);
            },
            // 错误时
            error: function () {
                alert("error");
            }
        });
    });

	$('#getstuinfotd').mouseout(function () {
		$('#showstuinfodiv').empty();

	});
    


});



</script>


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
  
 	<a href="/lsacms/index.php/Home/Teamain/home">HOME</a> 
 	<a href="/lsacms/index.php/Home/Teamain/index">个人主页</a> 
 	 <a href="/lsacms/index.php/Home/Teamain/logout">退出登录</a>
 </li>


    </ul>
  </div>
</header>








<div class="am-cf admin-main"> 

<div class="nav-navicon admin-main admin-sidebar">
    
    
    <div class="sideMenu am-icon-dashboard" style="color:#aeb2b7; margin: 10px 0 0 0;"> welcome teacher: <?php echo (session('teacher')); ?></div>
    <div class="sideMenu">
      <h3 class="am-icon-flag"><em></em>个人展示</h3>
      <ul>
        <li><a href="/lsacms/index.php/Home/Teamain/teagetselfinfo">个人信息</a></li>
        <li><a href="/lsacms/index.php/Home/Teamain/tealeslist">个人开设课程</a></li>
 
      </ul>
      <h3 class="am-icon-cart-plus"><em></em>stu_manage</h3>
      <ul>
        <li><a href="/lsacms/index.php/Home/Teamain/addstu">add student</a></li>
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
			
              <font color="white">个人主页->个人开设课程->详情</font>

	</div>	
	


<div class="admin">
	
<table width="800" border="1" cellpadding="1" cellspacing="1" bgcolor="#99CC33" bordercolor="#FFFFFF">
  <tr>
    <td colspan="5" bgcolor="#FFFFFF" class="title" align="center">当前登录用户：<?php echo (session('teacher')); ?></td>
  </tr>
  <tr>
    <td colspan="5" bgcolor="#FFFFFF" class="title" align="center">修炼[<?php echo ($stules); ?>]的弟子排名</td>
  </tr>
  <tr class="title">
    <td bgcolor="#FFFFFF" width="100">弟子ID</td>
    <td bgcolor="#FFFFFF" width="200">弟子姓名</td>
    <td bgcolor="#FFFFFF" width="100">分数</td>
    <td bgcolor="#FFFFFF" width="200">操作</td>
  </tr>
  <?php if(is_array($moreinfo)): foreach($moreinfo as $key=>$more): ?><tr class="content">
    <td id="stuidtd" bgcolor="#FFFFFF" width="100">&nbsp;<?php echo ($more["stuid"]); ?></td>
    <td id="getstuinfotd" bgcolor="#FFFFFF" width="200">&nbsp;<?php echo ($more["stuname"]); ?></td>
    <td bgcolor="#FFFFFF" width="100">&nbsp;<?php echo ($more["stuscore"]); ?></td>
    <td bgcolor="#FFFFFF" width="200"><a href="/lsacms/index.php/Home/Teamain/delstu?stuid=<?php echo ($more["stuid"]); ?>&lesid=<?php echo ($more["lesid"]); ?>" target="_blank">踢</a>/<a href="/lsacms/index.php/Home/Teamain/udscoremb?stuid=<?php echo ($more["stuid"]); ?>&lesid=<?php echo ($more["lesid"]); ?>">录入分数</a></td>
  </tr><?php endforeach; endif; ?>
</table>



    <div style="position:absolute;top:10px;left:850px;width:160px;height:20px;border:green 1px dashed;">
   
     *******弟子信息*******
    </div>

    <div id="showstuinfodiv" style="position:absolute;top:30px;left:850px;width:160px;height:150px;border:green 1px dashed;">

	

	
	
    </div>
     
     
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