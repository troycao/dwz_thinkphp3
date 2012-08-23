<?php
// 后台用户模块
class PingjiaAction extends CommonAction {
	function _filter(&$map){
		  $map['id'] = array('egt',2);
		$map['account'] = array('like',"%".$_POST['account']."%");
	}
	// 检查帐号
	public function checkAccount() {
        if(!preg_match('/^[a-z]\w{4,}$/i',$_POST['account'])) {
            $this->error( '用户名必须是字母，且5位以上！');
        }
		$User = M("User");
        // 检测用户名是否冲突
        $name  =  $_REQUEST['account'];
        $result  =  $User->getByAccount($name);
        if($result) {
        	$this->error('该用户名已经存在！');
        }else {
           	$this->success('该用户名可以使用！');
        }
    }
	 function index() {
		//列表过滤器，生成查询Map对象
		$map = $this->_search ();
		if (method_exists ( $this, '_filter' )) {
			$this->_filter ( $map );
		}
		$name=$this->getActionName();
		$model = D ($name);
		$model ->where("cid={$_GET['id']}")->find();
		if (! empty ( $model )) {
			$this->_list ( $model, $map );
		}
		$this->display ();
		return;
	}    
	// 插入数据
	public function insert() {
		// 创建数据对象
		$Pingjia     =	  D("Pingjia");
		if(!$Pingjia->create()) {
			$this->error($Pingjia->getError());
		}else{
			// 写入帐号数据
			if($result	 =	 $Pingjia->add()) {
				$this->success('添加成功！');
			}else{
				$this->error('添加失败！');
			}
		}
	}

    //重置密码
    public function resetPwd()
    {
    	$id  =  $_POST['id'];
        $password = $_POST['password'];
        if(''== trim($password)) {
        	$this->error('密码不能为空！');
        }
        $User = M('User');
		$User->password	=	md5($password);
		$User->id			=	$id;
		$result	=	$User->save();
        if(false !== $result) {
            $this->success("密码修改为$password");
        }else {
        	$this->error('重置密码失败！');
        }
    }
    
 
}
?>
