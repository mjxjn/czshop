<?php
/**
 * Global set - Shipping set
 * @author DouShiChao <coolboydsc@163.com>
 */
if(!defined("Commerz")) exit("Access Denied");
class ShippingAction extends CommonAction {
	public function index(){

		$shipping = D("System/Shipping");

        import('ORG.Util.Page');

        $count = $shipping->count();

        $Page = new Page($count,10);

        $show = $Page->show();

        $list = $shipping->scope("field")->limit($Page->firstRow.','.$Page->listRows)->select();

        $this->assign('list',$list);

        $this->assign('page',$show);

        $this->display();
	}

	public function modify(){
		if(empty($_GET['id'])){
			$this->error('参数有误！');
		}

		$shipping = D("System/Shipping");

		$data = $shipping->getShippingById($_GET['id']);

		if(!$data){
			$this->error('参数有误！');
		}

		$this->assign('data',$data);

		$this->display();
	}

	public function savemodify(){
		if(empty($_POST['shipping_id'])){
			$this->error('参数有误！');
		}

		$shipping = D("System/Shipping");

		$data = $shipping->getShippingById($_POST['shipping_id']);

		if(!$data){
			$this->error('参数有误！');
		}

		if(!$shipping->create()){
			$this->error($shipping->getError());
		}

		if(!$shipping->save()){
			$this->error('修改失败！');
		}

		$this->error('修改成功！',U('shipping/index'));
	}
}