<?php
/**
 * Global set - Area set
 * @author DouShiChao <coolboydsc@163.com>
 */
if(!defined("Commerz")) exit("Access Denied");
class AreaAction extends CommonAction {

	/**
	 * Global set - Area list
	 */
    public function index(){

    	$area = D("System/Area");

        import('ORG.Util.Page');

        $where = "grade = 1";

        $count = $area->where($where)->count();

        $Page = new Page($count,10);

        $show = $Page->show();

    	$list = $area->field("area_id,grade,path,pid,sort,area_name")->where($where)->order("sort asc")->limit($Page->firstRow.','.$Page->listRows)->select();

        $this->assign('list',$list);

        $this->assign('page',$show);

        $this->display();

    }
    /**
     * Ajax 获取二级或者三级地区
     * @param int grade level
     * @param int id 地区id
     * @return html region 地区列表
     * @author DouShiChao <coolboydsc@163.com>
    */
    public function ajaxarea(){

        if(empty($_POST['area_id']) || empty($_POST['grade'])){
            $this->ajaxReturn(L('param_error'),"error",0);
            exit();
        }

        $area = D("System/Area");

        $list = $area->field("area_id,grade,path,pid,sort,area_name")->where("grade = ".$_POST['grade']." and pid = ".$_POST['area_id'])->order("sort asc")->select();

        $this->ajaxReturn($list,"success",1);

    }
    /**
     * Set Sort
     */
    public function ajaxsort(){
        if(empty($_POST['area_id'])){
            $this->ajaxReturn(L('param_error'),"error",0);
            exit();
        }

        $area = D("System/Area");

        $result = $area->where("area_id = ".$_POST['area_id'])->setField('sort',$_POST['sort']);

        if($result){
            $this->ajaxReturn(L('edit_success'),"success",1);
        }else{
            $this->ajaxReturn(L('edit_error'),"error",0);
        }
    }
    /**
     * Add Area Show
     */
    public function ajaxaddarea(){
        if(empty($_POST['time'])){
            $this->ajaxReturn(L('param_error'),"error",0);
            exit();
        }

        $area = D("System/Area");

        $list = $area->field("area_id,grade,path,pid,sort,area_name")->where("grade = 1 ")->order("sort asc")->select();

        foreach ($list as $key => $value) {
            $list[$key]['list'] = $area->field("area_id,grade,path,pid,sort,area_name")->where("grade = 2 and pid = ".$value['area_id'])->order("sort asc")->select();
        }

        $this->ajaxReturn($list,"success",1);
    }
    /**
     * Add Area
     */
    public function addsave(){

        if(empty($_POST)){
            $this->error(L('param_error'));
        }

        $area = D("System/Area");

        $parent = $area->getAreaById($_POST['pid']);

        $_POST['grade'] = $parent['grade'] + '1';

        if(!$area->create()){
            $this->error($area->getError());
        }

        $result = $area->add();

        if($result){
            $area->where("area_id = ".$result)->setField('path',$parent['path'].",".$result);
            $this->success(L('add_success'),U('area/index'));
        }else{
            $this->error(L('add_error'));
        }
    }
    /**
     * Delete area
     */
    public function ajaxdel(){

        if(empty($_POST['area_id'])){
            $this->ajaxReturn(L('param_error'),"error",0);
            exit();
        }

        $area = D("System/Area");

        $children = $area->where("pid = ".$_POST['area_id'])->count();

        if(false === $children){
            $this->ajaxReturn(L('param_error'),"error",0);
            exit();
        }

        if($children > 0){
            $this->ajaxReturn(L('no_area_delete'),"error",0);
            exit();
        }

        $result = $area->where("area_id = ".$_POST['area_id'])->delete();

        if($result){
            $this->ajaxReturn(L('del_success'),"success",1);
        }else{
            $this->ajaxReturn(L('del_error'),"error",0);
        }
    }
    /**
     * 获得单条地区数据
     * @return array 地区数据
     */
    public function getAreaById(){

        if(empty($_POST['area_id'])){
            $this->ajaxReturn(L('param_error'),"error",0);
            exit();
        }

        $area = D("System/Area");
        // 得到地区通过ID
        $result = $area->getAreaById($_POST['area_id']);

        if(!$result){
            $this->ajaxReturn(L('param_error'),"error",0);
            exit();
        }
        
        $this->ajaxReturn($result,"success",1);
    }
    /**
     * 修改地区
     */
    public function modifysave(){
        if(empty($_POST['area_id'])){
            $this->error(L('param_error'));
            exit();
        }

        $area = D("System/Area");

        if(!$area->create()){
            $this->error($area->getError());
            exit();
        }

        $result = $area->save();

        if($result){
            $this->success(L('edit_success'),U('area/index'));
        }else{
            $this->error(L('edit_error'));
        }
    }
    /**
     * 添加子地区
     */
    public function childrensave(){

        if(empty($_POST['pid'])){
            $this->error(L('param_error'));
            exit();
        }
        $area = D("System/Area");

         $parent = $area->getAreaById($_POST['pid']);

        if(!$parent){
            $this->error(L('param_error'),"error",0);
            exit();
        }

        $_POST['grade'] = $parent['grade'] + '1';

        if(!$area->create()){
            $this->error($area->getError());
            exit();
        }

        $result = $area->add();

        if($result){
            $area->where("area_id = ".$result)->setField('path',$parent['path'].",".$result);
            $this->success(L('add_success'),U('area/index'));
        }else{
            $this->error(L('add_error'));
        }

    }
}