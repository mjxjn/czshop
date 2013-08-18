<?php
class AreaModel extends CommonModel{

	protected $_validate = array(
		array('area_name','require','地区名称不能为空！'),
		array('sort','require','排序不能为空！'),

		array('sort','/^\d{1,4}$/','排序必须为4位以内的数字！'),
	);

	protected $_scope = array(
		'getone'=>array('field'=>'area_id,pid,path,area_name,grade,sort'),
		'parent'=>array('field'=>'area_name'),
	);
	/**
	 * get one area by area_id
	 * @param  int $area_id area_id
	 * @return array area
	 */
	function getAreaById($area_id){

		$area = $this->scope("getone")->where('area_id = '.$area_id)->find();

		if($area){
			if($area['pid'] == 0){
				
				$area['parent_name'] = "无上级地区";
			}else{
				$parent = $this->scope("parent")->where("area_id = ".$area['pid'])->find();

				$area['parent_name'] = $parent['area_name'];
			}
			
		}

		return $area;
	}
}