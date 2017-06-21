<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
	
	if(isset($_POST['aname'])){
		$db = M();
		$select = $db->query("select * from think_admin where aname='".$_POST['aname']."' and apwd='".md5($_POST['apwd'])."'");
		if($select){
			$_SESSION['admin'] = $_POST['aname'];
			$this->redirect('Main/index','',2,'admin success login!');
		}
		else 
		{
			$this->redirect('Index/index','',2,'admin failed login!');
		}
        }

       else
       {
		$this->display();
       }
    }


    public function aauthCode(){
        // 生成验证码
        $Verify = new \Think\Verify();
//        $Verify->useImgBg = true;
        $Verify->fontSize = 20;
        $Verify->length   = 4;
        $Verify->imageH  =50;  //验证码高度
        $Verify->imageW  =200; //验证码宽度
        $Verify->codeSet = '';   //验证码只用数字
        $Verify->entry();
    }



}
