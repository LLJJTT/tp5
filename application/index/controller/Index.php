<?php
namespace app\index\controller;
use think\Controller;
use think\Db;
header('Access-Control-Allow-Origin:*');
// 响应类型
header('Access-Control-Allow-Methods:*');
// 响应头设置
header('Access-Control-Allow-Headers:x-requested-with,content-type');


class Index {
	//增
	public function add(){
		$insert = Db::execute("insert into user(phoneNumber) values(18700000000)");
		dump($insert);
	} 

	//删  
	public function delete(){
		$del    = Db::execute('delete from scenery where telephone = "13766808376"');
		echo '<hr/>';
		dump($del);
	}
	
	//改
	public function modify(){
		$save   = Db::execute('update scenery set name = "冰雪大世界99999" where scenery_id = 3');
		$data  = array();
		$result = array(  
			'code'=>'200',  
			'msg'=>'成功', 
			'data'=>$data,
		  );  
		  //输出json  
		  echo json_encode($result);  
		  exit; 
	}
	
	// 查
	public function getCity(){
		$result = Db::query('select * from city');
		return json_encode($result);
	}
}
