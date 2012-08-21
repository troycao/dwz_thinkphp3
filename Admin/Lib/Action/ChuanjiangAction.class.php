<?php
class ChuanjiangAction extends CommonAction {
	function insert(){
		$Data = M('course');
		$Data->cname = $_POST['content'];
		$Data->ctime = $_POST['date'];
		$Data->cpro  = $_POST['orgLookup.orgName'];
		$Data->cplace= $_POST['place'];
		$result= $Data->save(course);
			if(false !== $result)
			{
				$this->success("添加成功!");
			}
			else{
				$this->error('添加失败');
			}
	}
}
?>
