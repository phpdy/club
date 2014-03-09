<?php

class manager_img extends BaseController {

	private $list = array(
			1	=>	'摄影之旅',
			2	=>	'摄影课程',
			3	=>	'公益活动',
			4	=>	'作品展示',
			5	=>	'活动视频',
		);
	public function init(){
		$this->manager_model = $this->initModel('manager_model');
		
		$id 	= $_GET['id'] ;
		$club 	= $this->manager_model->queryById($id) ;
		$this->view->assign('club',$club) ;
	}

	//添加
	public function addAction(){
		$this->view->display('img_list.php');
	}
	
}

?>