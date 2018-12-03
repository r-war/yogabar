<?php /* Smarty version 3.1.27, created on 2015-10-25 00:14:51
         compiled from "/home/yogabar/public_html/templates/default/admin/index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:229657538562c654baf8ae9_34190985%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8c1e96e4cd8fee80f2bea926a3c7229aff6c45f6' => 
    array (
      0 => '/home/yogabar/public_html/templates/default/admin/index.tpl',
      1 => 1442869130,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '229657538562c654baf8ae9_34190985',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_562c654bb5b808_67037366',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_562c654bb5b808_67037366')) {
function content_562c654bb5b808_67037366 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '229657538562c654baf8ae9_34190985';
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