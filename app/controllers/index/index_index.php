<?php

class index_index extends BaseController {

	public function init(){
		$this->index_model = $this->initModel('index_model','index');
		
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
				$this->view->assign('bigimg',"/img/{$t}01.jpg") ;
				
				$hd = array(
					'title'	=>	'跟顶级摄影师到最美的地方学习摄影',
					'info'	=>	"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;纽摄俱乐部自2006年起在中国、柬埔寨、尼泊尔、斯里兰卡、土耳其、美国、加拿大、丹麦、瑞典、挪威等地举办各种摄影实践及创作活动。让你在世界上最美的地方和专业的摄影师学习专业的技巧和技术。<br>"
					."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;我们将邀请资深专业摄影师带领富有创作欲望的爱好者，共同探索世界最美的地方，共同分享关于摄影的技巧，洞察力以及对摄影的热情，进一步磨练自己的摄影技巧和艺术眼光。<br/>",
					'img'	=>	"/img/{$t}02.jpg",
				) ;
				$this->view->assign('hd',$hd) ;
				
				$list = $this->index_model->getNewsList($t) ;
				$this->view->assign('list',$list) ;
				$this->view->display('news.php');
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