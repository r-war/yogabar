<?php /* Smarty version 3.1.27, created on 2015-10-25 00:41:20
         compiled from "/home/yogabar/public_html/templates/default/index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:786592713562c6b807a8280_45937938%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd5f0482c24fb9713e2b3ee8c194f26c739c99708' => 
    array (
      0 => '/home/yogabar/public_html/templates/default/index.tpl',
      1 => 1445751675,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '786592713562c6b807a8280_45937938',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_562c6b808b4ba6_09731220',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_562c6b808b4ba6_09731220')) {
function content_562c6b808b4ba6_09731220 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '786592713562c6b807a8280_45937938';
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
?>

<p style="font-size:5px"; align="right"><font color="white"> Design and Developed by <a href="http://systimanx.com">SystimaNX </a></font></p><?php }
}
?>