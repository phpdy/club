<?php

class manager_club extends BaseController {

	private $list = array(
			1	=>	'摄影之旅',
			2	=>	'摄影课程',
			3	=>	'公益活动',
			4	=>	'作品展示',
			5	=>	'活动视频',
		);
	public function init(){
		$this->manager_model = $this->initModel('manager_model');
		
		$t = empty($_GET['t'])?1:$_GET['t'] ;
		$this->view->assign('t',$t) ;
		$this->view->assign('type',$this->list[$t]) ;
		$this->view->assign('typelist',$this->list) ;
	}
	//添加
	public function addAction(){
		$this->view->display('club_add.php');
	}
	public function submitAction(){
		$start = microtime(true)*1000 ;
		$log = __CLASS__."|".__FUNCTION__ ;
		
		if(empty($_GET['id'])){
			$result = $this->manager_model->insert($_GET) ;
		} else {
			$result = $this->manager_model->update($_GET) ;
		}
		if(empty($result)){
			echo "fail" ;
		}
		$this->listAction();
		$log .= "|".(int)(microtime(true)*1000-$start) ;
		Log::logBusiness($log) ;
	}
	//列表
	public function listAction(){
		$start = microtime(true)*1000 ;
		$log = __CLASS__."|".__FUNCTION__ ;
		$result = $this->manager_model->query() ;
		
		$this->view->assign('list',$result) ;
		$this->view->display('club_list.php');
		
		$log .= "|".(int)(microtime(true)*1000-$start) ;
		Log::logBusiness($log) ;
	}

	//修改
	public function upAction(){
		$start = microtime(true)*1000 ;
		$log = __CLASS__."|".__FUNCTION__ ;
		
		$id = $_GET['id'] ;
		$result = $this->manager_model->queryById($id) ;
		$this->view->assign('club',$result) ;
		
		$this->view->display('club_up.php');
		
		$log .= "|".(int)(microtime(true)*1000-$start) ;
		Log::logBusiness($log) ;
	}
	
	//模块禁用开启
	public function up2Action(){
		$start = microtime(true)*1000 ;
		$log = __CLASS__."|".__FUNCTION__ ;
		$id = $_GET['id'] ;
		$log .= "|$id" ;
		$data = array(
			'id'	=> $id,
			'state'	=> 1,
		);
		$result = $this->manager_model->update($data) ;
		$this->listAction();
		$log .= "|".(int)(microtime(true)*1000-$start) ;
		Log::logBusiness($log) ;
	}
}

?>