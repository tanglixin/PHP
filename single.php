<?php
/*
* 单例模式:作为对象的创建模式,单例模式确保某一个类只有一个实例,并且对外提供这个全局实例的访问入口
* 1. 需要一个保存类的唯一实例的静态成员变量。
* 2. 构造函数和克隆函数必须声明为私有的，防止外部程序创建或复制实例副本。
* 3. 必须提供一个访问这个实例的公共静态方法，从而返回唯一实例的一个引用。
*/

class Instance{
	//定义静态变量
	public static $instance;

	//定义私有构造方法
	private function __contruct(){

	}
	
	//定义私有克隆方法
	private function __clone(){
	
	}

	//单例方法
	public static function getInstance(){
		if(!self::$instance){
			echo "一个单例方法";
			self::$instance = new self();
		}
	
		return self::$instance;
	}
}


Instance::getInstance();
Instance::getInstance();