<?php
//
class index_model extends BaseModel {
	protected $dbIndex = 'admin';
	protected $dbTable = "userinfo" ;
	
	protected $items = array('name','times','info','imgurl') ;


	protected function getOrder(){
		return "order by id " ;
	}
	
	public function getNewsList($typeid){
		$item = array() ;
		for($i=0;$i<8;$i++){
			$t = $i%4+1 ;
			$item[] = array(
				'id'	=>	$i ,
				'imgurl'	=>	"/img/img0{$t}.jpg" ,
				'info'		=>	'photo workshop:london' ,
				'times'		=>	'7 Days' ,
			) ;
		}
		$newlist['活动预告'] = $item ;
		
		$item = array() ;
		for($i=0;$i<6;$i++){
			$t = $i%4+1 ;
			$item[] = array(
				'id'	=>	$i ,
				'imgurl'	=>	"/img/img0{$t}.jpg" ,
				'info'		=>	'photo workshop:london' ,
				'times'		=>	'7 Days' ,
			) ;
		}
		$newlist['活动回顾'] = $item ;
		
		return $newlist ;
	}
}

