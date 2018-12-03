<?php /* Smarty version 3.1.27, created on 2016-02-24 01:51:48
         compiled from "/home/yogabar/public_html/dev/templates/default/admin/index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:161768736156cd61140c37b7_34983230%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '16769bbf978ac720edb367589f05abd535d9dfc9' => 
    array (
      0 => '/home/yogabar/public_html/dev/templates/default/admin/index.tpl',
      1 => 1442869130,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '161768736156cd61140c37b7_34983230',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56cd61141342a5_83608220',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56cd61141342a5_83608220')) {
function content_56cd61141342a5_83608220 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '161768736156cd61140c37b7_34983230';
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