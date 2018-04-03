<?php
//
// git 

class ArrayHelper {

	public $arr;

	function __construct(array $arr) {
		$this->arr = $arr;
	}

	public function myCount()
	{
		$c = 0;
		foreach ($this->arr as $value) {
			$c++;
		}
		return $c;
	}

	public function myMax()
	{
		$max = $this->arr[0];
		$count = $this->myCount($this->arr);
		for ($i=1; $i < $count; $i++) { 
			if ($max < $this->arr[$i]) {
				$max = $this->arr[$i];
			}
		}
		return $max;
	}

	public function myMax2()
	{
		$result = $max = $this->arr[0];
		$count = $this->myCount($this->arr);
		for ($i=1; $i < $count; $i++) { 
			if ($max < $this->arr[$i]) {
				$result = $max;
				$max = $this->arr[$i];
			}
		}
		return $result;
	}

}

$a = [2,4,7,8,3,6,10];

$obj = new ArrayHelper($a);
var_dump($obj->arr);
echo $obj->myMax2();


/**
* 
*/
class Numbers
{
	public function evenNums($z)
	{
		$arr = [];
		for ($i=0; $i < $z; $i+=2) { 
			$arr[]=$i;
		}
		return $arr;
	}

	public function fiboNum($count)
	{
		if ($count < 2) {
			return false;
		}

	    $arr = [0,1]; 
	    for ($i=1;$i<$count-1;$i++){
	        $arr[] = $arr[$i] + $arr[$i-1];
	    }
    	return $arr;
	}

}

// $obj = new Numbers;
// var_dump($obj->fiboNum(20));