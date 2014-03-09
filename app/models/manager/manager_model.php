<?php

class manager_model extends BaseModel {

	protected $dbIndex = 'admin';
	protected $dbTable = "club_content" ;
	
	protected $items = array('title','info','sdate','content','type','state','tjstate','cdate') ;
	

	protected function getOrder(){
		return "order by sdate desc " ;
	}
	
}