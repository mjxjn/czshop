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

    	$system = M("System");

    	$where = "groupid = ".$groupid;

    	$list = $system->field("varname,info,groupid,value,lang,type,list")->where($where)->order("sort asc")->select();

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

        $system = M("System");

        $where = "groupid = 6";

        $list = $system->field("varname,info,groupid,value,lang,type,list")->where($where)->order("sort asc")->select();

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
        $system = M("System");

        foreach ($_POST['system'] as $key => $value) {
           $system->where("varname = '".$key."' and groupid = ".$_POST['groupid'])->setField("value",$value);
        }

        $this->success("修改成功！");
    }
    /**
     * a
     */
    public function a(){
        $array[0]['val'] = "0";
        $array[0]['lang'] = "无需验证";
        $array[1]['val'] = "1";
        $array[1]['lang'] = "Email 验证";
        $array[2]['val'] = "2";
        $array[2]['lang'] = "手机验证";

        echo serialize($array);
    }
}