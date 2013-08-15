<?php
class AdminLogAction extends CommonAction{
	public function index(){
		$adminLog = D('System/adminLog');
		import('ORG.Util.Page');// 导入分页类
		$count = $adminLog->count();// 查询满足要求的总记录数

		$Page = new Page($count,11);// 实例化分页类 传入总记录数和每页显示的记录数
		$Page->setConfig('first','首页');
		$Page->setConfig('last','尾页');
		$Page->setConfig('theme','%first% %upPage% %linkPage% %downPage% %end%');
		$show = $Page->show();// 分页显示输出
		$list = $adminLog->scope('default,list')->limit($Page->firstRow.','.$Page->listRows)->select();

		//getAdmin
		$adminUser=D('System/adminUser');
		$adminlist = $adminUser->scope('selectList')->select();

		$this->assign('list',$list);
		$this->assign('page',$show);// 赋值分页输出
		$this->assign('adminlist',$adminlist);
		$this->display();
	}
}