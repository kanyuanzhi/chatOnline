<?php
class number extends spController{
	function show(){
		$num = 3.144;
		echo "ԭ��������$num<br>";
		echo "���ڵ�����".round($num)."<br>";
	}
}
?>