<?php
if(!defined("Commerz")) exit("Access Denied");
class IndexAction extends CommonAction {
    public function index(){
	$this->display();
    }
    public function home(){
    	$this->display();
    }
}