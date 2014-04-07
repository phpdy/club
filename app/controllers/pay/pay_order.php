<?php

class pay_order extends BaseController {

	public function init(){
		$this->index_model = $this->initModel('index_model','index');
		$this->userinfo_model = $this->initModel('userinfo_model','user');
		$this->pay_model = $this->initModel('pay_model');
		
		$this->view->assign('t',5) ;
		
		$title = array(
			0	=> '首页' ,
			1	=> '摄影之旅' ,
			2	=> '摄影课程' ,
			3	=> '公益活动' ,
			4	=> '关于我们' ,
			5	=> '会员中心' ,
		) ;
		$this->view->assign('title',$title) ;
		$this->view->display2('title.php','comm');
	}
	public function destroy(){
		$this->view->display2('footer.php','comm');
	}
	
	public function defaultAction(){
//		print_r($_SERVER) ; die();
		//用户登录检验
		@session_start ();
		$user = $_SESSION[FinalClass::$_session_user] ;
		if(empty($user)){
			header("location:login.php?url=".$_SERVER['REQUEST_URI']) ;
			die() ;
		}
		
		//用户信息完整性校验
		$user = $this->userinfo_model->queryById($user['id']) ;
		if(empty($user['mobile']) || empty($user['address'])){
			header("location:user.php?action=info&url=".$_SERVER['REQUEST_URI']) ;
			die() ;
		}
		$id = empty($_GET['id'])?0:$_GET['id'] ;
		$result = $this->index_model->getNewsByid($id) ;
		$this->view->assign('id',$id) ;
		$this->view->assign('news',$result) ;
		$this->view->assign('user',$user) ;
		
		$this->view->display('pay_order.php');
	}
	
}
?>