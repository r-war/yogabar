<?php /* Smarty version 3.1.27, created on 2015-09-24 07:18:55
         compiled from "/home/yogabar/public_html/beta/templates/default/index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2250235155603ea2f5bce07_37638880%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4add61e58cda5bb9693132a2fbfadcd7dfb4d7f8' => 
    array (
      0 => '/home/yogabar/public_html/beta/templates/default/index.tpl',
      1 => 1441479015,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2250235155603ea2f5bce07_37638880',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5603ea2f697144_12771465',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5603ea2f697144_12771465')) {
function content_5603ea2f697144_12771465 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2250235155603ea2f5bce07_37638880';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<body class="indexbg">
	<?php echo $_smarty_tpl->getSubTemplate ("nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('navhome'=>"index-nav"), 0);
?>

	<div class="container">
	  <!-- Main component for a primary marketing message or call to action -->
	  <section class="index-text">
	    <h1>Yoga doesn't take time</h1>
	    <h3>it gives time</h3>
	    <div class="soical-media marign-top-2">
	     	<?php echo $_smarty_tpl->getSubTemplate ("social.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

	    </div>
	  </section>
	</div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>