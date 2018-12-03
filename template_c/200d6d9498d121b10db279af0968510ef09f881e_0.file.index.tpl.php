<?php /* Smarty version 3.1.27, created on 2018-10-27 05:34:54
         compiled from "C:\xampp5\htdocs\yogabar\templates\default\admin\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:253025bd3dcde0bdf25_99140437%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '200d6d9498d121b10db279af0968510ef09f881e' => 
    array (
      0 => 'C:\\xampp5\\htdocs\\yogabar\\templates\\default\\admin\\index.tpl',
      1 => 1442831330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '253025bd3dcde0bdf25_99140437',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5bd3dcde1082b9_76436373',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5bd3dcde1082b9_76436373')) {
function content_5bd3dcde1082b9_76436373 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '253025bd3dcde0bdf25_99140437';
echo $_smarty_tpl->getSubTemplate ("admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<body class="innerbg">
	<?php echo $_smarty_tpl->getSubTemplate ("admin/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

	<div class="container">
	  <!-- Main component for a primary marketing message or call to action -->
	  <div class="col-md-3"></div>
	  <div class="col-md-9 ">  	
	    <div id="animation" class="white-bg-admin">
	    	Welcome to yogabar admin panel
			</div>	   
  	</div>
	</div>
<?php echo $_smarty_tpl->getSubTemplate ("admin/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>