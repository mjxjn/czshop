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
     * Global set - set save
     */
    public function save(){
        if(empty($_POST['groupid']) || empty($_POST['system'])){
            $this->error('参数有误！');
        }
        $system = D("System/System");

        foreach ($_POST['system'] as $key => $value) {
           $system->where("varname = '".$key."' and groupid = ".$_POST['groupid'])->setField("value",$value);
        }

        $this->success("修改成功！");
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
        $array[0]['lang'] = "通过 PHP 函数的 sendmail 发送(推荐此方式)";
        $array[1]['val'] = "2";
        $array[1]['lang'] = "通过 SOCKET 连接 SMTP 服务器发送(支持 ESMTP 验证)";
        $array[2]['val'] = "3";
        $array[2]['lang'] = "通过 PHP 函数 SMTP 发送 Email(仅 Windows 主机下有效，不支持 ESMTP 验证)";

        echo serialize($array);
    }
}