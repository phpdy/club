<?php
//
class index_model extends BaseModel {
	protected $dbIndex = 'phpcms';
	protected $dbTable = "userinfo" ;
	
	protected $items = array('name','times','info','imgurl') ;


	protected function getOrder(){
		return "order by id " ;
	}
	
	public function getNewsList($pid){
		
		$sql = "select id,catid,title,thumb,description,url,inputtime from v9_club where catid=$pid order by inputtime desc" ;
		$result = $this->getAll($sql) ;
		
		foreach ($result as $item){
			$time = $item['inputtime'] ;
			$newItem = array(
				'id'		=>	$item['id'] ,
				'imgurl'	=>	$item['thumb'] ,
				'title'		=>	$item['title'] ,
				'desc'		=>	$item['description'] ,
				'time'		=>	$time ,
				'date'		=>	date('Y-m-d ',$time) ,
			) ;
			$newlist[] = $newItem ;
		}
		
		return $newlist ;
	}
	
	public function getNewsContent($id){
		$sql = "select id,content from v9_club_data where id=$id" ;
		$result = $this->getOne($sql) ;
		
		return $result ;
	}
}

