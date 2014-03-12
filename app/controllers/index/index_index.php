<?php

class index_index extends BaseController {

	public function init(){
		$this->index_model = $this->initModel('index_model','index');
		
		$t = empty($_GET['t'])?0:$_GET['t'] ;
		$this->view->assign('t',$t) ;
		$this->view->display2('title.php','comm');
	}

	public function destroy(){
		$this->view->display2('footer.php','comm');
	}
	
	public function defaultAction(){
		$t = empty($_GET['t'])?0:$_GET['t'] ;
		switch ($t){
			case 0:
				$this->getIndexData();
				$this->view->display('index.php');
				break ;
			case 1:
			case 2:
			case 3:
				$this->getData($t) ;
				$this->view->display('news.php');
				break ;
			case 4:
				header("location: ours.php?t=$t") ;
				break ;
			case 5:
				header("location: user.php") ;
				break ;
		}
	}
	
	private function getIndexData(){
		$club47 = $this->index_model->getNewsList(47) ;
		$club48 = $this->index_model->getNewsList(48) ;
		$club49 = $this->index_model->getNewsList(49) ;
		$club51 = $this->index_model->getNewsList(51) ;
		$club52 = $this->index_model->getNewsList(52) ;
		
		$list = array(
			1	=>	$club47 ,
			2	=>	$club48 ,
			3	=>	$club49 ,
			4	=>	$club51 ,
			5	=>	$club52 ,
		) ;
		$this->view->assign('list',$list) ;
	}
	
	/**
	 * 1	=> '摄影之旅' ,47
	   2	=> '摄影课程' ,48
	   3	=> '公益活动' ,49
	 * @param unknown_type $t
	 */
	private function getData($t){
		switch ($t){
			case 1:
				$id = 47 ;
				$this->view->assign('bigimg',"/img/{$t}01.jpg") ;
				$hd = array(
					'title'	=>	'跟顶级摄影师到最美的地方学习摄影',
					'info'	=>	"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;纽摄俱乐部自2006年起在中国、柬埔寨、尼泊尔、斯里兰卡、土耳其、美国、加拿大、丹麦、瑞典、挪威等地举办各种摄影实践及创作活动。让你在世界上最美的地方和专业的摄影师学习专业的技巧和技术。<br>"
					."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;我们将邀请资深专业摄影师带领富有创作欲望的爱好者，共同探索世界最美的地方，共同分享关于摄影的技巧，洞察力以及对摄影的热情，进一步磨练自己的摄影技巧和艺术眼光。<br/>",
					'img'	=>	"/img/{$t}02.jpg",
				) ;
				break ;
			case 2:
				$id = 48 ;
				$this->view->assign('bigimg',"/img/{$t}01.jpg") ;
				$hd = array(
					'title'	=>	'跟顶级摄影师到最美的地方学习摄影',
					'info'	=>	"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;纽摄俱乐部自2006年起在中国、柬埔寨、尼泊尔、斯里兰卡、土耳其、美国、加拿大、丹麦、瑞典、挪威等地举办各种摄影实践及创作活动。让你在世界上最美的地方和专业的摄影师学习专业的技巧和技术。<br>"
					."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;我们将邀请资深专业摄影师带领富有创作欲望的爱好者，共同探索世界最美的地方，共同分享关于摄影的技巧，洞察力以及对摄影的热情，进一步磨练自己的摄影技巧和艺术眼光。<br/>",
					'img'	=>	"/img/{$t}02.jpg",
				) ;
				break ;
			case 3:
				$id = 49 ;
				$this->view->assign('bigimg',"/img/{$t}01.jpg") ;
				$hd = array(
					'title'	=>	'跟顶级摄影师到最美的地方学习摄影',
					'info'	=>	"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;纽摄俱乐部自2006年起在中国、柬埔寨、尼泊尔、斯里兰卡、土耳其、美国、加拿大、丹麦、瑞典、挪威等地举办各种摄影实践及创作活动。让你在世界上最美的地方和专业的摄影师学习专业的技巧和技术。<br>"
					."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;我们将邀请资深专业摄影师带领富有创作欲望的爱好者，共同探索世界最美的地方，共同分享关于摄影的技巧，洞察力以及对摄影的热情，进一步磨练自己的摄影技巧和艺术眼光。<br/>",
					'img'	=>	"/img/{$t}02.jpg",
				) ;
				break ;
			
		}
		$this->view->assign('hd',$hd) ;
		$newslist = $this->index_model->getNewsList($id) ;
	
		$now = time() ;
		foreach ($newslist as $item){
			$time = $item['time'] ;
			if($time>$now){
				$list['活动预告'][] = $item ;
			} else {
				$list['历史回顾'][] = $item ;
			}
		}
		$this->view->assign('list',$list) ;
	}
	
	public function oursAction(){
		$t = 3 ;
		$this->view->assign('bigimg',"/img/{$t}01.jpg") ;
		
		$hd = array(
			'title'	=>	'跟顶级摄影师到最美的地方学习摄影',
			'info'	=>	"将邀请资深专业摄影师带领富有创作欲望的爱好者，共同探索世界最美的地方，共同分享关于摄影的技巧，洞察力以及对摄影的热情，进一步磨练自己的摄影技巧和艺术眼光。<br/>",
			'img'	=>	"/img/{$t}02.jpg",
		) ;
		$this->view->assign('hd',$hd) ;
		
		$list = $this->index_model->getNewsList($t) ;
		$this->view->assign('list',$list) ;
		$this->view->display('ours.php');
	}

	
}
?>