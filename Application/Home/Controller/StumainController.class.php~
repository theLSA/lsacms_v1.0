<?php
namespace Home\Controller;
use Think\Controller;
//header("Content-Type:text/html; charset=utf-8");
class StumainController extends Controller {
    public function index(){
		//import('Org.Net.IpLocation');
		//$Ip = new \Org\Net\IpLocation('qqwryutf.dat'); // 实例化类 参数表示IP地址库文件
		//$area = $Ip->getlocation(); // 获取某个IP地址所在的位置
		$ip = get_client_ip();
		//$this->assign('area',$area);
		$this->assign('ip',$ip);
		$this->display();
	

	}

    public function stuhome(){
		$this->display(index);
	}

    public function stulogout(){
		$_SESSION=array();
         	$this->success('退出成功',__MODULE__.'/Index/index');
	}

    public function getselfinfo(){

		$db = M('stuinfo','think_');
		
		$list = $db->where('stuid=%d',$_SESSION['student'])->select();
		$this->assign('list',$list);
		
		$this->display();		

	}


    public function getselflesson(){
		$db = M('stulesson','think_');
		$stuid = I('get.stuid');
		$myleslistcount = $db->where('stuid=%d',$stuid)->count();
		$Page = new \Think\Page($myleslistcount,10);
		$show = $Page->show();
		$myleslist = $db->where('stuid=%d',$stuid)->order('lesid')->limit($Page->firstRow.','.$Page->listRows)->select();
		$this->assign('myleslist',$myleslist);
		$this->assign('page',$show);
		$this->display();
		
	}

    public function chooseles(){
		$db = M('stulesson','think_');
		$stuid = I('get.stuid');
		$myleslistcount = $db->where('stuid=%d',$stuid)->count();
		$Page = new \Think\Page($myleslistcount,10);
		$show = $Page->show();
		$myleslist = $db->where('stuid=%d',$stuid)->field('lesid,stules,stulestea,stulesfaction')->order('lesid')->limit($Page->firstRow.','.$Page->listRows)->select();
		$this->assign('myleslist',$myleslist);
		$this->assign('page',$show);

		$db2 = M();
		$canchooseles = $db2->query("select distinct * from think_tealesson where think_tealesson.lesid not in (select think_stulesson.lesid from think_stulesson where stuid=$stuid)");
		$this->assign('canchooselist',$canchooseles);
		$this->display();
	}

    public function addlesson(){
		$db = M('stulesson','think_');
		//$data['lesid'] = $_GET['lesid'];
 		//$data['stuid'] = $_GET['stuid'];
 		$data['lesid'] = I('get.lesid');
 		$data['stuid'] = I('get.stuid');
		$data['stules'] = I('get.lesname');
		$data['stulestea'] = I('get.lestea');
		$data['stulesfaction'] = I('get.lesfaction');
		$data['score'] = 0;
		//$data['lesid'] = I('get.lesid');
		$db2 = M('student','think_');
		$stuname = $db2->where('stuid=%d',$data['stuid'])->getField('stuname');
		$data['stuname'] = $stuname;
		$addresult = $db->add($data);
		if($addresult)
		{
			$db3 = M('stuinfo','think_');		
			$db3->where('stuid=%d',$data['stuid'])->setInc('stulesnum');
			if($db3)
			{
				$db4 = M('tealesson','think_');
				$db4->where('lesid=%d',$data['lesid'])->setInc('tealesstunum');
				if($db4)
				{
					$this->redirect('Stumain/index','',2,'add and update stulesnum success!');
				}
				else
				{
					$this->redirect('Stumain/index','',2,'update tealesstunum failed!');
				}
			}
			else
			{
				$this->redirect('Stumain/index','',2,'update stulesnum failed!');
			}
		}
		else
		{
			$this->redirect('Stumain/index','',2,'add failed!');
		}
		
	}


    public function forgetles(){
		$stuid = I('get.stuid');
		$lesid = I('get.lesid');
		$db = M('stuinfo','think_');
		$result = $db->where('stuid=%d',$stuid)->setDec('stulesnum');
		if($result)
		{
			$db2 = M('stulesson','think_');
			$result2 = $db2->where('stuid=%d and lesid=%d',$stuid,$lesid)->delete();
			if($result2)
			{
				$db3 = M('tealesson','think_');
				$result3 = $db3->where('lesid=%d',$lesid)->setDec('tealesstunum');
				if($result3)
				{
					$this->redirect('Stumain/index','',2,'all success!');
				}
				else
				{
					$this->redirect('Stumain/index','',2,'update tealesstunum failed!');
				}
			}
			else
			{
				$this->redirect('Stumain/index','',2,'delete stulesson failed!');
			}
			
		}
		else
		{
			$this->redirect('Stumain/index','',2,'delete stuinfo failed!');
		}
	}

}
