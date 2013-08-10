<?php
class adminUserAction extends CommonAction {
	public function index(){
		$adminUser=D('System/admin_user');
		import('ORG.Util.Page');// 导入分页类
		$count = $adminUser->scope('default')->count();// 查询满足要求的总记录数

		$Page = new Page($count,18);// 实例化分页类 传入总记录数和每页显示的记录数
		$Page->setConfig('first','首页');
		$Page->setConfig('last','尾页');
		$Page->setConfig('theme','%first% %upPage% %linkPage% %downPage% %end%');
		$show = $Page->show();// 分页显示输出
		$list = $adminUser->scope('list')->limit($Page->firstRow.','.$Page->listRows)->select();
		$this->assign('list',$list);
		$this->assign('page',$show);// 赋值分页输出
		$this->display();
	}

	/**/
	public function create(){
		if($_POST){
			$adminUser=D('System/admin_user');
			if (!$adminUser->create()){
			    	// 如果创建失败 表示验证没有通过 输出错误提示信息
				$this->error($adminUser->getError());
			}else{
			    	// 验证通过
			    	$adminUser->add();
			    	$this->success('添加管理员成功');
			}
		}
		$this->display();
	}

	/**
	 * [update description]
	 * @return [type] [description]
	 */
	public function update(){
		if($_POST['act']=='edit'){
			$adminUser=D('System/admin_user');
			if (!$adminUser->create()){
				$this->error($adminUser->getError());
			}else{
				if(!empty($_POST['password'])){
					$adminUser->password = md5($_POST['password']);
				}
				$adminUser->save();
				$this->success('修改管理员成功');
				exit();
			}
		}
		$admin_id = isset($_POST['id'])?$_POST['id']:0;
		$adminUser=D('System/admin_user');
		$info = $adminUser->scope('info')->where("admin_id=%d",array($admin_id))->find();
		if(empty($info)){
			$data['status'] = 0;
			$data['info'] = '没有此管理员';
		}else{
			$data['status'] = 1;
			$data['info'] = '成功';
			$data['data'] = $info;
		}
		$this->ajaxReturn($data,'JSON'); 
	}
}