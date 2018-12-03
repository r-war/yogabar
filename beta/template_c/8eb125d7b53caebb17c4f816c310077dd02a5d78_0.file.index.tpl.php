<?php /* Smarty version 3.1.27, created on 2015-09-24 10:04:54
         compiled from "/home/yogabar/public_html/beta/templates/default/admin/index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:353437196560411164d7dd1_38946949%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8eb125d7b53caebb17c4f816c310077dd02a5d78' => 
    array (
      0 => '/home/yogabar/public_html/beta/templates/default/admin/index.tpl',
      1 => 1442869130,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '353437196560411164d7dd1_38946949',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5604111654f490_44926998',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5604111654f490_44926998')) {
function content_5604111654f490_44926998 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '353437196560411164d7dd1_38946949';
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