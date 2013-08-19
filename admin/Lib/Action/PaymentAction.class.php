<?php
/**
 * Global set - Payment set
 * @author DouShiChao <coolboydsc@163.com>
 */
if(!defined("Commerz")) exit("Access Denied");
class PaymentAction extends CommonAction {
	/**
	 * Payment List
	 */
	public function index(){

		$payment = D("System/Payment");

        import('ORG.Util.Page');

        $count = $payment->count();

        $Page = new Page($count,10);

        $show = $Page->show();

        $list = $payment->scope("field")->limit($Page->firstRow.','.$Page->listRows)->select();

        $this->assign('list',$list);

        $this->assign('page',$show);

        $this->display();
	}
	/**
	 * Payment Config
	 */
	public function config(){
		if(empty($_GET['id'])){
			$this->error('参数有误！');
		}

		$payment = D("System/Payment");

		$data = $payment->getPaymentById($_GET['id']);

		$this->assign('data',$data);

		switch ($_GET['id']) {
			case '1':
				$this->display("cash");
				break;
			case '2':
				$this->display("alipay");
				break;
			case '3':
				$this->display("tenpay");
				break;
			case '4':
				$this->display("kuaiqian");
				break;
			case '5':
				$this->display("ips");
				break;
			case '6':
				$this->display("ebank");
				break;
			default :
				$this->error('参数有误！');
				break;
		}
	}

	public function saveconfig(){
		if(empty($_POST['pay_id'])){
			$this->error('参数有误！');
		}

		$payment = D("System/Payment");

		$data = $payment->getPaymentById($_POST['pay_id']);

		if(!$data){
			$this->error('参数有误！');
		}

		if(!$payment->create()){
			$this->error($payment->getError());
		}

		if(!$payment->save()){
			$this->error('配置失败！');
		}

		$this->error('配置成功！',U('payment/index'));
	}
}