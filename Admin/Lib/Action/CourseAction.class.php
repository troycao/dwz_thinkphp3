<?php
class CourseAction extends CommonAction {
	function insert(){
		$Course = M('Course');
		$Course->create();
		$result= $Course->add();
			if(false !== $result)
			{
				$this->success($Course->getLastSql());
			}
			else{
				$this->error($Course->getLastSql());
			}
	}
}
?>
