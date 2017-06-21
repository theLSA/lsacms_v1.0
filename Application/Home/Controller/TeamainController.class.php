<?php
namespace Home\Controller;
use Think\Controller;
class TeamainController extends Controller {
    public function index(){

		$ip = get_client_ip();
		//$this->assign('area',$area);
		$this->assign('ip',$ip);
		$this->display();
	

	}


    public function home(){
		$this->display(index);
	}

    public function logout(){

		$_SESSION=array();
         	$this->success('退出成功',__MODULE__.'/Index/index');
		
	}


    public function teagetselfinfo(){
		$db = M('teainfo','think_');
		
		$list = $db->where('teaid=%d',$_SESSION['teacher'])->select();
		$this->assign('list',$list);
		
		$this->display();
	}


    public function tealeslist(){
		$db = M('tealesson','think_');
		$tealessonlistcount = $db->where('teaid=%d',$_SESSION['teacher'])->count();
		$Page = new \Think\Page($myleslistcount,10);
		$show = $Page->show();
		$tealessonlist = $db->where('teaid=%d',$_SESSION['teacher'])->order('lesid')->limit($Page->firstRow.','.$Page->listRows)->select();
		$this->assign('tealessonlist',$tealessonlist);
		$this->assign('page',$show);
		$this->display();
	}

    public function tealeslistmore(){
		$db = M('stulesson','think_');
		$lesid = I('get.lesid');
		$moreinfo = $db->where('lesid=%d',$lesid)->field('lesid,stuid,stuname,stuscore')->order('stuscore desc')->select();	
		$stules = $db->where('lesid=%d',$lesid)->getField('stules');
		$this->assign('stules',$stules);
		$this->assign('moreinfo',$moreinfo);
		$this->display();
	}

    public function deletelesson(){	
		$db = M('tealesson','think_');
		$lesid = I('get.lesid');
		$teaid = I('get.teaid');
		$delresult = $db->where('lesid=%d',$lesid)->delete();
	
		if($delresult)
		{
			$db4 = M('teainfo','think_');
			$newtealesnum = $db4->where('teaid=%d',$teaid)->setDec('tealesnum');
			if($newtealesnum)
			{
				
					$db3 = M('stulesson','think_');
					$arrstuid = $db3->where('lesid=%d',$lesid)->getField('stuid',true);  
					
					$delresult3 = $db3->where('lesid=%d',$lesid)->delete();
					if($delresult3>=0)
					{
						if($delresult3>0)
						{
						$db5 = M('stuinfo','think_');
						$map['stuid'] = array('in',$arrstuid);
						$db5->where($map)->setDec('stulesnum');
						
						$this->redirect('Teamain/index','',2,'all success!');
						}
 						$this->redirect('Teamain/index','',2,'all success!');
						
					}
					else 
					{
						$this->redirect('Teamain/index','',2,'stulesson delete failed!');
					}
				
				
			}
			else 
			{
				$this->redirect('Teamain/index','',2,'teainfo dec failed!');
			}
		
		}
		else 
		{
			$this->redirect('Teamain/index','',2,'tealesson delete failed!');
		}
		
		
	}

    public function teaaddlesson(){


		if(isset($_POST['lesname']))
		{
		$db = M('teacher','think_');
		$data['teaid'] = I('post.teaid');
		//$data['lesname'] = I('post.lesname');
		$data['lesfaction'] = I('post.lesfaction');
		//$data['lestea'] = $db->where('teaid='.$data['teaid'])->getField('lestea');
		
		$data['teaname'] = $db->where('teaid=%d',$data['teaid'])->getField('teaname');
		$data['teales'] = I('post.lesname');
		$data['tealesstunum'] = 0;
		//$addtoalllesson = $db->field('lesname,lestea,lesfaction,teaid')->add($data);
		
			//$db4 = M('alllesson','think_');
			//$lesname = $data['lesname'];
			//$data['lesid'] = $db->where('teaid='.$data['teaid']." and lesname='".$lesname."'")->getField('lesid');
			$db2 = M('tealesson','think_');
			$addtotealesson = $db2->field('teaid,teaname,teales,lesfaction,tealesstunum')->add($data);
			if($addtotealesson)
			{
				$db3 = M('teainfo','think_');
				$db3->where('teaid=%d',$data['teaid'])->setInc('tealesnum');
				if($db3)
				{
					$this->redirect('Teamain/index','',2,'add lesson all success!');	
				}
				else
				{
					$this->redirect('Teamain/index','',2,'update tealesnum failed!');	
				}
			}
			else
			{
				$this->redirect('Teamain/index','',2,'add to tealesson failed!');	
			}
		
		
		}
		else
		{
			$this->display();
		}
	}

	
    public function udscoremb(){
		$db = M('stulesson','think_');
		$data['stuid'] = I('get.stuid');
		$data['lesid'] = I('get.lesid');
		$stulesresult = $db->where('stuid=%d and lesid=%d',$data['stuid'],$data['lesid'])->select();
		$this->assign('stulesresult',$stulesresult);
		$this->display();
	}	
  
    public function udscore(){
		$db = M('stulesson','think_');
		$stuid = I('post.stuid');
		$lesid = I('post.lesid');
		$data['stuscore'] = I('post.newscore');
		$updatescoreresult = $db->where('stuid=%d and lesid=%d',$stuid,$lesid)->save($data);
		if($updatescoreresult==1)
		{
			$this->redirect('Teamain/index','',2,'update stulesson stuscore success!');	
		}
		else
		{
			$this->redirect('Teamain/index','',2,'update stulesson stuscore failed!');	
		}
		
	}

    public function delstu(){
		$db = M('stulesson','think_');
		$stuid = I('get.stuid');
		$lesid = I('get.lesid');
		$delresult = $db->where('stuid=%d and lesid=%d',$stuid,$lesid)->delete();
		if($delresult==1)
		{
			$db2 = M('tealesson','think_');
			$newtealesstunum = $db2->where('lesid=%d',$lesid)->setDec('tealesstunum');
			if($newtealesstunum==1)
			{
				$db3 = M('stuinfo','think_');
				$newstulesnum = $db3->where('stuid=%d',$stuid)->setDec('stulesnum');
				if($newstulesnum==1)
				{
					$this->redirect('Teamain/index','',2,'all success!');	
				}
				else
				{
					$this->redirect('Teamain/index','',2,'update stulesnum failed!');
				}
			}
			else
			{
				$this->redirect('Teamain/index','',2,'update tealesstunum failed!');
			}
			
		}
		else
		{
			$this->redirect('Teamain/index','',2,'delete stulesson stu failed!');	
		}
	}



    public function ajaxgetstuinfo(){
		$stuid = I('post.stuid');
		$db = M('stuinfo','think_');
		$result = $db->where('stuid='.$stuid)->select();
		if ($result) {
            		//$returnData = json_encode($data);
            		$this->ajaxReturn($result); 
        	} 
		else 
		{
            		$result = "";            
            		$this->ajaxReturn($result);
        	}
	}

    /*public function addstu(){
		$db = M('stuinfo','think_');

		if($_POST['stuid'])
		{
			$data['stuid'] = $_POST['stuid'];
			$data['stuname'] = $_POST['stuname'];
			$data['stusex'] = $_POST['stusex'];
			$data['stuage'] = $_POST['stuage'];
			$data['faction'] = $_POST['faction'];
		
			$result = $db->add($data);
			if($result)
			{
				$this->redirect('Teamain/index','',2,'add success!');
			}
			else
			{
				$this->redirect('Teamain/main','',2,'add failed!');
			}	
		}
		else
		{
			$this->display();
		}
	}*/
}
