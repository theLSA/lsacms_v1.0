<?php
namespace Admin\Controller;
use Think\Controller;
class MainController extends Controller {
    public function index(){
	
		$ip = get_client_ip();
		$this->assign("ip",$ip);
        	$this->display();
    	}

    public function ahome(){
		$this->display(index);
	}


    public function alogout(){

		$_SESSION=array();
         	$this->success('退出成功',__MODULE__.'/Index/index');
		
	}

    public function stuinfomanage(){
		$db = M('stuinfo','think_');
		$stucount = $db->count();
		$Page = new \Think\Page($stucount,10);
		$show = $Page->show();
		$result = $db->order('stuid')->limit($Page->firstRow.','.$Page->listRows)->select();
		$this->assign('result',$result);
		$this->assign('page',$show);
		$this->display();
	}

    public function udstuinfomb(){
		$data['stuid'] = I('get.stuid');
		$data['stuname'] = I('get.stuname');
		$data['stusex'] = I('get.stusex');
		$data['stuage'] = I('get.stuage');
		$data['stufaction'] = I('get.stufaction');
		$this->assign("data",$data);
		$this->display();
	}

    public function udstuinfo(){
		$data['stuid'] = I('post.stuid');
		$data['stuname'] = I('post.stuname');
		$data['stusex'] = I('post.stusex');
		$data['stuage'] = I('post.stuage');
		$data['stufaction'] = I('post.stufaction');

		$db = M('stuinfo','think_');
		$result1 = $db->where('stuid=%d',$data['stuid'])->field('stuname,stusex,stuage,stufaction')->save($data);
		
		if($result1)
		{
			$db2 = M('student','think_');
			$result2 = $db2->where('stuid=%d',$data['stuid'])->field('stuname')->save($data);
			
			if($result2>=0)
			{
				$db3 = M('stulesson','think_');
				$result3 = $db3->where('stuid=%d',$data['stuid'])->field('stuname')->save($data);
				if($result3>=0)
				{
					$this->redirect('Main/stuinfomanage','',2,'update all success!');
				}
				else
				{
					$this->redirect('Main/udstuinfomb','',2,'update stulesson failed!');
				}
			}
			else
			{
				$this->redirect('Main/udstuinfomb','',2,'update student failed!');
			}
			
		}
		else
		{
			if (definded('APP_DEBUG')) {
//			tp中的给出的方法,查出上一条语句
                        echo "sql:" . $roleModel->getLastSql();
			}
			$this->redirect('Main/udstuinfomb','',2,'update stuinfo failed!');
		}



	}

    public function delstu(){
		$stuid = I('get.stuid');
		$db = M('stuinfo','think_');
		$result = $db->where('stuid=%d',$stuid)->delete();
		if($result)
		{
			$db2 = M('student','think_');
			$result2 = $db2->where('stuid=%d',$stuid)->delete();
			if($result2)
			{
				$db3 = M('stulesson','think_');
				$lesidlist = $db3->where('stuid=%d',$stuid)->getField('lesid',true);
				$map['lesid']  = array('in',$lesidlist);
				$result3 = $db3->where('stuid=%d',$stuid)->delete();
				if($result3>=0)
				{
					$db4 = M('tealesson','think_');
					$result4 = $db4->where($msp)->setDec('tealesstunum');
					if($result4>=0)
					{
						$this->redirect('Main/stuinfomanage','',2,'all success!');
					}
					else
					{
						$this->redirect('Main/index','',2,'update tealesson failed!');
					}
				}
				else
				{
					$this->redirect('Main/index','',2,'delete stulesson failed!');
				}
			}
			else
			{
				$this->redirect('Main/index','',2,'delete student failed!');
			}
		}
		else
		{
			$this->redirect('Main/index','',2,'delete stuinfo failed!');
		}
		
	}


    public function teainfomanage(){
		$db = M('teainfo','think_');
		$teacount = $db->count();
		$Page = new \Think\Page($teacount,10);
		$show = $Page->show();
		$result = $db->order('teaid')->limit($Page->firstRow.','.$Page->listRows)->select();
		$this->assign('result',$result);
		$this->assign('page',$show);
		$this->display();
	}


    public function udteainfomb(){
		$data['teaid'] = I('get.teaid');
		$data['teaname'] = I('get.teaname');
		$data['teasex'] = I('get.teasex');
		$data['teaage'] = I('get.teaage');
		$data['teafaction'] = I('get.teafaction');
		$this->assign("data",$data);
		$this->display();
	}

    public function udteainfo(){
		$data['teaid'] = I('post.teaid');
		$data['teaname'] = I('post.teaname');
		$data['teasex'] = I('post.teasex');
		$data['teaage'] = I('post.teaage');
		$data['teafaction'] = I('post.teafaction');
  		$data['lestea'] = I('post.teaname');

		$db = M('teainfo','think_');
		$result1 = $db->where('teaid=%d',$data['teaid'])->field('teaname,teasex,teaage,teafaction')->save($data);
		
		if($result1)
		{
			$db2 = M('teacher','think_');
			$result2 = $db2->where('teaid=%d',$data['teaid'])->field('teaname')->save($data);
			
			if($result2>=0)
			{
				$db3 = M('tealesson','think_');
				$result3 = $db3->where('teaid=%d',$data['teaid'])->field('teaname')->save($data);
				if($result3>=0)
				{
					/*$db4 = M('alllesson','think_');
					$result4 = $db4->where('teaid='.$data['teaid'])->field('lestea')->save($data);
					if($result4>=0)
					{
						$this->redirect('Main/teainfomanage','',2,'update all success!');
					}
					else
					{
						$this->redirect('Main/udteainfomb','',2,'update alllesson failed!');
					}*/
					$this->redirect('Main/teainfomanage','',2,'update all success!');


				}
				else
				{
					$this->redirect('Main/udteainfomb','',2,'update tealesson failed!');
				}
			}
			else
			{
				$this->redirect('Main/udteainfomb','',2,'update teacher failed!');
			}
			
		}
		else
		{
			
			$this->redirect('Main/udstuinfomb','',2,'update teainfo failed!');
		}



	}


    public function deltea(){
		$db = M('teainfo','think_');
		$teaid = I('get.teaid');
		$result = $db->where('teaid=%d',$teaid)->delete();
		if($result)
		{
			$db2 = M('teacher','think_');
			$result2 = $db2->where('teaid=%d',$teaid)->delete();
			if($result2)
			{
				$db3 = M('tealesson','think_');
				$tealesidlist = $db3->where('teaid=%d',$teaid)->getField('lesid',true);   //获取该教师开设的所有课程的lesid
				$map['lesid']  = array('in',$tealesidlist);

				
				$result3 = $db3->where('teaid=%d',$teaid)->delete();
				if($result3>=0)
				{
					if($result3>0)   //有开课
					{
						$db4 = M('stuinfo','think_');
						$db5 = M('stulesson','think_');
						for($i=0;$i<count($tealesidlist);$i++)   //循环遍历该教师的所有课程
						{
							$stuidlist = $db5->where('lesid=%d',$tealesidlist[$i])->getField('stuid',true);   //获取选了该课程的所有学生的stuid
							$mapp['stuid'] = array('in',$stuidlist);
							$result4 = $db4->where($mapp)->setDec('stulesnum');   //选了该课的学生的stulesnum减1
						}
						$result4 = $db5->where($map)->delete();
						if($result4)
						{
							$this->redirect('Main/index','',2,'all success!');
						}
						else
						{
							$this->redirect('Main/index','',2,'delete stulesson failed!');
						}
						
						
					}
					else
					{
						$this->redirect('Main/index','',2,'all success!');
					}
				}
				else
				{
					$this->redirect('Main/index','',2,'delete tealesson failed!');
				}
				
			}
			else
			{
				$this->redirect('Main/index','',2,'delete teacher failed!');		
			}
		}
		else 
		{
			$this->redirect('Main/index','',2,'delete teainfo failed!');
		}
	}



    public function stulesmanage(){
		$db = M('stulesson','think_');
		$stulescount = $db->count();
		$Page = new \Think\Page($stulescount,10);
		$show = $Page->show();
		$stulesinfo = $db->order('stuid')->select();
		$this->assign('stulesinfo',$stulesinfo);
		$this->assign('page',$show);
		$this->display();
	}



    public function tealesmanage(){
		$db = M('tealesson','think_');
		$tealescount = $db->count();
		$Page = new \Think\Page($tealescount,10);
		$show = $Page->show();
		$tealesinfo = $db->order('teaid')->select();
		$this->assign('tealesinfo',$tealesinfo);
		$this->assign('page',$show);
		$this->display();
	}

    public function stumanage(){
		$db = M('student','think_');
		$stucount = $db->count();
		$Page = new \Think\Page($stucount,10);
		$show = $Page->show();
		$stuuserinfo = $db->order('stuid')->select();
		$this->assign('stuuserinfo',$stuuserinfo);
		$this->assign('page',$show);
		$this->display();
	}
    public function teamanage(){
		$db = M('teacher','think_');
		$teacount = $db->count();
		$Page = new \Think\Page($teacount,10);
		$show = $Page->show();
		$teauserinfo = $db->order('teaid')->select();
		$this->assign('teauserinfo',$teauserinfo);
		$this->assign('page',$show);
		$this->display();
	}

    public function adminmanage(){
		$db = M('admin','think_');
		$admincount = $db->count();
		$Page = new \Think\Page($admincount,5);
		$show = $Page->show();
		$admininfo = $db->order('id')->select();
		$this->assign('admininfo',$admininfo);
		$this->assign('page',$show);
		$this->display();
	}

    public function deladmin(){
		$db = M('admin','think_');
		$id = I('get.id');
		$result = $db->where('id='.$id)->delete();
		if($result)
		{
			$this->redirect('Main/index','',2,'delete admin success!');
		}
		else
		{
			$this->redirect('Main/index','',2,'delete admin failed!');
		}

	}

    public function addadmin(){
		
		if(isset($_POST['aname']))
		{
			$db = M('admin','think_');
			$data['aname'] = I('post.aname');
			$apwd = I('post.apwd');
			$data['apwd'] = md5($apwd);
			
			$result = $db->add($data);
			if($result)
			{
				$this->redirect('Main/index','',2,'add admin success!');
			}
			else
			{
				$this->redirect('Main/index','',2,'add admin failed!');
			}

		}
		
		else
		{
			$this->display();
		}
	}

    public function changeapwd(){
		if(isset($_POST['new_apwd']))
		{
			$db = M('admin','think_');
			$aname = I('post.aname');
			$old_apwd = I('post.old_apwd');
			$new_apwd = I('post.new_apwd');
			$data['apwd'] = md5($new_apwd);
			$old_apwddb = $db->where('aname='."'".$aname."'")->getField('apwd');
			if(md5($old_apwd)==$old_apwddb)
			{
				
				$result = $db->where('aname='."'".$aname."'")->field('apwd')->save($data);
				if($result)
				{
					$_SESSION=array();
         				$this->success('密码修改成功',__MODULE__.'/Index/index',5);
					//$this->redirect('Main/index','',2,'change apwd success!');
				}
				else
				{
					$this->redirect('Main/index','',2,'change apwd failed!');
				}
				
			}
			else
			{
				$this->redirect('Main/index','',2,'old apwd error!');
			}
		}
		else
		{
			$this->display();
		}
		

	}

    public function addstu(){
		if(isset($_POST['stuid']))
		{
			$data['stuid'] = I('post.stuid');
			$data['stuname'] = I('post.stuname');
			$data['stupwd'] = md5(I('post.stupwd'));

			$data['stusex'] = I('post.stusex');
			$data['stuage'] = I('post.stuage');
			$data['stufaction'] = I('post.stufaction');
			$data['stulesnum'] = I('post.stulesnum');
			
			$db = M('student','think_');
			$result = $db->add($data);
			if($result)
			{
				$db2 = M('stuinfo','think_');
				$result2 = $db2->add($data);
				if($result2)
				{
					$this->success('add student all success',__MODULE__.'/Main/index',5);
				}
				else
				{
					$this->error('add student to stuinfo failed',__MODULE__.'/Index/index',5);
				}
			}
			else
			{
				$this->error('add student failed',__MODULE__.'/Index/index',5);
			}
	
		}
		else
		{
			$this->display();
		}
	}



    public function addtea(){
		if(isset($_POST['teaid']))
		{
			$data['teaid'] = I('post.teaid');
			$data['teaname'] = I('post.teaname');
			$data['teapwd'] = md5(I('post.teapwd'));

			$data['teasex'] = I('post.teasex');
			$data['teaage'] = I('post.teaage');
			$data['teafaction'] = I('post.teafaction');
			$data['tealesnum'] = I('post.tealesnum');
			
			$db = M('teacher','think_');
			$result = $db->add($data);
			if($result)
			{
				$db2 = M('teainfo','think_');
				$result2 = $db2->add($data);
				if($result2)
				{
					$this->success('add teacher all success',__MODULE__.'/Main/index',5);
				}
				else
				{
					$this->error('add teacher to stuinfo failed',__MODULE__.'/Index/index',5);
				}
			}
			else
			{
				$this->error('add teacher failed',__MODULE__.'/Index/index',5);
			}
	
		}
		else
		{
			$this->display();
		}
	}



}
