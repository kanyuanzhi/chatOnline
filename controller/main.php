<?php
class main extends spController
{
	function index(){
		$guestbook = spClass("messages");
		$this->result = $guestbook->findAll();
		$this->display("tpl/index.html");
	}
}
