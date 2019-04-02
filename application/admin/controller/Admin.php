<?php
namespace app\admin\controller;

class Admin
{
    public function lst()
    {
    	//第一种方式 助手函数
        return view();
        //第二种方式
        // $view = new \think\View([
        // 	'view_suffix'  => 'htm',
        // ]);
        // return $view->fetch();
    }
    public function add()
    {
        return view();
    }
    public function edit()
    {
        return view();
    }
}
