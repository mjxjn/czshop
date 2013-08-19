<?php
if(!defined("Commerz")) exit("Access Denied");
class adminUserAction extends CommonAction {
	public function index(){
		$adminUser=D('System/AdminUser');
		import('ORG.Util.Page');// 导入分页类
		$count = $adminUser->scope('default')->count();// 查询满足要求的总记录数

		$Page = new Page($count,11);// 实例化分页类 传入总记录数和每页显示的记录数
		$Page->setConfig('first',L('first_page'));
		$Page->setConfig('last',L('last_page'));
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
			if(empty($_POST['password'])){
				$this->error(L('no_password'));
				exit();
			}
			$adminUser=D('System/AdminUser');
			if (!$adminUser->create()){
			    	// 如果创建失败 表示验证没有通过 输出错误提示信息
				$this->error($adminUser->getError());
			}else{
			    	// 验证通过
			    	$admin_id = $adminUser->add();
			    	admin_log($admin_id,'adminuser','ok_adminadd');
			    	$this->success(L('ok_adminadd'));
			}
			exit();
		}
		$this->display();
	}

	/**
	 * [update description]
	 * @return [type] [description]
	 */
	public function update(){
		if($_POST['act']=='edit'){
			$adminUser=D('System/AdminUser');
			if (!$adminUser->create()){
				$this->error($adminUser->getError());
			}else{
				if(!empty($_POST['password'])){
					$adminUser->password = md5($_POST['password']);
				}
				$adminUser->save();
				admin_log($_POST['admin_id'],'adminuser','ok_adminedit');
				$this->success(L('ok_adminedit'));
				exit();
			}
		}
		$admin_id = isset($_POST['id'])?$_POST['id']:0;
		$adminUser=D('System/AdminUser');
		$info = $adminUser->scope('info')->where("admin_id=%d",array($admin_id))->find();
		if(empty($info)){
			$data['status'] = 0;
			$data['info'] = L('no_adminuser');
		}else{
			$data['status'] = 1;
			$data['info'] = L('success');
			$data['data'] = $info;
		}
		$this->ajaxReturn($data,'JSON'); 
	}
	/***/
	public function delete(){
		$admin_id = isset($_GET['id'])?$_GET['id']:0;
		$adminUser=D('System/AdminUser');
		$info = $adminUser->where("admin_id=%d",array($admin_id))->delete();
		if(empty($info)){
			$this->error(L('no_adminuser'));
		}else{
			admin_log($admin_id,'adminuser','ok_admindel');
			$this->success(L('ok_admindel'));
		}
	}
}