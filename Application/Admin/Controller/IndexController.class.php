<?php
/**
 * 演示：后台首页控制器，继承公共控制器
 */
class IndexController  extends CommonController{
	public function index(){
		echo "欢迎访问后台首页！";
	}
}