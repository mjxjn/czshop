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

    	$area = M("Area");

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
     * Ajax get level 2 and level 3 region List
     * @param int grade level
     * @param int id get region list of parent id
     * @return html region List
     * @author DouShiChao <coolboydsc@163.com>
    */
    public function ajaxarea(){

        if(empty($_POST['area_id']) || empty($_POST['grade'])){
            $this->ajaxReturn('参数有误！',"error",0);
            exit();
        }

        $area = M("Area");

        $list = $area->field("area_id,grade,path,pid,sort,area_name")->where("grade = ".$_POST['grade']." and pid = ".$_POST['area_id'])->order("sort asc")->select();

        $this->ajaxReturn($list,"success",1);

    }

    public function ajaxsort(){
        if(empty($_POST['area_id'])){
            $this->ajaxReturn('参数有误！',"error",0);
            exit();
        }

        $area = M("Area");

        $result = $area->where("area_id = ".$_POST['area_id'])->setField('sort',$_POST['sort']);

        if($result){
            $this->ajaxReturn('修改成功！',"success",1);
        }else{
            $this->ajaxReturn('修改失败！',"error",0);
        }
    }

    public function ajaxaddarea(){
        if(empty($_POST['time'])){
            $this->ajaxReturn('参数有误！',"error",0);
            exit();
        }

        $area = M("Area");

        $list = $area->field("area_id,grade,path,pid,sort,area_name")->where("grade = 1 ")->order("sort asc")->select();

        foreach ($list as $key => $value) {
            $list[$key]['list'] = $area->field("area_id,grade,path,pid,sort,area_name")->where("grade = 2 and pid = ".$value['area_id'])->order("sort asc")->select();
        }

        $this->ajaxReturn($list,"success",1);
    }

    public function addsave(){

        if(empty($_POST)){
            $this->error('参数有误！');
        }

        $area = M("Area");

        $parent = $area->field("path,grade")->where('area_id = '.$_POST['pid'])->find();

        $_POST['grade'] = $parent['grade'] + '1';

        if(!$area->create()){
            $this->error($area->getError());
        }

        $result = $area->add();

        if($result){
            $area->where("area_id = ".$result)->setField('path',$parent['path'].",".$result);
            $this->error('添加成功！');
        }else{
            $this->error('添加失败！');
        }
    }
    
}