<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login/Sign up</title>
  <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="/lsacms/Public/css/normalize.min.css">

  
  <link rel="stylesheet" href="/lsacms/Public/css/style.css">

  <script type="text/javascript">
        var isShow=true;
	var isShow1=true;
	var isShow2=true;
        function showpass(){
            var v=document.getElementById("showps");
            if (isShow) {
                v.type="text";
                isShow=false;
            }else{
                v.type="password";
                isShow=true;
            }
        };

	function showpass1(){
            var v=document.getElementById("password1");
            if (isShow1) {
                v.type="text";
                isShow1=false;
            }else{
                v.type="password";
                isShow1=true;
            }
        };

 	function showpass2(){
            var v=document.getElementById("password2");
            if (isShow2) {
                v.type="text";
                isShow2=false;
            }else{
                v.type="password";
                isShow2=true;
            }
        };


    </script>

    <style type="text/css">
	#sps {
  		position: absolute;
  		left: 500px;
  		top: 11px;
		width: 10px;
 		height: 10px;
	}

	
	
	
	
    </style>	

</head>

<body>

  <div class="form">
      
      <ul class="tab-group">
        <li class="tab active"><a href="#login">Log In</a></li>
        <li class="tab"><a href="#signup">Sign Up</a></li>
      </ul>
      
      <div class="tab-content">

	<div id="login">   
          <h1>Welcome Back!</h1>
          
          <form action="/lsacms/index.php/Home/Index/index" method="post">
          
            <div class="field-wrap">
            <label>
              Userid<span class="req">*</span>
            </label>
            <input name="userid" type="username"required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input id="showps" name="password" type="password"required autocomplete="off"/>
	    <input id="sps" type="checkbox" onclick="showpass()"/>
          </div>



	  <div class="top-row">
		<div class="field-wrap">
		  <label>
              		student<span class="req">*</span>
                  </label>
              	  <input id="redio1" type="radio" name="usertype" value="student" checked="checked"/>
	   
		</div>
		
		<div class="field-wrap">
		<label>
            		teacher<span class="req">*</span>
                </label>
                 <input id="redio2" type="radio" name="usertype" value="teacher" />

                </div>
	  </div>


	 
           
         


	  <div class="top-row">
		<div class="field-wrap">
              	  <label>
                   Checkcode<span class="req">*</span>
                  </label>
                 <input name="checkcode" type="text" autocomplete="off">
		</div>
		
		<div class="field-wrap">
                  
                 <img onclick="this.src='/lsacms/index.php/Home/Index/authCode/'+Math.random();" style="cursor:pointer;" src="/lsacms/index.php/Home/Index/authCode"/>
		</br><span><font color="white">click picture to change</font></span>
                </div>
	  </div>
          
          <p class="forgot"><a href="#">Forgot Password?</a></p>
          
          <input type="submit" class="button button-block" value="Login"/>
          
          </form>

        </div>


        <div id="signup">   
          <h1>Sign Up for Free</h1>


          <form action="/lsacms/index.php/Home/Index/index" method="post">
          
          <div class="field-wrap">
            <div class="field-wrap">
              <label>
                Username<span class="req">*</span>
              </label>
              <input type="text" required autocomplete="off" />
            </div>
        
          
          </div>

          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input id="password1" type="password"required autocomplete="off"/>
		<input id="sps" type="checkbox" onclick="showpass1()"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Password confirm<span class="req">*</span>
            </label>
            <input id="password2" type="password"required autocomplete="off"/>
		<input id="sps" type="checkbox" onclick="showpass2()"/>
          </div>
 	 
	  
	
	  <img id="dashboard" src="/lsacms/Public/img/form_bg.png">
	
		
	  <div class="top-row">
		<div class="field-wrap">
              	  <label>
                   Checkcode<span class="req">*</span>
                  </label>
                 <input name="checkcode" type="text" autocomplete="off">
		</div>
		
		<div class="field-wrap">
                  
                 <img onclick="this.src='/lsacms/index.php/Home/Index/authCode/'+Math.random();" style="cursor:pointer;" src="/lsacms/index.php/Home/Index/authCode"/>
		</br><span><font color="white">click picture to change</font></span>
                </div>
	  </div>

	  <div class="arrowCap"></div>
          <div class="arrow"></div>
        		
          <p class="meterText">Password Meter</p>
	 
          
          <button type="submit" class="button button-block"/>Get Started</button>
          
          </form>
	
	

        </div>

	
        
        
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
  

<script src='/lsacms/Public/js/jquery.min.js'></script>

<script src="/lsacms/Public/js/index.js"></script>

<script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
<script src="/lsacms/Public/js/jquery.complexify.js"></script>
<script src="/lsacms/Public/js/script.js"></script>

</body>
</html>