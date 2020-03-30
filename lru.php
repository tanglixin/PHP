<?php

/*
* lru算法
*/

class lru{

	private $array_lru = array();
	private $max_size = 0;

	function __construct($size){
		$this->max_size = $size;
	}


	/*
	* 设置值
	*/
	public function set_value($key,$value){
		//key存在则删除
		if (array_key_exists($key, $this->array_lru)) {
			unset($this->array_lru[$key]);
		}

		//超过最大长度
		if(count($this->array_lru)+1 > $this->max_size){
			echo "string";
			array_shift($this->array_lru);
		}

		$this->array_lru[$key] = $value;
	}


	/*
	* 获取值
	*/
	public function get_value($key){
		//key存在则删除
		if (array_key_exists($key, $this->array_lru)) {
			$ret_value = $this->array_lru[$key];
			unset($this->array_lru[$key]);
			$this->array_lru[$key] = $value;
		}

 		return $ret_value;
	}


	/**
	* 打印值
	*/
	public function dump_lru(){
		var_dump($this->array_lru);
	}

}

$lru = new lru(3);

$lru->set_value('cache1','缓存1');
$lru->set_value('cache2','缓存2');
$lru->set_value('cache3','缓存3');
$lru->set_value('cache4','缓存4');
$lru->set_value('cache5','缓存5');
$lru->dump_lru();


