<?php
/**
 * Global set - Area set
 * @author DouShiChao <coolboydsc@163.com>
 */
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
        foreach ($list as $key => $value) {
            $lv2 = $area->where("grade = 2 and pid = ".$value['area_id'])->select();
            foreach ($lv2 as $k => $v) {
                $lv3 = $area->where("grade = 3 and pid = ".$v['area_id'])->select();
                $lv2[$k]['lv3'] = $lv3;
            }
            $list[$key]['lv2'] = $lv2;
        }

        $this->assign('list',$list);

        $this->assign('page',$show);

        $this->display();

    }
    
}