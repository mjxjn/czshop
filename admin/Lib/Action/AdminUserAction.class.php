<?php
class adminUserAction extends CommonAction {
	public function index(){
		$adminUser=D('adminUser','System');
		$this->display();
	}
}