<?php

class user_index extends BaseController {

	public function init(){
		$this->userinfo_model = $this->initModel('userinfo_model');
		
		$this->view->assign('t',5) ;
		$this->view->display2('title.php','comm');
	}
	public function destroy(){
		$this->view->display2('footer.php','comm');
	}
	
	public function defaultAction(){
		$this->view->display('user_reg.php');
	}
	
	//登陆
	public function loginAction(){
		$this->view->display('user_login.php');
	}
	public function loginSubmitAction(){
		$start = microtime(true)*1000 ;
		$log = __CLASS__."|".__FUNCTION__ ;
		
		$name = $_POST['name'] ;
		$password = $_POST['password'] ;
		$log .= "|$name,$password" ;
		$result = $this->userinfo_model->query(array('name'=>$name)) ;
		
		if(!empty($result) && sizeof($result)==1){
			$userinfo = $result[0] ;
			if(md5($password) == $userinfo['password']){
				//登陆成功
				@session_start ();
				$_SESSION[FinalClass::$_session_user] = $userinfo ;
				
				echo true ;
				
				$log .= "|true" ;
				$log .= "|".(int)(microtime(true)*1000-$start) ;
				Log::logBusiness($log) ;
				return ;
			}
		}
		echo false ;
		
		$log .= "|false" ;
		$log .= "|".(int)(microtime(true)*1000-$start) ;
		Log::logBusiness($log) ;
	}
	
	//注册
	public function regAction(){
		$this->view->display('user_reg.php');
	}
	public function regSubmitAction(){
		$start = microtime(true)*1000 ;
		$log = __CLASS__."|".__FUNCTION__ ;
		
		$data = $_POST ;
		$data['password'] = md5($data['password']) ;
		$result = $this->userinfo_model->insert($data) ;
		
		//自动登录
		$name = $_POST['name'] ;
		$userlist = $this->userinfo_model->query(array('name'=>$name)) ;
		@session_start ();
		$_SESSION[FinalClass::$_session_user] = $userlist[0] ;
		
		$url = FinalClass::$_home_url ;
		if(!empty($_POST['url'])){
			$url = $_POST['url'] ;
		}
		header("location:$url") ;
		
		$log .= "|$result|$url" ;
		$log .= "|".(int)(microtime(true)*1000-$start) ;
		Log::logBusiness($log) ;
	}
	//修改信息
	public function infoAction(){
		@session_start ();
		$user = $_SESSION[FinalClass::$_session_user] ;
		if(empty($user)){
			header("location:login.php?url=".$_SERVER['REQUEST_URI']) ;
			die() ;
		}
		$user = $this->userinfo_model->queryById($user['id']) ;
		$this->view->assign('user',$user) ;
		$this->view->display('user_info.php');
	}
	public function infoSubmitAction(){
		$start = microtime(true)*1000 ;
		$log = __CLASS__."|".__FUNCTION__ ;
		
		$result = $this->userinfo_model->update($_POST) ;
		$url = FinalClass::$_home_url ;
		if(!empty($_POST['url'])){
			$url = $_POST['url'] ;
		}
		header("location:$url") ;
		
		$log .= "|$result|$url" ;
		$log .= "|".(int)(microtime(true)*1000-$start) ;
		Log::logBusiness($log) ;
	}
	//修改密码
	public function pwdAction(){
		@session_start ();
		$user = $_SESSION[FinalClass::$_session_user] ;
		if(empty($user)){
			header("location:login.php?url=".$_SERVER['REQUEST_URI']) ;
			die() ;
		}
		$this->view->assign('user',$user) ;
		$this->view->display('user_pwd.php');
	}
	
	//退出
	public function loginoutAction(){
		@session_start ();
		$_SESSION [FinalClass::$_session_user] = null ;
		unset($_SESSION[FinalClass::$_session_user]) ;
		
		$url = "login.php" ;
		header("location:$url") ;
	}
}

?>