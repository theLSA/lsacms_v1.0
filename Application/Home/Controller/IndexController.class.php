<?php
namespace Home\Controller;
use Think\Controller;
//session_start();
//header("Content-Type:text/html; charset=utf-8");
class IndexController extends Controller {
    public function index(){
        if(isset($_POST['userid']) && isset($_POST['password'])){
	    	$verify=new \Think\Verify();
            	if (!$verify->check(I('post.checkcode'))) {

                	$this->error('error checkcode');  //第二个参数,是跳转的地址,如果不传则返回上一页

            	}
		$db = M();
		if($_POST['usertype']=='student'){
			
			$select = $db->query("select * from think_student where stuid='".$_POST['userid']."' and stupwd='".md5($_POST['password'])."'");
			if($select){
				$_SESSION['student'] = $_POST['userid'];
				$this->redirect('Stumain/index','',2,'student success login!');
			}
			else 
			{
				$this->redirect('Index/index','',2,'student failed login!');
			}
		
					
			
		}
		else if($_POST['usertype']=='teacher'){
			$select = $db->query("select * from think_teacher where teaid='".$_POST['userid']."' and teapwd='".md5($_POST['password'])."'");
			if($select){
				$_SESSION['teacher'] = $_POST['userid'];
				$this->redirect('Teamain/index','',2,'teacher success login!');
			}
			else 
			{
				$this->redirect('Index/index','',2,'teacher failed login!');
			}
		}

		else {
			$this->redirect('Index/index','',2,'teacher failed login!');
		}
		
	
			
	}
	$this->display();
			
   }

   public function authCode(){
       
        $Verify = new \Think\Verify();
//        $Verify->useImgBg = true;
        $Verify->fontSize = 30;
        $Verify->length   = 4;
        $Verify->imageH  =50;  
        $Verify->imageW  =200; 
        $Verify->codeSet = '0123456789';   //验证码只用数字
        $Verify->entry();
    }

    
}
