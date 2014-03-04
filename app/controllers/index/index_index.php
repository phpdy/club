<?php

class index_index extends BaseController {

	public function init(){
		$this->userinfo_model = $this->initModel('userinfo_model','user');
		
		$t = $_GET['t'] ;
		$this->view->assign('t',$t) ;
		include './comm/title2.php';
	}

	public function destroy(){
		include "./comm/footer.php";
	}
	
	public function defaultAction(){
		
		$this->view->display('index.php');
	}

	
}
?>