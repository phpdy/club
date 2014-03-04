<?php

class index_index extends BaseController {

	public function init(){
		$this->userinfo_model = $this->initModel('userinfo_model','user');
		
		$t = $_GET['t'] ;
		$this->view->assign('t',$t) ;
		$this->view->display2('title.php','comm');
	}

	public function destroy(){
		$this->view->display2('footer.php','comm');
	}
	
	public function defaultAction(){
		$t = $_GET['t'] ;
		switch ($t){
			case 0: 
				$this->view->display('index.php');
				break ;
			case 1: 
			case 2: 
			case 3: 
				$this->view->display('main1.php');
				break ;
			case 4: 
				header("location: ours.php") ;
				break ;
			case 5: 
				header("location: reg.php") ;
				break ;
			
		}
	}

	
}
?>