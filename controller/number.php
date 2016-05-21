<?php
class number extends spController{
	function show(){
		$num = 3.144;
		echo "原来的数字$num<br>";
		echo "现在的数字".round($num)."<br>";
	}
}
?>