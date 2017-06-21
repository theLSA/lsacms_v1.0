<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html class="no-js">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
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
<script type="text/javascript" src="http://int.dpool.sina.com.cn/iplookup/iplookup.php?format=js"></script> 

<script type="text/javascript">

var myprovince = remote_ip_info['province']; 
var mycity = remote_ip_info['city'] 
var mydistrict = remote_ip_info['district']; 
$(function(){ 
    $("#city_1").citySelect({ 
        prov:myprovince,  
        city:mycity 
    }); 
});
 
 
//定义函数：构建要显示的时间日期字符串
function showTime()
{
 //创建Date对象
 var today = new Date();
 //分别取出年、月、日、时、分、秒
 var year = today.getFullYear();
 var month = today.getMonth()+1;
 var day = today.getDate();
 var hours = today.getHours();
 var minutes = today.getMinutes();
 var seconds = today.getSeconds();
 var week = today.getDay();
 var weekday = ["星期日","星期一","星期二","星期三","星期四","星期五","星期六"];
 //如果是单个数，则前面补0
 month  = month<10  ? "0"+month : month;
 day  = day <10  ? "0"+day : day;
 hours  = hours<10  ? "0"+hours : hours;
 minutes = minutes<10 ? "0"+minutes : minutes;
 seconds = seconds<10 ? "0"+seconds : seconds;
  
 //构建要输出的字符串
 var str = year+"年"+month+"月"+day+"日 "+hours+":"+minutes+":"+seconds+"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"+weekday[week];
  
 //获取id=result的对象
 var obj = document.getElementById("timeresult");
 //将str的内容写入到id=result的<div>中去
 obj.innerHTML = str;
 //延时器
 window.setTimeout("showTime()",1000);
}
</script>


<style type="text/css">
#timeresult{
 width:420px;
 border:1px solid #CCCCCC;
 background:#FFFFCC;
 margin:10px auto;
 font-size:24px;
 color:green;
 padding:10px;
 
}
</style>

</head>
<body onload="showTime()">
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
			
              		<font color="white">个人主页</font>

	        </div>	
	
	


<div class="admin">
	

	
<div id="timeresult">

</div>

<div>
您的ip:<?php echo ($ip); ?></br>
您的位置：<script>document.write(myprovince+' '+mycity);</script></p>
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