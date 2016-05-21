<?php /* Smarty version Smarty-3.0.8, created on 2016-05-21 14:33:37
         compiled from "tpl/index.html" */ ?>
<?php /*%%SmartyHeaderCode:6973574071c176fbe3-36003432%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aa2339e012cdf7510e1a8ab8504391dca6160e12' => 
    array (
      0 => 'tpl/index.html',
      1 => 1463841212,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6973574071c176fbe3-36003432',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML	4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<title> chatOnline </title>
	<meta	name="Generator" content="EditPlus">
	<meta	name="Author" content="kan">
	<meta	name="Keywords"	content="">
	<meta	name="Description" content="">
	<script type="text/javascript" src="public/jquery-1.12.4.min.js"></script>
	<script type="text/javascript">
		$(function(){
			$("#send").click(function(){
				var con = {
					'name':$("#name").val(),
					'msg':$("#msg").val()
				};
				var html = "";
				$.getJSON(
				'<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'dbOperate','a'=>'write'),$_smarty_tpl);?>
',
				con,
				function(json){
					$.each(json,function(ajsonIndex,ajson){
						html += "<strong>" + ajson['name'] + ":</strong>" + ajson['msg'] + "<br/>";
					});
					$("#display").html("").html(html);
				});
				return false;
			});
		})
	</script>
</head>

<body>
	<div>
		<p id="display"></p>
	</div>
	<form>
		name:<input type="text" id="name"/><br/>
		messages:<input type="text" id="msg" size="50"/><br/>
		<input type="submit" value="send" id="send"/>
	</form>
</body>
</html>
