<?php
/*
* 工厂模式:用于解耦
* 根据参数来决定调用哪一个类
*/
class factory{

	public function __construct($class){
		$c = new $class;
	}
}

/*
* 定义A类
*/
class A{
	public function __construct(){
		echo "A被实例化";
	}

}

/*
* 定义B类
*/
class B{
	public function __construct(){
		echo "B被实例化";
	}

}

//实例化A
$A = new factory("A");

//实例化B
$B = new factory("B");
