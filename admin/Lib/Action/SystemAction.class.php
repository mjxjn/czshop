<?php
/**
 * Global set - Site set
 * @author DouShiChao <coolboydsc@163.com>
 */
if(!defined("Commerz")) exit("Access Denied");
class SystemAction extends CommonAction {

	/**
	 * Global set - Site set
	 */
    public function siteset(){

    	$groupid = empty($_GET['groupid']) ? '1' : $_GET['groupid'];

    	$system = D("System/System");

    	$where = "groupid = ".$groupid;

    	$list = $system->scope("field")->where($where)->order("sort asc")->select();

    	foreach ($list as $key => $value) {
    		$list[$key]['list'] = unserialize($value['list']);
    	}
    	$this->assign('list',$list);
    	$this->assign('groupid',$groupid);
    	
		$this->display();
    }
    /**
     * Global set - register set
     */
    public function regset(){

        $system = D("System/System");

        $where = "groupid = 6";

        $list = $system->scope("field")->where($where)->scope("order")->select();

        foreach ($list as $key => $value) {
            $list[$key]['list'] = unserialize($value['list']);
        }
        $this->assign('list',$list);

        $this->assign('groupid','6');

        $this->display();
    }
    /**
     * Global set - Login set
     */
    public function logset(){

        $connector = D("System/Author_connector");

        import('ORG.Util.Page');

        $count = $connector->count();

        $Page = new Page($count,10);

        $show = $Page->show();

        $list = $connector->scope("field")->limit($Page->firstRow.','.$Page->listRows)->select();

        $this->assign('list',$list);

        $this->assign('page',$show);

        $this->display();
    }
    /**
     * Global set - set save
     */
    public function save(){
        if(empty($_POST['groupid']) || empty($_POST['system'])){
            $this->error(L('param_error'));
        }
        $system = D("System/System");

        foreach ($_POST['system'] as $key => $value) {
           $system->where("varname = '".$key."' and groupid = ".$_POST['groupid'])->setField("value",$value);
        }

        $this->success(L('edit_success'));
    }
    public function emailset(){
        $system = D("System/System");

        $where = "groupid = 7";

        $list = $system->scope("field")->where($where)->scope("order")->select();

        foreach ($list as $key => $value) {
            $list[$key]['list'] = unserialize($value['list']);
        }
        $this->assign('list',$list);

        $this->assign('groupid','7');

        $this->display();
    }
    /**
     * 测试邮件
     */
    public function emailtest(){
        $this->display();
    }
    /**
     * a
     */
    public function a(){
        $array[0]['val'] = "1";
        $array[0]['lang'] = "订单下单成功时库存下降";
        $array[1]['val'] = "2";
        $array[1]['lang'] = "订单下单发货时库存下降";

        echo serialize($array);
    }
}