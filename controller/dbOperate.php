﻿<?php
class dbOperate extends spController{
	
	function write(){
		$messages = spClass("messages");
		$newRow = array(
			'name' => $this->spArgs('name'),
			'msg' => $this->spArgs('msg')
		);
		$messages->create($newRow);
		$result = $messages->findAll();
		echo json_encode($result);
	}
}