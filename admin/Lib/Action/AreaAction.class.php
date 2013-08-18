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
            $this->ajaxReturn('参数有误！',"error",0);
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
            $this->ajaxReturn('参数有误！',"error",0);
            exit();
        }

        $area = D("System/Area");

        $result = $area->where("area_id = ".$_POST['area_id'])->setField('sort',$_POST['sort']);

        if($result){
            $this->ajaxReturn('修改成功！',"success",1);
        }else{
            $this->ajaxReturn('修改失败！',"error",0);
        }
    }
    /**
     * Add Area Show
     */
    public function ajaxaddarea(){
        if(empty($_POST['time'])){
            $this->ajaxReturn('参数有误！',"error",0);
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
            $this->error('参数有误！');
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
            $this->success('添加成功！',U('area/index'));
        }else{
            $this->error('添加失败！');
        }
    }
    /**
     * Delete area
     */
    public function ajaxdel(){

        if(empty($_POST['area_id'])){
            $this->ajaxReturn('参数有误！',"error",0);
            exit();
        }

        $area = D("System/Area");

        $children = $area->where("pid = ".$_POST['area_id'])->count();

        if(false === $children){
            $this->ajaxReturn('参数有误！',"error",0);
            exit();
        }

        if($children > 0){
            $this->ajaxReturn('该地区有下级地区，不能删除！',"error",0);
            exit();
        }

        $result = $area->where("area_id = ".$_POST['area_id'])->delete();

        if($result){
            $this->ajaxReturn('删除成功！',"success",1);
        }else{
            $this->ajaxReturn('删除失败！',"error",0);
        }
    }
    /**
     * 获得单条地区数据
     * @return array 地区数据
     */
    public function getAreaById(){

        if(empty($_POST['area_id'])){
            $this->ajaxReturn('参数有误！',"error",0);
            exit();
        }

        $area = D("System/Area");
        // 得到地区通过ID
        $result = $area->getAreaById($_POST['area_id']);

        if(!$result){
            $this->ajaxReturn('参数有误！',"error",0);
            exit();
        }
        
        $this->ajaxReturn($result,"success",1);
    }
    /**
     * 修改地区
     */
    public function modifysave(){
        if(empty($_POST['area_id'])){
            $this->error('参数有误！');
            exit();
        }

        $area = D("System/Area");

        if(!$area->create()){
            $this->error($area->getError());
            exit();
        }

        $result = $area->save();

        if($result){
            $this->success("修改成功！",U('area/index'));
        }else{
            $this->error("请修改之后在保存！");
        }
    }
    /**
     * 添加子地区
     */
    public function childrensave(){

        if(empty($_POST['pid'])){
            $this->error('参数有误！');
            exit();
        }
        $area = D("System/Area");

         $parent = $area->getAreaById($_POST['pid']);

        if(!$parent){
            $this->error('参数有误！',"error",0);
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
            $this->success('添加成功！',U('area/index'));
        }else{
            $this->error('添加失败！');
        }

    }
}