<?php
define("APP_PATH",dirname(__FILE__));
define("SP_PATH",dirname(__FILE__).'/SpeedPHP');
$spConfig = array(
	"db"=>array(
		'host'=>'localhost',
		'login'=>'root',
		'password'=>'123456',
		'database'=>'chatOnlineDB',
	),
	'view' => array(
		'enabled' => TRUE, 
		'config' =>array(
			'template_dir' => APP_PATH.'/tpl', // ģ���ŵ�Ŀ¼
			'compile_dir' => APP_PATH.'/tmp', // �������ʱĿ¼
			'cache_dir' => APP_PATH.'/tmp', // �������ʱĿ¼
			'left_delimiter' => '<{',  // smarty���޶���
			'right_delimiter' => '}>', // smarty���޶���
		),
	),
);
require(SP_PATH."/SpeedPHP.php");
spRun();