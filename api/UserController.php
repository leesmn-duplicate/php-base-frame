<?php
/**
 * Date: 2015年12月4日
 * Author: Awei.tian
 * Description: 
 */
class UserController extends Controller{
	function __construct () {
		parent::__construct(""); //继承其父类的构造函数
	}
	public function actionRegist(){
		echo "api/user/reg";
	}
}